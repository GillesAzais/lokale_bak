<?php

/**
 * Created by PhpStorm.
 * User: gilles.azais
 * Date: 1/25/2016
 * Time: 2:05 PM
 */
class RegisterController extends Controller
{

    private $klantenMapper;

    public function __construct()
    {
        parent::__construct();
        $this->klantenMapper = $this->loader->getModelMapper('klant');
    }

    public function index()
    {
        include ('view/register.php');
    }

    public function register()
    {
        if ($this->registerValidation()) {
            foreach ($_POST as $key => $value) {
                foreach ($value as $valueKey => $valueValue) {
                    $_POST[$valueKey] = $valueValue;
                }
            }
            $klant = new Klant($_POST['email'], $_POST['naam'], $_POST['voornaam'], $_POST['straat'], $_POST['huisnr'], $_POST['postcode'], $_POST['woonplaats'], $_POST['naam'], false);
            $klant->generatePassword();
            $pass = $klant->getStrPasswoord();
            $klant->encryptPass();
            $this->klantenMapper->add($klant);
            $klant = null;
            $this->message("Great succes! Uw password is: " . $pass, "succes", "message.php");
        } else {
            $_GET['message'][] = 'Er is een fout gebeurt bij het inloggen gelieven contact op te nemen met de admin';
            $this->message("'Er is een fout gebeurt bij het inloggen gelieven contact op te nemen met de admin", "danger");
        }
    }

    public function registerValidation()
    {
        foreach ($_POST['text'] as $key => $value) {
            if (empty($value)) {
                $this->message('Gelieven alle velden in te vullen', 'danger', 'register.php');
            } else {
                $this->matchLetters($value, $key);
            }
        }
        foreach ($_POST['digits'] as $key => $value) {
            if (empty($value)) {
                $this->message('Gelieven alle velden in te vullen', 'danger', 'register.php');
            } else {
                $this->matchDigits($value, $key);
            }
        }
        foreach ($_POST['any'] as $key => $value) {
            if (empty($value)) {
                $this->message('Gelieven alle velden in te vullen', 'danger', 'register.php');
            }
        }
        foreach ($_POST['email'] as $key => $value) {
            if (empty($value)) {
                $this->message('Gelieven alle velden in te vullen', 'danger', 'register.php');
            } else {
                $this->matchEmail($value, $key);
            }
        }
         
        
        if (strlen($_POST['email']['email']) > 30 || strlen($_POST['text']['naam']) > 20 || strlen($_POST['text']['voornaam']) > 20 || strlen($_POST['text']['straat']) > 50 || strlen($_POST['digits']['postcode']) > 4 || strlen($_POST['text']['woonplaats']) > 50 || strlen($_POST['any']['huisnr'])>3 ) {
            $this->message('Gelieven de maximale lengte van uw velden te respecteren', 'danger', 'register.php');
        }
        if ($this->klantenMapper->get($_POST['email']['email'])) {
            
       
            $this->message('Dit email bestaat al', 'danger', 'register.php', 'email');
        } 
        if (isset($_GET['error'])) {
            include ('view/register.php');
            die();
        }  
        return true;
    }         

}

    