<?php include('path.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Front awesome link-->
    <script src="https://kit.fontawesome.com/4e17d14c86.js" crossorigin="anonymous"></script>
    <!--Google fonts link-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <!--Custom CSS Styling-->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>NSU Blogs</title>
  </head>
  <body>

  <!--header connection-->
  <?php include(ROOT_PATH. "/app/include/first-page-head.php")?>

<!--Bannar section starts-->
<div class="banner-img">
</div>
<div class="banner-text">
    <h1>A Perfect Place to start</h1>
    <p>
    <i class="fa-solid fa-star-of-life"></i>
    <b>Document Your life.</b> Discover the power full moment in your daily life.<br>
    <i class="fa-solid fa-fire"></i>
    <b>Improve yourself.</b> Prove your self and accomplish the goals you set.<br>
    <i class="fa-solid fa-lightbulb"></i>
    <b>Gate Creative Every Day.</b> Creat and Share Something.<br>
    <i class="fa-solid fa-hands-praying"></i>
    <b>Guide Others.</b> Help others and bring everyone in one frame.
    </p>
    <a href="<?php echo Base_URL . '/signup.php'?>">Sign Up</a>
</div>

</div>
<!--Bannar section ends-->

<!--footer connection-->
<?php include(ROOT_PATH. "/app/include/footer.php")?>

<!--Jquary-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--custom scrip-->
<script src="assets/js/scripts.js"></script>
    
</body>
</html>