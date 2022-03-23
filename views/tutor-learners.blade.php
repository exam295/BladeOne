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



$querey1 = mysqli_query($conn, 'SELECT * FROM registered_tutors WHERE TutorUsername like "%'. $_SESSION['name'] . '%"');
$roww = mysqli_fetch_array($querey1);
$id = $roww["TutorID"];




$querey = mysqli_query($conn, 'SELECT TutorClass FROM registered_tutors WHERE TutorID like "%'. $id . '%"');
$row = mysqli_fetch_array($querey);
$tc = $row["TutorClass"];





?>

@extends('app')

@section('content')



<div class="container">
    <div class="main-body">
		<div class="padding">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="UserImage" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?=$_SESSION['name']?></h4>
                      <p class="text-secondary mb-1">GibJohn Tutoring Tutor</p>
                      <a class="btn btn-info " target="__blank" href="tutordashboard.php">Go To your Tutor Dasahboard</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    Students under your Tutor Class of - <?=$tc = $row["TutorClass"]?> include: <br>
                  </div>
                  <div class="row">
                    <?php

$conn = mysqli_connect($servername, $username, $password, $dbname)
    or die("Sory connection not established.");

    $sql = 'SELECT * FROM registered_learners WHERE LearnerClass  like "%'. $tc . '%"';

    $query = mysqli_query($conn, $sql);

    echo "
    <table>
        <tr>
            <th>Learner ID</th>
            <th>Leaner Name</th>
            <th>Learner Age</th>
            <th>Class</th>
        </tr> ";
        
    
    while ($row = mysqli_fetch_array($query))
    {
        echo "<tr>
                <td> ". $row['LearnerID'] . "</td>
                <td> ". $row['LearnerFullname'] . "</td>
                <td> ". $row['LearnerDateOfBirth'] . "</td>
                <td> ". $row['LearnerClass'] . "</td>
            </tr>";

    }

    echo"<table>";
    ?>


`               </div>
              </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>


<div class="list-group">
  <button type="button" class="list-group-item list-group-item-action active">
    Cras justo odio
  </button>
  <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
  <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
  <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
  <button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum at eros</button>
</div>














@endsection