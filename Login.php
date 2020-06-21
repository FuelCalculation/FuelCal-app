<?php
session_start();

    $user = $_POST['UserID'];
    $password = $_POST['password'];
   




$dbhost = 'mylibrary.cn6fzragcwuf.us-west-1.rds.amazonaws.com';
$dbuser = 'root';
$dbpassword = 'Houston16';
$dbname = 'FuelDatabase';
$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);



if(mysqli_connect_error())
die("Connection Failed".mysqli_connect_error());




$query = "SELECT * FROM Users WHERE UserID = $user LIMIT 1";


$result = mysqli_query($con,$query);
$rnum = $result->num_rows;
if($rnum == 0){
    $_SESSION['message'] = "Make sure you are using a valid UserID or Register if you haven't done so";
    header("location: error.php");
    
}
else{
    $result_array = $result->fetch_assoc();
    
    if($user === $result_array['ID'] && password_verify($password, $result_array['Password']))
    {
       
        $_SESSION['ID'] = $result_array['ID'];
        
         
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;
        
        if($_SESSION['ID'] == 'ID')
            header("location: Home.php");
      
        
    }
    else{
        
        $_SESSION['message'] = "You have entered an incorrect UserID or Password. Please Try Again";
        header("location: error.php");
    }
    
}



        

?>
