<?php 
include "conn.php";

session_start();

$V_ID = $_POST["V_ID"];
$User = $_SESSION["user"];

$get_UID = mysqli_query($conn, "select id from user_index where username = '$User'");
$store_UID = mysqli_fetch_assoc($get_UID);
$U_ID = $store_UID['id'];
$Status = 'A';
$F_level = $_POST['F_level'];
date_default_timezone_set('EST');
$T_in = date("Y-m-d h:i:s");
$T_in2 = date("h:i:s");
$D_in = date('Y-m-d');

$Queue_C = mysqli_query($conn, "update queue set T_in = '$T_in', status = 'C', D_in = '$D_in', SLA = 'F' where U_id = '$U_ID' && V_ID = '$V_ID' && status = 'O' && SLA = 'Processing'");
$Queue_CSLA = mysqli_query($conn, "update queue set T_in = '$T_in', status = 'C', D_in = '$D_in', SLA = 'T' where U_id = '$U_ID' && V_ID = '$V_ID' && status = 'O' && SLA = 'T'");
$Vehicles = mysqli_query($conn, "update Vehicles set Status = '$Status', F_level = '$F_level', User = 'None', U_id = '0',Time_I ='$T_in2' where V_ID = '$V_ID' ");
$user = mysqli_query($conn, "update user_index set last_V = '$V_ID' where id = '$U_ID'");
$_SESSION['V_IN'] = 'IN';
header('location:../Pages/dash.php');

?>