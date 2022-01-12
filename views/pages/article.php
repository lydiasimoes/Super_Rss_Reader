<main>
<div class="container-fluid p-0">
    <div class="row justify-content-center">
        <div class="col col-md-10 col-xl-8 d-flex flex-column align-items-center">
            <h1 class="col text-center fw-bold fs-1 mt-3 mb-3"><?=$article->title;?></h1>
        </div>
    
        <div class="col-12 col-md-10 col-xl-8 fst-italic mb-3 text-center">
            <?=$article->pubDate;?>
        </div>

        <div class="col col-md-10 col-xl-8 text-center d-flex flex-column align-items-center fs-5">
            <?=$article->description;?>
        </div>

                
        <div>
            <?=$article->enclosure;?>
        </div>
            
        </div>
    </div>
</div>
</main>
