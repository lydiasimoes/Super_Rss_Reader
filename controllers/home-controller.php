<?php 
    $errArray = [];
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
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY);
    setcookie("cookieScreen", $screenMode, time()+60*60*24*7);
    // setcookie("cookieArticle", "$articleNumber", time()+60*60*24*7);
    setcookie("cookieSport", json_encode($subject), time()+60*60*24*7);
    include(dirname(__FILE__).'/../views/template/header.php');
    include(dirname(__FILE__).'/../views/template/navbar.php');  
    include(dirname(__FILE__).'/../views/pages/head.php');
    foreach($cookieSport as $val)
    {
        include(dirname(__FILE__).'/../views/pages/liens.php');
    }
    include(dirname(__FILE__).'/../views/pages/foot.php');
    include(dirname(__FILE__).'/../views/template/footer.php');
}
if(!($_SERVER["REQUEST_METHOD"] == "POST") || !empty($errArray)){
    include(dirname(__FILE__).'/../views/template/header.php');
    include(dirname(__FILE__).'/../views/template/navbar.php');
    include(dirname(__FILE__). '/../views/home.php');       
    include(dirname(__FILE__).'/../views/template/footer.php');
}else{
    include(dirname(__FILE__). '/../controllers/pages-controller.php');
}


