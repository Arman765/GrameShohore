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
    <link rel="stylesheet" href="css/gallery.css">
    <title>GrameShohore</title>
</head>
<body>
    <?php
        require 'header.php';
    ?>

<section class="feature" id="feature">

<h1 class="heading mt-3">popular places</h1>
<h3 class="title mt-3">see the most featured places</h3>

<div class="card-container">

    <div class="card">
        <img src="img/first1.jpg" alt="">
        <div class="info">
            <h3>tour 1 </h3>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, minima!</p>
            <a href="#"><button class="btn">visit now!</button></a>
        </div>
    </div>

    <div class="card">
        <img src="img/second1.jpg" alt="">
        <div class="info">
            <h3>tour 2 </h3>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, minima!</p>
            <a href="#"><button class="btn">visit now!</button></a>
        </div>
    </div>

    <div class="card">
        <img src="img/third1.jpg" alt="">
        <div class="info">
            <h3>tour 3 </h3>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
            </div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, minima!</p>
            <a href="#"><button class="btn">visit now!</button></a>
        </div>
    </div>

</div>

</section>


<section class="gallery" id="gallery">

<h1 class="heading">our gallery</h1>
<h3 class="title">explore the most visited places</h3>

<div class="box-container">

    <div class="box">
        <div class="image">
            <img src="img/second1.jpg" alt="">
        </div>
        <div class="content">
            <h3>tour 1 </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti soluta aut mollitia doloremque officiis, neque blanditiis asperiores voluptatibus commodi aperiam.</p>
            <a href="#"><button class="btn">explore!</button></a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="img/second1.jpg" alt="">
        </div>
        <div class="content">
            <h3>tour 2 </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti soluta aut mollitia doloremque officiis, neque blanditiis asperiores voluptatibus commodi aperiam.</p>
            <a href="#"><button class="btn">explore!</button></a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="img/second1.jpg" alt="">
        </div>
        <div class="content">
            <h3>tour 3 </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti soluta aut mollitia doloremque officiis, neque blanditiis asperiores voluptatibus commodi aperiam.</p>
            <a href="#"><button class="btn">explore!</button></a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="img/second1.jpg" alt="">
        </div>
        <div class="content">
            <h3>tour 4 </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti soluta aut mollitia doloremque officiis, neque blanditiis asperiores voluptatibus commodi aperiam.</p>
            <a href="#"><button class="btn">explore!</button></a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="img/second1.jpg" alt="">
        </div>
        <div class="content">
            <h3>tour 5   </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti soluta aut mollitia doloremque officiis, neque blanditiis asperiores voluptatibus commodi aperiam.</p>
            <a href="#"><button class="btn">explore!</button></a>
        </div>
    </div>

</div>

</section>


    <?php
        require 'footer.php';
    ?>

    
</body>
</html>