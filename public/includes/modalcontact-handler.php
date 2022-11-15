<?php

$fullName = htmlspecialchars trim($_POST['fullName']);
$customerEmail = htmlspecialchars($_POST['email']);

if (isset($_POST['customerMessage'])) {
  $customerMessage = htmlspecialchars($_POST['customerMessage']);
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
          echo "It Didn't Work";
  }
?>
