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
            <input type="text" name="id" value="<?php echo $row["ID"]; ?>" disabled><br><br>
            <label>Staff name:</label>
            <?php
            $result1 = mysqli_query($con,"SELECT * FROM employees where emp_id='". $row['emp_id']."'"); 
            $row1 = mysqli_fetch_array($result1);
            ?>
            <input type="text" name="staffname" value="<?php echo $row1["Firstname"]; ?>" disabled><br><br>
            <label>Leave type:</label>
            <input type="text" name="leavename" value="<?php echo $row["Leave_type"]; ?>" disabled>
            <label>Number of leave days:</label>
            <input type="number" name="days" value="<?php echo $row["No_of_days"]; ?>" disabled><br><br>
            <label>Reason:</label>
            <input type="text" name="description" value="<?php echo $row["Description"]; ?>" disabled><br><br>
            <label>Applied date:</label>
            <input type="date" name="applied" value="<?php echo $row["Applied_date"]; ?>" disabled><br><br>
            <label>Start date:</label>
            <input type="date" name="start" value="<?php echo $row["Start_date"]; ?>" disabled>
            <label>End date:</label>
            <input type="date" name="end" value="<?php echo $row["End_date"]; ?>" disabled><br><br>
            <label>Status:</label>
            <input type="radio"  name="status" value="Approve" <?php echo $row["Status"]=="Approve"?"checked":"" ?>><p>Approve</p>
            <input type="radio"  name="status" value="Reject" <?php echo $row["Status"]=="Reject"?"checked":"" ?>><p>Reject</p>
            <br><br><br>

            <button type="submit">Edit</button>
</form>
</fieldset>
<?php
}
?>

<script>
  window.addEventListener('DOMContentLoaded', function() {
    var form = document.querySelector('form');
    form.addEventListener('submit', function() {
      var IdField = document.querySelector('input[name="id"]');
      IdField.disabled = false;

      var staffname = document.querySelector('input[name="staffname"]');
      Staffname.disabled = false;

      var leavename = document.querySelector('input[name="leavename"]');
      leavename.disabled = false;

      var days = document.querySelector('input[name="days"]');
      days.disabled = false;

      var description = document.querySelector('input[name="description"]');
      description.disabled = false;

      var applied = document.querySelector('input[name="applied"]');
      applied.disabled = false;

      var start = document.querySelector('input[name="start"]');
      start.disabled = false;

      var end = document.querySelector('input[name="end"]');
      end.disabled = false;
    });
  });
</script>