<?php
// Test sans sanitize
// echo '<pre>';
// print_r($_POST);
// echo gettype($_POST['model']);



// $data is $_POST
function form_processing(){
    // List of filters
    $arr_sanitizers = [
        'firstname' => FILTER_SANITIZE_STRING,
        'lastname' => FILTER_SANITIZE_STRING,
        'gender' => FILTER_SANITIZE_STRING,
        'email' => FILTER_SANITIZE_EMAIL,
        'country' => FILTER_SANITIZE_STRING,
        'message' => FILTER_SANITIZE_STRING,
        'model' => FILTER_SANITIZE_STRING
    ];

    $arr_filters_validers = [
        'firstname' => FILTER_VALIDATE_REGEXP,
        'lastname' => FILTER_VALIDATE_REGEXP,
        'gender' => FILTER_VALIDATE_REGEXP,
        'email' => FILTER_VALIDATE_EMAIL,
        'country' => FILTER_VALIDATE_REGEXP,
        'message' => FILTER_VALIDATE_REGEXP,
        'model' => FILTER_VALIDATE_REGEXP 
    ];
    
    $arr_regexp_validers = [
        'firstname' => '/[\w-]{2,20}/',
        'lastname' => '/[\w-]{2,30}/',
        'gender' => '/Homme|Femme|Non-binaire/',
        // 'email' => '/^\w+([.-]?\w+)@\w+([.-]?\w+)(.\w{2,3})+$/', not used beause filter_validate_email
        'country' => '/[\w-]{2,30}/',
        'message' => '/[\w\W]+/',
        'model' => '/[\w\W]+/', 
    ];

    // Sanitization du formulaire avant opération
    $sanitized_form = filter_input_array(INPUT_POST, $arr_sanitizers);
    
    // Si $_POST['model'] est un honeypot
    // Si rempli: ne rien faire
    if($sanitized_form['model'] == ""){
        // Test après sanitize après honeypot

        // Validation
        foreach($sanitized_form as $key => $value){
            if( filter_var(
                $value, 
                $arr_filters_validers["$key"],
                array("options" => array("regexp" => $arr_regexp_validers["$key"]))
                )){

                echo '<pre>';
                echo $value;
            }
        }
    } else {
        // à faire renvoyer page de "validation OK" pour le bot suite au honeypot
        
    }
}

form_processing();