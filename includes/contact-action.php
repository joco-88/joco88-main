<?php

error_reporting(E_ALL); ini_set('display_errors', 1);

$PageTitle="Contact Form Submitted";
include($_SERVER['DOCUMENT_ROOT'].'/../templates/header.php');
?>

<!-- END OF HEADER AND START OF CONTACT SUCCESS PAGE -->


<?php

$fname = htmlspecialchars($_POST['fname']?? '');
$lname = htmlspecialchars($_POST['lname']?? '');
$fullName = "$fname $lname";
//$customerMessage = htmlspecialchars($_POST['customer_message']);
$customerEmail = htmlspecialchars($_POST['email']?? '');
$contactReason = htmlspecialchars($_POST['contact_reason']?? '');

if (isset($_POST['customer_message'])) {
  $customerMessage = htmlspecialchars($_POST['customer_message']?? '');
} else {
  $customerMessage=NULL;
}
?>

<?php


	$email_from = "<mail@joco88.com>";

	$email_subject = "Joco88 - New Form Submission";

	$email_body = "<b>You have received a new message from the following user:&nbsp</b> $fullName<br><br>".
                            "<b>Here is the message:</b><br><br><q><em>$customerMessage</em></q><br><br>".
                            "<b>The contact reason is:</b>  $contactReason<br><br>".
                            "<b>The customer email is:</b>  $customerEmail<br><br>";
?>

<!-- This is where the email is actually sent, but only if customermessage is set -->

<?php
if (isset($customerMessage)) {
  $emailTo = "mail@joco88.com";
  $headers = "Content-type: text/html; charset=iso-8859-1 \r\n";
  $headers .= "From: Joco88.com Contact Page Submission $email_from \r\n";
  $headers .= "Reply-To: $customerEmail \r\n";
  mail($emailTo,$email_subject,$email_body,$headers);
}
 ?>

<?php
if (isset($customerMessage)) { ?>

<div class="container-fluid">
  <br><br><center><h2>Message Sent!</h2>
<br>Hello,
<?php echo $_POST["fname"] . "."; ?>
<br><br>
Thanks for reaching out.<br>
Once we have reviewed your message, we will reach out to you at the email address you provided, which is:
<strong>
  <?php echo $_POST["email"]; ?>
</strong>
<br>
<br>
Have a great day!<br><hr>

<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="/">&#x2190;&nbspGo Back to the Home Page</a>
  </li>
</ul>

</center>
<div>
</main>

<?php } else {
  echo "<br><br>";
  echo "<center><div class='container-fluid'>";
  echo "<h2>Invalid Submission<br></h2>";
  echo "The contact form was not correctly filled out. Please visit the Contact page to complete the form";
  echo "</center></div>";
}
?>

<!-- The Below code is simply testing if variables are set, but shoudln't show to users -->

<?php
/*

echo "<strong>First Name:</strong> $fname <br>";
echo "<strong>Last Name:</strong> $lname <br>";
echo "<strong>Full Name:</strong> $fullName <br>";
echo "<strong>Customer Message:</strong> $customerMessage <br>";
echo "<strong>Customer Email:</strong> $customerEmail <br>";
echo "<strong>Contact Reason:</strong> $contactReason <br>";
echo "<strong>Email will be sent to:</strong> $emailTo <br>";
echo "<strong>Email Subject is:</strong> $email_subject <br>";
echo "<strong>Email Headers are:</strong> $headers <br>";
echo "<strong>Email full body is:</strong><br> $email_body <br>";

  */ ?>


<!-- End of main content - footer will start below. -->

  <footer>

    <!--- Start Footer Content --->
<?php
    include($_SERVER['DOCUMENT_ROOT'].'/../templates/footer.php');
?>


  </footer>
</body>
</html>