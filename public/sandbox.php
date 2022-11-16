<?php
$PageTitle="Home";
include('../templates/header.php');

error_reporting(E_ALL); ini_set('display_errors', 1);

?>
  <main>
    <div class="container-fluid">
        <br><h1>Sandbox Page</h1>
        <p>Have questions or want to reach out? Simply fill out the contact form below and we will get back to you the second we have time.</p>
        <hr>
    </div>

<!-- Contact Form Modal Code Starts below here -->
<!-- Button to trigger modal -->

<br>
<!--
<div class="text-center">
  <a href="#modalForm" class="btn btn-success btn-lg" data-bs-toggle="modal" data-target="#modalForm">Contact Us</a>
</div>


<!-- Modal -->
<!-- <div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
          <!--   <div class="modal-header">
                <h4 class="modal-title">Contact Us</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
          <!--   <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div class="form-group">
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Enter your name"/>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Enter your email"/>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Message</label>
                        <textarea class="form-control" id="inputMessage" placeholder="Enter your message"></textarea>
                    </div>
                </form>
            </div>

            <!-- Modal Footer -->
          <!--   <div class="modal-footer">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm()">SUBMIT</button>
            </div>
        </div>
    </div>
</div>


<script>
function submitContactForm(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var name = $('#inputName').val();
    var email = $('#inputEmail').val();
    var message = $('#inputMessage').val();
    if(name.trim() == '' ){
        swal("Missing Name!", "Please enter your full name.", "warning");
        $('#inputName').focus();
        return false;
    }else if(email.trim() == '' ){
        swal("Missing Email Address!", "Please enter your Email address.", "warning");
        $('#inputEmail').focus();
        return false;
    }else if(email.trim() != '' && !reg.test(email)){
        swal("Invalid Email!", "Please enter a valid Email address.", "warning");
        $('#inputEmail').focus();
        return false;
    }else if(message.trim() == '' ){
        swal("Message Required!", "Please enter a message with your contact information.", "warning");
        $('#inputMessage').focus();
        return false;
    }else{
        $.ajax({
            type:'POST',
            url:'/includes/testhandler.php',
            data:'contactFrmSubmit=1&name='+name+'&email='+email+'&message='+message,
            beforeSend: function () {
                $('.submitBtn').attr("disabled","disabled");
                $('.modal-body').css('opacity', '.5');
            },
            success:function(msg){
                if(msg == 'ok'){
                    $('#inputName').val('');
                    $('#inputEmail').val('');
                    $('#inputMessage').val('');
                    $('.statusMsg').html('<div class="alert alert-success" role="alert">Success! We will contact you soon.</div>');
                }else{
                    $('.statusMsg').html('<div class="alert alert-danger" role="alert">An error occurred. Please try again.</div>');
                }
                $('.submitBtn').removeAttr("disabled");
                $('.modal-body').css('opacity', '');
            }
        });
    }
}
</script>


<!--  END OF NEW MODAL ------------------------------------->

</main>
  <footer>
<!--  Sweet Alert Script Below --------------------------->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php
      include('../templates/footer.php');
    ?>
  </footer>
</body>
</html>
