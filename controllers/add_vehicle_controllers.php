<?php
	include_once'../model/curd_operations.php';
	include_once '../model/db.php';
	include_once 'common_functions.php';
	add_vehicle_detail($_POST);
	
	function add_vehicle_detail($_POST){
		$con=db_connect();
		insert('vehicle_detail',array('	vehicle_no', 'Insurance_date', 'Due_date', 'Due_amount', 'Reminder_before', 'Due_interval', 'Total_dues','user_id'),array($_POST['vehicle_no'],$_POST['Insurance_date'], $_POST['Due_date'],$_POST['Due_amount'],$_POST['Reminder_before'],$_POST['Due_interval'],$_POST['Total_dues'],$_POST['user_id']),$con);
	}
			