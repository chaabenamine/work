<?php
include('../includes/db.php');
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from users where Id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location: display.php");
    }else{
        die(mysqli_error($conn));

    }
}

?>