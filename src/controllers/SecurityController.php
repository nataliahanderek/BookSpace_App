<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';

class SecurityController extends AppController
{
    private $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }

    public function login() {

        if (!$this->isPost()) {
            return $this->render('login');
        }

        $login = $_POST['user-login'];
        $password = $_POST['password'];

        $user = $this->userRepository->getUser($login);

        if(!$user) {
            return $this->render('login', ['messages' => ['User does not exist']]);
        }

        if ($user->getLogin() !== $login) {
            return $this->render('login', ['messages' => ['Login does not exist']]);
        }

        if(!password_verify($password, $user->getPassword())) {
            return $this->render('login', ['messages' => ['Incorrect password']]);
        }

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/mybookshelf");
    }

    public function registration() {

        if (!$this->isPost()) {
            return $this->render('registration');
        }

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $login = $_POST['user-login'];
        $password = $_POST['password'];
        $repeatPassword = $_POST['repeat-password'];

        if($password !== $repeatPassword) {
            return $this->render('registration', ['messages' => ['Please provide proper password']]);
        }

        $user = new User($name, $surname, $email, $login, password_hash($password, PASSWORD_DEFAULT), $name, $surname);
        $this->userRepository->addUser($user);

        return $this->render('login', ['messages' => ['You\'ve been succesfully registrated!']]);
    }

    public function logOut() {
        setcookie('Cookie', "", time() - 10);
        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/login");
    }
}