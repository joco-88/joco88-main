<?php
$PageTitle="Contact Form Submitted";
include_once ('header.php');
?>
<?php echo "testing"; ?>
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
