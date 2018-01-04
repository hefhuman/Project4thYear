<?php
class User {
  private $db;

  public function __construct(){
    $this->db = new Database;
  }

  //Login user
  public function login($username, $password){
    $this->db->query('SELECT * FROM users WHERE username = :username AND password = :password');
    $this->db->bind(':username', $username);
    $this->db->bind(':password', $password);

    $row = $this->db->single();

    $val = array();

    if($this->db->rowCount() > 0){
      return $row;
      // echo '<script> alert("' . $val->password . '")</script>';
    } else {
      return false;
      // echo '<script> alert("' . $val->password . '")</script>';
    }
  }
}
 ?>
