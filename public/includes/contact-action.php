<?php
if($_POST["submit"]) {
$fname = $_POST['fname'];
$customerMessage = $_POST['customer_message'];
$email = $_POST['email'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$contactReason = $_POST['contact_reason'];
$fullEmail = "Message from $fname $lname - Message: $customerMessage";
mail("jocodigitalweb@gmail.com", "Joco88 Contact Form Submission",
$fullEmail);
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
