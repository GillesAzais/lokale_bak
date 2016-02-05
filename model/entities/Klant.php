<?php

    /**
     * Created by PhpStorm.
     * User: gilles.azais
     * Date: 1/25/2016
     * Time: 1:46 PM
     */
    class Klant extends Entity{
        protected $str_email;
        protected $str_naam;
        protected $str_vnaam;
        protected $str_straat;
        protected $str_huisnr;
        protected $str_postcode;
        protected $str_woonplaats;
        protected $str_passwoord;
        protected $bool_blocked;

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
        public function __construct($str_email, $str_voornaam, $str_naam, $str_straat, $str_huisnr, $str_postcode, $str_woonplaats, $pass, $bool_geblokeerd){
            $this->str_email = $str_email;
            $this->str_naam = $str_naam;
            $this->str_vnaam = $str_voornaam;
            $this->str_straat = $str_straat;
            $this->str_huisnr = $str_huisnr;
            $this->str_postcode = $str_postcode;
            $this->str_woonplaats = $str_woonplaats;
            $this->str_passwoord = $pass;
            $this->bool_blocked =  $bool_geblokeerd;
        }

        public function generatePassword(){
            $arr = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            $arr = str_split($arr);
            for($i = 0; $i < mt_rand(10, 20); $i++){
                shuffle($arr);
            }
           $this->setStrPasswoord(substr(implode("", $arr), 0, 5));
        }

        /**
         * @return mixed
         */
        public function getStrEmail(){
            return $this->str_email;
        }

        /**
         * @param mixed $str_email
         */
        public function setStrEmail($str_email){
            $this->str_email = $str_email;
        }

        /**
         * @return mixed
         */
        public function getStrNaam(){
            return $this->str_naam;
        }

        /**
         * @param mixed $str_naam
         */
        public function setStrNaam($str_naam){
            $this->str_naam = $str_naam;
        }

        /**
         * @return mixed
         */
        public function getStrVoornaam(){
            return $this->str_voornaam;
        }

        /**
         * @param mixed $str_voornaam
         */
        public function setStrVoornaam($str_voornaam){
            $this->str_voornaam = $str_voornaam;
        }

        /**
         * @return mixed
         */
        public function getStrStraat(){
            return $this->str_straat;
        }

        /**
         * @param mixed $str_straat
         */
        public function setStrStraat($str_straat){
            $this->str_straat = $str_straat;
        }

        /**
         * @return mixed
         */
        public function getStrHuisnr(){
            return $this->str_huisnr;
        }

        /**
         * @param mixed $str_huisnr
         */
        public function setStrHuisnr($str_huisnr){
            $this->str_huisnr = $str_huisnr;
        }

        /**
         * @return mixed
         */
        public function getStrPostcode(){
            return $this->str_postcode;
        }

        /**
         * @param mixed $str_postcode
         */
        public function setStrPostcode($str_postcode){
            $this->str_postcode = $str_postcode;
        }

        /**
         * @return mixed
         */
        public function getStrWoonplaats(){
            return $this->str_woonplaats;
        }

        /**
         * @param mixed $str_woonplaats
         */
        public function setStrWoonplaats($str_woonplaats){
            $this->str_woonplaats = $str_woonplaats;
        }

        public function encryptPass(){
            $this->setStrPasswoord(sha1($this->getStrPasswoord()));
        }

        /**
         * @return mixed
         */
        public function getStrPasswoord(){
            return $this->str_passwoord;
        }

        /**
         * @param mixed $str_passwoord
         */
        public function setStrPasswoord($str_passwoord){
            $this->str_passwoord = $str_passwoord;
        }
        public function isBlocked(){
            return $this->bool_blocked;
        }
    }