<div class="container p-0">
    <div class="row justify-content-center">
        <div class="col col-lg-8">
        <form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" novalidate class="d-flex flex-column justify-content-center">
            <div class="container bg-light">
                <div class="row justify-content-center">
                <p class="mb-2 mt-3 text-center fw-bold">Mode de l'écran : </p><br> 
                    <div class="col d-flex justify-content-center p-2"> 
                        <input type="radio"  id="light" name="screenMode" value="1" required>
                        <label for="light" class="ms-2 me-5">Light</label>      
                        <input type="radio" id="dark" name="screenMode" value="2" required>
                        <label for="dark" class="ms-2">Dark</label>   
                    </div>                   
                </div>              
                <div class="row">
                    <p class="mb-2 mt-3 text-center fw-bold">Nombre d'articles :</p>
                    <div class="col d-flex justify-content-center p-2">
                        
                        <input type="radio" id="six" name="articleNumber" value="1" required>
                        <label for="six" class="ms-2 me-5">6</label>
                            
                        <input type="radio" id="nine" name="articleNumber" value="2" required>
                        <label for="nine"class="ms-2 me-5">9</label>

                        <input type="radio" id="twelve" name="articleNumber" value="2" required>
                        <label for="twelve"class="ms-2">12</label>
                    </div>
                
                <div class="row">
                    <p class="mb-2 mt-3 text-center fw-bold">Sélectionnez vos sujets :</p>  
                    <div class="col d-flex flex-column align-items-center p-2">
                        <div>
                            <input type="checkbox" id="football" name="subject" value="1" required>
                            <label for="football" class="ms-2">Football</label>
                        </div>        
                        
                        <div>
                            <input type="checkbox" id="tennis" name="subject" value="2" required>
                            <label for="tennis"class="ms-2">Tennis</label>
                        </div>
                        <div>
                            <input type="checkbox" id="rugby" name="subject" value="3" required>
                            <label for="rugby"class="ms-2">Rugby</label>
                        </div>
                        <div>
                            <input type="checkbox" id="basket" name="subject" value="4" required>
                            <label for="basket"class="ms-2">Basket</label>
                        </div>
                        <div>
                            <input type="checkbox" id="handball" name="subject" value="5" required>
                            <label for="handball"class="ms-2">Handball</label> 
                        </div>  
                        <div class="text-dark fst-italic mb-3 mt-3">
                            <?=$errorArray['errorsubject'] ?? '';?>
                        </div>                        
                    </div>
                </div>                
            </div>
            
            <div class="d-flex justify-content-center">
                <button type="submit" id="inputValid" class="btn btn-primary mt-4 mb-3 fw-bold w-25">Valider</button>
            </div>
        </form>                                      
    </div>                
</div>            
    