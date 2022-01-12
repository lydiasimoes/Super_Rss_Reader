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
    if(isset($_COOKIE['cookieSport'])){   
        $cookieArticle = $_COOKIE['cookieArticle'];
    }else{
        $cookieArticle = [];
    }
    if(isset($_COOKIE['cookieSport'])){
        $cookieScreen = $_COOKIE['cookieScreen'];
    }else{
        $cookieScreen = [];
    }
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY);
    setcookie("cookieSport", json_encode($subject), time()+60*60*24*7);
    setcookie("cookieArticle", $articleNumber, time()+60*60*24*7);
    setcookie("cookieScreen", $screenMode, time()+60*60*24*7);
}

    include(dirname(__FILE__).'/../views/template/header.php');
    include(dirname(__FILE__). '/../views/parameters.php');       
    include(dirname(__FILE__).'/../views/template/footer.php');
// }else{
//     header('location: /controllers/pages-controller.php');
// }




//     $errorArray = [];
//     $array = array(
//         1 => 'football',
//         2 => 'rugby',
//         3 => 'tennis',
//         4 => 'basket',
//         5 => 'handball',
//     ); 
//     if(isset($_COOKIE['cookieSport'])){
//         $cookieSport = json_decode($_COOKIE['cookieSport'], true);
//     }else{
//         $cookieSport = [];
//     }
//     if($_SERVER["REQUEST_METHOD"] == "POST"){
//         $screenMode = intval(filter_input(INPUT_POST,'screenMode',FILTER_SANITIZE_NUMBER_INT));
//         if ($screenMode < 1 || $screenMode > 2) {
//             $errorArray['errorscreenMode'] = 'c\'est interdit';
//         }  
//         $articleNumber = intval(filter_input(INPUT_POST,'articleNumber',FILTER_SANITIZE_NUMBER_INT));
//         if ($articleNumber < 1 || $articleNumber > 2) {
//             $errorArray['errorarticleNumber'] = 'c\'est interdit';
//         } 
//         $subject = intval(filter_input(INPUT_POST,'subject',FILTER_SANITIZE_NUMBER_INT));
//         if ($subject < 3 || $subject > 3) {
//             $errorArray['errorsubject'] = 'Sélectionnez 3 articles !';
//         } 
// }
// if($_SERVER["REQUEST_METHOD"] == "POST"){ 
// $subject = filter_input(INPUT_POST,'subject',FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY);
    
//     // setcookie("cookieArticle", $articleNumber, time()+60*60*24*7);
//     setcookie("cookieSport", json_encode($subject), time()+60*60*24*7);
//     include(dirname(__FILE__).'/../views/template/header.php');
//     include(dirname(__FILE__).'/../views/template/navbar.php');  
//     include(dirname(__FILE__).'/../views/pages/head.php');
// foreach ($cookieSport as $val) {
  
//     include(dirname(__FILE__).'/../views/pages/liens.php');
//     if ($val < 1 || $val > 5) {
//         $errorArray['errorValue'] = 'c\'est interdit';
//     } 
// }
// }
// include(dirname(__FILE__).'/../views/pages/foot.php');
// include(dirname(__FILE__).'/../views/template/footer.php');


// if(!($_SERVER["REQUEST_METHOD"] == "POST") || !empty($errorArray)){
//     include(dirname(__FILE__).'/../views/template/header.php');
//     include(dirname(__FILE__).'/../views/template/navbar.php');
//     include(dirname(__FILE__). '/../views/parameters.php');       
//     include(dirname(__FILE__).'/../views/template/footer.php');
// }else{
//     include(dirname(__FILE__). '/../controllers/pages-controller.php');
// }
    

    

    