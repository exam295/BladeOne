<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	//header('Location: index.html');
	exit;
}
?>
<!-- this is the template part that extends that app.blade.php ( index basically, but mine is app instead )  -->
@extends('app')

@section('content')
<!-- This is the content part and this bit changes for each page. All content is between this section adn @endsection. -->


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
                        <h1>Maths - Unit A1</h1>
                        Pythagoras' theorem -
                        The longest side of a right-angled triangle is the hypotenuse. The hypotenuse is always opposite the right angle.
                        <img src="maths1learnerimage1.png" alt="UserImage">
                        Draw a square on each side of a right-angled triangle. Calculate the area of each square.
                        <img src="maths1learnerimage2.png" alt="UserImage">
                        Pythagoras' theorem states that, in any right-angled triangle, the square of the hypotenuse is equal to the sum of the squares on the other two sides.

                        If the sides of the right-angled triangle are labelled a, b and c  then Pythagoras' theorem states: a2 + b2 = c2
                        <img src="maths1learnerimage3.png" alt="UserImage">
                        <strong>SRC: BBC Bitesize</strong>
                 </div>
              </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>

<!-- This is  all the html for the bootstrap template. This is Maths 1 Unit A1. -->


@endsection