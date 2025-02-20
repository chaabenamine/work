<?php

include('../includes/db.php');
if(isset($_POST['submit'])){
    $FirstName=$_POST['fName'];
    $LastName=$_POST['lName'];
    $email=$_POST['email'];
    $PhoneNumber=$_POST['phone'];
    $checkEmail="SELECT * From users where email='$email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
       echo "Email Address Already Exists !";
    }
    else{
       $insertQuery="INSERT INTO users(FirstName,LastName,email,PhoneNumber)
                      VALUES ('$FirstName','$LastName','$email','$PhoneNumber')";
           if($conn->query($insertQuery)==TRUE){
            header("location: display.php");
           }
           else{
               echo "Error:".$conn->error;
           }
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
    <input type="text" class="form-control" placeholder="FirstName*" id="fName" name="fName" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label >LastName</label>
    <input type="text" class="form-control" placeholder="LastName*" id="lName" name="lName"  autocomplete="off" required>
  </div>
  <div class="form-group">
    <label >E-mail Address</label>
    <input type="text" class="form-control" placeholder="E-mail Address*" id="email" name="email" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label >Contact Number</label>
    <input type="tel" class="form-control" placeholder="Contact Number*" id="phone" name="phone"  autocomplete="off" required>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Add</button>
</form>
    </div>
  </body>
</html>