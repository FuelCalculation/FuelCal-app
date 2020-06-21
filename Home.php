<?php
    session_start();
    $dbhost = 'mylibrary.cn6fzragcwuf.us-west-1.rds.amazonaws.com';
    $dbuser = 'root';
    $dbpassword = 'Houston16';
    $dbname = 'FuelDatabase';
    $con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

   
    //check history is empty or not
    function history_exists($email){
        $sql = "SELECT id FROM Fuelquotes where email = '$email'";
    
        $result = query($sql);
    
        if(row_count($result) == 1){
            return true;
        }else{
            return false;
        }
    }

    $curremt_price_per_gallon = 1.5;
    $Texas_location_factor = 0.02;
    $Other_location_factor = 0.04;
    $Rate_History_Factor = 0.01; //not empty
    $No_History_Rate_Factor = 0.00; //empty
    $Gallons_Requested_Factor = 0.02;//more than 1000 gallons
    $Gallons_Requested_Factor2 = 0.03; 
    $Company_Profit_factor = 0.01;


    function Margin_Calculation($email, $Gallons_Requested,$Delivery_Address,$Delivery_Date, $Suggested_Price, $Total_Amount_Due){

        $email = escape($email);
        $Gallons_Requested = escape($Gallons_Requested);
        $Delivery_Address = escape($Delivery_Address);
        $Delivery_Date= escape($Delivery_Date);
        $Suggested_Price = escape($Suggested_Price);
        $Total_Amount_Due = escape($Total_Amount_Due);


        if($gallons_requested > 1000){
            if($state == "Texas"){
                //if history is not empty
                if(history_exists($email)){
                    if($gallons_requested > 1000){
                        $Margin = $Current_Price * ($Texas_location_factor - $Rate_History_Factor + $Gallons_Requested_Factor + $Company_Profit_Factor);
                    }
                    else{
                        $Margin = $Current_Price * ($Texas_location_factor - $Rate_History_Factor + $Gallons_Requested_Factor2 + $Company_Profit_Factor);
                    }
                }
                else{
                    if($gallons_requested > 1000){
                        $Margin = $Current_Price * ($Texas_location_factor - $No_History_Rate_Factor+ $Gallons_Requested_Factor + $Company_Profit_Factor);
                    }
                    else{
                        $Margin = $Current_Price * ($Texas_location_factor - $No_History_Rate_Factor+ $Gallons_Requested_Factor2 + $Company_Profit_Factor);
                    }
                }
            }
            else{
                if(history_exists($email)){
                    if($gallons_requested > 1000){
                        $Margin = $Current_Price * ($Other_location_factor - $Rate_History_Factor + $Gallons_Requested_Factor + $Company_Profit_Factor);
                    }
                    else{
                        $Margin = $Current_Price * ($Other_location_factor - $Rate_History_Factor + $Gallons_Requested_Factor2 + $Company_Profit_Factor);
                    }
                }
                else{
                    if($gallons_requested > 1000){
                        $Margin = $Current_Price * ($Other_location_factor - $No_History_Rate_Factor+ $Gallons_Requested_Factor + $Company_Profit_Factor);
                    }
                    else{
                        $Margin = $Current_Price * ($Other_location_factor - $No_History_Rate_Factor+ $Gallons_Requested_Factor2 + $Company_Profit_Factor);
                    }
                }
            }
        }
    
    }


    function Suggested_Price_Calculation(){
        $Suggested_price = $curremt_price_per_gallon + $margin;
    }

    function Total_Calculation(){
        $Total_Amount_Due = $gallons_requested * $Suggested_price;
    }
    

?>

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
      <h2> Welcome to FuelCal-App</h2>
      <nav>
    
            
           
            <a href ="index.html" ><tile><strong>Logout</strong></tile></a>
          
</nav>
     
    </div>
  </header>


  <body>


  <style>
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
<!-- The sidebar -->
<div class="sidebar">
<a class="active" href="Fuel_Quote_Form.php">Fuel Quote Form</a>
<a  href="Fuel_Quote_History.php">Fuel Quote History</a>
              <a href="profile.php">Profile</a>
           
            </div>
<div id="books" class>
            
          
          <form class="model-resource animate" action="Calculation.php" method="post"> 
            <div class = center>
              
                <h3>calculate</h3>
                <div>
                <label>Gallon requested</label>
                <input type= "text" name = "gallon_requested" class="input-field" placeholder=" input" required>
               
                <p>
</p>
               <label>Delivery Address</label>

<p>
</p>
                <label>Date</label>
                <input type="date" id="datepicker" name='from' size='9' value="" /> 
    <p>
</p>
                <label>Suggested Price</label>
                <?php 
                //echo $Suggested_price
                ?>
                <p>
</p>
                <label>Total Amount Due</label>
                   <?php 
                //echo $Total_Amount_Due
                ?>
            </div>
            

            


      <button type="submit" name = "price"><strong>Submit</strong></button>

        <br>
          
  
</html>

