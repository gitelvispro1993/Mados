<?php 
include("connect.php");
$id=$_GET['updateid'];
$sql="SELECT * FROM posts WHERE id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$title=$row['title'];
$description=$row['description'];
$img=$row['img'];
$topic=$row['topic'];

if(isset($_POST['submit'])){

$title=$row['title'];
$description=$row['description'];
$img=$row['img'];
$topic=$row['topic'];


$sql ="UPDATE posts SET id=$id,title='$title',description ='$description',img='$img', topic='$topic' WHERE id=$id";
 $result=mysqli_query($con,$sql);
 if($result){
  // echo"data inserted successfully";
    header('location:indexPost.php');
 }
  else{
    die(mysqli_error($con));
  }
}

?>