-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table petiknews.berita
CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `teras_berita` text NOT NULL,
  `headline` int(2) NOT NULL DEFAULT '0',
  `gambar` longtext NOT NULL,
  `konten` longtext NOT NULL,
  `tanggal` date NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table petiknews.berita: ~3 rows (approximately)
/*!40000 ALTER TABLE `berita` DISABLE KEYS */;
INSERT INTO `berita` (`id`, `judul`, `teras_berita`, `headline`, `gambar`, `konten`, `tanggal`, `kategori_id`, `user_id`) VALUES
	(8, 'Analisis Kriminolog soal Temuan Penjualan Mobil di Kasus Sekeluarga Tewas', 'Mobil milik anggota keluarga yang tewas \'mengering\' di Kalideres, Jakarta Barat, diketahui dijual oleh salah satu korban tewas, Budiyanto Gunawan (68), seharga Rp 160 juta. Lantas, apa hubungan mobil dijual dengan peristiwa tewasnya satu keluarga tersebut?', 1, 'gambar-berita//b60f346741280a613bfb3085fecffa72.jpg', '<p><span style="font-family: Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 1rem;">Mobil milik anggota</span><span style="font-family: Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 1rem;">Â </span><a href="https://www.detik.com/tag/sekeluarga-tewas" style="font-family: Helvetica-FF, Arial, Tahoma, sans-serif; background: rgb(255, 255, 255); font-size: 1rem; color: var(--kuler-1); transition: color 0.3s ease-in-out 0s, background 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s;">keluarga yang tewas \'mengering\'Â </a><span style="font-family: Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 1rem;">di Kalideres, Jakarta Barat, diketahui dijual oleh salah satu korban tewas, Budiyanto Gunawan (68), seharga Rp 160 juta. Lantas, apa hubungan mobil dijual dengan peristiwa tewasnya satu keluarga tersebut?</span><br></p><p style="margin-top: 16px; margin-bottom: 16px; font-family: Helvetica-FF, Arial, Tahoma, sans-serif;">Pakar psikologi forensik lulusan UGM dan Universitas Melbourne, Reza Indragiri Amriel menilai penjualan mobil tersebut tidak bermasalah sebab kini uang tunai hasil jual mobil itu tengah ditelusuri pihak kepolisian.</p><p style="margin-bottom: 16px; font-family: Helvetica-FF, Arial, Tahoma, sans-serif;">"Berarti penjualannya tak bermasalah. Tinggal lagi uang hasil penjualannya," kata Reza kepada wartawan, Rabu (16/11/2022).</p><p style="margin-bottom: 16px; font-family: Helvetica-FF, Arial, Tahoma, sans-serif;">Persoalan muncul jika mobil yang dijual itu tanpa sepengetahuan satu keluarga yang tewas tersebut. Reza menilai hubungan dijual mobil tersebut dengan tewasnya satu keluarga itu hanya sebatas petunjuk.</p><p style="margin-bottom: 16px; font-family: Helvetica-FF, Arial, Tahoma, sans-serif;">"Tapi andaikan mobil itu dijual tanpa seizin keluarga, dan uangnya ada di si penjual, itu persoalan pidana yang lain atau mungkin perdata. Baru sebatas petunjuk ke kemungkinan si penjual telah menjahati keluarga tersebut terkait meninggalnya mereka," ujarnya.</p><p style="margin-bottom: 16px; font-family: Helvetica-FF, Arial, Tahoma, sans-serif;">Reza memperkirakan kasus ini adalah homocide-suicide (pembunuhan-bunuh diri). Reza menjelaskan maksud homocide-suicide atas tewasnya satu keluarga di Kalideres.</p><p style="margin-bottom: 16px; font-family: Helvetica-FF, Arial, Tahoma, sans-serif;">"Pertama, bagian dalam rumah tetap rapi. Kedua, keluarga meminta agar PLN memutus aliran listrik ke rumah. Ketiga, tiga dari empat jenazah tergolong lansia dan memiliki masalah kesehatan," ucapnya.</p><p style="margin-bottom: 16px; font-family: Helvetica-FF, Arial, Tahoma, sans-serif;">Terakhir, dalam penjelasan Reza, terkait pada keyakinan keluarga yang mempraktikkan kremasi, bahwa kematian adalah transformasi dari satu kehidupan ke kehidupan lain. Bunuh diri dinilai tidak absolut dipandang sebagai keburukan, sebagian di antaranya justru memiliki justifikasi moral.</p><p style="margin-bottom: 16px; font-family: Helvetica-FF, Arial, Tahoma, sans-serif;">"Keempat, ada keluarga mereka yang bilang bahwa jenazah akan dikremasi. Itu penanda tentang keyakinan mereka," sebutnya.</p><p style="margin-bottom: 16px; font-family: Helvetica-FF, Arial, Tahoma, sans-serif;">Seperti diketahui, teka-teki mobil milik anggota keluarga yang tewas \'mengering\' di Kalideres, Jakarta Barat, kini telah terungkap. Mobil itu dijual oleh salah satu korban tewas, Budiyanto Gunawan (68), seharga Rp 160 juta.</p>', '2022-09-17', 2, 11),
	(9, 'Cerita Tukang Sampah Rumah Sekeluarga Tewas di Kalideres soal Iuran Nunggak', 'Polisi mengungkap temuan gunungan sampah di dalam rumah satu keluarga tewas \'mengering\' di Kalideres, Jakarta Barat. Selaras dengan temuan itu petugas sampah menyebutkan satu keluarga itu menunggak iuran sampah selama enam bulan terakhir.\r\n"Sudah enam bulan enggak bayar dia," ucap petugas sampah setempat, Wahridin (63), saat ditemui di Perumahan Citra Garden I, Kalideres, Jakarta Barat, Kamis (17/11/2022).', 1, 'gambar-berita//87115d9c9c80f0b821dbbcfbcb61768b.jpeg', '<p style="margin-bottom: 16px; display: inline; font-family: Helvetica-FF, Arial, Tahoma, sans-serif;">Polisi mengungkap temuan gunungan sampah di dalam rumah<a href="https://www.detik.com/tag/sekeluarga-tewas-di-kalideres" style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: var(--kuler-1); transition: color 0.3s ease-in-out 0s, background 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s;">&nbsp;satu keluarga tewas \'mengering\'&nbsp;</a>di Kalideres, Jakarta Barat. Selaras dengan temuan itu petugas sampah menyebutkan satu keluarga itu menunggak iuran sampah selama enam bulan terakhir.</p><p style="margin-top: 16px; margin-bottom: 16px; font-family: Helvetica-FF, Arial, Tahoma, sans-serif;">"Sudah enam bulan enggak bayar dia," ucap petugas sampah setempat, Wahridin (63), saat ditemui di Perumahan Citra Garden I, Kalideres, Jakarta Barat, Kamis (17/11/2022).</p><p style="margin-bottom: 16px; font-family: Helvetica-FF, Arial, Tahoma, sans-serif;">Wahridin, yang sudah lebih dari 30 tahun menjadi petugas sampah di tempat itu, jarang berinteraksi dengan keluarga tersebut. Ia hanya mengenal wajah mereka.</p><div class="clearfix" style="font-family: Helvetica-FF, Arial, Tahoma, sans-serif;"></div><p style="margin-bottom: 16px; font-family: Helvetica-FF, Arial, Tahoma, sans-serif;">"Masih hidup&nbsp;<em>mah</em>&nbsp;pernah (lihat),&nbsp;<em>cuman</em>&nbsp;ketemu&nbsp;<em>aja,</em>&nbsp;nggak&nbsp;<em>ngobrol</em>," katanya.</p><p style="margin-bottom: 16px; font-family: Helvetica-FF, Arial, Tahoma, sans-serif;">Adapun interaksi keduanya hanya sebatas ketika<a href="https://www.detik.com/tag/sekeluarga-tewas" style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: var(--kuler-1); transition: color 0.3s ease-in-out 0s, background 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s;">&nbsp;membayar iuran sampah</a>. Sementara ketika Wahridin mengambil sampah ke rumah-rumah, sampah satu keluarga itu sudah diletakkan di depan rumah.</p><p style="margin-bottom: 16px; font-family: Helvetica-FF, Arial, Tahoma, sans-serif;">"Waktu itu, lagi masih&nbsp;<em>idup</em>&nbsp;<em>nih</em>&nbsp;ya&nbsp;<em>nyangkut</em>&nbsp;di situ&nbsp;<em>aja</em>&nbsp;tuh (depan pagar rumah), di besi disangkut," ucapnya.</p><p style="margin-bottom: 16px; font-family: Helvetica-FF, Arial, Tahoma, sans-serif;">Wahridin juga menyebutkan yang biasanya membayar iuran sampah kepadanya adalah Rudyanto Gunawan (71), salah satu korban yang juga tewas.</p><p style="margin-bottom: 16px; font-family: Helvetica-FF, Arial, Tahoma, sans-serif;">"Bapaknya, langsung panggil waktu hidupnya. \'Nih, Pak\'<em>&nbsp;udah gitu</em>, langsung&nbsp;<em>ngasih</em>&nbsp;Rp 30 ribu, langsung masuk," jelas Wahridin.</p><p style="margin-bottom: 16px; font-family: Helvetica-FF, Arial, Tahoma, sans-serif;">Sama seperti warga lainnya Wahridin pun mengira satu&nbsp;<a href="https://www.detik.com/tag/mayat-sekeluarga" style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: var(--kuler-1); transition: color 0.3s ease-in-out 0s, background 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s;">keluarga itu sudah pindah</a>. Sebab, ia mengaku tak pernah lagi melihat aktivitas dari rumah tersebut.</p><p style="margin-bottom: 16px; font-family: Helvetica-FF, Arial, Tahoma, sans-serif;">"Waktu kita&nbsp;<em>bersihin</em>&nbsp;belakang ya kan tiga bulan sekali, pertama dipanggil-panggil nggak&nbsp;<em>nyahut</em>. Saya juga bingung, apa pindah apa&nbsp;<em>kagak</em>," ucapnya.</p>', '2022-11-17', 2, 11),
	(10, 'Sembarang', 'Sembarang', 0, 'gambar-berita//f24823143c48c0e544e388a3995b046b.jpeg', '<p>sembarang</p>', '2022-11-18', 1, 11);
