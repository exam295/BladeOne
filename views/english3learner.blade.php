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
                        <h1>English - Unit A3</h1>
                        Purpose and audience
                        When we talk about the purpose of a text, we are talking about what the writer wants to achieve. 
                        Writers use language and structural features to deliberately appeal to their intended audience.
                        <img src="english3learnerimage.png" alt="englishimage3" >
                        Think TAP.
                        A writer has an aim when writing a text - they want to have an effect on their reader.

A text can have many purposes. Some examples are to:

entertain – to amuse the reader or make them enjoy reading the text
persuade – to influence the viewpoint of the reader - these texts may be biased
advise – to help people decide what to do - these texts may give ideas and options
analyse – to break down something to help people to understand it better
argue – to make the case for something - these texts may be one-sided
describe – to give precise details about a person, place, object or experience
explain – to make clear ‘how’ and ‘why’ something works or happens in a certain way
inform – to tell a reader about something they don’t know, or add to their knowledge
instruct – to tell a reader how to do something, ordered step-by-step
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