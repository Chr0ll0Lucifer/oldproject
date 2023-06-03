<?php
 $conn = mysqli_connect("localhost", "root", "", "leave_management");
  

 if (isset($_REQUEST)) {
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

        $leavetype = $_REQUEST['leave_type']; 
        $startdate = $_REQUEST['startdate']; 
        $enddate = $_REQUEST['enddate']; 
       $days = $_REQUEST['days']; 
       $reason = $_REQUEST['description'];
       $status=$_REQUEST['status'];
       $fname = $_REQUEST['firstname'];
       $lname = $_REQUEST['lastname'];   
       $email = $_REQUEST['email']; 
       
       
       $id = "SELECT *FROM leavetype INNER JOIN leaves ON leavetype.L_id = leaves.L_id";
       
       
   
       $sql = "INSERT INTO leaves (`L_id`, `Leave_type`, `Start date`, `End date`, `No of days`, `Description`, `Status`, `Firstname`, `Lastname`, `Email`) VALUES ('$id', '$leavetype', '$startdate', '$enddate', '$days', '$reason', '$status', '$fname', '$lname', '$email')";
    
        if(mysqli_query($conn, $sql)){?>
            <script>
            alert("Leave application sent sucessfully.");
            window.location.href = "apply.php";
            </script>
        <?php 
         
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
            

 }else{
    echo "no requests";
 }