<?php
/**
 * Created by PhpStorm.
 * User: gilles.azais
 * Date: 1/25/2016
 * Time: 1:46 PM
 */

class Product {
    private $int_productNr;
    private $str_productnaam;
    private $dec_prijs;

    /**
     * Product constructor.
     * @param $int_productNr
     * @param $str_productnaam
     * @param $dec_prijs
     */
    public function __construct($int_productNr, $str_productnaam, $dec_prijs)
    {
        $this->int_productNr = $int_productNr;
        $this->str_productnaam = $str_productnaam;
        $this->dec_prijs = $dec_prijs;
    }

    /**
     * @return mixed
     */
    public function getIntProductNr()
    {
        return $this->int_productNr;
    }

    /**
     * @return mixed
     */
    public function getStrProductnaam()
    {
        return $this->str_productnaam;
    }

    /**
     * @param mixed $str_productnaam
     */
    public function setStrProductnaam($str_productnaam)
    {
        $this->str_productnaam = $str_productnaam;
    }

    /**
     * @return mixed
     */
    public function getDecPrijs()
    {
        return $this->dec_prijs;
    }

    /**
     * @param mixed $dec_prijs
     */
    public function setDecPrijs($dec_prijs)
    {
        $this->dec_prijs = $dec_prijs;
    }


}