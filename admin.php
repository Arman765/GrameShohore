<?php 
     session_start();
     include_once 'includes/class.inc.php';
     $user=new User();
     $uid=$_SESSION[ 'uid']; 
     if(!$user->get_session()) 
     { 
         header("location:login.php"); 
     } 
     if(isset($_GET['q'])) 
     { 
         $user->user_logout();
      header("location:index.php"); 
     } 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Panel</title>

    <!-- Bootstrap -->
    
    <link rel="stylesheet" href="css/admin1.css">


   


</head>

<body>

 
 
     
    
    <div class="big-image">
        <div class="overlay">
        
                   
                        <a href="admin.php?q=logout">
                            <button type="button" class="btn btn-primary">Logout</button>
                        </a>
                   
         

    
        

        <div >
        
        <div class="row">
           <div class="col-md-3"></div>
            <div class="col-md-6 well">
                <h4>Bookings</h4>
                <hr>
                <ul>
                    <li><a href="rooms.php">Book Now</a></li>
                    <li><a href="bookedrooms.php">Show All Booked Rooms</a></li>
                    <li><a href="messages.php">Show All Messages</a></li>  
                    <li><a href="adminBusSchedules.php">Update Bus Schedules</a></li>
                    <li><a href="BusBookingInfo.php">Bus Booking Information</a></li>                       
                </ul>
            </div>
           <div class="col-md-3"></div>
        </div>
        </div>
    </div>
        
        
        </div>
        










    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>