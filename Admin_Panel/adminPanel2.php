<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags for character set, viewport, and title -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UPMS-Admin Panel</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!-- Custom CSS (if any) -->
    <link rel="stylesheet" href="../css/vnab.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">

    <!-- Custom Styles (if needed) -->
    <style>
        form {
            background: #fff;
            padding: 15px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 10px;
        }
    </style>

</head>

<body>

    <!-- Responsive container to control width -->
    <div class="container-fluid justify-content-center border-dark mt-5">

        <!-- Bootstrap row for layout -->
        <div class="row mt-5">
            <div class="col-lg-2 col-md-12">

                <!-- Main Navigation -->
                <header>
                    <!-- Sidebar -->
                    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
                        <div class="position-sticky">
                            <div class="list-group list-group-flush mx-3 mt-4">
                                <!-- Navigation links with Bootstrap styling -->
                                <a href="adminPanel2.php" class="list-group-item list-group-item-action py-2 ripple"
                                    aria-current="true">
                                    <i class="fas fa-tachometer-alt fa-fw fa-spin me-3"></i><span>Admin Home</span>
                                </a>
                                <a href="teacherData.php" class="list-group-item list-group-item-action py-2 ">
                                    <i class="fas fa-chair fa-spin me-3"></i><span>Upload Chair</span>
                                </a>
                                <a href="studentData.php" class="list-group-item list-group-item-action py-2 ripple"><i
                                        class="fas fa-bed fa-spin me-3"></i><span>Upload Bed</span></a>
                                <a href="proposalData.php" class="list-group-item list-group-item-action py-2 ripple"><i
                                        class="fas fa-table fa-spin me-3"></i><span>Upload Table</span></a>
                                <a href="supervisors.php" class="list-group-item list-group-item-action py-2 ripple">
                                    <i class="fa-solid fa-couch fa-spin me-3"></i><span>Upload Furniture</span>
                                </a>
                                <a href="feedback.php" class="list-group-item list-group-item-action py-2 ripple"><i
                                        class="fas fa-chart-bar fa-fw me-3"></i><span>Upload Factory</span></a>
                                <a href="assignSupervisor.php"
                                    class="list-group-item list-group-item-action py-2 ripple"><i 
                                    class="fa-solid fa-magnifying-glass fa-spin me-3"></i><span>Check Review </span></a>
                                <a href="noticeUpload.php" class="list-group-item list-group-item-action py-2 ripple"><i
                                        class="fas fa-building fa-fw me-3"></i><span>Notice</span></a>
                                <a href="../scheduleUp.php" class="list-group-item list-group-item-action py-2 ripple"><i
                                        class="fas fa-calendar fa-fw me-3"></i><span>Defence Schedule</span></a>
                                <a href="../resultUp.php" class="list-group-item list-group-item-action py-2 ripple"><i
                                        class="fas fa-users fa-fw me-3"></i><span>Result</span></a>
                                <a href="reqUpload.php" class="list-group-item list-group-item-action py-2 ripple"><i
                                        class="fas fa-money-bill fa-fw me-3"></i><span>Project Requirement</span></a>
                                <!-- Add other navigation links here -->
                            </div>
                        </div>
                    </nav>

                    <!-- Sidebar -->
                    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
                        <!-- Container wrapper -->
                        <div class="container-fluid">
                            <!-- Toggle button -->
                            <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <i class="fas fa-bars"></i>
                            </button>

                            <!-- Brand -->
                            <a class="navbar-brand" href="#">
                                <img src="../img/logo.png" height="50" alt="UPMS Logo" loading="lazy" />
                            </a>
                        </div>
                    </nav>
                </header>

            </div>

            <div class="col-lg-10 col-md-12">
                <!-- Content section -->
                <div class="row justify-content-center mt-5">
                        <!-- <h1 class="mb-5  text-dark ">Welcome To Admin Panel </h1> -->
                        <h1 class="mb-5   text-white bg-dark d-flex d-block p-5 "> <u>Dashboard</u></h1>



                    </div>

                <?php
                // PHP code block for fetching data from the database
                // ... (unchanged) ...
                include '../config.php';

                //student
                $query = "SELECT id FROM register ORDER BY id";
                $query_run = mysqli_query($conn, $query);
                $row = mysqli_num_rows($query_run);


                //Teacher
                $queryy = "SELECT id FROM teacher_register ORDER BY id";
                $query_run = mysqli_query($conn, $queryy);
                $roww = mysqli_num_rows($query_run);

                //Proposals
                $queryyy = "SELECT id FROM proposal ORDER BY id";
                $query_run = mysqli_query($conn, $queryyy);
                $rowww = mysqli_num_rows($query_run);
                ?>

                <!-- Cards displaying fetched data -->
                <div class="row mb-5 justify-content-center">
                    <!-- Cards for displaying data -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                            <div class="card-header fs-1 text-center">Total Student</div>
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text ">
                                    <?php echo '<h1 class="text-center" style="font-size: 80px;">' . $row . '</h1>'; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                            <div class="card-header fs-1 text-center">Total Teacher</div>
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text">
                                    <?php echo '<h1 class="text-center" style="font-size: 80px;">' . $roww . '</h1>'; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                            <div class="card-header fs-1 text-center">Total Proposal</div>
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text">
                                    <?php echo '<h1 class="text-center" style="font-size: 80px;">' . $rowww . '</h1>'; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                            <div class="card-header fs-1 text-center">Total Proposal</div>
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text">
                                    <?php echo '<h1 class="text-center" style="font-size: 80px;">' . $rowww . '</h1>'; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap and Popper.js JavaScript for responsive behavior -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>

</html>
