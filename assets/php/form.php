<?php

// thx to stackoverflow
function redirect($url) {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    exit();
}

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

    // List of validaters
    $arr_filters_validers = [
        'firstname' => FILTER_VALIDATE_REGEXP,
        'lastname' => FILTER_VALIDATE_REGEXP,
        'gender' => FILTER_VALIDATE_REGEXP,
        'email' => FILTER_VALIDATE_EMAIL,
        'country' => FILTER_VALIDATE_REGEXP,
        'message' => FILTER_VALIDATE_REGEXP,
        // 'model' => FILTER_VALIDATE_REGEXP 
    ];
    
    // List of regexp for the validaters
    $arr_regexp_validers = [
        'firstname' => '/[\w-]{2,20}/',
        'lastname' => '/[\w-]{2,30}/',
        'gender' => '/Homme|Femme|Non-binaire/',
        // 'email' => '/^\w+([.-]?\w+)@\w+([.-]?\w+)(.\w{2,3})+$/', not used beause filter_validate_email
        'country' => '/[\w-]{2,30}/',
        'message' => '/[\w\W]+/',
        // 'model' => '//', 
    ];

    $arr_errors = [
        'firstname' => null,
        'lastname' => null,
        'gender' => null,
        'email' => null,
        'country' => null,
        'message' => null,
        // 'model' => null 
    ];

    // Sanitization of the form anwser before any operation
    $sanitized_form = filter_input_array(INPUT_POST, $arr_sanitizers);
    
    // Checking if the honeypot is still intact
    if($sanitized_form['model'] == ""){
        // This variable become false only if at least one element is unvalid
        $is_form_valid = true;
        // unset the model #HoneyPot
        unset($sanitized_form['model']);
        
        // Validation
        foreach($sanitized_form as $key => $value){
            // Erasing space before and after the answers
            $sanitized_form["$key"] = trim($value);
            if( filter_var(
                $value, 
                $arr_filters_validers["$key"],
                array("options" => array("regexp" => $arr_regexp_validers["$key"]))
                )){
                }else{
                    $arr_errors["$key"] = "$key n'est pas valide";
                    echo '<pre>';
                    print_r($arr_errors);
                    $is_form_valid = false;
                }
            }
            if($is_form_valid){
                // Action to do if all validation step passed
                // redirection to the ok pg
                redirect("../../valid-form.php");
                
                
            } else {
                echo 'going to NOT valid';
                // if the form isn't valid
                // Send back users to the form


            }
    } else {
        // à faire renvoyer page de "validation OK" pour le bot suite au honeypot
        
    }
}

form_processing();