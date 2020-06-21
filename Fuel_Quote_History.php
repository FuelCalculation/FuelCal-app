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
    
            
      <a href ="#" ><tile><strong>back</strong></tile></a>
            <a href ="logout.php" ><tile><strong>Logout</strong></tile></a>
          
</nav>
     
    </div>
  </header>


<style>
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
     background-image: url(https://clipartart.com/images/clipart-plain-background-1.gif);  
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
body
 {
     font-family: Arial, Helvetica, sans-serif;
     background-image: url(https://clipartart.com/images/clipart-plain-background-1.gif);  
    background-size: cover;
 }
/* The side navigation menu */
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: absolute;
  height: 100%;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: rgb(0,128,255);
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
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
        <th scope="col">#</th>
        <th scope="col">Gallons Requested</th>
        <th scope="col">Delivery Address</th>
        <th scope="col">Delivery Date</th>
        <th scope="col">Suggested Price</th>
        <th scope="col">Total Amount Due</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>something here</td>
        <td>something here</td>
        <td>something here</td>
        <td>something here</td>
        <td>something here</td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>something here</td>
        <td>something here</td>
        <td>something here</td>
        <td>something here</td>
        <td>something here</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td>something here</td>
        <td>something here</td>
        <td>something here</td>
        <td>something here</td>
        <td>something here</td>
        </tr>
        <tr>
        <th scope="row">4</th>
        <td>something here</td>
        <td>something here</td>
        <td>something here</td>
        <td>something here</td>
        <td>something here</td>
        </tr>
        <tr>
        <th scope="row">5</th>
        <td>something here</td>
        <td>something here</td>
        <td>something here</td>
        <td>something here</td>
        <td>something here</td>
        </tr>
        <tr>
        <th scope="row">6</th>
        <td>something here</td>
        <td>something here</td>
        <td>something here</td>
        <td>something here</td>
        <td>something here</td>
        </tr>
        <tr>
        <th scope="row">7</th>
        <td>something here</td>
        <td>something here</td>
        <td>something here</td>
        <td>something here</td>
        <td>something here</td>
        </tr>
    </tbody>
    </table>
 </div>

 