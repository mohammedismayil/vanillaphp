<html>
<head>
	<title>Edit Data</title>
</head>

<body>


<?php
    //including the database connection file
    include_once("config.php");
    //actually from the admin panel -
$another_result = mysqli_query($mysqli, "SELECT * FROM adminusers ORDER BY name"); // using mysqli_query instead

    ?>

<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($another_result)) { 		
		echo "<tr>";
		echo "<td>".$res['name']."</td>";
			
        
    }
	?>
<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="age"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Edit"></td>
			</tr>
		</table>
	</form>
    
<table width='80%' border=0>
</table>
</body>
</html>