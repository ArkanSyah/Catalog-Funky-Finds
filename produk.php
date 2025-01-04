<?php
    require "koneksi.php";
    $queryKategori = mysqli_query($conn,"SELECT * FROM kategori");
    
    // get produk by nama  produk/kyword
    if(isset($_GET['keyword'])){
        $queryProduk = mysqli_query($conn, "SELECT * FROM produk WHERE nama LIKE '%$_GET[keyword]%'");
    }
    // get produk by kategori
    else if(isset($_GET['kategori'])){
        $queryKategoriId = mysqli_query($conn, "SELECT id FROM kategori WHERE nama='$_GET[kategori]'"); 
        $kategoriId = mysqli_fetch_array($queryKategoriId);
    
        $queryProduk = mysqli_query($conn, "SELECT * FROM produk WHERE kategori_id='$kategoriId[id]'");
    }
    // get produk default
    else{
        $queryProduk = mysqli_query($conn, "SELECT * FROM produk");
    }
    
    $countData = mysqli_num_rows($queryProduk);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Funky Finds</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/456245711_854960343365653_7934954467541323306_n-removebg-preview.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- navbar -->
    <?php require "navbar.php" ?>

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <span class="breadcrumb-item active">produk</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3" id="cari">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Products</span></h2>
        <div class="row px-xl-5">
            <?php while($data = mysqli_fetch_array($queryProduk)){ ?>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="image/<?php echo $data['foto']; ?>" alt="">
                    </div>
                    <div class="text-center py-4 card-body">
                        <a class="h6 text-decoration-none card-body" href="detail.php?nama=<?php echo $data['nama']; ?>"><?php echo $data['nama']; ?></a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>Rp <?php echo $data['harga']; ?></h5>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <!-- Products End -->









    <!-- Footer Start -->
    <?php require "footer.php" ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>