<?php
error_reporting(E_ALL); ini_set('display_errors', 1);

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
        <li>Added this changelog list :)</li>
      </ol>
    <p><strong>11/07/2022</strong></p>
      <ol>
        <li>Added a Contact Me page</li>
        <li>Created a contact form using HTML & PHP</li>
          <ul><li>Successfully used PHP to run conditional statement for when form is submitted, but now need to
            figure out how to store data in database and fire off an email notification.</li>
          </ul>
      </ol>
    <p><strong>11/09/2022</strong></p>
      <ol>
        <li>Converted the contact page form to bootstrap styling</li>
        <li>Created a seaparte php file to process form submissions.</li>
          <ul><li>Test that the php form processor file strips invalid characters and also fires email out to me.</li>
          <ul><li>If the page is accessed outside of valid form submission, it displays an error page with links to go back home.</li>
          <ul><li>On Wp-Dev/Joe - The email submission currently does not work for some reason but likely something needs changed in the server (not necessary since this is a sandbox).</li>
          </ul>
      </ol>
  </div>
</main>

<!-- End of main content - footer will start below. -->

  <footer>
    <?php
      include('../templates/footer.php');
    ?>
  </footer>
</body>
</html>
