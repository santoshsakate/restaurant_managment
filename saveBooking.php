<?php
require_once 'dbconnection.php';

if(!empty($_POST)){ 
$first_name= $_POST['first-name'];
$last_name= $_POST['last-name'];
$mob= $_POST['mob-no'];
$room= $_POST['room'];
$price= $_POST['price'];
$message= $_POST['message'];
$created_date=date('Y-m-d H:i:s');
$start_date=date('Y-m-d H:i:s');
$end_date=date('Y-m-d H:i:s');

$sql="INSERT INTO bookings(first_name,last_name,"
        . "mob_no,room_no,price,message,start_date,"
        . "end_date,status) "
        . "VALUES ('$first_name','$last_name','$mob','$room','$price',"
        . "'$message','$start_date','$end_date','1')";

  
   if (mysqli_query($conn, $sql)) {
       
      echo "Your Booing Done successfully";
} else {
      echo "Error: " . $sql . "<br><br>" . mysqli_error($conn);exit;
}
header("refresh:2 ; url=bookRoom.php");
}
