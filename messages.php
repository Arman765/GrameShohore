<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery/dist/jquery.slim.min.js"></script>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="css/bus.css">
        <link rel="stylesheet" href="css/admin1.css">

</head>
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
                                        <th>Name</th>
                                        <th>Message</th>
                                        <th>email</th>
                                        <th>Phone</th>                                   
                                        <!-- <th>Date</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                                        
                                         $con=mysqli_connect("remotemysql.com","7gYPV79gv1","ydk3pGThZq","7gYPV79gv1");
                                        $query= "SELECT * FROM contactdata";
                                        $query_run=mysqli_query($con,$query);

                                        if(mysqli_num_rows($query_run)>0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                               
                                                ?>
                                    <tr>
                                        <td style="color:black;"><?php echo $row['fullname'];?></td>
                                        <td style="color:black;"><?php echo $row['message'];?></td>
                                        <td style="color:black;"><?php echo $row['email'];?></td>
                                        <td style="color:black;"><?php echo $row['phone'];?></td>
                                        
                                       
                                            

                                    </tr>

                                    <?php

                                            }

                                        }
                                        else
                                        {
                                            echo "No Bus Available in this time period";

                                        }


                                    
                                    ?>



                                </tbody>
                            </table>


                        </div>
                    </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
        </script>

        
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
</body>
</html>