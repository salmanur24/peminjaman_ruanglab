<?php
include '../auth/koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($mysqli,"DELETE FROM form_peminjaman WHERE id='$id'");

header ('location:home.php');
?>