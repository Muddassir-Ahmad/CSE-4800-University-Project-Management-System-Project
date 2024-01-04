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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPMS-Proposal Submission</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
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
<br>
    <div class="container-fluid">

        <div class="row justify-content-center mt-4">

            <div class="col-lg-6 col-md-6 col-sm-12">

                <form action="insertProposal2.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <h4>Proposal Submission</h4>
                    </div>
                    <div class="mb-1">

                        Project Name :
                        <input type="text" class="form-control" name="p_name" required>
                    </div>
                    <div class="mb-1">
                        Preferred Supervisor :
                        <!-- <input type="text" class="form-control" name="p_supervisor" required> -->
                        <!-- <input type="text" class="form-control" name="p_supervisor" required>  -->
                        <!-- <input type="hidden" name="iid" value="$data['id']"> -->
                        <select class="form-control " name="p_supervisor">
                            <!-- <option value=""></option> -->



                            <option value=''>Select Supervisor </option>

                            <?php
                            include 'config.php';


                            $allData = mysqli_query($conn, "SELECT short_name FROM `teacher_register` ");




                            while ($row = mysqli_fetch_array($allData)) {

                                echo "

                                          
                                            <option value='$row[short_name]'>$row[short_name]</option>




                                             ";

                            }


                            ?>
                        </select>
                    </div>
                    <div class="mb-1">
                        Project Code:
                        <select class="form-control" name="p_code" required>
                            <option value="" selected> Select Project Code</option>
                            <option value="CSE-3300">CSE-3300</option>
                            <option value="CSE-4800">CSE-4800</option>

                        </select>
                    </div>
                    <div class="mb-2">
                        <!-- <h4 class="">Team Details</h4> -->
                        <h5 class="text-center bg-warning p-2"> INFORMATION OF MEMBER: 1 </h5>
                        <!-- <input type="text" class="form-control" name="p_member" required> -->
                    </div>
                    


                    <!-- 1st member -->
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-1">
                                Name :
                                <input type="text" class="form-control" name="s1_name" required>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="mb-1">
                                ID :
                                <input type="text" class="form-control" name="s1_id" required>
                            </div>
                        </div>
                    </div>
                    <!-- 1st member 1st row end -->


                    <!-- <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-1">
                                Email :
                                <input type="text" class="form-control" name="email" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-1">
                                Phone :
                                <input type="text" class="form-control" name="phone" required>
                            </div>
                        </div>
                    </div> -->
                    <!-- 1st member 2nd row end -->





                    <div class="mb-2 mt-2">
                        <!-- <h4 class="">Team Details</h4> -->
                        <h5 class="text-center bg-warning p-2">  INFORMATION OF MEMBER: 2 </h5>
                        <!-- <input type="text" class="form-control" name="p_member" required> -->
                    </div>


                    <!-- 2nd member -->
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-1">
                                Name :
                                <input type="text" class="form-control" name="s2_name" required>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="mb-1">
                                ID :
                                <input type="text" class="form-control" name="s2_id" required>
                            </div>
                        </div>
                    </div>
                    <!-- 2nd member 1st row end -->


                    <!-- <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-1">
                                Email :
                                <input type="text" class="form-control" name="email" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-1">
                                Phone :
                                <input type="text" class="form-control" name="phone" required>
                            </div>
                        </div>
                    </div> -->
                    <!-- 2nd member 2nd row end -->





                    <div class="mb-1">
                    Add Proposal(Only PDF):
                        <input type="file" class="form-control" name="p_proposal" >
                    </div>
                    <button type="submit" class="btn btn-danger col-12" name="submit">Submit</button>

                </form>

            </div>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>