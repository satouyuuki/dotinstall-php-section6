<?php
require('../app/functions.php');

include('../app/_parts/_header.php');
?>
<form action="result.php" method="get">
  <select name="color">
    <option value="orange">Orange</option>
    <option value="pink">Pink</option>
    <option value="gold">Gold</option>
  </select>
  <button>send</button>
</form>
<?php

include('../app/_parts/_footer.php');

