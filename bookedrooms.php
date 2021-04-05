<?php
include_once 'includes/class.inc.php'; 
$user=new User();


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Booking</title>

    
   

    <link rel="stylesheet" href="css/admin1.css">


   
    
    

    
    
</head>

<body>
    
      
      
        
       <div class="big-image">
           <div class="overlay">
               
                   
           <a href="admin.php?q=logout">
                            <button type="button" class="btn btn-primary">Logout</button>
                        </a>
                   
           
        
        <?php
        
        $sql="SELECT * FROM rooms WHERE book='true'";
        $result = mysqli_query($user->db, $sql);
        if($result)
        {
            if(mysqli_num_rows($result) > 0)
            {
         
                while($row = mysqli_fetch_array($result))
                {
                    
                    echo "
                            <div class='row'>
                            <div class='col-md-2'></div>
                            <div class='col-md-6 well'>
                                <h4>".$row['room_cat']."</h4><hr>
                                <h6>Checkin: ".$row['checkin']." and checkout: ".$row['checkout']."</h6>
                                <h6>Name: ".$row['name']."</h6>
                                <h6>Phone: ".$row['phone']."</h6>
                                <h6>Booking Condition: ".$row['book']."</h6>
                            </div>
                            &nbsp;&nbsp;
                            
                            </div>
                            
                    
                    
                         ";
                    
                    
                }
                
                
                          
            }
            else
            {
                echo "NO Data Exist";
            }
        }
        else
        {
            echo "Cannot connect to server".$result;
        }
        
        
        
        
        
        ?>

           </div>
       </div>

  
    
    
    
    
    





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>