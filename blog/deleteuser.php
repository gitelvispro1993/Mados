<?php 
include('connect.php');

//delete users
if (isset($_GET['deleteid'])) {
	$id=$_GET['deleteid'];

	$sql="DELETE FROM users WHERE id=$id ";
	$result=mysqli_query($con,$sql);
	if ($result) {
	header('location:indexUser.php');	
	}else{
		die(mysqli_error($con));
	}
}


 ?>