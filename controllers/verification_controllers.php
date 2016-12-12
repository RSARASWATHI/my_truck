<?php
 session_start();
 if($_POST['validate_box'] == $_SESSION['$key']){
 	// echo "success";
 header('location:../view/home.php ');
 }
 else{
 	echo "enter validate code to continue";
 }

?>
