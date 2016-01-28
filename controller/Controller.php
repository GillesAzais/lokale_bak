<?php

/**
 * Created by PhpStorm.
 * User: gilles.azais
 * Date: 1/25/2016
 * Time: 2:08 PM
 */
class Controller
{

    protected $loader;

    public function __construct(){
        $this->loader = Loader::getInstance();


    }
protected function error($message){
    $_POST['Errors'][] = $message;
}

}