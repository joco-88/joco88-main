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
              <form>
                <div class="form control md-form mb-5">
                    <i class="fa fa-user prefix grey-text"></i>
					<label data-error="wrong" data-success="right" for="modalfname">Full Name:</label>
                    <input type="text" id="modalfname" class="form-control validate" required>
                </div>
                <div class="form control md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
					<label data-error="wrong" data-success="right" for="modalemail">e-Mail:</label>
                    <input type="email" id="modalemail" class="form-control validate" required>
                 </div>


                 <div class="form control md-form mb-5">
                     <i class="fa fa-pencil prefix grey-text"></i>
                     <label for="form_message">Message *</label>
                     <textarea id="modalmessage" name="modalmessage" class="form-control validate" rows="4" required></textarea>
                     </div>

            <div class="modal-footer d-flex justify-content-center">
				<input type="submit" name="submit" class="btn btn-success btn-send mb-2 btn-block" value="Send Message">
              </div>
</form>

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

<?php
error_reporting(E_ALL); ini_set('display_errors', 1);
?>

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
