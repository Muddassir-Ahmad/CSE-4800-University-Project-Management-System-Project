<?php
session_start();
if (isset($_SESSION['short_name'])) {
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
    <title>UPMS-Schedule</title>
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">


    <style>
.name{
    padding: 12px;
    font-weight: bold;
    font-size: 16px;
    text-transform: uppercase;
    font-family: sans-serif;
  }


.tim{
    clip-path: circle();
    display: block;
  margin-left: auto;
  margin-right: auto;
}
.center{
    display: flex;
    justify-content: center;
    align-items: center;
    max-height: 500px;
    padding: 10px;
    margin-bottom: 10px;
    margin-top: 10px;
}


    </style>
</head>

<body >
      <!--------------------- NAVBAR ------------------------->

    <nav class="navbar sticky-top navbar-expand-lg navbar-warning bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand text-dark" href="indexTeacher.php">
                <img src="img/logo.png"alt="" width="60" height="50">


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


    
    <!-- Teachers -->

    <div class="container-fluid mt-2">
        <div class="row border border-danger py-5 bg-dark">
            <div class="col-12">
                <h1 class="text-white text-center">Defence Schedule</h1>
            </div>
        </div>
    </div>




    <div class="container mt-2">
        <div class="card text-center mb-2">
            <div class="card-header bg-success text-white">
                Schedule
            </div>
            <div class="card-body bg-i">
                <h5 class="card-title">3<sup>rd</sup> year | CSE-3300</h5>
                <p class="card-text">Check Your 3<sup>rd</sup> Year Defence Schedule Here </p>
                <a href="https://drive.google.com/file/d/1VInJim5OK_XX4N-yJsecVZySc-PP6wVx/view"
                    class="btn btn-danger">Schedule</a>
            </div>
            <div class="card-footer text-muted">
                Updated 2 days ago
            </div>
        </div>

        <div class="card text-center">
            <div class="card-header bg-success text-white">
                Schedule
            </div>
            <div class="card-body bg-white">
                <h5 class="card-title">4<sup>th</sup> year | CSE-4800</h5>
                <p class="card-text">Check Your 4<sup>th</sup> Year Defence Schedule Here</p>
                <a href="https://drive.google.com/file/d/1RQRGUkWaMRGHC9TPpMANiSxAFfr9g3rL/view"
                    class="btn btn-danger">Schedule</a>
            </div>
            <div class="card-footer text-muted">
                Updated 2 days ago
            </div>
        </div>

        <div class="card text-center">
            <div class="card-header bg-success text-white">
                Schedule
            </div>
            <div class="card-body bg-white">
                <h5 class="card-title">4<sup>th</sup> year | CSE-4801</h5>
                <p class="card-text">Check Your 4<sup>th</sup> Year Defence Schedule Here</p>
                <a href="https://drive.google.com/file/d/1hi9d82INjo0l9XKFMRvK2XT5xPF5a3u1/view"
                    class="btn btn-danger">Schedule</a>
                <!-- <a href="https://drive.google.com/file/d/1VFyPXqIzWSkt3ZUUaOGWhiJhCozH4OIc/view"
                    class="btn btn-danger">Schedule</a> -->

            </div>
            <div class="card-footer text-muted">
                Updated 2 days ago
            </div>
        </div>

    </div>







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







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>

</html>