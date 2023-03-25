-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2022 pada 07.33
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-dacora`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `isi`, `tanggal`, `gambar`) VALUES
(3, 'Belum Ada Petunjuk Teknis Vaksinasi Booster, Blora Masih Fokus Dosis 2 dan Anak Usia 6-11 Tahun', '<p><strong><img alt=\"\" src=\"https://infopublik.id/assets/upload/headline//vaksinasi_anak_di_Blora.jpg\" style=\"height:389px; width:900px\" />Blora, InfoPublik</strong>&nbsp;- Kepala Dinas Kesehatan Kabupaten Blora, Edy Widayat mengungkapkan hingga saat ini belum ada petunjuk teknis terkait pelaksanaan vaksinasi booster.</p>\r\n\r\n<p>&quot;Belum ada petunjuk teknis. Ini masih fokus untuk dosis 2 dan anak usia 6-11 tahun,&quot; jelasnya, Kamis (13/1/2022).</p>\r\n\r\n<p>Program vaksinasi Covid-19 pada anak-anak &nbsp;6-11 tahun di Blora sudah dimulai dengan target 73.239 dosis.</p>\r\n\r\n<p>Edy Widayat mengemukakan meski sebenarnya dalam vaksinasi untuk mencapai dosis itu tidak berat, tetapi bukan berarti tanpa kendala. &nbsp;</p>\r\n\r\n<p>&quot;Kendalanya ada beberapa orang tua yang termakan berita hoaks sehingga tidak memperbolehkan anaknya divaksin. Ada beberapa penolakan di sebuah SD atas vaksin tersebut,&quot;&nbsp; ungkapnya.</p>\r\n\r\n<p>Berdasarkan update vaksinasi Covid-19 di Kabupaten Blora hingga Rabu (12/1/2022) untuk vaksinasi &nbsp;anak-anak 6-11 tahun dosis 1 tercapai 4.539 atau 6,2%.</p>\r\n\r\n<p>Sedangkan untuk vaksinasi lansia, dosis 1 sebanyak 89.815 atau 89,7 %. Dosis 2 sebanyak 53.697 atau 48,2 %.</p>\r\n\r\n<p>Pihaknya terus melakukan upaya supaya masyarakat khususnya lansia tidak ragu di vaksin.</p>\r\n\r\n<p>&quot;Jadi saat ini kita terus meningkatkan kekebalan kelompok (herd immunity). Protokol kesehatan diminta untuk tetap dipatuhi, untuk mengantisipasi varian baru (omicron) penyebab Covid-19 &quot; ucapnya. (MC Kab. Blora/Teguh).</p>\r\n\r\n<p>sumber :&nbsp;https://infopublik.id/kategori/nusantara/597156/belum-ada-petunjuk-teknis-vaksinasi-booster-blora-masih-fokus-dosis-2-dan-anak-usia-6-11-tahun</p>\r\n', '2022-01-12', '1642234030_df92ccaf0fcf61a09d67.jpg'),
(4, 'Belum Ditemukan Kasus Varian Omicron di Blora, Bupati Minta Waspada', '<p><img alt=\"\" src=\"https://www.blorakab.go.id/resource/doc/post/220112144101IMG-20220112-WA0035.jpg\" style=\"height:467px; width:700px\" />Bupati Blora H. Arief Rohman, S.IP, M.Si dan Wakil Bupati Blora Tri Yuli Setyowati, ST, MM mengikuti rapat koordinasi terkait Covid-19 yang dipimpin oleh Menteri Koordinator Maritim dan Investasi (Menko Marves) Luhut Binsar Pandjaitan, secara virtual,&nbsp;Selasa (11/1/2022) petang.</p>\r\n\r\n<p>Rapat yang diikuti dari Ruang Bupati Blora dihadiri oleh Forkopimda Blora, Sekretaris Daerah Kabupaten Blora, Asisten I dan Asisten III Sekda Blora, Kepala Dinas Kesehatan Kab Blora, beserta kepala OPD dan instansi terkait.</p>\r\n\r\n<p>Pada kesempatan tersebut Menteri Luhut bersama dengan Menteri Kesehatan RI Budi Gunadi Sadikin memberikan arahan kepada daerah dalam rangka menghadapi Covid-19 Omicron.</p>\r\n\r\n<p>Menko Luhut menyampaikan bahwa kenaikan kasus Covid-19 di berbagai belahan dunia terus terjadi. Khususnya kasus Omicron.</p>\r\n\r\n<p>&quot;Kita perlu hati-hati, kasus Covid-19 di berbagai negara maju juga terus meningkat,&quot; paparnya.</p>\r\n\r\n<p>Pihaknya juga menegaskan, bahwa tidak menutup kemungkinan bisa terjadi lonjakan kasus Omicron di Indonesia.</p>\r\n\r\n<p>Meski demikian dirinya meminta agar daerah tidak panik, namun tetap waspada.</p>\r\n\r\n<p>&quot;Omicron telah menimbulkan diberbagai dunia dan Indonesia bukan tidak mungkin akan mengalami hal yang sama,&quot; ujarnya.</p>\r\n\r\n<p>Disampaikannya, kenaikan kasus terkonfirmasi di Indonesia tersebut turut disumbang dari adanya pelaku perjalanan luar negeri atau PPLN.</p>\r\n\r\n<p>&quot;Kasus konfirmasi meningkat tinggi karena dominasi kasus PPLN, kalau kita melihat kasus PPLN ini yang menjadi sumber utama,&quot; paparnya.</p>\r\n\r\n<p>&quot;PPLN yang menjadi isu maka kemarin Presiden meminta atau menghimbau untuk kita jangan perjalanan keluar negeri dulu,&quot; sambungnya.</p>\r\n\r\n<p>Menko Marves meminta agar vaksinasi terus dipacu. Selain itu, pihaknya juga menyampaikan arahannya kepada daerah.</p>\r\n\r\n<p>&quot;Oleh karena itu vaksinasi menjadi kunci pertama pada yang tua-tua, anak anak dan orang komorbid, yang kedua kesiapan rumah sakit, yang ketiga protokol kesehatan kita betul-betul harus ingatkan semuanya,&quot; tuturnya.</p>\r\n\r\n<p>Sementara itu Menteri Kesehatan Budi Gunadi kemudian memaparkan data perkembangan kasus covid-19 di Indonesia, termasuk terkait omicron. Menkes juga meminta agar vaksinasi, khususnya pada lansia agar dipercepat sehingga mereka bisa terlindungi.</p>\r\n\r\n<p>&#39;&#39;Pesan saya bapak ibu percepat vaksinasi terutama lansia, dan remaja plus anak-anak&quot; ucapnya.</p>\r\n\r\n<p>Menkes juga memint kepala daerah untuk menjalin komunikasi kepada masyarakat, bahwa adanya varian Omicron ini masyarakat tidak perlu panik mamun tetap waspada dan hati-hati.</p>\r\n\r\n<p>Selain itu potensi lonjakan kasus bisa saja terjadi.</p>\r\n\r\n<p>&quot;Kepala daerah membantu protokol kesehatan ketat dan penggunaan pedulilindungi. Saya juga minta tolong testing PCR dipercepat, Kita juga minta tolong untuk vaksinasi primer booster lansia diprioritaskan, kemudian remaja dan anak,&quot; paparnya.</p>\r\n\r\n<p>&quot;Kemudian kepala daerah saya minta agar mempersiapkan sarana dan prasarana isoman dan isoter nanti koordinasi dengan kemenkes,&quot; tegasnya.</p>\r\n\r\n<p>Dalam kesempatan itu, Bupati H. Arief Rohman, S.IP., M.Si, menyatakan bahwa hingga hari ini belum ditemukan varian Omicron di Kabupaten Blora.</p>\r\n\r\n<p>Namun demikian kewaspadaan akan terus ditingkatkan sesuai arahan Menko Marves dan Menteri Kesehatan.</p>\r\n\r\n<p>&ldquo;Saat ini bisa dikatakan Blora mendekati normal. Namun dengan adanya varian baru Omicron, kita juga harus tetap waspada. Protokol kesehatan harus tetap kita terapkan. Vaksinasi juga terus kita laksanakan,&rdquo; ucap Bupati. (Tim Dinkominfo/ Prokompim).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>sumber :&nbsp;<em>https://www.blorakab.go.id/index.php/public/berita/detail/3896/belum-ditemukan-kasus-varian-omicron-di-blora--bupati-minta-waspada</em></p>\r\n', '2022-01-15', '1642232088_9a37068105becc0f7f3f.jpg'),
(5, 'Dinkes Pastikan Temuan Kasus Baru Covid-19 di Blora Bukan Klaster Belajar Tatap Muka', '<p><a href=\"C:\\xampp\\htdocs\\dacora\\public\\gambar_berita\" target=\"_top\"><img alt=\"\" src=\"https://cdn0-production-images-kly.akamaized.net/x-84vRkwG-Q_3MGx-z2dn15nGGM=/1280x720/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3474868/original/053932700_1623038461-IMG-20210606-WA0016.jpg\" style=\"height:394px; width:700px\" /><img alt=\"\" src=\"https://infopublik.id/kategori/nusantara/597156/belum-ada-petunjuk-teknis-vaksinasi-booster-blora-masih-fokus-dosis-2-dan-anak-usia-6-11-tahun\" /></a>Petugas Pelaksana Kepala&nbsp;<a href=\"https://www.liputan6.com/regional/read/4611768/babinsa-dan-bidan-desa-di-blora-bersiap-sebar-obat-gratis-dari-pemerintah-pusat\">Dinas Kesehatan Kabupaten Blora</a>, Edi Widayat, mengklaim soal temuan kasus Covid-19 pada sejumlah sekolah yang ada di Blora bukan&nbsp;<a href=\"https://www.liputan6.com/regional/read/4610731/vaksinasi-covid-19-dosis-kedua-untuk-masyarakat-umum-di-blora-masih-nol\">klaster pembelajaran tatap muka</a>&nbsp;(PTM). Ia mengaku telah membahas persoalan ini bersama Gubernur jawa Tengah Ganjar Pranowo.</p>\r\n\r\n<p>&quot;Ya habis dibahas bersama pak gubernur,&quot; ungkap Edi kepada&nbsp;<strong>Liputan6.com</strong>, Selasa (21/9/2021).</p>\r\n\r\n<p>Menurut Edi, soal temuan kasus&nbsp;<a href=\"https://www.liputan6.com/regional/read/4660427/komitmen-bank-bri-terkait-e-warong-fiktif-di-blora\">Covid-19</a>&nbsp;tersebut kejadiannya ditemukan melalui&nbsp;<em>screening</em>&nbsp;yang diselenggarakan sebelum semua guru dan karyawan melaksanakan belajar tatap muka di sekolah.</p>\r\n\r\n<p>&quot;Itu di minggu pertama saya sudah mensyaratkan semua guru dan karyawan yang akan melakukan PTM di rapid antigen dulu. Ternyata hasilnya didapati beberapa guru yang positif,&quot; katanya.</p>\r\n\r\n<p>Ia menjelaskan banyaknya pendidik yang dinyatakan positif Covid-19 tersebut berasal dari delapan sekolah yang berbeda. Meliputi dari sekolah di tingkat SD, SMP, dan SMA.</p>\r\n\r\n<p>&quot;<em>By name</em>&nbsp;sekolahnya mana saja tidak hafal saya, kalau totalnya guru yang positif ada 43 orang,&quot; jelas Edi yang juga Ketua Korwil Persatuan Perawat Nasional Indonesia (PPNI) Eks Karesidenan Pati.</p>\r\n\r\n<p>sumber :&nbsp;https://www.liputan6.com/regional/read/4664452/dinkes-pastikan-temuan-kasus-baru-covid-19-di-blora-bukan-klaster-belajar-tatap-muka</p>\r\n', '2021-06-22', '1642234801_f128e1f55dd692a2e3c7.jpg'),
(6, 'Polisi Dan TNI Jaga Ketat Vaksinasi Covid-19 di Puskesmas Puledagel Blora', '<p><strong><img alt=\"\" src=\"https://sigijateng.id/wp-content/uploads/2022/01/IMG-20220110-WA0089.jpg\" style=\"height:359px; width:800px\" />BLORA (Sigi Jateng)&nbsp;</strong>&ndash; Polisi dan TNI intensif melakukan pemantauan kegiatan vaksinasi Covid-19 yang digelar di sejumlah wilayah di Kabupaten Blora.</p>\r\n\r\n<p>Salah satunya adalah yang dilakukan oleh Bhabinkamtibmas Desa Soko Polsek Jepon Aipda Kusnan dengan Babinsa Koramil Sertu Juliyanto melakukan pemantauan vaksinasi yang digelar di Puskesmas Puledagel kecamatan Jepon, Senin, (10/01/2022).</p>\r\n\r\n<p>Pemantauan vaksinasi dilakukan untuk mensukseskan program pemerintah dalam rangka percepatan penanganan Covid-19. Bersinergi, mereka melaksanakan pendampingan petugas kesehatan dari Puskesmas dalam kegiatan penyuntikan vaksin Covid-19 kepada warga masyarakat.</p>\r\n\r\n<p>Kapolsek Jepon AKP Ramin mengungkapkan bahwa pendampingan tersebut dilaksanakan agar kegiatan penyuntikan vaksin dapat berjalan dengan baik dan lancar sesuai tahapan.</p>\r\n\r\n<p>Keberadaan personel TNI Polri dalam kegiatan tersebut juga untuk membantu menertibkan antrian sehingga tidak menimbulkan kerumunan.&nbsp;</p>\r\n\r\n<p>sumber :&nbsp;https://sigijateng.id/2022/polisi-dan-tni-jaga-ketat-vaksinasi-covid-19-di-puskesmas-puledagel-blora/</p>\r\n', '2022-01-12', '1642232721_b53b5c2c86e0f741484c.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `covid`
--

CREATE TABLE `covid` (
  `id_covid` int(11) NOT NULL,
  `KASUS_COVID_19_POSITIF` int(11) NOT NULL DEFAULT 0,
  `KASUS_COVID_19_POSITIF_Luar_Kota_dirawat_di_Blora` int(11) NOT NULL DEFAULT 0,
  `COVID_19_POSITIF_DIRAWAT_RS` int(11) NOT NULL DEFAULT 0,
  `COVID_19_POSITIF_DIRAWAT_RS_Luar_Blora` int(11) NOT NULL DEFAULT 0,
  `COVID_19_POSITIF_ISOLASI_MANDIRI` int(11) NOT NULL DEFAULT 0,
  `COVID_19_POSITIF_ISOLASI_MANDIRI_Luar_Blora` int(11) NOT NULL DEFAULT 0,
  `SEMBUH` int(11) NOT NULL DEFAULT 0,
  `SEMBUH_Luar_Kota_dirawat_di_Blora` int(11) NOT NULL DEFAULT 0,
  `MENINGGAL` int(11) NOT NULL DEFAULT 0,
  `MENINGGAL_Luar_Kota_dirawat_di_Blora` int(11) NOT NULL DEFAULT 0,
  `PEMERIKSAAN_SWAB` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `covid`
--

INSERT INTO `covid` (`id_covid`, `KASUS_COVID_19_POSITIF`, `KASUS_COVID_19_POSITIF_Luar_Kota_dirawat_di_Blora`, `COVID_19_POSITIF_DIRAWAT_RS`, `COVID_19_POSITIF_DIRAWAT_RS_Luar_Blora`, `COVID_19_POSITIF_ISOLASI_MANDIRI`, `COVID_19_POSITIF_ISOLASI_MANDIRI_Luar_Blora`, `SEMBUH`, `SEMBUH_Luar_Kota_dirawat_di_Blora`, `MENINGGAL`, `MENINGGAL_Luar_Kota_dirawat_di_Blora`, `PEMERIKSAAN_SWAB`) VALUES
(1, 13289, 280, 0, 0, 1, 0, 12298, 234, 900, 46, 76079);

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_vaksin`
--

