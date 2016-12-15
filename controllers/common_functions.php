<?php
	include_once'../model/db.php';
	function send_message($phone_number, $message_content){
<<<<<<< HEAD
		// // $conn = sms_db_connect();
		// // $sql = "INSERT INTO `MessageOut` (`MessageFrom`, `MessageTo` , `MessageText`) VALUES ('TRCKAP', '$phone_number', '$message_content')";
		// // echo $sql;
		// // mysqli_set_charset($conn, 'utf8mb4'); 
		// // if(execute_query($sql, $conn)){
=======
		// $conn = sms_db_connect();
		// $sql = "INSERT INTO `MessageOut` (`MessageFrom`, `MessageTo` , `MessageText`) VALUES ('TRCKAP', '$phone_number', '$message_content')";
		// echo $sql;
		// mysqli_set_charset($conn, 'utf8mb4'); 
		// if(execute_query($sql, $conn)){
>>>>>>> b93f34f95caa397bdede4654c196dbe155b67a0e
		// 	echo "SMS Sent";
			header('location:../view/validation.php ');
		// }else{
		// 	echo "not sent";
		// }
	}
	function verification_code(){
		$string = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$string_shuffled = str_shuffle($string);
		$verification_code = substr($string_shuffled, 1, 4);
		return $verification_code; 
		}
	function sms_db_connect(){
			$connection = mysqli_connect('10.0.2.1', "vefetch", "Manithan10100?", "temp", 3306);
			if (!$connection) {
			    die("Connection failed: " . mysqli_connect_error());
			    exit();
			}
			return $connection;
		}

	function get_user_id($phonenumber){
		$con=db_connect();
		$condition=" `phonenumber` = '".$phone_number."'";
		$selected_row = select('id', 'users',$condition, $con);
		return $selected_row;
	}
	function get_user_name($phonenumber){
		$con=db_connect();
		$condition=" `phonenumber` = '".$phone_number."'";
		$selected_row = select('name', 'users',$condition, $con);
		return $selected_row;
	
	}