<?php

include '../config.php';
$id = $_REQUEST['id'];
$dataFetchQuery = "SELECT * FROM `teacher_register` WHERE id='$id'";
$record = mysqli_query($conn,$dataFetchQuery);
$data = mysqli_fetch_array($record);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Teacher Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        form{
            background: #fff;
            padding: 15px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 10px;
        }
    </style>
</head>
<body >
  <div class="container-fluid">
    
    <div class= "row justify-content-center mt-5">
        
        <div class="col-lg-4 col-md-6 col-sm-12">
            
            <form action="teacherUpdateAction.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <h4>Teacher Registration</h4>
                </div>
                <div class="mb-1">
                   Teacher Name :
                    <input type="text" class="form-control" name="r_name" value="<?php echo $data['name'] ?>" required>
                </div>
                <div class="mb-1">
                    Teacher Email :
                    <input type="text" class="form-control" name="r_email" value="<?php echo $data['email'] ?>" required>
                </div>
                <div class="mb-2">
                    University Short Name :
                    <input type="text" class="form-control" name="r_short_name" value="<?php echo $data['short_name'] ?>" required>
                </div>
                <div class="mb-1">
                    Department :
                    <input type="text" class="form-control" name="r_dept" value="<?php echo $data['department'] ?>"required>
                </div>
                <div class="mb-1">
                    Designation :
                    <input type="text" class="form-control" name="r_des" value="<?php echo $data['designation'] ?>" required>
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







<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>