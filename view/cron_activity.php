<?php 
	include_once '../model/db.php';
	include_once '../controllers/cron_activity_controller.php';
	$db = db_connect();
	
	$raw_data = select('*', 'vehicle_detail','',$db);

	$date_keys = array('RC_date', 'Insurance_date', 'Due_date');
	

	check_the_date($raw_data, $date_keys);






