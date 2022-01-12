<?php
    $arrayUrl = array(
        1 => 'football',
        2 => 'rugby',
        3 => 'tennis',
        4 => 'basket',
        5 => 'handball',
        ); 
    $id = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
    $flux = intval(filter_input(INPUT_GET, 'flux', FILTER_SANITIZE_NUMBER_INT));


$xml = simplexml_load_file('https://rmcsport.bfmtv.com/rss/'.$arrayUrl[$flux].'/');
$article = $xml->channel->item[$id];


include(dirname(__FILE__).'/../views/template/header.php');
include(dirname(__FILE__).'/../views/pages/article.php');
include(dirname(__FILE__).'/../views/template/footer.php');