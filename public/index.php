<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//require_once('../app/core/Router.php');

require_once(__DIR__ . '/../app/core/functions.php');

require_once(__DIR__ . "/../vendor/autoload.php");

use App\Core\Router;

// Obtém a URL que foi passada pelo .htaccess
//$url = isset($_GET['url']) ? '/' . $_GET['url'] : '/';

//$url = $_SERVER['REQUEST_URI'];

//$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


$url = $_GET['url'] ?? '';
//echo('Hello World!!!<br><br><pre>');

//var_dump($url);
//var_dump($_GET);
// https://sasteamofficial.com/assets/services/modelo_mvc/noticias-global?id=usa

$router = new Router();
$router->dispatch($url);