<?php
$PageTitle="Home";
include('../templates/header.php');
?>
  <main>
    <div class="container-fluid">
        <br><h1>Sandbox Page</h1>
        <p>Have questions or want to reach out? Simply fill out the contact form below and we will get back to you the second we have time.</p>
        <hr>
    </div>

<!-- Contact form javascript will go here -->

<script type='text/javascript'>

	 $(document).ready(function(){
	 $('#modalContactForm').on('click', '.btn-send', function(e){

     var fullName = $('#modalfname').val();
	   var email = $('#modalemail').val();
     var customerMessage = $('#modalmessage').val();


			$.post("/includes/modalcontact-handler.php",
               {
                  fullName,
				          email,
                  customerMessage,
               },
			function(response,status){
             $("#result").html(response);

          });

     $('#modalContactForm').modal('hide');
   });
   });

  </script>

<!-- Contact form HTML & Bootstrap will go below this -->

<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h2 class="modal-title font-weight-bold">Bootstrap Modal Form</h2>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fa fa-user prefix grey-text"></i>
					<label data-error="wrong" data-success="right" for="modalfname">Full Name:</label>
                    <input type="text" id="modalfname" class="form-control validate" required="required">
                </div>
                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
					<label data-error="wrong" data-success="right" for="modalemail">e-Mail:</label>
                    <input type="email" id="modalemail" class="form-control validate">
                 </div>


                 <div class="md-form mb-5">
                     <i class="fa fa-pencil prefix grey-text"></i>
                     <label for="form_message">Message *</label>
                     <textarea id="modalmessage" name="modalmessage" class="form-control validate" rows="4" required="required" data-error="A Message is Required!.">
                       </textarea>
                     </div>


            </div>
            <div class="modal-footer d-flex justify-content-center">
				<input type="submit" name="submit" class="btn btn-success btn-send  pt-2 btn-block" value="Send Message">
            </div>


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
            </form>





        </div>
    </div>
</div>



<div class="text-center">
  <a href="#modalContactForm" class="btn btn-primary" data-bs-toggle="modal" data-target="#modalContactForm">Launch Modal Contact Form</a>
  <br>
  <div class="modal-body">
        <div id="result"></div>
  </div>
</div>



<!--
<br> TEST NEW FORM <br>


<a href="#myModal" class="btn btn-lg btn-primary" data-bs-toggle="modal">Launch Demo Modal</a>

<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Do you want to save changes to this document before closing?</p>
                <p class="text-secondary"><small>If you don't save, your changes will be lost.</small></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
-->

<!-- End of Contact Form -->

</main>
  <footer>
    <?php
      include('../templates/footer.php');
    ?>
  </footer>
</body>
</html>
