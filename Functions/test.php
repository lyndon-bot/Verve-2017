 <?php 
 include 'conn.php';
session_start();
 $User = $_SESSION["user"];


date_default_timezone_set('EST');
$date_l = date('Y-m-d h:i:s');
echo $date_l;
$last_u = mysqli_query($conn, "update user_index set last_u = '$date_l' where username = '$User'");



  ?>