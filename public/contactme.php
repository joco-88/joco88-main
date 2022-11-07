<?php
$PageTitle="Home";
include('../templates/header.php');
?>

<!-- Body starts here as body tag opens at end of Header.php file -->
<main>
  <div class="container-fluid">
      <br><h1>Contact Me!</h1>
      <p>On this page, I will test a basic contact form with validations. Might try bootstrap styling.</p>
      <p> Also, I may add a captcha field to prevent more spam. Test</p>
  </div>

<!-- Contact form will go below this -->
  <div contactForm>
    <div class="container-fluid">
    <form>
      <label for="fname">First Name:</label><br>
      <input type="text" id="fname" name="fname"><br>
      <label for="lname">Last name:</label><br>
      <input type="text" id="lname" name="lname">
      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email">
      <label for="phone">Phone:</label><br>
      <input type="phone" id="phone" name="phone">
    </form>
    </div>
  </div>
</main>
  <footer>
    <?php
      include('../templates/footer.php');
    ?>
  </footer>
</body>
</html>
