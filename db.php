<?php 

$host = "localhost";
$user = "imon";
$pass = "p@ssw0rd";
$db_name = "chat";

$con = new mysqli($host,$user,$pass,$db_name);
if(!$con){
 die("Connection Error." . mysqli_error());
}  


function formatDate(){
	// global $con;
	// define('UK', 'Europe/London');
	// date_default_timezone_set(UK);
	return date('F j, Y, g:i a', strtotime($date));
}

 ?>