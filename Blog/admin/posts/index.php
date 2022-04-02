<?php
include("../../path.php");
include(ROOT_PATH . '/app/controllers/posts.php');

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

    <title>Admin Section - Manage Posts</title>
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
                <a href="create.php" class="btn btn-big">Add post</a>
            </div>
            <div class="content">
                <h2 class="page-title">Manage-post</h2>

                <?php include(ROOT_PATH . "/app/includes/messages.php") ?>


                <table>
                    <thead>
                        <th>SN.</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th colspan="3">Actions</th>
                    </thead>
                    <tbody>
                    <tbody>

                        <?php foreach ($posts as $key => $post) : ?>
                            <tr>
                                <td>
                                    <?php echo $key + 1 ?>
                                </td>
                                <td>
                                    <?php echo $post['title'] ?>
                                </td>
                                <?php foreach ($users as $key => $user) :  ?>
                                    <?php if ($post['user_id'] == $user['id']) : ?>
                                        <td>
                                            <?php echo ucfirst($user['username']); ?>
                                        </td>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <td>
                                    <a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">
                                        Edit
                                    </a>
                                </td>
                                <td>
                                    <a href="index.php?del_id=<?php echo $post['id'] ?>" class="delete">
                                        Delete
                                    </a>
                                </td>
                                <?php if ($post['published']) : ?>
                                    <td>
                                        <a href="edit.php?published=0&p_id=<?php echo $post['id'] ?>" class="unpublish">
                                            Unpublish
                                        </a>
                                    </td>

                                <?php else : ?>
                                    <td>
                                        <a href="edit.php?published=1&p_id=<?php echo $post['id'] ?>" class="publish">
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


    <!--custom scrip-->
    <script src="../../assets/js/scripts.js"></script>
</body>

</html>