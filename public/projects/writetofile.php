<?php
$PageTitle="Test Write to PHP File";
include('../../templates/header.php');

error_reporting(E_ALL); ini_set('display_errors', 1);

?>
  <main>
    <div class="container-fluid">
        <br><h1>Write To File</h1>
        <p>On this page, I will test new projects and hone my basic coding knowledge.</p>
        <hr>
    </div>

<!-- Upcoming New Sandbox Project Will Go Below -->

<form method="post" action="">
<input type="text" name="visitorname">
<input type="submit">
</form>

<?php

$writetofile = fopen("readwritedoc.txt", "r+")  or die("Could not open required file!");

echo $_POST['visitorname'];



flcose($writetofile);
 ?>




</main>
  <footer>
<!--  Any necessary scripts go below here --------------------------->

    <?php
      include('../../templates/footer.php');
    ?>
  </footer>
</body>
</html>
