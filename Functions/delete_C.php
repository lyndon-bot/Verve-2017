<?php

include 'conn.php';
session_start();

$CID = $_POST['C_ID'];
mysqli_query($conn, "delete from comment where id_c = '$CID' ");
$_SESSION['Alock2'] = 'S';

if($_SESSION['Permission'] == 'U'){
header('location:../Pages/Profile.php');

}else if ($_SESSION['Permission'] == 'A'){
header('location:../A_Pages/A_dash.php');
}



?>