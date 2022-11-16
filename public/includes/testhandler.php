<?php
if(isset($_POST['contactFrmSubmit']) && !empty($_POST['name']) && !empty($_POST['email']) && (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) && !empty($_POST['message'])){

    // Submitted form data
    $customerName   = $_POST['name'];
    $customerEmail  = $_POST['email'];
    $customerMessage= $_POST['message'];

    /*
     * Send email to admin
     */
    $to     = 'jocodigitalweb@gmail.com';
    $subject= 'Contact Request Submitted';

    $htmlContent = '
    <h4>Contact request has submitted at JOCO88.com - On The New Modal Form.</h4>
    <table cellspacing="0" style="width: 300px; height: 200px;">
        <tr>
            <th>Name:</th><td>'.$customerName.'</td>
        </tr>
        <tr style="background-color: #e0e0e0;">
            <th>Email:</th><td>'.$customerEmail.'</td>
        </tr>
        <tr>
            <th>Message:</th><td>'.$customerMessage.'</td>
        </tr>
    </table>';

    // Set content-type header for sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Additional headers
    $headers .= 'From: Joco88<mail@joco88.com>' . "\r\n";

    // Send email
    if(mail($to,$subject,$htmlContent,$headers)){
        $status = 'ok';
    }else{
        $status = 'err';
    }

    // Output status
    echo $status;die;
}
