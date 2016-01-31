<?php

    /**
     * Created by PhpStorm.
     * User: gilles.azais
     * Date: 1/26/2016
     * Time: 11:19 AM
     */
    class loginController extends Controller{
        private $klantMapper;

        public function __construct(){
            parent::__construct();
            $this->klantMapper = $this->loader->getModelMapper('Klant');
        }

        public function login(){
            if($this->checkLogin() && $klant = $this->userExists()){
                $_SESSION['loggedIn'] = true;
                $_SESSION['email'] = $_POST['email'];
                header('location:' . baseUrl('home/index'));
            }else{
                include('view/error.php');
            }
        }

        public function checkLogin(){
            $bool = false;
            if(!isset($_POST['email']) || !isset($_POST['pass'])){
                $this->error('Gelievan alle velde in te vullen');
            }else{
                $bool = true;
            }
            return $bool;
        }

        public function userExists(){
            if(!$klant = $this->klantMapper->get($_POST['email'])){
                ;
                $this->error('Email en/of passwoord is niet correct');
            }
            return $klant;
        }
    }