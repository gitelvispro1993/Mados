<?php 
include('connect.php');

//delete topics
if (isset($_GET['deleteid'])) {
	$id=$_GET['deleteid'];

	$sql="DELETE FROM topics WHERE id=$id ";
	$result=mysqli_query($con,$sql);
	if ($result) {
	header('location:indexTopic.php');	
	}else{
		die(mysqli_error($con));
	}
}


//delete users

 ?>