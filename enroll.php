<?php include 'components/head.php';?>

<body>

  <?php include 'functionalities/update_details_fetch_functionality.php';?>

  <h1>Really want to enroll in the following course:</h1>


  <a href="main.php">
    <button type="button" class="btn btn-outline-success waves-effect">
    go back
    </button>
  </a>

        <br>
        <br>
        <br>

      <a class="white-text my-5" href="logout.php?logout"> Logout</a>


<!-- ______________________________________________________ -->

  <?php 
    echo "
      <form class='text-center p-5' method='POST' action='enroll.php?id=".$data['id']."'>

            <button type='submit' class='btn btn-outline-white waves-effect' name='enroll_button'>Log in</button>
         

        </form>";

  ?>

<!-- ________________________________________________________ -->

      <?php

      if( isset($_POST['enroll_button']) ) {

         $user_id = $_SESSION['user_id'];
         $course_id = $id;
         // echo $user_id;
         // echo $id;

         $conn = new mysqli("localhost" , "root", "", "cr14_fabian_andiel_sportsclub");

         $query= "INSERT INTO enrollment VALUES ($id, '$name', '$course_category', '$course_hours','$description','$image_path')";







          





      }

      ?>



  <?php include 'components/footer.php';?>

  <?php include 'components/scripts.php';?>
   

</body>
</html>
