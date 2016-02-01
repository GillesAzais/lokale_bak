<?php

    /**
     * Created by PhpStorm.
     * User: gilles.azais
     * Date: 1/28/2016
     * Time: 1:52 PM
     */
    class BestellingslijnMapper extends Mapper{
        public function __construct(){
            parent::__construct('bestellingsorders', 'Bestellingslijn');
        }

        public function getOrderLijnForBestellingsId($id){
            $qry= "SELECT * FROM $this->_table where bestellingsId = ?";
            return $this->_db->queryAll($qry,$this->_type,$id);
        }
    }