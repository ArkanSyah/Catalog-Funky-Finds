<?php
    require "koneksi.php";
    $queryProdukKategori = mysqli_query($conn, 
    "SELECT k.nama AS kategori_nama, MIN(p.foto) AS foto
    FROM produk p
    JOIN kategori k ON p.kategori_id = k.id
    GROUP BY k.nama"
);

?>

        <div class="container-fluid pt-5">
            <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categories</span></h2>
            <div class="row px-xl-5 pb-3">
                <?php while($data = mysqli_fetch_array($queryProdukKategori)){ ?>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <a class="text-decoration-none" href="produk.php?kategori=<?php echo $data['kategori_nama'] ?>">
                        <div class="product-item bg-light d-flex align-items-center mb-4">
                            <div class="product-img overflow-hidden" style="width: 100px; height: 100px;">
                                <img class="img-fluid" src="image/<?php echo $data['foto'] ?>" alt="">
                            </div>
                            <div class="flex-fill pl-3">
                                <h6><a class="text-decoration-none" href="produk.php?kategori=<?php echo $data['kategori_nama'] ?>"><?php echo $data['kategori_nama'] ?></a></h6>
                                <small class="text-body">5 Products</small>
                            </div>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>