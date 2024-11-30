<?php
require 'conn.php';
require 'filech.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['Abhi_user'];
    $firstname = $_POST['Abhi_fname'];
    $lastname = $_POST['Abhi_lname'];
    $email = $_POST['Abhi_email'];
    $gender = $_POST['Abhi_gender'];
    $extnum = $_POST['Abhi_extension_numb'];
    $phno = $_POST['Abhi_phno'];
   
    $sql="INSERT INTO $tbname(username, firstname, lastname, email, gender, extnum, phno) VALUES('$username', '$firstname', '$lastname', '$email', '$gender', '$extnum', '$phno')";
    if($conn->query($sql) === FALSE){
        echo "Error".$conn->error;
    }
}

?>