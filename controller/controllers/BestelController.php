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

    public function voegToeAanWinkelwagen(){


          foreach ($_POST['besetllingsLijn'] as $key=>$bestellingsLijn) {
              $_COOKIE['producten'][$key]['id']=$bestellingsLijn['id'];
              $_COOKIE['producten'][$key]['naam']=$bestellingsLijn['naam'];
              $_COOKIE['producten'][$key]['aantal']=$bestellingsLijn['aantal'];
              $_COOKIE['producten'][$key]['prijs']=$bestellingsLijn['prijs'];
              $_COOKIE['producten'][$key]['totaalPrijs']=intval($bestellingsLijn['aantal'])*intval($bestellingsLijn['prijs']);
          }
        include('view/winkelWagen.php');
}



}