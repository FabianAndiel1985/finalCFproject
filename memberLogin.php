<?php include 'components/head.php';?>

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

            <!-- Email -->
           <!--  <input type="email" name="email" id="email" class="form-control mb-4" placeholder="email">
 -->
            <div class="md-form mb-0">
              <input type="email" id="email" name="email" class="form-control">
              <label for="email" class="">email</label>
            </div>



            <!-- Password -->
            <!-- <input type="password" name="password" id="password" class="form-control mb-4" placeholder="password"> -->


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
    

  </div>


       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


       <script type="text/javascript">

        $("#loginForm").submit(function(){


          var $form= $("#loginForm");
          console.log($form);

          var $inputs = $form.find("input");

          var serializedInputs = $form.serialize();

          console.log(serializedInputs);

          request = $.ajax({
           url: "checkMail.php",
           type: "post",
           data: serializedInputs
          });

           request.done(function (response, textStatus, jqXHR){
             // Log a message to the console
              
              if (response == "OK") {
                document.getElementById('result').innerHTML = response;
              }

              else {
                window.location.href="main.php";

              }
              
              });

           request.fail(function (jqXHR, textStatus, errorThrown){
       // Log the error to the console
       console.error(
           "The following error occurred: "+
           textStatus, errorThrown
       );
   });

          // console.log("Has changed");

          // var $emailAddy = $form.find("input, select, button, textarea");


        });

       </script>



<?php include 'components/scripts.php';?>

       

</body>
</html>