<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';

class SecurityController extends AppController
{
    public function login() {
/*        $user = new User('Natalia', 'Handerek', 'nh@gmail.com', 'lentilka', '123');*/

        $userRepository = new UserRepository();

        if (!$this->isPost()) {
            return $this->login('login');
        }

        $login = $_POST["user-login"];
        $password = $_POST["password"];

        $user = $userRepository->getUser($login);

        if(!$user) {
            return $this->render('login', ['messages' => ['User does not exist']]);
        }

        if ($user->getLogin() !== $login) {
            return $this->render('login', ['messages' => ['Login does not exist']]);
        }

        if ($user->getPassword() !== $password) {
            return $this->render('login', ['messages' => ['Incorrect password']]);
        }

        //return $this->render('mybookshelf');
        //to ---^ inny sposob tego -->

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/mybookshelf");
    }
}