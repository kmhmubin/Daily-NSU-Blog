<?php include('path.php');?>
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
    <link rel="stylesheet" href="assets/css/style.css">
    <title>NSU Blogs</title>
  </head>
  <body>

  <!--header connection-->
  <?php include(ROOT_PATH. "/app/include/header.php")?>
    
<main class="container mtb-2">
    <section class="discussion-header">
        <div class="discussion-title">
            <h1>General Discussion</h1>
            <p>Ask a question, post a suggestion, start a discussion.</p>
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
        <div class="mtb-2">
            <table>
                <thead>
                    <tr>
                        <th>Topic</th>
                        <th>Category</th>
                        <th>Views</th>
                        <th>Likes</th>
                        <th>Replies</th>
                        <th>Activity</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="Topic">
                            <a href="#">
                                <h4>How to make a website</h4>
                            </a>
                        </td>
                        <td data-label="Category">
                            <a href="#" class="text-center" role="button">
                                Web Development
                            </a>
                        </td>
                        <td data-label="Views">12 k</td>
                        <td data-label="Like">314</td>
                        <td data-label="Relpy">33</td>
                        <td data-label="Activity">1 hr</td>
                    </tr>
                    <tr>
                        <td data-label="Topic">
                            <a href="#">
                                <h4>How to make a website</h4>
                            </a>
                        </td>
                        <td data-label="Category">
                            <a href="#" class="text-center" role="button">
                                Web Development
                            </a>
                        </td>
                        <td data-label="Views">12 k</td>
                        <td data-label="Like">314</td>
                        <td data-label="Relpy">33</td>
                        <td data-label="Activity">1 hr</td>
                    </tr>
                    <tr>
                        <td data-label="Topic">
                            <a href="#">
                                <h4>How to make a website</h4>
                            </a>
                        </td>
                        <td data-label="Category">
                            <a href="#" class="text-center" role="button">
                                Web Development
                            </a>
                        </td>
                        <td data-label="Views">12 k</td>
                        <td data-label="Like">314</td>
                        <td data-label="Relpy">33</td>
                        <td data-label="Activity">1 hr</td>
                    </tr>
                    <tr>
                        <td data-label="Topic">
                            <a href="#">
                                <h4>How to make a website</h4>
                            </a>
                        </td>
                        <td data-label="Category">
                            <a href="#" class="text-center" role="button">
                                Web Development
                            </a>
                        </td>
                        <td data-label="Views">12 k</td>
                        <td data-label="Like">314</td>
                        <td data-label="Relpy">33</td>
                        <td data-label="Activity">1 hr</td>
                    </tr>
                    <tr>
                        <td data-label="Topic">
                            <a href="#">
                                <h4>How to make a website</h4>
                            </a>
                        </td>
                        <td data-label="Category">
                            <a href="#" class="text-center" role="button">
                                Web Development
                            </a>
                        </td>
                        <td data-label="Views">12 k</td>
                        <td data-label="Like">314</td>
                        <td data-label="Relpy">33</td>
                        <td data-label="Activity">1 hr</td>
                    </tr>
                    <tr>
                        <td data-label="Topic">
                            <a href="#">
                                <h4>How to make a website</h4>
                            </a>
                        </td>
                        <td data-label="Category">
                            <a href="#" class="text-center" role="button">
                                Web Development
                            </a>
                        </td>
                        <td data-label="Views">12 k</td>
                        <td data-label="Like">314</td>
                        <td data-label="Relpy">33</td>
                        <td data-label="Activity">1 hr</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</main>

<!--footer connection-->
<?php include(ROOT_PATH. "/app/include/footer.php")?>

    <!--Jquary-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--Slick corsousel-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!--custom scrip-->
    <script src="assets/js/scripts.js"></script>
</body>
</html>