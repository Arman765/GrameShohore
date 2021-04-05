<?php
include 'db_config.inc.php';

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if(!$conn)
{
    die("connection failed: ".mysqli_connect_error());
}


extract($_POST);
$sql = "INSERT INTO `contactdata`(`fullname`, `phone`, `email`, `message`) VALUES ('".$fullname."',".$phone.",'".$email."','".$message."')";
$result = $conn ->query($sql);
if(!$result){
    die("Couldn't enter data: ".$conn ->error);
}
header("Location: ../contact.php?submission=success");
$conn ->close();
?>