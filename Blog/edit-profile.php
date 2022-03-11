<!-- Define Root Path -->
<?php include('path.php'); ?>
<!-- include header -->
<?php include(ROOT_PATH . '/includes/_header.php'); ?>
<!-- include navbar -->
<?php include(ROOT_PATH . '/includes/_navbar.php'); ?>


<main class="container mtb-2">
    <!-- Edit Profile Info -->
    <div class="edit-profile-container">
        <div class="edit-profile-header">
            <h2>Edit Profile</h2>
        </div>

        <form action="" id="form" class="edit-form" method="post" enctype="multipart/form-data">

            <!-- Profile Image -->
            <div class="form-control">
                <label for="profile_picture">Profile Picture</label>
                <input type="file" name="profile_picture" id="profile_picture" accept=".jpg, .jpeg, .png">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error Message</small>
            </div>

            <!-- First Name -->
            <div class="form-control">
                <label for="first_name">First Name</label>
                <input type="text" placeholder="John" id="first_name">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error Message</small>
            </div>
            <!-- Last Name -->
            <div class="form-control">
                <label for="last_name">Last Name</label>
                <input type="text" placeholder="Doe" id="last_name">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error Message</small>
            </div>
            <!-- Email -->
            <div class="form-control">
                <label for="email">Email</label>
                <input type="email" placeholder="johndoe@northsouth.edu" id="email">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error Message</small>
            </div>
            <!-- Tagline -->
            <div class="form-control">
                <label for="tagline">Tagline</label>
                <input type="text" placeholder="I'm Awesome" id="tagline">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error Message</small>
            </div>
            <!-- About Me -->
            <div class="form-control">
                <label for="about_me">About Me</label>
                <textarea name="about_me" placeholder="I'm not a developer" id="about_me"></textarea>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error Message</small>
            </div>
            <!-- Social Links: Facebook -->
            <div class="form-control">
                <label for="facebook">Facebook</label>
                <input type="url" placeholder="https://www.facebook.com/johndoe" id="facebook" name="facebook">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error Message</small>
            </div>
            <!-- Social Links: Instagram -->
            <div class="form-control">
                <label for="instagram">Instagram</label>
                <input type="url" placeholder="https://www.instagram.com/johndoe" id="instagram" name="instagram">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error Message</small>
            </div>
            <!-- Social Links: Twitter -->
            <div class="form-control">
                <label for="twitter">Twitter</label>
                <input type="url" placeholder="https://www.twitter.com/johndoe" id="twitter" name="twitter">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error Message</small>
            </div>
            <!-- Social Links: Youtube -->
            <div class="form-control">
                <label for="youtube">YouTube</label>
                <input type="url" placeholder="https://www.youtube.com/johndoe" id="youtube" name="youtube">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error Message</small>
            </div>
            <div>
                <button class="form-button">Submit</button>
            </div>
        </form>
    </div>
</main>

<!-- footer -->
<?php include(ROOT_PATH . '/includes/_footer.php'); ?>