<?php
$page = "products";

// <!----------- Header (with head an body tags) ----------->

include 'assets/php/header.php';
include 'assets/php/card.php'; ?>


<div class="container col-10 col-lg-10 d-flex flex-wrap justify-content-around">

<?php generate_card("raspberryPi1.jpg","Raspberry 1", "Joli rasberry fonctionne super bien youhou", "#");?>

</div>


<!----------- Footer (with end tags) ----------->

<?php include 'assets/php/footer.php';?> 