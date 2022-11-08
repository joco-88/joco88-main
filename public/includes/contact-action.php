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

	$email_body = "<strong>You have received a new message from the following user:</strong> $fullName.\n".
                            "<strong>Here is the message:</strong>\n $customerMessage.\n\n\n".
                            "<strong>The contact reason is:</strong>  $contactReason.\n\n".
                            "<strong>The customer email is:</strong>  $customerEmail.\n\n".
                            "<strong>The customer phone number is:</strong> $phone.\n\n";

?>

<?php
  $emailTo = "mail@joco88.com";
  $headers[] = 'MIME-Version: 1.0';
  $headers[] = 'Content-type: text/html; charset=iso-8859-1';
  $headers[] = "To: Joe <$emailTo>";
  $headers[] = "From: Joco88 Contact Form <$email_from>";
  $headers[] = "Reply-To: $customerEmail <$customerEmail>";
  mail($emailTo, $email_subject, $email_body, implode("\r\n", $headers));
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
echo "Email Headers are: implode("\r\n", $headers <br>";
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
