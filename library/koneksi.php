<?php

// Koneksi dan memilih database di server
<<<<<<< HEAD
$conn = new mysqli("localhost","root","","db_pasar");
=======
$conn =new mysqli($server,$username,$database);
>>>>>>> 93629cb235c667650cde3deb74022e24051c63ba

if($conn == false) 
{
<<<<<<< HEAD
    die("Connection Failed : ". $conn->connect_error);
}
else {
    echo "Connected Successfully";
}

?>
=======
    die("Connection Failed : ".$conn->connect_error);
} 
echo "Connected Successfully";
?>
>>>>>>> 93629cb235c667650cde3deb74022e24051c63ba
