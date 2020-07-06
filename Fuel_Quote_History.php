<head>
        <title> Admin Dashboard</title>
        <link rel = "stylesheet" href="style.css" type="text/css">
        <meta name="Resources" content="width=device-width, initial-scale=1">
  </head>

  <header>
    <div class = "div">
      <img src = " " atl="logo" class = "logo">
      <h2> Welcome to the History Dashboard</h2>
      <nav>
    
      
      <nav>
       <div class = "Navigation">     
      <a href ="Home.php" ><tile><strong>Back</strong></tile></a>
            <a href ="index.html" ><tile><strong>Logout</strong></tile></a>
            <h1>Fuel Quotes History</h1>
          </div>
      </nav>
     
    </div>
  </header>



  
<body>
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a  href="Home.php">Home/Fuel Quote</a>
<a  href="Fuel_Quote_History.php">Fuel Quote History</a>
              <a href="profile.php">Profile</a>
           
  
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Side Bar</button>  
</div>
</body>






<style>

.Navigation
{
  background-color: #333;
    overflow: hidden;
}
.Navigation a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 16px 16px;
  text-decoration: none;
  font-size: 17px;
}
.Navigation a:hover {
  background-color: #ddd;
  color: black;
}
.Navigation a.active {
  background-color: #4CAF50;
  color: white;
}


table {
    margin-left:200px;
    width: 80%;
    height: 100;
  border-collapse: collapse;
}

table, th, td {
    height: 50px;
  border: 1px solid black;
}
title{
  background-color: rgb(0,128,255);
  color: rgb(255, 255, 255);
  padding: 10px 10px;
  margin: 10px 0;
  border: none;
  cursor: pointer;
  width: 50%;
}
body
 {
     font-family: Arial, Helvetica, sans-serif;
     background-image: url('Fuel_Quote_History.jpg');  
    background-size: cover;
 }

 title{
  background-color: rgb(0,128,255);
  color: rgb(255, 255, 255);
  padding: 10px 10px;
  margin: 10px 0;
  border: none;
  cursor: pointer;
  width: 50%;
}

  
 .sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}



    button{
        background-color: orange;
      color: rgb(233, 19, 144);
      padding: 14px;
      margin: 8px 0;
      border: none;
         border-radius: 50px;
      border: none;
      cursor: pointer;
      width: 10%;
    }
    
    .containerAdmin{
        float: left;
     
    }
    .center{
        text-align: center;
        
        }
  
</style>








<script>
$(document).ready(function () {
  $('#dtBasicExample').DataTable({
    "paging": false // false to disable pagination (or any other option)
  });
  $('.dataTables_length').addClass('bs-select');
});
</script>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}

</script>






<?php
session_start();

  $dbhost = 'mylibrary.cn6fzragcwuf.us-west-1.rds.amazonaws.com';
  $dbuser = 'root';
  $dbpassword = 'Houston16';
  $dbname = 'FuelDatabase';
  $con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
  $sessions = $_SESSION['$userid'];
  if(mysqli_connect_error())
    die("Connection Failed".mysqli_connect_error());
  else
    echo "connected";
    //$query = "SELECT * FROM Users WHERE UserId = $userid LIMIT 1";
    $result = mysqli_query($con, "SELECT * FROM Fuelquotes WHERE UserId = $sessions");
  
?>


<div class="sidebar">
<a class="active" href="Fuel_Quote_History.php">Fuel Quote History</a>
              <a href="#">someting here</a>
              <a href="#"> someting here</a>
              <a href="#"> someting here</a>
            </div>
<div style="overflow-y: auto; height:400px; ">
    <table id="dtBasicExample" class="table table-striped">
        
    <thead>
        <tr>
        <th scope="col">userid #</th>
        <th scope="col">Gallons Requested</th>
        <th scope="col">Delivery Address</th>
        <th scope="col">Delivery Date</th>
        <th scope="col">Suggested Price</th>
        <th scope="col">Total Amount Due</th>
        </tr>
    </thead>
    <?php
      echo "<tbody>";
          while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" .$row['UserId']. "</td>";
            echo "<td>" .$row['Gallons']. "</td>";
            echo "<td>" .$row['DeliveryAddress']. "</td>";
            echo "<td>" .$row['DeliveryDate']. "</td>";
            echo "<td>" .$row['SuggestPrice']. "</td>";
            echo "<td>" .$row['TotalAmount']. "</td>";
            echo "</tr>";
            
          }
      echo "</tbody>";
      mysqli_close($con);
    ?>
    </table>
 </div>

 