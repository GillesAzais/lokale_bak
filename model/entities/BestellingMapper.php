<?php

    /**
     * Created by PhpStorm.
     * User: gilles.azais
     * Date: 1/26/2016
     * Time: 11:23 AM
     */
    class BestellingMapper extends Mapper{
        public function __construct(){
            parent::__construct('bestellingen', 'Bestelling');
        }

        public function getBestellingsIdForEmail($email, $date){
            $qry = "SELECT bestellingsId FROM $this->_table WHERE email = ? AND bestellingsDatum = ?";
            $id = $this->_db->queryScalar($qry, [$email, $date]);
            return $id;
        }

        public function getBestellingenForEmail($email){
            $qry = "SELECT * FROM $this->_table WHERE email = ?";
            return ($this->_db->queryAll($qry,$this->_type,$email));
        }

        public function getDateForBestellingsId($id){
            $qry = "SELECT bestellingsDatum FROM $this->_table WHERE id = ?";
            $id = $this->_db->queryScalar($qry, $id);
            return $id;
        }
    }