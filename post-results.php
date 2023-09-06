<?php
$pageTitle = "Post results";
include "view-header.php";
?>
    <h1>Post results</h1>
<?php
echo getDisplay();
include "view-footer.php";

function getDisplay() {
    if (isset($_POST['my-name'])) {
  return "<p> the value sent is:</p>" . $_POST['my-name'];
} else {
     return "<p> nothing posted</p>";
}
}


?>
