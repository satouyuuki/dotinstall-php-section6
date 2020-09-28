<?php

// ユーザーの一覧

require_once(__DIR__ . '/../app/config/config.php');

$app = new MyApp\Controller\Index();

$app->run();

// $app->me();
// $app->getValues()->users;

// var_dump($app->getValues()->posts);
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
    <h1>Posts <span class="fs12">(<?= count($app->getValues()->posts) ?>)</span></h1>
    <form action="" method="post" id="delete" name="delete">
      <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
      <ul>
        <?php foreach($app->getValues()->posts as $post): ?>
          <li>
            <?= h($post->text); ?>
            <?= h($post->email); ?>
            <?php if($app->me()->id === $post->user_id): ?>
              <button type="submit" class="delete" onclick="return checkConfirm();" name="id" value="<?= h($post->id); ?>">削除</button>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </form>
    <p class="fs12"><a href="/create.php">Create</a></p>
  </div>
  <script type="text/javascript">
    const checkConfirm = () => {
      const flag = window.confirm('本当に削除しますか？');
      if(!flag) {
        return false;
      }
    }
  </script>
</body>
</html>