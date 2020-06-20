

<!DOCTYPE html>
<html>
<head>
        <title> Admin Dashboard</title>
        <link rel = "stylesheet" href="style.css" type="text/css">
        <meta name="Resources" content="width=device-width, initial-scale=1">
  </head>

  <header>
    <div class = "div">
      <img src = " " atl="logo" class = "logo">
      <h2> Welcome to the Admin Dashboard</h2>
      <nav>
    
            
           
            <a href ="logout.php" ><tile><strong>Logout</strong></tile></a>
          
</nav>
     
    </div>
  </header>


  <body>


  <style>
      tile{
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
<!-- The sidebar -->
<div class="sidebar">
<a class="active" href="admin_insert2.php">Add New Items</a>
              <a href="#">someting here</a>
              <a href="#"> someting here</a>
              <a href="#"> someting here</a>
            </div>
<div id="books" class>
            
          
          <form class="model-resource animate" action="admin_insert2.php" method="post"> 
            <div class = center>
              
                <h3>calculate</h3>
                <div>
                <label>gallons requested</label>
                <input type="text" name = 'gallons_requested'/>
            </div>
            

            


      <button type="submit" name = "price"><strong>Submit</strong></button>

        <br>
          
  
</html>

