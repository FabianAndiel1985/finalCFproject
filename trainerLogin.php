<?php include 'components/head.php';?>

<body class="">

	<div class="container">

		<!-- Jumbotron -->
		<div class="jumbotron text-center #000000 black">

		  <!-- Title -->
		  <h4 class="card-title white-text h4 pb-2 "><strong>My career, my choices</strong></h4>

		  <!-- Card image -->
		  <div class="view overlay my-4">
		    <img src="images/trainer_login.jpg" class="img-fluid" alt="">
		  </div>

		  <h5 class="white-text h5 mb-4">Login for trainers</h5>

				<!-- Default form subscription -->
				<form class="text-center p-5" method="POST" action="trainerLogin.php">

				    <div class="md-form mb-0">
                        <input type="text" id="email" name="email" class="form-control">
                        <label for="email" class="">email</label>
                    </div>


				    <div class="md-form mb-0">
                        <input type="password" id="password" name="password" class="form-control">
                        <label for="password" class="">password</label>
                    </div>


				    <button type="submit" class="btn btn-outline-white waves-effect" name="login_button">Log in</button>
				 
				    <div class="mt-3">
					    <a class="white-text" href="landing.php">  
					    	go back
					    </a>
					</div>


				</form>
				<!-- Default form subscription -->


		</div>
		<!-- Jumbotron -->

	</div> <!-- End of BS container -->



	<?php 


	 if(isset($_POST['login_button'])) {
	 			
				  	$email = $_POST['email'];

				  	$password = $_POST['password'];

				  	// echo $email;

				  	// echo $password;

				  	$login_query= "SELECT * FROM trainers WHERE email ='$email' ";

				  	$retrievedUser = mysqli_query($conn,$login_query);

				  	$retrievedUserArray = mysqli_fetch_assoc($retrievedUser);

				  	// echo $retrievedUserArray['zip'];

				  	$count = mysqli_num_rows($retrievedUser);  



				  	if ($count == 1 && $retrievedUserArray['password'] == $password) {

				  		// echo "Hello";
						
						$_SESSION["system_user"] = "trainer";

						// echo $_SESSION["system_user"];

						header('Location: businessBro.php');
									
						exit();

				  	};


				  }; /*END of Login button set */




	?>


	<?php include 'components/scripts.php';?>

</body>
</html>