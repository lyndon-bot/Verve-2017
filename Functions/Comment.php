<?php 
	include "conn.php";
	session_start();
	$User = $_SESSION["user"];
	$get_UID = mysqli_query($conn, "select * from user_index where username = '$User'");
	$store_UID = mysqli_fetch_assoc($get_UID);

	$user_id = $store_UID['id'];
	$comment = $_POST['comment'];
	date_default_timezone_set('EST');
	$D_created = date('Y-m-d');
	$Time_c = date('h:i:s');
	$submit_c = mysqli_query($conn, "insert into comment (id_u,comment,D_created,Time_c) values ('$user_id','$comment','$D_created', '$Time_c')");
	header('location:../Pages/Profile.php');
	
?>