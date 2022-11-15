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


<div class="text-center">
  <a href="#modalContactForm" class="btn btn-success" data-bs-toggle="modal" data-target="#modalContactForm">Launch Modal Contact Form</a>
  <br>
</div>


<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Write to us</h4>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="form34" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form34">Your name</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="form29" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form29">Your email</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-tag prefix grey-text"></i>
          <input type="text" id="form32" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form32">Subject</label>
        </div>

        <div class="md-form">
          <i class="fas fa-pencil prefix grey-text"></i>
          <textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>
          <label data-error="wrong" data-success="right" for="form8">Your message</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-unique">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>
    </div>
  </div>
</div>



<br> TEST NEW FORM <br>

<!-- Button HTML (to Trigger Modal) -->
<a href="#myModal" class="btn btn-lg btn-primary" data-bs-toggle="modal">Launch Demo Modal</a>

<!-- Modal HTML -->
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


<!-- End of Contact Form -->

</main>
  <footer>
    <?php
      include('../templates/footer.php');
    ?>
  </footer>
</body>
</html>
