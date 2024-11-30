<?php
require "conn.php";
$dbname="IDK";
$tbname="IDK_TABLE";

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === FALSE){
    echo "Database couldn't be checked or created".$conn->error;
}

$conn->select_db($dbname);

$sql2 = "CREATE TABLE IF NOT EXISTS $tbname (
    username VARCHAR(50) NOT NULL UNIQUE,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    gender VARCHAR(10) NOT NULL,
    extnum VARCHAR(4) NOT NULL,
    phno VARCHAR(15) NOT NULL
)";

if ($conn->query($sql2) === FALSE) {
    echo "Error checking/creating table: " . $conn->error . "<br>";
}
?>