<?php
session_start();
$page = "form-validate";

// <!----------- Header (with head an body tags) ----------->

include 'assets/php/header.php';
?>

<div class="col-10 container d-flex align-items-center flex-column">
        <?php 
            if($_SESSION['mail_confirmation']){
                echo '
                <img src="assets/img/checked.png" alt="logo validé" class="img-fluid mb-3" style="width:20%">
                <h2 class="text-center">Votre demande a été envoyée avec succès !</h2>
                <a href="index.php" class="btn bg-color my-5">Revenir au site</a>
                ';
            }else{

            }
        ?>
</div>




<!--  Footer (with end tags)  -->

<?php include 'assets/php/footer.php';?> 