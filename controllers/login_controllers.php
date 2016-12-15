<?php
	include_once'../model/curd_operations.php';
	include_once '../model/db.php';
	include_once 'common_functions.php';
	session_start();
	$_SESSION['start'] = time();
	$phone_number=$_POST['MobileNumber'];
	get_user_number($phone_number);
	
	function get_user_number($phone_number){
		$con=db_connect();
		$condition=" `phonenumber` = '".$phone_number."'";
		$selected_row = select('phonenumber', 'users',$condition, $con);
		if ( $selected_row[0]['phonenumber'] == $phone_number) {
			$key=verification_code();
			echo $key;
			$_SESSION['$key']=$key;
			send_message($phone_number,$key);
		}else{
				header('Location: ../login.php?type=login_error');
			
		}
	}
