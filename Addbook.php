<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		$servername = "localhost";
		$username = "root";
        $password = "";
		$database = "mydatabaase";
		
        $conn = mysqli_connect("localhost", "root","","mydatabaase");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$Book_id = $_REQUEST['Book_id'];
		$Title = $_REQUEST['Title'];
        $Price = $_REQUEST['Price'];
		$Author = $_REQUEST['Author'];
		$Available = $_REQUEST['Available'];
		
		$sql = "INSERT INTO book VALUES ('$Book_id','$Title',
			'$Price','$Author','$Available')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Data stored in a database successfully</h3>"; 

			echo nl2br("\n$Book_id\n $Title\n "
				. "$Author\n $Price\n $Available");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>