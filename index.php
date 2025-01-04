<?php
    require "koneksi.php";
    $queryProdukAwal = mysqli_query($conn,"SELECT id, nama, harga, foto, detail FROM produk LIMIT 8");

    $queryProdukOffer = mysqli_query($conn,"SELECT id, nama, harga, foto, detail FROM produk LIMIT 2");

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


    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 500px;">
                            <img class="position-absolute w-100 h-100" src="img/bannerfunky.png" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <!-- <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Funky Finds</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Est 2021. <br>Offline Store : Jln. Pelita I No 14/29 Labuhan Ratu B. Lampung <br>Google Maps : haf tech computer <br>Wa : 085269635353</p>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/Brown Cream Abstract Elegant Vintage Fashion Collection Blog Banner.png" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase"></h6>
                        <h3 class="text-white mb-3"></h3>
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 270px;">
                    <img class="img-fluid" src="img/Retro Vintage Banner.png" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase"></h6>
                        <h3 class="text-white mb-3"></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->


    <!-- Categories Start -->
    <?php require "categori-start.php" ?>
    <!-- Categories End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Featured Products</span></h2>
        <div class="row px-xl-5">
            <?php while($data = mysqli_fetch_array($queryProdukAwal)){ ?>
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


    <!-- Offer Start -->
    <div class="container-fluid pt-1 pb-1">
        <div class="row px-xl-5">
        <?php while($produk = mysqli_fetch_array($queryProdukOffer)){ ?>
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 400px; border-radius: 50px; object-position: center;">
                    <img class="img-fluid" src="image/<?php echo $produk['foto']; ?>" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3 text-center"><?php echo $produk['nama']; ?></h3>
                        <a href="detail.php?nama=<?php echo $produk['nama']; ?>" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Products Start -->
    <!-- <div class="container-fluid pt-5 pb-3" id="cari">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Recent Products</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/recent-1.png" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                            
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">VGA MSI GeForce GTX 1650 VENTUS <br> XS 4GB DDR6 OC D6 VENTUS XS OC</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>Rp2.290.000</h5><h6 class="text-muted ml-2"><del>Rp2.500.000</del></h6>
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
        </div>
    </div> -->
    <!-- Products End -->


    <!-- Vendor Start -->
    <!-- <div class="container-fluid py-4" id="cari">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <div class="bg-light p-4">
                        <img src="img/logo1.png" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/logo2.png" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/logo3.png" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/logo4.png" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/logo6.png" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/logo8.png" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/logo9.png" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/logo10.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Vendor End -->


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

</html>