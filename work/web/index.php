<?php
$name = 'Taro<script>alert(1);</script>';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>PHP Practice</title>
</head>
<body>
  <p>Hello, <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></p>
</body>
</html>