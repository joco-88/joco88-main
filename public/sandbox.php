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

<!-- Contact form will go below this -->


<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h2 class="modal-title font-weight-bold">Bootstrap Modal Form</h2>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fa fa-user prefix grey-text"></i>
					<label data-error="wrong" data-success="right" for="fname">Full Name:</label>
                    <input type="text" id="fname" class="form-control validate">
                </div>
                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
					<label data-error="wrong" data-success="right" for="email">e-Mail:</label>
                    <input type="email" id="email" class="form-control validate">
                 </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button id="send" class="btn btn-info">Submit <i class="fa fa-paper-plane-o ml-1"></i></button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

 <a href="" class="btn btn-success" data-toggle="modal" data-target="#modalContactForm">Launch Modal Contact Form</a>



<!-- End of Contact Form -->

</main>
  <footer>
    <?php
      include('../templates/footer.php');
    ?>
  </footer>
</body>
</html>
