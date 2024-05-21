<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;

class LoginCtrl {

    private $form;

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
				"email" => $this->form->login,
				"password" => $this->form->pass,
			]);
		} catch (PDOException $e) {
			Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
			if (App::getConf()->debug)  Utils::addErrorMessage($e->getMessage());
		}
    }
    public function action_loginShow() {
        $this->generateView();
    }

    public function action_login() {
        if ($this->validate()) {
            //zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
            Utils::addErrorMessage('Poprawnie zalogowano do systemu');
            //App::getRoute->
        } else {
            //niezalogowany => pozostań na stronie logowania
            $this->generateView();
        }
    }

    public function action_logout() {
        // 1. zakończenie sesji
        session_destroy();

    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('LoginView.tpl');
    }

}
?>