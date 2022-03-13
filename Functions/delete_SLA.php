<?php

include 'conn.php';
session_start();

$Q_id = $_POST['Q_id'];

$delete_SLA = mysqli_query($conn, "update queue set SLA = 'R' , status = 'C' where Q_id = $Q_id");
$_SESSION['Alock2'] = 'S';
header('location:../A_Pages/A_dash.php');


?>