<?php
$PageTitle="Home";
include('../templates/header.php');
?>

  <main>
    <div class="container-fluid">
        <br><h1>Contact Me</h1>
        <p>On this page, I will test a basic contact form with validations. Might try bootstrap styling.</p>
        <p> Also, I may add a captcha field to prevent more spam.</p>
        <hr>
    </div>

<!-- Contact form will go below this -->

<!-- Need to remember to make the link safe by somehow including this: echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" -->

<div contactForm>
    <div class="container-fluid">
    <form method="post" action="/includes/contact-action.php" autocomplete="on">
      <fieldset>
        <legend><br>Enter Your Contact Info:</legend>
        <label for="fname">First Name:</label><br>
        <input type="text" id="fname" name="fname" required><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" size="30" required><br>
        <label for="phone">Phone:</label><br>
        <input type="tel" id="phone" name="phone" placeholder="123-456-0000" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"><br>
          <small>Necessary phone number format: 123-456-7890</small><br>
      </fieldset>
      <fieldset>
        <legend><br>Additional Info:</legend>
              <br><p>Please specifiy your reason for reaching out:</p>
              <input type="radio" id="question" name="contact_reason" value="General Question" checked="true">
              <label for="question">General Question &nbsp</label>
              <input type="radio" id="website_issue" name="contact_reason" value="Website Issue">
              <label for="website_issue">Website Issue &nbsp</label>
              <input type="radio" id="request" name="contact_reason" value="Request">
              <label for="reqeust">Request</label><br><br>
      </fieldset>
      <fieldset>
        <legend>Provide A Message:</legend>
            <label for="customer_message"></label><br><br>
            <textarea id="customer_message" name="customer_message" placeholder="Enter your message here..." rows="5" cols="50" required></textarea><br><br>
         <input type="submit" name="submit" value="Submit Your Message"> <br>
      </fieldset>
    </form>
    </div>
  </div>

<!-- BELOW IS A NEW CONTACT FORM THAT LOOKS BETTER AND NEEDS TWEAKED -->




<div class="container">]
        <div class=" text-center mt-5 ">

            <h1 >Bootstrap Contact Form</h1>


        </div>


    <div class="row ">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">

            <div class = "container">
                             <form id="contact-form" role="form">



            <div class="controls">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">Firstname *</label>
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_lastname">Lastname *</label>
                            <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">Email *</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_need">Please specify your need *</label>
                            <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                                <option value="" selected disabled>--Select Your Issue--</option>
                                <option >Request Invoice for order</option>
                                <option >Request order status</option>
                                <option >Haven't received cashback yet</option>
                                <option >Other</option>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_message">Message *</label>
                            <textarea id="form_message" name="message" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea
                                >
                            </div>

                        </div>


                    <div class="col-md-12">

                        <input type="submit" class="btn btn-success btn-send  pt-2 btn-block
                            " value="Send Message" >

                </div>

                </div>


        </div>
         </form>
        </div>
            </div>


    </div>
        <!-- /.8 -->

    </div>
    <!-- /.row-->

</div>
</div>





<!-- ABOVE IS A NEW CONTACT FORM THAT LOOKS BETTER AND NEEDS TWEAKED -->


</main>
  <footer>
    <?php
      include('../templates/footer.php');
    ?>
  </footer>
</body>
</html>
