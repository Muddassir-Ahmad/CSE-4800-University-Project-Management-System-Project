<?php

include '../config.php';
$id = $_REQUEST['id'];
$dataFetchQuery = "SELECT * FROM `proposal` WHERE id='$id'";
$record = mysqli_query($conn,$dataFetchQuery);
$data = mysqli_fetch_array($record);

// $dataFetchQueryy = "SELECT short_name FROM `teacher_register`";
// $recordd = mysqli_query($conn,$dataFetchQueryy);
// $dataa = mysqli_fetch_array($recordd);





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPMS-Assign Supervisor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
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
    <div class= "row justify-content-center mt-5">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <form action="assignAction.php" method="post">
           
                <div class="mb-3">
                    <h4>Assign Supervisor</h4>
                </div>
                <div class="mb-3">
                <!-- <input type="hidden" name="id" value="$data['id']">  -->
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                    Project Name :
                    <input type="text" class="form-control" name="p_name" value="<?php echo $data['p_name'] ?>">
                </div>
                <!-- <div class="mb-3">
                    Preferred Suvervisor :
                    <input type="text" class="form-control" name="p_supervisor" value="<?php echo $data['p_supervisor'] ?>">
                </div> -->

                <!-- test -->
                
                Preferred Supervisor:
                <select class="form-control " name="p_supervisor" >
                            <!-- <option value="" selected>Select Your Department </option> -->
                            <option value="<?php echo $data['p_supervisor'] ?>"><?php echo $data['p_supervisor'] ?></option>
                            
                            <!-- <option value="EEE">EEE</option>
                            <option value="CE">CE</option>
                            <option value="BBA" >BBA</option> -->
                        </select>
                <!-- end -->



                
               
                <!-- <div class="mb-3">
                   Assign Supervisor :
                   <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                   <select class="form-control " name="a_supervisor" >
                           
                            <option value="<?php echo $dataa['short_name'] ?>"><?php echo $dataa['short_name'] ?></option>
                         
                        </select>
                </div> -->

                <!-- try2 -->
                
                Assign Supervisor :
                        <!-- <input type="text" class="form-control" name="p_supervisor" required>  -->
                        <!-- <input type="hidden" name="id" value="$data['id']"> -->
                        <select class="form-control " name="a_supervisor" > 
                       
                        
                     
                            
                      
  <?php
       include '../config.php';
          
       $allData = mysqli_query($conn,"SELECT short_name FROM `teacher_register` "); 

       while($row = mysqli_fetch_array($allData))
       {
  echo "

  <option value='$row[short_name]'>$row[short_name]</option>
 



  "; 
 
       }
     
  
  ?></select>
                <!-- end -->

                <button type="submit" class="btn btn-primary col-12" name="submit">Assign</button>
               
            </form>
           

        </div>
    </div>
  </div>  







<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>