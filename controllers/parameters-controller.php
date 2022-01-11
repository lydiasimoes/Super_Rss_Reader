<?php
    $errorArray = [];
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $screenMode = intval(filter_input(INPUT_POST,'screenMode',FILTER_SANITIZE_NUMBER_INT));
        if ($screenMode < 1 || $screenMode > 2) {
            $errorArray['errorscreenMode'] = 'c\'est interdit';
        }  
        $articleNumber = intval(filter_input(INPUT_POST,'articleNumber',FILTER_SANITIZE_NUMBER_INT));
        if ($articleNumber < 1 || $articleNumber > 2) {
            $errorArray['errorarticleNumber'] = 'c\'est interdit';
        } 
        $subject = intval(filter_input(INPUT_POST,'subject',FILTER_SANITIZE_NUMBER_INT));
        if ($subject < 3 || $subject > 3) {
            $errorArray['errorsubject'] = 'Sélectionnez 3 articles !';
        } 
}
if(!($_SERVER["REQUEST_METHOD"] == "POST") || !empty($errorArray)){
    include(dirname(__FILE__).'/../views/template/header.php');
    include(dirname(__FILE__).'/../views/template/navbar.php');
    include(dirname(__FILE__). '/../views/parameters.php');       
    include(dirname(__FILE__).'/../views/template/footer.php');
}else{
    include(dirname(__FILE__). '/../controllers/parameters-controller.php');
}
    

    

    