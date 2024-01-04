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
    <title>UPMS-Home</title>
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">




</head>

<body>

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
                        <!-- <div class="dropdown-content">
                            <a href="teamCheck.php" target="_blank">Project Teams</a>
                            <a href="student.php" target="_blank">Student</a>
                            <a href="scheduleTeacher.php" target="_blank">Defence Schedule</a>
                            <a href="noticeTeacher.php" target="_blank">Notice</a>
                            <a href="../result.php" target="_blank">Result</a>
                            <a href="reqTeacher.php" target="_blank">Project Requirement</a>


                        </div> -->
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


    <!------------------------------ Categories -------------------------------->
    <div class="container justify-content-center border-dark mt-5">

        <div class="row mb-5">
            <div class="col-lg-4 col-md-12">
                <div class="card shadow-lg ">
                    <a href="teamCheck.php" class="text-decoration-none text-dark">
                        <div class="d-flex">
                            <img class="card-img-top m-5" style="width: 10vw;height: 10vw;" src="./img/project4.png" alt="Card image cap">
                            <div class="card-body m-auto">
                                <h3 class="card-title">Project Teams</h3>
                                <!-- <p class="card-text">100 listing</p> -->
                                <!-- <a href="medication.php" class="btn btn-primary">Get service</a> -->
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="card shadow-lg ">
                    <a href="student.php" class="text-decoration-none text-dark">
                        <div class="d-flex">
                            <img class="card-img-top m-5" style="width: 10vw;height: 10vw;" src="./img/student.png" alt="Card image cap">
                            <div class="card-body m-auto">
                                <h3 class="card-title">Student</h3>
                                <!-- <p class="card-text">100 listing</p> -->
                                <!-- <a href="medication.php" class="btn btn-primary">Get service</a> -->
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card shadow-lg ">
                    <a href="scheduleTeacher.php" class="text-decoration-none text-dark">
                        <div class="d-flex">
                            <img class="card-img-top m-5" style="width: 10vw;height: 10vw;" src="./img/schedule.png" alt="Card image cap">
                            <div class="card-body m-auto">
                                <h3 class="card-title">Defence Schedule</h3>
                                <!-- <p class="card-text">100 listing</p> -->
                                <!-- <a href="medication.php" class="btn btn-primary">Get service</a> -->
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- row 2 -->
        <div class="row mb-5">
            <div class="col-lg-4 col-md-12">
                <div class="card shadow-lg ">
                    <a href="noticeTeacher.php" class="text-decoration-none text-dark">
                        <div class="d-flex">
                            <img class="card-img-top m-5" style="width: 10vw;height: 10vw;" src="./img/notice.png" alt="Card image cap">
                            <div class="card-body m-auto">
                                <h3 class="card-title">Notice</h3>
                                <!-- <p class="card-text">100 listing</p> -->
                                <!-- <a href="medication.php" class="btn btn-primary">Get service</a> -->
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="card shadow-lg ">
                    <a href="../result.php" class="text-decoration-none text-dark">
                        <div class="d-flex">
                            <img class="card-img-top m-5" style="width: 10vw;height: 10vw;" src="./img/result.png" alt="Card image cap">
                            <div class="card-body m-auto">
                                <h3 class="card-title">Result</h3>
                                <!-- <p class="card-text">100 listing</p> -->
                                <!-- <a href="medication.php" class="btn btn-primary">Get service</a> -->
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card shadow-lg ">
                    <a href="reqTeacher.php" class="text-decoration-none text-dark">
                        <div class="d-flex">
                            <img class="card-img-top m-5" style="width: 10vw;height: 10vw;" src="./img/requirement.png" alt="Card image cap">
                            <div class="card-body m-auto">
                                <h4 class="card-title">Project Requirement</h4>
                                <!-- <p class="card-text">100 listing</p> -->
                                <!-- <a href="medication.php" class="btn btn-primary">Get service</a> -->
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-lg-12 col-md-12  ">
                
                <a href="allcategory.php" class="btn btn-danger d-block m-auto p-3" >View All Categories</a>

            </div>
        </div> -->




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








    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>