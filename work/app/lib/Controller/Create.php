<?php

namespace MyApp\Controller;

class Create extends \MyApp\Controller {
  public function run() {
    if(!$this->isLoggedIn()) {
      // login
      header('Location: ' . SITE_URL . '/login.php');
      exit;
    }

    // get users info
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
      $this->postProcess();
    }
  }

  protected function postProcess() {
    // validate
    try {
      $this->_validate();
    } catch (\MyApp\Exception\EmptyPost $e) {
      $this->setErrors('text', $e->getMessage());
    }

    // echo "success";
    // exit;

    $this->setValues('text', $_POST['text']);

    if($this->hasError()) {
      return;
    } else {
      // create user
      echo 'hogehgoe';
      var_dump($this->me()->id);
      try {
        $postModel = new \MyApp\Model\Post();
        $postModel->create([
          'text' => $_POST['text'],
          'user_id' => $this->me()->id
        ]);
      } catch (\Exception $e) {
        $e->getMessage();
        return;
      }

      // redirect to home
      header('Location: ' . SITE_URL);
    }

  }

  private function _validate() {
    if(!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
      echo 'Invalid Token!';
      exit;
    }
    if(!isset($_POST['text'])) {
      echo 'Invalid Form';
    }
    if($_POST['text'] === '') {
      throw new \MyApp\Exception\EmptyPost();
    }
  }
}