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
                        <h1>English Unit - A2</h1>
                        Annotating texts-
                        Annotating is a useful way to keep a track of what you notice while you’re reading – the notes and marks you make can focus on particular details in the text. For example, if you were focusing on setting, you could circle all the words and phrases used to describe that place.

                        There are many ways to annotate texts. Try out different approaches to see what works best for you. Examples of common techniques include:

                        circling or underlining words or phrases that are interesting or important and writing notes in the margin
                        using different coloured highlighters to pick out different ideas, techniques or details
                        using one margin to make a note of literary devices and the other margin to add your own responses
                        Closely annotating texts is an effective way to practise analysing a piece of fiction.

                        However, in exam conditions, annotations need to be brief and a quick way of responding to a new text. You can use your annotations to pick out details from the text and then develop your analysis of these details in your written response.
                        <img src="english2learnerimage1.png" alt="UserImage">
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