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
    <link rel="stylesheet" href="../../css/style.css">
    <!--Custom CSS Styling-->
    <link rel="stylesheet" href="../../css/admin.css">

    <title>Admin manage post</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1 class="logo-text"><span>NSUer's</span> Blogs</h1>
        </div>
        <i class="fa fa-bars menu-shift"></i>
        <ul class="nav">
            <li>
                <a href ="#">
                    <i class="fa fa-user"></i>
                    User Name
                    <i class="fa fa-chevron-down"></i>
                </a>
                <ul>
                    <li><a href="#" class="logout">Logout</a></li>
                </ul>
            </li>
        </ul>
    </header>
    <!--admin page wapper starts-->
    <div class="admin-wrapper">

        <!--left side ber starts-->
        <div class="left-sidebar">
            <ul>
                <li><a href="../posts/">Manage Posts</a></li>
                <li><a href="../users/index.html">Manage Users</a></li>
                <li><a href="../topics/index.html">Manage Topicss</a></li>
                <li><a href="index.html">Manage Discussion</a></li>
                <li><a href="../message.html">Messages</a></li>
            </ul>
        </div>
        <!--left side ber ends-->

        <!--admin main content starts-->
        <div class="admin-content">
            <div class="bnt-group">
                <a href="create.html" class="btn btn-big">Add Discussion</a>
                <a href="index.html" class="btn btn-big">Manage Discussions</a>
            </div>
            <div class="content">
                <h2 class="page-title">Manage-Discussion</h2>
                <table>
                   <thead>
                       <th>SN.</th>
                       <th>Title</th>
                       <th>Author</th>
                       <th colspan="3">Actions</th>
                   </thead> 
                   <tbody>
                    <tr>
                       <td>1</td>
                       <td>25th Convocation</td>
                       <td>MSK</td>
                       <td>Is it true???</td>
                       
                    </tr>
                    <tr>
                        <td>2</td>
                       <td>25th Convocation</td>
                       <td>MSK</td>
                       <td>Is it true???</td>
                       
                        
                     </tr>
                   </tbody>
                </table>
            </div>
        </div>
        <!--admin main contant ends-->
    </div>   


    <!--Jquary-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!--custom scrip-->
    <script src="../../js/scripts.js"></script>
</body>
</html>