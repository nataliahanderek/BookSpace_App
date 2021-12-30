<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function login()
    {
        $this->render('login');
    }

    public function registration()
    {
        $this->render('registration');
    }

    public function mybookshelf()
    {
        $this->render('mybookshelf');
    }

    public function bookforbook()
    {
        $this->render('bookforbook');
    }

    public function bookprofile()
    {
        $this->render('bookprofile');
    }

    public function myprofile()
    {
        $this->render('myprofile');
    }
}