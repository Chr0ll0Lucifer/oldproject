<?php
session_start();
include('connection.php');

?>
<html>
    <head>
        <title>Employee Dashborad</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel ="stylesheet" href="mstyle.css">
    </head>
    

<body>
    <nav>Employee Leave Management System
      <button  class="drop" onclick="window.location.href='logout.php';">Logout
    </button>      
    </nav>


    <div class="sidenav">
        <a href ="employeedashboard.php">Dashboard</a><br>
        <button class="dropdown-btn">Leave
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="apply.php">Apply leave</a><br>
            <a href="leavehistory.php">Leave History</a>
        </div><br>
        <br>
    </div>

    <div class = "main">
       <div class="image">
         <img src = "pic.png">
      </div>
      <div class ="text">
        <h2>  
         <?php
          if (isset($_SESSION['firstname'])) {
                 $name = $_SESSION['firstname'];
                    echo "Welcome, " . $name . "!";
}?>
  </h2>
      <div>
    </div>            
        
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