<?php 
include("connect.php");
$id=$_GET['updateid'];
$sql="SELECT * FROM users WHERE id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$username=$row['username'];
$email=$row['email'];
$password=$row['password'];
$role=$row['role'];

if(isset($_POST['submit'])){
$username=$row['username'];
$email=$row['email'];
$password=$row['password'];
$role=$row['role'];


$sql ="UPDATE users SET id=$id,username='$username',email ='$email',password='$password',role='$role' WHERE id=$id";
 $result=mysqli_query($con,$sql);
 if($result){
  // echo"data inserted successfully";
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
        <header>
            <div class="logo">
                <h1 class="logo-text"><span>Awa</span>Inspires</h1>
            </div>
            <i class="fa fa-bars menu-toggle"></i>
            <ul class="nav">
                <li>
                    <a href="#">
                        <i class="fa fa-user"></i>
                        Awa Melvine
                        <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                    </a>
                    <ul>
                        <li><a href="#" class="logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </header>

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
                        <div>
                            <label>Username</label>
                            <input type="text" name="username"  
                                class="text-input" value=<?php echo $username;?>>
                        </div>
                        <div>
                            <label>Email</label>
                            <input type="email" name="email" class="text-input" value=<?php echo $email; ?>>
                        </div>
                        <div>
                            <label>Password</label>
                            <input type="password" name="password"
                                class="text-input" value=<?php echo $password; ?>>
                        </div>
                        <!--div>
                            <label>Password Confirmation</label>
                            <input type="password" name="passwordConf"
                                class="text-input">
                        </div-->
                        <div>
                            <label>Role</label>
                            <select name="role" class="text-input" value=<?php echo $role; ?>>
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