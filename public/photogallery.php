<?php
$PageTitle = "Photo Gallery";
$extraStylesheet = "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\">";
include('/home/joco88.com/public_html/templates/header.php');
?>
<!-- Body starts here as body tag opens at end of Header.php file -->
<main>
  <div class="container-fluid">
      <br><h1>Joe's Photo Viewer</h1>
      <p>This is my first test photo gallery.</p><br>
  </div>
  
<?php
echo '<script>';
        echo 'ezoom.onInit(domElement, {';
        echo 'src:'media/JustineDustinJoe.JPG'';
        echo '});';

        echo 'ezoom.onInit(domElement, {';
          echo 'hideControlBtn:false';
        echo '});';

        echo 'ezoom.onInit(domElement, {';

          echo 'onShow:function(){';
            // do something
          echo '},';
          echo 'onClose:function(){';
            // do something
          echo '},';
          echo 'onRotate:function(){';
            // do something
          echo '},';
          echo 'onMoveStarted:function(){';
            // do something
          echo '},';
          echo 'onMovedCompleted:function(){';
            // do something
          echo '},';
          echo 'onMoving:function(){';
            // do something
          echo '},';
        echo '});';

echo '</script>';
?>




</main>
  <footer>
    <?php
      include('/home/joco88.com/public_html/templates/footer.php');
    ?>
  </footer>
  <!-- Installing test scripts for photo viewer, only on this page. -->

</body>
</html>
