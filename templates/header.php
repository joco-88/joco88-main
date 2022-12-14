<!doctype html>
<html lang="en">
<head>

<?php
$SiteName="Joco88";
?>

    <title>
    <?php echo isset($PageTitle) ? $PageTitle . " | $SiteName.com" : "$SiteName.com"?>
    </title>
    <link rel="icon" type="image/x-icon" href="/media/favicon.ico">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/stylesheet.css?v=12.31.2022.01">
    <link rel="stylesheet" href="../css/font-awesome/font-awesome.min.css?v=12.31.2022.01">


</head>
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
                  <a class="nav-link" href="/sandbox.php">Test Sandbox</a>
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
                  <li><a class="dropdown-item" href="https://joco88.com/projects/photoviewer.php">Photo Viewers</a></li>
                  <li><a class="dropdown-item" href="/projects/contactmodal.php">Contact Modal</a></li>
                  <li><a class="dropdown-item" href="/projects/jocoreturnform.php">Joco Returns</a></li>
                  <li><a class="dropdown-item" href="/projects/webpoint-design">Webpoint Re-design</a></li>
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
<body>
