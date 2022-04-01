<?php
include("../../path.php");
include(ROOT_PATH . '/app/controllers/threads.php');
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

    <title>Admin Section - Manage Threads</title>
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
                <a href="create.php" class="btn btn-big">Add Thread</a>

            </div>
            <div class="content">
                <h2 class="page-title">Manage Thread</h2>

                <?php include(ROOT_PATH . "/app/includes/messages.php") ?>


                <table>
                    <thead>
                        <th>SN.</th>
                        <th>Title</th>
                        <th>Thread Topic</th>
                        <th>Author</th>
                        <th colspan="3">Actions</th>
                    </thead>
                    <tbody>
                    <tbody>

                        <?php foreach ($threads as $key => $thread) : ?>
                            <tr>
                                <td>
                                    <?php echo $key + 1 ?>
                                </td>
                                <td>
                                    <?php echo $thread['title'] ?>
                                </td>

                                <?php foreach ($thread_topics as $key => $topic) :  ?>
                                    <?php if ($thread['thread_topic_id'] == $topic['id']) : ?>
                                        <td>
                                            <?php echo $topic['name'] ?>
                                        </td>
                                    <?php endif; ?>
                                <?php endforeach; ?>


                                <?php if (isset($_SESSION['id'])) : ?>
                                    <td>
                                        <?php echo $_SESSION['username'] ?>
                                    </td>
                                <?php endif; ?>
                                <td>
                                    <a href="edit.php?id=<?php echo $thread['id']; ?>" class="edit">
                                        Edit
                                    </a>
                                </td>
                                <td>
                                    <a href="index.php?del_id=<?php echo $thread['id'] ?>" class="delete">
                                        Delete
                                    </a>
                                </td>
                                <?php if ($thread['published']) : ?>
                                    <td>
                                        <a href="edit.php?published=0&t_id=<?php echo $thread['id'] ?>" class="unpublish">
                                            Unpublish
                                        </a>
                                    </td>

                                <?php else : ?>
                                    <td>
                                        <a href="edit.php?published=1&t_id=<?php echo $thread['id'] ?>" class="publish">
                                            Publish
                                        </a>
                                    </td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                    </tbody>
                </table>
            </div>
        </div>
        <!--admin main contant ends-->
    </div>


</body>

</html>