<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wwise";

//create connection
$con = new mysqli($servername, $username, $password, $dbname);

//check connection
if($con->connect_error){
  die("Connection error!").$con->connect_error;
}

?>