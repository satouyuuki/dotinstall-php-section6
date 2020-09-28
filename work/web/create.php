<?php

// ユーザーの一覧

require_once(__DIR__ . '/../app/config/config.php');

$app = new MyApp\Controller\Post();

$app->run();

// $app->me();
// $app->getValues()->users;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div id="container">
    <h1>Post Create</h1>
    <form action="create.php" method="post" id="create">
      <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
      <p>
        <input type="text" name="text" placeholder="投稿内容" value="<?= isset($app->getValues()->text) ? h($app->getValues()->text) : ''; ?>">
      </p>
      <p class="err"><?= h($app->getErrors('text')); ?></p>
      <div class="btn" onclick="document.getElementById('create').submit();">Post!</div>
      <p class="fs12"><a href="/">Home</a></p>
    </form>
  </div>
</body>
</html>