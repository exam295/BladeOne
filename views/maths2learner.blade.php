@extends('app')

@section('content')

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
$querey = mysqli_query ($conn, 'SELECT LearnerClass FROM registered_learners');

$learnerclass= $querey;

if($learnerclass == "1"){
  header("Location:maths1learner.php");
} else if($learnerclass == "2") {
  header("Location:maths2learner.php");
}

?>

<p> AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA </p>

@endsection