<?php
 include("header.php");
 echo'<pre>';
//  print_r($_GET);
//  print_r($_GET['username']);
//  print_r($_GET['password']);

if(isset($_POST{'username'}) && $_POST['username']!=''){
print_r($_POST);
print_r($_POST['username']);
echo'<br>';
print_r('password',$_POST['password']);
}
 ?>
  <H2>Login </h2>
  <form method="post" action="">
  <input type="text" name="username">
  <input type="password" name="password">
  <input type="submit">
</form>
<?php
include ("footer.php");
?>