<?php

    // require_once('config.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery/dist/jquery.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-social/bootstrap-social.css">
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>GrameShohore</title>
    
</head>
<body>
<?php
  require 'header.php';
?>

<div>
<?php
  

?>
</div>

  <div class="container" style="margin-top:120px;">
	<form action="includes/signup.inc.php" method="post">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-3">
					<h1>Registration</h1>
					<p>Fill up the form with correct values.</p>
					<hr class="mb-3">
					<!-- <label for="fullname"><b>Fullname</b></label>
					<input class="form-control" id="fullname" type="text" name="fullname" required> -->

					<label for="username"><b>Username</b></label>
					<input class="form-control" id="username"  type="text" name="uid" >

					<label for="email"><b>Email Address</b></label>
					<input class="form-control" id="email"  type="text" name="email" >

					<!-- <label for="phonenumber"><b>Phone Number</b></label>
					<input class="form-control" id="phonenumber"  type="text" name="phonenumber" required> -->

					<label for="password"><b>Password</b></label>
					<input class="form-control" id="password"  type="password" name="pwd" >
					<label for="password"><b>Repeat-Password</b></label>
					<input class="form-control" id="password"  type="password" name="pwd-repeat" >
					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="register" name="signup-submit" value="Sign Up">
				</div>
			</div>
		</div>
	</form>
</div>



<?php
  require 'footer.php';

?>

<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>



<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var fullname 	= $('#fullname').val();
			var username	= $('#username').val();
			var email 		= $('#email').val();
			var phonenumber = $('#phonenumber').val();
			var password 	= $('#password').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {fullname: fullname,username: username,email: email,phonenumber: phonenumber,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});
	
</script> -->

<script src="js/scripts.js"></script>
</body>
</html>