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



$conn = mysqli_connect($servername, $username, $password, $dbname)
    or die("Connection Failed");
$querey = mysqli_query ($conn, 'SELECT * FROM registered_learners');




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



if($lc == "1"){
  header("Location:/Projects/Blade-test/test_BladeOne/BladeOne/science1learner.php");
} else if($lc == "2") {
  header("Location:/Projects/Blade-test/test_BladeOne/BladeOne/science2learner.php");
} else {
header("Location:/Projects/Blade-test/test_BladeOne/BladeOne/science3learner.php");
}
