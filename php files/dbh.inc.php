<?php
// $serverName ="localhost";
// $dbUsername ="kemovzwt_kemof";
// $dbPassword="Primeus01$";
// $dbName="kemovzwt_kemofltd";

$serverName ="localhost";
$dbUsername ="root";
$dbPassword="";
$dbName="kemofltd";

$conn= mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if($conn->connect_error){
	die("Connection failed: " .$conn->connect_error);
}

