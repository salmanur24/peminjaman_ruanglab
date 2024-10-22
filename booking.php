<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Booking</title>
        <!-- Favicon-->
        <link rel="icon" type="image/png" size="16×16" href="images/LOGO-UNSIL.png">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="app/css/styles.css" rel="stylesheet" />

        <style>
        .submit-button {
            background-color: #00BFFF;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border: none;
            border-radius: 4px;
            transition:  background-color 0.3s;
    }
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: #F5FFFA;
    }
    .form-group {
        margin-bottom: 15px;
    }
    label {
        display: block;
        margin-bottom: 5px;
    }
    input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    .submit-button:hover {
        background-color: #00BFFF;
    }

    .sidebar-wrapper {
    width: 250px;
    background-image: url('images/bg_1.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    padding: 20px;
    border-radius: 5px;
    color: #fff;
    position: relative;
}

.sidebar-wrapper::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1;
}

.sidebar-wrapper * {
    position: relative;
    z-index: 2;
}
        </style>
    </head>
    <body>
    <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-info">Universitas Siliwangi</div>
                <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="dash.php">Dashboard</a>
                  <a class="list-group-item list-group-item-action list-group-item-light p-3" href="app/home.php">Data Ruangan</a>
                  <a class="list-group-item list-group-item-action list-group-item-light p-3" href="booking.php">Booking</a>
                  <a class="list-group-item list-group-item-action list-group-item-light p-3" href="dynamic-full-calendar.html">Agenda</a>
                  <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php">Logout</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-info bg-info border-bottom">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="profil.php">Profil</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                   
                <?php
                include 'db.php';

                // Ambil data ruangan
                $query = "SELECT * FROM ruangan";
                $result = $conn->query($query);
                ?>
          <meta charset="UTF-8">
          <?php echo '<div style="text-align: center; font-size: 2em; margin-top: 50px;"><strong> Peminjaman Ruang</strong></div>'; 
?>
<br>
<table>
    <form action="proses_peminjaman.php" method="POST"> 
        <label for="ruangan">Pilih Ruangan:</label>
        <select name="id_ruangan" id="ruangan" required>
            <?php while($row = $result->fetch_assoc()): ?>
                <option value="<?= $row['id'] ?>"><?= $row['nama_ruangan'] ?></option>
            <?php endwhile; ?>
        </select><br>

        <label for="nama_peminjam">Nama Peminjam:</label>
        <input type="text" name="nama_peminjam" id="nama_peminjam" required><br>

        <label for="nim">nim:</label>
        <input type="text" name="nim" id="nim" required><br>

        <label for="tanggal_peminjaman">Tanggal Peminjaman:</label>
        <input type="date" name="tanggal_peminjaman" id="tanggal_peminjaman" required><br>

        <label for="waktu_mulai">Waktu Mulai:</label>
        <input type="time" name="waktu_mulai" id="waktu_mulai" required><br>

        <label for="waktu_selesai">Waktu Selesai:</label>
        <input type="time" name="waktu_selesai" id="waktu_selesai" required><br>
         
        <br>
        <button type="submit" class="submit-button">Kirim</button>
    </form>
                </div>
            </div>
        </div>
       <!-- Bootstrap core JS-->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    
        </table>
    </body>
</html>
