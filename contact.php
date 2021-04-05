<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-social/bootstrap-social.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="css/st.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <?php
    require 'header.php';

?>

    <div class="container">
       <section>
       <h2 class="text-black text-center mb-4">Share Your Experience</h2>
        <div class="card col-lg-5 col-md-6 col-12 mx-auto px-4 py-5">
        <form action="includes/contact.inc.php" method="POST">
                <div class="form-group d-flex px-3 py-1 m-0">                    
                    <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Fullname" required>
                </div>
                
                <div class="form-group d-flex px-3 py-1 my-3">
                   
                    <input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone" required>
                </div>
                
                <div class="form-group d-flex px-3 py-1 m-0">
                   
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                </div>
                </br>
                <div class="form-group d-flex px-3 py-1 m-0">
                    
                    <input type="text" name="message" id="message" class="form-control" placeholder="Message" required>
                </div>
                
                <div class="text-center pt-4">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
              </form>
        </div>
       </section>
       <section>
       <!-- <div class="card_container">
        <div class="profile_img">
            <ul>
                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                <li><a href=""><i class="fa fa-instagram"></i></a></li>
                <li><a href=""><i class="fa fa-youtube"></i></a></li>
                <li><a href=""><i class="fa fa-github"></i></a></li>
            </ul>

        </div>
        <div class="text_content">
            <h1>Tauhidur Rahman</h1>
            <h2>About</h2>
            <p class="text_description">I am Tauhid Rahman from Ahsanullah University of Scienece and Technology.I am
                having my BSc in Computer Scienece and Engineering here.I have completed my HSC from St Joseph Higher
                Secondary School. </p>
            <div class="text_btn">
                <h3>Read More</h3>
            </div>

        </div> -->
       </section>
    </div>
    
    
</body>
</html>