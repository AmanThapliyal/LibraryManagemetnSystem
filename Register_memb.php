<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => mydb
		$conn = mysqli_connect("localhost", "root", "", "mydatabaase");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$Memb_id = $_REQUEST['Memb_id'];
		$Memb_type = $_REQUEST['Memb_type'];
    $memb_date = $_REQUEST['memb_date'];
    $expiry_date = $_REQUEST['expiry_date'];
    $Name = $_REQUEST['Name'];
    $Address = $_REQUEST['Address'];
		
		$sql = "INSERT INTO member VALUES ('$Memb_id', 
			'$Memb_type','$memb_date','$expiry_date','$Name','$Address')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Data stored in a database successfully</h3>"; 

			echo nl2br("\n$Memb_id\n $Memb_type\n "
				. "$memb_date\n $expiry_date \n $Name \n $Address");
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