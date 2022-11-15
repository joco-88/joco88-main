<?php

$fullName = htmlspecialchars($_POST['fullName']);
//$customerMessage = htmlspecialchars($_POST['customer_message']);
$customerEmail = htmlspecialchars($_POST['email']);

if (isset($_POST['customer_message'])) {
  $customerMessage = htmlspecialchars($_POST['customerMessage']);
} else {
  $customerMessage=NULL;
}
?>

<?php

<?php
<?php
    if (isset($customerMessage)) {

        echo "<h4>Thank you for submission!<h4>";
		echo "<br>Your Name: <b>".$_POST["fullName"]."</b>";
		echo "<br>Your e-mail: <b>".$_POST["email"]."</b>";
    echo "<br>Your message: <b>".$_POST["customerMessage"]."</b>";
  } else {
    echo "It Didn't Work";
  }
?>
