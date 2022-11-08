<?php
$PageTitle="Contact Form Submitted";
include('../templates/header.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="/css/stylesheet.css?v=10.25.2022.4" rel="stylesheet">
    <link href="/css/font-awesome/font-awesome.min.css" rel="stylesheet">
    <?php if (isset($extraStylesheet)) {
        echo $extraStylesheet;
      }
$SiteName="Joco88";
    ?>

    <title>
    <?php echo isset($PageTitle) ? $PageTitle . " | $SiteName.com" : "$SiteName.com"?>
    </title>
    <link rel="icon" type="image/x-icon" href="/media/favicon.ico">

  </head>
      <header>
          <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
              <div class="container-fluid">
              <a class="navbar-brand" href="/"> <?php echo $SiteName; ?> </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="/index.php">Go Back to the Home Page</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
  <body>

<!-- END OF HEADER AND START OF CONTACT SUCCESS PAGE -->


<?php

$fname = htmlspecialchars($_POST['fname']);
$lname = htmlspecialchars($_POST['lname']);
$fullName = "$fname $lname";
//$customerMessage = htmlspecialchars($_POST['customer_message']);
$customerEmail = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$contactReason = htmlspecialchars($_POST['contact_reason']);

if (isset($_POST['customer_message'])) {
  $customerMessage = htmlspecialchars($_POST['customer_message']);
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
                            "<b>The customer email is:</b>  $customerEmail<br><br>".
                            "<b>The customer phone number is:</b> $phone<br>";
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
echo "<strong>Customer Phone:</strong> $phone <br>";
echo "<strong>Contact Reason:</strong> $contactReason <br>";
echo "<strong>Email will be sent to:</strong> $emailTo <br>";
echo "<strong>Email Subject is:</strong> $email_subject <br>";
echo "<strong>Email Headers are:</strong> $headers <br>";
echo "<strong>Email full body is:</strong><br> $email_body <br>";

  */ ?>


<!-- End of main content - footer will start below. -->

  <footer>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

    <!--- Start Footer Content --->

    <center>
      <div class="footerLinks">
      <div class="container-fluid p-5 my-5 bg-secondary text-white">
        &copy;<?php echo date("Y");?> - <a href="/contactme.php"><strong>Joseph Condon</strong></a> & <a href="/"><strong>Joco88.com</strong></a></center>
      </div>
      </div>


  </footer>
</body>
</html>
