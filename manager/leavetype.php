<html>
    <head>
        <title>dashborad</title>
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
            <a href="#">New request</a><br>
            <a href="#">Approved leave</a><br>
            <a href="#">Rejected leave</a><br>
        </div><br>
    </div>
    <fieldset>
      <legend>Leave type</legend>
        <form name="leavetype" action="leavetypeprocess.php" method="post" onsubmit="">
          <div class="content">
            <label>Leave type:</label>
            <input type="text" name="leavetype"><br><br>
            
            <label>No. of days:</label>
            <input type="number" name="days"><br><br>

            <label>Description:</label>
            <textarea  name="description" rows="3" cols="20"></textarea>
            <br><br><br><br>

            <button>Add leave</button>
          <div>
        </form>
    </fieldset>
      


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