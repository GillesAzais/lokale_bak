<?php
/**
 * Created by PhpStorm.
 * User: gilles.azais
 * Date: 1/28/2016
 * Time: 1:49 PM
 */

class Bestellingslijn extends Entity{

   protected $bestellings_ID;
    protected $orderId;
    protected $productId;
    protected $aantal;

    /**
     * Bestellingslijn constructor.
     * @param $bestellings_ID
     * @param $orderId
     * @param $productId
     * @param $aantal
     */
    public function __construct($bestellings_ID, $productId, $aantal)
    {
        $this->bestellings_ID = $bestellings_ID;
        $this->productId = $productId;
        $this->aantal = $aantal;
    }

    /**
     * @return mixed
     */


    public function getBestellingsID()
    {
        return $this->bestellings_ID;
    }

    /**
     * @param mixed $bestellings_ID
     */
    public function setBestellingsID($bestellings_ID)
    {
        $this->bestellings_ID = $bestellings_ID;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param mixed $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param mixed $productId
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    /**
     * @return mixed
     */
    public function getAantal()
    {
        return $this->aantal;
    }

    /**
     * @param mixed $aantal
     */
    public function setAantal($aantal)
    {
        $this->aantal = $aantal;
    }



}