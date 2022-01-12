
<h1 class="h2 text-center mt-3 mb-4">Vos trois flux préférés :</h1>
<div class="container">
    <div class="row">
        <?php
            foreach($cookieSport as $val){ $count = 0;?>
                <div class="col-12 col-sm-4 border border-secondary rounded-3">
                    <h2 class="mb-4 mt-4 text-center"><?=$array[$val]?></h2>
                    <div>
                    <?php
                    $xml = simplexml_load_file('https://rmcsport.bfmtv.com/rss/'.$array[$val].'/');
                    foreach ($xml->channel->item as $item){ 
                    $datetime = date_create($item->pubDate);
                    $date = date_format($datetime, 'd M Y, H\hi'); ?>
                        <a href=""><?=$item->title.'</br></br>';?></a>
                        <?php $count++;
                            if ($count == 6)
                            break; } ?>
                    </div>
                </div>
            <?php } ?>
    </div>
</div> 




