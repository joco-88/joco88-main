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
        <input type="text" id="fname" name="fname" required="true"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" required="true"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required="true"><br>
        <label for="phone">Phone:</label><br>
        <input type="tel" id="phone" name="phone" placeholder="123-456-0000" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required="true"><br>
          <small>Necessary phone number format: 123-456-7890</small><br>
      </fieldset>
      <fieldset>
        <legend><br>Additional Info:</legend>
              <br><p>Please specifiy your reason for reaching out:</p>
              <input type="radio" id="question" name="contact_reason" value="General Question" checked="true">
              <label for="question">General Question</label><br>
              <input type="radio" id="website_issue" name="contact_reason" value="Website Issue">
              <label for="website_issue">Website Issue</label><br>
              <input type="radio" id="request" name="contact_reason" value="Request">
              <label for="reqeust">Request</label><br><br>
            <label for="customer_message">Your Message or Question:</label><br><br>
            <input type="textarea" id="customer_message" name="customer_message" placeholder="Enter your message here..." rows="5" cols="50" required><br>
        <input type="submit" value="Submit"> <br><br> <input type="reset" value="Reset Form">
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
