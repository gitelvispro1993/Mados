<?php 
include('connect.php');

//delete posts
if (isset($_GET['deleteid'])) {
	$id=$_GET['deleteid'];

	$sql="DELETE FROM posts WHERE id=$id ";
	$result=mysqli_query($con,$sql);
	if ($result) {
	header('location:indexPost.php');	
	}else{
		die(mysqli_error($con));
	}
}

 ?>