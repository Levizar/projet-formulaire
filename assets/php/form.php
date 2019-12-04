<?php
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$country = $_POST['country'];
$message = $_POST['message'];
$honeyPot = $_POST['telephone'];



// $data is $_POST
function form_processing(){
    // List of filters
    $arr_filters = array
    (
        'firstname' => FILTER_SANITIZE_STRING,
        'lastname' => FILTER_SANITIZE_STRING,
        'gender' => FILTER_SANITIZE_STRING,
        'email' => FILTER_VALIDATE_EMAIL,
        'country' => FILTER_SANITIZE_STRING,
        'message' => FILTER_SANITIZE_STRING,
        'model' => FILTER_SANITIZE_STRING
    );

    // Sanitization du formulaire avant opération
    $sanitized_form = filter_input_array(INPUT_POST, $arr_filters);
    echo print_r($sanitized_form);
    // Si $_POST['model'] est un honeypot
    // Si rempli: ne rien faire
    if( 1 ){
        // Sanitizer
        
    }
}

form_processing();