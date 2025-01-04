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

<div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
                <p class="mb-4">Toko Penjualan Seluruh Aneka Baju Vintage</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>J7G4+X5G, Unnamed Road, Labuhan Ratu, Kec. Kedaton, Kota Bandar Lampung, Lampung 35132</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>funkyfinds@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>085789875568</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="produk.php"><i class="fa fa-angle-right mr-2"></i>Product</a>
                            <a class="text-secondary mb-2" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Categories</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <?php while($kategori = mysqli_fetch_array($queryKategori)){ ?>
                            <a class="text-secondary" href="produk.php?kategori=<?php echo $kategori['nama'] ?>"><i 
                            class="fa fa-angle-right mr-2"></i><?php echo $kategori['nama'] ?></a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Newsletter</h5>
                        <p>Jika ada saran atau kritik kirim disini</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Your Email Address">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Sign Up</button>
                                </div>
                            </div>
                        </form>
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" href="#">Domain</a>. All Rights Reserved. Designed
                    by
                    <a class="text-primary" href="https://htmlcodex.com">FunkyFinds</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>