<?php
/**
 * Created by PhpStorm.
 * User: gilles.azais
 * Date: 1/25/2016
 * Time: 2:28 PM
 */
define('APPLICATION_PATH', "model" );
require('controller/Controller.php');
require('controller/Loader.php');
require('controller/FrontController.php');

$frontcontroller = new FrontController();
$frontcontroller->run();