<?php include "../Functions/header.php"; ?>


  <h1 class="page-header" style="text-align:center;">Profile</h1>


	<div style="margin:auto; width:95%;">
		<div class="panel panel-default pull-left" style="width:50%">
			<h2 style="text-align:center;"> Account </h2>
			<div class="panel-body">

				<div class="table-responsive">

					<table class="table table-hover">

						<th>Username</th>
						<th>Permission</th>
						<th>Login Count</th>
						<th>Last Used</th>

							<tr>
								
									<td><?php echo $_SESSION['user'];?> </td>
							
						<?php 

							$User = $_SESSION["user"];
							$get_UID = mysqli_query($conn, "select * from user_index where username = '$User'");
							$store_UID = mysqli_fetch_all($get_UID, MYSQLI_ASSOC);

							foreach ($store_UID as $store_UID) {
							echo " <td>" . $store_UID['Permission'] . "</td> <td>" . $store_UID['login_count'] ."</td> <td>" . $store_UID['last_u'] ."</td>";
							
								}


						?>
						</tr>
					

					</table>

				</div>
	
	    	</div>

		</div>

			<div class="panel panel-default pull-right" style="width:40%; margin-right:5%;">

				<h2 style="text-align:center;"> Last Cart Used</h2>

				<div class="panel-body" style="">


					<?php 



				switch ($store_UID['last_v']) {

					case 1 :

					echo "<img style='display:block;margin:auto;' src='http://www.clker.com/cliparts/Q/0/I/m/K/k/number-1-in-yellow-md.png' width='100' height='100' class='img-responsive' alt='Generic placeholder thumbnail'>";

						break;


					case 2 :

					echo "<img style='display:block;margin:auto;' src='http://www.clker.com/cliparts/G/V/k/w/7/Z/two-green-square-rounded-edge-hi.png' width='100' height='100' class='img-responsive' alt='Generic placeholder thumbnail'>";


						break;


					case 3 :

					echo "<img style='display:block;margin:auto;' src='http://www.clker.com/cliparts/U/J/0/x/g/L/red-rounded-with-number-3-md.png' width='100' height='100' class='img-responsive' alt='Generic placeholder thumbnail'>";


						break;


					case 4 :

					echo "<img style='display:block;margin:auto;'src='http://cdn.mysitemyway.com/icons-watermarks/flat-circle-white-on-ios-blue-gradient/alphanum/alphanum_lowercase-letter-v/alphanum_lowercase-letter-v_flat-circle-white-on-ios-blue-gradient_512x512.png' width='100' height='100' class='img-responsive' alt='Generic placeholder thumbnail'>";


						break;

					}


					?>

				</div>

			</div>

			

		<div> 

		<div class="panel panel-default pull-left" style="width:95%;" >
					<h2 style="text-align:center;"> SLA </h2>
				<div class="panel-body">
						<p id='error2' style='display: none; text-align: center; color:blue;'>No Results </p>

							<div id="sla" class="table-responsive">

					<table class="table table-hover">

						<th>Queue Number</th>
						<th>User</th>
						<th>Vehicle</th>
						<th>Time Out</th>

				<?php 

					$U_ID = $store_UID['id'];
					$sla = mysqli_query($conn,"select * from queue inner join vehicles on queue.V_id = vehicles.V_ID where queue.U_id = '$U_ID' && queue.SLA = 'T'");
					$storesla = mysqli_fetch_all($sla, MYSQLI_ASSOC);

					 foreach ($storesla as $storesla) {


					 	echo "<tr><td>" . $storesla['Q_id'] . "</td><td>" . $User . "</td><td>" . $storesla['Name'] . "</td><td>" . $storesla['T_out'] . "</td></tr>";	 
					 
					 }

				?>
						</table>
		    		</div>
				</div>
			</div>

				<div class="panel panel-default pull-left" style=" width:95%;" >

					<h2 style="text-align:center;"> My Comments </h2>
						<div class="panel-body">
							<p id='error' style='display: none; text-align: center; color:blue;'>No Results </p>
							 <div id='my_c' class="table-responsive"> 

                      				<table class=" table table-hover"> 

	                      				    <th> 
	                            				User
	                          				</th>

	                        				<th>
	                           				   Comment
	                         				</th>

	                         				<th>
	                           				   Date Created
	                         				</th>

	                         				<th>
	                           				   Remove
	                         				</th>

	                         		 <?php 

	                           			   $select_C = mysqli_query($conn, "select * from comment inner join user_index on user_index.id = comment.id_u where id_u = '$U_ID'");

	                            		  $show_C = mysqli_fetch_all( $select_C, MYSQLI_ASSOC);

	                            		  foreach ( $show_C as $show_C) {
	                            		  		 
	                              		  echo "<tr><td>" . $show_C['username'] . "</td> <td>" . $show_C['comment'] . "</td><td>" . $show_C['D_created']."</td><td><form method='post' action='../Functions/delete_C.php'><button name='C_ID' value=' " . $show_C['id_c'] . "'class='btn btn-danger'> X</button></form></td></tr>";
	                                
	                              		}

	                         		 ?>

	                     		 </table>
	                		</div>

	                		<?php 


	                			if( mysqli_num_rows($select_C) == 0 ) {

	                				echo "<script> 

	                					document.getElementById('my_c').style.display='none';
	                					document.getElementById('error').style.display='block';

	                				</script>";
	                			}

	                			if( mysqli_num_rows($sla) == 0 ) {

	                				echo "<script> 

	                					document.getElementById('sla').style.display='none';
	                					document.getElementById('error2').style.display='block';

	                				</script>";
	                			}



	                		?>
						</div>
				</div>

			<div class="panel panel-default pull-left" style=" width:95%;" >
					<h2 style="text-align:center;"> New Comment </h2>
				<div class="panel-body">
					<form method="post" action="../Functions/Comment.php">

						<textarea name="comment" class="form-control" style="width:100%;"></textarea>

						<button class="form-control btn-warning" style="margin-top:10px;margin-left:20px; width:95%;">Submit</button>

					</form>
			    </div>

			</div>

		

		

		</div>




 <?php include "../Functions/footer.php"; ?>