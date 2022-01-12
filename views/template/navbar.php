<?php
       $array = array(
        1 => 'Football',
        2 => 'Rugby',
        3 => 'Tennis',
        4 => 'Basket',
        5 => 'Handball',
        ); 
        if(isset($_COOKIE['cookieSport'])){
            $cookieSport = json_decode($_COOKIE['cookieSport'], true);
        }else{
            $cookieSport = [];
        } ?>
<header> 
            <div class="container-fluid bg-dark p-0">
                        <nav class="navbar navbar-expand-lg sticky-top navbar-light navbar-dark bg-dark">
                            <div class="container-fluid">
                                <a class="navbar-brand text-center" href="/../../controllers/home-controller.php"><img src="/assets/img/logo-sport-actu.png" alt="logo de spot actu"></a>
                                

                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 link-secondary fs-4">
                                    <?php 
                                    if(!empty($cookieSport)){
                                        foreach($cookieSport as $val){?>
                                        <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="/views/pages/detail.php"><?=$array[$val]?></a>
                                        </li>
                                    <?php
                                }}?>
                                        <li class="nav-item">
                                            <a class="nav-link" aria-current="page" href="/../../controllers/parameters-controller.php">Paramètres</a>
                                        </li>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
            </div>
    </header>