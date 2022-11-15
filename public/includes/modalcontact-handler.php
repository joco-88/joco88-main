<?php

error_reporting(E_ALL); ini_set('display_errors', 1);

$fullName = htmlspecialchars($_POST['fullName']?? '');
$customerEmail = htmlspecialchars($_POST['email']?? '');


if (! empty($_POST['customerMessage'])) {
  $customerMessage = htmlspecialchars ($_POST['customerMessage']?? '');
} else {
  $customerMessage=NULL;
}
?>

<?php

    if (isset($customerMessage)) {

          echo "<h4>Thank you for submission!<h4>";
		      echo "<br>Your Name: $fullName";
		      echo "<br>Your e-mail: $customerEmail";
          echo "<br>Your message: $customerMessage";
      } else {
          echo "Your message was not sent as you did not provide valid information. Please complete the form and try again.";
  }
?>
