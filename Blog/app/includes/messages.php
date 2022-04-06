<?php if (isset($_SESSION['message'])) : ?>
    <div class="msg <?php echo $_SESSION['type']; ?> ">
        <li><?php echo $_SESSION['message']; ?></li>
        <?php
        unset($_SESSION['message']);
        unset($_SESSION['type']);
        ?>
    </div>

<?php endif; ?>

<script>
    setTimeout(function() {
        document.getElementsByClassName('msg')[0].remove();
    }, 3000);
</script>