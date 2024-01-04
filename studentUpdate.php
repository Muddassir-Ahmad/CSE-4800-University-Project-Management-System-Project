<?php

include 'config.php';
$id = $_REQUEST['id'];
$dataFetchQuery = "SELECT * FROM `register` WHERE id='$id'";
$record = mysqli_query($conn,$dataFetchQuery);
$data = mysqli_fetch_array($record);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPMS-Update Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <style>
        form{
            background: #fff;
            padding: 15px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">

        <div class="row justify-content-center mt-1">

            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">

                <form action="studentUpdateAction.php" method="post">
                    <div class="mb-3">
                        <h4>Update Information</h4>
                    </div>
                    <div class="mb-1">
                        Student Name :
                        <input type="text" class="form-control" name="r_name" value="<?php echo $data['name'] ?>" required>
                    </div>
                    <div class="mb-1">
                        Student Email :
                        <input type="text" class="form-control" name="r_email" value="<?php echo $data['email'] ?>" required>
                    </div>
                    <div class="mb-2">
                        Student ID :
                        <input type="text" class="form-control" name="r_id" value="<?php echo $data['student_id'] ?>" required>
                    </div>
                    <div class="mb-1 ">
                        Department :
                        <select class="form-control " name="r_dept" value="<?php echo $data['department'] ?>" required>
                            <option value="<?php echo $data['department'] ?>" selected><?php echo $data['department'] ?> </option>
                            <option value="">Select Your Department </option>
                            <option value="CSE">CSE</option>
                            <option value="EEE">EEE</option>
                            <option value="CE">CE</option>
                            <option value="BBA" >BBA</option>
                        </select>
                    </div>
                    <div class="mb-1">
                        Batch :
                        <select class="form-control" name="r_batch"  required>
                            <option value="<?php echo $data['batch'] ?>" selected><?php echo $data['batch'] ?> </option>
                            <option value="" >Select Your Batch </option>
                            <option value="50">50</option>
                            <option value="51">51</option>
                            <option value="52">52</option>
                            <option value="53">53</option>
                            <option value="54">54</option>
                            <option value="55">55</option>
                            <option value="56">56</option>
                            <option value="57">57</option>
                            <option value="58">58</option>
                            <option value="59">59</option>
                            <option value="60">60</option>
                        </select>
                    </div>
                    <div class="mb-1">
                        Section :
                        <select class="form-control" name="r_sec"  required>
                            <option value="<?php echo $data['section'] ?>" selected><?php echo $data['section'] ?></option>
                            <option value="" > Select Your Section</option>
                            <option value="">Doesn't have a section</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G">G</option>
                            <option value="H">H</option>
                            <option value="I">I</option>
                            <option value="J">J</option>
                        </select>
                    </div>
                    <div class="mb-1">
                        Password :
                        <input type="text" class="form-control" name="r_pass" value="<?php echo $data['password'] ?>" required>
                    </div>
                   

                    <div class="mb-1">
                        Mobile :
                        <input type="text" class="form-control" name="r_mobile" value="<?php echo $data['mobile'] ?>" required>
                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                    </div>
                    <button type="submit" class="btn btn-dark col-12" name="submit">Update</button>
                  
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