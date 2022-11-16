<?php
if(isset($_POST['contactFrmSubmit']) && !empty($_POST['name']) && !empty($_POST['email']) && (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) && !empty($_POST['message']))
{

    // Submitted form data
    $name = htmlspecialchars($_POST['name']?? '');
    $email = htmlspecialchars($_POST['email']?? '');
    $message = htmlspecialchars($_POST['message']?? '');

    /*
     * Send email to admin
     */
    $to = 'mail@joco88.com';
    $subject = 'Contact Request Submitted';

    $emailBody = "<b>You have received a new message from the following contact name:&nbsp</b> $name<br><br>".
                              "<b> <b>They provided the following email:</b>  $email<br><br>".
                              "<b>$name has included the message below:</b><br><br><q><em>$message</em></q><br><br>";

    // Set content-type header for sending HTML email
    //$headers = "MIME-Version: 1.0 \r\n";
    $headers = "Content-type: text/html; charset=iso-8859-1 \r\n";
    $headers .= "From: Joco88 - Contact Form<mail@joco88.com> \r\n";
    $headers .= "Reply-To: $email \r\n";
    // Additional headers


    // Send email
    mail($to,$subject,$emailBody,$headers);
        $status = 'ok';
        echo $status;die;
    } else {
        $status = 'err';
        echo $status;die;
    }
?>
