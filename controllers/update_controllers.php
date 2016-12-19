<?php
	include_once'../model/curd_operations.php';
	include_once '../model/db.php';
	include_once 'common_functions.php';
	// print_r($_POST);
	$con = db_connect();
	$updated_details = 	array(
	    "RC_date" => $_POST['RC_date'],
	    "Insurance_date" => $_POST['Insurance_date'],
	    "Due_date" => $_POST['Due_date'],
	    "Due_amount" => $_POST['Due_amount'],
	    "Reminder_before" => $_POST['Reminder_before'],
	    "Due_interval" => $_POST['Due_interval'],
	    "Total_dues" => $_POST['Total_dues'],

	);

	$conditions = array(
	    "id" => $_POST['id']
	);
	update($updated_details,'vehicle_detail',$condition,$con);
	header('Location:../view/add_vehicle.php');
	