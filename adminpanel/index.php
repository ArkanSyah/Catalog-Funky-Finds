<?php
    require "session.php";
    require "../koneksi.php";

    $querykategori = mysqli_query($conn,"SELECT * FROM kategori");
    $jumlahkategori = mysqli_num_rows($querykategori);

    $queryproduk = mysqli_query($conn,"SELECT * FROM produk");
    $jumlahproduk = mysqli_num_rows($queryproduk);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Dashboard</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<style>
    body {
        background-color: #f4f6f9;
        font-family: 'Inter', sans-serif;
        color: #333;
    }
    .dashboard-header {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 30px;
    }
    .breadcrumb {
        background-color: transparent;
    }
    .card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
    }
    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }
    .card-header {
        background: linear-gradient(135deg, #6c5ce7, #a29bfe);
        color: white;
        padding: 20px;
    }
    .card-icon {
        font-size: 3rem;
        color: white;
    }
    .card-body {
        padding: 20px;
    }
    .card-title {
        font-size: 1.5rem;
        font-weight: 600;
    }
    .card-text {
        font-size: 1.2rem;
        color: #666;
    }
    .link-custom {
        font-weight: 600;
        color: #6c5ce7;
        text-decoration: none;
    }
    .link-custom:hover {
        color: #4834d4;
        text-decoration: underline;
    }
    footer {
        margin-top: 50px;
        padding: 20px 0;
        background-color: #f8f9fa;
        text-align: center;
        font-size: 0.9rem;
        color: #666;
    }
</style>

<body>
    <?php require "navbar.php" ?>
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <i class="fas fa-home"></i> Home
                </li>
            </ol>
        </nav>

        <h1 class="dashboard-header">Welcome, <?php echo $_SESSION['username']; ?>!</h1>

        <div class="row g-4">
            <div class="col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <i class="fas fa-align-justify card-icon me-3"></i>
                        <h2 class="card-title mb-0">Kategori</h2>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Total: <?php echo $jumlahkategori; ?> Kategori</p>
                        <a href="kategori.php" class="link-custom">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <i class="fas fa-box card-icon me-3"></i>
                        <h2 class="card-title mb-0">Produk</h2>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Total: <?php echo $jumlahproduk; ?> Produk</p>
                        <a href="kategori.php" class="link-custom">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../fontawesome/js/all.min.js"></script>
</body>
</html>