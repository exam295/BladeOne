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

?>

<link rel="stylesheet" href="css/quiz.css">
@extends('app')
@section('content')


<div class="containerr mt-sm-5 my-1">
    <div class="question ml-sm-5 pl-sm-5 pt-2">
        <div class="py-2 h5"><b>Q. which option for pythagoras' theorem is the correct answer?</b></div>
        <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options">
             <label class="options">a2 + b2 = c2 <input type="radio" name="radiocorrect" value="1">
              <span class="checkmark"></span>
             </label> <label class="options">e = mx2 <input type="radio" name="radioincorrect1" value="0">
              <span class="checkmark"></span> </label>
             <label class="options" >SOHCAHTOA <input type="radio" name="radioincorrect2" value="0">
             <span class="checkmark"></span> </label> 
             <label class="options">Other <input type="radio" name="radioincorrect3"> <span class="checkmark"value="0"></span> </label>
            </div>
    </div>
    <div class="d-flex align-items-center pt-3">
        <div class="ml-auto mr-sm-5"> <a href="php/quizresult-action.php"><button class="btn btn-success" type="submit">Submit</button> </a></div>
    </div>
</div>
@endsection