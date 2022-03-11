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
    <link rel="stylesheet" href="css/style.css">
    <title>NSU Blogs</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1 class="logo-text"><span>NSUer's</span> Blogs</h1>
        </div>
        <i class="fa fa-bars menu-shift"></i>
        <ul class="nav">
            <li><a href ="#">Home</a></li>
            <li><a href ="#">About Us</a></li>
            <li><a href ="#">Service</a></li>
            <li>
                <a href ="#">
                    <i class="fa fa-user"></i>
                    User Name
                    <i class="fa fa-chevron-down"></i>
                </a>
                <ul>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#" class="logout">Logout</a></li>
                </ul>
            </li>
        </ul>
    </header>
    

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

    
    <!--footer starts-->
    <div class="footer">
        <div class="footer-content">
            <div class="footer-section about">
                <h1 class="logo-text"><span>NSUer's</span> Blogs</h1>
                <p>This website is only for NSU student. On this platfrom students a free to 
                    share their various ideas and post their blogs. </p>
                    <div class="contact">
                        <span>North South University</span><br>
                        <span><i class="fa-solid fa-location-dot"></i> Bashundhara, Dhaka-1229, Bangladesh</span><br>
                        <span><i class="fas fa-phone"></i> +880-2-55668200</span><br>
                        <span><i class="fas fa-envelope"></i> registrar@northsouth.edu</span>
                    </div>
            </div><br>
            <div class="footer-section links">
                <h2>Quick Links</h2><br>
                <a href="#"><i class="fa-brands fa-facebook"></i> Facebook</a><br><br>
                <a href="#"><i class="fa-brands fa-twitter"></i> Twitter</a><br><br>
                <a href="#"><i class="fa-brands fa-instagram-square"></i> Instagram</a><br><br>
                <a href="#"><i class="fab fa-youtube"></i> Youtube</a>   
            </div>
            <div class="footer-section contact-form">
                <h2>Contact Us</h2><br>
                <form action="home-page.html" method="post">
                <input type="email" name="email" class="text-input contact-input" placeholder="Your email Address...."><br>
                <textarea name="message" class="text-input contact-input" placeholder="Your message...."></textarea><br>
                <button type="submit" class="btn btn-big">
                    <i class="fas fa-envelope"></i> Send
                </button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
           &copy;All Rights Reserved. Designed By <a href="#"><b>CSE482 Project Team</b></a>
        </div>
    </div>
    
    <!--footer ends-->
    <!--Jquary-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--Slick corsousel-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!--custom scrip-->
    <script src="js/Validation.js"></script>
</body>
</html>