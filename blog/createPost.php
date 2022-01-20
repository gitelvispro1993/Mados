<?php 
include("connect.php");
if(isset($_POST['submit'])){

$title=$_POST['title'];
$description=$_POST['description'];
$img=$_POST['img'];
$topic=$_POST['topic'];

    $sql="INSERT INTO posts (title,description,img,topic) VALUES('$title','$description','$img','$topic')";
    $result=mysqli_query($con,$sql);
    if ($result) {
      header('location:indexPost.php'); 
       // echo "post added successfuly";
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

        <title>Admin Section - Add Post</title>
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
                    <a href="createPost.php" class="btn btn-big">Add Post</a>
                    <a href="indexPost.php" class="btn btn-big">Manage Posts</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Manage Posts</h2>

                    <form action="createPost.php" method="post">
                        <div>
                            <label>Title</label>
                            <input type="text" name="title" class="text-input">
                        </div>
                        <div>
                            <label>Body</label>
                            <textarea name="description" id="body"></textarea>
                        </div>
                        <div>
                            <label>Image</label>
                            <input type="file" name="img" class="text-input">
                        </div>
                        <div>
                            <label>Topic</label>
                            <select name="topic" class="text-input">
                                <option value="Business">Business</option>
                                <option value="Economy">Economy</option>
                                <option value="Politics">Politics</option>
                                <option value="Fiction">Fiction</option>
                                <option value="Technology">Technology</option>
                                
                            </select>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-big" name="submit">Add Post</button>
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
        <script src="js/scripts.js"></script>

    </body>

</html>