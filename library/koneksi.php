<?php
$server = "localhost"; //nama server
$username = "root"; // username 
$database = "dbpasar"; // buat nama database harus sama 

// Koneksi dan memilih database di server
$conn =new mysqli_connect($server,$username,$database);

if($conn->connect_error) 
{
    die("Connection Failed : ".$conn->connect_error);
} 
echo "Connected Successfully";
?>