<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-social/bootstrap-social.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
     
    <link rel="stylesheet" href="css/bus.css">
    <link rel="stylesheet" href="css/style.css">
   
    <title >Bus Schedules</title>
</head>

<body >
    <!-- Button trigger modal -->

    <?php
        require 'header.php';
    ?>
    <!-- Modal -->
    <div class="modal fade" id="bus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title size" id="exampleModalLabel" >Booking Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="BookingDetails.php" method="POST">
                    <div class="modal-body">

                        <div class="form-group">
                            <label></label>
                            <input type="text" name="Passenger_Name" class="form-control" placeholder="Enter Name">

                        </div>
                        <div class="form-group">
                            <label></label>
                            <input type="number" name="NumOfSeats" class="form-control" placeholder="How many seats ?">
                        </div>


                        <div class="form-group">
                            <label></label>
                            <input type="text" name="Com" class="form-control" placeholder="Which Bus Company ?">
                        </div>
                        <div class="form-group">
                            <label></label>
                            <input type="text" name="Dep_time" class="form-control" placeholder="Time Of Depart ?">
                        </div>

                        <div class="form-group">
                            <label></label>
                            <input type="text" name="from" class="form-control" placeholder="From ?">
                        </div>

                        <div class="form-group">
                            <label></label>
                            <input type="text" name="to" class="form-control" placeholder="To ?">
                        </div>
                        <div class="form-group">
                            <label> </label>
                            <input type="date" name="TravelDate" class="form-control" placeholder="Date of Travel ?">
                        </div>




                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" name="SaveData" class="btn btn-primary">Book</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Modal--Ends-->
    <div class="container">
      
        <h1 style="margin-top:50px;"> Bus Schedules</h1>
        <hr>
        <section class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Check Bus Schedules across cities</h5>
                            </div>
                            <div class="card-body">
                                <form action="" method="GET">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">From Date</label>
                                                <input type="date" name="from_date" class="form-control"
                                                    placeholder="From Date">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">To Date</label>
                                                <input type="date" name="to_date" class="form-control"
                                                    placeholder="To Date">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Check Schedules</label><br>
                                                <button type="submit" class="btn btn-dark">Search</button>


                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-3">
                        <div class="card-body">
                            <h6>Bus Services</h6>
                            <hr>
                            <table class="table table-color table-striped" style="margin-bottom:50px;">
                                <thead>
                                    <tr>
                                        <th>Bus ID</th>
                                        <th>Company Name</th>
                                        <th>Departure</th>
                                        <th>Origin</th>
                                        <th>Destination</th>
                                        <th>Date</th>
                                        <th>Ticket Booking</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if(isset($_GET['from_date'])&& isset($_GET['to_date']))
                                    { 
                                        $from_date=$_GET['from_date'];
                                        $to_date=$_GET['to_date'];
                                        $con=mysqli_connect("remotemysql.com","55eGBl5Qlp","s4X5pcOBbl","55eGBl5Qlp");
                                        $query= "SELECT * FROM bus_schedules WHERE Travel_Date BETWEEN'$from_date'AND '$to_date'";
                                        $query_run=mysqli_query($con,$query);

                                        if(mysqli_num_rows($query_run)>0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                //echo $row['Bus_ID'];
                                                ?>
                                    <tr>
                                        <td><?php echo $row['Bus_ID'];?></td>
                                        <td><?php echo $row['Company'];?></td>
                                        <td><?php echo $row['Departure'];?></td>
                                        <td><?php echo $row['origin'];?></td>
                                        <td><?php echo $row['destination'];?></td>
                                        <td><?php echo $row['Travel_Date'];?></td>
                                        <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#bus">
                                                Book Now
                                            </button></td>

                                    </tr>

                                    <?php

                                            }

                                        }
                                        else
                                        {
                                            echo "No Bus Available in this time period";

                                        }


                                    }
                                    ?>



                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
        </section>
                                </div>

       <?php
            require 'footer.php';
       ?>


       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js"
            integrity="sha512-6ORWJX/LrnSjBzwefdNUyLCMTIsGoNP6NftMy2UAm1JBm6PRZCO1d7OHBStWpVFZLO+RerTvqX/Z9mBFfCJZ4A=="
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
        </script>

       
</body>

</html>