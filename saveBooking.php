<?php
require_once 'dbconnection.php';

if(!empty($_POST)){
// echo "<pre>";print_r($_POST);exit;
$first_name= $_POST['first-name'];
$last_name= $_POST['last-name'];
$mob= $_POST['mob-no'];
$room= $_POST['room_id'];
$price= $_POST['price'];
$message= $_POST['message'];
$created_date=date('Y-m-d H:i:s');
$start_date=date('Y-m-d',strtotime($_POST['start_date']));
$end_date=date('Y-m-d',strtotime($_POST['end_date']));
$uniqueNumber = strftime("%Y%m%d%H%M%S");
$no_of_days= $_POST['no_of_days'];

$packagesNames= $_POST['packagesNames'];
$packagesPrices= $_POST['packagesPrices'];
$final_amount= $_POST['final_amount'];

$sql="INSERT INTO bookings(first_name,last_name,"
        . "mob_no,room_id,price,message,start_date,"
        . "end_date,no_of_days,package_names,package_prices,final_amount,status) "
        . "VALUES ('$first_name','$last_name','$mob','$room','$price',"
        . "'$message','$start_date','$end_date','$no_of_days','$packagesNames','$packagesPrices','$final_amount','1')";

  
   if (mysqli_query($conn, $sql)) {
       
      echo "<h2>Thanks ". $first_name." - Your Booing Done successfully </h2>";
} else {
      echo "Error: " . $sql . "<br><br>" . mysqli_error($conn);exit;
}
header("refresh:2 ; url=bookRoom.php");
}
