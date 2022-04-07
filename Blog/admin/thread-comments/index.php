<?php
include("../../path.php");
include(ROOT_PATH . '/app/controllers/thread-comments.php');
adminOnly();
// Grab the User's data
$users = selectAll('users');
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

    <title>Admin Section - Manage Thread Comment</title>
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
            <div class="content">
                <h2 class="page-title">Manage Thread Comments</h2>

                <?php include(ROOT_PATH . "/app/includes/messages.php") ?>


                <table>
                    <thead>
                        <th>SN.</th>
                        <th>Post Title</th>
                        <th>Comment</th>
                        <th>username</th>
                        <th colspan="1">Actions</th>
                    </thead>
                    <tbody>

                        <?php foreach ($thread_comments as $key => $comment) : ?>

                            <tr>
                                <td><?php echo $key + 1 ?></td>

                                <?php foreach ($threads as $key => $thread) :  ?>
                                    <?php if ($comment['thread_id'] == $thread['id']) : ?>
                                        <td>
                                            <a href="<?php echo Base_URL . 'thread.php?id=' . $thread['id']; ?>">
                                                <?php echo $thread['title'] ?>
                                            </a>
                                        </td>
                                    <?php endif; ?>
                                <?php endforeach; ?>

                                <td><?php echo html_entity_decode($comment['message']); ?></td>

                                <?php foreach ($users as $key => $user) :  ?>
                                    <?php if ($comment['user_id'] == $user['id']) : ?>
                                        <td>
                                            <?php echo ucfirst($user['username']); ?>
                                        </td>
                                    <?php endif; ?>
                                <?php endforeach; ?>


                                <td>
                                    <a href="index.php?del_id=<?php echo $comment['id'] ?>" class="delete">Delete</a>
                                </td>

                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
        <!--admin main contant ends-->
    </div>


</body>

</html>