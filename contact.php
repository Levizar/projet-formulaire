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
    
    <form method="POST" action="assets/php/form.php" id="form">
        <div class="form-row my-3">
            <div class="col">
                <label for="firstname">Prénom : <span class="error">* <?php if(isset($arr_errors) && $arr_errors["firstname"] != null){echo $arr_errors["firstname"];} ?></span></label>
                <input type="text" class="form-control" placeholder="Votre prénom" name="firstname" id="firstname" value="<?php if(isset($sanitized_form) && $sanitized_form["firstname"] != ""){echo $sanitized_form["firstname"];} ?>">
            </div>
            <div class="col">
            <label for="lastname">Nom : <span class="error">* <?php if(isset($arr_errors) && $arr_errors["lastname"] != null){echo $arr_errors["lastname"];} ?></span></label>
            <input type="text" class="form-control" placeholder="Votre nom" name="lastname" id="lastname" value="<?php if(isset($sanitized_form) && $sanitized_form["lastname"] != ""){echo $sanitized_form["lastname"];} ?>">
            </div>
        </div>

        <div class="form-row my-3">
            <label class="col-form-label pt-0">Genre : <span class="error">* <?php if(isset($arr_errors) && $arr_errors["gender"] != null){echo $arr_errors["gender"];} ?></span></label>
            <div class="col-4 p-2 rounded" id="radios">
            <?php foreach ($genders as $gender) generate_gender($gender);?>
            </div>
        </div>
      
        <div class="form-row my-3">
            <div class="col">
                <label for="email">E-mail : <span class="error">*  <?php if(isset($arr_errors) && $arr_errors["email"] != null){echo $arr_errors["email"];} ?></span></label>
                <input type="email" class="form-control" placeholder="Votre adresse e-mail" name="email" id="email" value="<?php if(isset($sanitized_form) && $sanitized_form["email"] != ""){echo $sanitized_form["email"];} ?>">
            </div>
        </div>

        <div class="form-row my-3">
            <div class="col">
                <label for="country">Pays : <span class="error">*  <?php if(isset($arr_errors) && $arr_errors["country"] != null){echo $arr_errors["country"];} ?></span></label>
                <select id="country" name="country" class="form-control">
                    <option value="other">Choisir un pays</option>
                    <?php foreach ($countries as $country) generate_country_options($country);?>
                </select>
            </div>
        </div>

        <div class="form-row my-3">
            <div class="col">
                <label for="subject">Sujet : <span class="error"><?php if(isset($arr_errors) && $arr_errors["subject"] != null){echo ' *  ' . $arr_errors["country"];} ?></span></label>
                <select class="form-control" id="subject" name="subject">
                    <option value="other">Choisissez le sujet de votre message</option>
                    <option value="question">J'ai une question à propos d'un produit</option>
                    <option value="reclamation">J'ai une problème avec un produit</option>
                    <option value="buy">Je souhaiterais commander un produit</option>
                </select>
            </div> 
        </div> 

        <div class="form-row my-3">
            <div class="col">
                <label for="message">Message : <span class="error">* <?php if(isset($arr_errors) && $arr_errors["message"] != null){echo $arr_errors["message"];} ?></span></label>
                <textarea class="form-control" placeholder="Votre message" name="message" id="message"><?php if(isset($sanitized_form) && $sanitized_form["message"] != ""){echo $sanitized_form["message"];} ?></textarea>
            </div>
        </div>

        <!-- HONEY POT -->
            <div class="col maya" id="maya">
                <label for="model">Modèle</label>
                <input type="text" class="form-control" placeholder="Modèle de votre raspberry" name="model" autocomplete="off" id="model">
            </div>
        <!-- FIN DU HONEY POT -->

        <div class="d-flex flex-column flex-md-row justify-content-end" id="btn-delete-js">
        <p id="formError" style="color:red"></p>
        <button class="btn bg-color mb-5 ml-3" id="submit">Envoyer</button>
    </div>
    </form>
    <div class="d-flex flex-column flex-md-row justify-content-end" id="btn-pop-js">
    </div>
</div>


<?php echo '<script src="assets/js/formValidate.js"></script>'?>

<!-- Footer (with end tags) -->

<?php include 'assets/php/footer.php';?> 