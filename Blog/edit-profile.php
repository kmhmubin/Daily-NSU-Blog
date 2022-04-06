<?php
include('path.php');
include(ROOT_PATH . '/app/controllers/users.php');
// grab the info from the database
if (isset($_GET['id'])) {
    $user = selectOne('users', ['id' => $_GET['id']]);
    // output($user);
}

userOnly();
?>
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
    <title>Edit Profile | NSUer's Blog</title>
</head>

<body>

    <!--header connection-->
    <?php
    include(ROOT_PATH . "/app/includes/header.php");
    include(ROOT_PATH . "/app/includes/messages.php");
    ?>

    <main class="container mtb-2">
        <!-- Edit Profile Info -->
        <div class="edit-profile-container">
            <div class="edit-profile-header">
                <h2>Edit Profile</h2>
            </div>
            <!-- helpers connection-->
            <?php include(ROOT_PATH . "/app/helpers/formErrors.php") ?>

            <form action="edit-profile.php" id="form" class="edit-form" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div>
                    <!-- First Name -->
                    <div class="form-control">
                        <label for="first_name">First Name</label>
                        <input type="text" placeholder="First Name" id="first_name" name="first_name" value="<?php echo $user['first_name']; ?>">

                    </div>
                    <!-- Last Name -->
                    <div class="form-control">
                        <label for="last_name">Last Name</label>
                        <input type="text" placeholder="Last Name" id="last_name" name="last_name" value="<?php echo $user['last_name']; ?>">

                    </div>
                    <!-- Email -->
                    <div class="form-control">
                        <label for="email">Email</label>
                        <input type="email" placeholder="johndoe@northsouth.edu" id="email" name="email" value="<?php echo $user['email']; ?>">

                    </div>
                    <!-- Tagline -->
                    <div class="form-control">
                        <label for="tagline">Tagline</label>
                        <input type="text" placeholder="I'm Awesome" id="tagline" name="profile_tagline" value="<?php echo $user['profile_tagline']; ?>">

                    </div>
                    <!-- location -->
                    <div class="form-control">
                        <label for="location">location</label>
                        <input type="text" placeholder="Dhaka, Bangladesh" id="location" name="location" value="<?php echo $user['location']; ?>">
                    </div>
                    <!-- About Me -->
                    <div class="form-control">
                        <label for="about_me">About Me</label>
                        <textarea name="about_me" placeholder="I'm not a developer" id="about_me">
                        <?php echo html_entity_decode($user['about_me']); ?>
                    </textarea>

                    </div>
                    <!-- Social Links: Facebook -->
                    <div class="form-control">
                        <label for="facebook">Facebook</label>
                        <input type="url" placeholder="https://www.facebook.com/johndoe" id="facebook" name="fb_link" value="<?php echo $user['fb_link']; ?>">

                    </div>
                    <!-- Social Links: LinkedIn -->
                    <div class="form-control">
                        <label for="linkedin">LinkedIn</label>
                        <input type="url" placeholder="https://www.linkedin.com/johndoe" id="linkedin" name="lk_link" value="<?php echo $user['lk_link']; ?>">

                    </div>
                    <!-- Social Links: Twitter -->
                    <div class="form-control">
                        <label for="twitter">Twitter</label>
                        <input type="url" placeholder="https://www.twitter.com/johndoe" id="twitter" name="tw_link" value="<?php echo $user['tw_link']; ?>">

                    </div>
                    <!-- Social Links: Youtube -->
                    <div class="form-control">
                        <label for="youtube">YouTube</label>
                        <input type="url" placeholder="https://www.youtube.com/johndoe" id="youtube" name="yt_link" value="<?php echo $user['yt_link']; ?>">

                    </div>
                    <div>
                        <button type="submit" name="user-profile-update" class="form-button">Submit</button>
                    </div>
            </form>
        </div>
    </main>

    <!--footer connection-->
    <?php include(ROOT_PATH . "/app/includes/footer.php") ?>

    <!--custom scrip-->
    <script src="assets/js/Validation.js"></script>
</body>

</html>