<?php

$host = 'localhost';
$dbname ='peminjaman';
$user = 'root';
$pass = '';

$mysqli = mysqli_connect($host,$user,$pass,$dbname);

if (!$mysqli){
    die("koneksi gagal" . mysqli_connect_error());
}
//echo "koneksi berhasil";
?>