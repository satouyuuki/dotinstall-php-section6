<?php

require_once(__DIR__ . '/../app/config/config.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
    echo 'Invalid Token!';
    exit;
  }
  $_SESSION = [];
  if(isset($_COOKIE[session_name()])) {
    // name, value, time, path
    setcookie(session_name(), '', time() - 86400, '/');
  }

  session_destroy();
}

header('Location: ' . SITE_URL);