/*!40000 ALTER TABLE `berita` ENABLE KEYS */;

-- Dumping structure for table petiknews.buku_tamu
CREATE TABLE IF NOT EXISTS `buku_tamu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `email` text,
  `tujuan` text,
  `tanggal` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table petiknews.buku_tamu: ~2 rows (approximately)
/*!40000 ALTER TABLE `buku_tamu` DISABLE KEYS */;
INSERT INTO `buku_tamu` (`id`, `nama`, `email`, `tujuan`, `tanggal`) VALUES
	(1, 'Mitra', 'mitra@email', 'Untuk mencari kitab suci', '2022-11-27 15:27:00');
/*!40000 ALTER TABLE `buku_tamu` ENABLE KEYS */;

-- Dumping structure for table petiknews.kategori
CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table petiknews.kategori: ~6 rows (approximately)
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` (`id`, `slug`, `kategori`) VALUES
	(1, 'Sport', 'Sport'),
	(2, 'Edukasi', 'Edukasi'),
	(4, 'Food', 'Food'),
	(5, 'Lifestyle', 'Lifestyle'),
	(6, 'Travel', 'Travel');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;

-- Dumping structure for table petiknews.komentar
CREATE TABLE IF NOT EXISTS `komentar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `berita_id` int(11) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `komentar` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table petiknews.komentar: ~4 rows (approximately)
/*!40000 ALTER TABLE `komentar` DISABLE KEYS */;
INSERT INTO `komentar` (`id`, `user_id`, `berita_id`, `tanggal`, `komentar`) VALUES
	(1, 11, 8, '2022-11-17 02:52:00', 'ini adalah contoh komentar\r\n'),
	(2, 11, 8, '2022-11-17 02:56:00', 'Contoh komentar kedua'),
	(3, 13, 8, '2022-11-17 02:57:00', 'Salah e salahe'),
	(4, 11, 9, '2022-11-17 11:46:00', 'Anjay kelas'),
	(5, 14, 9, '2022-11-17 14:48:00', 'Kelasss'),
	(6, 11, 10, '2022-11-28 10:59:00', 'tes satu dua');
/*!40000 ALTER TABLE `komentar` ENABLE KEYS */;

-- Dumping structure for table petiknews.kritik
CREATE TABLE IF NOT EXISTS `kritik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `email` text,
  `komentar` text,
  `tanggal` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table petiknews.kritik: ~1 rows (approximately)
