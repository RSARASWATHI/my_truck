<?php
	include_once'../model/curd_operations.php';
	include_once '../model/db.php';
	include_once 'common_functions.php';
	// print_r($_POST);
	$con = db_connect();
	$updated_details = 	array(
	    "RC_date" => $_REQUEST['RC_date'],
	    "Insurance_date" => $_REQUEST['Insurance_date'],
	    "Due_date" => $_REQUEST['Due_date'],
	    "Due_amount" => $_REQUEST['Due_amount'],
	    "Reminder_before" => $_REQUEST['Reminder_before'],
	    "Due_interval" => $_REQUEST['Due_interval'],
	    "Total_dues" => $_REQUEST['Total_dues'],

	);

	$condition = array(
	    "id" => $_REQUEST['id']
	);
	update($updated_details,'vehicle_detail',$condition,$con);
	header('Location:../view/add_vehicle.php');
	