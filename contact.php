<?php
session_start();
if (isset($_SESSION['student_id'])) {
} else {
    echo "<script>alert('Please Login First')</script>";
    echo "<script>location.href='studentLogin.html'</script>";
}


?>


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UPMS-Contact</title>
    <link rel="stylesheet" href="./css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>

<body>

    <!--------------------- NAVBAR ------------------------->

    <nav class="navbar sticky-top navbar-expand-lg navbar-warning bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand text-dark" href="index.php">
                <img src="img/logo.png"  alt="" width="60" height="50">


                UPMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-dark"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-5">

                    <li class="dropdown nav-item">
                        <a class="nav-link text-dark" href="index.php" class="dropbtn">Home</a>
                        <div class="dropdown-content">
                            <a href="proposal.php" target="_blank">Project Proposal</a>
                            <a href="teacher.php" target="_blank">Teachers</a>
                            <a href="schedule.php" target="_blank">Defence Schedule</a>
                            <a href="notice.php" target="_blank">Notice</a>
                            <a href="result.php" target="_blank">Result</a>
                            <a href="reqs.php" target="_blank">Project Requirement</a>


                        </div>
                    </li>
                    <!-- <li class="nav-item ">
                        <a class="nav-link active text-dark" aria-current="page" href="index.php">Home</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="profile.php">Profile</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="project.php">Project</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link text-dark" href="studentLogin.html">Login/Register</a>
                    </li> -->
                    <li class="nav-item ">
                        <a class="nav-link text-dark" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="logout.php">Logout</a>
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


    <!-- Contact us -->
    <div class="container-fluid">
        <div class="text-center mt-5" style="padding:2vw;background-color: #C7C8C9;">
            <h1 class="text-black">Contact With Us</h1>
        </div>
    </div>

    <div class="container ">
        <div class="row mt-5 mb-5">
            <div class="">
                <h1 class="text-center" style="color:rgb(18, 18, 52) ;">Contact Information</h1>
            </div>
        </div>
        <!-- <div class="row">
            <div class="">
                <p class="text-center" style="color:rgb(18, 18, 52) ;">Contact with us
                </p>
            </div>
        </div> -->

    </div>

    <!-------------------- Contact info ----------->
    <div class="container mt-5 mb-5">
        <div class="row ">
            <div class="col-lg-4 col-md-12">
                <div class="card shadow-lg">
                    <div class="card-img-top justify-content-center  m-auto mt-4 " style="width: 15vw;height: 15vw;  ">
                        <img class="img-fluid w-100 h-100" src="img/address.jpeg" alt="">
                    </div>
                    <i class="fa-solid fa-mailbox"></i>
                    <div class="card-body">
                        <h5 class="card-title text-center">Address</h5>
                        <p class="card-text text-center">Lamabazar,Sylhet <br>Bangladesh</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card shadow-lg">
                    <div class="card-img-top justify-content-center  m-auto mt-4 " style="width: 15vw;height: 15vw;  ">
                        <img class="img-fluid w-100 h-100" src="img/mail.jpeg" alt="">
                    </div>
                    <i class="fa-solid fa-mailbox"></i>
                    <div class="card-body">
                        <h5 class="card-title text-center">Email Info</h5>
                        <p class="card-text text-center"> upmssylhet@gmail.com <br>upmsadmin@gmail.com </p>


                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card shadow-lg">
                    <div class="card-img-top justify-content-center  m-auto mt-4" style="width: 15vw;height: 15vw; ">
                        <img class="img-fluid w-100 h-100" src="img/phone.jpeg" alt="">
                    </div>
                    <i class="fa-solid fa-mailbox"></i>
                    <div class="card-body">
                        <h5 class="card-title text-center">Phone Number</h5>
                        <p class="card-text text-center">017-00000000 <br> 019-00000000</p>


                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Customer feedback -->
    <div class="container ">
        <div class="row mt-5 mb-2">
            <div class="">
                <h1 class="text-center mt-5" style="color:rgb(18, 18, 52) ;">Feedback</h1>
            </div>


        </div>
    </div>
    <div class="container  m-auto p-5 shadow-lg mb-5">
        <form action="feedbackAction.php" method="post">
            <div class="p-2 row">
                <div class="col-lg-6 col-md-6">

                    <input class="d-block m-auto px-5 rounded" style="width: 30rem; height: 3rem;" placeholder="Name"
                        type="text" name="name" id="">
                </div>
                <div class="col-lg-6 col-md-6">
                    <input class="d-block m-auto px-5 rounded" style="width: 30rem; height: 3rem;" type="text"
                        placeholder="Email" name="email" id="">
                </div>
            </div>
            <div class="p-2 row">
                <div class="col-lg-6 col-md-6">
                    <input class="d-block m-auto px-5 rounded" style="width: 30rem; height: 3rem;" placeholder="Phone"
                        type="text" name="phone" id="">
                </div>
                <div class="col-lg-6 col-md-6">
                    <input class="d-block m-auto px-5 rounded" style="width: 30rem; height: 3rem;" type="text"
                        placeholder="Subject" name="subject" id="">
                </div>
            </div>
            <div class="p-2 row">
                <div class="col-lg-12 col-md-6">
                    <input class="d-block m-auto px-5 rounded" style="width:73vw; height: 10vw;" type="text"
                        placeholder="Details" name="details" id="">

                </div>
            </div>
            <div class="p-2 row">
                <div class="col-lg-12 col-md-6">

                    <button class="btn btn-secondary d-block m-auto px-5 rounded">Submit</button>
                </div>

            </div>
        </form>
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