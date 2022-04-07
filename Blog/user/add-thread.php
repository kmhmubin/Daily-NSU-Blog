<?php
include("../path.php");
include(ROOT_PATH . '/app/controllers/user-threads.php');

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
    <title>Create A Discussion Thread | NSUer's Blog</title>
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
                <h2>Create A Discussion Thread</h2>
            </div>
            <!-- helpers connection-->
            <?php include(ROOT_PATH . "/app/helpers/formErrors.php") ?>

            <form action="add-thread.php" class="edit-form" method="post" enctype="multipart/form-data">
                <div>
                    <!-- Post Title -->
                    <div class="form-control">
                        <label for="title">Thread Title</label>
                        <input type="text" placeholder="Post Title" id="title" name="title" value="<?php echo $title; ?>">

                    </div>

                    <!-- Post Body -->
                    <div class="form-control">
                        <label for="body">Content</label>
                        <textarea name="body" id="body">
                            <?php echo $body; ?>
                        </textarea>

                    </div>
                    <!-- Thread Topic -->
                    <div class="form-control">
                        <label for="topic_id">Select A topic</label>
                        <select name="thread_topic_id" class="text-input">
                            <option value="">Select Thread Topic</option>
                            <?php foreach ($thread_topics as $key => $topic) : ?>

                                <!-- checking the selection -->
                                <?php if (!empty($thread_topic_id) && $thread_topic_id == $topic['id']) : ?>
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
                        <button type="submit" name="create-user-thread" class="form-button">Add Thread</button>
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