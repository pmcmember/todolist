<?php
define('DSN', 'mysal:host=db;dbname=myapp;charset=utf8mb4');
define('DB_USER','myqppuser');
define('DB_PASS','myqpppass');
define('SITE_URL', 'http://' . $_SERVER['HTTP_HOST']);


require_once(__DIR__ . '/functions.php');