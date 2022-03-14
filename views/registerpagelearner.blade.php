<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/site.css">
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="gibjohn.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill"> 
    </a>
    <a class="navbar-brand" href="javascript:void(0)">GibJohn Tutoring &copy;</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="test.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registerpage.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="loginpage.php">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form - Learner</h3>
            <form action="php/register-action-learner.php" method="POST">
              <div class="row">
                <div class="col-md-12 mb-8">
                  <div class="form-outline">
                    <input type="text" name="fullname" id="fullname" class="form-control form-control-lg" Placeholder="Full Name"/>
                    <label class="form-label" for="fullname" >Full Name</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">
                  <div class="form-outline datepicker w-100">
                  <div class="form-outline">
                    <input type="number" id="age" name="age" class="form-control form-control-lg" placeholder="Age"/>
                    <label class="form-label" for="age">Age</label>
                </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <h6 class="mb-2 pb-1">Gender: </h6>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      id="gender"
                      name="gender"
                      value="female"
                      checked
                    />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      id="gender"
                      name="gender"
                      value="male"
                    />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      id="gender"
                      name="gender"
                      value="other"
                    />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                    <input type="email" id="emailaddress" name="email" class="form-control form-control-lg" placeholder="example@example.com"/>
                    <label class="form-label" for="emailaddress">Email Address</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                    <input type="number" id="phonenumber" name="phonenumber" class="form-control form-control-lg" placeholder="07887634567" />
                    <label class="form-label" for="phonenumber">Phone Number</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                    <input type="text" id="username" name="username" class="form-control form-control-lg" placeholder="Username" />
                    <label class="form-label" for="username">Username</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                    <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password"/>
                    <label class="form-label" for="password">Password</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <select class="select form-control-lg" id="class" name="class">
                    <option value="0" disabled>Choose Class</option>
                    <option value="1" id="c2">Class 1</option>
                    <option value="2" id="c2">Class 2</option>
                    <option value="3"id="c3">Class 3</option>
                  </select>
                  <label class="form-label select-label">Choose Class</label>
                </div>
              </div>
              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                Or if you already have an account log in here ->
                <a href="loginpagelearner.php" type="button" class="btn btn-outline-primary btn-lrg">Log in</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<div class="foot"><footer class="page-footer font-small stylish-color-dark pt-4">
<!-- Footer Links -->
<div class="container text-center text-md-left">
  <!-- Grid row -->
  <div class="row">
    <!-- Grid column -->
    <div class="col-md-4 mx-auto">
      <!-- Content -->
      <h5 class="font-weight-bold text-uppercase mt-3 mb-4">GibJohn Tutoring</h5>
      <p>Thanks for Visiting our website! Us at GibJohn Tutoring are passionate 
          about an exellent user experience whilst using our site, get in contact with us
           here if the site is not to your satisfaction!</p>
    </div>
    <!-- Grid column -->
    <hr class="clearfix w-100 d-md-none">
    <!-- Grid column -->
    <div class="col-md-2 mx-auto">
      <!-- Links -->
      <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contact Us</h5>
      <ul class="list-unstyled">
        <li>
          <a> Email:
              <strong>GibJohnT@gmail.com</strong></a>
        </li>
            <br>
        <li>
          <a>Tel:
              <strong>07887123456</strong></a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->
    <hr class="clearfix w-100 d-md-none">
    <!-- Grid column -->
    <div class="col-md-2 mx-auto">

      <!-- Links -->
      <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Social Media</h5>

      <ul class="list-unstyled">
        <li>
          <a href="#!">Instagram <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg></a>
        </li>
        <li>
          <a href="#!">Facebook <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg></a>
        </li>
        <li>
          <a href="#!">LinkedIn <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
</svg></a>
        </li>
        <li>
          <a href="#!">Twitter <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg></a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->
    <hr class="clearfix w-100 d-md-none">
    <!-- Grid column -->
    <div class="col-md-2 mx-auto">
      <!-- Links -->
      <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Other sites</h5>
      <ul class="list-unstyled">
        <li>
          <a href="#!">BBC Bitesize</a>
        </li>
        <li>
          <a href="#!">Mathstwatch</a>
        </li>
        <li>
          <a href="#!">KhanAcademy</a>
        </li>
        <li>
          <a href="#!">Kahoot</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->
  </div>
  <!-- Grid row -->
</div>
<!-- Footer Links -->
<hr>
<!-- Call to action -->
<ul class="list-unstyled list-inline text-center py-2">
  <li class="list-inline-item">
    <h5 class="mb-1">Register for free</h5>
  </li>
  <li class="list-inline-item">
    <a href="#!" class="btn btn-light btn-rounded">Register Here!</a>
  </li>
</ul>
<!-- Call to action -->
<hr>
<!-- Social buttons -->
<!-- Social buttons -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2022 Copyright:
  <a href=""> GibJohnTutoring.com</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
</div>




</body>
</html>




