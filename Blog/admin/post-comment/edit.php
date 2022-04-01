<?php
include("../../path.php");
include(ROOT_PATH . '/app/controllers/post-comments.php');
adminOnly();
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

    <title>Admin Edit Post Comments</title>
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
                <a href="create.php" class="btn btn-big">Add Comments</a>
                <a href="index.php" class="btn btn-big">Manage Comments</a>
            </div>
            <div class="content">
                <h2 class="page-title">Edit Post Comments</h2>

                <!-- helpers connection-->
                <?php include(ROOT_PATH . "/app/helpers/formErrors.php") ?>

                <form action="edit.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div>
                        <label>Name</label>
                        <input type="text" class="text-input" name="name" value="<?php echo $name; ?>">
                    </div>

                    <div>
                        <label>Description</label>
                        <textarea name="description" id="body">
                            <?php echo $description; ?>
                        </textarea>
                    </div>

                    <div>
                        <button type="submit" name="update-comments" class="btn btn-submit">Update Comments</button>
                    </div>
                </form>
            </div>
        </div>
        <!--admin main contant ends-->
    </div>



    <!--Ckeditor-->
    <script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
    <!--custom scrip-->
    <script src="../../assets/js/scripts.js"></script>
</body>

</html>