<?php 

include 'includes/db.php';

if(isset($_POST['signUp'])){
    $FirstName=$_POST['fName'];
    $LastName=$_POST['lName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);
    $PhoneNumber=$_POST['phone'];
    

     $checkEmail="SELECT * From users where email='$email'";
     $result=$conn->query($checkEmail);
     if($result->num_rows>0){
        echo "Email Address Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO users(FirstName,LastName,email,password,PhoneNumber)
                       VALUES ('$FirstName','$LastName','$email','$password','$PhoneNumber')";
            if($conn->query($insertQuery)==TRUE){
                header("location: crud/display.php");
            }
            else{
                echo "Error:".$conn->error;
            }
     }
   

}

if(isset($_POST['signIn'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password=md5($password) ;
   
   
   $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['email']=$row['email'];
    header("Location: crud/display.php");
    exit();
   }
   else{
    echo "Not Found, Incorrect Email or Password";
   }

}
?>