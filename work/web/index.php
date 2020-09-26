<?php
require('../app/functions.php');

$name = 'Taro<script>alert(1);</script>';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>PHP Practice</title>
</head>
<body>
  <p>Hello, <?= h($name); ?></p>
</body>
</html>