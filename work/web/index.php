<?php
require('../app/functions.php');

define('FILENAME', '../app/messages.txt');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $message = trim(filter_input(INPUT_POST, 'message'));
  $message = $message !== '' ? $message : '...';

  $fp = fopen(FILENAME, 'a');
  fwrite($fp, $message . "\n");
  fclose($fp);

  header('Location: http://localhost:8080/result.php');
  exit;
}

$messages = file(FILENAME, FILE_IGNORE_NEW_LINES);

include('../app/_parts/_header.php');
?>
<ul>
  <?php foreach($messages as $message): ?>
    <li><?= h($message); ?></li>
  <?php endforeach;?>
</ul>
<form action="" method="post">
  <input type="text" name="message">
  <button>Post</button>
</form>
<?php

include('../app/_parts/_footer.php');

