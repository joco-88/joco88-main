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
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap-theme.min.css"> -->

    <link rel="stylesheet" href="/css/stylesheet.css?v=11.15.2022.1">
    <link rel="stylesheet" href="/css/font-awesome/font-awesome.min.css">

    <!-- jQuery with Bootstrap Popper -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

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
                  <li><a class="dropdown-item" href="/projects/photoviewer.php">Photo Viewer</a></li>
                  <li><a class="dropdown-item" href="/projects/contactmodal.php"></a>Contact Modal</li>
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
<body>
