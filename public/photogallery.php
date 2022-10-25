<?php
$PageTitle = "Photo Gallery";

include('/home/joco88.com/public_html/templates/header.php');
?>

<!-- Body starts here as body tag opens at end of Header.php file -->

<main>
  <div class="container-fluid">
      <br><h1>Joe's Photo Viewer</h1>
      <p>This is my first test photo gallery.</p><br>
  </div>

<center><div class="container-fluid">
    <p class="lead"><i class="fa fa-file-image-o" aria-hidden="true">&nbsp; &nbsp;</i>
            Click the image below to view larger.<br>
              <div class="alert alert-info" role="alert">
                  <p>Use your mouse to zoom in/out.<br>
                  You can rotate the image with the "R" key, or by using the controls.</p>
              </div>
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
</div></center>

</main>
  <footer>
    <?php
      include('/home/joco88.com/public_html/templates/footer.php');
    ?>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="/js/ezoom.js"></script>

  </footer>
  <!-- Installing test scripts for photo viewer, only on this page. -->

</body>
</html>
