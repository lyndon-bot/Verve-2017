<?php 
 session_start();

if($_SESSION['hello'] == 'joy'){

	echo " <div class='alert alert-success alert-dismissable fade in'>
    <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div>";
}

?>