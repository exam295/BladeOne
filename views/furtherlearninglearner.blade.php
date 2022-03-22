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
@extends('app')


@section('content')

<h1>Further Learning Resources</h1>


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
                        <h1><a href="https://www.bbc.co.uk/bitesize"> BBC Bitesize</a></h1>
                        <img src="bbcbitesizefurtherlearning.png" alt="BBC Bite-sizeimage">
                    </div>
                      <div class="row">
                        <h1><a href="https://www.khanacademy.org/"> Khan Academy</a></h1>
                        <img src="khanacademyfurtherlearning.png" alt="Khan Academy image">
                      </div>
                      <div class="row">
                        <h1><a href="https://vle.mathswatch.co.uk/vle/"> MathsWatch</a></h1>
                        <img src="mathswatchfurtherlearning.png" alt="MathsWatch image">
                      </div>
                      <div class="row">
                        <h1><a href="https://nrich.maths.org/"> Nrich Maths</a></h1>
                        <img src="nrichmaths.png" alt="Khan Academy image">
                      </div>
                      <div class="row">
                       Video 1 :
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/JH9V3bWA1T0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                      <div class="row">
                        Video 2 : 
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/JH9V3bWA1T0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
</div>




@endsection