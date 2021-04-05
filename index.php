<?php 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery/dist/jquery.slim.min.js"></script>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-social/bootstrap-social.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>GrameShohore</title>
</head>
<body>
  
<?php
  require 'header.php';
?>

<header class="jumbotron">
      <div class="container">
          <div class="row row-header">
              <div class="col-12 col-sm-6">
                  <h1>GrameShohore</h1>
                  <h3>Your Travel Partner</h3>
              </div>
              <div class="col-12 col-sm align-self-center">
                  <img src="img/dice2.png" class="img-fluid " alt="">
              </div>
                  
          </div>
      </div>
  </header>


  <div class="container">
      <div class="row row-content">
        <div class="col">
          <div id="mycarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                  <img class="d-block img-fluid" src="img/first11.jpg" alt="first">
                  
              </div>
              <div class="carousel-item ">
                <img class="d-block img-fluid" src="img/second11.jpg" alt="second">
                
              </div>
              <div class="carousel-item ">
                <img class="d-block img-fluid" src="img/third11.jpg" alt="third">
                
              </div>
            </div>
            <ol class="carousel-indicators">
              <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
              <li data-target="#mycarousel" data-slide-to="1"></li>
              <li data-target="#mycarousel" data-slide-to="2"></li>
            </ol>
            <a class="carousel-control-prev"  href="#mycarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next"  href="#mycarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
            <!-- <button class="btn btn-danger btn-sm" id="carouselButton" type="button" name="button">
              <span class="fa fa-pause"></span>
            </button> -->

          </div>

        </div>
      </div>
</div>

<div class="container content">
<div class="grid">
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./img/1000.jpeg" alt="Rome" />
          <div class="card-content">
            <h1 class="card-header">Sundarbans</h1>
            <p class="card-text">
            The Sundarbans is a huge mangrove forest on the coast of the Ganges delta by the Bay of Bengal.
           .It has been declared a UNESCO World Heritage Site.
            </p>
            <a href="https://en.wikipedia.org/wiki/Sundarbans" <button class="card-btn">Visit</a> <span>&rarr;</span></button>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img
            class="card-img"
            src="./img/1002.jpeg"
            alt="Grand Canyon"
          />
          <div class="card-content">
            <h1 class="card-header">Mahasthangarh</h1>
            <p class="card-text">
            Dating back to at least the 4th century BCE,
             Mahasthangarh is the earliest urban archaeological site that has been discovered in Bangladesh.
   
            </p>
            <a href="https://en.wikipedia.org/wiki/Mahasthangarh" <button class="card-btn">Visit</a> <span>&rarr;</span></button>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="./img/1001.jpeg" alt="Maldives" />
          <div class="card-content">
            <h1 class="card-header">Jaflong </h1>
            <p class="card-text">
            Jaflong is a hill station and tourist destination in the Division of Sylhet, Bangladesh.
              It is known for its stone collections and is home of the Khasi tribe
            </p>
            <a href="https://en.wikipedia.org/wiki/Jaflong" <button class="card-btn">Visit</a> <span>&rarr;</span></button>
          </div>
        </div>
      </div>
 </div>
 </div>


<?php
  require 'footer.php';

?>

  
    
<script src="js/scripts.js"></script>

   
</body>
</html>