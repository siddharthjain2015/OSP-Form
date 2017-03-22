<?php
$conn=mysqli_connect('localhost','root','root');
mysqli_select_db($conn,'dataform');
if(isset($_POST['column_name'])==TRUE && isset($_POST['row_name'])==TRUE && isset($_POST['condition'])==TRUE && isset($_POST['val'])==TRUE)
{
$sql="UPDATE formdetails SET ".$_POST['column_name']."= '".$_POST['row_name']."' WHERE ".$_POST['condition']."= '".$_POST['val']."'";
if($conn->query($sql)==TRUE)
	echo "Data Value Updated";
}
?>
<html>
<body>
<form action="#" method="post" align="center">
<label for="column_name">Enter column name to modify<input name="column_name"></br>
<label for="row_name">Enter updated value<input name="row_name"></br>
<label for="condition">Enter condition for Column<input name="condition"></br>
<label for="val">Enter condition for Value To be<input name="val"></br>
<input type="submit"></br>
</form>
<a href="dataform.php">click here to go to see database values</a></br>
</body>
</html>