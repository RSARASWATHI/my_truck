<?php
	include_once'../model/curd_operations.php';
	include_once '../model/db.php';
	include_once 'common_functions.php';
	$_SESSION['start'] = time();
	$con=db_connect();
	$name=$_REQUEST['Name'];
	$phone_number=$_REQUEST['mobile_number'];
	user_details($name,$phone_number,$con);
	function user_details($name,$phone_number,$con){
		$condition=" `phonenumber` = '".$phone_number."'";
		$selected_row = select('phonenumber', 'users',$condition, $con);
		if ( !($selected_row =="empty") && $selected_row[0]['phonenumber'] == $phone_number ) {
				echo "User Already exists please login";
				// header('Location: ../view/home.php?type=signup_error');
		}else{
				insert('users',array('name','phonenumber'),array($name,$phone_number),$con);
				$key=verification_code();
				$user_data=get_user_detail($phone_number,$con);
				create_session($user_data);
				$_SESSION['$key']=$key;
				send_message($phone_number,$key);
			
		}
	}
	function create_session($data){
			$user_details= $data['0'];
			$_SESSION["user_details"] = $user_details;
			$_SESSION['check_value'] = 1;
			if(isset($_SESSION['user_details'])){
				return true;
			}
			return false;

	}
		
