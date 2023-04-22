<?php
error_reporting(0);
include("connection.php");
$details="SELECT * FROM bookdetails";
$data=mysqli_query($conn,$details);
$total=mysqli_num_rows($data);
$q="select * from bookdetails where bname=$bname";
if($total!=0)
{
?>
<div class="record">
<h2 align="center">Display Details</h2>
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
<center><table border="1" cellspacing="7" width="90%">
<th width="3%">Book Id</th> 
<th width="10%">Book Name</th>
<th width="10%">Author Name</th>
<th width="10%">Price</th>
<th width="10%">Book Issue Date</th>
<th width="10%">Book Return Date</th>
<th width="10%">Operation</th>
</tr></center>
	<?php
	while($result=mysqli_fetch_assoc($data))
	{
		if($q==$result['bname'])
	    {
			echo "<script>alert('Book is already issued')</script>";
		}
		else{
		echo"<tr>
		<td>".$result['bid']."</td>
		<td>".$result['bname']."</td>
        <td>".$result['bauthor']."</td>
		<td>".$result['bprice']."</td>
		<td>".$result['bidate']."</td>
		<td>".$result['brdate']."</td>
	    <td><a href='updatedetails.php?id=$result[bid]'><input type='submit' name='update' value='Update' class='update'></a>
		<a href='deletedetails.php?id=$result[bid]'><input type='submit' value='Delete' class='delete' onclick='return checkdelete()'></a></td>
        </tr>";
		}
	}
}
else
{
	echo"record not found";
}
?>
</table>