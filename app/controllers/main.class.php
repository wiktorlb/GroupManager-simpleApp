<?php
    namespace app\controllers;

    use core\App;
    use core\Utils;

    class main {

        public function action_MainPage() {
            $this->generateView();
        }

        public function generateView() {
             if(isset($_SESSION['user'])) {
                App::getSmarty()->assign('user', unserialize($_SESSION['user']));
            }

            App::getSmarty()->display('main.tpl');
        }
    }