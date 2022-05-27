<?php

$username='root';
$password='m1247';
$database='user';
$server='localhost';

if(!$con = mysqli_connect($server,$username,$password,$database,3307))
{
	die("failed to connect!");
}

?>
