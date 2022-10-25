<?php
$PageTitle = "Photo Gallery";
$extraStylesheet = "<link href=\"/css/photoviewer.css\" rel=\"stylesheet\">";
include('/home/joco88.com/public_html/templates/header.php');
?>
<!-- Installing test scripts for photo viewer, only on this page. -->
<!-- Core JS file -->
<script src="js/photoviewer.js"></script>
<!-- Body starts here as body tag opens at end of Header.php file -->
<main>
  <div class="container-fluid">
      <br><h1>Joe's Photo Viewer</h1>
      <p>This is my first test photo gallery.</p>
  </div>
  <!-- <div class="container-fluid"> -->
      <script>
      // build images array
            var items = [
            {
                src: 'media/JustineDustinJoe.JPG', // path to image
                title: 'Justine, Dustin and Joe, atop a mountain.' // If you skip it, there will display the original image name(image1)
            },
            {
                src: 'media/JustineDustinJoe.JPG',
                title: 'Same Image 2'
            }
            ];
/*
            // define options (if needed)
            var options = {
            // optionName: 'option value'
            // for example:
            index: 0 // this option means you will start at first image
            };
*/
            // Initialize the plugin
            var photoviewer = new PhotoViewer(items, options);
       </script>
       <a data-gallery="manual" href="media/JustineDustinJoe.JPG">
  <img src="media/JustineDustinJoe.JPG">
</a>

<script>
$('[data-gallery=manual]').click(function (e) {

  e.preventDefault();

  var items = [],
    // get index of element clicked
    options = {
      index: $(this).index()
    };

  // looping to create images array
  $('[data-gallery=manual]').each(function () {
    let src = $(this).attr('href');
    items.push({
      src: src
    });
  });

  new PhotoViewer(items, options);

});
</script>


  </div>
</main>
  <footer>
    <?php
      include('/home/joco88.com/public_html/templates/footer.php');
    ?>
  </footer>

</body>
</html>
