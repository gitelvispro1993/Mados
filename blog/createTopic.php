<?php 
include("connect.php");
if(isset($_POST['submit'])){

$name=$_POST['name'];
$description=$_POST['description'];



$sql ="INSERT INTO topics (name,description)
 VALUES ('$name' , '$description')";
 $result=mysqli_query($con,$sql);
 if($result){
  // echo"data inserted successfully";
    header('location:indexTopic.php');
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

        <title>Admin Section - Add Topic</title>
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
                    <a href="createTopic.php" class="btn btn-big">Add Topic</a>
                    <a href="indexTopic.php" class="btn btn-big">Manage Topics</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Add Topic</h2>

                    <form action="createTopic.php" method="post">
                        <div>
                            <label>Name</label>
                            <input type="text" name="name" class="text-input">
                        </div>
                        <div>
                            <label>Description</label>
                            <textarea name="description" id="body"></textarea>
                        </div>

                        <div>
                            <button type="submit" name="submit" class="btn btn-big">Add Topic</button>
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