<?php
	include('../db.php');
	$roomid = $_POST['roomid'];
	$status=$_POST['status'];
	mysqli_query($bd, "UPDATE customer SET status='$status' WHERE id='$roomid'");
	header("location: dashboard.php");
?>