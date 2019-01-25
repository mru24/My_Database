<?php
session_start();

include '../layouts/header.php';

if(isset($_GET['cat'])) {
  $category = $_GET['cat'];
}

?>
<div class="container">
  <h3 class="my-3">Add to <u><?php echo $category; ?></u> database.</h3>
</div>




<?php
include '../layouts/footer.php';
?>
