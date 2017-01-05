<?php 
include_once'../model/curd_operations.php';
	include_once '../model/db.php';
	include_once 'common_functions.php';

	function check_the_date($user_data, $keys){
		foreach ($user_data as $key => $value) {
			foreach ($keys as $key => $important_date_key) {
<<<<<<< HEAD
				$date=date("Y-m-d");
				if($value[$important_date_key] ==  get_date($date, $value['Reminder_before'])){
					process_this($value['id'], $important_date_key, $value['vehicle_no'], $value['Due_amount'], $value['Reminder_before'], $value['Due_interval'], $value['Total_dues'], $value['user_id'],$value[$important_date_key]);
=======
				$date = date("Y-m-d");
				if($value[$important_date_key] ==  get_date($date,$value['Reminder_before'])){
					process_this($value['id'], $important_date_key, $value['vehicle_no'], $value['Due_amount'], $value['Reminder_before'], $value['Due_interval'], $value['Total_dues'], $value['user_id'], $value[$important_date_key]);
>>>>>>> fad2229d481c3df09fba833d73b7c4c83d32a75c
				}else{
					continue;
				}
			}
		}
	}

<<<<<<< HEAD
	function process_this($vehicle_id, $db_slug, $vehicle_no, $due_ammount, $reminder_before, $due_interval, $total_dues, $user_id,$date){
=======
	function process_this($vehicle_id, $db_slug, $vehicle_no, $due_ammount, $reminder_before, $due_interval, $total_dues, $user_id, $date){
>>>>>>> fad2229d481c3df09fba833d73b7c4c83d32a75c
		switch($db_slug){
			case 'RC_date':
				echo $db_slug;
				change_date($db_slug,$vehicle_no,$date);
				break;
			case 'Insurance_date':
				echo $db_slug;
				change_date($db_slug,$vehicle_no,$date);
				break;
			case 'Due_date':
				echo $db_slug;
				break;
		}
	}
	function change_date($db_slug,$vehicle_no,$date){
		$db=db_connect();
<<<<<<< HEAD
=======
		$condition=" `vehicle_no` = '".$vehicle_no."'";
>>>>>>> fad2229d481c3df09fba833d73b7c4c83d32a75c
		$change_dated=get_date($date,365);
		// echo $change_dated;
		update_date($change_dated,$db_slug,$vehicle_no,$db);
	}
	function update_date($change_dated,$db_slug,$vehicle_no,$db){
			$updated_details = 	array(
		    $db_slug =>$change_dated 
			 );
			$condition = array(
		    "vehicle_no" => $vehicle_no
			);
			update($updated_details,'vehicle_detail',$condition,$db);
		}
	function get_date($date,$value){
		return date('Y-m-d', strtotime($date.  '+'.$value .'days'));
	}