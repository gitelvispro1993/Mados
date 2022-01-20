<?php include('connect.php'); ?>


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
  <link rel="stylesheet" href="style.css">

  <title>Blog</title>
</head>

<body>
   <?php include("header.php"); ?>


  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Post Slider -->
    <div class="post-slider">
      <h1 class="slider-title">Trending Posts</h1>
      <i class="fas fa-chevron-left prev"></i>
      <i class="fas fa-chevron-right next"></i>

      <div class="post-wrapper">

        <div class="post">
          <img src="images/image_1.png" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.php">One day your life will flash before your eyes</a></h4>
            <!--i class="far fa-user"> Adminpro</i-->
            &nbsp;
            <i class="far fa-calendar"> Mar 8, 2020</i>
          </div>
        </div>

        <div class="post">
          <img src="images/image_1.png" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.php">One day your life will flash before your eyes</a></h4>
            <i class="far fa-user"> Adminpro</i>
            &nbsp;
            <i class="far fa-calendar"> April 6, 2020</i>
          </div>
        </div>

        <div class="post">
          <img src="images/image_1.png" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.php">One day your life will flash before your eyes</a></h4>
            <i class="far fa-user"> Adminpro</i>
            &nbsp;
            <i class="far fa-calendar"> June 28, 2020</i>
          </div>
        </div>

        <div class="post">
          <img src="images/image_1.png" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.php">One day your life will flash before your eyes</a></h4>
            <i class="far fa-user"> Adminpro</i>
            &nbsp;
            <i class="far fa-calendar"> October 8, 2020</i>
          </div>
        </div>

        <div class="post">
          <img src="images/image_1.png" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.php">One day your life will flash before your eyes</a></h4>
            <i class="far fa-user"> Adminpro</i>
            &nbsp;
            <i class="far fa-calendar"> December 2, 2020</i>
          </div>
        </div>


      </div>

    </div>
    <!-- // Post Slider -->

    <!-- Content -->
    <div class="content clearfix">

      <!-- Main Content -->
      <div class="main-content">
        <h1 class="recent-post-title">Recent Posts</h1>

        <div class="post clearfix">
          <img src="images/image_3.png" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.php">The strongest and sweetest songs yet remain to be sung</a></h2>
            <i class="far fa-user"> Adminpro</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 11, 2021</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitationem optio possimus a inventore maxime laborum.
            </p>
            <a href="single.php" class="btn read-more">Read More</a>
          </div>
        </div>

        <div class="post clearfix">
          <img src="images/image_4.png" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.php">The strongest and sweetest songs yet remain to be sung</a></h2>
            <i class="far fa-user"> Adminpro</i>
            &nbsp;
            <i class="far fa-calendar"> May 11, 2021</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitationem optio possimus a inventore maxime laborum.
            </p>
            <a href="single.php" class="btn read-more">Read More</a>
          </div>
        </div>
        <div class="post clearfix">
          <img src="images/image_3.png" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.php">The strongest and sweetest songs yet remain to be sung</a></h2>
            <i class="far fa-user"> Adminpro</i>
            &nbsp;
            <i class="far fa-calendar"> August 1, 2021</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitationem optio possimus a inventore maxime laborum.
            </p>
            <a href="single.php" class="btn read-more">Read More</a>
          </div>
        </div>
        <div class="post clearfix">
          <img src="images/image_3.png" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.php">The strongest and sweetest songs yet remain to be sung</a></h2>
            <i class="far fa-user"> Adminpro</i>
            &nbsp;
            <i class="far fa-calendar">October 4, 2021</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitationem optio possimus a inventore maxime laborum.
            </p>
            <a href="single.php" class="btn read-more">Read More</a>
          </div>
        </div>

      </div>
      <!-- // Main Content -->

      <div class="sidebar">

        <div class="section search">
          <h2 class="section-title">Search</h2>
          <form action="index.php" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Search...">
          </form>
        </div>


        <div class="section topics">
          <h2 class="section-title">Topics</h2>
          <!-- select ordering by names(sql query)-->
                      <?php
                          
                            $sql="SELECT * FROM topics LIMIT 12";
                            $result=mysqli_query($con,$sql);
                            if(mysqli_num_rows($result)>0){
                            while ($row=mysqli_fetch_assoc($result)) {

                            ?>   
                            <ul>
                                 <li><a href="#"><?php echo $row['name']; ?></</a></li>
                                </ul>
                            <?php
                            }}

                             
                            ?>
                 </div>

          </div>

    </div>
    <!-- // Content -->

  </div>
  <!-- // Page Wrapper -->

  <?php include('footer.php') ;?>

  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick Carousel -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Custom Script -->
  <script src="js/scripts.js"></script>

</body>

</html>