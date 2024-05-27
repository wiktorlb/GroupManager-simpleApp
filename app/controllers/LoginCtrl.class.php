<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;
use app\transfer\User;
use PDOException;


class LoginCtrl {

    private $form;
	private $records;

    public function __construct() {
       $this->form = new LoginForm();
    }

    public function validate() {
		$this->form->login = ParamUtils::getFromRequest('login');
		$this->form->pass = ParamUtils::getFromRequest('pass');


		if (!isset($this->form->login)) return false;
		if (empty($this->form->login)) {
			Utils::addErrorMessage('Nie podano loginu');
		}
		if (empty($this->form->pass)) {
			Utils::addErrorMessage('Nie podano hasła');
		}



		if (App::getMessages()->isError()) return false;

		try {
			$this->records = App::getDB()->get("user", "*", [
				"name" => $this->form->login,
				"last_name" => $this->form->pass,
			]);
		} catch (PDOException $e) {
			Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
			if (App::getConf()->debug)  Utils::addErrorMessage($e->getMessage());
		}
		if (empty($this->records)) {
			Utils::addErrorMessage('Niepoprawny login lub hasło');
		} else {
			$role = App::getDB()->get(
				"role",
				"name",
				["id_role" => App::getDB()->get("user_has_role", 'Role_id_role', ['User_id_user' => $this->records["id_user"]])]
			);


			RoleUtils::addRole($role);
			$user = new User($this->form->login, $role);
			$_SESSION['user'] = serialize($user);

			App::getDB()->update("role", [
				"last_used" => date('Y-m-d H:i:s')

			], [
				"id_role" =>  App::getDB()->get("user_has_role", 'Role_id_role', ['User_id_user' => $this->records["id_user"]])
			]);
		}
    }
    public function action_loginShow() {
        $this->generateView();
    }

    public function action_login() {
		if ($this->validate()) {
			App::getRouter()->redirectTo("MainPage");
		} else {
			App::getRouter()->redirectTo("MainPage");

			$this->generateView();
		}
	}

    public function action_logout() {
        // 1. zakończenie sesji
        session_destroy();

        App::getRouter()->redirectTo("LoginShow");
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('LoginView.tpl');
    }

}
?>