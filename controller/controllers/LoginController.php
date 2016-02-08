<?php

/**
 * Created by PhpStorm.
 * User: gilles.azais
 * Date: 1/26/2016
 * Time: 11:19 AM
 */
class loginController extends Controller
{

    private $klantMapper;

    public function __construct()
    {
        parent::__construct();
        $this->klantMapper = $this->loader->getModelMapper('Klant');
    }

    public function login()
    {
        $this->checkLogin();
        $klant = $this->userExists();
        if ($this->checkPass($klant)) {
            $_SESSION['loggedIn'] = true;
            $_SESSION['email'] = $_POST['email'];
            redirect('home/index');
        }
    }

    public function checkPass($klant)
    {
        return $klant->getStrPasswoord() == sha1($_POST['pass']);
    }

    public function checkLogin()
    {
        if (empty($_POST['email']) || empty($_POST['pass'])) {
            $this->message("ERROR: Gebruikersnaam of passwoord is leeg", "danger");
        }
    }

    public function userExists()
    {
        if (! $klant = $this->klantMapper->get($_POST['email'])) {
          
            $this->message("ERROR: 'Email en/of passwoord is niet correct'", "danger");
        } else {
            return $klant;
        }
    }

    public function logout()
    {
        unset($_SESSION['email']);
        $_SESSION['loggedIn'] = false;
        
        redirect('home/index');
    }
}