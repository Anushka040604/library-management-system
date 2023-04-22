<?php
error_reporting(0);
include("connection.php");
$id=$_GET['id'];
$details="SELECT * FROM `bookdetails` WHERE bid='$id'";
$data=mysqli_query($conn,$details);
$result=mysqli_fetch_assoc($data);
?>
<html>
<body>
<div class="container">
<form name="details" method="POST">
<div class="title">
Book Details
</div>
<div class="form">

<div class="input_field">
<label>Book Id</label>
<input type="text" name="bid" class="binfo">
</div>
<div class="input_field">
<label>Book Name</label>
<input type="text" name="bname" class="binfo">
</div>
<div class="input_field">
<label>Author Name</label>
<input type="text" name="auname" class="binfo">
</div>
<div class="input_field">
<label>Price</label>
<input type="number" name="price" class="binfo">
</div>
<div class="input_field">
<label>Book Issue Date</label>
<input type="Date" name="issuebook" class="binfo">
</div>
<div class="input_field">
<label>Book Return Date</label>
<input type="Date" name="retbook" class="binfo">
</div>
<div class="input_field">
<a href="bookdetails.php"><button class="btn" id="show" name="show">Show Details</button></a>
</div>
</form>
</body>
</html>
<style>
*{
	margin:0;
	padding:0;
	box-sizing:border-box;
}
body{
	background-color:#D075F9;
	padding: 0 10px;
}
.container{
	border:2px solid black;
	background-color:white;
	max-width:500px;
	width:100%;
    margin:30px auto;
	padding:80px;
	box-shadow:1px 1px 20px rgba(0,0,0,0.5);
}
.container .title{
	
	font-family:'poppins','sans-serif';
	font-size:35px;
	font-weight:700;
	color:#D071F9;
	text-align:center;
	text-transform:uppercase;
}
.container .form{
	width:100%;
	margin-top:50px;
}
.container .form .input_field
{
	margin-bottom:20px;
	display:flex;
	align-items:center;
}
.container .form .input_field label
{
	width:200px;
	margin-right:10px;
	font-size:14px;
}
.container .form .input_field .binfo{
	width:100%;
	outline:none;
	border:1px solid #D071F9;
	font-size:15px;
	padding:9px 10px;
	border-radius:3px;
	transition:all 0.5s ease;
}
.container .form .input_field:hover{
	color:#D071F8;
}


.container .form .input_field p{
	font-size:14px;
	color:#757575;
}

.container .form .input_field .btn
{
	width:100%;
	padding:10px 10px 10px 10px;
	border:0;
	background-color:#D071F2;
	color:white;
	cursor:pointer;
	outline:none;
	border-radius:3px;
    margin-right:7px;
}
.container .form .input_field:last-child
{
	margin-bottom:0;
}
.container .form .input_field .btn:hover
{
	background:purple;
}
@media(max-width:420px)
{
	.container .form .input_field
	{
		flex-direction:column;
		align-items:flex-start;
	}
}
#show{
	width:350px;
}

</style>
<?php
if(isset($_POST['update']))
 {
	 $bid=$_POST['bid'];
	 $bname=$_POST['bname'];
	 $auname=$_POST['auname'];
	 $price=$_POST['price'];
	 $issuebook=$_POST['issuebook'];
	 $retbook=$_POST['retbook'];
	  
 $query="UPDATE `bookdetails` SET `bid`='$bid',`bname`='$bname',`bauthor`='$auname',`bprice`='$price',`bidate`='$issuebook',`brdate`='$retbook' WHERE bid=$id ";
 $data=mysqli_query($conn,$query);
 if($data)
 {
	 echo "<script>alert('Record Updated')</script>";
	 ?>
	 <meta http-equiv="refresh" content="5;url=http://localhost/phpmicroproject/bookdetails.php"/>
<?php
 }
 else
 {
	 echo "failed to update";
 }
 }
?>