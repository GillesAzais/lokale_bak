<?php

    /**
     * Created by PhpStorm.
     * User: gilles.azais
     * Date: 1/25/2016
     * Time: 1:46 PM
     */
    class Product extends Entity{
        private $productId;
        private $productNaam;
        private $prijs;

        /**
         * Product constructor.
         * @param $productId
         * @param $productNaam
         * @param $prijs
         */
        public function __construct($productId,$productNaam,$prijs){
            $this->productId = $productId;
            $this->productNaam = $productNaam;
            $this->prijs = $prijs;
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
        public function getProductNaam(){
            return $this->productNaam;
        }

        /**
         * @param mixed $productNaam
         */
        public function setProductNaam($productNaam){
            $this->productNaam = $productNaam;
        }

        /**
         * @return mixed
         */
        public function getPrijs(){
            return $this->prijs;
        }

        /**
         * @param mixed $prijs
         */
        public function setPrijs($prijs){
            $this->prijs = $prijs;
        }
    }