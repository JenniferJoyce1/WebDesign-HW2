<?php
$pageTitle = "Post results";
include "view-header.php";
?>
    <h1>Post results</h1>
<?php
if (isset($_POST['my-name'])) {
  ?>
  <p> the value sent is:</p>
  <?php
  echo $_POST['my-name'];
} else {
  ?>
  <p> nothing posted</p>
  <?php
}
include "view-footer.php";
?>
