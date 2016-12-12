<?php
	include_once'../model/curd_operations.php';
	include_once '../model/db.php';
	include_once 'common_functions.php';
	session_start();
	$name=$_POST['Name'];
	$phone_number=$_POST['Mobile Number'];
	$con=db_connect();
	insert('users',array('name','phonenumber'),array($name,$phone_number),$con);
	$key=verification_code();
	echo $key;
	$_SESSION['$key']=$key;
	send_message($phone_number,$key);
	?>