<h1 class="h2 text-center text-white mb-5 mt-3">Veuillez sélectionner 3 sujets parmi les 5 catégories suivantes</h1>
<form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" novalidate>
<div class="container p-0">
    <div class="row justify-content-center">
        <div class="col col-sm-5">
            <div class="list-group">
                <label class="list-group-item mb-3">
                    <input class="form-check-input me-3" name="football" type="checkbox" value="1">
                    Football
                </label>
                <label class="list-group-item mb-3">
                    <input class="form-check-input me-3" name="rugby" type="checkbox" value="2">
                    Rugby
                </label>
                <label class="list-group-item mb-3">
                    <input class="form-check-input me-3" name="tennis" type="checkbox" value="3">
                    Tennis
                </label>
                <label class="list-group-item mb-3">
                    <input class="form-check-input me-3" name="basket" type="checkbox" value="4">
                    Basket
                </label>
                <label class="list-group-item mb-3">
                    <input class="form-check-input me-3" name="handball" type="checkbox" value="5">
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
</form>


