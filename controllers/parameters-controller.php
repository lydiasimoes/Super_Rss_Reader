<?php

$errorArray = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$screenMode = intval(filter_input(INPUT_POST,'screenMode',FILTER_SANITIZE_NUMBER_INT));
if ($screenMode < 1 || $screenMode > 1) {
    $errorArray['errorscreenMode'] = 'c\'est interdit';
}

$articleNumber = intval(filter_input(INPUT_POST,'articleNumber',FILTER_SANITIZE_NUMBER_INT));
if ($articleNumber < 1 || $articleNumber > 2) {
    $errorArray['errorarticleNumber'] = 'c\'est interdit';
} 

var_dump($_POST['subject']);
$subject = filter_input(INPUT_POST,'subject',FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY);
var_dump($subject);
foreach ($subject as $key => $value) {
    if ($value < 1 || $value > 5) {
        $errorArray['errorValue'] = 'c\'est interdit';
    } 
}

setcookie("cookieSport", json_encode($subject), time()+60*60*24*7);

}

    include(dirname(__FILE__).'/../views/parameters.php');

    if (($_SERVER["REQUEST_METHOD"] != "POST") || !empty($errorArray)) { 

        include(dirname(__FILE__).'/../views/form.php');

    } else { 


        include(dirname(__FILE__).'/../views/pages.php');
        
        }