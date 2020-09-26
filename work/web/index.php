<?php
require('../app/functions.php');

include('../app/_parts/_header.php');
?>
<form action="result.php" method="get">
  <label for=""><input type="checkbox" name="colors[]" value="orange">Orange</label>
  <label for=""><input type="checkbox" name="colors[]" value="pink">Pink</label>
  <label for=""><input type="checkbox" name="colors[]" value="gold">Gold</label>
  <button>send</button>
</form>
<?php

include('../app/_parts/_footer.php');

