<?php

define("ROOT_PATH", "/");
define("ROOT_URL", "http://localhost/Database/");

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>
      <?php if(defined('TITLE')) {
        echo TITLE;
      } else {
        echo 'My Database | WW Project Studio';
      }?>
    </title>

    <!-- STYLES -->
      <!-- BOOTSTRAP -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <!-- CUSTOM STYLES -->
      <link rel="stylesheet" href="<?php echo ROOT_URL; ?>css/style.css">

  </head>
  <body>

  <?php
    include 'navbar.php';
  ?>
