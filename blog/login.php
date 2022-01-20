
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

  <!-- Custom Styling -->
  <link rel="stylesheet" href="css/style.css">

  <title>Login</title>
</head>

<body>
   <?php include("header.php"); ?>


  <div class="auth-content">

    <form action="login.php" method="post">
      <h2 class="form-title">Login</h2>
       <div>
        <label>Username</label>
        <input type="text" name="username" class="text-input" required>
      </div>
      <div>
        <label>Password</label>
        <input type="password" name="password" class="text-input" required>
      </div>
      <div>
        <button type="submit" name="submit" class="btn btn-big">Login</button>
      </div>
      <p>Or <a href="#">Sign Up</a></p>
    </form>

  </div>
 
<?php 
include("connect.php");

if(isset($_POST['submit'])){

  $username=$_POST['username'];
  $password=$_POST['password'];

 
  $sql ="SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result=mysqli_query($con,$sql);
 if ($result) {
   header("location:index.php");

 }else{
  header("location:admin.php");
 }
}
?>

  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Custom Script -->
  <script src="js/scripts.js"></script>

</body>

</html>