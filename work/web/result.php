<?php
require('../app/functions.php');

// $color = filter_input(INPUT_GET, 'color');
// $color = empty($color) ? 'None selected' : $color;
// $color = isset($color) ? $color: 'None selected';
$color = filter_input(INPUT_GET, 'color') ?? 'None selected';
include('../app/_parts/_header.php');
?>
<p><?= h($color); ?></p>
<p><a href="index.php">Go back</a></p>
<?php

include('../app/_parts/_footer.php');

