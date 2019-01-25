<?php

require 'config.php';

abstract class Database {
  // protected $host = 'localhost';
  // protected $user = 'root';
  // protected $pass = '';
  // protected $dbname = 'test';
  protected $pdo;
  protected $stmt;

  public function __construct() {
    $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8';
    try{
      $this->pdo = new PDO($dsn, DB_USER, DB_PASS);
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    }
    catch(PDOExeption $e) {
      exit('DB connection error');
    }
  }

  public function query($query) {
    $this->stmt = $this->pdo->prepare($query);
  }

  // Bind the prepare statement
  public function bind($param, $value, $type = null) {
    if(is_null($type)) {
      switch (true) {
        case is_int($value):
          $type = PDO::PARAM_INT;
          break;
        case is_bool($value):
          $type = PDO::PARAM_BOOL;
          break;
        case is_null($value):
          $type = PDO::PARAM_NULL;
          break;
        default:
          $type = PDO::PARAM_STR;
      }
    }
    $this->stmt->bindValue($param, $value, $type);
  }

  public function execute() {
    $this->stmt->execute();
  }

  public function result() {
    $this->execute();
    return $this->stmt->fetch();
  }

  public function resultSet() {
    $this->execute();
    return $this->stmt->fetchAll();
  }
}

// $db = new Database;
