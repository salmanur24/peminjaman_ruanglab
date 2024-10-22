<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_ruangan = $_POST['id_ruangan'];
    $nama_peminjam = $_POST['nama_peminjam'];
    $nim = $_POST['nim']; // Ambil NPM dari formulir
    $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
    $waktu_mulai = $_POST['waktu_mulai'];
    $waktu_selesai = $_POST['waktu_selesai'];

    $query = "INSERT INTO form (id_ruangan, nama_peminjam, nim, tanggal_peminjaman, waktu_mulai, waktu_selesai) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("isssss", $id_ruangan, $nama_peminjam, $nim, $tanggal_peminjaman, $waktu_mulai, $waktu_selesai);

    if ($stmt->execute()) {
        // Redirect ke halaman daftar peminjaman setelah berhasil
        header("Location: daftar_peminjaman.php");
        exit(); // Menghentikan eksekusi script
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>