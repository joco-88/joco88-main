<?php
$PageTitle = "Photo Gallery";
$extraStylesheet = "<link href=\"/css/photoviewer.css\" rel=\"stylesheet\">";
include('/home/joco88.com/public_html/templates/header.php');
?>
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



<div class="container">
    <h1></h1>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
      View Images</button>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            <div class="image-set">
              <a data-gallery="photoviewer" data-title="Justine, Dustin and Joe atop a mounting." data-group="a"
                 href="media/JustineDustinJoe.JPG">
                <img src="media/JustineDustinJoe.JPG" alt="">
              </a>
            </div>
            <hr>
            <h4>Test Image Info</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>



  </div>
</main>
  <footer>
    <?php
      include('/home/joco88.com/public_html/templates/footer.php');
    ?>
  </footer>
  <!-- Installing test scripts for photo viewer, only on this page. -->
  <!-- Core JS file -->
  <script src="/js/photoviewer.js"></script>
  <script src="/js/photoviewer.common.js"></script>
  <script src="/js/photoviewer.esn.js"></script>
  <script src="/js/photoviewer.min.js"></script>
</body>
</html>
