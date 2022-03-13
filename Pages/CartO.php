<?php include "../Functions/header.php"; ?>

	 <div class="col-sm-9 col-sm-offset-2 col-md-10 col-md-offset-2 main">
 		  <div class="panel panel-default" style="">
              <div class="panel-body">
                  <h1 class="page-header" style="text-align:center;">Checkout Cart</h1>
                    <p id="form2" style="color:red; text-align:center;"> </p>
                   <div id='form1'>
                    <form class="form-signin" id='form1' method="post" action="../Functions/CartO_F.php">

                    	<select name="V_ID" class="form-control pull-left" style="width:80%;">
                          <option> - Select a Vehicle - </option>
                        <?php 

                            $A = mysqli_query($conn, "select * from Vehicles where Status = 'A'");
                            
                            $Show_A = mysqli_fetch_all($A, MYSQLI_ASSOC);

                            foreach($Show_A as $Show_A ) {echo "<option value=" . $Show_A['V_ID'] . ">" . $Show_A['Name'] . "</option>";}
                          ?>

                      </select>

                    	<button class="btn btn-md btn-info pull-right">Enter</button>
                    </form>



                  </div>
                   <?php

                       if( mysqli_num_rows($A) == '0') {

                              echo "<script> document.getElementById('form1').style.display='none'</script>" . "<h2 style='text-align:center; color:red;'> No Carts Available </h2>";
                             }

                       $User = $_SESSION["user"];
                       $get_UID = mysqli_query($conn, "select id from user_index where username = '$User'");
                       $store_UID = mysqli_fetch_assoc($get_UID);
                       $U_ID = $store_UID['id'];
                       $check = mysqli_query($conn, "select * from queue where status = 'O' && U_id = '$U_ID' ");

                       if(mysqli_num_rows($check) == '1') {

                             echo "<script> document.getElementById('form1').style.display='none'</script>" . "<h2 style='text-align:center; color:red;'> Please Return Your Vehicle</h2>";
                       }

                     ?>

                     <script>
  

                      var d = new Date();
                      var n = d.getHours();

                      console.log(d);
                      
                     if (n <= 6) {

                        document.getElementById('form1').style.display='none';
                        document.getElementById('form2').innerHTML= 'Its too early to checkout a Vehicle';
                      }

                     if (n >= 23){ 

                      document.getElementById('form1').style.display='none';
                      document.getElementById('form2').innerHTML= "It is too late to checkout a Vehicle";
                     }

                     </script>

              </div>
          </div>
    </div>

 <?php include "../Functions/footer.php"; ?>