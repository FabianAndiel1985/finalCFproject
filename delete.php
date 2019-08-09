<?php include 'components/head.php';?>



	<?php 

	require_once 'dbconnect.php';

	if ($_GET['id']) {
	   $id = $_GET['id'];
	   
	   $sql = "DELETE FROM courses WHERE id = {$id}";

	   if($conn->query($sql) === TRUE) {
       echo "<p>Successfully deleted!!</p>" ;
       echo "<a href='main.php'><button type='button'>Back</button></a>";
	   } 

	   else {
	       echo "Error updating record : " . $conn->error;
	   }

   $conn->close();

	}
	?>





<?php include 'components/scripts.php';?>

</body>
</html>