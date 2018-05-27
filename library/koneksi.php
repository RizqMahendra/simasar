<?php

// Koneksi dan memilih database di server
$conn = new mysqli("localhost","root","","db_pasar");

if($conn == false) 
{
    die("Connection Failed : ". $conn->connect_error);
}
else {
    echo "Connected Successfully";
}

?>