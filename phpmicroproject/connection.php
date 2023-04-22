<?php
$servername="localhost";
$username="root";
$pass="";
$dbname="responsiveform";
$conn=mysqli_connect($servername,$username,$pass,$dbname);
if($conn)
{
	//echo "successful";
}
else
{
	echo "failed".mysqli_connect_error();
}
?>