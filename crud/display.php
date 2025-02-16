<?php

include('../includes/db.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>crud opération</title>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">add user</a></button>
        <button class="btn btn-primary my-5"><a href="../logout.php" class="text-light"> logout</a></button>
        <table class="table table-hover">        <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">E-mail address</th>
      <th scope="col">Contact number</th>
      <th scope="col">Operations</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $sql="Select * from users";
    $result=mysqli_query($conn,$sql);
    if($result){
    
       while($row=mysqli_fetch_assoc($result)){
        $id=$row['Id'];
        $FirstName=$row['FirstName'];
        $LastName=$row['LastName'];
        $email=$row['email'];
        $PhoneNumber=$row['PhoneNumber'];
        echo' <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$FirstName.'</td>
      <td>'.$LastName.'</td>
      <td>'.$email.'</td>
      <td>'.$PhoneNumber.'</td>
      <td>
        <button class="btn btn-primary"> <a href="update.php?updateid='.$id.'" class="text-light">update</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'"class="text-light">delete</a></button>
    </td>
    </tr> '; 

       }
    }



    ?>
    
    
  </tbody>
</table>
    </div>
    
</body>
</html>