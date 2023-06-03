<?php

include('connection.php');
    print_r($_POST);
   if (!empty($_POST) ) {
    $id = $_POST['id'];
    $staffname = $_POST['staffname'];
    $leavename = $_POST['leavename'];
    $days = $_POST['days'];
    $reason = $_POST['description'];
    $startdate = $_POST['start'];
    $enddate = $_POST['end'];
    $status = $_POST['status'];

    $sql = "UPDATE `leaves` set  ID ='$id', Firstname= '$staffname',Leave_type='$leavename',No_of_days ='$days',Description='$reason',Start_date='$startdate',End_date = '$enddate',Status='$status' where ID = $id";

    mysqli_query($con,$sql);
    if($sql)
    {
        ?>
        <script>
    alert("Sucessfully responded.")
     window.location.href = "newrequest.php";
    </script>
    <?php    
    }

    
   }
    ?>