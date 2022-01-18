<?php

require 'Routing.php';
 
$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
/*Routing::get('registration', 'DefaultController');*/
Routing::get('mybookshelf', 'DefaultController');
Routing::get('bookforbook', 'BookshelfController');
Routing::get('bookprofile', 'DefaultController');
Routing::get('myprofile', 'DefaultController');
Routing::get('logOut', 'SecurityController');
/*Routing::get('allbooks', 'BookshelfController');*/

Routing::post('login', 'SecurityController');
Routing::post('registration', 'SecurityController');
Routing::post('allbooks', 'BookshelfController');
Routing::post('search', 'BookshelfController');


Routing::run($path);