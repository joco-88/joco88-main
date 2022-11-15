<?php
   if($_POST["fname"])
   {

        echo "<h4>Thank you for submission!<h4>";
		echo "<br>Your Name: <b>".$_POST["fname"]."</b>";
		echo "<br>Your e-mail: <b>".$_POST["email"]."</b>";
   }
?>
