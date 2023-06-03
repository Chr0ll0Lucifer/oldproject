<?php
include('connection.php');

?>
<html>
    <head>
        <title>View Requests</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel ="stylesheet" href="mstyle.css">
    </head>
    

<body>
    <nav>Employee Leave Management System
      <button  class="drop" onclick="window.location.href='logout.php';">Logout
    </button>      
    </nav>


    <div class="sidenav">
        <a href ="managerdashboard.php">Dashboard</a><br>
        <a href ="leavetype.php">Leave type</a><br>
        <button class="dropdown-btn">Staff
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="addstaff.php">Add staff</a><br>
            <a href="edit.php">Manage staff</a>
        </div><br>
        <button class="dropdown-btn">Leave
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="newrequest.php">New requests</a><br>
            <a href="#">Approved leave</a><br>
            <a href="#">Rejected leave</a><br>
        </div><br>
</div>

<?php 

$id = $_GET['id'];

$result = mysqli_query($con,"SELECT * FROM leaves where ID = $id");

if (mysqli_num_rows($result) > 0){
     $row = mysqli_fetch_array($result);
 ?>

<fieldset>
    <legend>View Request</legend>
    <form name="viewform" action="viewrequestprocess.php" method="post" onsubmit="">
        <div class="content">
            <br>
            <label>ID:</label>
            <input type="text" name="id" value="<?php echo $row["ID"]; ?>"><br><br>
            <label>Staff name:</label>
            <input type="text" name="staffname" value="<?php echo $row["Firstname"]; ?>"><br><br>
            <label>Leave type:</label>
            <input type="text" name="leavename" value="<?php echo $row["Leave_type"]; ?>">
            <label>Number of leave days:</label>
            <input type="number" name="days" value="<?php echo $row["No_of_days"]; ?>"><br><br>
            <label>Reason:</label>
            <input type="text" name="description" value="<?php echo $row["Description"]; ?>"><br><br>
            <label>Start date:</label>
            <input type="date" name="start" value="<?php echo $row["Start_date"]; ?>">
            <label>End date:</label>
            <input type="date" name="end" value="<?php echo $row["End_date"]; ?>"><br><br>
            <label>Status:</label>
            <input type="radio"  name="status" value="Approve" <?php echo $row["Status"]=="Approve"?"checked":"" ?>>Approve
            <input type="radio"  name="status" value="Reject" <?php echo $row["Status"]=="Reject"?"checked":"" ?>>Reject<br><br>

            <button type="submit">Edit</button>
</form>
</fieldset>
<?php
}
?>