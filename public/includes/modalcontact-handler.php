<?php
   if($_POST["fullName"])
   {

        echo "<h4>Thank you for submission!<h4>";
		echo "<br>Your Name: <b>".$_POST["fullName"]."</b>";
		echo "<br>Your e-mail: <b>".$_POST["email"]."</b>";
    echo "<br>Your message: <b>".$_POST["customerMessage"]."</b>";
  } else {
    echo "It Didn't Work";
  }
?>
