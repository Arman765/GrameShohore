<?php

include 'db_config.inc.php';

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if(!$conn)
{
    die("connection failed: ".mysqli_connect_error());
}