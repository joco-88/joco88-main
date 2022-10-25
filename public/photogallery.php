<?php
$PageTitle = "Photo Gallery";
$extraStylesheet = "<link href=\"/css/photoviewer.css\" rel=\"stylesheet\">";
include('/home/joco88.com/public_html/templates/header.php');
?>
<!-- Body starts here as body tag opens at end of Header.php file -->
<main>
  <div class="container-fluid">
      <br><h1>Joe's Photo Viewer</h1>
      <p>This is my first test photo gallery.</p>
  </div>



</main>
  <footer>
    <?php
      include('/home/joco88.com/public_html/templates/footer.php');
    ?>
  </footer>
  <!-- Installing test scripts for photo viewer, only on this page. -->
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="js/ezoom.js"></script>

</body>
</html>
