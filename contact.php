<?php
$page = "contact";

// <!----------- Header (with head an body tags) ----------->

include 'assets/php/header.php';?>


<div class="container col-10 col-md-8 col-lg-6 ">
    <h1 class="text-center my-5">Contactez-nous</h1>
    
    <form method="POST">
        <div class="form-row my-3">
            <div class="col">
                <label for="firstname">Prénom :</label>
                <input type="text" class="form-control" placeholder="Votre prénom" name="firstname">
            </div>
            <div class="col">
            <label for="lastname">Nom :</label>
            <input type="text" class="form-control" placeholder="Votre nom" name="lastname">
            </div>
        </div>

        <div class="form-row my-3">
            <legend class="col-form-label col-sm-2 pt-0">Genre :</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="Homme" checked>
                    <label class="form-check-label" for="gridRadios1">
                        Homme
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="Femme">
                    <label class="form-check-label" for="gridRadios2">
                        Femme
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="Non-binaire">
                    <label class="form-check-label" for="gridRadios2">
                        Non-binaire
                    </label>
                </div>
            </div>
        </div>
      
        <div class="form-row my-3">
            <div class="col">
                <label for="email">E-mail :</label>
                <input type="mail" class="form-control" placeholder="Votre e-mail" name="email">
            </div>
        </div>

        <div class="form-row my-3">
            <div class="col">
                <label for="country">Pays :</label>
                <input type="text" class="form-control" placeholder="Votre pays" name="country">
            </div>
        </div>

        <div class="form-row my-3">
            <div class="col">
                <label for="subject">Sujet :</label>
                <select class="form-control">
                    <option value="other" selected>Choisissez le sujet de votre message...</option>
                    <option value="question">J'ai une question à propos d'un produit</option>
                    <option value="reclamation">J'ai une problème avec un produit</option>
                    <option value="buy">Je souhaiterais commander un produit</option>
                </select>
            </div> 
        </div> 

        <div class="form-row my-3">
            <div class="col">
                <label for="message">Message :</label>
                <textarea class="form-control" placeholder="Votre message" name="message"></textarea>
            </div>
        </div>

        <!-- HONEY POT -->
            <div class="col sacamerde" id="sacamerde">
                <label for="telephone">Téléphone</label>
                <input type="numbers" class="form-control" placeholder="Votre n° de téléphone" name="telephone">
            </div>
        <!-- FIN DU HONEY POT -->

        <input type="submit" value="Envoyer" class="mb-5">            
    </form>
</div>

<?php include 'assets/php/form.php';?>


<!----------- Footer (with end tags) ----------->

<?php include 'assets/php/footer.php';?> 