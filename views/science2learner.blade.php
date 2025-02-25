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
                        <h1>Science - Unit A2</h1>
                        Mendeleev's periodic table
                        Early attempts to classify elements
                        Before discovering protons, neutrons and electrons, scientists tried to classify the elements by arranging them in order of their atomic weights. The atomic weight of an element is equivalent to what we now call its relative atomic mass.

                        Early periodic tables were incomplete, since many elements were unknown. Also, some elements were placed in groups with elements that were not similar to them.

                        Dmitri Mendeleev
                        Dmitri Mendeleev was a Russian chemist. He wrote chemistry books and was looking for ways to organise the known elements. He published his first periodic table of the elements in 1869. In it, he arranged the elements in order of increasing atomic weights. He also took into account the properties of the elements and their compounds. This meant that his table:

                        had gaps in it
                        showed elements with similar chemical properties lined up in groups
                        However, from their atomic weights, some pairs of elements next to each other were in the wrong order.

                        Predictions using gaps
                       
                         Mendeleev left gaps in his table for elements not known at the time. By looking at the properties of the elements next to a gap, he could also predict the properties of these undiscovered elements. For example, Mendeleev predicted the existence of 'eka-silicon', which would fit into a gap below silicon. Another scientist later discovered the missing element, germanium. Its properties were found to be similar to the predicted ones and confirmed Mendeleev's periodic table.
                         <img src="science2learnerimage1.png" alt="scienceimage">
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>



@endsection