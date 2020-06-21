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
    <div class="panel-heading">  <h4 >User Profile</h4></div>
     <div class="panel-body">


        <div class="col-sm-6">
            <h4 style="color:sandybrown;">Welcome User: </h4></span>
                          
            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">


            <div>

            <h3> Please fill out your information so we can get an accurate for your quote</h3>

            <form action = "profile.php" method = "POST" >

            <input type= "text"   name = "Address"  class="input-field" placeholder="Enter Your Address" required>
            <div class="bot-border"></div>
            <input type= "text" name = "address2" class="input-field" placeholder="Enter Address2" >
            <div class="bot-border"></div>

            
            <select name="State">
                    <option>State</option>
                
            <?php echo $options;?>
        </select>

        
<p>
</p>
            
        <input type= "text"   name = "City" class="input-field" placeholder="City" required>
            <div class="bot-border"></div>
            
    
        
            
            <input type="text" name="zip" pattern="[0-9]" placeholder ="Zipcode"required>
            <div class="bot-border"></div>

<p>
  		   
             <input type ="Submit" name = "submit" class = "submit" />
             <div id="center_button">
    <button onclick="location.href='Fuel_Quote_Form.php'">Back to Home</button>
</div>
            </p>
            

        </div>
       
    



       <script>
        $(function() {
$('#profile-image1').on('click', function() {
  $('#profile-image-upload').click();
});
});       
        </script> 



<style>
   
                  input.hidden {
    position: absolute;
    left: -9999px;
}

</style>