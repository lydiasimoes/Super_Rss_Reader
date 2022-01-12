
<header> 
<div class="container">
    <div class="row">

    <?php
        foreach($cookieSport as $val){ $count = 0;?>
            <div class="col-12 border border-secondary rounded-3">
                <h class="fw-bold fs-1 mt-3 mb-3 text-center"><?=$array[$val]?></h1>
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
</header>

