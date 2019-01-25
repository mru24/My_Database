<?php
session_start();

require '../classes/admin.php';

include '../layouts/header.php';

$admin = new Admin;

if(isset($_POST['submit'])) {
  $name = filter_input(INPUT_POST, 'name');
  $pass = filter_input(INPUT_POST, 'pass');
  $admin->AdminLogin($name, $pass);
}
if(isset($_POST['logout'])) {
  $admin->AdminLogout();
}

if(isset($_POST['add'])) {
  $name = filter_input(INPUT_POST, 'name');
  $pass_open = filter_input(INPUT_POST, 'pass');
  $pass = password_hash($pass_open, PASSWORD_DEFAULT);
  $admin->add($name, $pass);
}
?>
<div class="container">
  <div class="adminLogin">
    <h4 class="mt-3">Admin Login</h4>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter name">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="pass" placeholder="Password">
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      <button type="submit" name="logout" class="btn btn-danger float-right">Logout</button>
    </form>
  </div>
<?php if(isset($_SESSION['ADMIN_LOGGED'])) : ?>
<hr>

  <div class="adminAdd">
    <h4 class="mt-3">Add New Admin</h4>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter name">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="pass" placeholder="Password">
      </div>
      <button type="submit" name="add" class="btn btn-primary">Submit</button>
    </form>
  </div>
<?php endif; ?>
</div>

<?php
include '../layouts/footer.php';
?>
