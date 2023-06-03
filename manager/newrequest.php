<?php
include('connection.php');

?>
<html>
    <head>
        <title>New Requests</title>
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

    <div class="manage">
    <h3>New Requests</h3>
</div>
<?php
  

$result = mysqli_query($con,"SELECT * FROM leaves");
$status = 0;
if (mysqli_num_rows($result) > 0){?>

<form action="viewrequest.php" method="POST"> 
    
<div class="table-content">
    <table border = "1" cellpadding = "7px" cellspacing="5px">
          <tr>
            <td>ID</td>
            <td>Staff name</td>
            <td>Leave type</td>
            <td>View </td>
          </tr>
          <?php
                $i=0;
                while($row = mysqli_fetch_array($result)) {
                ?>
          <tr>
            <td><?php echo $row["ID" ]; ?></td>
            <td><?php echo $row["Firstname" ]; ?></td>
            <td><?php echo $row["Leave_type" ]; ?></td>            
            <td><a href="viewrequest.php?id=<?php echo $row["ID"]; ?>">View</a></td>
        </tr>
            <?php
                $i++;
                }
                ?>
  <?php      
}
?>
</table> 

    <script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;
    
    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display == "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }
  </script>
</body> 
</html>