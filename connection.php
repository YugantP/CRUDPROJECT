<?php

error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";
$dname = "records";


$conn = mysqli_connect($servername,$username,$password,$dname);

if ($conn)
{
    //echo "Connection ok";
}
else{
    echo "Connection falied".mysqli_connect_error();
}


?>