CREATE TABLE `daftar_vaksin` (
  `id_daftar` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(30) NOT NULL,
  `jenis_vaksin` varchar(255) NOT NULL,
  `dosis` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_vaksin`
--

INSERT INTO `daftar_vaksin` (`id_daftar`, `nik`, `nama_lengkap`, `alamat`, `telepon`, `jenis_vaksin`, `dosis`, `tanggal`) VALUES
(3, '10107050', 'Renaldi Noviandi', 'Blora', '08576854398979', 'Coronavar', 1, '2022-01-12'),
(4, '013308726892', 'Latisya Maharani', 'Jalan Manyar Karangjati Blora', '0895386558209', 'Coronavac', 2, '2022-12-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `nama_galeri` varchar(255) DEFAULT NULL,
  `galeri` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `nama_galeri`, `galeri`) VALUES
(3, 'fase-1-1', '1641989210_6af19bdfafb3c0f91a4e.jpg'),
(4, 'fase-1-2', '1641989245_81633e7500cfe6ec0c91.jpg'),
(5, 'fase-1-3', '1641989267_ecb8057141dc61c01a55.jpg'),
(7, 'fase-1-4', '1641989288_29266293e8ba36a87d08.jpg'),
(8, 'fase-1-5', '1641989319_d88490323ad2ff466a4d.jpeg'),
(9, 'fase-1-6', '1641989367_e58119c084a899c524ea.jpeg'),
(10, 'fase-1-10', '1641989410_7ba16b67d4b393313380.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peta`
--

CREATE TABLE `peta` (
  `KECAMATAN` varchar(20) NOT NULL,
  `KOTA` varchar(20) DEFAULT NULL,
  `PROVINSI` varchar(20) DEFAULT NULL,
  `KASUSCOVD` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peta`
--

INSERT INTO `peta` (`KECAMATAN`, `KOTA`, `PROVINSI`, `KASUSCOVD`) VALUES
('Banjarejo ', 'Blora', 'Jawa Tengah', 514),
('Blora', 'Blora', 'Jawa Tengah', 2433),
('Bogorejo', 'Blora', 'Jawa Tengah', 167),
('Cepu', 'Blora', 'Jawa Tengah', 2800),
('Japah', 'Blora', 'Jawa Tengah', 288),
('Jati', 'Blora', 'Jawa Tengah', 477),
('Jepon', 'Blora', 'Jawa Tengah', 810),
('Jiken', 'Blora', 'Jawa Tengah', 284),
('Kedungtuban', 'Blora', 'Jawa Tengah', 909),
('Kradenan', 'Blora', 'Jawa Tengah', 318),
('Kunduran', 'Blora', 'Jawa Tengah', 718),
('Ngawen', 'Blora', 'Jawa Tengah', 800),
('Randublatung', 'Blora', 'Jawa Tengah', 792),
('Sambong', 'Blora', 'Jawa Tengah', 559),
('Todanan', 'Blora', 'Jawa Tengah', 503),
('Tunjungan', 'Blora', 'Jawa Tengah', 531);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rs`
--

CREATE TABLE `rs` (
  `id_rs` int(11) NOT NULL,
  `nama_rs` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `telepon` varchar(30) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rs`
--

INSERT INTO `rs` (`id_rs`, `nama_rs`, `alamat`, `telepon`, `website`) VALUES
(1, 'RS dr. Oen Surakarta', 'Jl. Brigjen Katamso No.55, Tegalgarjo, Kec. Jebres, Kota Surakarta, Jawa Tengah 57128', '(0271) 643139', 'rs-dr0ensurakarta.com'),
(2, 'RS Kasih Ibu Surakarta', 'Jl. Slamet Riyadi St No.404, Purwasari, Laweyan, Kota Surakarta, Jawa Tengah 57142', '(0271) 714422', 'rs-kasihibusurakarta.com'),
(3, 'RS Paru Ario Wirawan', 'Jl. Hasanudin No.806, Mangunsari, Kec. Sidomukti, Kota Salatiga, Jawa Tengah 50721', '(0296)326130', 'rs-paruariowirawan.com'),
(4, 'RST Slamet Riyadi Surakarta', 'Jl. Slamet Riyadi St No.321Kvi, Purwosari, Laweyan, Kota Surakarta, Jawa Tengah 57148', '(0271) 714656', 'rst-slametriyadisurakarta.com'),
(5, 'RSUD dr. R SOETIJONO BLORA', 'Jl. Dr. Sutomo No.42, Blora, Tempelan, Kec. Blora, Kabupaten Blora, Jawa Tengah 58219', '(0296) 531118', 'rsudblora.blorakab.go.id'),
(6, 'Rumah Sakit Umum Permata Blora', 'Jl. Reksodiputro Kel No.57, Jenar, Kedungjenar, Kec. Blora, Kabupaten Blora, Jawa Tengah 58217', '(0296) 531624', 'rsupermatablora.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(30) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` enum('Admin','User') DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `role`, `foto`) VALUES
(5, 'Renaldi', 'renaldi', 'renaldi', 'User', '1642142698_471980a287d26d7a7e8c.jpg'),
(6, 'Admin  Dacora', 'admindacora', 'dacoraminmin', 'Admin', 'admin.jpg'),
(10, 'Latisya Maharani', 'latisya', 'latisya', 'User', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `vaksin`
--

CREATE TABLE `vaksin` (
  `id_vaksin` int(11) NOT NULL,
  `sasaran_remaja` int(11) DEFAULT 0,
  `sasaran_umum` int(11) DEFAULT 0,
  `sasaran_nakes` int(11) DEFAULT 0,
  `sasaran_publik` int(11) DEFAULT 0,
  `sasaran_lansia` int(11) DEFAULT 0,
  `sasaran_bumil` int(11) DEFAULT 0,
  `vaksin_nakes_dosis1` int(11) DEFAULT 0,
  `vaksin_nakes_dosis2` int(11) DEFAULT 0,
  `vaksin_nakes_dosis3` int(11) DEFAULT 0,
  `vaksin_pelayan_publik_dosis1` int(11) DEFAULT 0,
  `vaksin_pelayan_publik_dosis2` int(11) DEFAULT 0,
  `vaksin_lansia_dosis1` int(11) DEFAULT 0,
  `vaksin_lansia_dosis2` int(11) DEFAULT 0,
  `vaksin_masyarakat_umum_dosis1` int(11) DEFAULT 0,
  `vaksin_masyarakat_umum_dosis2` int(11) DEFAULT 0,
  `vaksin_remaja_dosis1` int(11) DEFAULT 0,
  `vaksin_remaja_dosis2` int(11) DEFAULT 0,
  `vaksin_bumil_dosis1` int(11) DEFAULT 0,
  `vaksin_bumil_dosis2` int(11) DEFAULT 0,
  `vaksin_disabilitas_dosis1` int(11) DEFAULT 0,
  `vaksin_disabilitas_dosis2` int(11) DEFAULT 0,
  `vaksin_anak_dosis1` int(11) DEFAULT 0,
  `vaksin_anak_dosis2` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `vaksin`
--

INSERT INTO `vaksin` (`id_vaksin`, `sasaran_remaja`, `sasaran_umum`, `sasaran_nakes`, `sasaran_publik`, `sasaran_lansia`, `sasaran_bumil`, `vaksin_nakes_dosis1`, `vaksin_nakes_dosis2`, `vaksin_nakes_dosis3`, `vaksin_pelayan_publik_dosis1`, `vaksin_pelayan_publik_dosis2`, `vaksin_lansia_dosis1`, `vaksin_lansia_dosis2`, `vaksin_masyarakat_umum_dosis1`, `vaksin_masyarakat_umum_dosis2`, `vaksin_remaja_dosis1`, `vaksin_remaja_dosis2`, `vaksin_bumil_dosis1`, `vaksin_bumil_dosis2`, `vaksin_disabilitas_dosis1`, `vaksin_disabilitas_dosis2`, `vaksin_anak_dosis1`, `vaksin_anak_dosis2`) VALUES
(1, 79294, 467420, 3667, 53742, 111318, 4069, 4268, 4158, 3567, 57197, 48897, 89452, 52239, 336644, 251826, 69920, 63355, 3532, 2064, 1824, 1235, 1827, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `covid`
--
ALTER TABLE `covid`
  ADD PRIMARY KEY (`id_covid`);

--
-- Indeks untuk tabel `daftar_vaksin`
--
ALTER TABLE `daftar_vaksin`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `peta`
--
ALTER TABLE `peta`
  ADD PRIMARY KEY (`KECAMATAN`);

--
-- Indeks untuk tabel `rs`
--
ALTER TABLE `rs`
  ADD PRIMARY KEY (`id_rs`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `vaksin`
--
ALTER TABLE `vaksin`
  ADD PRIMARY KEY (`id_vaksin`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `covid`
--
ALTER TABLE `covid`
  MODIFY `id_covid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `daftar_vaksin`
--
ALTER TABLE `daftar_vaksin`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `rs`
--
ALTER TABLE `rs`
  MODIFY `id_rs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `vaksin`
--
ALTER TABLE `vaksin`
  MODIFY `id_vaksin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12324;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
