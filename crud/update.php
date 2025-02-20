<?php

include('../includes/db.php');
$id=$_GET['updateid'];
$sql="Select * from users where Id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
        $FirstName=$row['FirstName'];
        $LastName=$row['LastName'];
        $email=$row['email'];
        $PhoneNumber=$row['PhoneNumber'];
if(isset($_POST['submit'])){
    $FirstName=$_POST['fName'];
    $LastName=$_POST['lName'];
    $email=$_POST['email'];
    $PhoneNumber=$_POST['phone'];
   
       $sql="update users set Id=$id,FirstName='$FirstName',LastName='$LastName',email='$email',PhoneNumber='$PhoneNumber'where Id=$id";
           $result=mysqli_query($conn,$sql);
           if($result){
            header("location: display.php");
           }
           else{
               echo "Error:".$conn->error;
           }
    
}
?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../assets/style2.css" rel="stylesheet" >
    <title>crud operation</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label >FirstName</label>
    <input type="text" class="form-control" placeholder="FirstName*" id="fName" name="fName" autocomplete="off" value=<?php echo $FirstName ?> required>
  </div>
  <div class="form-group">
    <label >LastName</label>
    <input type="text" class="form-control" placeholder="LastName*" id="lName" name="lName"  autocomplete="off"value=<?php echo $LastName ?> required>
  </div>
  <div class="form-group">
    <label >E-mail Address</label>
    <input type="text" class="form-control" placeholder="E-mail Address*" id="email" name="email" autocomplete="off" value=<?php echo $email ?> required>
  </div>
  <div class="form-group">
    <label >Contact Number </label>
    <input type="tel" class="form-control" placeholder="Contact Number*" id="phone" name="phone"  autocomplete="off"value=<?php echo $PhoneNumber ?> required>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">update</button>
</form>
    </div>
  </body>
</html>