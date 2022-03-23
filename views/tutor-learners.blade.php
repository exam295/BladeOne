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

<div class="container bootstrap snippets bootdey">
    <div class="col-md-6">
        <div class="panel">
            <header class="panel-heading">
                goal progress
                <span class="tools pull-right">
                    <a href="#" class="fa fa-chevron-down"></a>
                    <a href="#" class="fa fa-times"></a>
                 </span>
            </header>
            <div class="panel-body">
                <ul class="goal-progress">
                    <li>
                        <div class="prog-avatar">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                        </div>
                        <div class="details">
                            <div class="title">
                                <a href="#"></a> - Project Lead
                            </div>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                    <span class="">70%</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="prog-avatar">
                            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="">
                        </div>
                        <div class="details">
                            <div class="title">
                                <a href="#">Cameron Doe</a> - Sales
                            </div>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 91%">
                                    <span class="">91%</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="prog-avatar">
                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                        </div>
                        <div class="details">
                            <div class="title">
                                <a href="#">Hoffman Doe</a> - Support
                            </div>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    <span class="">40%</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="prog-avatar">
                            <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="">
                        </div>
                        <div class="details">
                            <div class="title">
                                <a href="#">Jane Doe</a> - Marketing
                            </div>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                    <span class="">20%</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="prog-avatar">
                            <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="">
                        </div>
                        <div class="details">
                            <div class="title">
                                <a href="#">Hoffman Doe</a> - Support
                            </div>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                    <span class="">45%</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="text-center"><a href="#">View all Goals</a></div>
            </div>
        </div>
    </div>
</div>













@endsection