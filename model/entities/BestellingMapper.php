<?php
/**
 * Created by PhpStorm.
 * User: gilles.azais
 * Date: 1/26/2016
 * Time: 11:23 AM
 */
class BestellingMapper extends Mapper{

    public function __construct()
    {
        parent::__construct('bestellingen','Bestelling');
    }

    public function getBestellingsIdForEmail($email,$date){
        $qry ="SELECT bestelling_ID FROM $this->_table WHERE email = ? AND bestellingsDatum = ?";

        return $this->_db->queryOne($qry,$this->_type,[$email,$date]);
    }
}