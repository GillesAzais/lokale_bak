<?php

    /**
     * Created by PhpStorm.
     * User: gilles.azais
     * Date: 1/25/2016
     * Time: 2:03 PM
     */
    class HomeController extends Controller{
        public function index(){
           
            include('view/home.php');
           
        }

        public function admin(){
            include('view/adminLogIn.php');
        }
    }