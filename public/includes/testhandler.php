<?php

error_reporting(E_ALL); ini_set('display_errors', 1);

if(isset($_POST['contactFrmSubmit'])
    && !empty($_POST['name'])
    && !empty($_POST['email'])
    && (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false)
    && !empty($_POST['message'])) {

    // Submitted form data
    $customerName   = $_POST['name'];
    $customerEmail  = $_POST['email'];
    $customerMessage= $_POST['message'];

    /*
     * Send email to admin
     */
    $emailTo = "jocodigitalweb@gmail.com";
    $email_from = "<mail@joco88.com>";
    $email_subject= "Contact Request Submitted";

    $email_body = "<b>You have received a new message from the following user:&nbsp</b> $fullName<br><br>".
                              "<b>Here is the message:</b><br><br><q><em>$customerMessage</em></q><br><br>".
                              "<b>The contact reason is:</b>  $contactReason<br><br>".
                              "<b>The customer email is:</b>  $customerEmail<br><br>";

    $headers = "Content-type: text/html; charset=iso-8859-1 \r\n";
    $headers .= "From: Joco88.com Contact Page Submission $email_from \r\n";
    $headers .= "Reply-To: $customerEmail \r\n";
    mail($emailTo,$email_subject,$email_body,$headers);


$status = 'ok';
}
echo $status;die;

?>
