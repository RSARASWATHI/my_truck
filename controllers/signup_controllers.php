<?php
	include_once'../model/curd_operations.php';
	include_once '../model/db.php';
	include_once 'common_functions.php';
	session_start();
	$_SESSION['start'] = time();
	$con=db_connect();
	$name=$_POST['Name'];
	$phone_number=$_POST['mobile_number'];
	$_SESSION['phonenumber']=$phone_number;
	 user_details($name,$phone_number,$con);
	
	function user_details($name,$phone_number,$con){
		$condition=" `phonenumber` = '".$phone_number."'";
		$selected_row = select('phonenumber', 'users',$condition, $con);
		if ( $selected_row[0]['phonenumber'] == $phone_number) {
				header('Location: ../index.php?type=login_error');
		}else{
			insert('users',array('name','phonenumber'),array($name,$phone_number),$con);
			 $key=verification_code();
			// echo $key;
			 $_SESSION['$key']=$key;
			send_message($phone_number,$key);
		}}
		
