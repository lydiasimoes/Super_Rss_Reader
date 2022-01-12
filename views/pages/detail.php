

<?php 

$count = 0;
foreach ($xml->channel->item as $item){ 
                    $datetime = date_create($item->pubDate);
                    $date = date_format($datetime, 'd M Y, H\hi');?>
                    <?='#'.$date.'</br>'?>  
                        <a href="/controllers/article-controller.php?id=<?=$i++;?>&flux=<?=$val;?>"><?=$item->title.'</br></br>';?></a> 
                        <div></div>               
                        <?php $count++;
                            if ($count == 6)
                            break; } ?>