<?php
include("../../path.php");
include(ROOT_PATH . '/app/controllers/users.php');
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

    <title>Admin Section - Manage Users</title>
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
                <a href="create.php" class="btn btn-big">Add Users</a>
                <a href="index.php" class="btn btn-big">Manage Users</a>
            </div>
            <div class="content">
                <h2 class="page-title">Manage-Users</h2>

                <?php include(ROOT_PATH . "/app/includes/messages.php") ?>


                <table>
                    <thead>
                        <th>SN.</th>
                        <th>Users Name</th>
                        <th>Email</th>
                        <th colspan="2">Actions</th>
                    </thead>
                    <tbody>
                        <?php foreach ($admin_users as $key => $user) : ?>

                            <tr>
                                <td><?php echo $key + 1 ?></td>
                                <td><?php echo $user['username'] ?></td>
                                <td><?php echo $user['email'] ?></td>
                                <td><a href="edit.php?id=<?php echo $user['id']; ?>" class="edit">Edit</a></td>
                                <td><a href="index.php?del_id=<?php echo $user['id'] ?>" class="delete">Delete</a></td>
                            </tr>
                        <?php endforeach; ?>
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