<?php 
  include("header.php");
  include("../config/config.php");
  print_r($_GET);

$title='';
$description='';

  if(isset($_GET['id']) && $_GET['id']>0){
    //edit

    $result=$conn->query("select * from role where id=".$_GET['id']);
    //$checkResult ke sath kuch or bhi bhi likh sakte ho
     if($result->num_rows>0)//
     {
     $row=$result->fetch_assoc();
     print_r($row);




     $title=$row['name'];
     $description=$row['description'];
     }

  }

  //select

  if($conn->connect_error){
    echo"failed";
  }
  else{
    echo"pass";
  }
?>
<h2>Role Manage</h2>
<form method="POST"action="callback/role.php" enctype="multipart/form-data"><!--this can hide the info.-->
<input type="text" name="title" value="enter values<?php echo $title;?>"  required>
<textarea name="description" >enter values<?php echo $title;?></textarea>
<input type="submit">
</form>
<!--values vala pre entry values ko dhikhane ke liye hai-->
<?php
include("footer.php");
?>



<?php 
/*
 include("header.php");
  include("../config/config.php");
$id='';
$title='';
$description='';
if(isset($_GET['id']) && $_GET['id']>0){
$id=$_GET['id'];

$result=$conn->query("select name,description from rol where id=".'id');

//check ki result aaya ya nahi
//echo "num_rows";
if($result->num_rows>0){

  $column=$result->fetch_assoc();
  $title=$column['name'];
  $description=$column['description'];

}


*/
?>