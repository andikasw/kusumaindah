-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Mar 2021 pada 12.54
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkusumaindah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id` int(10) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `gambar1` varchar(500) NOT NULL,
  `gambar2` varchar(500) NOT NULL,
  `gambar3` varchar(500) NOT NULL,
  `info` longtext NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id`, `gambar`, `gambar1`, `gambar2`, `gambar3`, `info`, `tanggal`) VALUES
(0, '5.jpg', '', '', '', 'Kusuma Indah Tour  adalah  tour   organizer no.      1         di Situbondo, telah melayani lebih dari  4.500   agenda perjalanan, event,   MICE,    outbond    dan penyaluran  CSR  kelebih dari 22 destinasi  pilihan di Banyuwangi sejak tahun 2014. Bukan sekedar sebuah    perjalanan,       tim Yukbanyuwangi  selalu  berusaha memastikan   kunjungan   setiap pengguna menjadi pengalaman baik yang bisa selalu dikenang, seperti tagline  kabupaten   Banyuwangi â€œkunjungi Banyuwangi, Anda pasti ingin kembaliâ€. Anda mungkin bisa menemukan harga yang lebih murah, namun disini Anda akan menemukan pengalaman   perjalanan  terbaik dengan harga masuk akal.  Dengan aneka opsi  pilihan  paket  tour Banyuwangi  yang   bahkan   bisa disesuaikan  dengan   permintaan Anda. Pastikan Anda berkunjung ke Banyuwangi bersama spesialisnya, ngetrip ke Banyuwangi? Yukbanyuwangi aja!\r\n1.	Afsfs\r\n2.	Rgrge\r\n3.	vdvdvd\r\n', '2021-02-07'),
(1, '', '68860ce72f01c553efd4aa4201f8961bbca1ae344edb1a83239a61d2301d4aa53cb4cdb0807e622774ed24f4643d0dff39effa96aca0446548b805_1280.jpg', '', '', '', '0000-00-00'),
(2, '', '', 'ailboat-racing-yacht-during-competition-sunny-windy-summer-day-moving-fast-through-waves-water-with-spinnaker-up_346278-3331.jpg', '', '', '0000-00-00'),
(3, '', '', '', '3a8d5dd279e619b5e4c8266a901d7fe8025a17e5.png', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_contact`
--

CREATE TABLE `tb_contact` (
  `id` int(11) NOT NULL,
  `contact` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `info` varchar(500) NOT NULL,
  `info1` varchar(500) CHARACTER SET latin1 NOT NULL,
  `info2` varchar(500) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_contact`
--

INSERT INTO `tb_contact` (`id`, `contact`, `email`, `info`, `info1`, `info2`) VALUES
(0, '<p>CS1 +6281357623666</p>\r\n\r\n<p>CS2 +6282245166666</p>\r\n\r\n<p>CS3 +6281216105666</p>\r\n', '<p><em>(Biasanya membalas dalam 1 jam, jam operasional pukul 08:00 &ndash; 20:00)</em></p>\r\n', '<p>kusumaindah@gmail.com</p>\r\n', 'Find Your Destination With Us', 'Fly with who you want, stay wherever you want — now that\'s a dream holiday!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_desti`
--

CREATE TABLE `tb_desti` (
  `iddesti` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `display` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `info` longtext NOT NULL,
  `dte` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_desti`
--

INSERT INTO `tb_desti` (`iddesti`, `title`, `display`, `image`, `info`, `dte`) VALUES
('429238f7-2fd4-40f9-a6b7-6e6d9a9b18d4', 'Pengujian Usability Antarmuka Website Menggunakan  System Usability Scale (Studi Kasus: Digilive.co.id)', '1', 'Berenang-dengan-Hiu-di-Pantai-Bangsring-Banyuwangi-4.jpg', '<p>Evaluasi Usability Pada Aplikasi BNI Mobile Banking Dengan Menggunakan Metode Usability Testing dan System Usability Scale</p>\r\n', '2021-02-27 21:13:46'),
('4c6f1e25-d9be-4d4b-a49c-6700c036be6b', 'Evaluasi Usability Pada Aplikasi BNI Mobile Banking Dengan Menggunakan Metode Usability Testing dan System Usability Scale', '2', '5.jpg', '<p>Evaluasi Usability Pada Aplikasi BNI Mobile Banking Dengan Menggunakan Metode Usability Testing dan System Usability Scale</p>\r\n', '2021-02-27 21:14:00'),
('4f4c5f5a-05bd-4057-9637-f0746683c1ab', 'Mobile Banking Dengan Menggunakan', '0', 'daenerys-targaryen-hd-wallpaper-21-1920x1200.jpg', '<p>Usability Pada Aplikasi BNI Mobile Banking Dengan Menggunakan Metode Usability Testing dan System Usability Scale</p>\r\n', '2021-02-27 21:22:29'),
('65ee8851-b797-45b1-accc-b0a572c4ea09', 'Pada Aplikasi BNI Mobile BankingUsab', '3', 'Motogp-Andrea-Dovizioso-Wallpaper-700x394.jpg', '<p>Usability Pada Aplikasi BNI Mobile Banking Dengan Menggunakan Metode Usability Testing dan System Usability Scal</p>\r\n', '2021-03-02 20:43:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mice`
--

CREATE TABLE `tb_mice` (
  `id` varchar(500) NOT NULL,
  `info1` longtext NOT NULL,
  `image` varchar(500) NOT NULL,
  `info2` longtext NOT NULL,
  `info3` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mice`
--

INSERT INTO `tb_mice` (`id`, `info1`, `image`, `info2`, `info3`) VALUES
('0', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi.</p>\r\n', 'Dovizioso-Ducati-Race-MogtoGP-2015-Wallpaper-Sport-HD-Free-52993884.jpg', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi.</p>\r\n', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi.</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mice1`
--

CREATE TABLE `tb_mice1` (
  `idmice` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `info1` longtext NOT NULL,
  `info2` longtext NOT NULL,
  `price` varchar(500) NOT NULL,
  `dte` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mice1`
--

INSERT INTO `tb_mice1` (`idmice`, `image`, `title`, `info1`, `info2`, `price`, `dte`) VALUES
('c5bfe57a-578c-4887-a752-d62e5465c550', 'Dovizioso-Ducati-Race-MogtoGP-2015-Wallpaper-Sport-HD-Free-52993884.jpg', 'Paket 1 Keliling Desa', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi.</p>\r\n', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi.</p>\r\n', '33444', '2021-02-27 09:33:16'),
('78b12e62-85e6-4c33-b1d8-3fc1b7ef0eb4', 'Motogp-Andrea-Dovizioso-Wallpaper-700x394.jpg', 'Paket 2 Keliling Kecamatan', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi.</p>\r\n', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi.</p>\r\n', 'Rp. 2.000.000', '2021-03-01 22:32:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_news`
--

CREATE TABLE `tb_news` (
  `idnews` varchar(50) NOT NULL,
  `display` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL,
  `info` longtext NOT NULL,
  `title` varchar(500) NOT NULL,
  `dte` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_news`
--

INSERT INTO `tb_news` (`idnews`, `display`, `image`, `info`, `title`, `dte`) VALUES
('0cfd9f09-3db3-4e80-8e90-1e189b044654', '1', '5.jpg', '<p>Berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.</p>\r\n', 'Aplikasi Mobile Banking Dengan Menggunakan Metode Usability Testing dan System Usability Scale', '2021-02-09 23:54:00'),
('6dfdb766-a017-488e-89c3-f6484bfebb48', '1', 'woman-standing-nose-yacht-sunny-summer-day-breeze-developing-hair_231208-83491.jpg', '<p>Pengujian Usability Antarmuka Website Menggunakan &nbsp;System Usability Scale (Studi Kasus: Digilive.co.id)</p>\r\n', 'Gunung Kembar Yang Indah wkqjwwj', '2021-02-09 20:29:02'),
('7efeb1b2-03ba-497e-8790-44ca81101d98', '2', 'a5b821b717f1518b708b12347f7fa17a13bbd84448eb843a4bcd8a3b0885eb0195f46218e372d9bf04d91621795e3d30df040c8cd63e72c68eed0a_1280.jpg', '<p>Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;&nbsp;perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.</p>\r\n', 'Website Gunakan  System Usability Scale (Studi Kasus: Digilive.co.id)', '2021-02-09 21:48:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rental1`
--

CREATE TABLE `tb_rental1` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `info1` longtext NOT NULL,
  `info2` longtext NOT NULL,
  `info3` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_rental1`
--

INSERT INTO `tb_rental1` (`id`, `image`, `info1`, `info2`, `info3`) VALUES
(0, '42f0ca1e0f6033e34a46c825e8ea27ad44c75e2dec07a1932379c011a7bec554737146f31993c1af12cdef3b32d89aa8fc29b2a7abf2054c2909e3_1280.jpg', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi.</p>\r\n', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi.</p>\r\n', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi.</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rental2`
--

CREATE TABLE `tb_rental2` (
  `idrental` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `info1` longtext NOT NULL,
  `info2` longtext NOT NULL,
  `price` varchar(500) NOT NULL,
  `dte` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_rental2`
--

INSERT INTO `tb_rental2` (`idrental`, `image`, `title`, `info1`, `info2`, `price`, `dte`) VALUES
('3cb293c5-dbd8-4bab-9056-7a34ae5ea718', '42f0ca1e0f6033e34a46c825e8ea27ad44c75e2dec07a1932379c011a7bec554737146f31993c1af12cdef3b32d89aa8fc29b2a7abf2054c2909e3_1280.jpg', 'Rental Mobil BMW M#', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi.</p>\r\n', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi.</p>\r\n', 'Rp,- 1.500.000', '2021-02-12 18:27:15'),
('42fbe3d2-65b6-4978-98ed-a3f79d2b13dc', 'ac2d53025fec0d7b10114f45849f3c848f65a48ebb753aa75d6c65879f3bbdcafecf78b26b4980400edd8d6588d445913fb629fd89621434443ef0_1280.jpg', 'Rental Mobil Avanza 2021', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi.</p>\r\n', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi.</p>\r\n', 'Rp,- 1.000.000,00', '2021-02-12 16:11:32'),
('b9aebdcd-d2b8-4779-85bd-7202ffc52929', '68860ce72f01c553efd4aa4201f8961bbca1ae344edb1a83239a61d2301d4aa53cb4cdb0807e622774ed24f4643d0dff39effa96aca0446548b805_1280.jpg', 'Rental Mobil Mc Lereeen', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi.</p>\r\n', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi.</p>\r\n', 'Rp,- 100.000,00', '2021-02-12 18:21:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_travel1`
--

CREATE TABLE `tb_travel1` (
  `id` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `info1` longtext NOT NULL,
  `info2` longtext NOT NULL,
  `info3` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_travel1`
--

INSERT INTO `tb_travel1` (`id`, `image`, `info1`, `info2`, `info3`) VALUES
('0', 'travel-reguler-banyuwangi.jpg', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.</p>\r\n', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.</p>\r\n', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_travel2`
--

CREATE TABLE `tb_travel2` (
  `idtravel` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `info1` longtext NOT NULL,
  `info2` longtext NOT NULL,
  `price` varchar(500) NOT NULL,
  `dte` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_travel2`
--

INSERT INTO `tb_travel2` (`idtravel`, `image`, `title`, `info1`, `info2`, `price`, `dte`) VALUES
('0901aeba-f057-4acf-963d-0a8b5223fda9', 'Hiace golden.jpg', 'Situbondo - Jember PP', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi.</p>\r\n', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi.</p>\r\n', 'Rp. 1.000.000', '2021-03-01 22:20:57'),
('346f8c8e-a160-4979-a9b5-18c1332db195', 'ac2d53025fec0d7b10114f45849f3c848f65a48ebb753aa75d6c65879f3bbdcafecf78b26b4980400edd8d6588d445913fb629fd89621434443ef0_1280.jpg', 'Jogja - Jember PP', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi.</p>\r\n', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi.</p>\r\n', 'Rp. 4.000.000', '2021-03-01 22:22:51'),
('3e015a09-6f07-40e0-8ac3-618325c3f95f', 'travel-reguler-banyuwangi.jpg', 'Situbondo - Malang PP', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi.</p>\r\n', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi.</p>\r\n', 'Rp. 2.000.000', '2021-03-01 22:22:08'),
('415842da-2b9f-4760-9080-89c7e85bad9f', '68860ce72f01c553efd4aa4201f8961bbca1ae344edb1a83239a61d2301d4aa53cb4cdb0807e622774ed24f4643d0dff39effa96aca0446548b805_1280.jpg', 'Jember - Jakarta PP', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi.</p>\r\n', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi.</p>\r\n', 'Rp. 4.000.000', '2021-03-01 22:24:29'),
('ed8ccb79-b764-495b-848b-307738ce5fcd', '40456a6d07775e71830ed4a1079af0ed547afddfbdab6682a67cccb5406b95e8ca9e4b459753ca7f2821f992722d47b458e4fe725a86e08afd8ce3_1280.png', 'Jember - Situbondo PP', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi.</p>\r\n', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi.</p>\r\n', 'Rp. 2.000.000', '2021-03-01 22:23:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_trip1`
--

CREATE TABLE `tb_trip1` (
  `id` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `info1` longtext NOT NULL,
  `info2` longtext NOT NULL,
  `info3` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_trip1`
--

INSERT INTO `tb_trip1` (`id`, `image`, `info1`, `info2`, `info3`) VALUES
('0', 'woman-standing-nose-yacht-sunny-summer-day-breeze-developing-hair_231208-83491.jpg', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.</p>\r\n', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.</p>\r\n', '<ul>\r\n	<li>Jadwal trip fix dan tetap berangkat tanpa menunggu kuota peserta terpenuhi</li>\r\n	<li>Itinerary tidak baku dan dapat berubah karena kondisi di lapangan tanpa mengganggu agenda secara keseluruhan</li>\r\n	<li>Apabila destinasi tujuan tidak memungkinkan untuk dikunjungi karena bencana, cuaca yang tidak mendukung, penutupan tempat wisata, atau sebab lain di luar kendali kami, maka peserta tidak berhak meminta kompensasi atau pengembalian biaya yang telah dibayarkan.</li>\r\n	<li>Pembayaran DP sebesar 30% sebagai tanda jadi keikutsertaan trip</li>\r\n</ul>\r\n\r\n<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_trip2`
--

CREATE TABLE `tb_trip2` (
  `idtrip` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `info1` longtext NOT NULL,
  `info2` longtext NOT NULL,
  `price` varchar(500) NOT NULL,
  `dte` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_trip2`
--

INSERT INTO `tb_trip2` (`idtrip`, `image`, `title`, `info1`, `info2`, `price`, `dte`) VALUES
('06b45ca2-279e-47cf-8b34-cc89ffcd14fa', 'padang-savana-taman-nasional-baluran-situbondo-1024x685.jpg', 'Open Trip Ijen Baluran', '<p>Nikmati pengalaman menjelajah&nbsp;<a href=\"https://www.yukbanyuwangi.co.id/makna-dibalik-wisata-kawah-ijen.html\">Kawah Ijen</a>&nbsp;dan&nbsp;<a href=\"https://www.yukbanyuwangi.co.id/taman-nasional-baluran.html\">Taman Nasional Baluran</a>&nbsp;dengan gabung Open Trip Ijen Baluran di era New Normal, minimal pendaftaran 2 peserta langsung bisa gabung! Tur ini bisa menjadi pilihan termurah untuk menikmati fenomena api biru sekaligus savana Baluran. Fasilitasnya sama dengan tur pribadi, tetapi cukup bayar dengan biaya yang lebih rendah dan Anda akan bergabung dengan wisatawan lain dalam satu kelompok karena&nbsp;<em><strong>tour ini merupakan kolaborasi dari beberapa pihak</strong></em>. Yuk ikuti tournya!</p>\r\n', '<h3><strong>Intenerary</strong></h3>\r\n\r\n<hr />\r\n<p><strong>Hari Pertama</strong><br />\r\n<strong>00:00</strong>&nbsp;Penjemputan pada&nbsp;<em>meeting point</em>&nbsp;wilayah Banyuwangi Kota (Hotel atau Stasiun Kota)<br />\r\n<strong>00.30</strong>&nbsp;Perjalanan menuju ke Post Paltuding<br />\r\n<strong>01.20</strong>&nbsp;Sampai Pos Paltuding, persiapan pendakian dengan tim dan registrasi<br />\r\n<strong>01.30</strong>&nbsp;Pendakian menuju ke&nbsp;<a href=\"https://www.yukbanyuwangi.co.id/tour/open-trip-kawah-ijen\">Kawah Ijen</a><br />\r\n<strong>03.00</strong>&nbsp;Perkirakan tiba kawasan puncak, setelah itu peserta bisa menikmati fenomena bluefire (Kawah Ijen, Blue Fire, Sunrise)<br />\r\n<strong>06.30</strong>&nbsp;Kembali menuju ke Post Paltuding<br />\r\n<strong>08.00</strong>&nbsp;Menuju ke Air terjun Jagir (optional)<br />\r\n<strong>08.30</strong>&nbsp;Menuju penginapan untuk persiapan mandi/sarapan</p>\r\n', 'Rp. 150.000', '2021-02-13 20:41:20'),
('6477d1a3-a542-4f90-ba33-d57d06686142', 'Private-One-Day-Trip-Menjangan-Tabuhan-Start-Banyuwangi_9bfcb00907c7e4a736bd409dfe71686d349404ac.jpg', 'Open Trip Pulau Menjangan', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.</p>\r\n', '<h3><strong>Intenerary</strong></h3>\r\n\r\n<hr />\r\n<p><strong>Hari Pertama</strong><br />\r\n<strong>07:30</strong>&nbsp;Berkumpul di meeting point (Pondok Bambu Grand Watudodol)<br />\r\n<strong>08:00&nbsp;</strong>Briefing, fitting alat dan persiapan penyeberangan<br />\r\n<strong>08:30</strong>&nbsp;Menyeberang ke&nbsp;<a href=\"https://id.wikipedia.org/wiki/Pulau_Menjangan\">Pulau Menjangan</a><br />\r\n<strong>09:30</strong>&nbsp;Sampai di pulau Menjangan, agenda bebas dan photo session di Dermaga Pulau Menjangan dan Pulau Pasir</p>\r\n', 'Rp. 275.000', '2021-02-13 20:30:11'),
('71f10b5d-dc87-4034-9f7e-00f7cf5ac49b', 'tamp.jpg', 'Open Trip Tampora', '<p>Habiskan hari yang menyenangkan melakukan&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur island hopping</a></em>, snorkeling, dan berjemur dalam tur 1 hari! Mulai perjalanan Anda di pagi hari dengan bertemu pemandu tur Anda di Pondok Bambu Grand Watudodol, Banyuwangi. Destinasi pertama yang akan Anda kunjungi adalah Pulau Menjangan. Setelah itu, kunjungi Pulau Tabuhan untuk bermain di pantai.</p>\r\n', '<h3><strong>Intenerary</strong></h3>\r\n\r\n<hr />\r\n<p><strong>Hari Pertama</strong><br />\r\n<strong>07:30</strong>&nbsp;Berkumpul di meeting point (Pondok Bambu Grand Watudodol)<br />\r\n<strong>08:00&nbsp;</strong>Briefing, fitting alat dan persiapan penyeberangan<br />\r\n<strong>08:30</strong>&nbsp;Menyeberang ke&nbsp;<a href=\"https://id.wikipedia.org/wiki/Pulau_Menjangan\">Pulau Menjangan</a><br />\r\n<strong>09:30</strong>&nbsp;Sampai di pulau Menjangan, agenda bebas dan photo session di Dermaga Pulau Menjangan dan Pulau Pasir</p>\r\n', 'Rp. 200.000', '2021-02-13 20:45:47'),
('e80f08a3-c53b-4259-94df-59c061548954', 'Berenang-dengan-Hiu-di-Pantai-Bangsring-Banyuwangi-4.jpg', 'Open Trip Bangsring', '<p>Yuk ikuti rangkaian&nbsp;<em><a href=\"https://www.yukbanyuwangi.co.id/snorkeling-pulau-menjangan-dan-pulau-tabuhan.html\">tur bersama Open Trip Tabuhan #yukbanyuwangi!</a></em>&nbsp;Mulai perjalanan Anda di&nbsp; Pondok Bambu Grand Watudodol dan siap menjelajahi laut Banyuwangi. Nikmati sensasi menjelajahi pulau kecil di Pulau Tabuhan di tengah selat bali dan merasakan serunya berenang bersama bayi hiu di Rumah Apung Bangsring</p>\r\n', '<h3><strong>Intenerary</strong></h3>\r\n\r\n<hr />\r\n<p><strong>Hari Pertama</strong><br />\r\n<strong>08:40</strong>&nbsp;Peserta Open Trip Tabuhan Berkumpul di meeting point (Pondok Bambu Grand Watudodol)<br />\r\n<strong>08:45</strong>&nbsp;Briefing, fitting alat dan persiapan penyeberangan<br />\r\n<strong>09:00</strong>&nbsp;Menyeberang ke pulau Tabuhan<br />\r\n<strong>09:30</strong>&nbsp;Sampai di pulau tabuhan , anda akan diajak berkeliling pulau tabuhan dan foto season di takat pasir<br />\r\n<strong>10:10</strong>&nbsp;Snorkeling di area pulau tabuhan Sambil foto underwater yang akan dibantu dengan instruktur snorkling</p>\r\n', 'Rp. 100.000', '2021-02-13 20:38:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `idusers` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`idusers`, `username`, `password`) VALUES
('627a7812-6c42-11eb-97ba-f07959856a77', 'kusumaindah', '2a4941c7c24121246a53f121864bfb56fc2efd3c');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_desti`
--
ALTER TABLE `tb_desti`
  ADD PRIMARY KEY (`iddesti`);

--
-- Indeks untuk tabel `tb_mice`
--
ALTER TABLE `tb_mice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`idnews`);

--
-- Indeks untuk tabel `tb_rental1`
--
ALTER TABLE `tb_rental1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_rental2`
--
ALTER TABLE `tb_rental2`
  ADD PRIMARY KEY (`idrental`);

--
-- Indeks untuk tabel `tb_travel1`
--
ALTER TABLE `tb_travel1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_travel2`
--
ALTER TABLE `tb_travel2`
  ADD PRIMARY KEY (`idtravel`);

--
-- Indeks untuk tabel `tb_trip1`
--
ALTER TABLE `tb_trip1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_trip2`
--
ALTER TABLE `tb_trip2`
  ADD PRIMARY KEY (`idtrip`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`idusers`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
