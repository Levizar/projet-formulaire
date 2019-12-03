<?php
$page = "products";

// <!----------- Header (with head an body tags) ----------->

include 'assets/php/header.php';
include 'assets/php/card.php'; ?>


<div class="container col-11 col-lg-9 d-flex flex-wrap justify-content-around">

<?php generate_card("raspberryPi1.jpg","Raspberry pi 1", "Joli rasberry qui fonctionne super bien youhou", "#");?>
<?php generate_card("raspberryPi2.jpg","Raspberry pi 2", "Un autre joli rasberry qui fonctionne super bien waiiiii", "#");?>
<?php generate_card("raspberryPi2.jpg","Raspberry pi 2", "Un autre joli rasberry qui fonctionne super bien waiiiii", "#");?>

</div>


<!----------- Footer (with end tags) ----------->

<?php include 'assets/php/footer.php';?> 