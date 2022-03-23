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


<style>
a{
    text-decoration: none;
}


.img-thumbnail {
    width:10%;
    height: 20px;
}
</style>

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
                      <p class="text-secondary mb-1">GibJohn Tutoring Learner</p>
                      <a class="btn btn-info " target="__blank" href="learnerdashboard.php">Go To your Learner Dasahboard</a>
                    </div>
                  </div>
                </div>
              </div>        
</div>
<div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                        <h1>This is your Student Overview.</h1>

                        <h2> Click on a student to get more information</h2>
                   </div>
                </div>
             </div>
</div>
            
  <button type="button" class="list-group-item list-group-item-action">
      STUDENT 1
  <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
</div></a>
<button type="button" class="list-group-item list-group-item-action">
STUDENT 2
  <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div></a>
<button type="button" class="list-group-item list-group-item-action">
STUDENT 3
  <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div></a>
<button type="button" class="list-group-item list-group-item-action">
STUDENT5
  <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div></a>
                 </div>
              </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>



@endsection