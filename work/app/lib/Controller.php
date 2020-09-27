<?php

namespace MyApp;

class Controller {
  private $_errors;

  public function __construct() {
    // エラーオブジェクトの初期化
    $this->_errors = new \stdClass();
  }

  protected function setErrors($key, $error) {
    $this->_errors->$key = $error;
  }

  public function getErrors($key) {
    return isset($this->_errors->$key) ? $this->_errors->$key : '';
  }

  /**
   * !empty()空だったらfalse = 空じゃ無い時はtrue = エラーがある
   */
  protected function hasErrors() {
    return !empty(get_object_vars($this->_errors));
  }

  protected function isLoggedIn() {
    // $_SESSION['me']
    return isset($_SESSION['me']) && !empty($_SESSION['me']);
  }
}