/*!40000 ALTER TABLE `kritik` DISABLE KEYS */;
INSERT INTO `kritik` (`id`, `nama`, `email`, `komentar`, `tanggal`) VALUES
	(2, 'Mitra', 'mitra@email', 'Tidak ada saran mantap banget mi tawwa', '2022-11-16 16:20:00');
/*!40000 ALTER TABLE `kritik` ENABLE KEYS */;

-- Dumping structure for table petiknews.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` text,
  `role` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi` longtext,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table petiknews.user: ~3 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `nama`, `email`, `password`, `role`, `gambar`, `deskripsi`) VALUES
	(11, 'Mitra', 'mitra@email', '92706ba4fd3022cede6d1610b17a0d2d', 'admin', NULL, NULL),
	(13, 'Alfian', 'alfian@email', '9f3f3f166858c492c20179bc5f8d1c34', 'penulis', NULL, 'Ini adalah deskripsi'),
	(14, 'uga', 'uga@email', '2b7a41cf36fb4ac6566c11ada01c6778', 'user', NULL, NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Dumping structure for table petiknews.visit
CREATE TABLE IF NOT EXISTS `visit` (
  `tanggal` date DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table petiknews.visit: ~0 rows (approximately)
/*!40000 ALTER TABLE `visit` DISABLE KEYS */;
INSERT INTO `visit` (`tanggal`, `jumlah`) VALUES
	('2022-11-17', 40),
	('2022-11-24', 41),
	('2022-11-27', 182),
	('2022-11-28', 29),
	('2022-11-30', 1),
	('2023-02-28', 5);
/*!40000 ALTER TABLE `visit` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
