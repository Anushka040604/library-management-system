<?php
include("connection.php");
$id=$_GET['id'];
$query="DELETE FROM `bookdetails` WHERE bid='$id'";
$data=mysqli_query($conn,$query);
if($data)
{
	 echo "<script>alert('Record Deleted')</script>";
	?>
	<meta http-equiv="refresh" content="0;url=http://localhost/phpmicroproject/bookdetails.php"/>
<?php	
}
else
{
	 echo "<script>alert('Failed to Deleted')</script>";
}
?>
