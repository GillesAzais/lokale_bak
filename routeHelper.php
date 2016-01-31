<?php
    /**
     * Created by PhpStorm.
     * User: gilles.azais
     * Date: 1/25/2016
     * Time: 2:57 PM
     */
    function redirect($location){
        header('location: ' . baseUrl($location));
        exit;
    }

    function baseUrl($uri = ''){
        return str_replace('index.php', '', $_SERVER['SCRIPT_NAME']) . $uri;
    }