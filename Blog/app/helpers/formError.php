<?php if (count($errors) > 0) : ?>

    <div class="msg success error">
        <?php foreach ($errors as $errors) : ?>
            <li>Username Required</li>

        <?php endforeach; ?>

    </div>
<?php endif; ?>