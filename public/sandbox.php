<?php
$PageTitle="Home";
include('../templates/header.php');

error_reporting(E_ALL); ini_set('display_errors', 1);

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
      //return false;
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

              <form id="modal-contact-form" role="form" method="post">
                <div class="form group md-form mb-5">
                    <i class="fa fa-user prefix grey-text"></i>
					<label data-error="wrong" data-success="right" for="modalfname">Full Name:</label>
                    <input type="text" id="modalfname" class="form-control validate" required>
                </div>
                <div class="form group md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
					<label data-error="wrong" data-success="right" for="modalemail">Email:</label>
                    <input type="email" id="modalemail" class="form-control validate" required>
                    <div class="invalid-feedback">
        Please provide a valid email.
      </div>
                 </div>


                 <div class="form group md-form mb-5">
                     <i class="fa fa-pencil prefix grey-text"></i>
                     <label for="modalmessage">Message *</label>
                     <textarea id="modalmessage" name="modalmessage" class="form-control validate" rows="4" required></textarea>
                     </div>

            <div class="modal-footer d-flex justify-content-center">
              <input type="submit" name"submit" class="btn btn-primary btn-send mb-2 btn-block" id="submitbutton">
</form>


              </div>


</div>
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


</main>
  <footer>
    <?php
      include('../templates/footer.php');
    ?>
  </footer>
</body>
</html>
