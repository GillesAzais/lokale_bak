<?php
/**
 * Created by PhpStorm.
 * User: gilles.azais
 * Date: 1/25/2016
 * Time: 1:46 PM
 */

class Klant{

    private $str_email;
    private $str_naam;
    private $str_voornaam;
    private $str_straat;
    private $str_huisnr;
    private $str_postcode;
    private $str_woonplaats;
    private $str_passwoord;
    private $bool_geblokeerd;

    /**
     * Klant constructor.
     * @param $str_email
     * @param $str_naam
     * @param $str_voornaam
     * @param $str_straat
     * @param $str_huisnr
     * @param $str_postcode
     * @param $str_woonplaats
     * @param $str_passwoord
     * @param $bool_geblokeerd
     */
    public function __construct($str_email, $str_naam, $str_voornaam, $str_straat, $str_huisnr, $str_postcode, $str_woonplaats, $str_passwoord, $bool_geblokeerd)
    {
        $this->str_email = $str_email;
        $this->str_naam = $str_naam;
        $this->str_voornaam = $str_voornaam;
        $this->str_straat = $str_straat;
        $this->str_huisnr = $str_huisnr;
        $this->str_postcode = $str_postcode;
        $this->str_woonplaats = $str_woonplaats;
        $this->str_passwoord = $str_passwoord;
        $this->bool_geblokeerd = $bool_geblokeerd;
    }

    /**
     * @return mixed
     */
    public function getStrEmail()
    {
        return $this->str_email;
    }

    /**
     * @param mixed $str_email
     */
    public function setStrEmail($str_email)
    {
        $this->str_email = $str_email;
    }

    /**
     * @return mixed
     */
    public function getStrNaam()
    {
        return $this->str_naam;
    }

    /**
     * @param mixed $str_naam
     */
    public function setStrNaam($str_naam)
    {
        $this->str_naam = $str_naam;
    }

    /**
     * @return mixed
     */
    public function getStrVoornaam()
    {
        return $this->str_voornaam;
    }

    /**
     * @param mixed $str_voornaam
     */
    public function setStrVoornaam($str_voornaam)
    {
        $this->str_voornaam = $str_voornaam;
    }

    /**
     * @return mixed
     */
    public function getStrStraat()
    {
        return $this->str_straat;
    }

    /**
     * @param mixed $str_straat
     */
    public function setStrStraat($str_straat)
    {
        $this->str_straat = $str_straat;
    }

    /**
     * @return mixed
     */
    public function getStrHuisnr()
    {
        return $this->str_huisnr;
    }

    /**
     * @param mixed $str_huisnr
     */
    public function setStrHuisnr($str_huisnr)
    {
        $this->str_huisnr = $str_huisnr;
    }

    /**
     * @return mixed
     */
    public function getStrPostcode()
    {
        return $this->str_postcode;
    }

    /**
     * @param mixed $str_postcode
     */
    public function setStrPostcode($str_postcode)
    {
        $this->str_postcode = $str_postcode;
    }

    /**
     * @return mixed
     */
    public function getStrWoonplaats()
    {
        return $this->str_woonplaats;
    }

    /**
     * @param mixed $str_woonplaats
     */
    public function setStrWoonplaats($str_woonplaats)
    {
        $this->str_woonplaats = $str_woonplaats;
    }

    /**
     * @return mixed
     */
    public function getStrPasswoord()
    {
        return $this->str_passwoord;
    }

    /**
     * @param mixed $str_passwoord
     */
    public function setStrPasswoord($str_passwoord)
    {
        $this->str_passwoord = $str_passwoord;
    }


}