<?php
/**
 * Created by PhpStorm.
 * User: gilles.azais
 * Date: 1/25/2016
 * Time: 2:05 PM
 */

class RegisterConctroller extends Controller{

    private $klantenMapper;
    public function __construct()
    {
        $this->klantenMapper = new KlantenMapper();
    }

    public function index(){
        include('view/register.php');
    }

    public function registerValidation(){

        $bool = null;
        if(!isset ($_POST['email']) || !isset($_POST['naam']) || !isset($_POST['voornaam']) || !isset($_POST['straat']) ||
            !isset($_POST['huisnr'])|| !isset($_POST['postcode']) || !isset($_POST['woonplaats'])) {
            $this->error('Gelieven alle velden in te vullen');
           $bool = false;
        }else if($_POST['email'] > 30 || $_POST['naam'] > 20 || $_POST['voornaam'] > 20 || $_POST['straat'] > 50 || $_POST['postcode'] > 4 || $_POST['woonplaats'] > 50 ){
            $this->error('Gelieven de maximale lengte van uw velden te respecteren');
            $bool = false;
        }else{
            $bool = true;
        }
        return $bool;

}
    public function register(){
        if($this->registerValidation()){
            $klant = new Klant($_POST['email'],$_POST['naam'],$_POST['voornaam'],$_POST['straat'],$_POST['straat'],$_POST['huisnr'],$_POST['postcode'],$_POST['woonplaats']);
            $this->klantenMapper->add()
        }
    }
}