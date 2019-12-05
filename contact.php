<?php
session_start();
$page = "contact";
// If session saved variable -> initializing variable to use
if(isset($_SESSION["sanitized_form"])) $sanitized_form = $_SESSION["sanitized_form"];
if(isset($_SESSION["arr_errors"])) $arr_errors = $_SESSION["arr_errors"];


// <!----------- Header (with head an body tags) ----------->

include 'assets/php/header.php';
include 'assets/php/generation_functions.php';?>


<div class="container col-10 col-md-8 col-lg-6 ">
    <h1 class="text-center my-5">Contactez-nous</h1>
    
    <form method="POST" action="assets/php/form.php">
        <div class="form-row my-3">
            <div class="col">
                <label for="firstname">Prénom : <span style="color:#cc992b">*</span></label>
                <input type="text" class="form-control" placeholder="Votre prénom" name="firstname" id="firstname" value="<?php if($sanitized_form["firstname"] != ""){echo $sanitized_form["firstname"];} ?>" required max-length="20">
            </div>
            <div class="col">
            <label for="lastname">Nom : <span style="color:#cc992b">*</span></label>
            <input type="text" class="form-control" placeholder="Votre nom" name="lastname" id="lastname" value="<?php if($sanitized_form["lastname"] != ""){echo $sanitized_form["lastname"];} ?>" required max-length="20">
            </div>
        </div>

        <div class="form-row my-3">
            <legend class="col-form-label col-sm-2 pt-0">Genre :</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="Homme" value="Homme">
                    <label class="form-check-label" for="gridRadios1">
                        Homme
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="Femme" value="Femme">
                    <label class="form-check-label" for="gridRadios2">
                        Femme
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="Autre" value="Autre">
                    <label class="form-check-label" for="gridRadios3">
                        Autre
                    </label>
                </div>
            </div>
        </div>
      
        <div class="form-row my-3">
            <div class="col">
                <label for="email">E-mail : <span style="color:#cc992b">*</span></label>
                <input type="mail" class="form-control" placeholder="Votre adresse e-mail" name="email" id="email" value="<?php if($sanitized_form["email"] != ""){echo $sanitized_form["email"];} ?>" required>
            </div>
        </div>

        <div class="form-row my-3">
            <div class="col">
                <label for="country">Pays : <span style="color:#cc992b">*</span></label>
                <select id="country" name="country" class="form-control" id="country" value="<?php if($sanitized_form["country"] != ""){echo $sanitized_form["country"];} ?>" required>
                    <option value="other">Choisir un pays</option>
                    <?php foreach ($countries as $country) {
                        generate_country_options($country);
                    } ?>
                </select>
            </div>
        </div>

        <div class="form-row my-3">
            <div class="col">
                <label for="subject">Sujet :</label>
                <select class="form-control" id="subject" name="subject" value="<?php if($sanitized_form["subject"] != ""){echo $sanitized_form["subject"];} ?>" required>
                    <option value="other" selected>Choisissez le sujet de votre message</option>
                    <option value="question">J'ai une question à propos d'un produit</option>
                    <option value="reclamation">J'ai une problème avec un produit</option>
                    <option value="buy">Je souhaiterais commander un produit</option>
                </select>
            </div> 
        </div> 

        <div class="form-row my-3">
            <div class="col">
                <label for="message">Message : <span style="color:#cc992b">*</span></label>
                <textarea class="form-control" placeholder="Votre message" name="message" id="message" required><?php if($sanitized_form["message"] != ""){echo $sanitized_form["message"];} ?></textarea>
            </div>
        </div>

        <!-- HONEY POT -->
            <div class="col maya" id="maya">
                <label for="model">Modèle</label>
                <input type="text" class="form-control" placeholder="Modèle de votre raspberry" name="model" autocomplete="off">
            </div>
        <!-- FIN DU HONEY POT -->

        <div class="d-flex flex-column flex-md-row justify-content-end">
            <p id="formError" style="color:red"></p>
            <input type="submit" value="Envoyer" class="btn bg-color mb-5 ml-3" id="submit">
        </div>
    </form>
</div>


<script src="assets/js/formValidate.js"></script>

<!----------- Footer (with end tags) ----------->

<?php include 'assets/php/footer.php';?> 