<?php
    function head(){
        include('view/_partials/head.php');
    }

    function footer(){
        include('view/_partials/footer.php');
    }

    function menu(){
        if(!isset($_SESSION['loggedIn']) || !$_SESSION['loggedIn']){
            include('menu.php');
        }else{
            if($_SESSION['loggedIn']){
                include('loggedInMenu.php');
            }
        }
    }