<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('MainPage');
App::getRouter()->setLoginRoute('login');

Utils::addRoute('MainPage', 'main');

Utils::addRoute('loginShow', 'LoginCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
//Utils::addRoute('action_name', 'controller_class_name');