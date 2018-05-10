<?php
$server = "localhost"; //nama server
$username = "root"; // username 
$database = "dbpasar"; // buat nama database harus sama 

// Koneksi dan memilih database di server
mysql_connect($server,$username) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");
?>