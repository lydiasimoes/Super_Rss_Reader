<?php 

include(dirname(__FILE__). '/../views/home.php');
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
        $lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
        $lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
        $lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
        $lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));                                                                           
        
    }

    if(!($_SERVER["REQUEST_METHOD"] == "POST") || !empty($Array)){
        include(dirname(__FILE__). '/../views/home.php');
    }else{
        include(dirname(__FILE__). '/../views/pages.php');
    }

