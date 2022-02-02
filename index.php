<?php

require 'Routing.php';
 
$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('bookforbook', 'BookshelfController');
/*Routing::get('bookprofile', 'DefaultController');*/
Routing::get('logOut', 'SecurityController');
Routing::get('notifications', 'DefaultController');

Routing::post('login', 'SecurityController');
Routing::post('registration', 'SecurityController');
Routing::post('allbooks', 'BookshelfController');
Routing::post('mybookshelf', 'BookshelfController');
Routing::post('myprofile', 'BookshelfController');
Routing::post('search', 'BookshelfController');
Routing::post('bookprofile', 'BookshelfController');
Routing::get('addbook', 'BookshelfController');

Routing::run($path);