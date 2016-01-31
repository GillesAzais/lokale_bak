<?php

    /**
     * Created by PhpStorm.
     * User: gilles.azais
     * Date: 1/26/2016
     * Time: 11:27 AM
     */
    class Db{
        private static $instance = null;
        private $dsn = 'mysql:host=localhost;dbname=lokale_bakkerij';
        private $username = 'root';
        private $pass = '';
        private $dbh;

        private function __construct(){
            try{
                $this->dbh = new PDO($this->dsn, $this->username, $this->pass);
            }catch(PDOException $e){
                error_log($e->getMessage());
            }
        }

        public static function getInstance(){
            if(!self::$instance){
                self::$instance = new self();
            }
            return self::$instance;
        }

        public function queryAll($sql, $type, $args = []){
            $stmt = $this->execute($sql, $args);
            return $stmt->fetchAll(PDO::FETCH_CLASS, $type);
        }

        public function execute($sql, $params){
            if(!is_array($params)){
                $params = [$params];
            }
            try{
                $stmt = $this->dbh->prepare($sql);
                $stmt->execute($params);
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
            }catch(PDOException $e){
                error_log($e->getMessage());
            }
            return $stmt;
        }

        public function queryOne($sql, $type, $args = []){
            $stmt = $this->execute($sql, $args);
            $object = $stmt->fetchObject($type);
            return $object;
        }

        public function queryScalar($sql, $args = []){
            $stmt = $this->execute($sql, $args);
            return $stmt->fetchColumn();
        }
    }
