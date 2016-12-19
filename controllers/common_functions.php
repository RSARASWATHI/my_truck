<?php
	include_once'../model/db.php';
	session_start();
	function send_message($phone_number, $message_content){
		// $conn = sms_db_connect();
		// $sql = "INSERT INTO `MessageOut` (`MessageFrom`, `MessageTo` , `MessageText`) VALUES ('TRCKAP', '$phone_number', '$message_content')";
		// echo $sql;
		// mysqli_set_charset($conn, 'utf8mb4'); 
		// if(execute_query($sql, $conn)){
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
		$condition=" `phonenumber` = '".$phonenumber."'";
		$selected_row = select('id', 'users',$condition, $con);
		return $selected_row['0']['id'];
	}
	function get_user_name($phonenumber){
		$con=db_connect();
		$condition=" `phonenumber` = '".$phonenumber."'";
		$selected_row = select('name', 'users',$condition, $con);
		return $selected_row[0]['name'];
	
	}
	function get_vehicle_name($phoneno){
  $con=db_connect();
  $id=get_user_id($phoneno);
  $condition=" `user_id` = '".$id."'";
  $selected_row=select('vehicle_no','vehicle_detail',$condition,$con);
  return $selected_row;

}
