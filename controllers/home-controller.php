<?php 
    $errArray = [];
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
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY);
    setcookie("cookieSport", json_encode($subject), time()+60*60*24*7);
}
if(!empty($cookieSport) || isset($subject)){
    header('location: /controllers/pages-controller.php');
}else{
    
    include(dirname(__FILE__).'/../views/template/header.php');
    include(dirname(__FILE__). '/../views/home.php');       
    include(dirname(__FILE__).'/../views/template/footer.php');
}



