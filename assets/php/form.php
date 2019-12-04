<?php
echo '<pre>';
print_r($_POST);
echo gettype($_POST['model']);



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
    if($sanitized_form['model'] == ""){
        
        // Validation
        


    } else {
        // à faire renvoyer page de "validation OK" pour le bot suite au honeypot
        
    }
}

form_processing();