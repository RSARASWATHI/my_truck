<?php 

	include_once 'curd_operations.php';

	function db_connect(){
		$connection = mysqli_connect("localhost", "root", "","my_truck");
		if (!$connection) {
		    die("Connection failed: " . mysqli_connect_error());
		    exit();
		}
		return $connection;
		// echo "string";
	}

	function execute_query($query, $link){
		if(!empty($link)){
			return mysqli_query($link, $query);
		}else{
			return mysqli_query(db_connect(), $query);
		}
	}

	function get_array_from_object($result){
		return mysqli_fetch_array($result, MYSQLI_ASSOC);
	}

	function get_total_reference($id){
		$con = db_connect();
		$total_refered_count = select('total_refered_count', 'users', array("id"=>$id), $con);
		return $total_refered_count['0']['total_refered_count'];
	}

	function get_name($id){
		$con = db_connect();
		$name = select('username', 'users', array("id"=>$id), $con);
		return $name['0']['username'];
	}
	function is__array($value){
		return is_array($value);
	}
	function emptty($value){
		return empty($value);
	}
