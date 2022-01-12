
<h1 class="h2 text-center mt-3 mb-4">Vos trois flux préférés :</h1>
<div class="container">
    <div class="row">
        <?php
            foreach($cookieSport as $val){ $count = 0;?>
                <div class="col-12 col-sm-4 border border-secondary rounded-3">
                    <h2 class="mb-4 mt-4 text-center"><u><?=$array[$val]?></u></h2>
                    <div>
                    <?php
                    $xml = simplexml_load_file('https://rmcsport.bfmtv.com/rss/'.$arrayUrl[$val].'/');
                    $i=0;
                    foreach ($xml->channel->item as $item){ 
                    $datetime = date_create($item->pubDate);
                    $date = date_format($datetime, 'd M Y, H\hi');?>
                    <?='#'.$date.'</br>'?>  
                        <a href="/controllers/article-controller.php?id=<?=$i++;?>&flux=<?=$val;?>"><?=$item->title.'</br></br>';?></a> 
                        <div></div>               
                        <?php $count++;
                            if ($count == 6)
                            break; } ?>
                    </div>
                </div>
            <?php } ?>
    </div>
</div> 




