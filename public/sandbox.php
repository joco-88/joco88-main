<?php
$PageTitle="Home";
include('../templates/header.php');

error_reporting(E_ALL); ini_set('display_errors', 1);

?>
  <main>
    <div class="container-fluid">
        <br><h1>Sandbox Page</h1>
        <p>On this page, I will test new projects and hone my basic coding knowledge.</p>
        <hr>
    </div>

<!-- Upcoming New Sandbox Project Will Go Below -->


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#testModal">Launch Test Modal</button>

<!-- Modal -->
<div class="modal fade" id="testModal" tabindex="-1" aria-labelledby="testModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="testModalLabel">Additional Event Info</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Further information about the event or schedule could go here. Bleep Bloop.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



</main>
  <footer>
<!--  Any necessary scripts go below here --------------------------->

    <?php
      include('../templates/footer.php');
    ?>
  </footer>
</body>
</html>
