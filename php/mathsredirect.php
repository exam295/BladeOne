<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	//header('Location: index.html');
	exit;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tlevelexam";


//this is the database connection method usiing the variables defined above.

$conn = mysqli_connect($servername, $username, $password, $dbname)
    or die("Connection Failed");
$querey = mysqli_query ($conn, 'SELECT * FROM registered_learners');

//this is a querey in which I used to get the LearnerID out of, so I can assign it to a variable and it can be used in other queries as shown below.

$querey1 = mysqli_query($conn, 'SELECT * FROM registered_learners WHERE LearnerUsername like "%'. $_SESSION['name'] . '%"');
$roww = mysqli_fetch_array($querey1);
$id = $roww["LearnerID"];


$querey = mysqli_query($conn, 'SELECT LearnerClass FROM registered_learners WHERE LearnerID like "%'. $id . '%"');
$row = mysqli_fetch_array($querey);
if ($row) {

	print($row['LearnerClass']);
	$lc = $row["LearnerClass"];
} else {
	print("NOT FOUND");
}

// this is the actual logic behind it - just if and elseif statements.
if($lc == "1"){
  header("Location:/Projects/Blade-test/test_BladeOne/BladeOne/maths1learner.php");
} else if($lc == "2") {
  header("Location:/Projects/Blade-test/test_BladeOne/BladeOne/maths2learner.php");
} else {
header("Location:/Projects/Blade-test/test_BladeOne/BladeOne/maths3learner.php");
}
