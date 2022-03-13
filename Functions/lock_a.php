<?php
include "conn.php";
session_start();

$submit = $_POST['submit'];

switch($submit){
	case "1":

			$U_ID = $_POST['U_ID'];
			$LU_ID = mysqli_query($conn, "update user_index set Permission = 'L' where id = '$U_ID'");
			$_SESSION['Alock'] = 'S';
			header('location:../A_Pages/A_dash.php');
		break;

	case "2":

			$U_ID = $_POST['U_ID'];
			$LU_ID = mysqli_query($conn, "update user_index set Permission = 'U' where id = '$U_ID'");
			$_SESSION['Alock'] = 'S';
			header('location:../A_Pages/A_dash.php');
		break;

	case "3":

			$U_ID = $_POST['U_ID'];
			$Perm = $_POST['Perm'];

			switch($Perm){

				case "A":
					
					$P_A = mysqli_query($conn, "update user_index set Permission = 'A' where id = '$U_ID'");
					$_SESSION['Alock'] = 'S';
					header('location:../A_Pages/A_dash.php');
					break;
					

				case "U":
					$P_U = mysqli_query($conn, "update user_index set Permission = 'U' where id = '$U_ID'");
					$_SESSION['Alock'] = 'S';	
					header('location:../A_Pages/A_dash.php');
					break;
				
			}
			
			
		break;

	case "4":

			$V_ID = $_POST['V_ID'];
			$D_V = mysqli_query($conn, "update vehicles set Status = 'D' where V_ID = '$V_ID'");
			$_SESSION['Alock'] = 'S';
			header('location:../A_Pages/A_dash.php');

		break;

	case "5":
			$V_ID = $_POST['V_ID'];
			$D_V = mysqli_query($conn, "update vehicles set Status = 'A' where V_ID = '$V_ID'");
			$_SESSION['Alock'] = 'S';
			header('location:../A_Pages/A_dash.php');

		break;

	case "6":
			$V_ID = $_POST['V_ID'];
			$D_V = mysqli_query($conn, "update vehicles set Status = 'A' where V_ID = '$V_ID'");
			$_SESSION['Alock'] = 'S';
			header('location:../A_Pages/A_dash.php');

		break;

	case "7":
			
			$F_name = $_POST['F_name'];
			$L_name = $_POST['L_name'];
			$Issue = $_POST['Issue'];
			date_default_timezone_set('EST');
			$D_created = date('Y-m-d h:i:s');

			$s_issue = mysqli_query($conn, "insert into help (f_name, l_name, issue, status, d_created) values ('$F_name','$L_name','$Issue','O','$D_created')");
			$_SESSION['Alock'] = 'S';
			header('location:../index.php');

		break;
}

?>