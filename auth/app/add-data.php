<?php
include '../auth/koneksi.php';

$query = mysqli_query($mysqli,"INSERT INTO form_peminjaman (id,Nama,NPM, Waktu_mulai, Waktu_selesai, Keterangan)
VALUES ('','','','','','')");
header ('location:home.php');
?>