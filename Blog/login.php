<?php include('path.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <!--Font awesome link-->
    <script src="https://kit.fontawesome.com/4e17d14c86.js" crossorigin="anonymous"></script>
    <!--Google fonts link-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <!--Custom CSS Styling-->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>NSUer's Blog</title>
</head>

<body>

    <!--header connection-->
    <?php include(ROOT_PATH . "/app/includes/header.php") ?>

    <!--sign up form starts-->
    <div class="signup-content">
        <form action="signup.php">
            <h2 class="form-title">Log in</h2>
            <div>
                <label>Username</label>
                <input type="text" name="username" class="text-input">
            </div>

            <div>
                <label>Password</label>
                <input type="password" name="password" class="text-input">
            </div>

            <div>
                <button type="submit" name="login-btn" class="btn btn-big">Log in</button>
            </div>
            <p>Or <a href="<?php echo Base_URL . 'signup.php' ?>">Register</a> </p>
        </form>
    </div>
    <!--sign up form starts-->
    <!--Jquary-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--custom scrip-->
    <script src="assets/js/Validation.js"></script>
</body>

</html>