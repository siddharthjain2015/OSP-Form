<?php
$conn=mysqli_connect("localhost",'root',"root");
mysqli_select_db($conn,"dataform");
if(isset($_POST['column_name'])==TRUE  && isset($_POST['row_name'])==TRUE )
{
$sql="SELECT * FROM formdetails WHERE ".$_POST['column_name']."='".$_POST['row_name']."'";

$result=mysqli_query($conn,$sql);

if(!$result) 
	die ($conn->error);
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
<?php }} ?>

</table>


<form action="#" method="post" align="center">
</br>
<label for="column_name">Enter column name to check <input name="column_name"></br></br>
<label for="row_name">Enter value <input name="row_name"></br></br>
<input type="submit"></br></br>
</form>
<a href="dataform.php">click here to go to see database values</a></br>

</body>
</html>
