<?php
require('../app/functions.php');

include('../app/_parts/_header.php');
?>
<form action="result.php" method="get">
  <input type="text" name="message">
  <button>send</button>
</form>
<?php

include('../app/_parts/_footer.php');

