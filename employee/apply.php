<?php
include('connection.php');

?>
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
        <a href ="employeedashboard.php">Dashboard</a><br>
        <button class="dropdown-btn">Leave
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="apply.php">Apply leave</a><br>
            <a href="#">Leave History</a>
        </div><br>
        <br>
    </div>

    <fieldset>
    <legend>Apply leave form</legend>
    <form name="applyform" action="applyprocess.php" method="post" onsubmit="">
        <div class="content">
            <br>
            <label>Firstname:</label>
            <input type="text"  name="firstname">
            <label>Lastname:</label>
            <input type="text"  name="lastname"><br><br><br>
            <label>Email:</label>
            <input type="email"  name="email"><br><br><br>
            <label>Leave type:</label>
            <select name="leave_type">
                <option value="">Select leave type..</option>
                <?php $sql = "SELECT Leave_type from leavetype";
                $result = $con->query($sql);

                if($result->num_rows > 0){
                  while ($row = $result->fetch_object()) {
                    ?>
                    <option value="<?php echo htmlentities($row->Leave_type); ?>">
                    <?php echo htmlentities($row->Leave_type); ?>
                    </option>
                    <?php
                }
              }?>
</select><br><br><br>
                <label>Start leave date:</label>
                <input type="date" name="startdate">
                <label>End leave date:</label>
                <input type="date" name="enddate">
                <label>Number of days:</label>
                <input type="number" name="days"><br><br><br>

                <label>Reason for leave: </label>
                <textarea name = "description" rows="6" cols="40"></textarea>
                <br><br><br><br>

                <label style="display:none;">Status:</label>
            <input type="radio" name="status"  value="Pending" style="display:none;" checked><p style="display:none;">Pending</p>
            <input type="radio" name="status"  value="Approve" style="display:none;">
            <input type="radio" name="status"  value="Reject" style="display:none;"><br><br><br>

                <button>Apply</button>
</div>
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
</body> 
</html>