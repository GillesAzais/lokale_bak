<?php

/**
 * Created by PhpStorm.
 * User: gilles.azais
 * Date: 1/25/2016
 * Time: 2:08 PM
 */
class Controller
{

protected function error($message){
    $_POST['Errors'][] = $message;
}

}