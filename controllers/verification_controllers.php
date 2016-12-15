<?php
 session_start();
 if($_POST['otp'] == $_SESSION['$key']){
 	// echo "success";
 unset($_SESSION);
 header('location:../view/ ');
 }
 else{
		header('Location: ../validation.php?type=login_error');
 
 }

?>
 
 