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

        /**
         * Bestellingslijn constructor.
         * @param $bestellingsId
         * @param $productId
         * @param $aantal
         * @param $orderId
         */
        public function __construct($bestellingsId,$orderId,$productId ,$aantal){
            $this->bestellingsId = $bestellingsId;
            $this->productId = $productId;
            $this->aantal = $aantal;
            $this->orderId = $orderId;
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
        public function getProductId(){
            return $this->productId;
        }

        /**
         * @return mixed
         */
        public function getAantal(){
            return $this->aantal;
        }

        /**
         * @return mixed
         */
        public function getOrderId(){
            return $this->orderId;
        }


    }