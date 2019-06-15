<?php

$servername = "localhost";
$username = "root";
$password = "";
$database_name = "test";

$conn = new mysqli($servername, $username, $password, $database_name);

if($conn->connect_error)
{
    die("Connection failed:" . $conn->connect_error);
}

echo "Connected successfully. \n";

//create database
$sql = "CREATE TABLE user(
username VARCHAR(30) NOT NULL, 
password VARCHAR(20) NOT NULL
)";

$createTableRegister = "CREATE TABLE RegisterUser(
account VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
re_password VARCHAR(30) NOT NULL
)";

$createTableProduction = "CREATE TABLE Production(
man VARCHAR(15) NOT NULL,
bo VARCHAR(15) NOT NULL,
sua VARCHAR(15) NOT NULL 
)";

$update = "INSERT INTO user (username, password)
VALUES('canhvv','123abc')";

$conn->query($createTableProduction);

//check validate email
function CheckValidateEmail()
{
    $conn = new mysqli("localhost","root", "", "test");
    $sql = "SELECT email FROM RegisterUser";
    $emailFromDB = $conn->query($sql);

    echo $emailFromDB;
    $conn->close();
}

CheckValidateEmail();
//check
$conn->close();


