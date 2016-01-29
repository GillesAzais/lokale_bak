<?php
/**
 * Created by PhpStorm.
 * User: gilles.azais
 * Date: 1/25/2016
 * Time: 1:46 PM
 */

class Bestelling extends Entity
{

    private $id;
    protected $email;
    protected $str_bestellingsDatum;
    protected $str_afhaalDatum = null;
    protected $str_status;

    /**
     * Bestellingen constructor.
     * @param $obj_klant
     * @param $arr_producten
     * @param $str_bestellingsDatum
     * @param null $str_afhaalDatum
     * @param $str_status
     */
    public function __construct($email, $str_bestellingsDatum, $str_afhaalDatum, $str_status)
    {
        $this->email = $email;
        $this->str_bestellingsDatum = $str_bestellingsDatum;
        $this->str_afhaalDatum = $str_afhaalDatum;
        $this->str_status = $str_status;
    }

    /**
     * @return mixed
     */
    public function getObjKlant()
    {
        return $this->obj_klant;
    }

    /**
     * @param mixed $obj_klant
     */
    public function setObjKlant($obj_klant)
    {
        $this->obj_klant = $obj_klant;
    }

    /**
     * @return mixed
     */
    public function getArrProducten()
    {
        return $this->arr_producten;
    }

    /**
     * @param mixed $arr_producten
     */
    public function setArrProducten($arr_producten)
    {
        $this->arr_producten = $arr_producten;
    }

    /**
     * @return mixed
     */
    public function getStrBestellingsDatum()
    {
        return $this->str_bestellingsDatum;
    }

    /**
     * @param mixed $str_bestellingsDatum
     */
    public function setStrBestellingsDatum($str_bestellingsDatum)
    {
        $this->str_bestellingsDatum = $str_bestellingsDatum;
    }

    /**
     * @return null
     */
    public function getStrAfhaalDatum()
    {
        return $this->str_afhaalDatum;
    }

    /**
     * @param null $str_afhaalDatum
     */
    public function setStrAfhaalDatum($str_afhaalDatum)
    {
        $this->str_afhaalDatum = $str_afhaalDatum;
    }

    /**
     * @return mixed
     */
    public function getStrStatus()
    {
        return $this->str_status;
    }

    /**
     * @param mixed $str_status
     */
    public function setStrStatus($str_status)
    {
        $this->str_status = $str_status;
    }


}

