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
                $klant = new Klant($_POST['email'], $_POST['naam'], $_POST['voornaam'], $_POST['straat'],
                    $_POST['straat'], $_POST['huisnr'], $_POST['postcode'], $_POST['woonplaats']);
                $_GET['pass'] = ($klant->getStrPasswoord());
                $klant->encryptPass();
                $this->klantenMapper->add($klant);
                $klant = null;
                include('view/confirm.php');
            }else{
                include('view/error.php');
            }
        }

        public function registerValidation(){
            $bool = null;
            if(empty($_POST['email']) || empty($_POST['naam']) || empty($_POST['voornaam']) || empty($_POST['straat']) || empty($_POST['huisnr']) || empty($_POST['postcode']) || empty($_POST['woonplaats'])){
                $this->error('Gelieven alle velden in te vullen');
                $bool = false;
            }else{
                if(strlen($_POST['email']) > 30 || strlen($_POST['naam']) > 20 || strlen($_POST['voornaam']) > 20 || strlen($_POST['straat']) > 50 || strlen($_POST['postcode']) > 4 || strlen($_POST['woonplaats']) > 50){
                    $this->error('Gelieven de maximale lengte van uw velden te respecteren');
                    $bool = false;
                }else{
                    $bool = true;
                }
            }
            return $bool;
        }
    }