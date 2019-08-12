<?php include 'components/head.php';?>



	<?php 

	require_once 'dbconnect.php';

	if ($_GET['id']) {
	   $id = $_GET['id'];
	   
	   $sql = "DELETE FROM admin_messages WHERE id = {$id}";

	   if($conn->query($sql) === TRUE) {
       echo "<p>Successfully deleted!!</p>" ;
       echo "<a href='admin_messages.php'><button type='button'>Back</button></a>";
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