<?php

    /**
     * Created by PhpStorm.
     * User: gilles.azais
     * Date: 1/26/2016
     * Time: 11:24 AM
     */
    class ProductMapper extends Mapper{
        public function __construct(){
            parent::__construct('producten', 'Product');
        }

        public function getProductById($id){
            $qry="SELECT * FROM $this->_table WHERE productId = ?";

            return $this->_db->queryOne($qry,$this->_type,intval($id));
        }
    }