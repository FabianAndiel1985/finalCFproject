<?php include 'components/head.php';?>

<body>

  <?php include 'functionalities/update_details_fetch_functionality.php';?>

  <table class="table">
    <thead>
      <tr>
        <td class="first" scope="row"> Name:  </td>
        <td class="first"> <?php echo $data['name'];?> </td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Category: </th>
        <td> <?php echo $data['category'];?> </td>
      </tr>
      <tr>
        <th scope="row">Hours:</th>
        <td><?php echo $data['course_hours'];?></td>
      </tr>
      <tr>
        <th scope="row">Description</th>
        <td><?php echo $data['description'];?></td>
      </tr>
    </tbody>
  </table>


  <a href="main.php">
    <button type="button" class="btn btn-outline-success waves-effect">
    go back
    </button>
  </a>

        <br>
        <br>
        <br>

      <a class="white-text my-5" href="logout.php?logout"> Logout</a>



  <?php include 'components/footer.php';?>

  <?php include 'components/scripts.php';?>
   

</body>
</html>
