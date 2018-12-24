<?php
require_once 'dbconnection.php';
if(!empty($_POST))
{
	$id = $_POST['id'];
	$room_name = $_POST['room_name'];
	$room_type = $_POST['room_type'];
	$details = $_POST['details'];
	$sharing = $_POST['sharing'];
	$charges = $_POST['charges'];
	if($id==0)
	{
		
	$sql = "INSERT INTO rooms(rname, rtype, rdetails, sharing, charges ) ";
	$sql .= "VALUES ('" . $room_name . "', '". $room_type . "', '" . $details . "', '" . $sharing . "', '" . $charges . "')";
	mysqli_query($conn, $sql);
	echo "New Record Created Succefully";
	
	}
	else
	{
		
		$sql = "UPDATE rooms SET rname = '" . $room_name . "', ";
			$sql .= "rtype = '" . $room_type . "', ";
			$sql .= "rdetails = '" . $details . "', ";
			$sql .= "sharing = '" . $sharing . "', ";
			$sql .= "charges = '" . $charges . "' ";
			$sql .= "WHERE id = " . $id;
			mysqli_query($conn, $sql);
			echo " Record updated Succefully";
			
	}
	/*if($_FILES["imgupload"]["tmp_name"] !== "")
		{
			$target_dir = "roomsimages/" .'image_' . $room_name . ".jpg";
			if(file_exists($target_dir))
				unlink($target_dir);
			move_uploaded_file($_FILES["imgupload"]["tmp_name"], $target_dir);
		}		
	*/
}
header("refresh:2 ; url=rooms.php");


?>