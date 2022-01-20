<?php

include("connect.php");

//if register button is clicked
if(isset($_POST['submit'])){

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$role=$_POST['role'];
/*$username="";
$email="";
$errors=array();
$username=mysql_real_escape_string($_POST['username']);
$email=mysql_real_escape_string($_POST['email']);
$password1=mysql_real_escape_string($_POST['password1']);
$password1=mysql_real_escape_string($_POST['password1']);
$role=mysql_real_escape_string($_POST['role']);


//ensure that form fields are filled propery
//add errors to error array
f (empty($username)) {
    array_push($errors,"username is required");
}
if (empty($email)) {
    array_push($errors,"email is required");
}
if (empty($password1)) {
    array_push($errors,"password is required");
}
if (empty($password1 !=$password2)) {
    array_push($errors," The two password are not match");
}
if (empty($role)) {
    array_push($errors,"role is required");
}
//if there are no errors, save user to database.
if(count($errors) == 0){} */

$password1=md5($password);
$sql ="INSERT INTO users (username,email,password,role)
 VALUES ('$username' , '$email','$password1','$role')";
 $result=mysqli_query($con,$sql);
 if($result){
   //echo"data inserted successfully";
  header('location:indexUser.php');
 }
  else{
    die(mysqli_error($con));
  }
}


?>





<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Font Awesome -->
        <link rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
            crossorigin="anonymous">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Candal|Lora"
            rel="stylesheet">

        <!-- Custom Styling -->
        <link rel="stylesheet" href="style.css">

        <!-- Admin Styling -->
        <link rel="stylesheet" href="admin.css">

        <title>Admin Section - Add User</title>
    </head>

    <body>
         <?php include("header.php"); ?>

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

            <!-- Left Sidebar -->
            <div class="left-sidebar">
                <ul>
                    <li><a href="indexPost.php">Manage Posts</a></li>
                    <li><a href="indexUser.php">Manage Users</a></li>
                    <li><a href="indexTopic.php">Manage Topics</a></li>
                </ul>
            </div>
            <!-- // Left Sidebar -->


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="createUser.php" class="btn btn-big">Add User</a>
                    <a href="indexUser.php" class="btn btn-big">Manage Users</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Add User</h2>
                        <form action="createUser.php" method="post">
                        <!-- ?php include("errors.php"); ?-->
                        <!-- Display validation errors here -->
                        
                        <div>
                            <label>Username</label>
                            <input type="text" name="username"
                                class="text-input" >
                        </div>
                        <div>
                            <label>Email</label>
                            <input type="email" name="email" class="text-input" >
                        </div>
                        <div>
                            <label>Password</label>
                            <input type="password" name="password"
                                class="text-input">
                        </div>
                        <!--div>
                            <label>Password Confirmation</label>
                            <input type="password" name="passwordConf"
                                class="text-input">
                        </div-->
                        <div>
                            <label>Role</label>
                            <select name="role" class="text-input">
                                <option value="Author">Author</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div>

                        <div>
                            <button type="submit" name="submit" class="btn btn-big">Add User</button>
                        </div>
                    </form>

                </div>

            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->



        <!-- JQuery -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Ckeditor -->
        <script
            src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
        <!-- Custom Script -->
        <script src="scripts.js"></script>

    </body>

</html>