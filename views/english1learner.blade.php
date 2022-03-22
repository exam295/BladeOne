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
                        <h1>English - Unit A1</h1>
                        Critical essay - 
                        Analysis in critical reading
                        The following is a mind map charting areas for analysis in critical reading.
                        <img src="english1learnerimage.png" alt="UserImage">
                        <strong>Themes</strong>
                        Theme is not a technique as such, but rather the central idea or ideas explored and developed in the text.

                        Most texts will explore more than one theme, although they might not all be as significant as each other. Themes are developed through techniques.

                        For example, the themes explored in Macbeth include guilt, order/disorder and false appearance.

                        Plot refers to the deliberate sequencing of events in the text while the 'story' is simply an account of what happens.

Writers may play about with time scales, so a plot sequence may not be chronological (as it happens in real time). You should always ask yourself why a writer might have structured a story in sections. How does it add to your understanding of the story or themes?

Part of good storytelling is ensuring readers want to find out what happens next. Writers use different devices to maintain the reader's focus and attention.
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