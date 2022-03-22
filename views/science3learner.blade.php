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
                        <h1>Science - Unit A3</h1>
                        Nanoparticles
                        Nanoscience is the study of structures that are between 1 and 100 nanometres (nm) in size. Most nanoparticles are made up of a few hundred atoms.

                        Comparing sizes
                        The table shows the sizes of nanoparticles compared to other types of particles.
                        Worked example
                        A zinc oxide nanoparticle has a diameter of 32 nm. The diameter of a zinc atom is 0.28 nm. Estimate how many times larger the nanoparticle is compared to a zinc atom.

                        Worked example answer
                        Round each number to 1 significant figure:

                        30 nm and 0.3 nm

                        Number of times larger ≈ 30/0.3  = 100
                        Surface area to volume ratios
                        Nanoparticles have very large surface area to volume ratios compared to the same material in bulk, as powders, lumps or sheets.

                        For a solid, the smaller its particles, the greater the surface area to volume ratio. If the length of the side of a cube gets 10 times smaller, the surface area to volume ratio gets 10 times bigger.
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/70dOzvhn-8M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                       
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