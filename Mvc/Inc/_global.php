<?php
	ini_set('display_errors', 1);
	date_default_timezone_set("America/New_York");
	function GetConnection(){
		include __DIR__ . '/_password.php';
		return new mysqli('localhost','ponterip1',$sql_password,'ponterip1_db');
	}
	function my_print($x){
		?><pre><?
			print_r($x);
		?></pre><?
	}
	function FetchAll($sql){
			$ret = array();
			$conn = GetConnection();
			$results = $conn->query($sql);
			
			$error = $conn->error;
			if($error){
				echo $error;
			}else{
				while ($rs = $results->fetch_assoc()) {
					$ret[] = $rs;
				}			
			}
			
			return $ret;	
	}