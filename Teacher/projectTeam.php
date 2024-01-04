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
    <title>UPMS-Project Team</title>
    <link rel="stylesheet" href="../css/index.css">
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
                <img src="img/logo.png" class="rounded-circle" alt="" width="60" height="50">


                UPMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-dark"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-5">
                    <li class="nav-item ">
                        <a class="nav-link active text-dark" aria-current="page" href="indexTeacher.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="profileTeacher.php">Profile</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="teamCheck.php.php">Team</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link text-dark" href="studentLogin.html">Login/Register</a>
                    </li> -->
                    <li class="nav-item ">
                    <a  class="nav-link text-dark" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a hidden class="nav-link text-dark" href="contact.html">Contact</a>
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

    <!-- session -->

    <!-- session end -->



    <div class="container-fluid mt-2">
        <div class="row  py-2 bg-success">
            <div class="col-12">
                <h1 class="text-white text-center">Teams Under Supervision (CSE-3300)</h1>

            </div>
        </div>
    </div>

    <!-- database theke fetching data -->
    <?php


    include '../config.php';




    //   $name = $_REQUEST['username'];
    // $name = $_POST['l_username'];
    $allData = mysqli_query($conn, "SELECT * FROM `proposal` WHERE assigned='$l_short_name' And project_code='CSE-3300' ");

    //   row akare data ashbe
    while ($row = mysqli_fetch_array($allData)) {
        echo "
    


              <!--------------------------------- Project Details---------------------------------->

              <div class='container-fluid mt-5 mb-5'>

              <div class='row d-flex justify-content-center '>
                  
                  <div class='col-md-7'>
                      
                      <div class='card p-0 py-0 bg-'>
                          
                          <div class='text-center'>
                            
                            
                            <div class='card-img-top justify-content-center  m-auto mt-4 '
                          style='width: ;height: ;  '>
                          <!-- image chilo -->
                         
                        </div>
                          </div>
                          
                          <div class='text-center mt-3'>
                              
                              
      
                              <h3 class='d-inline-block mt-2 mb-3 mb-0 text-uppercase text-Dark'>Project Name : </h3> <span class='text-danger fs-1'>$row[p_name]</span><br>
                              
                              
                           
                              <h4 class='d-inline-block m-2 text-uppercase text-Dark'>Supervisor : </h4><span class='text-danger fs-2 '>$row[assigned]</span><br><hr>
                              <h3>Team Details </h3>
                            






                              <table class='table table-hover table-active'>
  
  <thead>
    <tr>
      <!--- <th scope='col'>#</th> --->
      <th class='fs-4' scope='col'>Id</th>
      <th class='fs-4' scope='col'>Name</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
    <!--- <th scope='row'>1</th> --->
      <td class='fs-4'>$row[s1_id]</td>
      <td class='fs-4'>$row[s1_name]</td>
     
    </tr>
    <tr>
    <!---  <th scope='row'>2</th>--->
    <td class='fs-4'>$row[s2_id]</td>
    <td class='fs-4'>$row[s2_name]</td>
      
    </tr>
    <tr>
    <!---   <th scope='row'>3</th> --->
    <td class='fs-4'>$row[s3_id]</td>
    <td class='fs-4'>$row[s3_name]</td>
    
    </tr>
    <tr>
    <!---   <th scope='row'>3</th> --->
    <td class='fs-4'>$row[s4_id]</td>
    <td class='fs-4'>$row[s4_name]</td>
    </tr>
  </tbody>
</table>



                              
                              
                              
                              
                              <div class='buttons m-5'>
                               
                              <a href='edituser.php? id=$row[id]'><button class='btn btn-outline-primary px-4'>Edit Proposal</button></a>
                                  <a href='upload.php?id=$row[id]'><button class='btn btn-info px-4 ms-3'>Proposal</button></a>
                                  
                               
                              </div>
                              
                              
                          </div>
                          
                         
                          
                          
                      </div>
                      
                  </div>
                  
              </div>
              
          </div>
      


              <!--- TRY1 END --->
         
              
          ";

    }


    ?>


    <!------------------------------------------------------------------4th YEAR TEAMS---------------------------------->


    <div class="container-fluid mt-2">
        <div class="row  py-2 bg-success">
            <div class="col-12">
                <h1 class="text-white text-center">Teams Under Supervision (CSE-4800)</h1>

            </div>
        </div>
    </div>

    <!-- database theke fetching data -->
    <?php


    include '../config.php';




    //   $name = $_REQUEST['username'];
    // $name = $_POST['l_username'];
    $allData = mysqli_query($conn, "SELECT * FROM `proposal` WHERE assigned='$l_short_name' And project_code='CSE-4800' ");

    //   row akare data ashbe
    while ($row = mysqli_fetch_array($allData)) {
        echo "
    


              <!--------------------------------- Project Details---------------------------------->

              <div class='container-fluid mt-5 mb-5'>

              <div class='row d-flex justify-content-center '>
                  
                  <div class='col-md-7'>
                      
                      <div class='card p-0 py-0 bg-'>
                          
                          <div class='text-center'>
                            
                            
                            <div class='card-img-top justify-content-center  m-auto mt-4 '
                          style='width: ;height: ;  '>
                          <!-- image chilo -->
                         
                        </div>
                          </div>
                          
                          <div class='text-center mt-3'>
                              
                              
      
                              <h3 class='d-inline-block mt-2 mb-3 mb-0 text-uppercase text-Dark'>Project Name : </h3> <span class='text-danger fs-1'>$row[p_name]</span><br>
                              
                              
                           
                              <h4 class='d-inline-block m-2 text-uppercase text-Dark'>Supervisor : </h4><span class='text-danger fs-2 '>$row[assigned]</span><br><hr>
                              <h3>Team Details </h3>
                            






                              <table class='table table-hover table-active'>
  
  <thead>
    <tr>
      <!--- <th scope='col'>#</th> --->
      <th class='fs-4' scope='col'>Id</th>
      <th class='fs-4' scope='col'>Name</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
    <!--- <th scope='row'>1</th> --->
      <td class='fs-4'>$row[s1_id]</td>
      <td class='fs-4'>$row[s1_name]</td>
     
    </tr>
    <tr>
    <!---  <th scope='row'>2</th>--->
    <td class='fs-4'>$row[s2_id]</td>
    <td class='fs-4'>$row[s2_name]</td>
      
    </tr>
    <tr>
    <!---   <th scope='row'>3</th> --->
    <td class='fs-4'>$row[s3_id]</td>
    <td class='fs-4'>$row[s3_name]</td>
    
    </tr>
    <tr>
    <!---   <th scope='row'>3</th> --->
    <td class='fs-4'>$row[s4_id]</td>
    <td class='fs-4'>$row[s4_name]</td>
    </tr>
  </tbody>
</table>



                              
                              
                              
                              
                              <div class='buttons m-5'>
                               
                              <a href='edituser.php? id=$row[id]'><button class='btn btn-outline-primary px-4'>Edit Proposal</button></a>
                                  <a href='upload.php?id=$row[id]'><button class='btn btn-info px-4 ms-3'>Proposal</button></a>
                                  
                               
                              </div>
                              
                              
                          </div>
                          
                         
                          
                          
                      </div>
                      
                  </div>
                  
              </div>
              
          </div>
      


              <!--- TRY1 END --->
         
              
          ";

    }


    ?>


    <!-------------------------------4th YEAR TEAM END-------------------------------------------->





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