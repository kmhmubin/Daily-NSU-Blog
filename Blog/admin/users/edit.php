<?php
include("../../path.php");
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
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!--Custom CSS Styling-->
    <link rel="stylesheet" href="../../assets/css/admin.css">

    <title>Admin Edit users</title>
</head>

<body>

    <!-- admin Header  -->

    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <!--admin page wapper starts-->
    <div class="admin-wrapper">


        <!-- side bar -->
        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

        <!--admin main content starts-->
        <div class="admin-content">
            <div class="bnt-group">
                <a href="create.php" class="btn btn-big">Add User</a>
                <a href="index.php" class="btn btn-big">Manage Users</a>
            </div>
            <div class="content">
                <h2 class="page-title">Edit Topics</h2>
                <form action="create.html" method="post">
                    <div>
                        <label>Username</label>
                        <input type="text" name="username" class="text-input">
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="email" name="email" class="text-input">
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="password" class="text-input">
                    </div>
                    <div>
                        <label>Password Confirmtion</label>
                        <input type="password" name="passwordConf" class="text-input">
                    </div>

                    <div>
                        <label>Select Role</label>
                        <select name="topic" class="text-input">
                            <option value="Admin">Admin</option>
                            <option value="Author">Author</option>
                            <option value="Developer">Developer</option>
                        </select>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-submit">Update User</button>
                    </div>
                </form>
            </div>
        </div>
        <!--admin main contant ends-->
    </div>


    <!--custom scrip-->
    <script src="../../assets/js/scripts.js"></script>
</body>

</html>