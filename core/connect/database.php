<?php 
include 'medoo.min.php';


$db = new medoo([
	'database_type' => 'mysql',
	'database_name' => 'pin',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8'
]);
