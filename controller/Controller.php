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

    public function __construct()
    {
        $this->loader = Loader::getInstance();
    }

    protected function matchEmail($var,$fieldName){
      
        if (!filter_var($var, FILTER_VALIDATE_EMAIL)){
           
            $this->messageForField("Ingegeven email is incorrect", "danger",$fieldName);
            
        }
    }
    protected function matchLetters($var, $fieldName)
    {
        if (! preg_match('/^[a-z A-Z]*$/', $var)) {
            
            $this->messageForField("Gelieve text-waarde in te vullen", "danger",$fieldName);
        }
    }


    protected function matchDigits($var, $fieldName){
       
        if (! preg_match('/^\b([1-9]+)0*\b$/', $var)) {
           
                $this->messageForField("Gelieve cijfers in te vullen", "danger",$fieldName);
         
        }
    }

    protected function messageForField($message, $type, $fieldName)
    {
        if (isset($fieldName)) {
            $_GET[$fieldName]['message'] = $message;
            $_GET['type'] = $type;
        }
        $_GET['error'] = 1;
    }

    protected function message($message, $type, $view = null)
    {
        if($view == null){
            $_GET['error'] = 1;
            $_GET['message'] = $message;
            $_GET['type'] = $type;
            include('view/home.php');
            die();
        }else{
        $_GET['error'] = 1;
        $_GET['message'] = $message;
        $_GET['type'] = $type;
        include ('view/' . $view);
        die();
    }
    }
   
}