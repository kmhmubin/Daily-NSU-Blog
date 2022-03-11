<!-- Define Root Path -->
<?php include('path.php'); ?>
<!-- include header -->
<?php include(ROOT_PATH . '/includes/_header.php'); ?>
<!-- include navbar -->
<?php include(ROOT_PATH . '/includes/_navbar.php'); ?>


<div class="message-form">
  <div class="input-field">
    <h2>Contact Us</h2>

    <input type="text" class="field" placeholder="Your Name" />
    <input type="email" class="field" placeholder="Your Email" />
    <input type="text" class="field" placeholder="Your Phone" />
  </div>
  <div class="message">
    <textarea placeholder=" Message"></textarea>
    <div class="btn">Send</div>
  </div>
</div>

<!-- footer -->
<?php include(ROOT_PATH . '/includes/_footer.php'); ?>