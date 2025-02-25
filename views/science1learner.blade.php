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
                        <h1>Science - Unit A1</h1>
                        Blood transports materials and heat around the body and helps to protect against disease. It contains:
                        plasma
                        red blood cells
                        white blood cells
                        platelets
                        Plasma is a straw-coloured liquid that makes up just over half the volume of blood.
                        <img src="science1learnerimage.png" alt="UserImage">
                        Red Blood Cells - contain haemoglobin - a red protein that combines with oxygen
                        they have no nucleus so they can contain more haemoglobin
                        small and flexible so that they can fit through narrow blood vessels
                        their job is to transport oxygen.
                        <img src="science1learnerimage2.png" alt="redbloodcells">
                        <strong>SRC: BBC Bitesize</strong>
                 </div>
              </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>



@endsection