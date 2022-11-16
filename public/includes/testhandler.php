<?php
if(isset($_POST['contactFrmSubmit']) && !empty($_POST['name']) && !empty($_POST['email']) && (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) && !empty($_POST['message']))
{

    // Submitted form data
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $message= $_POST['message'];

    /*
     * Send email to admin
     */
    $to = 'jocodigitalweb@gmail.com';
    $subject = 'Contact Request Submitted';

    $emailBody = "<b>You have received a new message from the following user:&nbsp</b> $name<br><br>".
                              "<b>Here is the message:</b><br><br><q><em>$message</em></q><br><br>".
                              "<b>The customer email is:</b>  $email<br><br>";

    // Set content-type header for sending HTML email
    //$headers = "MIME-Version: 1.0 \r\n";
    $headers = "Content-type: text/html; charset=iso-8859-1 \r\n";
    $headers .= "From: Joco88-NewForm<mail@joco88.com> \r\n";
    $headers .= "Reply-To: $email \r\n";
    // Additional headers


    // Send email
    mail($to,$subject,$emailBody,$headers);
        $status = 'ok';
        echo $status;
    } else {
        $status = 'err';
        echo $status;
    }
?>
