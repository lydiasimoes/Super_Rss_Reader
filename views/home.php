
    <?php include(dirname(__FILE__).'../../header.php');?>
            <!-- ***** navbar **** -->
    <?php include(dirname(__FILE__).'/template/navbar.php');?>

<h1 class="h2 text-center text-white mb-5 mt-3">Veuillez sélectionner 3 sujets parmi les 5 catégories suivantes</h1>

<div class="container p-0">
    <div class="row justify-content-center">
        <div class="col col-sm-5">
            <div class="list-group">
                <label class="list-group-item mb-3">
                    <input class="form-check-input me-3" type="checkbox" value="1">
                    Football
                </label>
                <label class="list-group-item mb-3">
                    <input class="form-check-input me-3" type="checkbox" value="2">
                    Rugby
                </label>
                <label class="list-group-item mb-3">
                    <input class="form-check-input me-3" type="checkbox" value="3">
                    Tennis
                </label>
                <label class="list-group-item mb-3">
                    <input class="form-check-input me-3" type="checkbox" value="4">
                    Basket
                </label>
                <label class="list-group-item mb-3">
                    <input class="form-check-input me-3" type="checkbox" value="5">
                    Handball
                </label>
            </div>
        </div> 
    <div class="row justify-content-center">
        <div class="d-flex col-6 col-sm-6 justify-content-center">
            <button type="submit" class="btn btn-primary btn-lg mt-5">Valider</button>
        </div>
    </div>       
    </div>    
</div>


<?php include(dirname(__FILE__).'../../footer.php');?>