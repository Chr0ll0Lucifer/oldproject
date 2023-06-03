<?php
    // if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
    //     header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
    //     die ("<h2>Access Denied!</h2> This file is protected and not available to public.");
    //     }
   $conn = mysqli_connect("localhost","root","","leave_management");
    $eid = $_POST['emp_id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['Lastname'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $address = $_POST['Address'];
    $gender = $_POST['Gender'];
    $dob = $_POST['DOB'];
    $phone = $_POST['Phone'];
    $avg_leave = $_POST['Avg_leave'];
    $sql = "UPDATE login set firstname ='$fname',lastname = '$lname',email='$email',password ='$password',address ='$address',gender='$gender',dob = '$dob',phone='$phone',avg_leave='$avg_leave' where emp_id = $eid";
    mysqli_query($conn,$sql);
    if($sql)
    {
        header('location:update.php');
    }

    
    ?>