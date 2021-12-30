<?php

require 'Routing.php';
 
$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('login', 'DefaultController');
Routing::get('registration', 'DefaultController');
Routing::get('mybookshelf', 'DefaultController');
Routing::get('bookforbook', 'DefaultController');
Routing::get('bookprofile', 'DefaultController');
Routing::get('myprofile', 'DefaultController');
Routing::get('allbooks', 'DefaultController');

Routing::run($path);