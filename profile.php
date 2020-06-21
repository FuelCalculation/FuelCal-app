<?php

session_start();
$dbhost = 'mylibrary.cn6fzragcwuf.us-west-1.rds.amazonaws.com';
$dbuser = 'root';
$dbpassword = 'Houston16';
$dbname = 'FuelDatabase';
$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
//echo $_SESSION['UserID'];
if (mysqli_connect_error())
    {
        echo "It failed";
        die('Connection Failed: '.mysqli_connect_error());
    }
    $query = "SELECT * FROM `State`";
    $result2 = mysqli_query($con, $query);

$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[State]</option>";
}
   ?>


<div class="panel panel-default">
    <div class="panel-heading">  <h2 >User Profile</h2></div>
     <div class="panel-body">


        <div class="col-sm-6">
            <h4 style="color:sandybrown;">Welcome User: </h4></span>
               
            <a href ="Home.php" ><tile><strong>Back To Home</strong></tile></a>           
            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">


            <div>
              <form action="main.html" target="_blank"> <!-- The main.html will be change to succesfully update when Hiep put it on php-->
            <h2> Please fill out your information so we can get an accurate for your quote</h2>

            <label for="Email">Email Address:</label>
            <input type= "text"   name = "Address"  class="input-field" placeholder="Enter Your Address" required>
            <div class="bot-border"></div>
            
            <label for="City">City:</label>
            <input type= "text"   name = "City" class="input-field" placeholder="City" required>
            <div class="bot-border"></div>
            
            <label for="States">States:</label>
            <input type= "text"   name = "States" class="input-field" placeholder="States" required>
            <div class="bot-border"></div>
            
            <label for="Zipcode">Zipcode(5 digits):</label>
            <input type= "text"   name = "ZipCode" class="input-field" placeholder="Zipcode" required>
            <div class="bot-border"></div>

            <select name="State">
                    <option>State</option>
                
            <?php echo $options;?>

            <input type="submit" value="Submit">
                </form>
            

        </div>
            
            
        </select>

        

</p>
   
       
    


<script>
        $(function() {
$('#profile-image1').on('click', function() {
  $('#profile-image-upload').click();
});
});       
        </script> 



<style>
  label
  {
    color: green;
  }
   body {
  background-image: url('stock-exchange-background-vector-27122800.jpg');
}
div{
  text-align: center;
}
   h2
   {
     color: red;
   }
                  input.hidden {
    position: absolute;
    left: -9999px;
}

</style>