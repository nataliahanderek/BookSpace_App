<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';

class SecurityController extends AppController
{
    public function login() {
        $user = new User('Natalia', 'Handerek', 'nh@gmail.com', 'lentilka', '123');

        //WYWALA BLAD :(
        //if ($this->isPost()) {
          //  return $this->login('login');
        //}

        $login = $_POST["user-login"];
        $password = $_POST["password"];

        if ($user->getLogin() !== $login) {
            return $this->render('login', ['messages' => ['Login does not exist']]);
        }

        if ($user->getPassword() !== $password) {
            return $this->render('login', ['messages' => ['Incorrect password']]);
        }

        //return $this->render('mybookshelf');

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/mybookshelf");
    }
}