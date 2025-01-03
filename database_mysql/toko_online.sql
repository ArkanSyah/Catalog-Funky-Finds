-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2025 pada 12.41
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(25, 'jacket'),
(26, 'celana'),
(27, 'sweater'),
(29, 'hoodie'),
(30, 'jersey'),
(31, 'baju wanita'),
(32, 'worktshirt'),
(33, 'Sleeveless Shirt'),
(34, 'tshirt');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` double NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `ketersedian_stok` enum('habis','tersedia') DEFAULT 'tersedia'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `kategori_id`, `nama`, `harga`, `foto`, `detail`, `ketersedian_stok`) VALUES
(61, 26, 'Celana Cutbray Baggy Pants', 190000, '5C2MLhmt7YycMFhAhSDb.png', 'Celana Cutbray Wanita Denim Jeans High Waist Wanita Baggy Pants Bigsize Jumbo Celana Kulot Jeans Wanita Korean Style Outfit Wanita Kekinian\r\n\r\nModel highwais celana denim wanita panjang terbaru gaya korea yang modis,\r\nberkualitas tinggi, dan terjangkau.\r\nbakalan bikin kamu tampil keren , kece seharian aman dengan hijabers tetep modis &amp; fashionable\r\n\r\nHARGA MURAH KARENA KAMI LANGSUNG DARI PRODUKSI✅\r\n\r\nSayang,Harap perhatikan toko kami dan dapatkan kupon sebelum membeli. Terima kasih!\r\n\r\nBeli dalam kombinasi untuk diskon lebih banyak\r\nPillh 2, dlskon 2%\r\nPillh 3, dlskon 3%\r\nPillh 5, dlskon 4%\r\n\r\n-FOTO REALPICT YA KA GESER SLIDE BERIKUTNYA YA KA\r\n⬆\r\n\r\n📌 Untuk size S — 5XL\r\n\r\n📌 Untuk BB 40—82 KG\r\n\r\n\r\n✅ BAHAN CELANA DENIM PREMIUM \r\nBAHAN TEBAL DAN , BUKAN CELANA YANG TIPIS YA KA. AUTO BUAT JENJANG DAN \r\nBAKALAN NYAMAN DIPAKAI SEHARIAN\r\n', 'tersedia'),
(63, 26, 'Celana baggy korean style straight loose', 189000, 'AT7BxXi5RpLsakVYhF03.png', '                        Selalu menyediakan produk berkualitas dengan harga terjangkau...\r\n\r\n1. Celana berkualitas tinggi\r\n\r\n2. Cocok untuk reuni keluarga atau kegiatan individu\r\n\r\n3. Deskripsi ukuran:\r\n    S = 27\r\n    M = 28\r\n    L = 29\r\n    XL = 31\r\n    2XL = 33\r\n    3XL=36                    ', 'tersedia'),
(64, 27, 'Sweater Rugby Norty', 125000, 'i22Db35nIHNM25fkIGa1.png', '                        Nikmati kenyamanan dan gaya klasik dengan sweater rugby ini. Terbuat dari bahan berkualitas tinggi, sweater ini memiliki desain kombinasi warna cokelat dan putih yang elegan dengan kerah kancing yang menambahkan sentuhan sporty dan kasual. Cocok digunakan untuk kegiatan sehari-hari maupun hangout santai.\r\n\r\nFitur Produk:\r\n\r\nBahan: Katun lembut dan breathable, nyaman digunakan sepanjang hari.\r\nDesain: Motif garis horizontal putih di tengah yang memberikan tampilan retro dan modern.\r\nModel Kerah: Kerah polo klasik dengan kancing depan.\r\nUkuran: Tersedia dalam berbagai ukuran (S, M, L, XL).\r\nWarna: Kombinasi cokelat hangat dengan aksen putih netral.\r\nCocok untuk:\r\n\r\nGaya santai sehari-hari\r\nAcara semi-formal\r\nTampilan sporty namun tetap trendi                    ', 'tersedia'),
(66, 25, 'Jacket bomber Mercyds', 350000, 'TuBsK5ynWhGnBQK5cZlX.png', 'Jaket Bomber Jeans Unisex – Trendi dan Tangguh\r\nTingkatkan gaya harian Anda dengan jaket bomber jeans yang memadukan desain klasik dan modern. Jaket ini dirancang untuk memberikan tampilan yang bold, stylish, dan tetap nyaman dipakai. Cocok untuk pria maupun wanita, jaket ini adalah pilihan sempurna untuk berbagai kesempatan, mulai dari jalan-jalan santai hingga acara kasual.\r\n\r\nFitur Produk:\r\n\r\nMaterial: Denim berkualitas tinggi yang tahan lama namun tetap ringan dan nyaman dipakai.\r\nDesain: Model bomber dengan potongan klasik yang memberikan kesan sporty dan edgy.\r\nWarna: Biru denim klasik yang mudah dipadukan dengan berbagai outfit.\r\nDetail Tambahan:\r\nResleting logam kokoh di bagian depan.\r\nSaku samping yang praktis untuk menyimpan barang kecil.\r\nManset elastis pada lengan dan pinggang untuk kenyamanan maksimal.\r\nUnisex: Dirancang untuk pria dan wanita dengan berbagai ukuran (S, M, L, XL).\r\nKeunggulan:\r\n\r\nIdeal untuk berbagai musim, terutama di cuaca sejuk.\r\nMudah dipadukan dengan kaos, hoodie, atau kemeja.\r\nMemberikan kesan kasual dan trendi dalam satu tampilan.', 'tersedia'),
(67, 27, 'Sweater Rugbby Triady', 125000, 'F9gQdhUEBXUzVpmwlYv2.png', '                        Nikmati kenyamanan dan gaya klasik dengan sweater rugby ini. Terbuat dari bahan berkualitas tinggi, sweater ini memiliki desain kombinasi warna cokelat dan putih yang elegan dengan kerah kancing yang menambahkan sentuhan sporty dan kasual. Cocok digunakan untuk kegiatan sehari-hari maupun hangout santai.\r\n\r\nFitur Produk:\r\n\r\nBahan: Katun lembut dan breathable, nyaman digunakan sepanjang hari.\r\nDesain: Motif garis horizontal putih di tengah yang memberikan tampilan retro dan modern.\r\nModel Kerah: Kerah polo klasik dengan kancing depan.\r\nUkuran: Tersedia dalam berbagai ukuran (S, M, L, XL).\r\nWarna: Kombinasi cokelat hangat dengan aksen putih netral.\r\nCocok untuk:\r\n\r\nGaya santai sehari-hari\r\nAcara semi-formal\r\nTampilan sporty namun tetap trendi                    ', 'tersedia'),
(68, 30, 'Jersey THE BEATLES', 210000, '8gVvPbiKO3AlvxGtHeyg.png', 'Jersey The Beatles – Gaya Ikonik untuk Penggemar Musik\r\nHadirkan semangat band legendaris ke dalam gaya Anda dengan Jersey The Beatles ini. Dirancang khusus untuk para penggemar sejati, jersey ini menampilkan desain yang stylish dan penuh nostalgia, terinspirasi dari warisan musik ikonik The Beatles. Cocok untuk acara santai, konser, atau sekadar menunjukkan kecintaan Anda pada musik mereka.\r\n\r\nFitur Produk:\r\n\r\nMaterial: Polyester premium yang ringan, breathable, dan nyaman dipakai sepanjang hari.\r\nDesain:\r\nMotif grafis The Beatles dengan elemen retro khas.\r\nWarna dominan hitam, putih, atau kombinasi sesuai koleksi eksklusif.\r\nLogo dan elemen visual yang mencerminkan album dan era The Beatles.\r\nPotongan: Regular fit dengan kerah bulat yang simpel dan nyaman.\r\nUnisex: Dirancang untuk pria dan wanita.\r\nKeunggulan:\r\n\r\nMenggabungkan gaya kasual dengan sentuhan nostalgia.\r\nCocok dipadukan dengan jeans, celana pendek, atau jaket denim.\r\nPilihan ideal untuk penggemar The Beatles atau pecinta fashion bertema vintage.\r\nUkuran Tersedia: S, M, L, XL, XXL.\r\n\r\nPerawatan:\r\nCuci dengan tangan atau mesin menggunakan air dingin. Jangan gunakan pemutih dan setrika bagian dalamnya untuk menjaga keawetan desain.', 'tersedia'),
(69, 29, 'Hoodie Joxyy', 350000, 'gAdZ0FkeCzStTwfrWmGr.png', 'Hoodie Joxy – Simple, Stylish, and Comfortable\r\nTampil santai namun tetap modis dengan Hoodie Joxy yang dirancang untuk memberikan kenyamanan maksimal dan gaya kekinian. Dengan bahan berkualitas tinggi dan desain minimalis, hoodie ini cocok untuk digunakan dalam berbagai aktivitas sehari-hari.\r\n\r\nFitur Produk:\r\n\r\nMaterial:\r\nTerbuat dari kombinasi katun premium dan fleece lembut, yang hangat dan nyaman digunakan.\r\nBreathable dan tidak mudah kusut.\r\nDesain:\r\nModel hoodie dengan kantong depan (kangaroo pocket) yang praktis.\r\nTali penyesuai di bagian tudung (hood) untuk perlindungan ekstra.\r\nLogo &quot;Joxy&quot; minimalis yang memberikan kesan eksklusif dan modern.\r\nWarna: Tersedia dalam pilihan warna solid seperti hitam, abu-abu, navy, dan putih.\r\nPotongan: Oversized fit, memberikan gaya kasual dan nyaman.\r\nKeunggulan:\r\n\r\nCocok untuk pria maupun wanita (unisex).\r\nIdeal untuk berbagai suasana, seperti bersantai, olahraga ringan, atau hangout bersama teman.\r\nMudah dipadukan dengan celana jeans, jogger, atau bahkan celana pendek.\r\nUkuran Tersedia: S, M, L, XL, XXL.\r\n\r\nPerawatan:\r\nCuci dengan air dingin, hindari pemutih, dan setrika bagian dalam hoodie untuk menjaga keawetan bahan serta desainnya.', 'tersedia'),
(70, 31, 'MISS&#039;O BJ982 Baju Wanita Lengan Panjang CropTop ', 70000, 'DlRytm0xX1TgR9wDSM6i.png', 'MISS&#039;O BJ982 – Baju Wanita Lengan Panjang Crop Top Vintage\r\nTampil chic dan stylish dengan MISS&#039;O BJ982, crop top vintage lengan panjang yang dirancang untuk melengkapi gaya feminin Anda. Model ini menggabungkan desain retro dengan sentuhan modern, sehingga cocok untuk berbagai kesempatan, baik kasual maupun semi-formal.\r\n\r\nFitur Produk:\r\n\r\nMaterial:\r\nTerbuat dari kain berkualitas tinggi yang lembut, elastis, dan nyaman di kulit.\r\nBreathable sehingga tetap nyaman digunakan sepanjang hari.\r\nDesain:\r\nCrop top dengan potongan pas di tubuh untuk menonjolkan siluet yang elegan.\r\nLengan panjang dengan detail kerut di ujung, menambah kesan vintage yang klasik.\r\nWarna solid dan motif sederhana yang mudah dipadukan dengan outfit lain.\r\nGaya: Kombinasi antara gaya retro dan modern, cocok untuk pencinta fashion vintage.\r\nKeunggulan:\r\n\r\nCocok untuk berbagai aktivitas, seperti hangout, jalan-jalan, atau acara kasual.\r\nMudah dipadukan dengan rok high-waist, celana jeans, atau bahkan celana kulot.\r\nDesain yang fleksibel untuk tampilan kasual hingga semi-formal.\r\nUkuran Tersedia: S, M, L, XL.\r\n\r\nPerawatan:\r\nCuci dengan tangan atau mesin menggunakan air dingin, jangan gunakan pemutih, dan setrika dengan suhu rendah.\r\n\r\nTambahkan MISS&#039;O BJ982 ini ke koleksi Anda untuk tampilan feminin yang timeless dan trendi!', 'tersedia'),
(71, 32, 'Still Wozy Brown', 230000, 'LkV5HjvUziJ4OgCPTOQZ.png', 'Workshirt – Kemeja Kerja Kasual dan Fungsional\r\nDapatkan tampilan profesional sekaligus nyaman dengan Workshirt, kemeja kerja yang dirancang untuk memenuhi kebutuhan gaya dan fungsi. Cocok untuk berbagai aktivitas, baik di kantor, workshop, atau acara santai, workshirt ini mengombinasikan desain klasik dengan material berkualitas tinggi.\r\n\r\nFitur Produk:\r\n\r\nMaterial:\r\nTerbuat dari kain katun twill yang kuat, breathable, dan nyaman dipakai sepanjang hari.\r\nMudah dirawat dan tahan lama.\r\nDesain:\r\nModel kemeja lengan panjang dengan kancing depan penuh.\r\nDua saku di dada dengan penutup kancing untuk menyimpan barang kecil.\r\nKerah klasik yang memberikan tampilan rapi dan profesional.\r\nTersedia dalam warna solid seperti navy, hitam, abu-abu, dan khaki.\r\nPotongan: Regular fit, pas di badan tanpa mengurangi kenyamanan.\r\nKeunggulan:\r\n\r\nCocok untuk pria maupun wanita (unisex).\r\nSerbaguna: bisa digunakan sebagai kemeja kerja formal atau untuk gaya kasual.\r\nMudah dipadukan dengan celana chinos, jeans, atau celana kerja.\r\nUkuran Tersedia: S, M, L, XL, XXL.\r\n\r\nPerawatan:\r\nCuci dengan air dingin, jangan gunakan pemutih, dan setrika dengan suhu sedang untuk menjaga keawetan bahan.\r\n\r\nDengan Workshirt, Anda bisa tampil rapi, nyaman, dan siap menghadapi berbagai aktivitas sepanjang hari!', 'tersedia'),
(72, 31, 'Rompi Kizzy', 120000, 'EbMhTy8yRgIBk1WjXxgB.png', 'Rompi Kizzy Wanita – Fashionable dan Nyaman\r\nLengkapi gaya Anda dengan Rompi Kizzy Wanita, outfit versatile yang memadukan desain modern dengan kesan kasual elegan. Cocok untuk digunakan di berbagai kesempatan, rompi ini adalah pilihan sempurna untuk tampil stylish dengan sentuhan effortless.\r\n\r\nFitur Produk:\r\n\r\nMaterial:\r\nTerbuat dari bahan rajut berkualitas tinggi yang lembut dan elastis.\r\nTidak panas, nyaman dipakai, dan mudah menyesuaikan bentuk tubuh.\r\nDesain:\r\nPotongan sleeveless dengan leher V-neck yang memberikan kesan ramping.\r\nModel crop atau panjang standar (tergantung varian) dengan detail rajut berpola unik.\r\nGaya minimalis yang mudah dipadukan dengan berbagai outfit.\r\nWarna: Tersedia dalam pilihan warna pastel hingga warna netral seperti beige, hitam, putih, atau cokelat.\r\nKeunggulan:\r\n\r\nCocok untuk gaya kasual, semi-formal, atau hangout santai.\r\nBisa dipadukan dengan kemeja, kaos polos, atau dress untuk menciptakan layer yang stylish.\r\nMemberikan tampilan feminin dengan sentuhan klasik modern.\r\nUkuran Tersedia: All size (fit to S hingga L) atau ukuran reguler (S, M, L).\r\n\r\nPerawatan:\r\nCuci dengan tangan menggunakan detergen lembut, hindari pemerasan berlebihan, dan keringkan dengan cara digantung.\r\n\r\nDengan Rompi Kizzy Wanita, Anda bisa tampil chic dan percaya diri di setiap kesempatan!', 'tersedia'),
(73, 26, 'Cargo Pants', 210000, 'yG6qQ3lA0IbIxAmjIfKL.png', 'Cargo Pants – Celana Multifungsi dan Trendi\r\nTampil keren dan fungsional dengan Cargo Pants, celana yang dirancang untuk menunjang gaya kasual Anda sekaligus memberikan kenyamanan maksimal. Dengan banyak kantong dan desain modern, celana ini menjadi pilihan favorit untuk aktivitas outdoor maupun gaya sehari-hari.\r\n\r\nFitur Produk:\r\n\r\nMaterial:\r\nTerbuat dari bahan katun twill atau canvas premium, yang kuat, tahan lama, dan breathable.\r\nNyaman digunakan dalam berbagai aktivitas, baik indoor maupun outdoor.\r\nDesain:\r\nModel straight fit dengan cutting yang fleksibel, cocok untuk semua bentuk tubuh.\r\nDilengkapi 6-8 kantong multifungsi (di bagian samping, depan, dan belakang) untuk membawa barang kecil seperti dompet, kunci, atau ponsel.\r\nPinggang elastis atau adjustable dengan tali serut (opsional) untuk kenyamanan ekstra.\r\nWarna: Tersedia dalam warna-warna earth tone seperti olive, khaki, hitam, cokelat, dan abu-abu.\r\nKeunggulan:\r\n\r\nCocok untuk pria maupun wanita (unisex).\r\nIdeal untuk berbagai kegiatan seperti hiking, traveling, kerja lapangan, atau hangout kasual.\r\nDesain timeless yang mudah dipadukan dengan kaos, hoodie, atau jaket.\r\nUkuran Tersedia: S, M, L, XL, XXL.\r\n\r\nPerawatan:\r\nCuci dengan air dingin menggunakan detergen lembut, jangan gunakan pemutih, dan setrika dengan suhu rendah.\r\n\r\nCargo Pants ini adalah pilihan sempurna bagi Anda yang menginginkan celana stylish, serbaguna, dan nyaman untuk berbagai aktivitas!', 'tersedia'),
(74, 33, 'Tanktop Hammet', 74000, 'HQljAHvImP246nteeOyA.png', 'Tanktop \r\n100% Cotton. Bahan tebal, lembut, dan nyaman.\r\nSablon menggunakan tinta plastisol terbaik\r\nRegular Fit\r\n\r\nSize Chart (in cm)\r\nS: Length 70 x Width 52cm\r\nM: Length 72x Width 54cm\r\nL: Length 75 x Width 56cm\r\nXL: Length 77 x Width 59cm\r\nXXL: Length 79 x Width 62cm\r\n\r\nMohon tanyakan ketersediaan produk &amp; size terlebih dulu kepada admin sebelum melakukan pemesanan.', 'tersedia'),
(75, 34, 'Tshirt Long Journey', 120000, 'CUKAKMNrqvTVkokzATbc.png', '100% Cotton Combed 20s\r\nRegular Fit\r\nBahan Tebal, Lembut &amp; Nyaman\r\n\r\nSize Chart (in cm)\r\nS: Length 68 x Width 50\r\nM: Length 70 x Width 52cm\r\nL: Length 72 x Width 54cm\r\nXL: Length 75 x Width 56cm\r\nXXL: Length 77 x Width 59cm\r\n\r\nMohon tanyakan ketersediaan produk &amp; size terlebih dulu kepada admin sebelum melakukan pemesanan.', 'tersedia'),
(76, 34, 'Thisrt HSCO', 115000, 'XGfniKtd25T1MSbAfL32.png', '100% Cotton Combed 16s Heavyweigt coolbreeze\r\nBahan Tebal, Lembut &amp; Nyaman\r\nPrint menggunakan sablon plastisol\r\nTerdapat 2 holder chain di bagian depan\r\nTerdapat 2 zipper dibagian bawah\r\nRelaxed Fit\r\n\r\nSize Chart (in cm)\r\nS: Length 67 x Width 56cm\r\nM: Length 69 x Width 58cm\r\nL: Length 71 x Width 60cm\r\nXL: Length 73 x Width 62cm\r\nXXL: Length 75 x Width 64cm\r\n\r\nMohon tanyakan ketersediaan produk &amp; size terlebih dulu kepada admin sebelum melakukan pemesanan.\r\nProduk yang kami kirim sudah harum, karena produk akan di-spray dengan parfume cloth sebelum di-packing.', 'tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$YpGK1wC0bKHp1Y2bSMac7OcgYEIH1HqICV6pUSxZ1eOM2sEVAaGTu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`),
  ADD KEY `kategori_produk` (`kategori_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `kategori_produk` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
