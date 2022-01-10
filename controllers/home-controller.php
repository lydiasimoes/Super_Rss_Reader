<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $football = intval(filter_input(INPUT_POST, 'football', FILTER_SANITIZE_NUMBER_INT));
    $rugby = intval(filter_input(INPUT_POST, 'rugby', FILTER_SANITIZE_NUMBER_INT));
    $tennis = intval(filter_input(INPUT_POST, 'tennis', FILTER_SANITIZE_NUMBER_INT));
    $basket = intval(filter_input(INPUT_POST, 'basket', FILTER_SANITIZE_NUMBER_INT));
    $handball = intval(filter_input(INPUT_POST, 'handball', FILTER_SANITIZE_NUMBER_INT));
    include(dirname(__FILE__). '/../controllers/pages-controller.php');

}else{
    include(dirname(__FILE__).'/../views/template/header.php');
    include(dirname(__FILE__).'/../views/template/navbar.php');
    include(dirname(__FILE__). '/../views/home.php');
    include(dirname(__FILE__).'/../views/template/footer.php');
}

