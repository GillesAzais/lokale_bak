<?php

    /**
     * Created by PhpStorm.
     * User: gilles.azais
     * Date: 1/25/2016
     * Time: 2:05 PM
     */
    class RegisterController extends Controller{
        private $klantenMapper;

        public function __construct(){
            parent::__construct();
            $this->klantenMapper = $this->loader->getModelMapper('klant');
        }

        public function index(){
            include('view/register.php');
        }

        public function register(){
            if($this->registerValidation()){
                $klant = new Klant($_POST['email'], $_POST['naam'], $_POST['voornaam'], $_POST['straat'], $_POST['huisnr'],
                    $_POST['postcode'], $_POST['woonplaats'],$_POST['naam'],false);
                $klant->generatePassword();
                $_GET['pass'] = $klant->getStrPasswoord();
                $klant->encryptPass();
                $this->klantenMapper->add($klant);
                $klant = null;
                include('view/confirm.php');
            }else{
                $_GET['message']='Er is een fout gebeurt bij het inloggen gelieven contact op te nemen met de admin';
                include('view/message.php');
            }
        }

        public function registerValidation(){
            $bool = null;
            if(empty($_POST['email']) || empty($_POST['naam']) || empty($_POST['voornaam']) || empty($_POST['straat']) || empty($_POST['huisnr']) || empty($_POST['postcode']) || empty($_POST['woonplaats'])){
                 $_GET['message']='Gelieven alle velden in te vullen';
                include('view/message.php');
                $bool = false;
            }else{
                $this->matchLetters($_POST['naam']);
                $this->matchLetters($_POST['voornaam']);
                $this->matchLetters($_POST['straat']);
                $this->matchLetters($_POST['woonplaats']);
                $this->matchDigits($_POST['postcode']);
                if(strlen($_POST['email']) > 30 || strlen($_POST['naam']) > 20 || strlen($_POST['voornaam']) > 20 || strlen($_POST['straat']) > 50 || strlen($_POST['postcode']) > 4 || strlen($_POST['woonplaats']) > 50){
                    $_GET['message']='Gelieven de maximale lengte van uw velden te respecteren';
                    include('view/message.php');
                    $bool = false;
                }else{
                    $bool = true;
                }
            }
            return $bool;
        }
    }