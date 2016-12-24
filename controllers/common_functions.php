<?php
	include_once'../model/db.php';
	session_start();
	function send_message($phone_number, $key){
		$conn = sms_db_connect();
		$message_content="MY TRUCK APP Code is '".$key."'";
		// echo $message_content;
		// $sql = "INSERT INTO `MessageOut` (`MessageFrom`, `MessageTo` , `MessageText`) VALUES ('TRCKAP', '$phone_number', '$message_content')";
		// // echo $sql;
		// mysqli_set_charset($conn, 'utf8mb4'); 
		// if(execute_query($sql, $conn)){
		// 	// echo "SMS Sent";
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
		return $selected_row[0]['id'];
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
function log_out(){
	session_destroy();
	header('Location:../index.php');
}

	function landing_page_session_check(){
		if(!isset($_SESSION["user_details"]) || empty($_SESSION["user_details"])){
			header('location:login.php');
		}
	}

	function login_page_session_check(){
		if(isset($_SESSION["user_details"])){
			header('location:view.php');
		}
	}
	function create_session($data){
		session_start();
		$user_details = $data['0'];
		$_SESSION["user_details"] = $user_details;
		$_SESSION['check_value'] = 1;
		if(isset($_SESSION['user_details'])){
			return true;
		}
		return false;
	}