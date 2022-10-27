<?php
$PageTitle="Home";
include('../templates/header.php');
?>

<!-- Body starts here as body tag opens at end of Header.php file -->
<!-- The Content below this can be copied from my main site as it will stay the same regardless of domain name -->

<main>
  <div class="container-fluid">
    <br><h1>Welcome!</h1>
    <h4>Changelog</h4>
    <p><strong>10/24/2022</strong></p>
      <ol>
        <li>Built out basic page framework and php file structure.</li>
        <li>Introduced Bootstrap and completed first Navbar with dropdown link integration..</li>
      </ol>
    <p><strong>10/25/2022</strong></p>
      <ol>
        <li>Implemented first JavaScript / jquery script to website.</li>
        <li>Implemented FrontAwesome stylesheets and utilzied them in photoviewr.</li>
        <li>Successfully added photo viewer to website which allows for zooming and rotating of images</li>
            <ul><li>Added this under a new menu item (Projects)</li>
                <li>Ported this to Webpoint production site with Dustin</li>
            </ul>
      </ol>   
    <p><strong>10/27/2022</strong></p>
      <ol>
        <li>Added new "SiteName" variable instead of hardcoding throughout site.</li>
        <li>In progress....</li>
      </ol>
  </div>
</main>

<!-- Body starts here as body tag opens at end of Header.php file -->

  <footer>
    <?php
      include('../templates/footer.php');
    ?>
  </footer>
</body>
</html>
