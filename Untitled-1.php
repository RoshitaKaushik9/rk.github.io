<?php
include "config.php";
include "registration.php";
session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="prei";

//Create connection 
$cann=new mysqli($servername,$username,$password,$dbname);

//Check connection
if ($cann->connect_error){
    die("Connection failed:.$cann->connection_error");

}
echo "Connected successfully";
?>