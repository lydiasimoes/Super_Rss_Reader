<?php include(dirname(__FILE__).'/template/header.php');?>
<!-- ***** navbar **** -->
<?php include(dirname(__FILE__).'/template/navbar.php');?>

<div class="background">
    <div class="btn-toggle"> Nuit </div>
    <h1 class="h2 text-center text-secondary mb-5 fw-bold">Veuillez sélectionner 3 sujets</h1>

    <div class="container p-0">
        <div class="row justify-content-center">
            <div class="col col-sm-5">
                <div class="list-group">
                    <label class="list-group-item mb-3 fs-3 bg-secondary fw-bold text-primary">
                        <input class="form-check-input me-3" type="checkbox" value="1">
                        <span class="colorText">Football
                        </span>
                    </label>
                    <label class="list-group-item mb-3 fs-3 bg-secondary fw-bold text-primary">
                        <input class="form-check-input me-3" type="checkbox" value="2">
                        <span class="colorText">Rugby
                        </span>
                    </label>
                    <label class="list-group-item mb-3 fs-3 bg-secondary fw-bold text-primary">
                        <input class="form-check-input me-3" type="checkbox" value="3">
                        <span class="colorText">Tennis
                        </span>
                    </label>
                    <label class="list-group-item mb-3 fs-3 bg-secondary fw-bold text-primary">
                        <input class="form-check-input me-3" type="checkbox" value="4">
                        <span class="colorText">Basket
                        </span>
                    </label>
                    <label class="  list-group-item mb-3 fs-3 bg-secondary fw-bold text-primary">
                        <input class="form-check-input me-3 " type="checkbox" value="5">
                        <span class="colorText">Handball
                        </span>
                    </label>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="d-flex col-6 col-sm-6 justify-content-center">
                    <button type="submit" class=" btn btn-primary btn-lg mt-5 mb-5">Valider</button>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include(dirname(__FILE__).'/template/footer.php');?>