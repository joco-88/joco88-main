<?php
$PageTitle="Contact Form Submitted";
include('../templates/header.php');

?>


<header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="/"> <?php echo $SiteName; ?> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Link 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link 3</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Projects</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/photoviewer.php">Photo Viewer</a></li>
              <li><a class="dropdown-item" href="#">Dropdown Link 2</a></li>
              <li><a class="dropdown-item" href="#">Dropdown Link 3</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contactme.php">Contact Me</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>


<main>

<div class="container-fluid">
Hello,&nbsp<?php echo $_POST["fname"]; ?>!<br><br>
Thanks for reaching out.<br>
Once I have reviewed your message, we will reach out to you at the email address you provided, which is: <strong><?php echo $_POST["email"]; ?></strong>
<br>
<br>
Have a great day!<br>
<div>
</main>



<!-- End of main content - footer will start below. -->

  <footer>
    <?php
      include('../templates/footer.php');
    ?>
  </footer>
</body>
</html>
