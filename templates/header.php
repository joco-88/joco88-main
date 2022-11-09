<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="/css/stylesheet.css?v=11.09.2022.1" rel="stylesheet">
    <link href="/css/font-awesome/font-awesome.min.css" rel="stylesheet">
    <?php if (isset($extraStylesheet)) {
        echo $extraStylesheet;
      }
$SiteName="Joco88";
    ?>

    <!--- This is my Font Awesome Kit I made. Right now, just using hosted (free) fonts and don't need to use it.
    <script src="https://kit.fontawesome.com/347bff65d7.js" crossorigin="anonymous"></script>
    --->

    <title>
    <?php echo isset($PageTitle) ? $PageTitle . " | $SiteName.com" : "$SiteName.com"?>
    </title>
    <link rel="icon" type="image/x-icon" href="/media/favicon.ico">

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
<body>
