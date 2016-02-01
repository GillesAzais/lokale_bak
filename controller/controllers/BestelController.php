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

        public function bestellingen(){
          $_SESSION['bestellingen'] = $this->bestellingMapper->getBestellingenForEmail($_SESSION['email']);

            include('view/bestellingen.php');

        }

        public function orderlijnDetail($id){
            $orderlijnen = $this->bestellingLijnMapper->getOrderlijnForBestellingsId($id);
            $producten =[];

            foreach($orderlijnen as $key => $item){
                $producten[$key]['product']=$this->productMapper->getProductById($item->getProductId());
                $producten[$key]['aantal']= $item->getAantal();
            }
            $_SESSION['orderlijn']=$producten;
            $_SESSION['orderLijnDate'] = $this->bestellingMapper->getDateForBestellingsId($id);
            include('view/detail.php');
        }
    }