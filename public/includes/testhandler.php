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
    $to     = 'jocodigitalweb@gmail.com';
    $subject= 'Contact Request Submitted';

    $htmlContent = '
    <h4>New form submission on Joco88, using the new modal form.</h4>
    <table cellspacing="0" style="width: 300px; height: 200px;">
        <tr>
            <th>Name:</th><td>'.$name.'</td>
        </tr>
        <tr style="background-color: #e0e0e0;">
            <th>Email:</th><td>'.$email.'</td>
        </tr>
        <tr>
            <th>Message:</th><td>'.$message.'</td>
        </tr>
    </table>';

    // Set content-type header for sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Additional headers
    $headers .= 'From: Joco88-NewForm<mail@joco88.com>' . "\r\n";

    // Send email
    mail($to,$subject,$htmlContent,$headers)
        $status = 'ok';
        echo $status;
    } else {
        $status = 'err';
        echo $status;
    }
