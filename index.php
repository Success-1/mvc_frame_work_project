<?php

session_start();

define('APP_ROOT', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR); 
define('ROOT', 'mvc_crash');
define('SITE_TITLE', 'my portfolio');
define('DESCRIPTION', 'lorem100');
define('FAVICON', 'assets/img/icons/logos/favicon1.png');



require_once "core". DS ."init.php";



// $url = $_GET['url']
// $url = explode("/", $_GET['url']);
// show($_GET);
// show($url);
// show(splitURL()); 


$app = new App;
$app->loadController();





