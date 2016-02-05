<?php

    /**
     * Created by PhpStorm.
     * User: gilles.azais
     * Date: 1/26/2016
     * Time: 11:25 AM
     */
    class Mapper{
        protected $_db;
        protected $_table;
        protected $_type;

        public function __construct($table, $type){
            $this->_db = db::getInstance();
            $this->_table = $table;
            $this->_type = $type;
        }

        public function add($object){
            $values = $object->toArray();

            $fieldNames = array_keys($values);
            $queryArguments = $this->createQueryArguments($values);
            $query = "INSERT INTO $this->_table (" . implode(', ', $fieldNames) . ") VALUES (:" . implode(', :', $fieldNames) . ")";
            $this->_db->execute($query, $queryArguments);
        }

        private function createQueryArguments($values){
            $queryArguments = [];
            foreach($values as $key => $value){
                $queryArguments[ ':' . $key ] = $value;
            }
            return $queryArguments;
        }

        public function update($object, $where = []){
            $values = $object->toArray();
            // fallback voor als er geen where is meegegeven: where op basis van de id
            if(!$where){
                $where = ['id' => $object->getId()];
            }
            $fieldNames = $this->createFieldnames($values);
            $wherefields = $this->createWhereFields($where);
            $queryArguments = $this->createWhereArguments($where) + $this->createQueryArguments($values);
            $query = "
            UPDATE $this->_table
            SET " . implode(', ', $fieldNames) . "
            WHERE " . implode(' AND ', $wherefields) . "
        ";
            $this->_db->execute($query, $queryArguments);
        }

        private function createFieldnames($values){
            $fieldNames = [];
            foreach($values as $fieldname => $value){
                $fieldNames[] = "$fieldname = :$fieldname";
            }
            return $fieldNames;
        }

        private function createWhereFields($where){
            $whereFields = [];
            foreach($where as $key => $value){
                $whereFields[] = "$key = :w_$key";
            }
            return $whereFields;
        }

        private function createWhereArguments($where){
            $whereArguments = [];
            foreach($where as $key => $value){
                $whereArguments[ ':w_' . $key ] = $value;
            }
            return $whereArguments;
        }

        public function delete($className,$where = []){

            if(!is_array($where)){
                $where = [$className.'sid' => $where];
            }
            $wherefields = $this->createWhereFields($where);
            $queryArguments = $this->createWhereArguments($where);
            $query = "
            DELETE
            FROM $this->_table
            WHERE " . implode(' AND ', $wherefields) . "
        ";
            $this->_db->execute($query, $queryArguments);
        }

        public function getAll(){
            $qry = "SELECT * FROM $this->_table";

            return ($this->_db->queryAll($qry, $this->_type));

        }

        
    }