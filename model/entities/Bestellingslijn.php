<?php

    /**
     * Created by PhpStorm.
     * User: gilles.azais
     * Date: 1/28/2016
     * Time: 1:49 PM
     */
    class Bestellingslijn extends Entity{
        protected $bestellingsId;
        protected $productId;
        protected $aantal;
        private $orderId;

        public function __construct($bestellingsId, $productId, $aantal, $orderId){
            $this->bestellingsId = $bestellingsId;
            $this->productId = $productId;
            $this->aantal = $aantal;
            $this->orderId = $orderId;
        }

        /**
         * @return mixed
         */
        public function getBestellingsId(){
            return $this->$bestellingsId;
        }

        /**
         * @param mixed $bestellingsId
         */
        public function setBestellingsId($bestellingsId){
            $this->$bestellingsId = $bestellingsId;
        }

        /**
         * @return mixed
         */
        public function getOrderId(){
            return $this->orderId;
        }

        /**
         * @param mixed $orderId
         */
        public function setOrderId($orderId){
            $this->orderId = $orderId;
        }

        /**
         * @return mixed
         */
        public function getProductId(){
            return $this->productId;
        }

        /**
         * @param mixed $productId
         */
        public function setProductId($productId){
            $this->productId = $productId;
        }

        /**
         * @return mixed
         */
        public function getAantal(){
            return $this->aantal;
        }

        /**
         * @param mixed $aantal
         */
        public function setAantal($aantal){
            $this->aantal = $aantal;
        }
    }