
<header> 
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center fw-bold fs-1 mt-3 mb-3"><?=$article->title;?></h2>
            <div class="mb-3 ms-5">
                <div>
                    <?=$article->pubDate;?>
                </div>
                <div>
                    <?=$article->description;?>
                </div>
                <div>
                <?=$article->enclosure;?>
                </div>
            </div>
        </div>
    </div>
</div>
</header>