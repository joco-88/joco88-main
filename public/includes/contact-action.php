<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
//$fullName = "$fname . $lname";
$customerMessage = $_POST['customer_message'];
$customerEmail = $_POST['email'];
$phone = $_POST['phone'];
//$contactReason = $_POST['contact_reason'];
//$fullEmail = "Message from $fname - Message: $customerMessage";
?>

<?php
	$email_from = 'mail@joco88.com';

	$email_subject = "Joco88 - New Form Submission";

	$email_body = "You have received a new message from the user $fname.\n".
                            "Here is the message:\n $customerMessage.\n";
                            //"The contact reason is:\n $contactReason"

?>

<?php
  $to = "jocodigitalweb@gmail.com";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $customerEmail \r\n";
  mail($to,$email_subject,$email_body,$headers);
 ?>


<div class="container-fluid">
Hello,&nbsp
<?php echo $_POST["fname"]; ?>
!<br><br>
Thanks for reaching out.<br>
Once I have reviewed your message, we will reach out to you at the email address you provided, which is:
<strong>
  <?php echo $_POST["email"]; ?>
</strong>
<br>
<br>
Have a great day!<br>
<div>
</main>

<?php
echo $fname\n;
echo $lname\n;
//echo $fullName;
echo $customerMessage\n;
echo $customerEmail;
echo $phone;
//echo $contact_reason;
//echo $fullEmail;

 ?>


<!-- End of main content - footer will start below. -->

  <footer>
    <?php
      include('../templates/footer.php');
    ?>
  </footer>
</body>
</html>
