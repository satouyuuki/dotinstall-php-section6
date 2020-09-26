<?php
require('../app/functions.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $message = trim(filter_input(INPUT_POST, 'message'));
  $message = $message !== '' ? $message : '...';

  $filename = '../app/messages.txt';
  $fp = fopen($filename, 'a');
  fwrite($fp, $message . "\n");
  fclose($fp);
} else {
  exit('Invalid Request');
}

include('../app/_parts/_header.php');

?>
<p>Message added!</p>
<p><a href="index.php">Go back</a></p>
<?php

include('../app/_parts/_footer.php');

