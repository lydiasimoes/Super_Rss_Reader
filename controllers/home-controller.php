<?php 
    $errArray = [];
    $array = array(
        1 => 'football',
        2 => 'rugby',
        3 => 'tennis',
        4 => 'basket',
        5 => 'handball',
    );
     
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $flux = filter_input(INPUT_POST, 'flux', FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY);
    include(dirname(__FILE__).'/../views/template/header.php');
    include(dirname(__FILE__).'/../views/template/navbar.php');  
    include(dirname(__FILE__).'/../views/pages/head.php');
    foreach($flux as $val)
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


