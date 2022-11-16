<?php


if(isset($_POST['contactFrmSubmit']))
    && !empty($_POST['name'])
    && !empty($_POST['email'])
    && (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false)
    && !empty($_POST['message']))
{



    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "jocodigitalweb@gmail.com";
    $email_from = "<mail@joco88.com>";
    $email_subject= "Contact Request Submitted";

    $email_body = "<b>You have received a new message from the following user:&nbsp</b> $name<br><br>".
                              "<b>Here is the message:</b><br><br><q><em>$message</em></q><br><br>".
                              "<b>The customer email is:</b>  $email<br><br>";

    $headers = "Content-type: text/html; charset=iso-8859-1 \r\n";
    $headers .= "From: Joco88.com Contact Page Submission $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    $status = 'ok';
    echo $status;
} else {
    echo "err";
}
  echo $status;die;
