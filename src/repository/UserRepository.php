<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/User.php';

class UserRepository extends Repository
{
    public function getUser(string $login): ?User {
        $stmt = $this->database->connect()->prepare('
                                            SELECT * FROM users WHERE login = :login
                                            ');

        $stmt->bindParam(':login', $login, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        $cookieName= 'Cookie';
        $cookieValue = $login;
        setcookie($cookieName, $cookieValue, time() + (3600 * 24 * 10), "/");

        $user2= new User(
            $user['name'],
            $user['surname'],
            $user['email'],
            $user['login'],
            $user['password']
        );
        $user2->setId($user['users_id']);
         return $user2;
    }

    public function addUser(User $user) {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO users (name, surname, email, login, password) VALUES (?,?,?,?,?)
        ');

        $stmt->execute([
            $user->getName(),
            $user->getSurname(),
            $user->getEmail(),
            $user->getLogin(),
            $user->getPassword(),
        ]);
    }
    public function getLoggedUserId():int{
        $login = $_COOKIE['Cookie'];
        $stmt = $this->database->connect()->prepare('
                                            SELECT users_id FROM users WHERE login = :login
                                            ');

        $stmt->bindParam(':login', $login, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchColumn(PDO::FETCH_ASSOC);
    }
}