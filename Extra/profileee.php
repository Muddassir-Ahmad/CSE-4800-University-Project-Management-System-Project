<!-- <?php
session_start();
if (isset($_SESSION['username'])) {


} else {
  echo "<script>alert('dont access from url')</script>";
  echo "<script>location.href='login.html'</script>";
}


?> -->

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Profile</title>
  <link rel="stylesheet" href="./css/index.css">
  <!-- <link rel="stylesheet" href="./css/profile.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>

<body>

  <!--------------------- NAVBAR ------------------------->

  <nav class="navbar sticky-top navbar-expand-lg navbar-warning bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand text-dark" href="index.php">
        <img src="img/logo.png" class="rounded-circle" alt="" width="60" height="50">


        UPMS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon bg-dark"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-5">
          <li class="nav-item ">
            <a class="nav-link active text-dark" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="profile.php">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="studentLogin.html">Login/Register</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-dark" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="contact.html">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="logout.php">Logout</a>
          </li>

        </ul>
        <form class="d-flex" action="search.php" method="post">

          <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-success" name="searchh " type="submit">
            Search
          </button>
        </form>
      </div>
    </div>
  </nav>


  <!-- profile -->

  <div class="container">
    <div class="main-body">

      <!-- Breadcrumb -->
      <!-- <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav> -->
      <!-- /Breadcrumb -->

      <div class=" row justify-content-center">

        <div class="col-lg-4 col-md-8 mt-1">

          <div class="card mt-3">
            <div class="card-body">
              <div class="d-flex  flex-column align-items-center text-center p-1">
                <img src="image/jubayer.jpg" alt="Student Photo" class="" width="150 ">
                <div class="mt-3">
                  <h4>Jubayer Ahmed</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class=" row justify-content-center">
      <div class=" col-lg-6 col-md-8 mt-1 ">
        <div class="card mb-3">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Full Name</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                Jubayer Ahmed
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Email</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                cse_1912020257@gmail.com
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">ID</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                01792586428
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Department</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                01792586428
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Batch</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                Sylhet
              </div>
            </div>
            
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Section</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                Sylhet
              </div>
            </div>
            <hr>
          
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Phone</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                Sylhet
              </div>
            </div>
            <hr>
            <div class="row ">
              <div class="col-lg-8 col-sm-12 ">
                <a class="btn btn-info  mx-2  " target="__blank" href="#">Edit</a>
                <a class="btn btn-info mx-2 " target="__blank" href="#">Upload Photo</a>

              </div>
            </div>
          </div>
        </div>





      </div>
    </div>




  </div>
  </div>




  <!-- footer -->
  <div class="container-fluid mt-5">
    <footer>
      <div class="footer-content">
        <h3>University Project Management System</h3>
        <p>We are dedicated to make project management much easier and comfortable</p>
        <ul class="socials">
          <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-google"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
        </ul>
      </div>
      <div class="footer-bottom">
        <p>copyright &copy;2022 UPMS. designed by <span>UPMS-Team</span></p>
      </div>
    </footer>
  </div>







  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
</body>

</html>