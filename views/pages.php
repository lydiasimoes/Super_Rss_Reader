<?php
    $array = array(
        1 => 'Football',
        2 => 'Rugby',
        3 => 'Tennis',
        4 => 'Basket',
        5 => 'Handball',
        ); 
        if(isset($_COOKIE['cookieSport'])){
            $cookieSport = json_decode($_COOKIE['cookieSport'], true);
        }else{
            $cookieSport = [];
        }
    include(dirname(__FILE__).'/pages/liens.php');