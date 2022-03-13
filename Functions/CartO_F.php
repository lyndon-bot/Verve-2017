<?php 
include "conn.php";

session_start();

$V_ID = $_POST["V_ID"];
$User = $_SESSION["user"];

$get_UID = mysqli_query($conn, "select id from user_index where username = '$User'");
$store_UID = mysqli_fetch_assoc($get_UID);
$U_ID = $store_UID['id'];
$Status = 'UA';
date_default_timezone_set('EST');
$T_out = date("Y-m-d h:i:s");
$T_out2 = date("h:i:s");
$D_out = date("Y-m-d");
$SLA = 'Processing';

$Queue_C = mysqli_query($conn, "insert into queue (U_id,V_ID,status,T_out,D_out,SLA) values ('$U_ID','$V_ID','O','$T_out','$D_out','$SLA') ");
$Vehicles = mysqli_query($conn, "update Vehicles set Status = '$Status', User = '$User', U_id = '$U_ID',Time_O ='$T_out2' where V_ID = '$V_ID' ");
$_SESSION['V_OUT'] = 'OUT';
header('location:../Pages/dash.php');

?>