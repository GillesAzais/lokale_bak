<?php
/**
 * Created by PhpStorm.
 * User: gilles.azais
 * Date: 1/25/2016
 * Time: 2:04 PM
 */

class BestelController extends Controller{

    private $productMapper;
    private $bestellingMapper;
    private $bestellingLijnMapper;
    private $klantenMapper;

    public function __construct()
    {
        parent::__construct();
        $this->klantenMapper = $this->loader->getModelMapper('Klant');
        $this->productMapper = $this->loader->getModelMapper('Product');
        $this->bestellingMapper = $this->loader->getModelMapper('Bestelling');
        $this->bestellingLijnMapper = $this->loader->getModelMapper('Bestellingslijn');

    }

    public function index(){
        $products = $this->productMapper->getAll();

        include('view/bestel.php');
    }

    public function bestelling(){
        $this->bestellingMapper->add(new Bestelling($_SESSION['email'],$date=date('Y-m-d'),null,"besteld"));

        foreach ($_POST['besetllingsLijn'] as $key => $bestellingsLijn) {

          $this->bestellingLijnMapper->add(new BestellingsLijn($this->bestellingMapper->getBestellingsIdForEmail($_SESSION['email'],$date),$key,$bestellingsLijn['aantal']));
    }
        include('view/confirm.php');
}



}