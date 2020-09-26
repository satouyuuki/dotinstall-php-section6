<?php
require('../app/functions.php');

$filename = '../app/messages.txt';
$messages = file($filename, FILE_IGNORE_NEW_LINES);

include('../app/_parts/_header.php');
?>
<ul>
  <?php foreach($messages as $message): ?>
    <li><?= h($message); ?></li>
  <?php endforeach;?>
</ul>
<form action="result.php" method="post">
  <input type="text" name="message">
  <button>Post</button>
</form>
<?php

include('../app/_parts/_footer.php');

