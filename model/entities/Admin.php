<?php

    /**
     * Created by PhpStorm.
     * User: gilles.azais
     * Date: 1/25/2016
     * Time: 1:46 PM
     */
    class Admin extends Entity{
        private $str_username;
        private $str_passw;

        /**
         * Admin constructor.
         * @param $str_username
         * @param $str_passw
         */
        public function __construct($str_username, $str_passw){
            $this->str_username = $str_username;
            $this->str_passw = $str_passw;
        }

        /**
         * @return string
         */
        public function getUsername(){
            return $this->str_username;
        }

        /**
         * @return string
         */
        public function getPassw(){
            return $this->str_passw;
        }
    }