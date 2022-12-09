<?php
$PageTitle="Test Write to PHP File";
include('../../templates/header.php');

error_reporting(E_ALL); ini_set('display_errors', 1);

?>
  <main>
    <div class="container-fluid">
        <br><h1>Test Returns Form</h1>
        <p>On this page, I will test new projects and hone my basic coding knowledge.</p>
        <hr>


<!-- Upcoming New Sandbox Project Will Go Below -->
<div class="container-fluid">
  <div class=" text-center mt-5 ">

      <h1>Contact Me</h1>

  </div>
<div class="row ">
<div class="col-lg-7 mx-auto">
  <div class="card mt-2 mx-auto p-4 bg-light">
      <div class="card-body bg-light">
      <div class = "container">
                       <form id="contact-form" role="form" method="post" action="/includes/contact-action.php" autocomplete="on">
      <div class="controls">
          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="form_name">First Name *</label>
                      <input id="form_name" type="text" name="fname" class="form-control" placeholder="Please enter your first name *" required="required" data-error="Firstname is required.">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="form_lastname">Last Name *</label>
                      <input id="form_lastname" type="text" name="lname" class="form-control" placeholder="Please enter your last name *" required="required" data-error="Lastname is required.">
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
                      <select id="form_need" name="contact_reason" class="form-control" required="required" data-error="Please specify your need.">
                          <option value="" selected disabled>--Contact Reason--</option>
                          <option >General Question</option>
                          <option >Website Issue</option>
                          <option >Job Request</option>
                          <option >Other</option>
                      </select>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                      <label for="form_message">Message *</label>
                      <textarea id="form_message" name="customer_message" class="form-control" placeholder="Write your message here. Please be detailed." rows="4" required="required" data-error="A Message is Required!.">
                        </textarea>
                      </div>
                  </div>
              <div class="col-md-12">
                <br>
                <center>
                  <input type="submit" name="submit" class="btn btn-success btn-send  pt-2 btn-block" value="Send Message" >
                    </center>
          </div>
          </div>
  </div>


<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>





</div>
  <footer>
<!--  Any necessary scripts go below here --------------------------->

    <?php
      include('../../templates/footer.php');
    ?>
  </footer>
</body>
</html>
