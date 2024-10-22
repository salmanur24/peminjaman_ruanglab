<?php
include 'db.php';

$query = "SELECT p.*, r.nama_ruangan FROM form p JOIN ruangan r ON p.id_ruangan = r.id";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <style>
        body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: #F5FFFA;
    }
        form {
            max-width: 600px;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: center;
        }
        th{
            background-color: #00BFFF;
            color: white;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
 <title>Daftar Peminjaman</title>
 <link rel="icon" type="image/png" size="16×16" href="images/LOGO-UNSIL.png">
</head>
<body>
 <center><h1>Daftar Peminjaman Ruangan</h1></center>  
 <table class="table table-bordered table-responsive" width="100%">
    <thead class="bg-info">
    <tr>
        <th>Nama Ruangan</th>
        <th>Nama Peminjam</th>
        <th>nim</th> <!-- Tambahkan kolom NIM -->
        <th>Tanggal Peminjaman</th>
        <th>Waktu Mulai</th>
        <th>Waktu Selesai</th>
    </tr>
</thead>
<tbody>
    <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['nama_ruangan'] ?></td>
            <td><?= $row['nama_peminjam'] ?></td>
            <td><?= $row['nim'] ?></td> <!-- Tampilkan NIM -->
            <td><?= $row['tanggal_peminjaman'] ?></td>
            <td><?= $row['waktu_mulai'] ?></td>
            <td><?= $row['waktu_selesai'] ?></td>
        </tr>
    <?php endwhile; ?>
</table>
        </tbody>
</body>
</html>