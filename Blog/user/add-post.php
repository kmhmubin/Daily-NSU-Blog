<?php
include("../path.php");
include(ROOT_PATH . '/app/controllers/posts.php');
// grab the info from the database
// if (isset($_GET['id'])) {
//     $user = selectOne('users', ['id' => $_GET['id']]);
//     // output($user);
// }

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
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Create A Blog | NSUer's Blog</title>
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
                <h2>Create A Blog Post</h2>
            </div>
            <!-- helpers connection-->
            <?php include(ROOT_PATH . "/app/helpers/formErrors.php") ?>

            <form action="add-post.php" class="edit-form" method="post" enctype="multipart/form-data">
                <div>
                    <!-- Post Title -->
                    <div class="form-control">
                        <label for="title">Post Title</label>
                        <input type="text" placeholder="Post Title" id="title" name="title" value="<?php echo $title; ?>">

                    </div>
                    <!-- Post Image -->
                    <div class="form-control">
                        <label for="image">Cover Photo</label>
                        <input type="file" name="image" class="text-input">

                    </div>
                    <!-- Post Body -->
                    <div class="form-control">
                        <label for="body">Content</label>
                        <textarea name="body" id="body">
                            <?php echo $body; ?>
                        </textarea>

                    </div>
                    <!-- Tagline -->
                    <div class="form-control">
                        <label for="topic_id">Select A topic</label>
                        <select name="topic_id" class="text-input">
                            <option value="">Select topic</option>
                            <?php foreach ($topics as $key => $topic) : ?>

                                <!-- checking the selection -->
                                <?php if (!empty($topic_id) && $topic_id == $topic['id']) : ?>
                                    <option value="<?php echo $topic['id']; ?>" selected>
                                        <?php echo $topic['name']; ?>
                                    </option>
                                <?php else : ?>
                                    <option value="<?php echo $topic['id']; ?>">
                                        <?php echo $topic['name']; ?>
                                    </option>
                                <?php endif; ?>


                            <?php endforeach; ?>

                        </select>

                    </div>
                    <!-- Publish Post -->
                    <div>
                        <?php if (empty($published)) : ?>
                            <label>Published</label>
                            <input type="checkbox" name="published">
                        <?php else : ?>
                            <label>Published</label>
                            <input type="checkbox" name="published" checked>
                        <?php endif; ?>
                    </div>
                    <!-- Submit -->
                    <div>
                        <button type="submit" name="create-post" class="form-button">Add Post</button>
                    </div>
            </form>
        </div>
    </main>

    <!--footer connection-->
    <?php include(ROOT_PATH . "/app/includes/footer.php") ?>

    <!--Ckeditor-->
    <script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
    <!--custom scrip-->
    <script src="../assets/js/scripts.js"></script>

</body>

</html>