<?php
$PageTitle="Contact Form Submitted";
include ('../templates/header.php');
?>

<?php echo "Testing"; ?>

<main>

  <?php
  if(isset($_POST['submit']))
  {
      $name = $_POST['fname'];
      echo "User Has submitted the form and entered this name : <b> $fname </b>";
      echo "<br>You can use the following form again to enter a new name.";
  }
  ?>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
     <input type="text" name="name"><br>
     <input type="submit" name="submit" value="Submit Form"><br>
  </form>

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
