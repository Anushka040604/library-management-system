<?php
error_reporting(0);
include("connection.php");
$details="select * from user";
$data=mysqli_query($conn,$details);
$total=mysqli_num_rows($data);

if($total!=0)
{
?>
<div class="record">
<h2 align="center">Display Records</h2>
</div>
<style>
body{
	background-color:#D071f9;
}
table{
	background-color:white;
}
.record h2{
	font-size:300%;
	color:black;
	background-color:yellow;
	transition:0.5s;
}
.record h2:hover{
	color:red;
}
.update{
	background-color:green;
	color:white;
	border:0;
	outline:none;
	border-radius:5px;
	height:22px;
	width:80px;
	font-weight:bold;
	cursor:pointer;
}
.delete{
	background-color:red;
	color:white;
	border:0;
	outline:none;
	border-radius:5px;
	height:22px;
	width:80px;
	font-weight:bold;
	cursor:pointer;
}
</style>
<table border="1" cellspacing="7" width="100%">
<th width="3%">Id</th> 
<th width="5%">FirstName</th>
<th width="5%">LastName</th>
<th width="5%">Gender</th>
<th width="10%">Email Id</th>
<th width="3%">Password</th>
<th width="3%">Confirm Password</th>
<th width="10%">Address</th>
<th width="5%">Phone Number</th>
<th width="8%">Operation</th>
</tr>
<?php
	while($result=mysqli_fetch_assoc($data))
	{
		
		echo"<tr>
		<td>".$result['id']."</td>
		<td>".$result['fname']."</td>
        <td>".$result['lname']."</td>
		<td>".$result['gender']."</td>
		<td>".$result['email']."</td>
		<td>".$result['pass']."</td>
		<td>".$result['cpass']."</td>
		<td>".$result['address']."</td>
		<td>".$result['phno']."</td>
		<td><a href='update_design.php?id=$result[id]'><input type='submit' value='Update' class='update'></a>
		<a href='delete.php?id=$result[id]'><input type='submit' value='Delete' class='delete' onclick='return checkdelete()'></a></td>
        </tr>";
	}
}
else
{
	echo"record not found";
}
?>
</table>
<script>
function checkdelete()
{
	return confirm('Are You Sure you want to Delete the Data?');
}
</script>