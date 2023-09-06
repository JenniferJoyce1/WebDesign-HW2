<?php
$pageTitle = "Get results";
include "view-header.php";
?>
    <h1>Get results</h1>
<?php
if (isset($_GET['my-name'])) {
  ?>
  <p> the value sent is:</p>
  <?php
  echo $_GET['my-name'];
} else {
  ?>
  <p> nothing posted to get page</p>
  <?php
}
include "view-footer.php";
?>
