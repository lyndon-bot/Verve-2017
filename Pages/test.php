<?php
session_start();
$_SESSION['hello'] = 'joy';
//header("location:test2.php");


?>

<script> 


var myWindow = window.open("", "", "width=200, height=100");
myWindow.document.write("<p>This is 'myWindow'</p>");
setTimeout(function(){ myWindow.close() }, 3000);


</script>