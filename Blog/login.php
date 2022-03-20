<?php
include('path.php');
include(ROOT_PATH . "/app/controllers/users.php");
guestsOnly();
?>

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
        <form action="login.php" method="POST">
            <h2 class="form-title">Log in</h2>

            <?php include(ROOT_PATH . "/app/helpers/formErrors.php") ?>
            <div>
                <label>Username</label>
                <input class="text-input" type="text" name="username" value=<?php echo $username; ?>>
            </div>

            <div>
                <label>Password</label>
                <input class="text-input" type="password" name="password" value=<?php echo $password; ?>>
            </div>

            <div>
                <button type="submit" name="login-btn" class="btn btn-big">Log in</button>
            </div>
            <p>Or <a href="<?php echo Base_URL . 'signup.php' ?>">Register</a> </p>
        </form>
    </div>
    <!--sign up form starts-->


    <!--custom scrip-->
    <script src="assets/js/Validation.js"></script>
</body>

</html>