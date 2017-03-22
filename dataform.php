<?php


$conn=mysqli_connect("localhost",'root',"root");


mysqli_select_db($conn,"dataform");
if($conn->connect_error) 
	die ($conn->connect_error);

$query="SELECT * FROM formdetails ";

$result=mysqli_query($conn,$query);

if(!$result) 
	die ($conn->error);

/*while($arr=mysqli_fetch_array($result))
{
	echo"$arr[fname]";echo"</br>";
	echo"$arr[lname]";echo"</br>";
	echo"$arr[mail]";echo"</br>";
	echo"$arr[city]";echo"</br>";
	echo"$arr[state]";echo"</br>";
	echo"$arr[zip_code]";echo"</br>";
	echo"$arr[asp]";echo"</br>";
	echo"$arr[cp]";echo"</br>";
	echo"$arr[MP]";echo"</br>";
}*/
?>
<html>
<body>
<table border="5 px">
<th>First Name</th>
<th>Last Name</th>
<th>Mail</th>
<th>City</th>
<th>State</th>
<th>Zip Code</th>
<th>Are you Speaking At Conference</th>
<th>Conference Pass</th>
<th>Meal Preference</th>
<?php
while($arr=mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $arr['fname']?></td>
<td><?php echo $arr['lname']?></td>
<td><?php echo $arr['mail']?></td>
<td><?php echo $arr['city']?></td>
<td><?php echo $arr['state']?></td>
<td><?php echo $arr['zip_code']?></td>
<td><?php echo $arr['asp']?></td>
<td><?php echo $arr['cp']?></td>
<td><?php echo $arr['MP']?></td></tr>
<?php } ?>

</table>
</br></br>
<a href="update_form_values.php">Click here to update some data</a></br></br>
<a href="delete_form_values.php">Click here to delete a row</a></br></br>
<a href="retrival_on_condition.php">Click here to retrieve data based on some condition</a></br></br>
</body>
</html>