<!-- <?php
session_start();
if(isset($_SESSION['username'])){


}
else{
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
    <title>User Home</title>
    <link rel="stylesheet" href="./css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>

<body>

    <!--------------------- NAVBAR ------------------------->

    <nav class="navbar sticky-top navbar-expand-lg navbar-warning bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand text-dark" href="index.php">
                <img src="img/logo.png" class="rounded-circle" alt="" width="60"
                    height="50" >
                    

                UPMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-dark"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-5">
                    <li class="nav-item ">
                        <a class="nav-link active text-dark" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="profileUser.php">Profile</a>
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
                    <button class="btn btn-outline-success" name="searchh "type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid mt-2">
        <div class="row border border-danger py-5 bg-dark">
            <div class="col-12">
                <h1 class="text-white text-center">Notice Board</h1>
                
            </div>
        </div>
    </div>

    <!-- Requirements -->
<div class="container-fluid">
<!-- <img class="img-fluid d-block m-auto " src="./img/notice.jpg" alt=""> -->
<?php
       include 'config.php';
       $sql="SELECT proposal from proposal";
       $query=mysqli_query($conn,$sql);

      // $allData = mysqli_query($conn,"SELECT proposal FROM `proposal`");

    //    $sql="SELECT proposal FROM `proposal`";
    //    $querry=mysqli_query($conn,$sql);
       while($info=mysqli_fetch_array($query)){

        ?>



        <embed  type="application/pdf" src="proposal/<?php echo $info['proposal'];?>" width="500" height="500">




        <?php
       }





    
          
    //    $select = mysqli_query($conn,"SELECT proposal FROM `proposal` "); 

      
    //    while($row = mysqli_fetch_object($select)){
    //     $pdf = $row->proposal;
    //     $filename = '/proposal' ;
       

     
       
    //    echo '<h1>Here is the information PDF</h1>';
    //    echo '<strong>File Name : </strong>'.$pdf;
    //    }

       // Add header to load pdf file
        // header('Content-type: application/pdf'); 
        // header('Content-Disposition: inline; filename="' .$pdf. '"'); 
        // header('Content-Transfer-Encoding: binary'); 
        // header('Accept-Ranges: bytes'); 
        // @readfile($filename); 

       
       ?>

       <!-- <br/><br/>
       <iframe src="<?php echo $pdf; ?>" width="90%" height="500px">
       </iframe> -->







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