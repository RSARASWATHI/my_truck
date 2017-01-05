<?php
	include_once'../model/curd_operations.php';
	include_once '../model/db.php';
	include_once 'common_functions.php';
	// session_start();

	$_SESSION['start'] = time();
	$phone_number=$_REQUEST['MobileNumber'];
	$_SESSION['phoneno']=$phone_number;
	$con=db_connect();
	get_user_number($phone_number,$con);
	create_session($phone_number,$con);
	function get_user_number($phone_number,$con){
		$condition=" `phonenumber` = '".$phone_number."'";
		$selected_row = select('phonenumber', 'users',$condition, $con);
		if ( $selected_row[0]['phonenumber'] == $phone_number) {
			$key=verification_code();
			// echo $key;
			$_SESSION['$key']=$key;
			// send_message($phone_number,$key);
		}else{
				header('Location: ../view/login.php?type=login_error');
			
		}
	}
