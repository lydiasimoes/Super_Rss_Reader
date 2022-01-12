<?php
        $array = array(
            1 => 'football',
            2 => 'rugby',
            3 => 'tennis',
            4 => 'basket',
            5 => 'handball',
        ); 
        if(isset($_COOKIE['cookieSport'])){
            $cookieSport = json_decode($_COOKIE['cookieSport'], true);
        }else{
            $cookieSport = [];
        }
    include(dirname(__FILE__).'/pages/liens.php');
    include(dirname(__FILE__).'/pages/article.php');