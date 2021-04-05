<?php

  session_start();

?>


<nav class="navbar navbar-dark navbar-expand-md  fixed-top">
    <div class="container">
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav" type="button"><span class="navbar-toggler-icon"></span></button>
      <a class="navbar-brand ml-auto" href="index.php"><img src="img/dice2.png" height="30" width="41"></a>

      <div class="collapse navbar-collapse" id="navbarNav">
        <span class="navbar-text" style="font-size:20px;">GrameShohore</span>
        <ul class="navbar-nav mr-auto me-auto">
          <li class="nav-item "><a class="nav-link" href="index.php"><span class="fa fa-home fa-lg"></span> Home</a></li>
          <!-- <li class="nav-item"><a class="nav-link" href="gallery.php"><span class="fa fa-info fa-lg"></span> Gallery</a></li> -->
          <!-- <li class="nav-item"><a class="nav-link" href="rooms.php"><span class="fa fa-address-card fa-lg"></span> House</a></li> -->
          <!-- <li class="nav-item"><a class="nav-link" href="reservation.php"><span class="fa fa-list fa-lg"></span> Booking </a></li> -->
          <li class="nav-item"><a class="nav-link" href="BusSchedules.php"><span class="fa fa-bus fa-lg"></span> Bus</a></li>
          <!-- <li class="nav-item"><a class="nav-link" href="adminlogin.php"><span class="fa fa-address-card fa-lg"></span> Admin</a></li> -->
          <li class="nav-item"><a class="nav-link" href="traveloffer.php"><span class="fa fa-hotel fa-lg"></span> Offers</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>

         
          <!-- <li class="nav-item"><a class="nav-link" href="login.php" id="buttonlogin" ><span class="fa fa-sign-in"> Login</span></a></li> -->
        </ul>
        <div >
          <?php
            if(isset($_SESSION['userId']))
            {
                echo'<form action="includes/logout.inc.php" method="post">
                <button class="btn btn-primary" type="submit" name="logout-submit">logout</button>
          </form>';
            }
            else
            {
                echo ' <div class="loginsignup"><form action="includes/login.inc.php" method="post">
                <input type="text" name="uid" placeholder="username">
                <input type="password" name="pwd" placeholder="password">
                <button class="btn btn-primary" type="submit" name="login-submit">Login</button>
                <a class="btn btn-primary" href="signup.php">Signup</a>
          </form>
          </div>';
            }
          
          
          ?>
         
          
        </div>
        
      </div>
    </div>
  </nav>
 
 