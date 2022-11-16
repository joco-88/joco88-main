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

<!--- NEW MODAL BELOW -->



<!-- Button to trigger modal -->
<button class="btn btn-success btn-lg" data-bs-toggle="modal" data-target="#modalForm">
    Open Contact Form
</button>

<!-- Modal -->
<div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Contact Form</h4>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div class="form-group">
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Enter your name"/>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Enter your email"/>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Message</label>
                        <textarea class="form-control" id="inputMessage" placeholder="Enter your message"></textarea>
                    </div>
                </form>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm()">SUBMIT</button>
            </div>
        </div>
    </div>
</div>




<!--  END OF NEW MODAL ------------------------------------->

</main>
  <footer>
    <?php
      include('../templates/footer.php');
    ?>
  </footer>
</body>
</html>
