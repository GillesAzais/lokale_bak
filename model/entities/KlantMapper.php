<?php

    /**
     * Created by PhpStorm.
     * User: gilles.azais
     * Date: 1/26/2016
     * Time: 11:23 AM
     */
    class KlantMapper extends Mapper{
        public function __construct(){
            parent::__construct('klanten', 'Klant');
        }
        public function get($email){
            $qry = "SELECT * FROM $this->_table WHERE email = ?";
            return $this->_db->queryOne($qry, $this->_type, $email);
        }
    }