<?php
include('path.php');
include(ROOT_PATH . '/app/controllers/threads.php');


/**
 * Get all published threads from threads table by thread topic id
 * 
 */

$threads = array();
$threadTitle = 'Discussion Board';

$thread_topics = selectOne('thread_topics', ['id' => $_GET['id']]);
$thread_topic_id = $thread_topics['id'];
$thread_topic_title = $thread_topics['name'];
$thread_topic_description = $thread_topics['description'];

if (isset($thread_topic_id)) {
    $threads = getThreadsByThreadTopicId($thread_topic_id);
    $threadTitle = $thread_topic_title;
} else {
    $threads = getPublishedThreads();
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <!--Font awesome link-->
    <script src="https://kit.fontawesome.com/4e17d14c86.js" crossorigin="anonymous"></script>
    <!--Google fonts link-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <!--Custom CSS Styling-->
    <link rel="stylesheet" href="assets/css/style.css">
    <title> <?php echo $threadTitle; ?> | NSUer's Blog</title>
</head>

<body>

    <!--header connection-->
    <?php include(ROOT_PATH . "/app/includes/header.php") ?>

    <main class="container mtb-2">
        <section class="discussion-header">
            <div class="discussion-title">
                <h1><?php echo $threadTitle ?></h1>
                <p><?php echo $thread_topic_description ?></p>
            </div>
            <div class="discussion-create">
                <div class="mt-2">
                    <a href="#" class="btn">Create New Thered</a>
                </div>
            </div>
        </section>
        <div>
            <hr />
        </div>

        <!-- Discussion Table data -->

        <section>
            <div>
                <table>
                    <thead>
                        <th>Title</th>
                        <th>Thread Topic</th>
                        <th>Author</th>
                        <th>Update at</th>
                    </thead>
                    <tbody>
                    <tbody>

                        <?php foreach ($threads as $thread) : ?>
                            <tr>

                                <td>
                                    <a href="thread.php?id=<?php echo $thread['id']; ?>">
                                        <?php echo $thread['title'] ?>
                                    </a>
                                </td>

                                <td>
                                    <?php echo $thread_topic_title; ?>
                                </td>

                                <td>
                                    <?php echo ucfirst($thread['username']); ?>
                                </td>

                                <td>
                                    <?php echo date('d F Y, h:i:s A', strtotime($thread['update_at'])); ?>
                                </td>


                            </tr>

                        <?php endforeach; ?>

                    </tbody>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <!--footer connection-->
    <?php include(ROOT_PATH . "/app/includes/footer.php") ?>


</body>

</html>