<?php
    include_once 'includes/class.inc.php'; 
    $user=new User(); 

    $roomname=$_GET['roomname'];

    if(isset($_REQUEST[ 'submit'])) 
    { 
        extract($_REQUEST); 
        $result=$user->booknow($checkin, $checkout, $name, $phone,$roomname);
        if($result)
        {
            echo "<script type='text/javascript'>
                  alert('".$result."');
             </script>";
        }


        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="css/reg.css" type="text/css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( ".datepicker" ).datepicker({
                  dateFormat : 'yy-mm-dd'
                });
  } );
  </script>
  
</head>
<body>

<div class="container">
      
      
         
       

     <div class="well">
           <h2 style="color:white;">Book Now: <?php echo $roomname; ?></h2>
           <hr>
           <form action="" method="post" name="room_category">
             
             
              <div class="form-group">
                   <label for="checkin">Check In :</label>&nbsp;&nbsp;&nbsp;
                   <input type="text" class="datepicker" name="checkin">

               </div>
              
              <div class="form-group">
                   <label for="checkout">Check Out:</label>&nbsp;
                   <input type="text" class="datepicker" name="checkout">
               </div>
               <div class="form-group">
                   <label for="name">Enter Your Full Name:</label>
                   <input type="text" class="form-control" name="name" placeholder="Fullname" required>
               </div>
               <div class="form-group">
                   <label for="phone">Enter Your Phone Number:</label>
                   <input type="text" class="form-control" name="phone" placeholder="Phone Number" required>
               </div>
                
              
               <button type="submit" class="btn btn-lg btn-primary button" name="submit">Confirm</button>

              <br>
               <div id="click_here">
                   <a class="btn btn-lg btn-primary" href="index.php">Back to Home</a>
               </div>


           </form>
       </div>
       
       



   </div>
   
   
   
   
   






   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
</body>
</html>
