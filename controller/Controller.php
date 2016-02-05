<?php

    /**
     * Created by PhpStorm.
     * User: gilles.azais
     * Date: 1/25/2016
     * Time: 2:08 PM
     */
    class Controller{
        protected $loader;

        public function __construct(){
            $this->loader = Loader::getInstance();
        }

        protected function matchLetters($var){
            if(!preg_match('/^[a-z A-Z]*$/',$var)){
           $this->message("Gelieve de correcte waarde in te vullen");
             }
        }
        
        protected function matchDigits($var){
            if(!preg_match('/^\b([1-9]+)0*\b$/',$var)){
               $this->message("Gelieve de correcte waarde in te vullen");
            }
        }
        
        protected function message($message){
            $_GET['message'] = $message;
            include('view/message.php');
            die();
        }
    }