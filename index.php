<?php

require 'classes/data.php';

define('TITLE', 'My Database');

include 'layouts/header.php';

?>
<div class="jumbotron">
  <h1 class="display-4">DATABASE</h1>
</div>

<div class="container">
  <h2>Categories</h2>
  <ul>
    <li>
      <a href="databases/computers.php">Computers</a>
    </li>
    <li>
      <a href="databases/arduino.php">Arduino</a>
    </li>
    <li>
      <a href="databases/el_components.php">Electronic components</a>
    </li>
  </ul>

  <a href="includes/admin.php">Admin Dashboard</a>

</div>

<?php

include 'layouts/footer.php';
?>
