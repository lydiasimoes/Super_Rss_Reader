<?php
    $arrayUrl = array(
        1 => 'football',
        2 => 'rugby',
        3 => 'tennis',
        4 => 'basket',
        5 => 'handball',
        ); 

    $flux = intval(filter_input(INPUT_GET, 'fluxCol', FILTER_SANITIZE_NUMBER_INT));


$xml = simplexml_load_file('https://rmcsport.bfmtv.com/rss/'.$arrayUrl[$flux+1].'/');
$detail = $xml->channel->item[$flux+1];



include(dirname(__FILE__).'/../views/template/header.php');
include(dirname(__FILE__).'/../views/pages/detail.php');
include(dirname(__FILE__).'/../views/template/footer.php');