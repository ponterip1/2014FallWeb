<?php

function GetConnection(){
	include __DIR__ . '/_password.php';
	$conn = new mysqli('localhost','ponterip1',$sql_password,'ponterip1_db');
	return $conn;
}
