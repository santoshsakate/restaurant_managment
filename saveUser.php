<?php
require_once 'dbconnection.php';

if(!empty($_POST)){ 
$first_name= $_POST['first_name'];
$last_name= $_POST['last_name'];
$address= $_POST['address'];
$city= $_POST['city'];
$country= $_POST['country'];
$postal_code= $_POST['postal_code'];
$username= $_POST['username'];
$password= $_POST['password'];
$role= $_POST['role'];
$email= $_POST['email'];
$other_info= $_POST['other_info'];
$created_date=date('Y-m-d H:i:s');

$sql="INSERT INTO users(first_name,last_name,"
        . "address,city,country,postal_code,username,"
        . "password,email,other_info,role,created_date,status) "
        . "VALUES ('$first_name','$last_name','$address','$city','$country',"
        . "'$postal_code','$username','$password','$email','$other_info','$role','$created_date','1')";

  
   if (mysqli_query($conn, $sql)) {
       session_start();
       $_SESSION["username"] = $username;
       $_SESSION["first_name"] = $first_name;
       $_SESSION["role"] = $role;
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br><br>" . mysqli_error($conn);exit;
}
header("refresh:2 ; url=users.php");
}
