<?php
require('../app/functions.php');

// $color = filter_input(INPUT_COOKIE, 'color') ?? 'transparent';

include('../app/_parts/_header.php');
?>
<form action="result.php" method="get">
  <label for=""><input type="radio" name="color" value="orange">Orange</label>
  <label for=""><input type="radio" name="color" value="pink">Pink</label>
  <label for=""><input type="radio" name="color" value="gold">Gold</label>
  <button>send</button>
</form>
<?php

include('../app/_parts/_footer.php');

