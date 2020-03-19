-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Mar 2020 pada 15.35
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portal_berita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
`id_agenda` int(5) NOT NULL,
  `tema` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tema_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `isi_agenda` text COLLATE latin1_general_ci NOT NULL,
  `tempat` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pengirim` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `tgl_posting` date NOT NULL,
  `jam` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `tema`, `tema_seo`, `isi_agenda`, `tempat`, `pengirim`, `tgl_mulai`, `tgl_selesai`, `tgl_posting`, `jam`, `username`) VALUES
(41, 'Ngumpul Tugas :D', 'Ngumpul Tugas :D', 'Tugas pak arif .. kumpulkan cepet bro !', 'Fakultas Ilmu Komputer', 'Ade Saputra', '2017-12-06', '2017-12-06', '2017-11-30', '09:12', 'ade_saputra'),
(42, 'Tidur', 'Tidur', 'wkwkwkwkwkwk', 'Kamar', 'Nabil', '2017-12-06', '2017-12-07', '2017-11-30', '00:00', 'ade_saputra'),
(43, 'Makan', 'Makan', 'Makan biar gemuk', 'Meja Makan', 'Loni', '2017-12-05', '2017-12-05', '2017-12-04', '03:11', 'ade_saputra'),
(45, 'Belajar website bersama', 'Belajar website bersama', 'Belajar bersama teman-teman fasilkom', 'Kampus Unilak', 'Edo', '2017-12-07', '2017-12-08', '2017-12-07', '02:03', 'ade_saputra'),
(40, 'tes yooo', 'tes yooo', 'hanya Tes', 'pekanbaru', 'ade', '2017-12-03', '2017-12-08', '2017-11-28', '12:00', 'ade_saputra');

-- --------------------------------------------------------

--
-- Struktur dari tabel `album`
--

CREATE TABLE IF NOT EXISTS `album` (
`id_album` int(5) NOT NULL,
  `jdl_album` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `album_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gbr_album` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `album`
--

INSERT INTO `album` (`id_album`, `jdl_album`, `album_seo`, `gbr_album`, `aktif`) VALUES
(21, 'Kartun', 'kartun', '366Gambar Kartun Akhwat Semangat.jpg', 'Y'),
(20, 'Background', 'background', '132568Abstract Circles Wallpapers (9).jpg', 'Y'),
(18, 'Ade Saputra', 'ade-saputra', '2777962c9c7e-6366-4b6e-921b-271f7c8e2e97.jpg', 'Y'),
(12, 'Ilustrator', 'ilustrator', '987701family.jpg', 'Y'),
(19, 'Binatang', 'binatang', '9516900e8c5cfc-9b44-4c4c-8cb2-c3cab50c908c_6(1).jpg', 'Y'),
(17, 'Pastel', 'pastel', '470397041.jpg', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
`id_banner` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`id_banner`, `judul`, `url`, `gambar`, `tgl_posting`) VALUES
(8, 'Jurnal unilak', 'http://ejurnal.unilak.ac.id', 'jurnal.jpg', '2017-11-29'),
(11, 'facebook', 'http://www.facebook.com', 'fb.jpg', '2017-11-29'),
(12, 'Bola', 'http://bola.com', 'bola.jpg', '2017-11-29'),
(13, 'CNN News', 'http://CNN.com', 'cnnn.jpg', '2017-11-29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
`id_berita` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `dibaca` int(5) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kategori`, `id_user`, `judul`, `isi_berita`, `gambar`, `hari`, `tanggal`, `jam`, `dibaca`) VALUES
(21, 19, 'ade_saputra', 'Hp mempunyai perangkat Drone kecil', 'smart phone canggih tekini telah memiliki fitur tambahan yaitu memiliki perangkat drone yang dapat mendukung pengguna untuk foto dan selfi dengan angle yang lebih baik dan bervariasi. Ini merupakan teknologi baru kombinasi smartphone dan Drone.', 'drone.jpg', 'Selasa', '2017-11-28', '20:43:45', 6),
(22, 23, 'ade_saputra', 'Majalah musik', 'Kemunculan A.S dalam meramaikan karya musik tanah air. ', 'd.jpg', 'Kamis', '2017-11-30', '10:24:44', 8),
(23, 2, 'ade_saputra', 'Kesuksesan Indra sjafri', 'Kesuksesan pertama pelatih timnas U19, Indra Sjafri.\r\nia menggunakan taktik seperti permainan dan strategi ala spanyol.\r\nnamun ia tidak ingin di bilang menggunakan permainan tiki-taka, karena itu sudah milik sepanyol.\r\nia menamai pola permainan mereka dengan kata <b>PEPEPA</b> atau pendek-pendek panjang.\r\ndan ia mampu mencari pemain berbakat di seluruh daerah.', 'in5dex.jpg', 'Kamis', '2017-11-30', '11:13:07', 11),
(24, 19, 'ade_saputra', 'Habibie: Pesawat R-80 Akan Buat ', 'Bacharuddin Jusuf Habibie atau yang lebih familiar dengan BJ Habibie mengatakan tidak ada jalan lain agar orang-orang mudah berpindah tempat di benua maritim seperti Indonesia, selain menggunakan pesawat terbang. Oleh karenanya, ia menyambut positif kehadiran NAM Air, yang rencananya mayoritas akan menggunakan pesawat buatan dalam negeri. Artinya, kehadiran maskapai anak Sriwijaya Airlines tersebut turut mendorong industri pesawat terbang di Indonesia. \r\n\r\n"Insya Allah R-80 tahun 2016 atau 2017 akan mengudara dan dunia akan surprise," ungkap Habibie dengan bangga penuh haru dalam Grand Launching NAM Air, di Jakarta Teater, pada Kamis malam (27/9/2013). \r\n\r\nSekadar informasi, R-80 adalah pesawat terbang produksi PT Regio Aviasi Industri (RAI), tempat BJ Habibie duduk sebagai komisaris. \r\n\r\nDalam peluncuran tersebut ditandatangani perjanjian kerja sama (MoU) antara Presiden Direktur NAM Air Jefferson Jauwena dengan BJ Habibie, berkaitan dengan pengadaan 100 unit pesawat R-80, terdiri dari 50 unit firm, dan 50 unit pesawat pilihan. \r\n\r\nPesawat R-80 merupakan pengembangan dari pesawat N250 yang dibuat BJ Habibie. Pesawat N250 merupakan pesawat yang dikendalikan secara elektronik atau dikenal dengan istilah fly by wire kedua, setelah pesawat keluaran Airbus yakni A-300. \r\n\r\n"Pesawat terbang yang pernah dibuat menusia yang dikendalikan secara elektronik yang dikenal dengan fly by wire pertama kali adalah Airbus di Hamburg di mana saya kerja dulu. Di situ, saya pernah menjadi direktur dan executive vice president," kata mantan Presiden RI ketiga itu. \r\n', 'hbb.jpg', 'Selasa', '2017-12-12', '20:04:02', 2),
(25, 19, 'ade_saputra', 'Smartphone Digicoop, Ponsel 4G Karya Anak Negeri', 'Ini adalah ponsel lokal yang merupakan singkatan dari Digital Koperasi yang diinisiasi oleh Koperasi Digital Indonesia Mandiri (KDIM). Bagi Anda yang belum familiar, KDIM merupakan inisiasi Masyarakat Telematika (Mastel) dan Asosiasi Penyelenggara Jaringan Internet Indonesia (APJII).\r\n\r\nKDIM adalah koperasi, dimana badan ini turut melibatkan Badan Ekonomi Kreatif (Bekraf), Kementerian Riset dan Teknologi Pendidikan Tinggi (Kemenristek Dikti), Kementerian Komunikasi dan Informatika (Kemenkominfo), Kementerian Koperasi Usaha Kecil Menengah (Kemenkop UKM), Kementerian Perindustrian (Kemenperin), Institut Teknologi Bandung (ITB), dan PT Jalawave Integra. Selain itu, dua operator seluler Telkomsel dan XL Axiata juga dilibatkan.\r\n\r\nPonsel ini diproduksi di pabrik yang terletak di Cikarang, Jawa Barat dan peluncuran ponsel tersebut juga dihadiri oleh Menkominfo, Rudiantara. Digicoop sendiri akan menyasar segmen yang belum banyak diisi oleh produsen ponsel lain. Ponsel ini sendiri sudah menerima sebanyak 1.500 unit pesanan, yang berarti minat atas ponsel ini cukup tinggi. Lalu apa saja spesifikasi yang dimiliki Digicoop?\r\n\r\nDilihat dari spesifikasinya, Digicoop 01 mengusung spesifikasi khas ponsel low-end. Smartphone ini memiliki layar seluas 4,7 inci dengan resolusi FWVGA dan disokong oleh prosesor quad-core 1,5GHz. Selain itu, terdapat pula RAM sebesar 1GB dengan kapasitas penyimpanan sebesar 8GB. Smartphone ini juga sudah mendukung jaringan 4G.\r\n\r\nUntuk keperluan fotografi, smartphone ini memiliki kamera utama beresolusi 5MP dan kamera depan beresolusi 2MP. Sistem operasi yang dijalankan oleh smartphone ini adalah ID3OS yang merupakan custom dari Android. Tak ketinggalan baterai sebesar 1.800mAh juga diusung oleh smartphone ini. Rencananya, ponsel lokal ini bakal dibanderol seharga Rp1,2 jutaan.\r\n', 'digicop.jpg', 'Selasa', '2017-12-12', '20:49:53', 3),
(26, 19, 'ade_saputra', 'AxiDraw V3, Printer Canggih Yang Bisa Menulis Dan Menggambar Selayaknya Tulisan Tangan Manusia', 'AxiDraw ini merupakan mesin yang berfungsi selayaknya untuk menggambar dan menulis. Namun, tulisan yang dihasilkan oleh AxiDraw V3 ini bukanlah tulisan seperti sebuah mesin printer biasa. Sebagai gantinya, printer ini menggunakan pena pada bagian ujungnya yang berguna untuk menulis serta menggambar. Jadi, printer ini sejatinya lebih berfungsi sebagai sebuah holder untuk pena.\r\nHasil tulisan dan gambar dari AxiDraw V3 ini pun tidak ubahnya seperti sebuah gambar atau tulisan tangan manusia. Menariknya lagi, tulisan dan gambarnya juga terlihat jauh lebih rapi. Perangkat ini pun didesain untuk bisa menulis dan menggambar di berbagai jenis permukaan yang rata.\r\nPrinter canggih yang dibuat oleh sebuah perusahaan bernama Evil Mad Scientist Laboratories ini merupakan versi ketiga dari dua produk sebelumnya yang telah mereka rilis. Perangkat ini bisa digunakan pada berbagai jenis platform. Terdapat aplikasi gratis yang bisa digunakan untuk menjalankan AxiDraw V3 di Mac, Windows, ataupun Linux.\r\nTertarik dengan alat yang menarik ini? Anda bisa memesannya secara langsung kepada Evil Mad Scientist. Harganya ternyata tidak terlalu mahal. Untuk satu unit alat AxiDraw V3 ini, pihak Evil Mad mematok banderol sebesar US$475 atau setara Rp6,3 juta rupiah.\r\n', 'ax.jpg', 'Selasa', '2017-12-12', '20:55:50', 5),
(27, 22, 'ade_saputra', 'Soal Pengakuan Yerusalem oleh Trump, Ini yang Perlu Diwaspadai RI', 'Yerusalem sebagai ibu kota Israel menuai kontroversi. Bahkan, banyak negara mengecam\r\npengakuan tersebut.\r\nEkonom Institute for Development of Economics and Finance (Indef) Aviliani mengatakan,\r\nhal yang perlu diwaspadai atas kondisi tersebut ialah nilai tukar rupiah.\r\n"Kalau kita lihat kita harus mewaspadai nilai tukar rupiah. Yang paling kena dampak itu\r\nbukan hanya Indonesia tapi seluruh dunia," kata dia di Jakarta, Selasa (12/12/2017).\r\nMenurut Aviliani, sekitar 50 persen uang bersifat jangka pendek. Artinya, uang tersebut\r\nmudah berpindah-pindah tempat.\r\n"Hampir 50 persen orang yang punya uang itu short term. Jadi misalnya, dia taruh uang di\r\nIndonesia sebentar, lalu ke Jepang, lalu pindah lagi. Nah perpindahan uang itu akan\r\nmempengaruhi mata uang," sambungnya.\r\nJika itu tidak diwaspadai maka akan berpengaruh kepada laju inflasi Indonesia. "Jadi itu\r\nyang harus dijaga oleh kita, supaya fluktuasi ini, kalau tidak dijaga ini akan mempengaruhi\r\ninflasi kan," ujar dia.\r\nSementara, dia berpendapat, Bank Indonesia (BI) sudah mengeluarkan berbagai kebijakan\r\nuntuk menjaga nilai tukar. Sehingga, pergerakan rupiah saat ini cenderung stabil.\r\n"Saya rasa sekarang BI sudah banyak melakukan, makanya rupiah kita walaupun bergejolak\r\ntapi relatif enggak terlalu tinggi kan," tukas dia.\r\nDalam hal ini, berkoordinasi dengan Bank Indonesia (BI), Otoritas Jasa Keuangan (OJK),\r\ndan Lembaga Penjamin Simpanan (LPS) yang tergabung dalam Komite Stabilitas Sistem\r\nKeuangan (KSSK).\r\n"Kita melakukan monitoring secara cermat, di pasar saham kan ada OJK. Untuk skala lebih\r\nbesar ada KSSK yang selalu berkoordinasi meng-update isu-isu terkini. Kita perhatikan\r\nfaktor-faktor itu dalam pemahaman kita, dan kita perhatikan terus," jelasnya.\r\nSecara keseluruhan, Suahasil memastikan bahwa fundamental ekonomi Indonesia saat ini\r\nmasih kuat. Hal ini bisa terlihat dari realisasi pertumbuhan ekonomi, inflasi, posisi cadangan\r\ndevisa, sistem keuangan.\r\n"Indonesia kan kuat dilihat dari pertumbuhan ekonomi, inflasi, cadev, dan sistem\r\nkeuangannya. Kita terus bekerja memonitoring secara baik," ujar Suahasil.', 'trmp.jpg', 'Selasa', '2017-12-12', '21:09:12', 2),
(28, 2, 'ade_saputra', 'Indonesia U19 juara piala aff !', 'Kutukan selalu gagal di final sempat membayangi Tim nasional Indonesia U-19 ketika akan\r\ntampil dalam partai puncak Piala AFF 2013 di Stadion Delta Sidoarjo, Jawa Timur, Ahad\r\n(22/9/13).\r\nDalam beberapa tahun belakangan, Timnas Indonesia berbagai kelompok umur, selalu saja\r\nkandas di partai puncak. Seperti tahun 2000, 2002 dan 2004 sukses melaju ke final Piala\r\nTiger (kini Piala AFF). Namun apa daya, Tim Garuda hanya menjadi runner-up setelah\r\ndikalahkan Thailand pada 2000 dan 2002, serta Singapura di 2004.', 'inde2x.jpg', 'Selasa', '2017-12-12', '21:19:33', 1),
(29, 2, 'ade_saputra', 'Pelatih timnas U-19 Indra Sjafri mengungkap rahasia di balik kesuksesannya', 'Sosoknya semula relatif tidak banyak\r\ndikenal. Dia juga jarang disebut jika\r\ndibanding para legenda sepak bola Indonesia.\r\nNamun demikian, setelah tim nasional\r\nIndonesia U-19 meraih juara Piala AFF 2013\r\ndan lolos ke putaran final Piala Asia U-19, namanya langsung melejit.\r\nMasyarakat lantas menyanjungnya setinggi langit. Para pencinta sepak bola kemudian seperti\r\nmenemukan pahlawan baru di tengah keterpurukan sepak bola Indonesia.\r\nMaklum saja, ini adalah prestasi tertinggi sepak bola Indonesia setidaknya dalam 22 tahun\r\nterakhir di tingkat Asia Tenggara dan Asia.\r\nSosok penting di balik prestasi yang membanggakan itu adalah Indra Sjafri.\r\nPria kelahiran Lubuk Nyiur, Batang Kapas, Sumatera Barat pada 2 Februari 1963, adalah pelatih\r\ntim Garuda Muda alias timnas U-19.\r\nApa rahasia utama di balik keberhasilan itu?\r\n"Mental yang paling cepat menggerakkan\r\nkita," kata Indra Sjafri, dengan nada tegas,\r\ndalam wawancara khusus dengan wartawan BBC Indonesia, Heyder Affan, Senin 28 Oktober\r\n2013 lalu, di sebuah hotel di Jakarta.\r\nKepada anak asuhnya, Indra selalu menanamkan nilai-nilai bahwa Indonesia adalah negara besar.\r\nâ€œDengan membayangkan bahwa kita negara besar yang penduduknya sekian puluh juta, itu saja\r\nsudah cukup,â€ tandasnya, menyebut salah-satu cara membangun percaya diri para pemainnya.\r\nIndra Sjafri ketika menandatangi perpanjangan\r\nkontrak sebagai pelatih timnas U-19.\r\nKetika timnas U-19 menekuk Korsel 3-2 di\r\nkualifikasi Piala Asia U-19.\r\nTimnas U-19 yang berhasil lolos ke putaran Piala\r\nAsia 2014 di Myanmar.\r\nSelama ini, menurut Indra, ada mental kurang percaya diri yang menghinggapi timnas Indonesia.\r\nâ€œCuma karena di pikiran kita sudah dibangun mental yang selalu di posisikan sebagai orang yang\r\nada di bawah, ya kita akan kalah terus, siapapun lawan kita,â€ ungkapnya.\r\nMental seperti itu yang dia rombak habis-habisan.\r\nâ€œKita tidak mau lagi bicara: mudah-mudahan kita bisa mengalahkan Jepang. Tidak itu lagi\r\nbahasanya! Kita sudah harus memposisikan kita sejajar dengan mereka. Bahkan kita lebih dari\r\nmereka!â€ tandasnya.\r\n<h4>â€˜Raksasa Asiaâ€™</h4>\r\n<br>\r\nUsai menundukkan tim kuat Korea Selatan (3-2) di laga terakhir penyisihan Grup G Piala Asia U-\r\n19, Indra Sjafri dengan agak emosional menyatakan bahwa "timnas Indonesia saat ini layak\r\ndisebut sebagai raksasa Asia."\r\nHal itu dia sampaikan usai laga yang\r\nmengantar anak asuhnya lolos ke putaran\r\nfinal Piala Asia U-19 di Myanmar 2014.\r\nâ€œItu saya tidak asal ngomong,â€ kata Indra saat saya tanyakan apa yang membuatnya melontarkan\r\nkalimat tersebut.\r\nMenurutnya, semua itu didasarkan data statistik yang menunjukkan bahwa anak asuhnya â€œlebih\r\nbaik dari negara-negara lainâ€.\r\nâ€œKemampuan passing (umpan-umpan) kita, itu sudah setara dengan tim-tim elit di Eropa,â€\r\nungkapnya.\r\nApalagi, tambahnya, para pemainnya telah\r\nmelalui proses panjang yaitu tujuh kali laga\r\ndi Piala AFF serta tiga kali pertandingan\r\npada babak kualifikasi AFC.\r\nâ€œIni yang membuat saya yakin,â€ tegas mantan pemain klub PSP Padang (1986-1991).\r\nApabila nantinya anak asuhnya mampu lolos\r\nsampai semi final Piala Asia U-19 2014\r\nhingga berhak tampil di Piala Dunia 2015 di\r\nSelandia Baru, dia yakin Evan Dimas dan\r\nkawan-kawan akan menjadi tim terkuat di Asia.\r\nâ€œKalau proses ini bisa dilalui, saya yakin di usia 21 tahun ke atas, mereka bakal menjadi tim yang\r\nterkuat di Asia. Saya yakin itu,â€ kata ayah dua anak ini.\r\nIndra Sjafri mempraktekan sepak bola moderen\r\ndalam menangani timnas U-19.\r\nSepak bola modern\r\nMantan pemain sayap ini juga menyatakan bahwa perencanaan yang matang merupakan rahasia\r\nlain di balik kemenangan anak-anak asuhnya.\r\n"Tim ini tidak ujuk-ujuk bisa juara. Sudah disiapkan waktu agak panjang," kata Indra.\r\nDia kemudian memberikan salah-satu contoh\r\nperencanaan, yaitu ketika harus menyeleksi\r\ndan memilih materi pemain timnas U-19.\r\n"Kita harus memilih pemain terbaik di Indonesia. Makanya, saat memilih pemain yang merupakan\r\nhasil blusukan, kita tetapkan standar," ungkapnya.\r\nMenurutnya, standar yang dia terapkan merupakan standar Asia atau dunia.\r\n"Kalau mau bicara piala dunia atau Asia, standarnya harus standar Asia atau dunia. Tidak\r\nmungkin di bawah itu," akunya.\r\nDia menekankan, untuk menentukan sebuah standar, maka harus ada parameter.\r\nDi sinilah, akunya, dia dibantu tim ahli dengan berbagai spesialisasi. "Saya tidak kerja sendiri,\r\nkita punya 13 orang staf untuk memilih pemain terbaik. Dan pemain terbaik itu cerminan yang\r\ntampil di Piala Asia dan AFC."\r\nIntinya, Indra Sjafri menerapkan sepak bola modern sejak dia dipercaya menjadi pelatih timnas U-\r\n16 (2011) dan U-19 (2013) lalu.\r\nâ€œSaya sampaikan kita tidak bisa lagi mengelola sepak bola dengan cara-cara yang tradisional,â€\r\nungkapnya.\r\nDi sinilah, dia melibatkan sport science untuk â€œmengambil berbagai keputusan taktikal, keputusan\r\nprogram yang akan kita buat, yang harus dari informasi dan dataâ€.\r\nIndra kemudian mencontohkan persiapan timnya menjelang lawan Korsel. Saat itu timnya\r\nmengumpulkan data terkait calon lawannya itu -- termasuk rekaman video latihan mereka.\r\nSetelah mendiskusikan kelebihan dan kelemahan masing-masing, Indra dan timnya kemudian\r\nmerumuskan â€œapa yang harus dilakukan saat di lapangan.â€\r\nâ€œJadi, saya berharap, tim-tim lain harus mempergunakan hal ini dan tidak bisa lagi kita\r\nmenetapkan tactical by feeling atau by visual dengan melihat dengan kasat mata,â€ katanya lebih\r\nlanjut.', 'indra.jpg', 'Selasa', '2017-12-12', '21:25:34', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukutamu`
--

CREATE TABLE IF NOT EXISTS `bukutamu` (
`no_tamu` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bukutamu`
--

INSERT INTO `bukutamu` (`no_tamu`, `nama`, `email`, `pesan`) VALUES
(1, 'ade saputra', 'ade19smart@gmail.com', 'hai gadis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `download`
--

CREATE TABLE IF NOT EXISTS `download` (
`id_download` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nama_file` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL,
  `hits` int(3) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `download`
--

INSERT INTO `download` (`id_download`, `judul`, `nama_file`, `tgl_posting`, `hits`) VALUES
(5, 'Skrip Captcha', 'captcha.rar', '2009-02-06', 2),
(11, 'modul 6 php', 'Mod-6 Modul PHP 1.pdf', '2017-12-10', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
`id_gallery` int(5) NOT NULL,
  `id_album` int(5) NOT NULL,
  `jdl_gallery` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gallery_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `keterangan` text COLLATE latin1_general_ci NOT NULL,
  `gbr_gallery` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `id_album`, `jdl_gallery`, `gallery_seo`, `keterangan`, `gbr_gallery`) VALUES
(4, 12, 'Didepan Rumah', 'didepan-rumah', 'Sekeluarga sedang berada di ladang.', '258819family field.jpg'),
(15, 21, 'Superman', 'superman', 'Superman kecil mau beraksi', '689147superman.jpg'),
(63, 18, 'ade 7', 'ade-7', '', '784454CYMERA_20170719_123543.jpg'),
(65, 18, 'ade soccer', 'ade-soccer', '', '871551MomentCam_20161208_094829-1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hubungi`
--

CREATE TABLE IF NOT EXISTS `hubungi` (
`id_hubungi` int(5) NOT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `subjek` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pesan` text COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `hubungi`
--

INSERT INTO `hubungi` (`id_hubungi`, `nama`, `email`, `subjek`, `pesan`, `tanggal`) VALUES
(1, 'Roni', 'roni@gmail.com', 'Mohon Informasi de !', 'Mohon informasi dan cara membuat website cms dengan php ini .', '2017-11-28'),
(11, 'Joko', 'joko@gmail.com', 'Ajarin', 'Ajarin PHP Bang !', '2017-11-30'),
(12, 'Zola', 'zola@gmail.com', 'Tugas udah kumpul ?', 'kalau udah kumpul, kabari !', '0000-00-00'),
(15, 'Zikri', 'muhammadzikri04@gmail.com', 'Apa kabar bro ?', 'Kabar mu baik-baik aja bro ?', '2017-12-01'),
(14, 'Leo', 'Leo@gmail.com', 'Mohon Bantuannya', 'Mohon Bantuanya Bro !', '2017-11-30'),
(16, 'Renaldi Boy', 'renaldiprtma@gmail.com', 'Dimana sekarang Boy ?', 'Dimana posisi Boy ???', '2017-07-05'),
(22, 'yoga', 'yoga@gmail.com', 'saya minta tambahkan kategori entertaiment', 'entertaiment tambahkan ya cuyyy', '2017-12-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `katajelek`
--

CREATE TABLE IF NOT EXISTS `katajelek` (
`id_jelek` int(11) NOT NULL,
  `kata` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `ganti` varchar(60) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `katajelek`
--

INSERT INTO `katajelek` (`id_jelek`, `kata`, `ganti`) VALUES
(4, 'sex', 's**'),
(2, 'Tolol', 'T****'),
(3, 'bodoh', 'b****'),
(5, 'fuck', 'f***');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `kategori_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `kategori_seo`, `aktif`) VALUES
(19, 'Teknologi', 'teknologi', 'Y'),
(2, 'Olahraga', 'olahraga', 'Y'),
(22, 'Politik', 'politik', 'Y'),
(23, 'Hiburan', 'hiburan', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
`id_komentar` int(5) NOT NULL,
  `id_berita` int(5) NOT NULL,
  `nama_komentar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `isi_komentar` text COLLATE latin1_general_ci NOT NULL,
  `tgl` date NOT NULL,
  `jam_komentar` time NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM AUTO_INCREMENT=99 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_berita`, `nama_komentar`, `url`, `isi_komentar`, `tgl`, `jam_komentar`, `aktif`) VALUES
(96, 20, 'Ade Saputra', 'www.ademultimediaa.blogspot.com', ' tes  saja  bung   ', '2017-12-09', '20:16:24', 'Y'),
(97, 20, 'Nabil', 'Nabil_@gmail.com', ' eh  ada  bang  ade  :D   ', '2017-12-09', '20:17:42', 'Y'),
(98, 20, 'yogi', 'mantap.com', ' mantappp   ', '2017-12-10', '22:34:43', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ktp`
--

CREATE TABLE IF NOT EXISTS `ktp` (
`nik` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `ttl` varchar(40) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `kelurahan` varchar(40) NOT NULL,
  `kecamatan` varchar(40) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `pekerjaan` varchar(40) NOT NULL,
  `kewarganegaraan` varchar(40) NOT NULL,
  `berlaku` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mainmenu`
--

CREATE TABLE IF NOT EXISTS `mainmenu` (
`id_main` int(5) NOT NULL,
  `nama_menu` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `link` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  `adminmenu` enum('Y','N') NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mainmenu`
--

INSERT INTO `mainmenu` (`id_main`, `nama_menu`, `link`, `aktif`, `adminmenu`) VALUES
(2, 'Beranda', 'http://localhost/Portal-Berita/', 'Y', 'N'),
(3, 'Profil', 'statis-1-profil.html', 'Y', 'N'),
(4, 'Agenda', 'semua-agenda.html', 'Y', 'N'),
(5, 'Berita', 'semua-berita.html', 'Y', 'N'),
(6, 'Download', 'semua-download.html', 'Y', 'N'),
(7, 'Galeri Foto', 'semua-album.html', 'Y', 'N'),
(8, 'Hubungi Kami', 'hubungi-kami.html', 'Y', 'N'),
(54, 'Hubungi Kami', '?module=hubungi', 'N', 'Y'),
(59, 'Banner', '?module=banner', 'N', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `modul`
--

CREATE TABLE IF NOT EXISTS `modul` (
`id_modul` int(5) NOT NULL,
  `nama_modul` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `publish` enum('Y','N') NOT NULL,
  `status` enum('user','admin') NOT NULL,
  `urutan` int(5) NOT NULL,
  `aktif` enum('Y','N') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `modul`
--

INSERT INTO `modul` (`id_modul`, `nama_modul`, `link`, `publish`, `status`, `urutan`, `aktif`) VALUES
(1, 'Manajemen User', '?module=user', 'N', 'admin', 1, 'Y'),
(2, 'Manajemen Modul', '?module=modul', 'N', 'admin', 2, 'Y'),
(4, 'Berita', '?module=berita', 'Y', 'user', 4, 'N'),
(5, 'Agenda', '?module=agenda', 'Y', 'user', 5, 'Y'),
(7, 'Banner', '?module=banner', 'N', 'admin', 7, 'Y'),
(8, 'Hubungi Kami', '?module=hubungi', 'Y', 'admin', 8, 'Y'),
(9, 'Profil Lembaga', '?module=profil', 'Y', 'admin', 3, 'Y'),
(10, 'Pengumuman', '?module=umum', 'Y', 'user', 6, 'Y'),
(11, 'download', '?module=download', 'Y', 'admin', 9, 'Y'),
(12, 'komentar', '?module=komentar 	', 'Y', 'admin', 10, 'Y'),
(13, 'album', '?module=album', 'N', 'admin', 11, 'Y'),
(14, 'Galery foto', '?module=galerifoto', 'Y', 'admin', 12, 'Y'),
(15, 'Kalimat sensor', '?module=katajelek', 'Y', 'admin', 13, 'Y'),
(16, 'Sekilas Info', '?module=sekilasinfo', 'N', 'admin', 14, 'N'),
(17, 'Menu utama', '?module=menuutama', 'Y', 'admin', 15, 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekilasinfo`
--

CREATE TABLE IF NOT EXISTS `sekilasinfo` (
`id_sekilas` int(5) NOT NULL,
  `info` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `sekilasinfo`
--

INSERT INTO `sekilasinfo` (`id_sekilas`, `info`, `tgl_posting`, `gambar`) VALUES
(10, 'Ade Saputra juara 1 lomba design template', '2017-12-10', ''),
(11, 'Mahasiswa melakukan demo solidaritas pembela palestina', '2017-12-10', ''),
(12, 'Ade Akan segera kumpul tugas php :D', '2017-12-10', ''),
(13, 'PSSI mulai melakukan pembinaan dan kompetisi untuk usia dini', '2017-12-10', ''),
(14, 'Persiapan indonesia menjelang Asian Games hampir rampung.', '2017-12-10', ''),
(5, 'Presiden Donald Trump memutuskan sepihak bahwa jerussalem ibukota irak ', '2010-04-11', 'news1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `templates`
--

CREATE TABLE IF NOT EXISTS `templates` (
`id_templates` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pembuat` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `folder` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N'
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `templates`
--

INSERT INTO `templates` (`id_templates`, `judul`, `pembuat`, `folder`, `aktif`) VALUES
(10, 'Ade Saputra', 'Ade Saputra', 'index', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `umum`
--

CREATE TABLE IF NOT EXISTS `umum` (
`id_umum` int(5) NOT NULL,
  `pengumuman` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `pengirim` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `umum`
--

INSERT INTO `umum` (`id_umum`, `pengumuman`, `tgl`, `isi_pengumuman`, `pengirim`) VALUES
(4, 'tessss', '2017-11-26', 'adeeee', 'adee'),
(5, 'Belajar lah', '2017-11-27', 'belajar gila', 'wahahah'),
(6, 'Kumpul Tugas !!!', '2017-12-06', 'ayooi kumpul', '4'),
(7, 'Hanya Mencoba', '2017-12-07', 'Hanya mencoba-coba', 'Zaaki'),
(8, 'Belajar PHP dengan semangat :)', '2017-12-06', 'Belajar di internet dan buku yaaaa', 'Dosen'),
(9, 'Beasiswa', '2017-12-01', 'Beasiswa akan keluar dalam minggu-minggu ii', 'Isu-isu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `password`, `nama_lengkap`, `email`, `level`) VALUES
('ade_saputra', '6a339f0e8be1ca707a251c7a81ce281d', 'ade saputra', 'ade19smart@gmail.com', 'admin'),
('Joko', '9ba0009aa81e794e628a04b51eaf7d7f', 'joko sasongko', 'joko@gmail.com', 'user'),
('nabil', '41ef06b376c21d15439dac37a95b6c00', 'muhammad nabil', 'mnabil@gmail.com', 'user'),
('sity', '202cb962ac59075b964b07152d234b70', 'sity fatimah', 'fsity48@gmail.com', 'user'),
('user', 'ee11cbb19052e40b07aac0ca060c23ee', 'pengguna', 'user@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
 ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
 ADD PRIMARY KEY (`id_album`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
 ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `bukutamu`
--
ALTER TABLE `bukutamu`
 ADD PRIMARY KEY (`no_tamu`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
 ADD PRIMARY KEY (`id_download`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
 ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `hubungi`
--
ALTER TABLE `hubungi`
 ADD PRIMARY KEY (`id_hubungi`);

--
-- Indexes for table `katajelek`
--
ALTER TABLE `katajelek`
 ADD PRIMARY KEY (`id_jelek`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
 ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `ktp`
--
ALTER TABLE `ktp`
 ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `mainmenu`
--
ALTER TABLE `mainmenu`
 ADD PRIMARY KEY (`id_main`);

--
-- Indexes for table `modul`
--
ALTER TABLE `modul`
 ADD PRIMARY KEY (`id_modul`);

--
-- Indexes for table `sekilasinfo`
--
ALTER TABLE `sekilasinfo`
 ADD PRIMARY KEY (`id_sekilas`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
 ADD PRIMARY KEY (`id_templates`);

--
-- Indexes for table `umum`
--
ALTER TABLE `umum`
 ADD PRIMARY KEY (`id_umum`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
MODIFY `id_agenda` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
MODIFY `id_album` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
MODIFY `id_banner` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `bukutamu`
--
ALTER TABLE `bukutamu`
MODIFY `no_tamu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
MODIFY `id_download` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
MODIFY `id_gallery` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `hubungi`
--
ALTER TABLE `hubungi`
MODIFY `id_hubungi` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `katajelek`
--
ALTER TABLE `katajelek`
MODIFY `id_jelek` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
MODIFY `id_komentar` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT for table `ktp`
--
ALTER TABLE `ktp`
MODIFY `nik` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mainmenu`
--
ALTER TABLE `mainmenu`
MODIFY `id_main` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `modul`
--
ALTER TABLE `modul`
MODIFY `id_modul` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `sekilasinfo`
--
ALTER TABLE `sekilasinfo`
MODIFY `id_sekilas` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
MODIFY `id_templates` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `umum`
--
ALTER TABLE `umum`
MODIFY `id_umum` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
