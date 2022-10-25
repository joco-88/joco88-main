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

<?php
echo '<script>',
        'ezoom.onInit(domElement, {',
        'src:'media/JustineDustinJoe.JPG',

        ezoom.onInit(domElement, {
          hideControlBtn:false
        });

        ezoom.onInit(domElement, {

          onShow:function(){
            // do something
          },
          onClose:function(){
            // do something
          },
          onRotate:function(){
            // do something
          },
          onMoveStarted:function(){
            // do something
          },
          onMovedCompleted:function(){
            // do something
          },
          onMoving:function(){
            // do something
          },
        });

</script>
?>
  </div>



</main>
  <footer>
    <?php
      include('/home/joco88.com/public_html/templates/footer.php');
    ?>
  </footer>
  <!-- Installing test scripts for photo viewer, only on this page. -->

</body>
</html>
