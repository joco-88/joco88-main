<?php
$PageTitle="Home";
include('../templates/header.php');
?>

<!-- Body starts here as body tag opens at end of Header.php file -->
<main>
  <div class="container-fluid">
      <br><h1>Contact Me.</h1>
      <p>On this page, I will test a basic contact form with validations. Might try bootstrap styling.</p>
      <p> Also, I may add a captcha field to prevent more spam. Test</p>
  </div>

<!-- Contact form will go below this -->
  <div contactForm>
    <div class="container-fluid">
    <form action="../app/events/contact-form.php" target="_self" method="post" autocomplete="on">
      <fieldset>
        <legend><br>Enter Your Contact Info:</legend>
        <label for="fname">First Name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="phone">Phone:</label><br>
        <input type="phone" id="phone" name="phone"><br>
      </fieldset>
      <fieldset>
        <legend><br>Additional Info:</legend>
              <br><p>Reason for reaching out:</p>
              <input type="radio" id="question" name="contact_reason" value="General Question">
              <label for="question">General Question</label><br>
              <input type="radio" id="website_issue" name="contact_reason" value="Website Issue">
              <label for="website_issue">Website Issue</label><br>
              <input type="radio" id="request" name="contact_reason" value="Request">
              <label for="reqeust">Request</label><br><br>
        <input type="submit" value="Submit">
      </fieldset>
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
