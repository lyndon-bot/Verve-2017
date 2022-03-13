<?php include "../Functions/header.php"; ?>

<div class="col-sm-9 col-sm-offset-2 col-md-10 col-md-offset-2 main">
<div class="table-responsive">
	<table class="table">

		<?php 

			$User = $_SESSION["user"];
			$get_UID = mysqli_query($conn, "select id from user_index  where username = '$User'");
			$store_UID = mysqli_fetch_assoc($get_UID);
			$U_ID = $store_UID['id'];

			$log = mysqli_query($conn, "select * from queue inner join vehicles on queue.V_id = vehicles.V_ID where queue.U_id = '$U_ID'");

			if($_SESSION['Permission'] == 'A') {

			$log = mysqli_query($conn, 'select * from queue inner join vehicles on queue.V_id = vehicles.V_ID inner join user_index on queue.U_id = user_index.id');
			}

			$show_log = mysqli_fetch_all($log, MYSQLI_ASSOC);

		?>

		<div class="table-responsive"> 
		<table class="table table">

		<th>Queue Number</th>
		<th>User</th>
		<th>Vehicle</th>
		<th>Time In</th>
		<th>Time Out</th>

		<?php
			foreach ($show_log as $show_log) {
				 
				 if ($show_log['status'] == 'C'){

				 	$status = 'success';

				 }else{

				 	$status = 'warning';
				 }

				  if ($show_log['SLA'] == 'F'){

				 	$status = 'success';

				 }else if ($show_log['SLA'] == 'Processing') {

				 	$status = 'warning';
				 }else {
				 	$status = 'danger';
				 }

				 if($show_log['T_in'] == '' ) {

				 	$In = "<p> Not Checked In </p>";  

				 }else {

				 	$In = $show_log['T_in'];

				 }

				 $echo1 = "<tr class='$status'><td>" . $show_log['Q_id'] . "</td><td>" . $User . "</td><td>" . $show_log['Name'] . "</td><td>" . $In . "</td><td>" . $show_log['T_out'] . "</td>";	

				 

				 if($_SESSION['Permission'] == 'A') {

				 	$echo2 = "<tr class='$status'><td>" . $show_log['Q_id'] . "</td><td>" . $show_log['username'] . "</td><td>" . $show_log['Name'] . "</td><td>" . $In . "</td><td>" . $show_log['T_out'] . "</td>"; 
				 	echo $echo2;
				  } else {

				 	echo $echo1;
				 	}
			}

		?>


		</div>
		</table>

		

</div>
</div>
 <?php include "../Functions/footer.php"; ?>