<?php

if(isset($_POST['SaveData']))
{
    $Bus_ID=$_POST['Bus_ID'];
    $com=$_POST['com'];
    $Dep_time=$_POST['Dep_time'];
    $from=$_POST['from'];
    $to=$_POST['to'];
    $TravelDate=$_POST['TravelDate'];
    
    
    $con=mysqli_connect("localhost","root","","grameshohore");
    $com=$_POST['com'];
    $query="INSERT into bus_schedules(Bus_ID,Company,Departure,origin,destination,Travel_Date)VALUES('$Bus_ID','$com','$Dep_time','$from','$to','$TravelDate' )";
    header("Location: admin.php?Information=updated");
    mysqli_query($con,$query);
}
?>