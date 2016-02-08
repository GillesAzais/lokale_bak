<?php

/**
 * Created by PhpStorm.
 * User: gilles.azais
 * Date: 1/25/2016
 * Time: 2:04 PM
 */
class BestelController extends Controller
{

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

    public function index()
    {
        $klant = $this->klantenMapper->get($_SESSION['email']);
        
        if ($klant->isBlocked()) {
            $this->message('Uw bent momenteel geblokkeerd en kunt geen bestellingen plaatsen.',"danger");
        } else {
            $products = $this->productMapper->getAll();
            include ('view/bestel.php');
        }
    }
    
    public function checkBestellingen($key,$bestellingsLijn){
        $this->matchDigits($bestellingsLijn['id'],$key);
        $this->matchDigits($bestellingsLijn['aantal'],$key);
        $this->matchLetters($bestellingsLijn['naam'],$key);
        if(isset($_GET['error'])){
           $this->index();
           die();
        }
    }

    public function voegToeAanWinkelwagen()
    {
        if (isset($_SESSION['producten'])) {
            unset($_SESSION['producten']);
        }
        if ($_POST['day'] < getdate()['mday'] + 4 && $_POST['day'] > getdate()['mday']) {
            $d = new DateTime(strval(getdate()['year']) . '-' . strval(getdate()['mon']) . '-' . ($_POST['day']));
            $_SESSION['BestellingDatum'] = $d->format("Y-m-d");
            foreach ($_POST['bestellingsLijn'] as $key => $bestellingsLijn) {
                if (empty($bestellingsLijn['aantal'])) {
                    continue;
                }
                $this->checkBestellingen($key,$bestellingsLijn);
                $_SESSION['producten'][$key]['id'] = $bestellingsLijn['id'];
                $_SESSION['producten'][$key]['naam'] = $bestellingsLijn['naam'];
                $_SESSION['producten'][$key]['aantal'] = $bestellingsLijn['aantal'];
                $_SESSION['producten'][$key]['prijs'] = $bestellingsLijn['prijs'];
                $_SESSION['producten'][$key]['totaalPrijs'] = intval($bestellingsLijn['aantal']) * intval($bestellingsLijn['prijs']);
            }
            
            include ('view/winkelWagen.php');
        } else {
            unset($_SESSION['producten']);
            $_GET['message'] = 'Foute datum';
            include ('view/message.php');
        }
    }

    public function bestellingen()
    {
        $_SESSION['bestellingen'] = $this->bestellingMapper->getBestellingenForEmail($_SESSION['email']);
        include ('view/bestellingen.php');
    }

    public function orderlijnDetail($id)
    {
        $orderlijnen = $this->bestellingLijnMapper->getOrderlijnForBestellingsId($id);
        $producten = [];
        foreach ($orderlijnen as $key => $item) {
            $producten[$key]['product'] = $this->productMapper->getProductById($item->getProductId());
            $producten[$key]['aantal'] = $item->getAantal();
        }
        $_SESSION['orderlijn'] = $producten;
        $_SESSION['orderLijnDate'] = $this->bestellingMapper->getDateForBestellingsId($id);
        include ('view/detail.php');
    }

    public function annuleer($id)
    {
        $this->bestellingMapper->delete('bestelling', $id);
        redirect('bestel/bestellingen');
    }
}