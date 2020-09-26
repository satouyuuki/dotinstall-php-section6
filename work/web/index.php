<?php
require('../app/functions.php');

include('../app/_parts/_header.php');
?>
<form action="result.php" method="get">
  <!-- <input type="text" name="message"> -->
  <textarea name="message" cols="30" rows="10"></textarea>
  <button>send</button>
</form>
<?php

include('../app/_parts/_footer.php');

