<?php
$servername="localhost";
$username="root";
$password="";
$db="dightintern";
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn){
	echo "Database not connected";
}
?>