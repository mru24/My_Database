<?php

require 'data.php';

/**
 *
 */
class Admin extends Database {

  public function add($name, $pass) {
    $q = "INSERT INTO admin (name, password) VALUES (:name, :password)";
    $this->query($q);
    $this->bind(':name', $name);
    $this->bind(':password', $pass);
    $this->execute();
    echo 'Admin added';
    // header('Location: ../index.php');
  }

  public function AdminLogin($name, $pass) {
    $q = "SELECT * FROM admin WHERE name = :name";
    $this->query($q);
    $this->bind(':name', $name);
    $result = $this->result();
    // print_r($result);
    // echo $result->id;
    if(!$result) {
      echo 'no results';
    } else {
      $hash_pass = password_verify($pass, $result->password);
      if($hash_pass) {
        $_SESSION['ADMIN_LOGGED'] = true;
      }
    }
  }

  public function AdminLogout() {
    unset($_SESSION['ADMIN_LOGGED']);
  }
}
