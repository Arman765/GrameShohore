<?php



if(isset($_POST['SaveData']))
{
    $Passenger_Name=$_POST['Passenger_Name'];
    $NumOfSeats=$_POST['NumOfSeats'];
    $com=$_POST['Com'];
    $Dep_time=$_POST['Dep_time'];
    $from=$_POST['from'];
    $to=$_POST['to'];
    $TravelDate=$_POST['TravelDate'];
    // $com= $_POST['Com'];
    
    $con=mysqli_connect("remotemysql.com","55eGBl5Qlp","s4X5pcOBbl","55eGBl5Qlp");
    $query="INSERT into busservices(PassengerName,SeatBooked,Company,Departure,origin,destination,Travel_Date)VALUES('$Passenger_Name','$NumOfSeats' ,'$com','$Dep_time','$from','$to','$TravelDate')";
    
    $query_run=mysqli_query($con,$query);

    if($query_run)
    {
        
        echo'<script>
        alert("Booking Confirmed");
        </script>';

         header('Location:BusSchedules.php');
    }
    else
    {
                echo '<script>
                
        alert("Seat Not Available");
        </script>';

    }

}
?>