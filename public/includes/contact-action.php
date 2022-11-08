<?php
    include '../templates/header.php';
?>

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
	$email_from = "<mail@joco88.com>";

	$email_subject = "Joco88 - New Form Submission";

	$email_body = "<b>You have received a new message from the following user:&nbsp</b> $fullName<br><br>".
                            "<b>Here is the message:</b><br><br><q><em>$customerMessage</em></q><br><br>".
                            "<b>The contact reason is:</b>  $contactReason<br><br>".
                            "<b>The customer email is:</b>  $customerEmail<br><br>".
                            "<b>The customer phone number is:</b> $phone<br>";

?>

<?php
  $emailTo = "mail@joco88.com";
  $headers = "Content-type: text/html; charset=iso-8859-1 \r\n";
  $headers .= "From: Joco88.com Contact Page Submission $email_from \r\n";
  $headers .= "Reply-To: $customerEmail \r\n";
  mail($emailTo,$email_subject,$email_body,$headers);
 ?>


<div class="container-fluid">
Hello,&nbsp
<?php echo $_POST["fname"]; ?>
!<br><br>
Thanks for reaching out.<br>
Once we have reviewed your message, we will reach out to you at the email address you provided, which is:
<strong>
  <?php echo $_POST["email"]; ?>
</strong>
<br>
<br>
Have a great day!<br><hr>
<div>
</main>

<?php
echo "<strong>First Name:</strong> $fname <br>";
echo "<strong>Last Name:</strong> $lname <br>";
echo "<strong>Full Name:</strong> $fullName <br>";
echo "<strong>Customer Message:</strong> $customerMessage <br>";
echo "<strong>Customer Email:</strong> $customerEmail <br>";
echo "<strong>Customer Phone:</strong> $phone <br>";
echo "<strong>Contact Reason:</strong> $contactReason <br>";
echo "<strong>Email will be sent to:</strong> $emailTo <br>";
echo "<strong>Email Subject is:</strong> $email_subject <br>";
echo "<strong>Email Headers are:</strong> $headers <br>";
echo "<strong>Email full body is:</strong><br> $email_body <br>";

 ?>


<!-- End of main content - footer will start below. -->

  <footer>
    <?php
      include('../templates/footer.php');
    ?>
  </footer>
</body>
</html>
