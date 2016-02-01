<?php

    /**
     * Created by PhpStorm.
     * User: gilles.azais
     * Date: 1/25/2016
     * Time: 2:04 PM
     */
    class WinkelWagenController extends Controller{
        private $bestellingMapper;
        private $bestellingsLijnMapper;

        public function __construct(){
            parent::__construct();
            $this->bestellingMapper = $this->loader->getModelMapper('bestelling');
            $this->bestellingsLijnMapper = $this->loader->getModelMapper('bestellingsLijn');
        }

        public function index(){

            include('view/winkelWagen.php');
        }

        public function bestel(){
            $this->bestellingMapper->add(new Bestelling(null,$_SESSION['email'], $date = date('Y-m-d'),null , "besteld"));
            $error = false;
            foreach($_POST['bestellingsLijn'] as $key => $bestellingsLijn){
                if(!preg_match('/[0-9]/', $bestellingsLijn['aantal'])){
                    $error = true;
                    break;
                }else{
                    $b=new BestellingsLijn($this->bestellingMapper->getBestellingsIdForEmail($_SESSION['email'], $date),$key,  $bestellingsLijn['aantal']);


                    $this->bestellingsLijnMapper->add($b);
                }
            }
            if($error){
                $_GET['message'] = 'Verkeerde waarde ingevuld bij aantal';
            }else{
                $_GET['message'] = 'Uw bestelling is opgenomen';
            }
            include('view/message.php');
        }
    }

