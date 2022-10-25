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
      Launch demo modal</button>
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
              <a data-gallery="photoviewer" data-title="Slipping Away by Jerry Fryer" data-group="a"
                 href="https://farm1.staticflickr.com/313/31812080833_297acfbbd9_z.jpg">
                <img src="https://farm1.staticflickr.com/313/31812080833_297acfbbd9_s.jpg" alt="">
              </a>
              <a data-gallery="photoviewer" data-title="Mi Fuego by albert dros" data-group="a"
                 href="https://farm4.staticflickr.com/3804/33589584740_b0fbdcd4aa_z.jpg">
                <img src="https://farm4.staticflickr.com/3804/33589584740_b0fbdcd4aa_s.jpg" alt="">
              </a>
              <a data-gallery="photoviewer" data-title="Winter Fairytale by Achim Thomae"
                 data-group="a"
                 href="https://farm1.staticflickr.com/470/31340603494_fb7228020d_z.jpg">
                <img src="https://farm1.staticflickr.com/470/31340603494_fb7228020d_s.jpg" alt="">
              </a>

              <a data-gallery="photoviewer"
                 href="https://farm5.staticflickr.com/4267/34162425794_1430f38362_z.jpg"
                 data-group="b">
                <img src="https://farm5.staticflickr.com/4267/34162425794_1430f38362_s.jpg" alt="">
              </a>
              <a data-gallery="photoviewer"
                 href="https://farm1.staticflickr.com/4160/34418397675_18de1f7b9f_z.jpg"
                 data-group="b">
                <img src="https://farm1.staticflickr.com/4160/34418397675_18de1f7b9f_s.jpg" alt="">
              </a>
              <a data-gallery="photoviewer"
                 href="https://farm1.staticflickr.com/512/32967783396_a6b4babd92_z.jpg"
                 data-group="b">
                <img src="https://farm1.staticflickr.com/512/32967783396_a6b4babd92_s.jpg" alt="">
              </a>
            </div>
            <hr>
            <h4>Overflowing text to show scroll behavior</h4>
            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
              facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum
              at eros.</p>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
              lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
              scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
              auctor fringilla.</p>
            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
              facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum
              at eros.</p>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
              lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
              scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
              auctor fringilla.</p>
            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
              facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum
              at eros.</p>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
              lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
              scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
              auctor fringilla.</p>
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
  <script src="js/photoviewer.js"></script>
</body>
</html>
