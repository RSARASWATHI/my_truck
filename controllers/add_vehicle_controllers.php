<?php
	include_once'../model/curd_operations.php';
	include_once '../model/db.php';
	include_once 'common_functions.php';
	$data=$_REQUEST;
	add_vehicle_detail($data);
	function add_vehicle_detail($_get){
		$con=db_connect();
		insert('vehicle_detail',array('vehicle_no','RC_date' ,'Insurance_date', 'Due_date', 'Due_amount', 'Reminder_before', 'Due_interval', 'Total_dues','user_id'),array($_get['vehicle_no'],$_get['vehicle_RC_date'],$_get['insurance_date'], $_get['loan_due_date'],$_get['loan_due_amount'],$_get['reminder_before'],$_get['due_time_interval'],$_get['total_due'],$_get['id']),$con);
		header('Location:../view/add_vehicle.php');
	}
	