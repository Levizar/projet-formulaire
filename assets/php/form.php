<?php
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$country = $_POST['country'];
$message = $_POST['message'];
$honeyPot = $_POST['telephone'];

function form($firstName,$lastName,$gender,$email,$country,$message,$honeyPot){
    // Si honeyPot rempli: ne rien faire
    if(!isset($honeyPot)){
        // Sanitizer
        
    }
}
