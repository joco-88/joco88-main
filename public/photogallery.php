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

<div class="container-fluid">
  	<p class="lead">Click the image below to view larger. You may zoom in/out with your mouse. Using the controls or "R" key will also rotate the photo.</p>
  	<div id="imgDiv">
  		<img src="https://joco88.com/media/JustineDustinJoe.JPG" width="300px" />
  	</div>
  </div>

  	<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  	<script type="text/javascript" src="ezoom.js"></script>
  	<script type="text/javascript">
  		$(document).ready(function(){

  			ezoom.onInit($('#imgDiv img'), {
  				hideControlBtn: false,
  				onClose: function (result) {
  					console.log(result);
  				},
  				onRotate: function (result) {
  					console.log(result);
  				},
  			});

  		});
  	</script>
</div>



<!-- <script type="text/javacript">
        ezoom.onInit(domElement, {
        src:'https://joco88.com/media/JustineDustinJoe.JPG'
        });

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

-->


</main>
  <footer>
    <?php
      include('/home/joco88.com/public_html/templates/footer.php');
    ?>
  </footer>
  <!-- Installing test scripts for photo viewer, only on this page. -->

</body>
</html>
