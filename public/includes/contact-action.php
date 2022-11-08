<?php

$fname = htmlspecialchars($_POST['fname']);
$lname = htmlspecialchars($_POST['lname']);
$fullName = "$fname $lname";
$customerMessage = htmlspecialchars($_POST['customer_message']);
$customerEmail = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$contactReason = htmlspecialchars($_POST['contact_reason']);
?>

<?php
	$email_from = "mail@joco88.com";

	$email_subject = "Joco88 - New Form Submission";

	$email_body = "<b>You have received a new message from the following user:</b> $fullName.\n".
                            "<b>Here is the message:</b>\n $customerMessage.\n\n\n".
                            "<b>The contact reason is:</b>  $contactReason.\n\n".
                            "<b>The customer email is:</b>  $customerEmail.\n\n".
                            "<b>The customer phone number is:</b> $phone.\n\n";

?>

<?php
  $emailTo = "mail@joco88.com";
  $headers = "Content-type: text/html; charset=iso-8859-1 \r\n";
  $headers .= "From: Joco88.com Contact Page $email_from \r\n";
  $headers .= "Reply-To: $customerEmail \r\n";
  mail($emailTo,$email_subject,$email_body,$headers);
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
Have a great day!<br><hr>
<div>
</main>

<?php
echo "First Name: $fname <br>";
echo "Last Name: $lname <br>";
echo "Full Name: $fullName <br>";
echo "Customer Message: $customerMessage <br>";
echo "Customer Email: $customerEmail <br>";
echo "Customer Phone: $phone <br>";
echo "Contact Reason: $contactReason <br>";
echo "Email will be sent to: $emailTo <br>";
echo "Email Subject is: $email_subject <br>";
echo "Email Headers are: $headers <br>";
echo "Email full body is: $email_body <br>";

 ?>


<!-- End of main content - footer will start below. -->

  <footer>
    <?php
      include('../templates/footer.php');
    ?>
  </footer>
</body>
</html>
