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

    <title>Admin Add Post Comment</title>
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

                <a href="index.php" class="btn btn-big">Manage comments</a>
            </div>
            <div class="content">
                <h2 class="page-title">Add Post Comment</h2>

                <!-- helpers connection-->
                <?php include(ROOT_PATH . "/app/helpers/formErrors.php") ?>

                <form action="create.php" method="post">

                    <div>
                        <label>Body</label>
                        <textarea name="body" id="body">
                            <?php echo $body; ?>
                        </textarea>
                    </div>


                    <div>
                        <label>Select Post</label>
                        <select name="post_id" class="text-input">
                            <option value="">Select Post</option>
                            <?php foreach ($posts as $key => $post) : ?>

                                <!-- checking the selection -->
                                <?php if (!empty($post_id) && $post_id == $post['id']) : ?>
                                    <option value="<?php echo $post['id']; ?>" selected>
                                        <?php echo $post['title']; ?>
                                    </option>
                                <?php else : ?>
                                    <option value="<?php echo $post['id']; ?>">
                                        <?php echo $post['title']; ?>
                                    </option>
                                <?php endif; ?>


                            <?php endforeach; ?>

                        </select>
                    </div>
                    <div>
                        <?php if (empty($published)) : ?>
                            <label>Published</label>
                            <input type="checkbox" name="published">
                        <?php else : ?>
                            <label>Published</label>
                            <input type="checkbox" name="published" checked>
                        <?php endif; ?>
                    </div>
                    <div>
                        <button type="submit" name="add-comment" class="btn btn-submit">Add Thread</button>
                    </div>
                </form>

            </div>

        </div>
        <!--admin main contant ends-->
    </div>

    <script>
        function postComment() {
            var request = new XMLHttpRequest();
            request.open('POST', 'create.php');
            request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            request.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    document.getElementById("result").innerHTML = this.responseText;
                }
            };

            var commentForm = document.getElementById("commentForm");
            var formData = new FormData(commentForm);
            request.send(formData);
        }
    </script>

    <!--Ckeditor-->
    <script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
    <!--CKeditor scrip-->
    <script src="../../assets/js/scripts.js"></script>
</body>

</html>