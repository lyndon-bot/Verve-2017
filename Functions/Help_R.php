<?php

include "conn.php";

$H_ID = $_POST['H_ID'];

	$help_c = mysqli_query($conn, "update help set status = 'R'  where H_id ='$H_ID' ");
	header('location:../A_Pages/A_dash.php');
?>