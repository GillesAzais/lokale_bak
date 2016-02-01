<?php

    /**
     * Created by PhpStorm.
     * User: gilles.azais
     * Date: 1/25/2016
     * Time: 1:46 PM
     */
    class Bestelling extends Entity{
    protected $afhaalDatum;
    protected $bestellingsDatum;
    protected $bestellingsId;
    protected $email;
    protected $status;

        /**
         * Bestelling constructor.
         * @param $afhaalDatum
         * @param $bestellingsDatum
         * @param $bestellingsId
         * @param $email
         * @param $status
         */
        public function __construct( $bestellingsId, $email,$bestellingsDatum,$afhaalDatum,  $status){

            $this->afhaalDatum = $afhaalDatum;
            $this->bestellingsDatum = $bestellingsDatum;
            $this->bestellingsId = $bestellingsId;
            $this->email = $email;
            $this->status = $status;

        }

        /**
         * @return mixed
         */
        public function getAfhaalDatum(){
            return $this->afhaalDatum;
        }

        /**
         * @return mixed
         */
        public function getBestellingsDatum(){
            return $this->bestellingsDatum;
        }

        /**
         * @return mixed
         */
        public function getBestellingsId(){
            return $this->bestellingsId;
        }

        /**
         * @return mixed
         */
        public function getEmail(){
            return $this->email;
        }

        /**
         * @return mixed
         */
        public function getStatus(){
            return $this->status;
        }

     
    }


