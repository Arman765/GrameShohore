<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="css/bus.css">
    <link rel="stylesheet" href="css/admin1.css">


    <title>GrameShohore</title>
</head>
<style>
    .table-color 
{
    background-color:#D1C4E9;
    font-size: large;
}
.size{
    font-size:larger;
}
</style>

<body>

    <div class="big-image">
        <div class="overlay">
        <a href="admin.php?q=logout">
                            <button type="button" class="btn btn-primary">Logout</button>
                        </a>
        <div class="card mt-3">
        <div class="card-body">
            <h6 class="size" style="color:black;">Bus Services</h6>
            <hr>
           
            <table class="table table-color table-striped">
                <thead>
                    <tr style="color:black;">
                        <th>Passenger Name</th>
                        <th>Seat Quantity</th>
                        <th>Company Name</th>
                        <th>Departure</th>
                        <th>Origin</th>
                        <th>Destination</th>
                        <th>Date</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                                   
                                        // $from_date=$_GET['from_date'];
                                        // $to_date=$_GET['to_date'];
                                        $con=mysqli_connect("localhost","root","","grameshohore");
                        
                        $query= "SELECT PassengerName,SeatBooked,Company,Departure, origin,destination,Travel_Date FROM busservices";
                                        $query_run=mysqli_query($con,$query);

                                        if(mysqli_num_rows($query_run)>0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                          
                                                ?>
                    <tr>
                        <td style="color:black;"><?php echo $row['PassengerName'];?></td>
                        <td style="color:black;"><?php echo $row['SeatBooked'];?></td>

                        <td style="color:black;"><?php echo $row['Company'];?></td>
                        <td style="color:black;"><?php echo $row['Departure'];?></td>
                        <td style="color:black;"><?php echo $row['origin'];?></td>
                        <td style="color:black;"><?php echo $row['destination'];?></td>
                        <td style="color:black;"><?php echo $row['Travel_Date'];?></td>


                    </tr>

                    <?php

                                            }
                                        }
                                    

                                        
                                    
                                        
                                    ?>



                </tbody>
            </table>


        </div>
    </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>