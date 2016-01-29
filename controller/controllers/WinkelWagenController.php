<?php
/**
 * Created by PhpStorm.
 * User: gilles.azais
 * Date: 1/25/2016
 * Time: 2:04 PM
 */

class WinkelWagenConctroller extends Controller{

    public function index(){
        $gekozenProducten = $_COOKIE['producten'];
        include('view/winkelWagen.php');
    }

    public function bestel(){
        $bestelling = new Bestelling($_SESSION['email'],$date=date('Y-m-d'),null,"besteld");

        $this->bestellingMapper->add($bestelling);
        /*  foreach ($_POST['besetllingsLijn'] as $key => $bestellingsLijn) {

          $this->bestellingLijnMapper->add(new BestellingsLijn($this->bestellingMapper->getBestellingsIdForEmail($_SESSION['email'],$date),$key,$bestellingsLijn['aantal']));
    }*/
    }
}