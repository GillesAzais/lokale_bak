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
      
              if($this->checkLogin()){
                if($klant = $this->userExists()){
                    if($this->checkPass($klant)){
                        $_SESSION['loggedIn'] = true;
                        $_SESSION['email'] = $_POST['email'];
                                                
                        redirect('home/index');
                       
                    }else{
                       $this->message('Passwoord verkeerd');
                    }
                 
                }
                
            }else{
              $this->message('Gelieve alles velden in te vullen');
            }
          
           
        }

        public function checkPass($klant){
       
            return $klant->getStrPasswoord() == sha1($_POST['pass']);

        }

        public function checkLogin(){
            $bool = false;
            if(empty($_POST['email']) || empty($_POST['pass'])){
               $bool = false;
            }else{
                $bool = true;
            }
            return $bool;
        }

        public function userExists(){
            if(!$klant = $this->klantMapper->get($_POST['email'])){
                $_GET['message'] = 'Email en/of passwoord is niet correct';
            }else{
                return $klant;
            }

        }

        public function logout(){
            unset($_SESSION['email']);
            $_SESSION['loggedIn'] = false;

            redirect('home/index');
        }
    }