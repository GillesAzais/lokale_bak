<?php
/**
 * Created by PhpStorm.
 * User: gilles.azais
 * Date: 1/25/2016
 * Time: 2:28 PM
 */
define('APPLICATION_PATH', "model" );
require('routeHelper.php');
require('view/_partials/partialFunctions.php');
require('controller/Loader.php');
require('controller/FrontController.php');
require('controller/Controller.php');
require('controller/Mapper.php');
require('controller/db.php');
require('model/entities/Entity.php');
/*require('controller/controllers/BestelController.php');
require('controller/Controllers/RegisterController.php');
require('controller/Controllers/ContactController.php');
require('controller/Controllers/HomeController.php');
require('controller/Controllers/LoginController.php');
require('controller/Controllers/OverOnsController.php');
require('controller/Controllers/WinkelWagenController.php');*/

function pr($var){
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}
setcookie('producten');
session_start();
$frontcontroller = new FrontController();
$frontcontroller->run();