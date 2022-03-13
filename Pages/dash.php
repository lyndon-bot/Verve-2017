<?php include "../Functions/header.php"; ?>

       

          <!--  <script type="text/javascript">

                setTimeout(function(){
                  location = ''
                 },200000)

            </script> -->

        <?php 
          if (basename($_SERVER['PHP_SELF']) !== 'A_dash.php'){

            echo "
            <div id='pagesec' class='col-sm-9 col-sm-offset-2 col-md-10 col-md-offset-2 main'>";
          } else {

             echo "
            <div id='pagesec' class='' style='margin-left:20px; margin-right:20px;'>";
          }

            if (basename($_SERVER['PHP_SELF']) !== 'A_dash.php'){
              echo "<h1 class='page-header'>Dashboard</h1>"; 
            }else{
              echo "<h1 class='page-header' style='text-align:center;'>Admin Hub</h1>";
            }

          ?>
          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="http://www.clker.com/cliparts/Q/0/I/m/K/k/number-1-in-yellow-md.png" width="100" height="100" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Cart 1</h4>
              <span class="text-muted">Yellow Cart</span>
                    <div class="progress" style="height:10px;">
                    <div id ="Bar1" class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%;"> 
                    </div>

                      <?php 

                          $f_level1 = mysqli_query($conn, "select F_level from vehicles where V_ID = '1'");
                          $store_flevel1 = mysqli_fetch_assoc($f_level1);
                          $f_level1 = $store_flevel1['F_level'];

                          switch($f_level1){

                            case 'F' : 
                                  echo "<script> document.getElementById('Bar1').style.width='100%'; document.getElementById('Bar1').className='progress-bar progress-bar-success progress-bar-striped active';</script>";
                                  break;

                            case '3/4' : 
                                  echo "<script> document.getElementById('Bar1').style.width='75%'; document.getElementById('Bar1').className='progress-bar progress-bar-striped active';</script>";
                                  break;

                            case '1/2' : 
                                  echo "<script> document.getElementById('Bar1').style.width='50%'; document.getElementById('Bar1').className='progress-bar progress-bar-warning  progress-bar-striped active';</script>";
                                  break;

                            case '1/4' : 
                                  echo "<script> document.getElementById('Bar1').style.width='25%%'; document.getElementById('Bar1').className='progress-bar progress-bar-danger progress-bar-striped active';</script>";
                                  break;

                            case 'E' :
                                  echo "<script> document.getElementById('Bar1').style.width='1%'; document.getElementById('Bar1').className='progress-bar progress-bar-danger progress-bar-striped active';</script>";
                                  break; 

                          }


                      ?>
                    </div> 
                    
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="http://www.clker.com/cliparts/G/V/k/w/7/Z/two-green-square-rounded-edge-hi.png" width="100" height="100" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Cart 2</h4>
              <span class="text-muted">Green Cart</span>
                    <div class="progress" style="height:10px;">
                    <div id ="Bar2" class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%;"> 
                    </div>

                      <?php 

                          $f_level2 = mysqli_query($conn, "select F_level from vehicles where V_ID = '2'");
                          $store_flevel2 = mysqli_fetch_assoc($f_level2);
                          $f_level2 = $store_flevel2['F_level'];

                          switch($f_level2){

                            case 'F' : 
                                  echo "<script> document.getElementById('Bar2').style.width='100%'; document.getElementById('Bar2').className='progress-bar progress-bar-success progress-bar-striped active';</script>";
                                  break;

                            case '3/4' : 
                                  echo "<script> document.getElementById('Bar2').style.width='75%'; document.getElementById('Bar2').className='progress-bar progress-bar-striped active';</script>";
                                  break;

                            case '1/2' : 
                                  echo "<script> document.getElementById('Bar2').style.width='50%'; document.getElementById('Bar2').className='progress-bar progress-bar-warning  progress-bar-striped active';</script>";
                                  break;

                            case '1/4' : 
                                  echo "<script> document.getElementById('Bar2').style.width='25%%'; document.getElementById('Bar2').className='progress-bar progress-bar-danger progress-bar-striped active';</script>";
                                  break;

                            case 'E' :
                                  echo "<script> document.getElementById('Bar2').style.width='1%'; document.getElementById('Bar2').className='progress-bar progress-bar-danger progress-bar-striped active';</script>";
                                  break; 

                          }


                      ?>
                    </div> 
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="http://www.clker.com/cliparts/U/J/0/x/g/L/red-rounded-with-number-3-md.png" width="100" height="100" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Cart 3</h4>
              <span class="text-muted">Red Cart</span>
                     <div class="progress" style="height:10px;">
                    <div id ="Bar3" class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%;"> 
                    </div>

                      <?php 

                          $f_level3 = mysqli_query($conn, "select F_level from vehicles where V_ID = '3'");
                          $store_flevel3 = mysqli_fetch_assoc($f_level3);
                          $f_level3 = $store_flevel3['F_level'];

                          switch($f_level3){

                            case 'F' : 
                                  echo "<script> document.getElementById('Bar3').style.width='100%'; document.getElementById('Bar3').className='progress-bar progress-bar-success progress-bar-striped active';</script>";
                                  break;

                            case '3/4' : 
                                  echo "<script> document.getElementById('Bar3').style.width='75%'; document.getElementById('Bar3').className='progress-bar progress-bar-striped active';</script>";
                                  break;

                            case '1/2' : 
                                  echo "<script> document.getElementById('Bar3').style.width='50%'; document.getElementById('Bar3').className='progress-bar progress-bar-warning  progress-bar-striped active';</script>";
                                  break;

                            case '1/4' : 
                                  echo "<script> document.getElementById('Bar3').style.width='25%%'; document.getElementById('Bar3').className='progress-bar progress-bar-danger progress-bar-striped active';</script>";
                                  break;

                            case 'E' :
                                  echo "<script> document.getElementById('Bar3').style.width='1%'; document.getElementById('Bar3').className='progress-bar progress-bar-danger progress-bar-striped active';</script>";
                                  break; 

                          }


                      ?>
                    </div> 
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="http://cdn.mysitemyway.com/icons-watermarks/flat-circle-white-on-ios-blue-gradient/alphanum/alphanum_lowercase-letter-v/alphanum_lowercase-letter-v_flat-circle-white-on-ios-blue-gradient_512x512.png" width="100" height="100" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Van</h4>
              <span class="text-muted">White Van</span>
                    <div class="progress" style="height:10px;">
                    <div id ="Bar4" class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%;"> 
                    </div>

                      <?php 

                          $f_level4 = mysqli_query($conn, "select F_level from vehicles where V_ID = '4'");
                          $store_flevel4 = mysqli_fetch_assoc($f_level4);
                          $f_level4 = $store_flevel4['F_level'];

                          switch($f_level4){

                            case 'F' : 
                                  echo "<script> document.getElementById('Bar4').style.width='100%'; document.getElementById('Bar4').className='progress-bar progress-bar-success progress-bar-striped active';</script>";
                                  break;

                            case '3/4' : 
                                  echo "<script> document.getElementById('Bar4').style.width='75%'; document.getElementById('Bar4').className='progress-bar progress-bar-striped active';</script>";
                                  break;

                            case '1/2' : 
                                  echo "<script> document.getElementById('Bar4').style.width='50%'; document.getElementById('Bar4').className='progress-bar progress-bar-warning  progress-bar-striped active';</script>";
                                  break;

                            case '1/4' : 
                                  echo "<script> document.getElementById('Bar4').style.width='25%%'; document.getElementById('Bar4').className='progress-bar progress-bar-danger progress-bar-striped active';</script>";
                                  break;

                            case 'E' :
                                  echo "<script> document.getElementById('Bar4').style.width='1%'; document.getElementById('Bar4').className='progress-bar progress-bar-danger progress-bar-striped active';</script>";
                                  break; 

                          }


                      ?>
                    </div> 
            </div>
          </div>

       <h1 class="page-header"></h1>
         <div style="padding-bottom:250px">
            <div id="In" class="panel panel-default pull-left" style="width:49%;">
                <div class="panel-body">
                    <h2 class="page-header" style="text-align:center;">In</h1>
                      <div class="table-responsive">
                          <table class="table table-hover">
                      <?php 

                        $A1 = mysqli_query($conn, "select * from Vehicles where Status = 'A'");

                        $Show_A = mysqli_fetch_all($A1, MYSQLI_ASSOC);

                        foreach($Show_A as $Show_A ) {echo "<tr class='info'> <td>" . $Show_A['Name'] . "</td></tr>";}
                      ?>
                        </table>
                      </div>
                        <?php

                       if( mysqli_num_rows($A1) == '0') {

                              echo "<script> document.getElementById('cart2').style.display='none'</script>" . "<p style='text-align:center; color:red;'> No Carts Available </p>";
                             }


                       ?>
                </div>
            </div> 

            <div id="Out" class="panel panel-default pull-right" style="width:49%">
                <div class="panel-body">
                     <h2 class="page-header" style="text-align:center;">Out</h1>
                        <div id="cart2" class="table-responsive">
                          <table class="table table-hover">
                            <th> Vehicle </th>
                            <th> User </th>
                            <th> Depart Time</th>
                       <?php 

                      $A2 = mysqli_query($conn, "select * from Vehicles where Status = 'UA'");

                      $Show_A = mysqli_fetch_all($A2, MYSQLI_ASSOC);

                      foreach($Show_A as $Show_A ) {echo "<tr class='danger'> <td>" . $Show_A['Name'] . "</td><td>" .  $Show_A['User'] . "</td><td>" . $Show_A['Time_O'] . "</td></tr>" ;}
                    ?>
                      </table>
                    </div>
                     <?php

                       if( mysqli_num_rows($A2) == '0') {

                              echo "<script> document.getElementById('cart2').style.display='none'</script>" . "<p style='text-align:center; color:red;'> All Carts Checked In </p>";
                             }

                       $checkq = mysqli_query($conn, "select * from queue where SLA = 'Processing'");

                        $getCheckq = mysqli_fetch_all($checkq, MYSQLI_ASSOC);

                        foreach ( $getCheckq as  $getCheckq ) {

                          $D_out =  $getCheckq['D_out'];
                          $date = date('Y-m-d');

                           if ($date !== $D_out){

                                $sla = mysqli_query($conn, "update queue set SLA = 'T' where SLA = 'Processing' and status = 'O' ");

                            } else {

                          }
                          
                        }

                     ?>
                </div>
            </div>
          </div>   
         
          <div class="panel panel-default" style="margin-top:80px;" > 
              <div class="panel-body">

              <h2 class="page-header" style="text-align:center;"> Comments</h2>
                  <p id='error' style='display: none; text-align: center; color:blue;'>No Results </p>
                <div id='my_c' class="table-responsive"> 

                      <table class=" table table-hover"> 

                          <th> 
                              User
                          </th>

                          <th>
                              Comment
                          </th>
                          <?php

                          if (basename($_SERVER['PHP_SELF']) == 'A_dash.php'){
                            echo "<th>Delete</th>";
                             }
                          

                        

                              $select_C = mysqli_query($conn, "select * from comment inner join user_index on user_index.id = comment.id_u");

                              $show_C = mysqli_fetch_all( $select_C, MYSQLI_ASSOC);

                              foreach ( $show_C as $show_C) {

                                $tablec = "<tr><td>" . $show_C['username'] . "</td> <td>" . $show_C['comment'] . "</td>";
                                  if (basename($_SERVER['PHP_SELF']) == 'A_dash.php'){

                                      $tablec.= "</td><td><form method='post' action='../Functions/delete_C.php'><button name='C_ID' value=' " . $show_C['id_c'] . "'class='btn btn-danger'> X</button></form></td></tr>";
                                  }

                                  echo $tablec;

                              }

                               if( mysqli_num_rows($select_C) == 0 ) {

                                   echo "<script> 

                            document.getElementById('my_c').style.display='none';
                                document.getElementById('error').style.display='block';

                          </script>";
                        }

                          ?>

                      </table>
                </div>

              </div>
          </div>

        </div>

      </div>
    </div>

<?php 

          
      if($_SESSION['Permission'] == 'U'){

     include "../Functions/footer.php";

    } ?>