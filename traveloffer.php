<!DOCTYPE html>
<html lang="en">
<head>
 <title>GrameShohore</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-social/bootstrap-social.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <link rel="stylesheet" type="text/css" href="css/offer1.css">  
</head>
<body>
    
<?php

  require 'header.php';

?>


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/111.png" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
       
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/222.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
      
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/333.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
       
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
    <div class="container">

    <div class="py-5">
        <h3 class="text-center">Latest Travel Offers</h3>
    </div>
    <div class ="Container-fluid">
        <div class ="row">
            <div class="col-lg-4 col-mid-4 col-12" style="margin-left:-30px;">
            <div class="card" style="width:400px">
            <a href="saintmartin.php">
            <img class="card-img-top" src="img/saintmartin.jpg" alt="Card image" >
        
            <div class="card-body">
                <h4 class="card-title">Saint Martin Island</h4>
               
                <a href="saintmartin.php" class="btn btn-primary">20% Discount!</a>
             
            </div>
            </a>
            </div>
            </div>

            <div class="col-lg-4 col-mid-4 col-12" style="margin-left:20px;">
            <div class="card" style="width:400px">
            <a href="coxsbazar.php">
            <img class="card-img-top" src="img/5.jpg" alt="Card image" >
          
            <div class="card-body">
                <h4 class="card-title">Cox's Bazar</h4>
              
                <a href="coxsbazar.php" class="btn btn-primary">30% Discount!</a>
              
            </div>
            </a>
            </div>

            </div>

            <div class="col-lg-4 col-mid-4 col-12 " style="margin-left:10px;">
            <div class="card" style="width:400px">
            <a href="nilgiri.php">
            <img class="card-img-top" src="img/7.jpg" alt="Card image" >
            <div class="card-body">
                <h4 class="card-title">Nilgiri Mountains,Bandarbans</h4>
            
                <a href="nilgiri.php" class="btn btn-primary">15% Discount!</a>
            </div>
            </a>
            </div>

            </div>
        </div>
    </div>

    </div>

</section>

<section class="my-5">
    
    <div class="container">
    <div class ="Container-fluid">
        <div class ="row">
            <div class="col-lg-4 col-mid-4 col-12" style="margin-left:-30px;">
              <div class="card" style="width:400px">
                  <a href="sajek.php">
                  <img class="card-img-top" src="img/8.jpg" alt="Card image" >
                  <div class="card-body">
                    <h4 class="card-title">Sajek valley,Rangamati</h4>
                    <p class="card-text"></p>
                    <a href="sajek.php" class="btn btn-primary">25% Discount!</a>
                  </div>
                  </a>
              </div>
          </div>

            <div class="col-lg-4 col-mid-4 col-12 " style="margin-left:20px;">
            <div class="card" style="width:400px">
            <a href="Bisanakandi.php">
            <img class="card-img-top" src="img/10.jpg" alt="Card image" >
            <div class="card-body">
                <h4 class="card-title">Bisanakandi,Sylhet</h4>
                <p class="card-text"></p>
                <a href="Bisanakandi.php" class="btn btn-primary">10% Discount!</a>
            </div>
            </a>
            </div>

            </div>

            <div class="col-lg-4 col-mid-4 col-12" style="margin-left:10px;">
            <div class="card" style="width:400px">
            <a href="Birishiri.php">
            <img class="card-img-top" src="img/11.jpg" alt="Card image" >
            <div class="card-body">
                <h4 class="card-title">Birishiri,Netrokona</h4>
                <p class="card-text"></p>
                <a href="Birishiri.php" class="btn btn-primary">20% Discount!</a>
            </div>
            </a>
            </div>

            </div>
        </div>
    </div>
    </div>

</section>

  <?php
    require 'footer.php';
  ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>