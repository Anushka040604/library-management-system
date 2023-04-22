<?php
error_reporting(0);
include("connection.php");
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
Registration Form
</div>
<div class="form">

<div class="input_field">
<label>First Name</label>
<input type="text" name="fname" class="input" required>
</div>

<div class="input_field">
<label>Last Name</label>
<input type="text" name="lname" class="input" required>
</div>

<div class="input_field">
<label>Password</label>
<input type="password" name="upass" class="input" required>
</div>

<div class="input_field">
<label>Confirm Password</label>
<input type="password" name="cpass" class="input" required>
</div>

<div class="input_field">
<label>Gender</label>
<select class="selectbox" name="gender" required>
<option value="">select</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div>

<div class="input_field">
<label>Email id</label>
<input type="text" class="input" name="email" required>
</div>
<div class="input_field">
<label>Phone Number</label>
<input type="text" class="input" name="phone" required>
</div>

<div class="input_field">
<label>Address</label>
<textarea class="textarea" name="address"></textarea>
</div>

<div class="input_field terms">
<label class="check">
<input type="checkbox">
<span class="checkmark"></span>
</label>
<p>Agree to terms and conditions</p>
</div>

<div class="input_field">
<input type="submit" name="register" value="Register" class="btn">
<input type="button" id="nextpage" name="display" value="Display" class="btn">
</div>
</div>
</div>
<script>
const next=document.getElementById("nextpage");
next.addEventListener('click',function(){
window.location.href='http://localhost/phpmicroproject/display.php';
});
</script>
</body>
</html>
<?php

if($_POST['register'])
 {
	 $first=$_POST['fname'];
	 $last=$_POST['lname'];
	 $pass=$_POST['upass'];
	 $cpassword=$_POST['cpass'];
	 $gen=$_POST['gender'];
	 $emailid=$_POST['email'];
	 $add=$_POST['address'];
	 $phoneno=$_POST['phone'];
	 
	 
 $query="INSERT INTO user(fname,lname,pass,cpass,gender,email,phno,address)VALUES('$first','$last','$pass','$cpassword','$gen','$emailid','$phoneno','$add')";
 $data=mysqli_query($conn,$query);
 if($data)
 {
	 echo "Data inserted";
 }
 else
 {
	 echo "failed";
 }
 }
?>