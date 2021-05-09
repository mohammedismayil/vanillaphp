<html>
<head>
	<title>Add Data for admin</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	
	
	// checking empty fields
	if(empty($name) ) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO adminusers(name) VALUES('$name')");
		//for this column i have created a table with just a column. For edit functionality we need the id of the particular row right? for that we need to create 
		// a column 'id' with autoincremental value . we dont need insert this in the query . it will automatically generates an id from 1. 
		// we can even give the exact number which should start like - 10000 , 10001 
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>