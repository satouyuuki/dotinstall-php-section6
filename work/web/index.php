<?php

// ユーザーの一覧

require_once(__DIR__ . '/../app/config/config.php');

$app = new MyApp\Controller\Index();

$app->run();

// $app->me();
// $app->getValues()->users;

// var_dump($_SESSION['me']);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div id="container">
    <form action="logout.php" method="post" id="logout">
      <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
      <?= h($app->me()->email); ?> <input type="submit" value="Log Out">
    </form>
    <h1>Users <span class="fs12">(<?= count($app->getValues()->users) ?>)</span></h1>
    <ul>
      <?php foreach($app->getValues()->users as $user): ?>
        <li><?= h($user->email); ?></li>
      <?php endforeach; ?>
    </ul>
    <p class="fs12"><a href="/create.php">Create</a></p>
  </div>
</body>
</html>