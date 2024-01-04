<?php


include '../config.php';


session_start();
if (isset($_SESSION['short_name'])) {

  $l_short_name = $_SESSION['short_name'];
} else {
  echo "<script>alert('Please Login First')</script>";
  echo "<script>location.href='teacherLogin.html'</script>";
}
?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>UPMS-Profile</title>
  <link rel="stylesheet" href="../css/index.css">
  <!-- <link rel="stylesheet" href="./css/profile.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>

<body>
  <!--------------------- NAVBAR ------------------------->

  <nav class="navbar sticky-top navbar-expand-lg navbar-warning bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand text-dark" href="indexTeacher.php">
        <img src="img/logo.png" alt="" width="60" height="50">


        UPMS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon bg-dark"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-5">
          <li class="dropdown nav-item">
            <a class="nav-link text-dark" href="indexTeacher.php" class="dropbtn">Home</a>
            <div class="dropdown-content">
              <a href="teamCheck.php" target="_blank">Project Teams</a>
              <a href="student.php" target="_blank">Student</a>
              <a href="scheduleTeacher.php" target="_blank">Defence Schedule</a>
              <a href="noticeTeacher.php" target="_blank">Notice</a>
              <a href="../result.php" target="_blank">Result</a>
              <a href="reqTeacher.php" target="_blank">Project Requirement</a>


            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="profileTeacher.php">Profile</a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="teamCheck.php">Team</a>
          </li>
          <!-- <li class="nav-item">
                        <a class="nav-link text-dark" href="studentLogin.html">Login/Register</a>
                    </li> -->
          <li class="nav-item ">
          <a  class="nav-link text-dark" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a hidden class="nav-link text-dark" href="../contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="logoutTeacher.php">Logout</a>
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

  <!--------------------------- Headings ------------------->

  <!--  Teacher profile -->


  <?php


  include '../config.php';




  //   $name = $_REQUEST['username'];
  // $name = $_POST['l_username'];
  $allData = mysqli_query($conn, "SELECT * FROM `teacher_register` WHERE short_name='$l_short_name'");

  //   row akare data ashbe
  while ($row = mysqli_fetch_array($allData)) {
    echo "
    










<div class='container'>
    <div class='main-body'>
    
         
    
          <div class='row gutters-sm mt-5'>
            <div class='col-md-4 mb-3'>
              <div class='card'>
                <div class='card-body'>
                  <div class='d-flex flex-column align-items-center text-center'>
                    <img class='m-4' src='./$row[image]' alt='Student Photo' class='' width='250'>
                    <div class='mt-3'>
                      <h4>$row[name]</h4>
                    
                      
                     
                      <a href='uploadTeacher.php?id=$row[id]'><button class='btn btn-success'>Change photo</button></a>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class='col-md-8 mt-'>
              <div class='card mb-3'>
                <div class='card-body'>
                  <div class='row'>
                    <div class='col-sm-3'>
                      <h6 class='mb-0'>Full Name</h6>
                    </div>
                    <div class='col-sm-9 text-secondary'>
                    : $row[name]
                    </div>
                  </div>
                  <hr>
                  <div class='row'>
                    <div class='col-sm-3'>
                      <h6 class='mb-0'>Email</h6>
                    </div>
                    <div class='col-sm-9 text-secondary'>
                    : $row[email]
                    </div>
                  </div>
                  <hr>
                  <div class='row'>
                    <div class='col-sm-3'>
                      <h6 class='mb-0'>Short Name</h6>
                    </div>
                    <div class='col-sm-9 text-secondary'>
                    : $row[short_name]
                    </div>
                  </div>
                  <hr>
                  <div class='row'>
                    <div class='col-sm-3'>
                      <h6 class='mb-0'>Department</h6>
                    </div>
                    <div class='col-sm-9 text-secondary'>
                    : $row[department]
                    </div>
                  </div>
                  <hr>
                  <div class='row'>
                    <div class='col-sm-3'>
                      <h6 class='mb-0'>Designation</h6>
                    </div>
                    <div class='col-sm-9 text-secondary'>
                   : $row[designation]
                    </div>
                  </div>
                  <hr>
                  <div class='row'>
                    <div class='col-sm-3'>
                      <h6 class='mb-0'>Phone</h6>
                    </div>
                    <div class='col-sm-9 text-secondary'>
                    : $row[mobile]
                    </div>
                  </div>
                  <hr>

                  <div class='row'>
                    <div class='col-sm-12'>
                    <a href='teacherUpdate.php?id=$row[id]'><button class='btn btn-info px-4 ms-3'>Update Info</button></a>
                    
                    </div>
                  </div>
                </div>
              </div>

              



            </div>
          </div>

        </div>
    </div>


    ";
  }


  ?>

  <!-- footer start -->
  <div class="container-fluid mt-5" style="margin-left: -8px;">
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
        <p>copyright &copy;2023 UPMS. designed by <span>UPMS-Team</span></p>
      </div>
    </footer>
  </div>

  <!-- footer end -->








  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>