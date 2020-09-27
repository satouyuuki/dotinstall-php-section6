<?php

namespace MyApp\Controller;

class Signup extends \MyApp\Controller {
  public function run() {
    if($this->isLoggedIn()) {
      // login
      header('Location: ' . SITE_URL);
      exit;
    }

    // get users info
    if($_SERVER['REQUEST_METHOD' === 'POST']) {
      $this->postProcess();
    }
  }

  protected function postProcess() {
    // validate
    try {
      $this->_validate();
    } catch (\MyApp\Exception\InvalidEmail $e) {

    } catch (\MyApp\Exception\InvalidPassword $e) {

    }
    // create user

    // redirect to login
  }

  private function _validate() {
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      throw new \MyApp\Exception\InvalidEmail();
    }
    if(!preg_match('/\A[a-zA-Z0-9]+\z/', $_POST['password'])) {
      throw new \MyApp\Exception\InvalidPassword();
    }
  }
}