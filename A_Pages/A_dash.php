<?php

include '../Pages/dash.php';


?>

 <div id='pagesec' class='' style='margin-left:20px; margin-right:20px;'>

	<div class="panel panel-default"> 
		<div class="panel-body"> 
			<h2 class='page-header' style='text-align: center;'>SLA</h2>
				<p id="HTTSA"  style="text-align:center; display:none; color:green;"> All SLA's have been resolved </p>
				<table id="SLATA" class="table table-hover">

						<th>Queue Number</th>
						<th>User</th>
						<th>Vehicle</th>
						<th>Time Out</th>
						<th>Delete</th>

				<?php 

				
					$sla = mysqli_query($conn,"select * from queue inner join vehicles on queue.V_id = vehicles.V_ID inner join user_index on queue.U_id = user_index.id where queue.SLA = 'T'");
					$storesla = mysqli_fetch_all($sla, MYSQLI_ASSOC);

					 foreach ($storesla as $storesla) {


					 	echo "<tr class='warning'><td>" . $storesla['Q_id'] . "</td><td>" .$storesla['username']. "</td><td>" . $storesla['Name'] . "</td><td>" . $storesla['T_out'] . "</td><td><form method='post' action='../Functions/delete_SLA.php'><button name='Q_id' value='" . $storesla['Q_id'] ."' class='btn btn-danger'>X</button></form></td></tr>";	 
					 
					 }

				?>
			</table>
		</div>
	</div>
		<?php

			  if( mysqli_num_rows($sla) == 0 ) {

			          echo "<script> 

			            document.getElementById('SLATA').style.display='none';
			            document.getElementById('HTTSA').style.display='block';

			                </script>"; }
			     ?>


		<div class="panel panel-default"> 
		<div class="panel-body"> 
			<h2 class='page-header' style='text-align: center;'>Resolved SLA</h2>
				<p id="HTTS"  style="text-align:center; display:none; color:green;"> No Resolved SLA </p>
				<table id="SLAT" class="table table-hover">

						<th>Queue Number</th>
						<th>User</th>
						<th>Vehicle</th>
						<th>Time Out</th>

				<?php 

				
					$sla = mysqli_query($conn,"select * from queue inner join vehicles on queue.V_id = vehicles.V_ID inner join user_index on queue.U_id = user_index.id where queue.SLA = 'R'");
					$storesla = mysqli_fetch_all($sla, MYSQLI_ASSOC);

					 foreach ($storesla as $storesla) {


					 	echo "<tr class='info'><td>" . $storesla['Q_id'] . "</td><td>" .$storesla['username']. "</td><td>" . $storesla['Name'] . "</td><td>" . $storesla['T_out'] . "</td></tr>";	 
					 
					 }

				?>
			</table>
		</div>
	</div>
	
	<?php
			  if( mysqli_num_rows($sla) == 0 ) {

			          echo "<script> 

			            document.getElementById('SLAT').style.display='none';
			            document.getElementById('HTTS').style.display='block';

			                </script>"; }
			     ?>

	<div class="panel panel-default"> 
		<div class="panel-body"> 
			<h2 class='page-header' style='text-align: center;'>Help Desk</h2>
				<p id="HTT"  style="text-align:center; display:none; color:green;"> No help has been requested </p>
				<div id="HT" class="table-responsive">

				<table class="table table-hover">
						<th>H_ID</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Date Created</th>
						<th>Issue</th>
						<th>Resolved</th>


				<?php 

				
					$help = mysqli_query($conn,"select * from help where status = 'O' ");
					$storehelp = mysqli_fetch_all($help, MYSQLI_ASSOC);

					 foreach ($storehelp as $storehelp) {


					 	echo "<tr class='danger'><td>" . $storehelp['H_id'] . "</td><td>" .$storehelp['f_name']. "</td><td>" . $storehelp['l_name'] . "</td><td>" . $storehelp['d_created'] . "</td><td>" . $storehelp['issue'] . "</td><td><form method='post' action='../Functions/Help_R.php'><button name='H_ID' value='" . $storehelp['H_id'] ."' class='btn btn-primary'>O</button></form></td></tr>";	 
					 
					 }

				?>
				</table>

				</div>

		</div>
	</div>
				<?php
			  if( mysqli_num_rows($help) == 0 ) {

			          echo "<script> 

			            document.getElementById('HT').style.display='none';
			            document.getElementById('HTT').style.display='block';

			                </script>"; }
			     ?>

	<div id="Adminf" class="panel panel-default"> 
		<div class="panel-body"> 
			<h2 class='page-header' style='text-align: center;'>Admin Functions</h2>
				<button class='form-control btn btn-primary' href='#MA' data-toggle="collapse" style='margin-bottom:5px;'>Manage Accounts</button>
				<button class=' form-control btn btn-primary' href='#MV' data-toggle="collapse" >Manage Vehicles</button>

					<div id='MA' class="collapse" style="margin-top:20px;"> 
						<div class="panel panel-default"> 
							<div class="panel-body"> 
								<h2 class='page-header' style='text-align: center;'>Manage Accounts</h2>

									<div class="" style="padding-bottom:20px;">
									<h3 style="text-align:center;">Lock User Account</h3>
									<form method="post" action="../Functions/lock_a.php">

									 	<?php 
									 		$Atable = mysqli_query($conn, "select * from user_index");
									 		$Satable = mysqli_fetch_all($Atable, MYSQLI_ASSOC);

									 		$echot = "<select name='U_ID' class='form-control pull-left' style='width:70%;margin-left:0px;'><option>-- Choose an account --</option>";
									 		foreach($Satable as $Satable){

									 		$echot.="<option value='" . $Satable['id'] ."'>" . $Satable['username'] . "</option>";
									 		}

									 		$echot.= "</select>";

									 		echo $echot;

									 	?>
											<button name= "submit" value="1" class="btn-danger pull-right form-control" style ="width:20%; margin-left:20px;">Lock</button>

									</form>
									</div>
									
									<div style="padding-bottom:20px;">
									<h3 style="text-align:center;">Unlock User Account</h3>

									<form method="post" action="../Functions/lock_a.php">

									 	<?php 
									 		$Atabl = mysqli_query($conn, "select * from user_index where Permission ='L'");
									 		$Satabl = mysqli_fetch_all($Atabl, MYSQLI_ASSOC);

									 		$echota = "<select name='U_ID' class='form-control pull-left' style='width:70%;margin-left:0px;'><option>-- Choose an account --</option>";
									 		foreach($Satabl as $Satabl){

									 		$echota.="<option value='" . $Satabl['id'] ."'>" . $Satabl['username'] . "</option>";
									 		}

									 		$echota.= "</select>";

									 		echo $echota;

									 	?>
											<button name= "submit" value="2" class="btn-success pull-right form-control" style ="width:20%; margin-left:20px;">Unlock</button>

									</form>
									</div>

									<div style="margin-bottom:20px;">
									<h3 style="text-align:center;">Change User Permissions</h3>

									<form method="post" action="../Functions/lock_a.php">

									 	<?php 
									 		$Atab = mysqli_query($conn, "select * from user_index");
									 		$Satab = mysqli_fetch_all($Atab, MYSQLI_ASSOC);

									 		$echotab = "<select name='U_ID' class='form-control pull-left' style='width:50%;margin-left:0px;'><option>-- Choose an account --</option>";
									 		foreach($Satab as $Satab){

									 		$echotab.="<option value='" . $Satab['id'] ."'>" . $Satab['username'] . "</option>";
									 		}

									 		$echotab.= "</select>";

									 		echo $echotab;

									 	?>
									 		<select name="Perm" class="form-control pull-left" style="width:20%;">
									 			<option value='A'>Admin</option>
									 			<option value='U'>User</option>
									 		</select>
											<button name= "submit" value="3" class="btn-primary pull-right form-control" style ="width:20%; margin-left:20px;">Change</button>

									</form>
									</div>
							</div>
						</div>
					</div>

					<div id='MV' class="collapse" style="margin-top:20px;"> 
						<div class="panel panel-default"> 
							<div class="panel-body"> 
								<h2 class='page-header' style='text-align: center;'>Manage Vehicles</h2>
									<div style="padding-bottom:20px; margin-bottom:20px;">
									<h3 style="text-align:center;">Disable Vehicles</h3>

									<form method="post" action="../Functions/lock_a.php">
									<?php

									$test = mysqli_query($conn, "select * from vehicles");
									$test_s = mysqli_fetch_all($test, MYSQLI_ASSOC);

									$test_sh = "<select name='V_ID' class='form-control pull-left' style='width:70%;margin-left:0px;'><option>-- Choose a vehicle --</option>";

									foreach ($test_s as $test_s){

										$test_sh.= "<option value='" . $test_s['V_ID'] . "'>" . $test_s['Name'] . "</option>";
									

									}

									$test_sh.= "</select>";

									echo $test_sh;

									?>

									<button name= "submit" value="4" class="btn-danger pull-right form-control" style ="width:20%; margin-left:20px;">Disable</button>

									</form>
									</div>

									<div style="padding-bottom:20px;">
										<h3 style="text-align:center;">Enable Vehicles</h3>

									<form method="post" action="../Functions/lock_a.php">
									<?php

									$tes = mysqli_query($conn, "select * from vehicles where Status = 'D'");
									$test = mysqli_fetch_all($tes, MYSQLI_ASSOC);

									$test1 = "<select name='V_ID' class='form-control pull-left' style='width:70%;margin-left:0px;'><option>-- Choose a vehicle --</option>";

									foreach ($test as $test){

										$test1.= "<option value='" . $test['V_ID'] . "'>" . $test['Name'] . "</option>";
									

									}

									$test1.= "</select>";

									echo $test1;

									?>

									<button name= "submit" value="5" class="btn-success pull-right form-control" style ="width:20%; margin-left:20px;">Enable</button>

									</form>
									</div>


									<div style="padding-bottom:20px; display:none;">
										<h3 style="text-align:center;">Force Check-In</h3>

									<form method="post" action="../Functions/lock_a.php">
									<?php

									$tes = mysqli_query($conn, "select * from vehicles where Status = 'UA'");
									$test = mysqli_fetch_all($tes, MYSQLI_ASSOC);

									$test1 = "<select name='V_ID' class='form-control pull-left' style='width:70%;margin-left:0px;'><option>-- Choose a vehicle --</option>";

									foreach ($test as $test){

										$test1.= "<option value='" . $test['V_ID'] . "'>" . $test['Name'] . "</option>";
									

									}

									$test1.= "</select>";

									echo $test1;

									?>

									<button name= "submit" value="6" class="btn-primary pull-right form-control" style ="width:20%; margin-left:20px;">Enable</button>

									</form>
									</div>
							</div>
						</div>
					</div>

				
		</div>
	</div>
	

</div>

<?php 

include "../Functions/footer.php";	

?>