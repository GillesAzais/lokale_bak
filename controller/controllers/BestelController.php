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

        public function __construct(){
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
            foreach($_POST['besetllingsLijn'] as $key => $bestellingsLijn){
                $_SESSION['producten'][ $key ]['id'] = $bestellingsLijn['id'];
                $_SESSION['producten'][ $key ]['naam'] = $bestellingsLijn['naam'];
                $_SESSION['producten'][ $key ]['aantal'] = $bestellingsLijn['aantal'];
                $_SESSION['producten'][ $key ]['prijs'] = $bestellingsLijn['prijs'];
                $_SESSION['producten'][ $key ]['totaalPrijs'] = intval($bestellingsLijn['aantal']) * intval($bestellingsLijn['prijs']);
            }
            include('view/winkelWagen.php');
        }
    }