<?php
// var_dump($array[$val]);
//     if($array[$val] === 'football'){
//         $xml = simplexml_load_file('https://rmcsport.bfmtv.com/rss/football/');
//         foreach ($xml->channel->item as $item){
//             $datetime = date_create($item->pubDate);
//             $date = date_format($datetime, 'd M Y, H\hi');
//             echo '<li><a href="'.$item->link.'">'.utf8_decode($item->title).'</a> ('.$date.')</li>';
//             echo $item->description;
//         }
//     }
//     if($array[$val] === 'rugby'){
//         $xml = simplexml_load_file('https://rmcsport.bfmtv.com/rss/rugby/');
//         foreach ($xml->channel->item as $item){
//             $datetime = date_create($item->pubDate);
//             $date = date_format($datetime, 'd M Y, H\hi');
//             echo '<li><a href="'.$item->link.'">'.utf8_decode($item->title).'</a> ('.$date.')</li>';
//             echo $item->description;
//         }
//     }
   
        $xml = simplexml_load_file('https://rmcsport.bfmtv.com/rss/tennis/');
        foreach ($xml->channel->item as $item){
            $datetime = date_create($item->pubDate);
            $date = date_format($datetime, 'd M Y, H\hi');
            echo '<div><a href="'.$item->link.'">'.utf8_decode($item->title).'</a> ('.$date.')</div>';
            echo $item->description;
        }
    
//     if($array[$val] === 'basket'){
//         $xml = simplexml_load_file('https://rmcsport.bfmtv.com/rss/basket/');
//         foreach ($xml->channel->item as $item){
//             $datetime = date_create($item->pubDate);
//             $date = date_format($datetime, 'd M Y, H\hi');
//             echo '<li><a href="'.$item->link.'">'.utf8_decode($item->title).'</a> ('.$date.')</li>';
//             echo $item->description;
//         }
//     }
//     if($array[$val] === 'handball'){
//         $xml = simplexml_load_file('https://rmcsport.bfmtv.com/rss/handball/');
//         foreach ($xml->channel->item as $item){
//             $datetime = date_create($item->pubDate);
//             $date = date_format($datetime, 'd M Y, H\hi');
//             echo '<li><a href="'.$item->link.'">'.utf8_decode($item->title).'</a> ('.$date.')</li>';
//             echo $item->description;
//         }
//     } 

// include(dirname(__FILE__).'/../views/template/header.php');
// include(dirname(__FILE__).'/../views/template/navbar.php');
// include(dirname(__FILE__).'/../views/template/navbar.php');
// include(dirname(__FILE__).'/../views/template/footer.php'); 
