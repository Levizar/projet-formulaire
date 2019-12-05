<?php
$page = "products";

// <!----------- Header (with head an body tags) ----------->

include 'assets/php/header.php';
include 'assets/php/generation_functions.php'; ?>


<h1 class="text-center my-5">Nos produits</h1>

<div class="container col-11 col-md-9 col-lg-10 d-flex flex-wrap justify-content-around">


<?php generate_card("pi_0.jpg","Raspberry Pi Zero", "Le moins cher de nos ordinateurs monocartes.", "https://www.raspberrypi.org/products/raspberry-pi-zero/");?>
<?php generate_card("pi_0W.jpg","Raspberry Pi Zero W", "Ordinateur monocarte avec connectivité wifi et bluetooth.", "https://www.raspberrypi.org/products/raspberry-pi-zero-w/");?>
<?php generate_card("pi_1A+.jpg","Raspberry Pi 1 modèle A+", "Le modèle A + est la variante à faible coût du Raspberry Pi.", "https://www.raspberrypi.org/products/raspberry-pi-1-model-a-plus/");?>
<?php generate_card("pi_1B+.jpg","Raspberry Pi 1 modèle B+", "Le modèle B+ est la dernière revision du Raspberry original.", "https://www.raspberrypi.org/products/raspberry-pi-1-model-b-plus/");?>
<?php generate_card("pi_2B.jpg","Raspberry Pi 2 modèle B", "Le raspberry Pi 2 modèle B est la seconde génération. ", "https://www.raspberrypi.org/products/raspberry-pi-2-model-b/");?>
<?php generate_card("pi_3B.jpg","Raspberry pi 3 modèle B", "Ordinateur monocarte de 3ème génération.", "https://www.raspberrypi.org/products/raspberry-pi-3-model-b/");?>
<?php generate_card("pi_3A+.jpg","Raspberry Pi 3 modèle A+", "Raspberry Pi de 3ème génération, au format A+.", "https://www.raspberrypi.org/products/raspberry-pi-3-model-a-plus/");?>
<?php generate_card("pi_4B.jpg","Raspberry pi 4 modèle B", "Le plus petit de nos ordinateur à double affichage.", "https://www.raspberrypi.org/products/raspberry-pi-4-model-b/");?>
<?php generate_card("pi_4_desktop_kit.jpg","Raspberry Pi 4 desktop kit", "Kit complet, plus qu'à le connecter en HDMI.", "https://www.raspberrypi.org/products/raspberry-pi-4-desktop-kit/");?>
<?php generate_card("case_pi_0.jpg","Coque Raspberry Pi Zero", "Coque conçue spécialement pour les modèles Zero & Zero W.", "https://www.raspberrypi.org/products/raspberry-pi-zero-case/");?>
<?php generate_card("pi_guide.jpg","Guide pour débutants", "Manuel d'utilisation pour raspberry Pi.", "https://www.raspberrypi.org/products/beginners-guide-pi-4/");?>
<?php generate_card("hdmi.jpg","Micro HDMI vers HDMI standard", "Câble Raspberry Pi officiel de micro HDMI vers hdmi standard.", "https://www.raspberrypi.org/products/micro-hdmi-to-standard-hdmi-a-cable/");?>

</div>


<!----------- Footer (with end tags) ----------->

<?php include 'assets/php/footer.php';?> 