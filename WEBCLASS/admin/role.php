<?php 
 include("header.php");
include("../config/config.php");
  

  $message='';
  if(isset($_SESSION['status']) && $_SESSION['status']!=''){
    $messgae="<p>".$_SESSION['status']."</p>";
    unset($_SESSION['status']);}

   
    $rolehtml='';
    $result=$conn->query('select * from rol');
   //$checkResult ke sath kuch or bhi bhi likh sakte ho
    if($result->num_rows>0)//-> this is for variable calling
    {
       //$fresult=$result->fetch_assoc(); 
         
       while($row=$result->fetch_assoc())
       {
        $id=$row['id'];
        $rolehtml.='
        <tr>
        <td>'.$row['id'].'</td>
        <td>'.$row['name'].'</td>
        <td>'.$row['description'].'</td>
        <td><a href="role_manage.php?id='.$id.'">Edit</a>/<button>Delete</button></td>
    </tr>';
}



        //echo $result->num_rows;
        //print_r($fresult);
    }


?>
<h2>Role</h2>
<?php echo $message?>
<a href="role_manage.php">Add New Role</a>
<table border="1" style="width:100%">
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
        <?php 
        
       echo $rolehtml;
        ?>

    </tbody>
</table>


<?php
include("footer.php");
?>