<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tlevelexam";
?>


<?php

$conn = mysqli_connect($servername, $username, $password, $dbname)
				or die ('Sorry, cannot connect to MySQL');

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
	echo "<br>";
  } else {
	echo "Error: " . $sql . "<br>" . $conn->error;
  }

	$conn = mysqli_connect($servername, $username, $password, $dbname)
				or die ('Sorry, cannot connect to MySQL');
	if($conn) {
		
		echo 'You have connected to your database!';
		
	} else {
		
		echo 'Sorry, connection failed!';
		
	}




?>
