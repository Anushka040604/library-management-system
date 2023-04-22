<?php
error_reporting(0);
include("connection.php");
$id=$_GET['id'];
$details="select * from user where id='$id'";
$data=mysqli_query($conn,$details);
$result=mysqli_fetch_assoc($data);
?>

<html>
<head>
<link rel="stylesheet" href="registerform.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
<form action="#" method="POST">
<div class="title">
Update Details
</div>
<div class="form">

<div class="input_field">
<label>First Name</label>
<input type="text" value="<?php echo $result['fname'];?>" name="fname" class="input" required>
</div>

<div class="input_field">
<label>Last Name</label>
<input type="text" value="<?php echo $result['lname'];?>" name="lname" class="input" required>
</div>

<div class="input_field">
<label>Password</label>
<input type="password" value="<?php echo $result['pass'];?>" name="upass" class="input" required>
</div>

<div class="input_field">
<label>Confirm Password</label>
<input type="password" value="<?php echo $result['cpass'];?>" name="cpass" class="input" required>
</div>

<div class="input_field">
<label>Gender</label>

<select class="selectbox" name="gender" required>
<option value="">select</option>

<option value="Male"
	<?php 
      if($result['gender']=='Male')
	  {
		  echo "selected";
	  }
	?>
>
Male</option>
<option value="Female"
	<?php 
      if($result['gender']=='Female')
	  {
		  echo "selected";
	  }
	 ?>
>
Female</option>
</select>
</div>

<div class="input_field">
<label>Email id</label>
<input type="text" value="<?php echo $result['email'];?>" class="input" name="email" required>
</div>
<div class="input_field">
<label>Phone Number</label>
<input type="text" value="<?php echo $result['phno'];?>" class="input" name="phone" required>
</div>

<div class="input_field">
<label>Address</label>
<textarea class="textarea" name="address">
<?php echo $result['address'];?>
</textarea>
</div>


<div class="input_field">
<input type="submit" name="update" value="Update Details" class="btn">
</div>
</div>
</div>

</body>
</html>
<?php

if($_POST['update'])
 {
	 $first=$_POST['fname'];
	 $last=$_POST['lname'];
	 $pass=$_POST['upass'];
	 $cpassword=$_POST['cpass'];
	 $gen=$_POST['gender'];
	 $emailid=$_POST['email'];
	 $add=$_POST['address'];
	 $phoneno=$_POST['phone']; 
 $query="UPDATE user SET fname='$first',lname='$last',pass='$pass',cpass='$cpassword',gender='$gen',email='$emailid',phno='$phoneno',address='$add'WHERE id=$id ";
 $data=mysqli_query($conn,$query);
 if($data)
 {
	 echo "<script>alert('Record Updated')</script>";
	 ?>
	 <meta http-equiv="refresh" content="5;url=http://localhost/phpmicroproject/display.php"/>
<?php
 }
 else
 {
	 echo "failed to update";
 }
 }
?>