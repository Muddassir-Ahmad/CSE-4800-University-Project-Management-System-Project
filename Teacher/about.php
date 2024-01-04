<?php
session_start();
if (isset($_SESSION['student_id'])) {
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
    <title>UPMS-About</title>
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
</head>

<body>

    <!--------------------- NAVBAR ------------------------->

    <nav class="navbar sticky-top navbar-expand-lg navbar-warning bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand text-dark" href="index.php">
                <img src="img/logo.png" alt="" width="60" height="50">


                UPMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
            <a class="nav-link text-dark" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a hidden class="nav-link text-dark" href="../contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="logoutTeacher.php">Logout</a>
          </li>

        </ul>
                <form class="d-flex" action="search.php" method="post">

                    <input class="form-control me-2" type="search" name="search" placeholder="Search"
                        aria-label="Search" />
                    <button class="btn btn-outline-success" name="searchh " type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <!--------------------------- Headings ------------------->

    <hr class="p-3">

    <!--------------------------- Headings ------------------->
    <div class="about-section text-center ">
        <h1>Dedication</h1>
        <p>I dedicate the University Project Management System (UPMS) to my supervisor, whose guidance and support have been instrumental in bringing this project to fruition.

            Your expertise, knowledge, and encouragement have been invaluable in shaping this system and ensuring that it meets the needs of the academic community. Your constructive feedback and insights have been crucial in every stage of the project's development, from planning to execution.
            
            I am deeply grateful for your mentorship and leadership throughout this project, which has inspired me to strive for excellence and innovation.
            
            May this project serve as a testament to the impact of your mentorship and leadership, and may it contribute to the academic community's success for years to come.</p>

    </div>
    <hr class="p-3">
    

    <div class="about-section text-center ">
        <h1>About-UPMS</h1>
        <p>Managing projects in academic settings can be challenging, given the complexities involved. However, with UPMS, we aim to simplify the project management process and provide a comprehensive solution that streamlines communication, improves collaboration, and enables efficient project tracking.</p>

    </div>



    <hr class="p-2">

    <div class="row row-cols-1 row-cols-md-3 g-4 ml-5 justify-content-center">
        
        <div class="col">
            <div class="card">
                <h3 style="text-align:center">Supervisor</h3>
                <img src="../img/AAC.png" class="card-img-top w-50 h-50 rounded mx-auto mt-2" alt="AAC_photo">
                <div class="card-body">
                    <h5 class="card-title text-center">Adil Ahmed Chowdhury </h5>
                    <p class="card-text text-center">Lecturer,CSE Department</p>
                    <p class="card-text text-center">Leading University,Sylhet</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <h3 style="text-align:center">Co-Supervisor</h3>
                <img src="../img/teacher.png" class="card-img-top w-50 h-50 rounded mx-auto mt-2" alt="SMD_photo">
                <div class="card-body">
                    <h5 class="card-title text-center">Somapika Das</h5>
                    <p class="card-text text-center">Lecturer,CSE Department</p>
                    <p class="card-text text-center">Leading University,Sylhet</p>
                </div>
            </div>
        </div>
    </div>

    <hr class="p-2">

    <h2 class="text-center mt-3">Our Team</h2>
    <br>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center ">
        <div class="col col-lg-3">
            <div class="card">
                <img src="../img/muddassir.jpg" class="card-img-top w-50 h-50 rounded mx-auto mt-2" alt="muddassir_photo">
                <div class="card-body">
                    <h5 class="card-title text-center">Muddassir Ahmad</h5>
                    <p class="card-text text-center">Software developer</p>
                </div>
            </div>
        </div>
        <div class="col col-lg-3">
            <div class="card">
                <img src="../img/sadakat.jpeg" class="card-img-top w-50 h-50 rounded mx-auto mt-2" alt="sadakat_photo">
                <div class="card-body">
                    <h5 class="card-title text-center">Sadakat Muntasir Mahmud</h5>
                    <p class="card-text text-center">Software developer</p>
                </div>
            </div>
        </div>
        <div class="col col-lg-3">
            <div class="card">
                <img src="../img/jubayer.jpg" class="card-img-top w-50 h-50 rounded mx-auto mt-2" alt="jubayer_photo">
                <div class="card-body">
                    <h5 class="card-title text-center">Jubayer Ahmed</h5>
                    <p class="card-text text-center">Software developer</p>
                </div>
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