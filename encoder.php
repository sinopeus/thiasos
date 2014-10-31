<?php
/**
 * Encode an email address to display on your website
 */
function encode_email_address( $email ) {

    $output = '';

    for ($i = 0; $i < strlen($email); $i++) 
        { 
            $output .= '&#'.ord($email[$i]).';'; 
        }

    return $output;
}

function print_email_address($email) {
$encodedEmail = encode_email_address($email);

printf('<a href="mailto:%s">%s</a>', $encodedEmail, $encodedEmail);
}

function print_email_address_with_name($email,$name) {
$encodedEmail = encode_email_address($email);

printf('<a href="mailto:%s">%s</a>', $encodedEmail, $name);
}
?>