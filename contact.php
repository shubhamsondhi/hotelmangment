<?php
include 'head.php';
include 'dbconfig.php';
if(isset($_POST['submit']))
{
    extract($_POST);
   
     $sqli="INSERT INTO `contect us` (`First name`, `Last name`, `Email`, `Phone`, `massage`) VALUES ('$name', '$surname', '$email', '$phone', '$message1')";
    if(mysqli_query($conn,$sqli))
    {
        echo "inserted";
    }
}
?>
  
      
        <section id="portfolio" class="bg-light-gray">
        <div class="container">
        <div id="page-content-wrapper">
            
                    <!-- Introduction Row -->
    

               <div class="row">

                <div class="col-lg-8 col-lg-offset-2">
                    <span id="message"></span>
                    <h1><i class="fa fa-phone" aria-hidden="true"></i> Contact US</h1>

                    <p class="lead">Give us feedback. We are waiting for it</p>


                    <form id="contact-form"  method="POST"   role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Firstname *</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname *</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Phone</label>
                                        <input id="form_phone" type="tel" name="phone" pattern="[0-9]{10}" title="" class="form-control" placeholder="Please enter your phone" data-error="Please enter Correct Mobile Number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Message *</label>
                                        <textarea id="form_message" name="message1" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send" name="submit" value="Send message">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-muted"><strong>*</strong> These fields are required. </p>
                                </div>
                            </div>
                        </div>

                    </form>

                </div><!-- /.8 -->

            </div> <!-- /.row-->

       

            
            
                 
                </div>
            <!-- /#page-content-wrapper -->
     <footer class="footer-distributed">	

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span></span> Amritsar, Punjab</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>7837******</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:pvp@gmail.com">pvp@gmail.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-hotel-about">
					<span>Our</span>
				  PVP Hotel provided the online booking to the pepole.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>

    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
      <script src="js/validator.js"></script>
    <script src="js/contact.js"></script>
     
    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
<script src="js/script.js"></script>

	
</body>

</html>




604298