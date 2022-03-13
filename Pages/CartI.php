<?php include "../Functions/header.php"; ?>

	 <div class="col-sm-9 col-sm-offset-2 col-md-10 col-md-offset-2 main">

           <div class="panel panel-default" style="">
              <div class="panel-body">
                  <h1 class="page-header" style="text-align:center;">Check-In Cart</h1>
                  	<div id="form1">
	                   <form class="form-signin" id="form1" method="post" action="../Functions/CartI_F.php">

	                  	<select name="V_ID" class="form-control pull-left" style="width:40%;" required>
	                  		 <option> - Select a Vehicle - </option>

	                  		<?php 

	                  			$User = $_SESSION["user"];

		                        $A = mysqli_query($conn, "select * from Vehicles where Status = 'UA'  && User = '$User'");

		                        $Show_A = mysqli_fetch_all($A, MYSQLI_ASSOC);

		                        foreach($Show_A as $Show_A ) {echo "<option value=" . $Show_A['V_ID'] . ">" . $Show_A['Name'] . "</option>";}
	                      	?>


	                   </select>

	                   <select name="F_level" class="form-control pull-left" style="width:40%;" required> 

	                   		<option> - Select Fuel Level - </option>
	                   		<option value ="F"> F </option>
	                   		<option value ="3/4"> 3/4 </option>
	                   		<option value ="1/2"> 1/2 </option>
	                   		<option value ="1/4"> 1/4 </option>
	                   		<option value ="E"> E </option>


	                   </select>

	                   <button class="btn btn-md btn-info pull-right">Enter</button>

	                  </form>
	              </div>

	              	 <?php

                       if( mysqli_num_rows($A) == '0') {

                              echo "<script> document.getElementById('form1').style.display='none'</script>" . "<h2 style='text-align:center; color:red;'> No Carts Available </h2>";
                             }


                     ?>
              </div>
          </div>
    </div>

 <?php include "../Functions/footer.php"; ?>