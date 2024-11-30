<?php
$servername="localhost";
$user="root";
$password="";

$conn= new mysqli($servername,$user,$password);
if($conn->connect_error){
    echo "Connection Error".$conn->connect_error;
}
?>
