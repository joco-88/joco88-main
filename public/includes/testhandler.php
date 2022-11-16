<?php
if(isset($_POST['contactFrmSubmit']) && !empty($_POST['name']) && !empty($_POST['email']) && (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) && !empty($_POST['message'])){

    // Submitted form data
    $customerName   = $_POST['name'];
    $customerEmail  = $_POST['email'];
    $customerMessage= $_POST['message'];

    /*
     * Send email to admin
     */
    $emailTo = "jocodigitalweb@gmail.com";
    $subject= "Contact Request Submitted";

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
    $headers = "Content-type: text/html; charset=iso-8859-1 \r\n";
    $headers .= "From: Joco88.com Contact Page Submission $email_from \r\n";
    $headers .= "Reply-To: $customerEmail \r\n";

    // Additional headers
    $headers .= 'From: Joco88<mail@joco88.com>' . "\r\n";

    // Send email
    if(mail($emailTo,$subject,$htmlContent,$headers)){
        $status = 'ok';
    }else{
        $status = 'err';
    }

    // Output status
    echo $status;die;
}
