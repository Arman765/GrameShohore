<?php 
session_start();
include_once 'includes/class.inc.php';
 $user=new User();
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    

    <script language="javascript" type="text/javascript">
        function submitlogin() {
            var form = document.login;
            if (form.uid2.value == "") {
                alert("Username.");
                return false;
            } else if (form.pwd2.value == ) {
                alert("Enter Password.");
                return false;
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <h2 style="text-align:center;">Log In</h2>
            
            <hr>
            <form action="" method="post" name="login">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="uid2" class="form-control" value="admin" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="pwd2" class="form-control" value="1234" required>
                </div>
                <!--For showing error for wrong input  -->
                <!-- <p id="wrong_id" style=" color:red; font-size:12px; "></p> -->


                <button type="submit" name="submit" value="Login"  onclick="retrun(submitlogin());" class="btn btn-lg btn-primary btn-block">Submit</button>
                
                <br>
                <p style="text-align: center; font-size: 14px;"><a href="index.php">Back To Home</a></p>
                
                

                <?php if(isset($_REQUEST['submit'])) 
                {
                    $username= $_POST['uid2'];
                     $password= $_POST['pwd2'];
                     extract($_REQUEST);
                     $login=$user->check_login($username, $password); 
                    if($login) { echo "<script>location='admin.php'</script>"; } 
                else{?>

                <script type="text/javascript">
                    document.getElementById("wrong_id").innerHTML = "Wrong username or password";
                </script>

                <?php } }?>

            </form>
        </div>
    </div>

</body>

</html>