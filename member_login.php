<?php include 'components/head.php';?>


<!-- prevent logged in user from accessing this page -->

<?php

  if(isset($_SESSION['user_status']) != "" )
  {
   header("Location: main.php" ); 
  };

?>



<body>
	
  <div class="container">

    <!-- Jumbotron -->
    <div class="jumbotron text-center #000000 black">

      <!-- Title -->
      <h4 class="card-title white-text h4 pb-2 "><strong>My gym, my passion</strong></h4>

      <!-- Card image -->
      <div class="view overlay my-4">
        <img src="images/member_login.jpg" class="img-fluid" alt="">
      </div>

      <h5 class="white-text h5 mb-4">Login for members</h5>

        
        <form id="loginForm">

  
            <div class="md-form mb-0">
              <input type="email" id="email" name="email" class="form-control">
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


          <div class="mt-5">
              <a class="white-text font-weight-normal" href="adminLogin.php">  
                enter as an administrator
              </a>
          </div>




        </form>
        <!-- Default form subscription -->

    </div>
    

  </div>


   
<?php include 'functionalities/memberLogin_functionality.php';?>


<?php include 'components/scripts.php';?>

       

</body>
</html>