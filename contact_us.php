<?php include 'components/head.php';?>

<style type="text/css">
	section {
		color:white;
	}
</style>

<body>

	<div class="container">

		<!--Section: Contact v.2-->
		<section id="contactSection " class="mb-4">

		    <!--Section heading-->
		    <h2 class="h1-responsive font-weight-bold text-center my-4 white-text">Contact us</h2>
		    <!--Section description-->
		    <p class="text-center w-responsive mx-auto mb-5 white-text">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
		        a matter of hours to help you.</p>

		    <div class="row">

		        <!--Grid column-->
		        <div class="col-md-9 mb-md-0 mb-5">

		            
		            <form id="contact-form" name="contact-form" action="contact_us.php" method="POST">

		                <!--Grid row-->
		                <div class="row">

		                    <!--Grid column-->
		                    <div class="col-md-6">
		                        <div class="md-form mb-0">
		                            <input type="text" id="name" name="name" class="form-control">
		                            <label for="name" class="">Your name</label>
		                        </div>
		                    </div>
		                    <!--Grid column-->

		                    <!--Grid column-->
		                    <div class="col-md-6">
		                        <div class="md-form mb-0">
		                            <input type="text" id="email" name="email" class="form-control">
		                            <label for="email" class="">Your email</label>
		                        </div>
		                    </div>
		                    <!--Grid column-->

		                </div> <!--Grid row-->
		                

		                
		                <div class="row"> <!--Grid row-->
		                    <div class="col-md-12">
		                        <div class="md-form mb-0">
		                            <input type="text" id="subject" name="subject" class="form-control">
		                            <label for="subject" class="">Subject</label>
		                        </div>
		                    </div>
		                </div> <!--Grid row-->
		                

		                
		                <div class="row"> <!--Grid row-->

		                    <!--Grid column-->
		                    <div class="col-md-12">

		                        <div class="md-form">
		                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
		                            <label for="message">Your message</label>
		                        </div>

		                    </div>
		                </div> <!--Grid row-->
		               
		               <button type="submit" class="btn btn-outline-green waves-effect" name="send_button">send</button> 	


		            </form>

		            <div class="status"></div>
		        </div>
		        <!--Grid column-->

		        <!--Grid column-->
		        <div class="col-md-3 text-center">
		            <ul class="list-unstyled mb-0">
		                <li class=""><i class="fas fa-map-marker-alt fa-2x"></i>
		                    <p> Test Street 4, 1050 Vienna, Austria</p>
		                </li>

		                <li><i class="fas fa-phone mt-4 fa-2x"></i>
		                    <p>+ 01 234 567 89</p>
		                </li>

		                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
		                    <p>fabian@sportsclub.com</p>
		                </li>
		            </ul>
		        </div>
		        <!--Grid column-->

		    </div> <!-- end of general row -->

		</section> <!--Section: Contact v.2-->

	</div> <!-- End of BS container -->


	<?php
		if(isset($_POST)) {
			
			$name = $_POST['name'];
			$email = $_POST['email'];
			$message = $_POST['message'];
			$subject = $_POST['subject'];


			$content="From: $name \n Email: $email \n Message: $message";
			$recipient = "fabian.andiel@yahoo.com";
			$mailheader = "From: $email \r\n";
			mail($recipient, $subject, $content, $mailheader) or die("Error!");
			echo "Email sent!";
		}



		
		
		
	?>



	<?php include 'components/scripts.php';?>
	

</body>
</html>