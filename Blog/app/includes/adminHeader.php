<header>
    <div class="logo">
        <h1 class="logo-text"><span>NSUer's</span> Blog</h1>
    </div>
    <i class="fa fa-bars menu-shift"></i>
    <ul class="nav">
        <?php if (isset($_SESSION['id'])) : ?>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                    <?php echo $_SESSION['username'] ?>
                    <i class="fa fa-chevron-down"></i>
                </a>
                <ul>
                    <li><a href="<?php echo Base_URL . 'logout.php'; ?>" class="logout">Logout</a></li>
                </ul>
            </li>
        <?php endif; ?>
    </ul>
</header>