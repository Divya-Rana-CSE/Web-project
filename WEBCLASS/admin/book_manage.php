<?php 
  include("header.php");
?>
<h2>Book Manage</h2>
<form method="POST"action="category.php" enctype="multipart/form-data"><!--this can hide the info.-->
<input type="text" name="title">
<input type="text" name="description">
<input type="submit">
</form>


<?php
include("footer.php");
?>