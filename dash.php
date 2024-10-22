<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>    
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="images/LOGO-UNSIL.png" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="app/css/styles.css" rel="stylesheet" />

        <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #F5FFFA;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        .container {
            display: flex;
            margin: 20px;
        }

        .sidebar {
            width: 250px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        .main {
            flex: 1;
            margin-left: 30px;
        }

        h1, h2 {
            color: #333;
        }

        .quick-view {
            background-color: #00BFFF;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .quick-view h2 {
            margin-top: 0;
        }

        .card-container {
    display: flex;
    justify-content: flex-start; /* Ubah dari space-between menjadi flex-start */
    gap: 20px; /* Tambahkan gap untuk memberikan jarak antar card */
}

.card {
    width: calc(33.33% - 20px); /* Sesuaikan lebar card */
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    /* Hapus margin jika ada */
}

        .card h3 {
            margin-top: 0;
        }

        .card-count {
            font-size: 3em;
            font-weight: bold;
            color: #333 ;
        }

        .card-text {
            font-size: 1.5em;
            color: #666;
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
                <br>
                <br>
                <!-- Page content-->
                <div class="container-fluid">
                    
                <div class="main">
            <div class="quick-view">
                <h2>Universitas Siliwangi</h2>
                <p>Informasi peminjaman ruangan lab komputer</p>
            </div>
            <div class="card-container">
                <div class="card">
                    <h3>Jumlah Peminjaman Ruangan</h3>
                    <p class="card-count">10</p>
                    <p class="card-text">Peminjaman ruang lab komputer</p>
                </div>
                <div class="card">
                    <h3>Jumlah Lab</h3>
                    <p class="card-count">20</p>
                    <p class="card-text">Ruangan Lab komputer yang tersedia</p>
                </div>
                <div class="card">
                    <h3>Jumlah Pengguna</h3>
                    <p class="card-count">1</p>
                    <p class="card-text">Pengguna yang terdaftar</p>
                </div>
            </div>
        </div>

                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <script>
    // Fungsi untuk memperbarui jumlah pada kartu
    function updateCardCount(cardId, newCount) {
        document.querySelector(`#${cardId} .card-count`).textContent = newCount;
    }

    // Fungsi untuk menampilkan pesan selamat datang
    function showWelcomeMessage() {
        const now = new Date();
        const hour = now.getHours();
        let greeting;

        if (hour < 12) {
            greeting = "Selamat Pagi";
        } else if (hour < 18) {
            greeting = "Selamat Siang";
        } else {
            greeting = "Selamat Malam";
        }

        alert(`${greeting}, Selamat datang di Dashboard Peminjaman Lab Komputer!`);
    }

    // Fungsi untuk mengubah warna latar belakang kartu saat diklik
    function changeCardColor(cardId) {
        const card = document.getElementById(cardId);
        const randomColor = Math.floor(Math.random()*16777215).toString(16);
        card.style.backgroundColor = "#" + randomColor;
    }

    // Panggil fungsi selamat datang saat halaman dimuat
    window.onload = showWelcomeMessage;

    // Tambahkan event listener untuk setiap kartu
    document.querySelectorAll('.card').forEach((card, index) => {
        card.id = `card-${index + 1}`;
        card.addEventListener('click', () => changeCardColor(`card-${index + 1}`));
    });

    // Contoh penggunaan fungsi updateCardCount
    // Anda bisa memanggil fungsi ini ketika ada perubahan data
    // updateCardCount('card-1', 15);
    // updateCardCount('card-2', 7);
    // updateCardCount('card-3', 25);
</script>
    </body>
</html>
