<?php


// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	//header('Location: index.html');
	exit;
}


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
                        <h1>Maths - Unit A2</h1>
                        Standard Form - Standard form, or standard index form, is a system of writing numbers which can be particularly useful for working with very large or very small numbers. 
                        It is based on using powers of 10 to express how big or small a number is.
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/H3ewmorcYjU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          Scientists use standard form when working with the speed of light and distances between galaxies, which can be enormous. The size of bacteria or atoms may also be referred to in standard form as they are so tiny. Standard form is also sometimes referred to as scientific notation.
                          <strong>SRC: BBC Bitesize + Youtube</strong>
                 </div>
              </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>



@endsection