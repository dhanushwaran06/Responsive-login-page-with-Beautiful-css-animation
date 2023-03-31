<?php

$con = mysqli_connect('localhost', 'root', '','logindb');

// get the post records
$username = $_POST['username'];
$password = $_POST['password'];

// database insert SQL code
$sql = "INSERT INTO logindb (username, password) VALUES ( '$username', '$password')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Inserted Successfully...";
}
?>