<?php 
  include("header.php");

  include("../config/config.php");

  //select

  if($conn->connect_error){
    echo"failed";
  }
  else{
    echo"pass";
  }
?>
<h2>Employee Manage</h2>
<form method="POST"action="category.php" enctype="multipart/form-data"><!--this can hide the info.-->
<input type="text" name="name">
<input type="email" name="email">
<input type="password" name="password">
<input type="submit">
</form>


<?php
include("footer.php");
?>