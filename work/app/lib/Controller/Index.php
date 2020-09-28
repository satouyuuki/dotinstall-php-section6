<?php

namespace MyApp\Controller;

class Index extends \MyApp\Controller {
  public function run() {
    if(!$this->isLoggedIn()) {
      // login
      header('Location: ' . SITE_URL . '/login.php');
      exit;
    }

    // get users info
    // $userModel = new \MyApp\Model\User();
    // $this->setValues('users', $userModel->findAll());

    // get posts info
    $postModel = new \MyApp\Model\Post();
    $this->setValues('posts', $postModel->findAll());

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
      $this->deleteProcess();
    }
  }

  protected function deleteProcess() {
    try {
      $postModel = new \MyApp\Model\Post();
      $postModel->delete([
        'id' => $_POST['id']
      ]);
    } catch (\Exception $e) {
      $e->getMessage();
      return;
    }
    // redirect to home
    header('Location: ' . SITE_URL);
  }
}