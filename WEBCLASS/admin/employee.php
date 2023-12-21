<?php 
  //include("header.php");


  //Hamne data base se connect bana liy hai

$insert=false;
if(isset($_POST['name'])){
    //Set connection variable
    



 $server="localhost";
 $username="root";
 $password="";
//create database connection
 $con=mysqli_connect($server,$username,$password);
//check for connection success
 if(!$con){
    die("Connection to this data failed due to". 
    mysqli_connect_error());
 }

// echo "success connecting to the db"; alt+shift phir end par jana hai to end
//collect post variables
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$status=$_POST['status'];
$created_date=$_POST['created_date'];
$created_by=$_POST['created_by'];
$updated_date=$_POST['updated_date'];      //in sab ki validation karni hai
$updated_by=$_POST['updated_by'];
$image=$_POST['image'];


$sql= "INSERT INTO `bmst_small`.`employee` (`name`, `email`, `password`, `status`, `created_date`, `created_by`,`updated_date`,`updated_by`,`image`) 
VALUES ( '$name', '$email', '$password', '$status', '$created_date,'$created_by','current_timestamp()','$updated_by','$image');";
//echo $sql;

//execute the query
if($con->query($sql)==true){
//echo "Successfully inserted";



//flag for successful insertion
$insert=true;
}
else{
    echo "ERROR:$sql <br> $con->error";

}
//close the database connection
$con->close();
}


?>


































<h2>Employee</h2>
<a href="employee.php" target="_blank"></a>
<table border="1" style="width:100%;">
    <thead>
        <tr>
        <th>S.no.</th>
        <th>Title</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    </thead>
    
    <tbody>
    <thead>
        <tr>
        <td>1</td>
        <td>Admin</td>
        <td>This is boss</td>
        <td><button>Edit</button>/<button>Delete</button></td>
    </tr>


    </tbody>
</table>


<?php
//include("footer.php");
?>