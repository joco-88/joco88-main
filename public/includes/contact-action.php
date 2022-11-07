<?php
if($_POST["customer_message"]) {
$fname = $_POST['fname'];
$customerMessage = $_POST['customer_message'];
$email = $_POST['email'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$contactReason = $_POST['contact_reason'];
mail("jocodigitalweb@gmail.com", "Joco88 Contact Form Submission",
$_POST["customer_message"]. "From: $fname $lname");
}
?>

<?php
$PageTitle="Contact Form Submitted";
include('../templates/header.php');
?>

<main>

<div class="container-fluid">
Hello,&nbsp<?php echo $_POST["fname"]; ?>!<br><br>
Thanks for reaching out.<br>
Once I have reviewed your message, we will reach out to you at the email address you provided, which is: <strong><?php echo $_POST["email"]; ?></strong>
<br>
<br>
Have a great day!<br>
<div>
</main>



<!-- End of main content - footer will start below. -->

  <footer>
    <?php
      include('../templates/footer.php');
    ?>
  </footer>
</body>
</html>
