<?php
require 'conn.php';
require 'filech.php';

$del_email = $_POST['del_email'] ?? null;


if (!$del_email) {
    die("Email is required.");
}
$sql = "DELETE FROM $tbname WHERE email = '$del_email' ";
if($conn->query($sql)=== TRUE){
    echo "deleted record with email"."". $del_email;
}
else{
    echo "Could not be deleted".$conn->error;
}
?>