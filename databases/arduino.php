<?php
session_start();

define('TITLE', 'Arduino Database');

require '../classes/data.php';

include '../layouts/header.php';

?>

<div class="jumbotron">
  <h1 class="display-4">Arduino Database</h1>
</div>

<div class="container">
<?php if(isset($_SESSION['ADMIN_LOGGED'])): ?>
  <a href="add.php?cat=arduino" class="btn btn-primary m-4">Add</a>
<?php endif; ?>
</div>

<?php
include '../layouts/footer.php';
?>
