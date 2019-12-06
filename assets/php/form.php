<?php
session_start();

// thx to stackoverflow
function redirect($url)
{
    ob_start();
    header('Location: ' . $url);
    ob_end_flush();
    exit();
}

function form_processing()
{
    // List of filters
    $arr_sanitizers = [
        'firstname' => FILTER_SANITIZE_STRING,
        'lastname' => FILTER_SANITIZE_STRING,
        'gender' => FILTER_SANITIZE_STRING,
        'email' => FILTER_SANITIZE_EMAIL,
        'country' => FILTER_SANITIZE_STRING,
        'subject' => FILTER_SANITIZE_STRING,
        'message' => FILTER_SANITIZE_STRING,
        'model' => FILTER_SANITIZE_STRING,
    ];

    // List of validaters
    $arr_filters_validers = [
        'firstname' => FILTER_VALIDATE_REGEXP,
        'lastname' => FILTER_VALIDATE_REGEXP,
        'gender' => FILTER_VALIDATE_REGEXP,
        'email' => FILTER_VALIDATE_EMAIL,
        'country' => FILTER_VALIDATE_REGEXP,
        'subject' => FILTER_VALIDATE_REGEXP,
        'message' => FILTER_VALIDATE_REGEXP,
        // 'model' => FILTER_VALIDATE_REGEXP
    ];

    // List of regexp for the validaters
    $arr_regexp_validers = [
        'firstname' => '/[\w-]{2,20}/',
        'lastname' => '/[\w-]{2,30}/',
        'gender' => '/Homme|Femme|Non-binaire/',
        'email' => '/^\w+([.-]?\w+)@\w+([.-]?\w+)(.\w{2,3})+$/',
        'country' => '/[\w-]{2,30}/',
        'subject' => '/[\w -]{2,40}/',
        'message' => '/[\w\W]+/',
        // 'model' => '//',       // Not used because honey pot deleted at the beginning
    ];

    $arr_errors = [
        'firstname' => null,
        'lastname' => null,
        'gender' => null,
        'email' => null,
        'country' => null,
        'subject' => null,
        'message' => null,
    ];

    // Sanitization of the form anwser before any operation
    $sanitized_form = filter_input_array(INPUT_POST, $arr_sanitizers);

    // Checking if the honeypot is still intact
    if ($sanitized_form['model'] == "") {
        // This variable become false only if at least one element is unvalid
        $is_form_valid = true;
        // unset the model #HoneyPot
        unset($sanitized_form['model']);

        // (un)Validation step
        foreach ($sanitized_form as $key => $value) {
            // Erasing space char before and after the answers
            $sanitized_form["$key"] = trim($value);
            // If the data aren't validate, prepare an error message for rejection
            if (!filter_var(
                $value,
                $arr_filters_validers["$key"],
                array("options" => array("regexp" => $arr_regexp_validers["$key"]))
            )) {
                $arr_errors["$key"] = "L'information $key n'est pas valide";
                $is_form_valid = false;
            }
        }
        if ($is_form_valid) {
            // Action to do if all validation step passed
            foreach ($arr_errors as $key => $value) $arr_errors["$key"] = null;
            
            $mail_to = "winzard@hotmail.com";
            $mail_subject = 'Subject: ' . $sanitized_form["subject"];
            $mail_content = 'From: ' . $sanitized_form["email"] . '\n';
            $mail_content .= $sanitized_form["lastname"] .' ' . $sanitized_form["firstname"] . '\n';
            $mail_content .= $sanitized_form["gender"] . '\n';
            $mail_content .= $sanitized_form["country"] . '\n';
            $mail_content .= $sanitized_form["subject"] . '\n';
            $mail_content .= $sanitized_form["message"];
            
            // 



            // TO DO: SEND THE lastname

            // redirection to the valid send page if everything went good
            redirect("../../valid-form.php");

        } else {
            // if the form isn't valid
            // Send back users to the form
            $_SESSION["sanitized_form"] = $sanitized_form;
            $_SESSION["arr_errors"] = $arr_errors;
            redirect("../../contact.php");
        }
    } else {
        // Honey Pot was taken thus we redirect to the valid-form page
        redirect("../../valid-form.php");
    }
}

form_processing();
