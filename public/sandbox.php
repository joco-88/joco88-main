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
<div class="text-center">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#testModal">More Event Details</button>

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
        <br><br>
        <ol>
          <li>I'm going to list things to test the scrolling capabilities</li>
          <li>I'm going to list things to test the scrolling capabilities</li>
          <li>I'm going to list things to test the scrolling capabilities</li>
          <li>I'm going to list things to test the scrolling capabilities</li>
          <li>I'm going to list things to test the scrolling capabilities</li>
          <li>I'm going to list things to test the scrolling capabilities</li>
          <li>I'm going to list things to test the scrolling capabilities</li>
          <li>I'm going to list things to test the scrolling capabilities</li>
          <li>I'm going to list things to test the scrolling capabilities</li>
          <li>I'm going to list things to test the scrolling capabilities</li>
          <li>I'm going to list things to test the scrolling capabilities</li>
          <li>I'm going to list things to test the scrolling capabilities</li>
          <li>I'm going to list things to test the scrolling capabilities</li>
          <li>I'm going to list things to test the scrolling capabilities</li>
          <li>I'm going to list things to test the scrolling capabilities</li>
          <li>I'm going to list things to test the scrolling capabilities</li>
          <li>I'm going to list things to test the scrolling capabilities</li>
          <li>I'm going to list things to test the scrolling capabilities</li>
          <li>I'm going to list things to test the scrolling capabilities</li>
          <li>I'm going to list things to test the scrolling capabilities</li>
          <li>I'm going to list things to test the scrolling capabilities</li>
          <li>I'm going to list things to test the scrolling capabilities</li>
          <li>I'm going to list things to test the scrolling capabilities</li>
        </ol>
        <br>
        <p>As you can see - you can put quite a lot of shit in here and be able to scroll without forcing the actual page to scroll.<br>
          It's all self-contained within the modal window. You can change the buttons and headings to say what you want. I'm also guessing this text will wrap just fine. Additionally, Im thinking all standard html
        would work here, so you coudl even insert photos, links and basic tables - so long as they are readable for accesibility purposes.</p>

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
