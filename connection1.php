<?php
$servername="localhost";
$username="root";
$password="";
$dbname="userdatabase1";

$con=mysqli_connect($servername,$username,$password,$dbname);

if($con)
{
	echo "connection okay";
}
else
{
	die("connection failed ");
}
?>