<?php
	include_once'../model/curd_operations.php';
	include_once '../model/db.php';
	include_once 'common_functions.php';
	session_start();
	$phone_number=$_POST['Mobile Number'];
	$key=verification_code();
	// echo $key;
	$_SESSION['$key']=$key;
	send_message($phone_number,$key);
	?>