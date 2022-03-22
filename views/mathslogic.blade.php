
<?php

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
$querey1 = mysqli_query($conn, 'SELECT LearnerID FROM registered_learners');
$querey2 = mysqli_query($conn, 'SELECT LearnerClass FROM registered_learners');
$row = mysqli_fetch_array($querey1);
$id = $row["LearnerID"];
$learnerclass = $querey2;

if($learnerclass == "1"){
  header("Location:maths1learner.php");
} elseif($learnerclass == "2") {
  header("Location:maths2learner.php");
} 

?>

