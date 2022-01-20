<?php include('connect.php');?>


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

        <title>Admin Section - Manage Users</title>
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

                    <h2 class="page-title">Manage Users</h2>

                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Username</th>
                            <!--th>Email</th>
                            <th>Password</th-->
                            <th>Role</th>
                            <th colspan="2">Action</th>
                        </thead>
                        <tbody>
                         <?php

                          
                            $sql="SELECT * FROM users";
                            $result=mysqli_query($con,$sql);
                            if(mysqli_num_rows($result)>0){
                            while ($row=mysqli_fetch_assoc($result)) {

                            ?>

                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['username']; ?></td>
                                <!--td><?php echo $row['email']; ?></td-->
                                <td><?php echo $row['role']; ?></td>
                            
                                <td><a href="updatetop.php?updateid=<?php echo $row['id']; ?>" class="edit">edit</a></td>
                                <td><a href="deletetop.php?deleteid=<?php echo $row['id']; ?>" class="delete">delete</a></td>
                            </tr>
                            <?php
                            }}

                             
                            ?>
                        </tbody>
                    </table>

                </div>

            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->



        <!-- JQuery -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Custom Script -->
        <script src="js/scripts.js"></script>

    </body>

</html>