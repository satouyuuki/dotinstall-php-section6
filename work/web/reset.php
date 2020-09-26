<?php

require('../app/functions.php');

unset($_SESSION['color']);
// setcookie('color', '');

header('Location: http://localhost:8080/index.php');