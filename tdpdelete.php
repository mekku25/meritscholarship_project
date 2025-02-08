<?php

include "conn.php";

if(isset($_GET['deleteid'])){
	$id=$_GET['deleteid'];

	$sql="DELETE FROM `tdpapplication` WHERE id = $id";
	$result=mysqli_query($conn,$sql);
	if($result){
		header('location: tdpscholarshiprecord.php');
	}else{
		die(mysqli_error($conn));
	}

}

?>
