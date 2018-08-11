-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2018 at 11:31 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'user',
  `status` enum('Aktif','Blokir') COLLATE latin1_general_ci NOT NULL DEFAULT 'Aktif',
  `id_session` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama_lengkap`, `email`, `no_telp`, `level`, `status`, `id_session`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'admin@gmail.com', '', 'admin', 'Aktif', ''),
(5, 'kepdes', '8556db435ca001dc364d41a069667fad', 'Kepala Desa', '', '', 'kepdes', 'Aktif', '');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `judul_seo` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `tgl_post` datetime NOT NULL,
  `tgl_update` datetime NOT NULL,
  `keyword` varchar(400) NOT NULL,
  `description` varchar(156) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `judul_seo`, `deskripsi`, `gambar`, `tgl_post`, `tgl_update`, `keyword`, `description`) VALUES
(5, 'Berita Terbaru 4', 'berita-terbaru-4', '<p style=\"text-align: justify;\">Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;</p>\r\n', 'berita-terbaru-4-52.png', '2018-05-23 10:43:05', '2018-05-23 10:43:05', 'berita terbaru', 'berita terbaru'),
(6, 'Berita Terbaru 5', 'berita-terbaru-5', '<p style=\"text-align: justify;\">Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;</p>\r\n', 'berita-terbaru-5-43.png', '2018-05-23 10:52:45', '2018-05-23 10:53:04', '', ''),
(7, 'Berita Terbaru 6', 'berita-terbaru-6', '<p style=\"text-align: justify;\">Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;</p>\r\n', 'berita-terbaru-6-24.png', '2018-05-23 10:53:19', '2018-05-23 10:53:19', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `id_desa` int(5) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `judul_seo` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `sejarah` text NOT NULL,
  `tgl_post` datetime NOT NULL,
  `tgl_update` datetime NOT NULL,
  `keyword` varchar(400) NOT NULL,
  `description` varchar(156) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `jml_penduduk` varchar(100) NOT NULL,
  `jml_kematian` varchar(100) NOT NULL,
  `jml_lahir` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`id_desa`, `judul`, `judul_seo`, `deskripsi`, `sejarah`, `tgl_post`, `tgl_update`, `keyword`, `description`, `gambar`, `jml_penduduk`, `jml_kematian`, `jml_lahir`, `foto`) VALUES
(1, 'LALOLE', 'lalole', '', '<p style=\"text-align:justify\">Desal lalole merupakkan salah satu desa di kecamatan Siompu Barat ,Kabupaten buton. Desa ini memiliki tiga dusun yaitu dusun&nbsp; labantu, dusun laposi , dandusun labantu. Desa ini berbatasan dengan desa kamoali. Dulu Desa ini adalah desa Labolo tetapi setelah terjadi pemekaran pada tahun 2014 berganti nama menjadi desa lalole .Luas wilayah desa lalole adalah sekitar 7,36 KM 2.</p>\r\n', '2018-05-24 13:02:26', '2018-08-01 10:23:07', '', '', 'lalole-53.jpeg', '500 Orang', '8 Orang', '10 Orang', ''),
(2, 'KAMOALI', 'kamoali', '', '<p style=\"text-align:justify\">Desa Lalole merupakkan salah satu desa di kecamatan Siompu Barat,Kabupaten Buton.Desa ini memiliki dusun yaitu dusun lalole dan dusun kamoali. Pada awal tahun 2014 Buton selatan melakukan pemekaran akhirnya berganti menjadi desa Kamoali. Desa ini memiliki tiga dusun yaitu dusun kamoali, dusun bandingi, dusun kambululi dan dusun lalole .Desa Kamoali berbatasan dengan desa Lalole, disebelah timur berbatasan dengan desa wantuampara dan dan disebelah Barat berbatasan tenggara berbatasan dengan desa mokobeau.</p>\r\n\r\n<p style=\"text-align:justify\">Asal usul nama desa Kamoali adalah konon dahulu kala ada suatu ketika ada seseorang manusia yang tinggi besar tiba- tiba menampakkan tubuhnya&nbsp; disebuah pemukiman di desa tersebut. &nbsp;Salah satu Masyarakat yang melihat kejadian tersebut langsung memberi nama desa tersebut dengan nama lalole. Tapi setelah terjadinya pemekaran nama desa lalole berubah menjadi desa Kamoali&nbsp; Luas Wilayah desa lalole adalah sekitar 6,15 KM 2</p>\r\n', '2018-05-24 13:02:39', '2018-08-01 10:24:04', '', '', 'kamoali-84.jpeg', '', '', '', ''),
(3, 'MOKOBEAU', 'mokobeau', '', '<p style=\"text-align:justify\">Desa Mokobeau merupakkan salah satu desa i keamatan siompu barat .Desa ini memiliki dua desa yaitu dusun kanawa dan tanah bengko . Dusun Tanah bengko berbatasan dengan dusun watuampara. Luas wilayah desa mokobeau adalah 7,2 KM 2 .</p>\r\n', '2018-05-24 13:02:54', '2018-08-01 10:24:46', '', '', 'mokobeau-79.jpeg', '', '', '', ''),
(4, 'MOLONA', 'molona', '', '<p style=\"text-align: justify;\">Desa&nbsp; molona adalah salah satu desa di kecamatan siompu barat kabupaten buton . Desa ini memiliki 3 dusun yaitu dusun sangia, dusun sangia, dusun manuru, dan dusun limbo.Desa ini berbatasan dengan desa katampe.Luas wilayah desa molona adalah sekitar &nbsp;9,8 KM 2</p>\r\n', '2018-05-24 13:03:07', '2018-08-01 10:37:56', '', '', 'molona-84.jpeg', '', '', '', ''),
(5, 'WATUAMPARA', 'watuampara', '', '<p style=\"text-align:justify\">Desa watuampara merupakkan salah satu desa di kecamatan siompu barat. Desa ini memiliki dua dusun yaitu dusun watuampara dan dusun lapolo. Dusun watuampara terletak berbatasan dengan desa mokobeau.Luas wilayah desa watuampara adalah sekitar 2,8 KM 2.</p>\r\n\r\n<p style=\"text-align:justify\">Asal usul desa watuampara adalah konon katanya nama watuampara diambil dari sebuah cerita dari seorang penduduk pertama yang bernama Lagila. Lagila menamai desa tersebut dengan nama watuampara.</p>\r\n', '2018-07-28 08:01:59', '2018-08-01 10:50:06', '', '', 'watuampara-74.jpeg', '', '', '', ''),
(6, 'LAMANINGGARA', 'lamaninggara', '', '<p style=\"text-align: justify;\">Desa lamaninggara adalah salah satu desa di kecamatan siompu barat kabupaten buton. Desa ini memiliki empat dusun yaitu dusun welalo, sangilo, sampera,dan&nbsp; manuru. Lamaninggara berbatasan dengan desa mbanua. Luas wilayah dusun lamaninggara adalah sekitar 7,0 KM 2 .</p>\r\n', '2018-07-28 08:02:36', '2018-08-01 10:41:36', '', '', 'lamaninggara-91.jpeg', '', '', '', ''),
(7, 'KATAMPE', 'katampe', '', '<p style=\"text-align: justify;\">Desa katampe adalah salah satu desa di kecamatan siompu barat kabupaten buton. Desa ini memiliki 5 dusun yaitu dusun katampe, dusun wangkopipi, dusun kalokalo dan dusun kampobaru.Desa katampe berbatasan dengan desa molona .Luas wilayah desa katampe adalah sekitar 4,5 KM 2.</p>\r\n', '2018-07-28 08:03:25', '2018-08-01 10:44:15', '', '', 'katampe-5.jpeg', '', '', '', ''),
(8, 'MBANUA', 'mbanua', '', '<p style=\"text-align: justify;\">Desa mbanua adalah salah satu desa di kecamatan siompu barat kabupaten buton . Desa ini memiliki empat dusun yaitu Dusun La jilo, dusun Mbanua, dusun laanta, dusun kalologi dan dusun nato. Desa Mbanua berbatasan dengan desa molona di bagian barat dan bagian timur nya adalah desa lamaninggara. Luas wilayah desa mbanua adalah sekitar 4,40 KM 2.</p>\r\n', '2018-07-28 08:04:10', '2018-08-01 10:45:01', '', '', 'mbanua-0.jpeg', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dusun`
--

CREATE TABLE `dusun` (
  `id_dusun` int(11) NOT NULL,
  `nama_dusun` varchar(50) DEFAULT NULL,
  `id_desa` int(11) DEFAULT NULL,
  `jumlah_rt` int(11) DEFAULT NULL,
  `jumlah_rw` int(11) DEFAULT NULL,
  `jml_penduduk` varchar(20) NOT NULL,
  `jml_lahir` varchar(20) NOT NULL,
  `jml_kematian` varchar(20) NOT NULL,
  `jml_mutasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dusun`
--

INSERT INTO `dusun` (`id_dusun`, `nama_dusun`, `id_desa`, `jumlah_rt`, `jumlah_rw`, `jml_penduduk`, `jml_lahir`, `jml_kematian`, `jml_mutasi`) VALUES
(1, 'LABOLO', 1, 100, 100, '100', '20', '5', '2'),
(7, 'LAPOSI', 1, 100, 100, '', '', '', ''),
(12, 'LABANTU', 1, 100, 100, '', '', '', ''),
(13, 'LALOLE', 2, 20, 20, '', '', '', ''),
(14, 'KAMOALI', 2, 20, 20, '', '', '', ''),
(15, 'BANDINGI', 2, 20, 20, '', '', '', ''),
(16, 'KAMBULULI', 2, 20, 20, '', '', '', ''),
(17, 'KANAWA', 3, 20, 20, '', '', '', ''),
(18, 'TANAH BENGKO', 3, 20, 20, '', '', '', ''),
(19, 'KAMPO BARU', 7, 20, 20, '', '', '', ''),
(20, 'WANGKOPIPI', 7, 20, 20, '', '', '', ''),
(21, 'KALOKALO', 7, 20, 20, '', '', '', ''),
(22, 'KATAMPE', 7, 20, 20, '', '', '', ''),
(23, 'SANGIA', 4, 20, 20, '', '', '', ''),
(24, 'LA JILO', 8, 100, 100, '', '', '', ''),
(25, 'MBANUA', 8, 20, 20, '', '', '', ''),
(26, 'LAANTA', 8, 20, 20, '', '', '', ''),
(27, 'KALOLOGI', 8, 100, 100, '', '', '', ''),
(28, 'NATO', 8, 100, 100, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(5) NOT NULL,
  `judul` varchar(180) NOT NULL,
  `gambar` varchar(180) NOT NULL,
  `tgl_post` datetime NOT NULL,
  `seo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul`, `gambar`, `tgl_post`, `seo`) VALUES
(6, 'ACARA ADAT TAHUNAN ', 'acara-adat-tahunan--53', '2018-08-01 21:26:44', 'acara-adat-tahunan-'),
(7, 'ACARA BOLA FITRI CUP', 'acara-adat-tahunan--18', '2018-08-01 21:27:48', 'acara-bola-fitri-cup'),
(8, 'FITRI CUP', 'fitri-cup-13', '2018-08-01 21:28:47', 'fitri-cup'),
(9, 'wisata laut', 'wisata-laut-2', '2018-08-01 21:34:01', 'wisata-laut'),
(10, 'ziarah ke makam lalole', 'ziarah-ke-makam-lalole-12', '2018-08-01 21:34:38', 'ziarah-ke-makam-lalole');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(50) DEFAULT NULL,
  `visi_misi` text,
  `sejarah` text,
  `total_penduduk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`, `visi_misi`, `sejarah`, `total_penduduk`) VALUES
