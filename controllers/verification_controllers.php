<?php
 session_start();
 $_SESSION['timenow']=time();
 $time=$_SESSION['timenow']-$_SESSION['start'];
 // echo $time;
 if($time<60){
 if($_POST['otp'] == $_SESSION['$key']){
 	// echo "success";
 unset($_SESSION['$key']);
 header('location:../view/add_vehicle.php');
 }
 else{
		header('Location: ../view/validation.php?type=login_error');
 
 }
}
else{
 unset($_SESSION['$key']);
	header('Location: ../view/home.php?type=code_error');
}
?>
 
 