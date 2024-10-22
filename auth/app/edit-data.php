<?php
include '../auth/koneksi.php';

$id=$_GET['id'];
$Nama=$_POST['Nama'];
$NPM=$_POST['NPM'];
$Nama_Ruangan=$_POST['Nama_Ruangan'];
$Waktu_mulai=$_POST['Waktu_mulai'];
$Waktu_selesai=$_POST['Waktu_selesai'];
$Keterangan=$_POST['Keterangan'];

$query = mysqli_query($mysqli,"UPDATE form_peminjaman SET Nama='$Nama',NPM='$NPM',$Nama_Ruangan='Nama_Ruangan'WHERE id='$id'");
header ('location:home.php');
?>