(2, 'Siompu', 'Tidak ada', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 21000),
(3, 'Siompu Barat', 'Mangan telo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 21000),
(4, 'Siompu TImur', 'Mangan telo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 21000),
(5, 'Siompu Barat', 'Mangan telo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 21000),
(6, 'Siompu Barat', 'Mangan telo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 21000),
(7, 'Siompu TImur', 'Mangan telo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 21000);

-- --------------------------------------------------------

--
-- Table structure for table `kematian`
--

CREATE TABLE `kematian` (
  `id_kematian` int(50) NOT NULL,
  `id_dusun` int(11) NOT NULL,
  `tanggal_kematian` date NOT NULL,
  `nik` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kematian`
--

INSERT INTO `kematian` (`id_kematian`, `id_dusun`, `tanggal_kematian`, `nik`, `keterangan`) VALUES
(2, 10, '2018-07-24', '7404265205630001', 'Sakit');

-- --------------------------------------------------------

--
-- Table structure for table `kepdes`
--

CREATE TABLE `kepdes` (
  `id_kepdes` int(11) NOT NULL,
  `id_desa` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepdes`
--

INSERT INTO `kepdes` (`id_kepdes`, `id_desa`, `gambar`) VALUES
(6, 1, '7.jpeg'),
(7, 2, '44.jpeg'),
(8, 3, '22.jpeg'),
(9, 4, '53.jpeg'),
(10, 5, '24.jpeg'),
(11, 6, '12.jpeg'),
(12, 7, '91.jpeg'),
(13, 8, '15.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('Baru','Dibaca') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `masukkan`
--

CREATE TABLE `masukkan` (
  `id_masukkan` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `subjek` varchar(100) NOT NULL,
  `pesan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masukkan`
--

INSERT INTO `masukkan` (`id_masukkan`, `nama`, `email`, `subjek`, `pesan`) VALUES
(1, 'Siti Nurhalija', 'siti@gmail.com', 'Warna Website ', 'warna website kurang menarik sebaiknya diganti warna hijau'),
(2, 'Riki', 'riki@gmail.com', 'Logo website ', 'Logo website sebaiknya diganti , warna kuning terlalu cerah');

-- --------------------------------------------------------

--
-- Table structure for table `modul`
--

CREATE TABLE `modul` (
  `id_modul` int(5) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `nama_seo` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `hapus` enum('Yes','No') NOT NULL,
  `jenis_modul` enum('Text','Textarea','Judul & Text','Judul & Textarea','Text Images','Textarea Images','Images') NOT NULL,
  `tgl_update` datetime NOT NULL,
  `tampil` enum('Ya','Tidak') NOT NULL,
  `status` enum('On','Off') NOT NULL,
  `no_urut` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modul`
--

INSERT INTO `modul` (`id_modul`, `nama`, `nama_seo`, `gambar`, `deskripsi`, `hapus`, `jenis_modul`, `tgl_update`, `tampil`, `status`, `no_urut`) VALUES
(0, 'Nama Web', 'nama-web', '', 'panel', 'No', '', '2017-11-01 02:22:09', 'Tidak', 'On', 0),
(1, 'Alamat', 'alamat', '', '<p>Jl. Mondorakan no. 83 Kotagede Yogyakarta</p>\r\n', 'No', 'Textarea', '2018-02-22 21:41:36', 'Ya', 'On', 4),
(2, 'Home Footer 2', 'home-footer-2', '', '<p>Exclusive design, compact spatial, prestigious location, limited units, facilities, valuable investment with reasonable price. Find on OUR PROJECT In Yogyakarta..... <a class=\"g-transparent-a b3link\" href=\"project\" id=\"StBttn0link\" target=\"_self\"> </a>VIEW MORE<a class=\"g-transparent-a b3link\" href=\"project\" id=\"StBttn0link\" target=\"_self\"> </a></p>\r\n', 'No', 'Textarea', '2017-12-18 04:20:01', 'Tidak', 'Off', 0),
(8, 'No Telpon', 'no-telpon', '', '0813-7781-466 / 0818-0496-8908', 'No', 'Text', '2018-02-22 21:47:03', 'Ya', 'On', 5),
(9, 'Email', 'email', '', '', 'No', 'Text', '2018-02-22 11:54:21', 'Tidak', 'On', 6),
(10, 'Email 2', 'email', '', 'mail@gmail.com', 'No', '', '2017-10-18 22:59:49', 'Tidak', 'Off', 0),
(11, 'Maps', 'our-maps', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15810.750154014973!2d110.3630825!3d-7.822859!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x963b0545677bbbaf!2sJogja+Regale+Cake+Thiwul+Kekinian!5e0!3m2!1sen!2sid!4v1513851453113\" width=\"100%\" height=\"215\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'No', 'Text', '2017-09-21 12:30:05', 'Tidak', 'On', 7),
(12, 'No WA', 'no-wa', '', '+6285292315758', 'No', 'Text', '2018-01-26 12:42:12', 'Tidak', 'On', 6),
(13, 'No BBM', '', '', '', 'No', 'Text', '2017-06-12 02:14:28', 'Tidak', 'Off', 0),
(15, 'Fanspage Facebook', 'fanspage-facebook', '', 'https://www.facebook.com/gishanfloristklaten', 'No', 'Text', '2018-02-22 11:54:40', 'Tidak', 'On', 8),
(16, 'Twitter Link', 'twitter-link', '', '', 'No', 'Text', '2017-09-17 16:09:16', 'Tidak', 'Off', 0),
(17, 'Instagram Link', 'instagram-link', '', 'https://www.instagram.com/', 'No', '', '2017-10-14 00:08:16', 'Tidak', 'On', 3),
(18, 'Visitor Embed', 'visitor-embed', '', '21232f297a57a5a743894a0e4a801fc3-18', 'No', '', '2017-09-17 13:29:44', 'Tidak', 'Off', 0),
(19, 'Login', 'visitor-counter', '', '<b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-09-22 23:52:08 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-09-23 00:14:31 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-10 23:14:45 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-11 02:49:26 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-12 14:33:17 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-12 18:03:22 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-12 18:19:55 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-12 20:51:11 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-12 21:44:34 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-14 00:03:06 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-14 02:07:14 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-14 04:31:29 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-14 07:09:02 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-15 09:37:11 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-15 09:39:42 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-17 06:25:45 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-17 19:08:06 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-18 22:55:55 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-25 01:22:17 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-25 01:23:35 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-25 02:51:08 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-25 03:09:25 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-25 03:49:16 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-25 09:28:56 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-26 01:01:03 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-26 02:00:52 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-26 03:15:08 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-26 03:25:46 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-26 06:06:06 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-26 08:08:42 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-26 09:35:41 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-26 09:40:30 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-26 09:47:05 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-26 10:41:35 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-26 10:57:11 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-26 11:08:19 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-27 07:39:22 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-27 17:28:29 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-28 23:07:27 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-29 02:00:50 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-29 04:15:30 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-29 05:14:01 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-29 05:22:07 | User +Admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-29 11:06:20 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-29 12:59:39 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-29 19:43:17 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-29 21:08:49 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-30 07:13:48 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-31 18:29:47 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-31 19:26:50 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-31 21:09:11 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-10-31 22:46:04 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-01 02:00:13 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-01 02:33:12 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-01 13:05:38 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-01 18:12:09 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-01 19:24:44 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-01 20:21:45 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-01 20:21:55 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-14 14:09:40 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-14 14:25:11 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-14 14:27:14 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-14 14:30:15 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-14 14:32:22 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-14 14:42:22 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-14 14:49:00 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-18 07:50:47 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-18 12:39:17 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-18 19:53:41 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-19 16:29:19 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-19 16:42:16 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-19 17:03:38 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-21 21:37:19 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-21 21:47:36 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-21 21:59:34 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-21 22:01:30 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-21 22:25:01 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-21 23:49:24 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-21 23:54:31 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-22 00:27:34 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-22 01:07:01 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-22 02:09:09 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-22 19:35:29 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-23 17:12:30 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-30 17:39:11 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-30 17:39:14 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-30 17:40:22 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-30 17:42:15 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-30 17:43:47 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-30 17:44:28 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-30 17:52:15 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-30 17:56:34 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-11-30 18:04:30 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-04 20:07:58 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-04 20:09:05 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-05 00:32:27 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-05 02:43:44 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-05 20:25:39 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-05 20:50:49 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-05 20:51:07 | User +fauzi+ | Password +fauzi+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-05 20:51:16 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-05 22:17:03 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-05 22:18:18 | User +Admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-05 23:41:36 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-06 10:03:25 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-06 10:35:09 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-06 18:48:13 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-06 19:37:39 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-06 21:06:46 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-06 23:12:52 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-07 01:23:29 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-07 01:51:19 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-12 00:04:15 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-12 00:11:46 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-12 00:13:12 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-12 00:32:51 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-12 00:38:21 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-12 00:42:07 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-12 01:26:10 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-12 01:46:38 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-13 02:51:01 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-18 03:08:30 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-18 04:19:38 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-18 04:37:27 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-19 22:12:36 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-19 23:11:13 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-19 23:44:39 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-20 00:00:34 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-21 18:24:03 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-21 19:12:20 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-21 19:13:57 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-21 19:14:53 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-21 19:25:25 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-24 04:07:38 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-24 04:57:56 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-24 05:20:31 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-24 06:29:28 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-24 07:13:25 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-24 10:13:38 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-24 10:23:23 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-24 10:59:31 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-24 11:21:31 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-24 11:38:52 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-24 11:41:03 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-24 12:21:01 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2017-12-25 11:02:26 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-01-26 09:25:08 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-01-26 13:21:41 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-02-07 21:23:53 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-02-21 10:51:41 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-02-21 13:17:33 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-02-21 13:49:58 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-02-21 14:34:21 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-02-22 05:19:14 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-02-22 05:23:19 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-02-22 06:20:08 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-02-22 10:24:58 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-02-22 18:58:53 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-02-22 20:01:11 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-02-22 21:37:03 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-02-22 21:46:53 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-02-23 07:30:11 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-02-23 07:50:21 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-02-23 07:52:31 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-02-23 10:46:15 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-02-23 11:23:17 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-02-24 06:24:58 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-02-24 07:50:43 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-02-24 14:50:40 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-02-24 15:40:32 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-02-24 18:31:57 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-02-25 09:45:34 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-02-25 12:21:34 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-02-25 13:33:29 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-02-27 09:08:20 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-02-27 09:17:05 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-04-06 14:44:53 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-04-06 14:53:23 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-04-07 20:46:02 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-04-17 19:29:38 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-04-18 10:36:51 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-04-21 15:18:40 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-05-22 19:56:01 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-05-22 20:08:41 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-05-22 20:39:35 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-05-22 21:08:38 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-05-22 21:11:23 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-05-22 21:12:59 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-05-22 21:20:52 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-05-23 04:54:55 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-05-23 04:59:48 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-05-23 09:24:47 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-05-23 10:39:40 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-05-23 10:48:08 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-05-23 13:06:55 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-05-23 14:34:48 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-05-23 18:29:45 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-05-23 18:37:27 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-05-24 04:41:55 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-05-24 04:45:03 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-05-24 05:02:19 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-05-24 05:15:57 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-05-24 12:52:30 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-05-29 11:18:08 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-05-29 11:56:02 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-07-17 21:10:16 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-07-19 06:02:21 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-07-20 13:11:20 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-07-21 07:08:21 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-07-22 13:15:24 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-07-22 17:04:42 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-07-24 21:20:57 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-07-25 06:58:06 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-07-25 14:45:51 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-07-25 19:47:45 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-07-26 13:20:26 | User +kepdes+ | Password +kepdes+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-07-26 12:36:32 | User +kepdes+ | Password +kepdes+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-07-26 12:38:40 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-07-26 22:59:46 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-07-26 23:19:59 | User +kepdes+ | Password +kepdes+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-07-27 07:31:23 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-07-27 07:38:22 | User +kepdes+ | Password +kepdes+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-07-28 07:59:06 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-07-29 02:37:48 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-07-29 04:40:16 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-07-29 15:34:30 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-07-31 09:34:28 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-07-31 20:51:12 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-07-31 23:45:16 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-08-01 00:55:39 | User +kepdes+ | Password +kepdes+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-08-01 01:00:26 | User +kepdes+ | Password +kepdes+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-08-01 01:03:27 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-08-01 10:09:31 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-08-01 10:16:48 | User +kepdes+ | Password +kepdes+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-08-01 10:18:27 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-08-01 18:36:02 | User +admin+ | Password +admin+ <br><b>Login in &nbsp;&nbsp;&nbsp;: </b>2018-08-02 09:24:03 | User +admin+ | Password +admin+ <br>', 'No', 'Text', '2017-09-17 13:29:44', 'Tidak', 'Off', 0),
(20, 'FB', 'fb', '', 'https://www.facebook.com/jogjaregale', 'No', '', '2017-09-21 12:30:05', 'Tidak', 'On', 2),
(21, 'Logo WEB', 'logo-web', '', 'logo_new.png', 'No', 'Images', '2017-12-12 01:35:03', 'Tidak', 'On', 1),
(22, 'Logo WEB Small', 'logo-web-small', '', 'logo_new@2x.png', 'No', 'Images', '2017-11-21 22:56:16', 'Tidak', 'Off', 0),
(23, 'Profil', 'profil', '', '<p>tes ya</p>\r\n', '', '', '2018-02-22 06:00:31', '', '', 0),
(77, 'Title', 'title', '', 'desa sipirok', 'No', '', '2017-10-26 06:07:05', 'Tidak', 'Off', 0),
(78, 'Keywords', 'keywords', '', 'desa sipirok', 'No', 'Text', '2017-12-20 00:07:46', 'Tidak', 'Off', 0),
(79, 'Description', 'description', '', 'desa sipirok', 'No', 'Text', '2017-12-20 00:07:55', 'Tidak', 'Off', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mutasi`
--

CREATE TABLE `mutasi` (
  `id_mutasi` int(50) NOT NULL,
  `id_dusun` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `asal_dusun` varchar(100) NOT NULL,
  `tujuan_mutasi` varchar(20) NOT NULL,
  `tanggal_mutasi` date NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mutasi`
--

INSERT INTO `mutasi` (`id_mutasi`, `id_dusun`, `nik`, `asal_dusun`, `tujuan_mutasi`, `tanggal_mutasi`, `keterangan`) VALUES
(2, 10, '7404261105500001', 'Kalasan', '11', '2018-07-17', 'Karna pekerjaan'),
(3, 1, '7404265205630001', 'lalole', '10', '2018-07-24', 'Pekerjaan yang mengharuskan untuk pindah');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id_page` int(5) NOT NULL,
  `nama` varchar(180) NOT NULL,
  `nama_seo` varchar(200) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `deskripsi2` text,
  `hapus` enum('Yes','No') NOT NULL,
  `jenis_modul` enum('Text','Textarea','Judul & Text','Judul & Textarea','Text Images','Textarea Images','Images','Images SEO') NOT NULL,
  `status` enum('On','Off') NOT NULL,
  `title` varchar(128) NOT NULL,
  `keyword` varchar(400) NOT NULL,
  `description` varchar(156) NOT NULL,
  `tgl_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id_page`, `nama`, `nama_seo`, `gambar`, `deskripsi`, `deskripsi2`, `hapus`, `jenis_modul`, `status`, `title`, `keyword`, `description`, `tgl_update`) VALUES
(0, 'Home', 'home', '', '', '', 'No', 'Textarea Images', 'On', '', '', '', '2018-04-06 15:03:56'),
(1, 'Tentang Kami', 'tentang-kami', '', '<p>Kecamatan Siompu Barat adalah salah satu kecamatan yang ada di Kabupaten Buton Provinsi Sulawesi Tenggara. Kecamatan ini berada di pulau Siompu. Kecamatan Siompu Barat merupakan kecamatan yang dari pemekaran Kecamatan Siompu. Kecamatan Siompu Barat memiliki luas wilayah&nbsp;12 km<sup>2.&nbsp;</sup>Kecamatan ini dimekarkan pada tanggal 7 September 2006 dan diresmikan oleh bupati pada saat itu, yaitu Ir. La Ode Sjafei Kahar. Pada saat dimekarkan Kecamatan Siompu Barat masih terdiri dari 6 desa, yaitu: Desa Molona, Desa Lalole, Desa Mbanua, Desa Watuampara, Desa Katampe, dan Desa Lamaninggara. Pada tahun 2011, di Kecamatan Siompu Barat terjadi pemekaran desa yaitu Desa Kamoali dan Desa Mokobeau. Desa Kamoali merupakan desa pemekaran dari desa Lalole dan desa Mokobeau merupakan daerah pemekaran dari desa Watuampara sehingga Kecamatan Siompu Barat saat ini terdiri dari 8 desa.</p>\r\n', '', 'No', 'Textarea Images', 'On', 'tentang-kami', 'tentang-kami', 'tentang-kami', '2018-07-29 02:48:41'),
(2, 'Profil Desa', 'profil-desa', '', '<p>Profil Desa</p>\r\n', '', 'No', 'Textarea Images', 'On', 'profil Desa', 'profil Desa', 'profil Desa', '2018-07-18 07:07:47'),
(3, 'Kotak Saran', 'kotak-saran', '', '<p>Nama&nbsp; : iin Supia&nbsp;&nbsp;</p>\r\n\r\n<p>Email&nbsp; &nbsp;: iinsupia@gmail.com</p>\r\n\r\n<p>Alamat : Buton , Sioumpu Barat</p>\r\n\r\n<p>Telpon&nbsp;: 0817706635</p>\r\n', '', 'No', 'Textarea Images', 'On', 'kotak-saran', 'kotak-saran', 'kotak-saran', '2018-07-19 06:19:26'),
(4, 'Berita terbaru', 'Berita terbaru', '', '<p>berita terbaru</p>\r\n', '', 'No', 'Textarea Images', 'On', 'berita terbaru', 'berita terbaru', 'berita terbaru', '2018-05-23 10:40:10'),
(5, 'Galeri', 'galeri', '', 'galeri desa', 'galeri desa', 'No', 'Text Images', 'On', 'galeri desa', 'galeri desa', 'galeri desa', '2018-02-23 11:24:01'),
(6, 'Video', 'video', '', 'video', 'video', 'No', 'Text Images', 'On', 'video', 'video', 'video', '2018-02-22 05:12:18'),
(10, 'Data Desa', 'data-desa', '', 'data desa', 'data desa', 'No', 'Text Images', 'On', 'data desa', 'data desa', 'data desa', '2018-05-23 00:00:00'),
(11, 'Visi Misi', 'visi-misi', '', '<p style=\"text-align:center\"><big><span style=\"font-size:24px\">VISI&nbsp;</span></big></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<h3 style=\"text-align:center\"><big>Terwujudnya&nbsp;Kabupaten&nbsp;Buton&nbsp;Kecamatan Siompu Barat Sebagai&nbsp;Pusat&nbsp;Pertumbuhan&nbsp;Baru Melalui&nbsp;Optimalisasi&nbsp;Sumberdaya&nbsp;Lokal&nbsp;Menuju&nbsp;Masyarakat&nbsp;Sejahtera,&nbsp;Mandiri&nbsp;Dan&nbsp;Bermartabat</big></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1 style=\"text-align:center\"><span style=\"font-size:22px\"><big>M I S I&nbsp;</big></span></h1>\r\n\r\n<h3 style=\"text-align:center\"><big>Meningkatkan ketersediaan infrastruktur dasar untuk menjamin mobilitas penduduk yang dinamis dalam Prinsip Pembangunan Berkelanjutan.</big></h3>\r\n\r\n<h3 style=\"text-align:center\"><big>Meningkatkan&nbsp; Pembangunan Sumberdaya manuasia&nbsp;&nbsp; Buton Selatan yang berkualitas dan berdaya saing.</big></h3>\r\n\r\n<h3 style=\"text-align:center\"><big>Meningkatkan kualitas Penyelenggaran Pemerintahan yang efektif dan efesien.</big></h3>\r\n\r\n<h3 style=\"text-align:center\"><big>Mengembangkan Perekonomian Masyarakat yang berbasis potensi lokal daerah dengan prinsip pembangunan berkelanjutan.</big></h3>\r\n\r\n<h3 style=\"text-align:center\"><big>Mengembangkan Nilai-nilai Budaya Lokal dalam Tatanan Kehidupan Sosial Kemasyarakat dan Pariwisata.</big></h3>\r\n', 'tes', 'No', 'Textarea Images', 'On', '', '', '', '2018-07-29 02:43:27'),
(12, 'Pakaian', 'pakaian', '', '<p style=\"text-align: justify;\">Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;</p>\r\n', 'pakaian', 'No', 'Textarea Images', 'On', 'pakaian', 'pakaian', 'pakaian', '2018-05-24 04:50:34'),
(13, 'Tenunan', 'tenunan', '', '<p style=\"text-align: justify;\">Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;</p>\r\n', 'tenunan', 'No', 'Textarea Images', 'On', 'tenunan', 'tenunan', 'tenunan', '2018-05-24 04:50:46'),
(14, 'Adat Istiadat', 'adat-istiadat', '', 'adat istiadat', 'adat istiadat', 'No', 'Textarea Images', 'On', 'adat-istiadat', 'adat-istiadat', 'adat-istiadat', '2018-05-24 00:00:00'),
(15, 'Makanan Khas', 'makanan-khas', '', 'makanan-khas', 'makanan-khas', 'No', 'Textarea Images', 'On', 'makanan-khas', 'makanan-khas', 'makanan-khas', '2018-05-24 00:00:00'),
(16, 'Wisata Pemandian', 'wisata-pemandian', '', 'Wisata Pemandian', 'Wisata Pemandian', 'No', 'Textarea Images', 'On', 'wisata-pemandian', 'wisata-pemandian', 'wisata-pemandian', '2018-05-24 00:00:00'),
(17, 'Wisata Pantai', 'wisata-pantai', '', 'Wisata Pantai', 'Wisata Pantai', 'No', 'Textarea Images', 'On', 'wisata-pantai', 'wisata-pantai', 'wisata-pantai', '2018-05-24 00:00:00'),
(23, 'Sejarah', 'sejarah', '', '<p style=\"text-align: justify;\">Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data</p>\r\n', 'asd', 'No', 'Textarea Images', 'On', 'sejarah', 'sejarah', 'sejarah', '2018-05-29 11:26:39'),
(24, 'Kependudukan', 'kependudukan', '', '<p style=\"text-align:justify\">Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data&nbsp;Masih dalam penginputan data</p>\r\n', 'kependudukan', 'No', 'Textarea Images', 'On', 'kependudukan', 'kependudukan', 'kependudukan', '2018-07-18 07:06:42'),
(25, 'Potensi Desa', 'potensi-desa', '', 'potensi-desa', 'potensi-desa', 'No', 'Textarea Images', 'On', 'potensi-desa', 'potensi-desa', 'potensi-desa', '2018-07-21 00:00:00'),
(26, 'Wisata', 'wisata', '', 'wisata', NULL, 'No', 'Textarea Images', 'On', 'wisata', 'wisata', 'wisata', '2018-07-21 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `nama_penduduk` varchar(50) DEFAULT NULL,
  `id_dusun` int(11) DEFAULT NULL,
  `no_kk` varchar(50) DEFAULT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `status_menikah` enum('Y','N') DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `agama` enum('Islam','Kristen','Hindu','Budha','Khatolik') NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('P','L') DEFAULT NULL,
  `no_hp` varchar(50) NOT NULL,
  `pendidikan_terakhir` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id_penduduk`, `nama_penduduk`, `id_dusun`, `no_kk`, `nik`, `alamat`, `tempat_lahir`, `status_menikah`, `pekerjaan`, `agama`, `tgl_lahir`, `jenis_kelamin`, `no_hp`, `pendidikan_terakhir`) VALUES
(1, 'La Safili', 11, '7404261806080069', '7404261105500001', 'jln.labolo', 'Molona', 'Y', 'Nelayan', 'Islam', '2014-05-11', 'L', '0817705514', 'SD'),
(2, 'Tatik', 10, '7404261806080069', '7404265205630001', 'Jln.labolo', 'Molona', 'N', 'Ibu Rumah Tangga', 'Budha', '2015-05-12', 'P', '0817708849', 'S1'),
(3, 'Sukma', 11, '2012399112313', '1231231231232', 'Buru', 'Yogyakarta', 'Y', 'Guru', 'Budha', '2014-11-11', 'L', '0817783321', 'S1'),
(4, 'Yogi Pratam', 1, '7404310412140002', '7404310202900002', 'Jalan Labolo', 'Watuampara', 'Y', 'Nelayan', '', '1990-02-02', NULL, '082393206562', 'SMP'),
(5, 'Nurfiati', 1, '7404310412140002', '7404264107860003', 'Jalan Labolo', 'lalole', 'Y', 'IRT', 'Islam', '1986-06-03', 'P', '082395694398', 'Sarjana'),
(6, 'Anugerah Ergi P', 1, '7404310412140002', '740431011130001', 'Jalan Labolo', 'lalole', 'N', 'belum bekerja', '', '2013-07-11', NULL, '082393206562', 'belum sekolah'),
(7, 'La Harmawi', 1, '7404312312140001', '7404310206890003', 'Jalan Labolo', 'lalole', 'Y', 'nelayan', '', '1985-02-09', NULL, '082327154477', 'SD'),
(8, 'Lestari', 1, '7404312312140001', '740431540910001', 'Jalan Labolo', 'lalole', 'Y', 'IRT', 'Islam', '1991-03-01', 'P', '082327154475', 'SMA'),
(9, 'Refal', 1, '7404312312140001', '74043110102120002', 'Jalan Labolo', 'lalole', 'N', 'belum bekerja', '', '0000-00-00', NULL, '082327154478', 'belum sekolah'),
(10, 'La Arsiko', 1, '7404262209120004', '7404262303900001', 'Jalan Labolo', 'lalole', 'Y', 'nelayan', '', '1990-03-01', NULL, '08234566767', 'SMP'),
(11, 'Wa Kia', 1, '7404262209120004', '7404264107580008', 'Jalan Labolo', 'molona', 'Y', 'Petani', 'Islam', '1958-01-07', 'P', '0823446688', 'SD'),
(12, 'Siti Santria ', 1, '7404262209120004', '7404264608940003', 'Jalan Labolo', 'lalole', 'N', 'belum bekrja', 'Islam', '1994-06-08', 'P', '082367888768', 'SMA'),
(13, 'Sadianti', 1, '7404262209120004', '7404264107960010', 'Jalan Labolo', 'lalole', 'N', 'belum bekerja', 'Islam', '1996-04-04', 'P', '08234589899', 'SMA'),
(14, 'La Surino', 1, '7404312309140001', '7404260208890001', 'Jalan Labolo', 'lalole', 'Y', 'Nelayan', 'Islam', '1989-02-08', NULL, '08232154477', 'SD'),
(15, 'Meliati', 1, '7404312309140001', '7404265006930001', 'Jalan Labolo', 'lalole', 'Y', 'belum bekerja', 'Islam', '1993-10-06', 'P', '0823455588', 'SMA'),
(16, 'Muh Hanul Takwaa', 1, '7404312309140001', '740431540910002', 'Jalan Labolo', 'lalole', 'N', 'belum bekerja', '', '2014-03-02', NULL, '0823787777', 'belum sekolah'),
(22, 'Arfan', 1, '740312309140002', '7404310707920001', 'Jalan Labolo', 'amolengo', 'Y', 'nelayan', '', '0002-01-07', NULL, '08238978488', 'SMP'),
(23, 'LA miu', 7, '74042260709100002', '740426260107455027', 'Jalan Laposi', 'molona', 'Y', 'Nelayan', '', '1945-01-07', NULL, '082345456677', 'SD'),
(24, 'Wa Madihura', 7, '74042260709100002', '7404264203560001', 'Jalan Laposi', 'lalole', 'Y', 'IRT', 'Islam', '1995-07-03', 'P', '08234544554', 'SD'),
(25, 'La Dono', 7, '74042260709100002', '7404310107930022', 'Jalan Laposi', 'lalol', 'Y', 'belum bekrja', '', '1998-01-07', NULL, '08343566758', 'SD'),
(26, 'Wa Muliana', 7, '74042260709100002', '7404214408930001', 'Jalan Laposi', 'lalole', 'N', 'belum bekrja', 'Islam', '1995-04-08', 'P', '082367787999', 'SMA'),
(27, 'Wa Iren', 7, '74042260709100002', '7404264106500001', 'Jalan Laposi', 'lalole', 'N', 'belum bekrja', 'Islam', '2000-02-03', 'P', '08234556678', 'SD'),
(28, 'La Asini', 7, '7404261712090039', '740426010670001', 'Jalan Laposi', 'lalole', 'Y', 'Nelayan', '', '0190-01-06', NULL, '082398998878', 'SD'),
(29, 'Wa Fadi', 7, '7404261712090039', '7404284611740901', 'Jalan Laposi', 'lalole', 'Y', 'IRT', 'Islam', '1970-06-11', 'P', '082367778889', 'SD'),
(30, 'ASFAR', 7, '7404261712090039', '7404260611940000', 'Jalan Laposi', 'lalole', 'Y', 'IRT', 'Islam', '1994-06-11', 'P', '08235667665', 'SD'),
(31, 'Wa Yusni', 7, '7404261712090039', '7404266106970000', 'Jalan Laposi', 'lalole', 'N', 'belum bekerja', 'Islam', '1997-02-06', 'P', '082378668775', 'SMP'),
(32, 'wa Resti', 7, '7404261712090039', '740476700500002', 'Jalan Laposi', 'lalole', 'N', '', 'Islam', '2000-05-30', 'P', '082344556679', 'SD'),
(33, 'La Yadit', 7, '7404261712090030', '7404260802040000', 'Jalan Laposi', 'lalole', 'N', 'belum bekrja', '', '2002-09-15', NULL, '08234456677', 'SD'),
(34, 'Wa Arcerli', 7, '7404261712090030', '740426640060001', 'Jalan Laposi', 'lalole', 'N', 'belum bekrja', 'Islam', '2006-06-24', 'P', '082344556775', 'SD'),
(35, 'La Disan', 7, '7404261712090030', '7404260101090000', 'Jalan Laposi', 'lalole', 'N', 'belum bekerja', '', '2012-01-01', NULL, '08235674433', 'belum sekolah'),
(36, 'LA ZALIAMI', 14, '7404261806080046', '740426 0107780008', 'DUSUN KAMOALI', 'LALOLE', 'Y', 'NELAYAN', '', '1978-01-07', NULL, '08234545678', 'SD'),
(37, 'WA ZIWANI', 14, '7404261806080046', '740426 0107820007', 'DUSUN KAMOALI', 'LALOLE', 'Y', 'PETANI', 'Islam', '1982-01-07', 'P', '08234567876', 'TAMAT SMP'),
(38, 'SUMARLIN', 14, '7404261806080046', '740426 0104000001', 'DUSUN KAMOALI', 'LALOLE', 'N', '', 'Islam', '2000-07-27', 'P', '08234567655', 'SD'),
(39, 'FANGKI', 14, '7404261806080046', '740426 0107020006', 'DUSUN KAMOALI', 'LALOLE', 'N', 'TIDAK BEKERJA', '', '2002-01-02', NULL, '08234567554', 'SD'),
(40, 'FIGO', 14, '7404261806080046', '740426 0107030005', 'DUSUN KAMOALI', 'LALOLE', 'N', 'TIDAK BEKERJA', '', '2005-05-27', NULL, '08234565776', 'SD'),
(41, 'INES', 14, '7404261806080046', '740426 4107060004', 'DUSUN KAMOALI', 'LALOLE', 'N', 'TIDAK BEKERJA', 'Islam', '2005-08-13', 'P', '0', 'SD'),
(42, 'ALIF', 14, '7404261806080046', '740426 0112090001', 'DUSUN KAMOALI', 'LALOLE', 'N', 'TIDAK BEKERJA', '', '2009-01-12', NULL, '0', 'Belum Sekolah'),
(43, 'HARUN', 14, '74042616091100026', '740426 0212730001', 'DUSUN KAMOALI', 'LALOLE', 'Y', 'Wiraswasta', '', '1973-01-12', NULL, '08234556675', 'TAMAT SMP'),
(44, 'NUR HAYATI', 14, '74042616091100026', '740426 6105860001', 'DUSUN KAMOALI', 'LALOLE', 'Y', 'IRT', 'Islam', '1986-05-21', 'P', '08234567864', 'TAMAT SMP'),
(45, 'LA SARIMU', 14, '7404260409080140', '740426 0107490009', 'DUSUN KAMOALI', 'LALOLE', 'Y', 'Nelayan', '', '1949-01-07', NULL, '082234567873', 'TAMAT SD'),
(46, 'WA MALIZA', 14, '7404260409080140', '740426 41075400010', 'DUSUN KAMOALI', 'LALOLE', 'Y', 'PETANI', 'Islam', '1954-01-07', 'P', '08224567876', 'TAMAT SD'),
(47, 'FISLAN', 14, '7404260409080140', '740426 0506950001', 'DUSUN KAMOALI', 'LALOLE', 'N', 'TIDAK BEKERJA', 'Islam', '1995-05-06', NULL, '08232755667', 'SMA'),
(48, 'LA ZAMIADI', 14, '7404261806080033', '740426 0107780007', 'DUSUN KAMOALI', 'LALOLE', 'Y', 'Nelayan', '', '1978-01-07', NULL, '082356789012', 'TAMAT SD'),
(49, 'WA SUMIANTI', 14, '7404261806080033', '740426 4107840004', 'DUSUN KAMOALI', 'LALOLE', 'Y', 'PETANI', 'Islam', '1984-01-07', 'P', '082395692387', 'TAMAT SMP'),
(58, 'FAIS', 14, '7404261806080033', '740426 1808050002', 'DUSUN KAMOALI', 'Watuampara', 'N', 'TIDAK BEKERJA', '', '2005-08-18', NULL, '0', 'SD'),
(59, 'LA NTURUKI', 13, '7404262404090019', '7404264107820029', 'DUSUN LALOLE', 'LALOLE', 'Y', 'NELAYAN', '', '1977-01-07', NULL, '08237878878', 'TAMAT SD'),
(62, 'WA RUFAIDA ', 13, '7404262404090019', '7404264107820028', 'DUSUN LALOLE', 'LALOLE', 'Y', 'IRT', 'Islam', '1982-01-07', 'P', '08236786829', 'TAMAT SD'),
(63, 'ALEN', 13, '7404262404090019', '7404265202070002', 'DUSUN LALOLE', 'LALOLE', 'N', 'TIDAK BEKERJA', 'Islam', '2007-12-02', 'P', '0', 'belum sekolah'),
(64, 'REZIL', 13, '7404262404090019', '7404261101130001', 'DUSUN LALOLE', 'KAMOALI', 'N', 'TIDAK BEKERJA', '', '2013-11-01', NULL, '0', 'belum sekolah'),
(65, 'BAHTIAR', 13, '7404310705130001', '7404311111820002', 'DUSUN LALOLE', 'LALOLE', 'Y', 'PEDAGANG', '', '1982-11-11', NULL, '08238979799', 'TAMAT SD'),
(66, 'RISMAWATI', 13, '7404310705130001', '7404310705130001', 'DUSUN LALOLE', 'Watuampara', 'Y', 'IRT', 'Islam', '1992-01-09', 'P', '08234564889', 'TAMAT SMP'),
(67, 'LA EBA', 13, '7404060506070001', '7404060107550045', 'DUSUN LALOLE', 'LALOLE', 'Y', 'Nelayan', '', '1955-01-07', NULL, '08235676889', 'TIDAK TAMAT SD'),
(68, 'WASAMBIRA', 13, '7404060506070001', '7404064107570048', 'DUSUN LALOLE', 'LALOLE', 'Y', 'IRT', 'Islam', '1957-01-07', 'P', '08224685930', 'TAMAT SD'),
(69, 'LA AKU', 13, '7404060506070001', '7404062204910001', 'DUSUN LALOLE', 'LALOLE', 'N', 'TIDAK BEKERJA', '', '1991-04-22', NULL, '08235779797', 'SMP/SEDERAJAT'),
(70, 'SAMARUDIN', 13, '7404260405100027', '7404260102790001', 'DUSUN LALOLE', 'LALOLE', 'Y', 'PEDAGANG', '', '1979-01-02', NULL, '082256588990', 'TAMAT SD'),
(71, 'SURIATI', 13, '7404260405100027', '740426 0704900002', 'DUSUN LALOLE', 'LALOLE', 'Y', 'IRT', 'Islam', '1979-03-04', 'P', '08234568990', 'D-2'),
(72, 'LA TAANGI', 15, '740426 2404090025', '740426 1701710001', 'DUSUN BAANDINGI', 'LALOLE', 'Y', 'NELAYAN', '', '1971-01-17', NULL, '08234454579', 'TAMAT SD'),
(73, 'WA SARMIA', 15, '740426 2404090025', '740426 4805760001', 'DUSUN BAANDINGI', 'LALOLE', 'Y', 'IRT', 'Islam', '1976-08-05', 'P', '082367768899', 'TAMAT SD'),
(74, 'ARMILA', 15, '740426 2404090025', '740426 5110000001', 'DUSUN BAANDINGI', 'LALOLE', 'N', 'TIDAK BEKERJA', 'Islam', '2000-11-10', 'P', '0', 'TSANAWIYAH'),
(75, 'WA ADE UCI', 15, '740426 2404090025', '740426 5305030001', 'DUSUN BAANDINGI', 'LALOLE', 'N', 'TIDAK BEKERJA', 'Islam', '2003-05-13', 'P', '0', 'TSANAWIYAH'),
(76, 'IRFAN', 15, '740426 2404090025', '740426 1506050001', 'DUSUN BAANDINGI', 'LALOLE', 'N', 'TIDAK BEKERJA', '', '2005-06-19', NULL, '0', 'SD'),
(77, 'WA JULIANTI', 15, '740426 2404090025', '740426 7112080001', 'DUSUN BAANDINGI', 'LALOLE', 'N', 'TIDAK BEKERJA', 'Islam', '2008-12-31', 'P', '0', 'SD'),
(78, 'ERIK SETIAWAN', 15, '740426 2404090025', '740426 1308100001', 'DUSUN BAANDINGI', 'LALOLE', 'N', 'TIDAK BEKERJA', '', '2010-08-13', NULL, '0', 'BELUM SEKOLAH'),
(79, 'HAIRUL', 15, '740426 2404090025', '740426 2202120001', 'DUSUN BAANDINGI', 'LALOLE', 'N', 'TIDAK BEKERJA', '', '2014-02-22', NULL, '0', 'BELUM SEKOLAH'),
(80, 'LA HESIMI', 15, '7404310503140001', '740431 1406710001', 'DUSUN BAANDINGI', 'LALOLE', 'Y', 'PEDAGANG', '', '1971-06-14', NULL, '082354664778', 'TAMAT SD'),
(81, 'AMINAH', 15, '7404310503140001', '740431 4606800001', 'DUSUN BAANDINGI', 'LALOLE', 'Y', 'IRT', 'Islam', '1980-06-06', 'P', '08226768899', 'TAMAT SMP'),
(82, 'MUHAMAD ZUL KIFLI MUBAROKA', 15, '7404310503140001', '740431 0311970003', 'DUSUN BAANDINGI', 'BAU BAU', 'N', 'TIDAK BEKERJA', '', '1997-03-11', NULL, '0', 'BELUM SEKOLAH'),
(83, 'ISWAND ZULKARNAIN', 15, '7404310503140001', '740431 1402990001', 'DUSUN BAANDINGI', 'BAU BAU', 'N', 'TIDAK BEKERJA', '', '1999-02-14', NULL, '0', 'belum sekolah'),
(84, 'AGUNG TIRTA', 15, '7404310503140001', '740431 1808000002', 'DUSUN BAANDINGI', 'LALOLE', 'N', 'TIDAK BEKERJA', '', '2000-08-18', NULL, '0', 'BELUM SEKOLAH'),
(85, 'BUDURNA YULY', 15, '7404310503140001', '740431 6303030002', 'DUSUN BAANDINGI', 'LALOLE', 'N', 'TIDAK BEKERJA', 'Islam', '2003-03-23', 'P', '0', 'BELUM SEKOLAH'),
(86, 'SURYA NINGRUM', 15, '7404310503140001', '740431 6708070001', 'DUSUN BAANDINGI', 'LALOLE', 'N', 'TIDAK BEKERJA', 'Islam', '2007-08-27', 'P', '0', 'BELUM SEKOLAH'),
(87, 'DEWI KHURYATIN', 15, '7404310503140001', '740431 5905090003', 'DUSUN BAANDINGI', 'LALOLE', 'N', 'TIDAK BEKERJA', 'Islam', '2009-05-19', 'P', '0', 'BELUM SEKOLAH'),
(88, 'HILDA FIRDAUS', 15, '7404310503140001', '740431 7103140001', 'DUSUN BAANDINGI', 'KAMOALI', 'N', 'TIDAK BEKERJA', 'Islam', '2014-03-31', 'P', '0', 'BELUM SEKOLAH'),
(89, 'ABDUL JEFRI', 22, '7404261612100008', '7404260606050001', 'Dusun Katampe', 'MOLONA', 'N', 'TIDAK BEKERJA', '', '2005-06-06', NULL, '08237899778', 'SD/SEDERAJAD'),
(90, 'ABDUL KADIR', 22, '7404261612100008', '7404262302000001', 'Dusun Katampe', 'MOLONA', 'N', 'belum bekerja', '', '2000-02-23', NULL, '0', 'SD/SEDERAJAD'),
(91, 'AGGUN RISPA', 22, '7404261111080006', '7404264910080001', 'Dusun Katampe', 'Molona', 'N', 'TIDAK BEKERJA', 'Islam', '2008-10-09', 'P', '0', 'BELUM SEKOLAH'),
(92, 'MELDA', 22, '7404261111080006', '7404266605040001', 'Dusun Katampe', 'MOLONA', 'N', 'belum bekerja', 'Islam', '2004-05-26', 'P', '0', 'SD/SEDERAJAD'),
(93, 'AHMAD', 22, '7404261111080006', '7404260107590002', 'Dusun Katampe', 'Molona', 'Y', 'NELAYAN', '', '1959-07-01', NULL, '08234556577', 'TIDAK TAMAT SD'),
(94, 'AISAMUDIN', 22, '7404261612100007', '7404263008970001', 'Dusun Katampe', 'MOLONA', 'N', 'TIDAK BEKERJA', '', '1997-08-30', NULL, '082245676889', 'SMP/SEDERAJAT'),
(95, 'AL AMIN', 22, '7404261105100036', '7404260107620022', 'Dusun Katampe', 'MOLONA', 'Y', 'NELAYAN', '', '1962-07-01', NULL, '08238990988', 'SD/SEDERAJAD'),
(96, 'ALAN BUDI KUSUMA', 22, '7404260812090011', '7404260107940023', 'Dusun Katampe', 'MOLONA', 'N', 'TIDAK BEKERJA', '', '1994-07-01', NULL, '082378799484', 'SLTA/SEDERAJAT'),
(97, 'AMAL HAFID', 22, '7404262411080001', '7404262070508001', 'Dusun Katampe', 'Maumere', 'Y', 'NELAYAN', 'Islam', '1978-10-11', NULL, '08225678689', 'TIDAK SEKOLAH'),
(98, 'SITI RAHMAWATI', 22, '7404262411080001', '7404266407040001', 'Dusun Katampe', 'Katampe', 'N', 'TIDAK BEKERJA', 'Islam', '2014-07-24', 'P', '0', 'SD/SEDERAJAD'),
(99, 'AMRINA', 22, '7404262411080001', '7404265807870002', 'Dusun Katampe', 'Molona', 'Y', 'Honorer', 'Islam', '1987-07-18', 'P', '082243566788', 'SARJANA'),
(100, 'AMRITA YARTI', 22, '7404261612100008', '7404264409030002', 'Dusun Katampe', 'Babel', 'N', 'TIDAK BEKERJA', 'Islam', '2003-04-04', 'P', '0', 'SD/SEDERAJAD'),
(101, 'ANGGA', 22, '7404261310080001', '7404260203080001', 'Dusun Katampe', 'MOLONA', 'N', 'TIDAK BEKERJA', '', '2011-07-01', NULL, '0', 'BELUM SEKOLAH'),
(102, 'ANTAFARIN', 22, '7404260812090011', '7404260507090001', 'Dusun Katampe', 'Katampe', 'N', 'TIDAK BEKERJA', '', '2009-07-05', NULL, '0', 'BELUM SEKOLAH'),
(103, 'ANDIKA', 22, '7404260812090011', '7404260107030022', 'Dusun Katampe', 'Katampe', 'N', 'TIDAK BEKERJA', '', '2003-07-01', NULL, '0', 'BELUM SEKOLAH'),
(104, 'ANWAR', 22, '7404260812090010', '7404260107970020', 'Dusun Katampe', 'MOLONA', 'N', 'PERANTAU', 'Islam', '1997-07-01', NULL, '08126788633', 'TIDAK TAMAT SD'),
(105, 'ANZAR', 22, '7404260812090011', '7404260109070001', 'Dusun Katampe', 'Katampe', 'N', 'TIDAK BEKERJA', '', '2007-09-01', NULL, '0', 'SD/SEDERAJAD'),
(106, 'ARFIN', 22, '7404260810080011', '7404260402070001', 'Dusun Katampe', 'Katampe', 'N', 'IRT', 'Islam', '2007-07-04', 'P', '0', 'SD/SEDERAJAD'),
(107, 'ARIANTO', 22, '7404261310080001', '7404261305020001', 'Dusun Katampe', 'Molona', 'N', 'TIDAK BEKERJA', '', '2003-07-01', NULL, '0', 'SD/SEDERAJAD'),
(108, 'ARIF', 22, '7404261310080001', '7404260112030001', 'Dusun Katampe', 'Katampe', 'N', 'TIDAK BEKERJA', 'Islam', '2003-12-01', NULL, '0', 'SD/SEDERAJAD'),
(109, 'BAYU SAPUTRA', 22, '7404261612100006', '7404262211030002', 'Dusun Katampe', 'MOLONA', 'N', 'TIDAK BEKERJA', '', '2003-11-22', NULL, '0', 'SD/SEDERAJAD'),
(110, 'ALFIAN', 21, '7404261907080001', '7404260107380003', 'Dusun Kalokoloko', 'Ambon', 'N', 'TIDAK BEKERJA', '', '2013-06-02', NULL, '0', 'BELUM SEKOLAH'),
(111, 'ALFIAN SUWU', 21, '7404261907080001', '7404260107870012', 'Dusun Kalokoloko', 'Molona', 'N', 'TIDAK BEKERJA', '', '2010-04-18', NULL, '0', 'BELUM SEKOLAH'),
(112, 'ALFIN', 21, '7404261907080001', '7404264107870004', 'Dusun Kalokoloko', 'Katampe', 'N', 'TIDAK BEKERJA', '', '2007-08-31', NULL, '0', 'SD/SEDERAJAD'),
(113, 'ALI NASARUDIN', 21, '7404261907080001', '7404314611120001', 'Dusun Kalokoloko', 'MOLONA', 'Y', 'NELAYAN', '', '1982-11-02', NULL, '081264774839', 'SD/SEDERAJAD'),
(114, 'ALIF', 21, '7404261803090002', '7404266311680001', 'Dusun Kalokoloko', 'MOLONA', 'N', 'TIDAK BEKERJA', 'Islam', '2006-08-10', NULL, '0', 'SD/SEDERAJAD'),
(115, 'AMARULLAH', 21, '7404261406930001', '7404261803090002', 'Dusun Kalokoloko', 'MOLONA', 'N', 'TIDAK BEKERJA', '', '1999-02-12', NULL, '0', 'SMP/SEDERAJAD'),
(116, 'AMRIDA', 21, '7404261803090002', '7404260208980001', 'Dusun Kalokoloko', 'MOLONA', 'Y', 'IRT', 'Islam', '1988-12-05', 'P', '082389983999', 'SD/SEDERAJAD'),
(117, 'ARIEL', 21, '7404261803090002', '7404260409870001', 'Dusun Kalokoloko', 'Katampe', 'N', 'TIDAK BEKERJA', '', '2007-05-29', NULL, '0', 'SD/SEDERAJAD'),
(118, 'ASMIANTI', 21, '7404261803090002', '7404261012080001', 'Dusun Kalokoloko', 'LALOLE', 'N', 'Honorer', 'Islam', '1988-04-04', 'P', '', 'SARJANA'),
(119, 'WA INDU', 23, '7404310503140001', '7404264107820001', 'DUSUN SANGIA', 'MOLONA', 'N', 'NELAYAN', 'Islam', '1980-10-10', 'P', '', 'SD/SEDERAJAD'),
(120, 'LA SUWA', 16, '7404261212110002', '740426 0106690001', 'DUSUN KAMBULULI', 'LALOLE', 'Y', 'NELAYAN', 'Islam', '1969-01-06', 'L', '', 'TAMAT SD'),
(121, 'WA ISAATI', 16, '7404261212110002', '740426 5603720001', 'DUSUN BAANDINGI', 'LALOLE', 'Y', 'IRT', 'Islam', '1972-03-15', 'P', '', 'TAMAT SD'),
(122, 'NERLIA', 16, '7404261212110002', '740426 5008990002', 'DUSUN KAMBULULI', 'LALOLE', 'N', 'TIDAK BEKERJA', 'Islam', '1999-10-08', 'P', '082367677889', 'TAMAT SD'),
(123, 'NELMIA', 16, '7404261212110002', '740426 6606010002', 'DUSUN KAMBULULI', 'LALOLE', 'N', 'TIDAK BEKERJA', 'Islam', '1999-10-08', 'P', '', 'SMP'),
(124, 'LA ARHAM', 16, '7404261212110002', '740426 1905030003', 'DUSUN KAMBULULI', 'LALOLE', 'N', 'TIDAK BEKERJA', 'Islam', '2003-05-19', 'L', '', 'SD'),
(125, 'NURMIAN', 16, '7404261212110002', '740426 5306080001', 'DUSUN KAMBULULI', 'LALOLE', 'N', 'TIDAK BEKERJA', 'Islam', '2008-06-13', 'P', '', 'SD'),
(126, 'LA ALFI', 16, '7404261212110002', '740426 0612080001', 'DUSUN KAMBULULI', 'LALOLE', 'N', 'TIDAK BEKERJA', 'Islam', '2009-06-12', 'L', '', 'SD'),
(127, 'AKIRUDIN', 16, '7404260703120001', '740426 0107810032', 'DUSUN KAMBULULI', 'LALOLE', 'Y', 'TUKANG KAYU', 'Islam', '1981-01-07', 'L', '0812789088008', 'SMP/SEDERAJAD'),
(128, 'WA APE', 16, '7404260703120001', '740426 5205870001', 'DUSUN KAMBULULI', 'RAHA', 'Y', 'IRT', 'Islam', '1987-12-05', 'P', '081278868900', 'SMA/SEDERAJAD'),
(129, 'MUHAMAD FAHRIL', 16, '7404260703120001', '740426 1706110001', 'DUSUN KAMBULULI', 'WATUAMPARA', 'N', 'TIDAK BEKERJA', 'Islam', '2011-06-19', 'L', '', 'BELUM SEKOLAH'),
(130, 'MUHAMAD FATIR', 16, '7404260703120001', '740431 1710130001', 'DUSUN KAMBULULI', 'WATUAMPARA', 'N', 'TIDAK BEKERJA', 'Islam', '2013-10-17', 'L', '', 'BELUM SEKOLAH'),
(131, 'MUHAMAD FARID', 16, '7404260703120001', '740431 1710130002', 'DUSUN KAMBULULI', 'WATUAMPARA', 'N', 'TIDAK BEKERJA', 'Islam', '2014-02-11', 'L', '', 'BELUM SEKOLAH'),
(132, 'NUR SHIFA', 16, '7404260703120001', '740431 4211140001', 'DUSUN KAMBULULI', 'WATUAMPARA', 'N', 'TIDAK BEKERJA', 'Islam', '2014-02-11', 'P', '', 'BELUM SEKOLAH'),
(133, 'MUSTAFA,S.Pd', 16, '7404260309080140', '740426 2010730002', 'DUSUN KAMBULULI', 'LALOLE', 'Y', 'PNS', 'Islam', '1973-01-10', 'L', '082256778868', 'SD/SEDERAJAD'),
(134, 'HAMRINI', 16, '7404260309080140', '740426 6703780002', 'DUSUN KAMBULULI', 'TALAGA I', 'Y', 'IRT', 'Islam', '1978-03-27', 'P', '082234567866', 'SMP/SEDERAJAT'),
(135, 'JERNI MUSTAFA', 16, '7404260309080140', '740426 4210030002', 'DUSUN KAMBULULI', 'TALAGA  ', 'N', 'TIDAK BEKERJA', 'Islam', '2003-02-10', 'P', '', 'SD'),
(136, 'MUH.AKBAR MUSTAFA', 16, '7404260309080140', '740426 0612050003', 'DUSUN KAMBULULI', 'TALAGA  ', 'N', 'TIDAK BEKERJA', 'Islam', '2005-06-12', 'L', '', 'SD'),
(137, 'MUH.IKHLAS MUSTAFA', 16, '7404260309080140', '740426 2608080001', 'DUSUN KAMBULULI', 'LALOLE', 'N', 'TIDAK BEKERJA', 'Islam', '2008-08-26', 'L', '', 'SD'),
(138, 'QALBI MUSTAFA', 16, '7404260309080140', '740431 6603130001', 'DUSUN KAMBULULI', 'KAMOALI', 'N', 'TIDAK BEKERJA', 'Islam', '2013-03-26', 'P', '', 'BELUM SEKOLAH'),
(139, 'WA ZAFIA', 16, '7404262206120004', '740426 6403520001', 'DUSUN KAMBULULI', 'MOLONA', 'Y', 'PETANI', 'Islam', '1952-03-24', 'P', '082256890001', 'SD/SEDERAJAD'),
(140, 'LA DUFIN', 16, '7404262206120004', '740426 0607890002', 'DUSUN KAMBULULI', 'LALOLE', 'N', 'PEDAGANG', 'Islam', '1989-06-07', 'L', '08123456577', 'SMA/SEDERAJAD'),
(141, 'LA ZAAMA', 16, '7404260505080004', '740426 0107520002', 'DUSUN KAMBULULI', 'MOLONA', 'Y', 'NELAYAN', 'Islam', '1952-01-07', 'L', '081289897384', 'SD/SEDERAJAD'),
(142, 'WA UNAIA', 16, '7404260505080004', '740426 4107580002', 'DUSUN KAMBULULI', 'MOLONA', 'Y', 'PETANI', 'Islam', '1958-01-07', 'P', '082212457689', 'SD/SEDERAJAD'),
(143, 'LA RISI', 16, '7404260505080004', '740426 0107910001', 'DUSUN KAMBULULI', 'LALOLE', 'Y', 'NELAYAN', 'Islam', '1992-01-02', 'L', '082289785678', 'SD/SEDERAJAD'),
(144, 'FAIS', 16, '7404260505080004', '740426 1005940001', 'DUSUN KAMBULULI', 'LALOLE', 'N', 'NELAYAN', 'Islam', '1994-10-05', 'L', '081278986549', 'SD/SEDERAJAD'),
(145, 'LA NASUHA', 24, '740426706080012', '740426010780008', 'DUSUN LA JILO', 'MBANUA', 'Y', 'NELAYAN', 'Islam', '1988-07-01', 'L', '082256789065', 'TIDAK SEKOLAH'),
(146, 'WA SAMLIA', 24, '740426706080012', '74042641078300014', 'DUSUN LA JILO', 'MOLONA', 'Y', 'IRT', 'Islam', '1988-07-01', 'P', '081276890654', 'TIDAK SEKOLAH');

-- --------------------------------------------------------

--
-- Table structure for table `potensi_desa`
--

CREATE TABLE `potensi_desa` (
  `id_potensi_desa` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `potensidesa` enum('PAKAIAN','TENUNAN','ADAT ISTIADAT','MAKANAN KHAS') NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `potensi_desa`
--

INSERT INTO `potensi_desa` (`id_potensi_desa`, `nama`, `deskripsi`, `potensidesa`, `gambar`) VALUES
(1, 'BAJU KOMBO', '<p style=\"text-align: justify;\">merupakan pakaian kurung dengan balutan sarung bergaris warna-warni di bawahnya.Sarung yang di lilit di dada. Warna dasar yang digunakan adalah hitam Baju Kombo merupakan pakaian kebesaran kaum wanita Buton yang terbuat bahan dasar&nbsp;kain&nbsp;satin dengan warna dasar putih yang dihiasi dengan manik-manik, benang emas atau perak serta berbagai ragam hiasan yang terbuat dari emas, perak maupun kuningan. Pakaian ini terdiri atas&nbsp;baju dengan bawahan sarung yang disebut Bia Ogena (sarung besar). Pemilihan warna putih pada&nbsp;baju kombo diunakan sebagai lambang kesucian, kepolosan wanita Buton, serta harapan-harapan atas kebaikan, kesuburan, dan kesejahteraan.&nbsp;</p>\r\n', 'PAKAIAN', 'baju-kombo-52'),
(2, 'BAJU KABOROKO', '<p style=\"text-align: justify;\">Berbeda dengan&nbsp;baju Buton lainnya,&nbsp;baju&nbsp;kaboroko mempunyai kerah yang disertai dengan berbagai macam hiasan dan aksesoris, serta empat buah kancing logam pada leher sebelah kanan dan tujuh buah kancing pada lengan&nbsp;baju. Penggunaan&nbsp;baju&nbsp;kaboroko dipadukan dengan Samasili Kumbaea atau Bia-Bia Itanu yaitu berupa sarung yang memiliki lapisan dalam berwarna putih dan lapisan luar berwarna dasar hitam dengan corak garis-garis. Penggunaan&nbsp;baju&nbsp;Kaboroko bagi wanita Buton digunakan sebagai pembeda strata sosial masyarakat setempat. Makna yang tersimpan dibalik penggunaan&nbsp;baju&nbsp;kaboroko adalah sebagai perlindungan terhadap hak dan kewajiban serta tanggung jawab terhadap keselamatan dan kesejahteraan hidup dalam bermasyarakat dan bernegara.</p>\r\n', 'PAKAIAN', 'baju-kaboroko-48'),
(3, 'PAKAIAN BALAHADADA', '<p style=\"text-align: justify;\">Pakaian Balahadada merupakan pakaian kebesaran yang dikenakan oleh kaum laki-laki Buton baik bagi seorang bangsawan maupun bukan bangsawan. Pakaian dengan warna dasar hitam ini dijadikan sebagai perlambang keterbukaan. Balahada terdiri atas destar, baju, celana, sarung, ikat pinggang, &nbsp;dan bio ogena atau sarung besar yang dihiasi dengan pasamani diseluruh pinggirannya.Pakaian ini digunakkan biasanya untuk acara adat siompu barat dimana warna dari masing &ndash; masing berbeda-beda tergantung jabatann</p>\r\n', 'PAKAIAN', 'pakaian-balahadada-16'),
(4, 'PAKANDE-KANDEA', '<p>Pakande-kandea adalah suatu event tradisional yang merupakan warisan leluhur Suku Buton yang lahir dan bermula sebagai nazar/syukuran. Dalam tradisi unik ini, disajikan beraneka panganan kecil tradisional yang diletakkan di atas sebuah talam besar yang terbuat dari kuningan dan ditutup dengan tudung saji bosara. Puncak dari event ini, ketika semua tamu yang diundang mengawali acara makan bersam dengan disuapi panganan&nbsp;oleh remaja-remaja putrid yang berpakaian adat dan duduk bersimpuh di sebelah talam.<br />\r\nSeringkali, event ini merupakan ajang promosi remaja-remaja putri untuk mendapatkan jodoh. Selain itu, event ini merupakan arena kebersamaan rakyat untuk memupuk rasa persatuan dan kesatuan dalam hukum adat dan membina hubungan silahturahmi yang penuh keakraban. Tradisi ini merupakan permainan rakyat yang diatur dengan adat serta tata krama dan sopan santun tertentu yang hingga saat ini masih hidup dalam kehidupan masyarakat Suku Buton. di kecamatan siompu barat</p>\r\n', 'ADAT ISTIADAT', 'pakandekandea-36'),
(5, ' POSUO', '<p>Upacara Posuo diadakan sebagai sarana untuk peralihan status seorang gadis dari remaja (labuabua) menjadi dewasa (kalambe), serta untuk mempersiapkan mentalnya.&nbsp;&nbsp;Upacara tersebut dilaksanakan selama delapan hari delapan malam dalam ruangan khusus yang oleh mayarakat setempat disebut dengan suo. Selama dikurung di suo, para peserta dijauhkan dari pengaruh dunia luar, baik dari keluarga maupun lingkungan sekitarnya. Para peserta hanya boleh berhubungan dengan bhisa (pemimpin Upacara Posuo) yang telah ditunjuk oleh pemangku adat setempat. Para bhisa akan membimbing dan memberi petuah berupa pesan moral, spiritual, dan pengetahun membina keluarga yang baik kepada para&nbsp;peserta.Dalam&nbsp;perkembangan masyarakat Buton, ada 3 jenis Posuo yang mereka kenal dan sampai saat ini upacara tersebut masih berkembang. Pertama, Posuo Wolio, merupakan tradisi Posuo awal yang berkembang dalam masyarakat Buton. Kedua, Posuo Johoro yang berasal dari Johor-Melayu (Malaysia) dan ketiga, Posuo Arabu yang berkembang setelah Islam masuk ke Buton. Posuo Arabu merupakan hasil modifikasi nilai-nilai Posuo Wolio dengan nilai-nilai ajaran agama Islam. Posuo ini diadaptasi oleh Syekh Haji Abdul Ghaniyyu, seorang ulama besar Buton yang hidup pada pertengahan abad XIX yang menjabat sebagai Kenipulu di Kesultanan Buton di bawah kepemimpinan Sultan Buton XXIX Muhammad Aydrus Qaimuddin. Tradisi Posuo Arabu inilah yang masih sering dilaksanakan oleh masyarakat Buton.</p>\r\n\r\n<p>Keistimewaan Upacara Posuo terletak pada prosesinya. Ada tiga tahap yang mesti dilalui oleh para peserta agar mendapat status sebagai gadis dewasa. Pertama, sesi pauncura atau pengukuhan peserta sebagai calon peserta Posuo. Pada tahap ini prosesi dilakukan oleh bhisa senior (parika). Acara tersebut dimulai dengan tunuana dupa (membakar kemenyan) kemudian dilanjutkan dengan pembacaan doa. Setelah pembacaan doa selesai, parika melakukan panimpa (pemberkatan) kepada para peserta dengan memberikan sapuan asap kemenyan ke tubuh calon. Setelah itu, parika menyampaikan dua pesan, yaitu menjelaskan tujuan dari diadakannya upacara Posuo diiringi dengan pembacaan nama-nama para peserta upacara dan memberitahu kepada seluruh peserta dan juga keluarga bahwa selama upacara dilangsungkan, para peserta diisolasi dari dunia luar dan hanya boleh berhubungan dengan bhisa yang bertugas menemani para peserta yang sudah ditunjuk oleh pemangku adat. Kedua, sesi bhaliana yimpo. Kegiatan ini dilaksanakan setelah upacara berjalan selama lima hari. Pada tahap ini para peserta diubah posisinya. Jika sebelummnya arah kepala menghadap ke selatan dan kaki ke arah utara, pada tahap ini kepala peserta dihadapkan ke arah barat dan kaki ke arah timur. Sesi ini berlangsung sampai hari ke tujuh.</p>\r\n\r\n<p>Ketiga, sesi mata kariya. Tahap ini biasanya dilakukan tepat pada malam ke delapan dengan memandikan seluruh peserta yang ikut dalam Upacara Posuo menggunakan wadah bhosu (berupa buyung yang terbuat dari tanah liat). Khusus para peserta yang siap menikah, airnya dicampur dengan bunga cempaka dan bunga kamboja. Setelah selesai mandi, seluruh peserta didandani dengan busana ajo kalembe (khusus pakaian gadis dewasa)</p>\r\n\r\n<p>Semua Upacara Posuo dimaksudkan untuk menguji kesucian (keperawanan) seorang gadis. Biasanya hal ini dapat dilihat dari ada atau tidaknya gendang yang pecah saat ditabuh oleh para bhisa. Jika ada gendang yang pecah, menunjukkan ada di antara peserta Posuo yang sudah tidak perawan dan jika tidak ada gendang yang pecah berarti para peserta diyakini masih perawan.</p>\r\n', 'ADAT ISTIADAT', '-posuo-17'),
(6, 'DOLE-DOLE', '<p>Dole-dole meruakan tradisi yang dilakukan oleh masyarakat buton atas lahirnya seorang anak. Menurut kepercayaan orang buton, anak yang telah didole-dole akan terhindar dari segala macam penyakit. Prosesi dole-dole sendiri adalah sang anak diletakkan di atas nyiru yang dialas dengan daun pisang yang diberi minyak kelapa. Selanjutnya anak tersebut digulingkan diatasnya seluruh badan anak tersebut berminyak. Biasanya dilakukan pada bulan rajab, syaban dan setelah Lebaran sebagai waktu yang dianggap baik.</p>\r\n', 'ADAT ISTIADAT', 'doledole-79'),
(7, 'LINDA', '<p>SEORANG lelaki tua bergerak menari-nari dengan gemulai. Kain selendang yang digenggamnya bergerak naik turun, seakan-akan menari mengikuti irama gong dan gendang yang dipukul dua orang secara perlahan-lahan. Beberapa warga dengan mengenakan baju adat duduk mengitari lelaki yang sedang menari dengan selendang. Beberapa orang mengeluarkan senandung nyanyian mengikuti suara gong dan gendang. Tak lama menari, lelaki tersebut berhenti, kemudian duduk dan memberikan selendang kepada orang lain. Orang tersebut setelah menerima selendang, kemudian berdiri dan kembali menari lagi. Tarian Linda ini hanya ditarikan hanya satu orang saja. Tarian ini sudah ada sejak abad ke 8, sejak ratusan tahun lalu dan turun temurun hingga saat ini</p>\r\n', 'ADAT ISTIADAT', 'linda-32'),
(8, 'KASUAMI', '<p style=\"text-align: justify;\">Kasuami berbahan dasar ubi atau singkong. Khusus di daerah Wakatobi, singkong yang digunakan bukanlah singkong yang umum terdapat di pasar-pasar tradisional. Cita rasa kasoami sangat enak jika dinikmati bersama dengan ikan asin, ikan kuah, ikan goreng, ikan perende, ikan bakar, ataupun tergantung selera Anda. Sayur bening juga bisa ditambahkan atau bisa juga dimakan sambil menikmati secangkir teh hangat.</p>\r\n', 'MAKANAN KHAS', 'kasuami-42'),
(9, 'KABUTO', '<p style=\"text-align: justify;\">Bahan dasarnya terbuat dari ubi atau singkong. Proses pembuatan yakni ubi dibersihkan dulu lalu kemudian dibiarkan berjamur. Dibiarkan mengering dalam waktu lama karena dapat menambah cita rasa dan aroma saat disajikan. Akan lebih lezat jika makanan ini disandingkan bersama kepala parut atau bahkan dengan lauk ikan goreng dan ikan asin.</p>\r\n', 'MAKANAN KHAS', 'kabuto-26'),
(10, 'LAPA LAPA', '<p style=\"text-align: justify;\">Dalam proses pembuatannya, lapa-lapa ini berbahan dasar beras yang dimasak bersama dengan santan. Saat setengah matang lalu diangkat dan didinginkan, kemudian direbus. Tapi, sebelum direbus, dibungkus dulu dengan menggunakan janur kelapa yang masih muda. Dalam kehidupan masyarakat suku Muna, lapa-lapa ini biasanya dibuat menjelang hari raya umat Islam, misalnya pada lebaran idul fitri dan idul adha atau pada pembukaan puasa. Waktu pembuatannya pun lumayan lama, sebab untuk mendapatkan hasil yang maksimal dengan cita rasa yang luar biasa enak.</p>\r\n', 'MAKANAN KHAS', 'lapa-lapa-59'),
(11, 'LEJA', '', 'TENUNAN', 'leja-94'),
(12, 'RASSA', '', 'TENUNAN', 'rassa-21'),
(13, 'LEJHA MOANE', '', 'TENUNAN', 'lejha-moane-95');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(5) NOT NULL,
  `judul` varchar(180) NOT NULL,
  `gambar` varchar(180) NOT NULL,
  `tgl_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `judul`, `gambar`, `tgl_update`) VALUES
(1, 'Slider 1', 'slider-1-4.jpeg', '2018-07-17 21:15:59'),
(2, 'Slider 2', 'slider-2-64.jpeg', '2018-07-18 06:07:05');

-- --------------------------------------------------------

--
-- Table structure for table `sosial`
--

CREATE TABLE `sosial` (
  `id_sosial` int(11) NOT NULL,
  `nama` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sosial`
--

INSERT INTO `sosial` (`id_sosial`, `nama`) VALUES
(1, 'https://id-id.facebook.com/'),
(2, 'https://twitter.com/'),
(3, 'https://www.instagram.com/?hl=id'),
(4, 'https://plus.google.com/discover'),
(5, '(+1) 000 123 456789'),
(6, 'info@example.com'),
(7, 'Buton , Pemerintah Desa Siompu Barat'),
(8, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127624.2305618758!2d99.2459714141771!3d1.6028494030079163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302c245bc766b06b%3A0xd663ee1f0b6d7d85!2sSipirok%2C+Kabupaten+Tapanuli+Selatan%2C+Sumatera+Utara!5e0!3m2!1sid!2sid!4v1527140910118\" ></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `ip` varchar(20) NOT NULL,
  `hits` int(10) NOT NULL,
  `online` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `seo` varchar(200) NOT NULL,
  `video` varchar(250) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `judul`, `seo`, `video`, `tanggal`) VALUES
(9, 'Tarian Linda', 'tarian-linda', 'https://www.youtube.com/watch?v=K1945jY4tuY ', '2018-08-01 21:36:41'),
(10, 'MANSA SIOMPU BARAT', 'mansa-siompu-barat', 'https://www.youtube.com/watch?v=F2egWN4nbjs ', '2018-08-01 21:37:15'),
(11, 'Panorama Siompu Barat ', 'panorama-siompu-barat-', 'https://www.youtube.com/watch?v=pWm_uQaOkCA ', '2018-08-01 21:37:48'),
(12, 'SUARA MERDU WARGA SIOMPU BARAT', 'suara-merdu-warga-siompu-barat', 'https://www.youtube.com/watch?v=KAnF1e_JXRU ', '2018-08-01 21:39:19');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `wisata` enum('PEMANDIAN','PANTAI') NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama`, `deskripsi`, `wisata`, `gambar`) VALUES
(7, 'PANTAI LAGILA', '<p style=\"text-align: justify;\">Pantai lagila terletak di desa Watuamara ,kecamatan siompu barat. Pantai ini merupakan teluk yang menghadap ke barat sehingga bisa menyaksikan keindahan sunset dari matahari tenggelam. Keindahan yang dapat dinikmati bersama teman-taman. Selanjutnya kalau kita arahkan pandangan ke sisi kanan dan kiri pantai ini akan kita dapati perbukitan yang hijau dan banyak tanaman yang tumbuh subur di tempat tersebut, Kita juga bisa langsung berkunjung ke pantai sebelah pantai ini yaitu Pantai dongkala. Bukan hanya itu dekat pantai ini ada pemandian Oe Lalo dimana airnya terletak di dalam gua Horizontal yan gdi janggau menggunakkan tangga kecil. Menarik bukan satu lokasi tapi bisa menjumpai tiga wisata sekaligus.</p>\r\n', 'PANTAI', 'pantai-lagila-42'),
(8, 'PANTAI KAEWULAAH', '<p style=\"text-align: justify;\">Pantai kaewula&rsquo;a, merupakan pantai yang terletak di pulau siompu, pantai ini mungkin tidak sepopuler pantai-pantai lain yang ada di indonesia, namun keindahan pantai ini tidak kalah dengan pantai-pantai lain, yang masih belum dikelola secara baik, namum ini merupakan tempat rekreasi favorit bagi masyarakat setempat(masyarakat siompu), maka tidak heran orang yang pertama kali berkunjung di pantai ini akan terheran-hearn melihat keindahan pantai serta deburan ombak, ditambah pohon-pohon kelapa yang siap dipanjat untuk dinikmati buahnya. Bahkan masyakat setempat sering menyebut pulau ini dengan kuta nya siompu,&nbsp; namun karena promosi yang yang tidak begitu gencar sehingga pantai ini kurang bergaung di masyarakat indonesia pada umumnya. Pulau Siompu memang pulau yang penuh dengan sejuta keindahan, di pulau ini pula tumbuh jeruk siompu yang kesohor sampai di mancanegara, dan masih banyak lagi tempat-tempat wisata yang menarik yang patut di kunjungi bila berkunjung ke Pulau Siompu.</p>\r\n', 'PANTAI', 'pantai-kaewulaah-45'),
(9, 'PANTAI LALOLE', '<p>Pantai ini terletak di Desa lalole Pantai ini menyediakan pemandangan bawah laut. Tujuannya adalah untuk mengembangkan objek wisata bahari (bawah laut) di kabupaten yang kaya dengan aneka wisata baharinya itu. Diharapkan dengan adanya kawasan BASILIKA, gairah para wistawan untuk berkunjung ke siompu barat&nbsp;meningkat. Walaupun pulau ini tidak begitu besar bila dibandingkan dengan desa lainnya, pantai ini mampu memberikan nuansa yang unik melalui keindahan pantai dan pesona bawah lautnya.Garis pantai di sepanjang pulau ini dipenuhi hamparan pasir putih yang menakjubkan dan nuansanya menjadi lebih indah ketika berpadu dengan deburan ombak laut yang menyisir pasir tersebut. Di samping itu, kekayaan alam bawah laut yang ada di pulau ini juga menarik untuk dikunjungi. Keanekaragaman terumbu karang dan biota bawah laut berpadu secara teratur dalam simponi keindahan panorama alam bawah laut.</p>\r\n', 'PANTAI', 'pantai-lalole-48'),
(10, 'PEMANDIAN OE TOGO', '<p>Oentogo adalah sumber mata air dalam gua yang disuplai untuk kebutuhan air bersih bagi masyarakat Siompu barat,&nbsp;Sumber mata air Oentogo ini, tidak pernah kering. Kualitas airnya menurut penelitian tenaga kesehatan Prvinsi Sultra beberapa waktu lalu, alami dan tidak mengandung zat kapur sehingga bisa langsung diminum (konsumsi), tak perlu dimasak. Keberadaan Oentogo, kini sudah menjadi tempat berwisata baru bagi masyarakat pulau Siompu. Masyarakat kini berbondong-bondong berwisata ke Oentogo, sekitar dua kilo meter dari Desa Lontoi, dan tiga kilo meter dari Desa Kaimbulawa. Pada hari libur, seperti hari Minggu dan hari libur lainnya, ratusan warga se-Pulau Siompu barat datang bertamasyah di sumber mata air tersebut. Lokasinya yang cukup strategis, yakni berada di bibir pantai. Selain itu, terdapat pepohonan besar untuk tempat berlindung dan menikmati hawa air laut. Air lautnya cukup dalam bila air pasang dan kering jika musim air laut turun. Di depan sumber mata air itu terdapat batu yang tumbuh di laut, sebagai tempat berenang dan menikmati keindahan bawa laut. Hanya saja sebagian terumbuh karangnya sudah hancur akibat hantaman bom ikan, tapi kini tidak ada lagi penangkapan ikan menggunakan bom atau sejenisnya.&nbsp;</p>\r\n', 'PEMANDIAN', 'pemandian-oe-togo-34'),
(11, 'PEMANDIAN  LATAMBURU', '<p>latamburu adalah sumber mata air dalam gua. Sumber mata air latamburu&nbsp;ini, tidak pernah kering. Latamburu kini sudah menjadi tempat berwisata baru bagi masyarakat pulau Siompu. Masyarakat kini berbondong-bondong berwisata ke latamburu karena pemandian ini termaksud pemandian baru , sekitar dua kilo meter dari Desa Lontoi, dan tida kilo meter dari Desa Kaimbulawa. Pada hari libur, seperti hari Minggu dan hari libur lainnya, ratusan warga se-Pulau Siompu datang bertamasyah di sumber mata air tersebut. Lokasinya yang cukup strategis, yakni berada dekat dengan pantaai ujung pasir dan berdekatan juga dengan Pemandian moko.</p>\r\n', 'PEMANDIAN', 'pemandian--latamburu-68'),
(12, 'PEMANDIAN  SUMUR TUA LALOLE', '<p style=\"text-align: justify;\">Buton-Sumur tua Lalole yang terlertak di Desa Lalole, Kecamatan Siompu Barat, merupakan peninggalan sejarah masa Kesultanan Buton, yakni pada masa kepemimpinan raja La Siompula yang merupakan raja pertama di Lalole pada tahun 1500-an, hingga kini tetap dipadati wisatawan lokal maupun mancanegara. Hal ini diungkapkan Kasubdin Bina Budaya Disbudpar Buton, Nasiri S Sos saat ditemui di ruang kerjanya kemarin. Menururutnya, letak sumur itu sangat strategis, yaitu berada di atas gunung, sehingga tempat tersebut tak pernah sepi dari kunjungan wisatawan yang ingin mengambil air sumur itu. Konon katanya air sumur itu bisa menyembuhkan berbagai macam jenis penyakit, diantaranya batuk, penyakit kulit seperti gatal-gatal dan jenis penyakit lainnya. Menariknya, meskipun kedalaman sumur itu hanya 1,5 meter, airnya tidak pernah kering, sampai saat ini masih tetap dikonsumsi masyarakat setempat, dan sumur sudah merupakan sumber kebutuhan air bagi masyarakat di Desa Lalole. selain sumur tua itu, di daerah tersebut juga terdapat makam Raja La Siompula, yang terletak di puncak gunung dengan ketinggian 100 meter. Makam itu sepanjang tujuh meter dan lebarnya tiga meter.</p>\r\n', 'PEMANDIAN', 'pemandian--sumur-tua-lalole-8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indexes for table `dusun`
--
ALTER TABLE `dusun`
  ADD PRIMARY KEY (`id_dusun`),
  ADD KEY `id_desa` (`id_desa`) USING BTREE;

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `kematian`
--
ALTER TABLE `kematian`
  ADD PRIMARY KEY (`id_kematian`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `kepdes`
--
ALTER TABLE `kepdes`
  ADD PRIMARY KEY (`id_kepdes`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `masukkan`
--
ALTER TABLE `masukkan`
  ADD PRIMARY KEY (`id_masukkan`);

--
-- Indexes for table `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`id_modul`);

--
-- Indexes for table `mutasi`
--
ALTER TABLE `mutasi`
  ADD PRIMARY KEY (`id_mutasi`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id_page`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id_penduduk`),
  ADD UNIQUE KEY `no_ktp` (`nik`),
  ADD KEY `agama_id` (`agama`),
  ADD KEY `dusun_id` (`id_dusun`);

--
-- Indexes for table `potensi_desa`
--
ALTER TABLE `potensi_desa`
  ADD PRIMARY KEY (`id_potensi_desa`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `sosial`
--
ALTER TABLE `sosial`
  ADD PRIMARY KEY (`id_sosial`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `id_desa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `dusun`
--
ALTER TABLE `dusun`
  MODIFY `id_dusun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kematian`
--
ALTER TABLE `kematian`
  MODIFY `id_kematian` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kepdes`
--
ALTER TABLE `kepdes`
  MODIFY `id_kepdes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `masukkan`
--
ALTER TABLE `masukkan`
  MODIFY `id_masukkan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `modul`
--
ALTER TABLE `modul`
  MODIFY `id_modul` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `mutasi`
--
ALTER TABLE `mutasi`
  MODIFY `id_mutasi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id_page` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;
--
-- AUTO_INCREMENT for table `potensi_desa`
--
ALTER TABLE `potensi_desa`
  MODIFY `id_potensi_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sosial`
--
ALTER TABLE `sosial`
  MODIFY `id_sosial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
