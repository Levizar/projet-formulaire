<?php
session_start();
$page = "form-validate";

// <!----------- Header (with head an body tags) ----------->

include 'assets/php/header.php';
?>

<div class="col-10 container d-flex align-items-center flex-column">
        <?php
if ($_SESSION['mail_confirmation']) {
    echo '
        <img src="assets/img/checked.png" alt="logo envoi mail validé" class="img-fluid mb-3" style="width:20%">
        <h2 class="text-center">Votre demande a été envoyée avec succès !</h2>
        <a href="index.php" class="btn bg-color my-5">Revenir au site</a>
        ';
} else {
    echo '
        <img src="assets/img/Mail_not_sended.png" alt="logo envoi mail non effectué" class="img-fluid mb-3" style="width:20%">
        <h2 class="text-center">Pour une raison indépendante de notre volonté, le service de contact est actuellement indisponible.</h2>
        <a href="index.php" class="btn bg-color my-5">Revenir au site</a>
        ';
}
?>
</div>




<!--  Footer (with end tags)  -->

<?php include 'assets/php/footer.php';?>