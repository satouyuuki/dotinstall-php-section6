<?php

namespace MyApp\Model;

class Post extends \MyApp\Model {
  public function create($values) {
    $stmt = $this->db->prepare("insert into posts (user_id, text, created, modified) values(:user_id, :text, now(), now())");
    $res = $stmt->execute([
      ':user_id' => $values['user_id'],
      ':text' => $values['text'],
    ]);
    if($res === false) {
      throw new \Exception();
    }
  }

  public function delete($values) {
    $stmt = $this->db->prepare("delete from posts where id = :id");
    $res = $stmt->execute([
      ':id' => $values['id'],
    ]);
    if($res === false) {
      throw new \Exception();
    }
  }

  public function findAll() {
    $stmt = $this->db->query("
      select p.*, u.email from posts as p 
      INNER JOIN users as u 
      on p.user_id = u.id 
      order by p.id
    ");
    $stmt->setFetchMode(\PDO::FETCH_CLASS, 'stdClass');
    return $stmt->fetchAll();
  }
}