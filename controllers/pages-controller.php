<?php

// $xml = simplexml_load_file('https://rmcsport.bfmtv.com/rss/football/');
// foreach ($xml->channel->item as $item){
//     $datetime = date_create($item->pubDate);
//     $date = date_format($datetime, 'd M Y, H\hi');
//     echo '<li><a href="'.$item->link.'">'.utf8_decode($item->title).'</a> ('.$date.')</li>';
//    }

include(dirname(__FILE__).'/../views/template/header.php');
include(dirname(__FILE__).'/../views/template/navbar.php');
include(dirname(__FILE__). '/../views/pages/liens.php');
include(dirname(__FILE__).'/../views/template/footer.php');

if($football > 0){
    ;
}