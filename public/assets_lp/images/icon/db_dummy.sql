-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 10 Jan 2022 pada 08.19
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dummy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `hak_akses` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `hak_akses`, `username`, `password`, `keterangan`) VALUES
(1, 'admin satu', '1', 'admin1', '1', '1 = super admin\r\n2 = admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga_paket_skd`
--

CREATE TABLE `harga_paket_skd` (
  `id_harga_paket_skd` int(11) NOT NULL,
  `nama_paket` varchar(20) NOT NULL,
  `harga` int(10) NOT NULL,
  `diskon` int(10) NOT NULL,
  `yang_didapat` varchar(1000) NOT NULL,
  `tidak_didapat` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `harga_paket_skd`
--

INSERT INTO `harga_paket_skd` (`id_harga_paket_skd`, `nama_paket`, `harga`, `diskon`, `yang_didapat`, `tidak_didapat`) VALUES
(1, 'gratis', 0, 0, 'Akses Tryout Gratis Sistem CAT,Grafik Hasil Tryout', 'Materi SKD Terupdate,Tryout Premium SKD Sistem CAT,Pembahasan Tryout Lengkap,Analisa Statistik & Hasil Tryout,Analisa Waktu Pengerjaan,Grafik Analisa Waktu,Latihan Soal SKD TWK, TIU dan TKP,Extra Tryout Platinum dengan Pembahasan Video,Video Materi SKD (TWK, TIU dan TKP),Ranking Try Out Nasional dan Daerah,Kalkulator TIU,Sudah Termasuk Benefit Paket Premium'),
(2, 'premium', 200000, 30000, 'Materi SKD Terupdate,Tryout Premium SKD Sistem CAT,Pembahasan Tryout Lengkap,Analisa Statistik & Hasil Tryout,Latihan Soal SKD TWK, TIU dan TKP,Ranking Try Out Nasional dan Daerah ', '-'),
(3, 'platinum', 500000, 200000, 'Materi SKD Terupdate,Tryout Premium SKD Sistem CAT,Pembahasan Tryout Lengkap,Analisa Statistik & Hasil Tryout,Analisa Waktu Pengerjaan,Grafik Analisa Waktu,Latihan Soal SKD TWK, TIU dan TKP,Extra Tryout Platinum dengan Pembahasan Video,Video Materi SKD (TWK, TIU dan TKP),Ranking Try Out Nasional dan Daerah,Kalkulator TIU,Sudah Termasuk Benefit Paket Premium', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban_user_TIU`
--

CREATE TABLE `jawaban_user_TIU` (
  `id_jawaban_TIU` int(11) NOT NULL,
  `id_user` int(255) NOT NULL,
  `paket` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `tgl_mengerjakan` datetime NOT NULL,
  `jawaban` varchar(255) NOT NULL,
  `skor` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jawaban_user_TIU`
--

INSERT INTO `jawaban_user_TIU` (`id_jawaban_TIU`, `id_user`, `paket`, `kategori`, `slug`, `tgl_mengerjakan`, `jawaban`, `skor`) VALUES
(1, 25, 'SKD', 'TIU 1', 'tiu-1', '2022-01-05 10:59:51', 'a,c', 14),
(2, 26, 'SKD', 'TIU 2', 'tiu-2', '2022-01-05 12:10:16', '0,0', 13),
(3, 25, 'SKD', 'TIU 1', 'tiu-1', '2022-01-06 11:59:52', '', 0),
(4, 25, 'SKD', 'TIU 1', 'tiu-1', '2022-01-06 12:02:22', 'a,c,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0', 1),
(5, 25, 'SKD', 'TIU 1', 'tiu-1', '2022-01-06 13:32:01', 'a,d', 0),
(6, 25, 'SKD', 'TIU 1', 'tiu-1', '2022-01-06 13:33:26', 'a,c', 0),
(7, 25, 'SKD', 'TIU 1', 'tiu-1', '2022-01-06 13:39:51', '', 0),
(8, 25, 'SKD', 'TIU 1', 'tiu-1', '2022-01-06 13:42:10', '', 0),
(12, 25, 'SKD', 'TIU 1', 'tiu-1', '2022-01-07 10:11:19', '', 0),
(13, 25, 'SKD', 'TIU 2', 'tiu-2', '2022-01-07 10:12:21', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban_user_TKP`
--

CREATE TABLE `jawaban_user_TKP` (
  `id_jawaban_TKP` int(11) NOT NULL,
  `id_user` int(255) NOT NULL,
  `paket` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `tgl_mengerjakan` datetime NOT NULL,
  `jawaban` varchar(255) NOT NULL,
  `skor` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jawaban_user_TKP`
--

INSERT INTO `jawaban_user_TKP` (`id_jawaban_TKP`, `id_user`, `paket`, `kategori`, `slug`, `tgl_mengerjakan`, `jawaban`, `skor`) VALUES
(1, 25, 'SKD', 'TKP 1', 'tkp-1', '2022-01-06 12:11:09', 'a,c', 13),
(3, 25, 'SKD', 'TKP 2', 'tkp-2', '2022-01-07 10:10:54', '', 0),
(4, 25, 'SKD', 'TKP 1', 'tkp-1', '2022-01-07 10:11:30', '', 0),
(5, 25, 'SKD', 'TKP 2', 'tkp-2', '2022-01-07 10:11:39', '', 0),
(6, 25, 'SKD', 'TKP 2', 'tkp-2', '2022-01-07 10:11:48', '', 0),
(7, 25, 'SKD', 'TKP 2', 'tkp-2', '2022-01-07 10:12:06', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban_user_TWK`
--

CREATE TABLE `jawaban_user_TWK` (
  `id_jawaban_TWK` int(11) NOT NULL,
  `id_user` int(255) NOT NULL,
  `paket` varchar(100) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `tgl_mengerjakan` datetime NOT NULL,
  `jawaban` varchar(255) DEFAULT NULL,
  `skor` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jawaban_user_TWK`
--

INSERT INTO `jawaban_user_TWK` (`id_jawaban_TWK`, `id_user`, `paket`, `kategori`, `slug`, `tgl_mengerjakan`, `jawaban`, `skor`) VALUES
(133, 25, 'SKD', 'TWK 1', 'twk-1', '2022-01-06 11:08:59', '0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0', 0),
(134, 25, 'SKD', 'TWK 1', 'twk-1', '2022-01-06 11:59:37', '0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0', 0),
(135, 25, 'SKD', 'TWK 1', 'twk-1', '2022-01-06 13:34:38', 'a,b', 0),
(136, 25, 'SKD', 'TWK 1', 'twk-1', '2022-01-06 13:35:22', '0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0', 0),
(137, 25, 'SKD', 'TWK 1', 'twk-1', '2022-01-06 13:35:40', '0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0', 0),
(138, 25, 'SKD', 'TWK 1', 'twk-1', '2022-01-06 13:50:23', '0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0', 0),
(139, 25, 'SKD', 'TWK 2', 'twk-2', '2022-01-06 14:01:41', '0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0', 0),
(142, 25, 'SKD', 'TWK 1', 'twk-1', '2022-01-07 15:31:53', NULL, 0),
(143, 25, 'SKD', 'TWK 1', 'twk-1', '2022-01-07 15:32:01', NULL, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_skd`
--

CREATE TABLE `kategori_skd` (
  `id_kategori_skd` int(11) NOT NULL,
  `jenis_kategori_skd` varchar(100) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_TIU`
--

CREATE TABLE `kategori_TIU` (
  `id_kategori_TIU` int(11) NOT NULL,
  `limit_soal` int(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `waktu` int(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_TIU`
--

INSERT INTO `kategori_TIU` (`id_kategori_TIU`, `limit_soal`, `jumlah`, `waktu`, `slug`) VALUES
(1, 35, 35, 35, 'tiu-1'),
(2, 70, 35, 35, 'tiu-2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_TKP`
--

CREATE TABLE `kategori_TKP` (
  `id_kategori_TKP` int(11) NOT NULL,
  `limit_soal` int(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `waktu` int(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_TKP`
--

INSERT INTO `kategori_TKP` (`id_kategori_TKP`, `limit_soal`, `jumlah`, `waktu`, `slug`) VALUES
(1, 40, 40, 40, 'tkp-1'),
(2, 80, 40, 40, 'tkp-2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_TWK`
--

CREATE TABLE `kategori_TWK` (
  `id_kategori_TWK` int(11) NOT NULL,
  `limit_soal` int(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `waktu` int(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_TWK`
--

INSERT INTO `kategori_TWK` (`id_kategori_TWK`, `limit_soal`, `jumlah`, `waktu`, `slug`, `keterangan`) VALUES
(1, 15, 15, 15, 'twk-1', 'where = limit - jumlah'),
(2, 30, 15, 15, 'twk-2', 'where = limit - jumlah'),
(8, 65, 35, 35, 'twk-3', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_user` int(255) NOT NULL,
  `paket` varchar(100) NOT NULL,
  `jenis_paket` varchar(100) NOT NULL,
  `id_harga_paket` int(255) NOT NULL,
  `tgl_beli` datetime NOT NULL,
  `bukti_pembayaran` int(11) NOT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `status_keranjang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_user`, `paket`, `jenis_paket`, `id_harga_paket`, `tgl_beli`, `bukti_pembayaran`, `image`, `status_keranjang`) VALUES
(4, 1, 'SKD', 'platinum', 3, '0000-00-00 00:00:00', 0, NULL, 3),
(5, 25, 'SKD', 'gratis', 1, '0000-00-00 00:00:00', 1, '22-01-02_04:23:48-41.png', 4),
(6, 26, 'SKD', 'platinum', 3, '2022-01-03 09:41:43', 1, '22-01-03_09:42:06-26.png', 3),
(7, 27, 'SKD', 'gratis', 1, '0000-00-00 00:00:00', 1, '21-12-23_09:41:51-27.png', 4),
(10, 36, 'SKD', 'premium', 2, '2021-12-23 00:00:00', 1, '21-12-23_12:59:17-36.png', 3),
(11, 37, 'SKD', 'platinum', 2, '2021-12-24 00:00:00', 1, '21-12-24_09:42:17-37.png', 3),
(12, 38, 'SKD', 'gratis', 1, '0000-00-00 00:00:00', 0, NULL, 0),
(13, 39, 'SKD', 'platinum', 3, '2021-12-27 00:00:00', 1, '21-12-27_09:29:33-39.png', 3),
(14, 40, 'SKD', 'gratis', 1, '0000-00-00 00:00:00', 0, NULL, 0),
(15, 41, 'SKD', 'premium', 2, '2022-01-02 00:00:00', 1, '22-01-02_04:26:23-41.png', 3),
(16, 46, 'SKD', 'gratis', 1, '0000-00-00 00:00:00', 1, '22-01-06_03:21:45-46.png', 4),
(17, 47, 'SKD', 'platinum', 3, '2022-01-07 03:36:53', 0, '', 1),
(18, 51, 'SKD', 'gratis', 1, '0000-00-00 00:00:00', 0, NULL, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_user`
--

CREATE TABLE `paket_user` (
  `id_paket_user` int(11) NOT NULL,
  `id_user` int(255) NOT NULL,
  `id_keranjang` int(255) NOT NULL,
  `paket` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `id_harga_paket` int(255) NOT NULL,
  `tgl_aktif` date NOT NULL,
  `tgl_limit` date NOT NULL,
  `status_paket_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paket_user`
--

INSERT INTO `paket_user` (`id_paket_user`, `id_user`, `id_keranjang`, `paket`, `jenis`, `id_harga_paket`, `tgl_aktif`, `tgl_limit`, `status_paket_user`) VALUES
(4, 25, 4, 'SKD', 'platinum', 3, '0000-00-00', '0000-00-00', 1),
(5, 26, 6, 'SKD', 'platinum', 3, '2022-01-03', '2022-02-03', 1),
(6, 27, 7, 'SKD', 'premium', 2, '2021-12-26', '2022-06-26', 1),
(7, 36, 10, 'SKD', 'premium', 2, '2021-12-24', '2022-12-24', 1),
(8, 37, 11, 'SKD', 'platinum', 3, '2021-12-24', '2022-12-24', 1),
(10, 39, 13, 'SKD', 'platinum', 3, '2021-12-27', '2022-01-27', 1),
(11, 40, 14, 'SKD', 'gratis', 1, '0000-00-00', '0000-00-00', 2),
(12, 41, 15, 'SKD', 'premium', 2, '2022-01-02', '2022-07-02', 1),
(13, 46, 16, 'SKD', 'gratis', 1, '0000-00-00', '0000-00-00', 0),
(14, 47, 17, 'SKD', 'gratis', 1, '0000-00-00', '0000-00-00', 0),
(15, 51, 18, 'SKD', 'gratis', 1, '0000-00-00', '0000-00-00', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `TIU`
--

CREATE TABLE `TIU` (
  `id_soal_tiu` int(11) NOT NULL,
  `nama_soal` varchar(255) NOT NULL,
  `a` varchar(255) NOT NULL,
  `b` varchar(255) NOT NULL,
  `c` varchar(255) NOT NULL,
  `d` varchar(255) NOT NULL,
  `e` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `kunci` varchar(5) NOT NULL,
  `pembahasan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `TIU`
--

INSERT INTO `TIU` (`id_soal_tiu`, `nama_soal`, `a`, `b`, `c`, `d`, `e`, `slug`, `kunci`, `pembahasan`) VALUES
(1, 'aaa', 'a', 'a', 'a', 'a', 'a', 'tiu-1', 'a', 'aaa'),
(2, 'fd', 'fd', 'fd', 'fd', 'fd', 'gfdfg', 'tiu-1', 'dgf', 'dgf'),
(3, 'hhs', 'fgj', 's', 'sjfg', 'sfg', 'sgj', 'tiu-2', 's', 'sgj'),
(4, ';if7fp7f', 'p7', 'lf', 'ff', '7', 'f7f', 'tiu-2', ',7f', 'ljhf,7s'),
(5, 'fd', 'fd', 'fd', 'fd', 'fd', 'gfdfg', 'tiu-1', 'dgf', 'dgf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `TKP`
--

CREATE TABLE `TKP` (
  `id_soal_tkp` int(11) NOT NULL,
  `nama_soal` varchar(255) NOT NULL,
  `a` varchar(255) NOT NULL,
  `b` varchar(255) NOT NULL,
  `c` varchar(255) NOT NULL,
  `d` varchar(255) NOT NULL,
  `e` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `kunci` varchar(5) NOT NULL,
  `pembahasan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `TKP`
--

INSERT INTO `TKP` (`id_soal_tkp`, `nama_soal`, `a`, `b`, `c`, `d`, `e`, `slug`, `kunci`, `pembahasan`) VALUES
(1, 'dkjdgd', 'kghd', 'kghd', 'hgdk', 'hd', 'khd', 'tkp-1', 'khd', 'khd'),
(2, 'kghd', 'khgdk', 'ghd', 'kghd', 'ghd', 'd', 'tkp-1', 'khd', 'khd'),
(3, 'jdkjgdjddykd', 'kyd', 'kuydtt', 'dk', 'tdkt', 'dt', 'tkp-2', 'udk', 'dt'),
(4, 'tdk', 'thdk', 'hd', 'hd', 'khgd', 'ghd', 'tkp-2', 'kghd', 'khd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `TWK`
--

CREATE TABLE `TWK` (
  `id_soal_twk` int(11) NOT NULL,
  `nama_soal` varchar(255) NOT NULL,
  `a` varchar(255) NOT NULL,
  `b` varchar(255) NOT NULL,
  `c` varchar(255) NOT NULL,
  `d` varchar(255) NOT NULL,
  `e` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `kunci` varchar(255) NOT NULL,
  `pembahasan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `TWK`
--

INSERT INTO `TWK` (`id_soal_twk`, `nama_soal`, `a`, `b`, `c`, `d`, `e`, `slug`, `kunci`, `pembahasan`) VALUES
(1, 'HTML atau Hyper Text Markup Language merupakan', 'Bahasa Pemrograman', 'Bahasa Pascal', 'Bahasa Java', 'Bahasa C', 'Bahasa R', 'twk-1', 'Bahasa Python', 'HTML atau Hyper Text Markup Language merupakan sebuah bahasa pemrograman yang dirancang untuk membuat website dengan menggunakan akses internet.'),
(2, 'HTML atau Hyper Text Markup Language merupakan', 'Bahasa Pemrograman', 'Filipina', 'Brunei Darussalam', 'Rusia', 'Jerman', 'twk-1', 'c', 'HTML atau Hyper Text Markup Language merupakan'),
(39, 'fkfhjlfjhlf', 'jhfhjlfljhf', 'ljhf', 'lhjf', 'ljhf', 'ljf', 'twk-1', 'ljflhjf', 'lkfljhfljh'),
(40, 'asdsafasfasfl/jl;g\"Ghs;\'zobu zor;\'buo\'', 'Amerika Serikat', 'Filipina', 'Brunei Darussalam', 'Rusia', 'Jerman', 'twk-1', 'c', 'Monarchism is the advocacy of the system of monarchy or monarchical rule. A monarchist is an individual who supports this form of government independent of any specific monarch, whereas one who supports a particular monarch is a royalist. Conversely, the opposition to monarchical rule is referred to as republicanism.'),
(41, 'asdsafasfasfl/jl;g\"Ghs;\'zobu zor;\'buo\'', 'Amerika Serikat', 'Filipina', 'Brunei Darussalam', 'Rusia', 'Jerman', 'twk-1', 'c', 'Monarchism is the advocacy of the system of monarchy or monarchical rule. A monarchist is an individual who supports this form of government independent of any specific monarch, whereas one who supports a particular monarch is a royalist. Conversely, the opposition to monarchical rule is referred to as republicanism.'),
(42, 'asdsafasfasfl/jl;g\"Ghs;\'zobu zor;\'buo\'', 'Amerika Serikat', 'Filipina', 'Brunei Darussalam', 'Rusia', 'Jerman', 'twk-1', 'c', 'Monarchism is the advocacy of the system of monarchy or monarchical rule. A monarchist is an individual who supports this form of government independent of any specific monarch, whereas one who supports a particular monarch is a royalist. Conversely, the opposition to monarchical rule is referred to as republicanism.'),
(43, 'asdsafasfasfl/jl;g\"Ghs;\'zobu zor;\'buo\'', 'Amerika Serikat', 'Filipina', 'Brunei Darussalam', 'Rusia', 'Jerman', 'twk-1', 'c', 'Monarchism is the advocacy of the system of monarchy or monarchical rule. A monarchist is an individual who supports this form of government independent of any specific monarch, whereas one who supports a particular monarch is a royalist. Conversely, the opposition to monarchical rule is referred to as republicanism.'),
(44, 'asdsafasfasfl/jl;g\"Ghs;\'zobu zor;\'buo\'', 'Amerika Serikat', 'Filipina', 'Brunei Darussalam', 'Rusia', 'Jerman', 'twk-1', 'c', 'Monarchism is the advocacy of the system of monarchy or monarchical rule. A monarchist is an individual who supports this form of government independent of any specific monarch, whereas one who supports a particular monarch is a royalist. Conversely, the opposition to monarchical rule is referred to as republicanism.'),
(45, 'asdsafasfasfl/jl;g\"Ghs;\'zobu zor;\'buo\'', 'Amerika Serikat', 'Filipina', 'Brunei Darussalam', 'Rusia', 'Jerman', 'twk-1', 'c', 'Monarchism is the advocacy of the system of monarchy or monarchical rule. A monarchist is an individual who supports this form of government independent of any specific monarch, whereas one who supports a particular monarch is a royalist. Conversely, the opposition to monarchical rule is referred to as republicanism.'),
(46, 'asdsafasfasfl/jl;g\"Ghs;\'zobu zor;\'buo\'', 'Amerika Serikat', 'Filipina', 'Brunei Darussalam', 'Rusia', 'Jerman', 'twk-1', 'c', 'Monarchism is the advocacy of the system of monarchy or monarchical rule. A monarchist is an individual who supports this form of government independent of any specific monarch, whereas one who supports a particular monarch is a royalist. Conversely, the opposition to monarchical rule is referred to as republicanism.'),
(47, 'asdsafasfasfl/jl;g\"Ghs;\'zobu zor;\'buo\'', 'Amerika Serikat', 'Filipina', 'Brunei Darussalam', 'Rusia', 'Jerman', 'twk-1', 'c', 'Monarchism is the advocacy of the system of monarchy or monarchical rule. A monarchist is an individual who supports this form of government independent of any specific monarch, whereas one who supports a particular monarch is a royalist. Conversely, the opposition to monarchical rule is referred to as republicanism.'),
(48, 'asdsafasfasfl/jl;g\"Ghs;\'zobu zor;\'buo\'', 'Amerika Serikat', 'Filipina', 'Brunei Darussalam', 'Rusia', 'Jerman', 'twk-1', 'c', 'Monarchism is the advocacy of the system of monarchy or monarchical rule. A monarchist is an individual who supports this form of government independent of any specific monarch, whereas one who supports a particular monarch is a royalist. Conversely, the opposition to monarchical rule is referred to as republicanism.'),
(49, 'asdsafasfasfl/jl;g\"Ghs;\'zobu zor;\'buo\'', 'Amerika Serikat', 'Filipina', 'Brunei Darussalam', 'Rusia', 'Jerman', 'twk-1', 'c', 'Monarchism is the advocacy of the system of monarchy or monarchical rule. A monarchist is an individual who supports this form of government independent of any specific monarch, whereas one who supports a particular monarch is a royalist. Conversely, the opposition to monarchical rule is referred to as republicanism.'),
(50, 'asdsafasfasfl/jl;g\"Ghs;\'zobu zor;\'buo\'', 'Amerika Serikat', 'Filipina', 'Brunei Darussalam', 'Rusia', 'Jerman', 'twk-1', 'c', 'Monarchism is the advocacy of the system of monarchy or monarchical rule. A monarchist is an individual who supports this form of government independent of any specific monarch, whereas one who supports a particular monarch is a royalist. Conversely, the opposition to monarchical rule is referred to as republicanism.'),
(51, 'asdsafasfasfl/jl;g\"Ghs;\'zobu zor;\'buo\'', 'Amerika Serikat', 'Filipina', 'Brunei Darussalam', 'Rusia', 'Jerman', 'twk-1', 'c', 'Monarchism is the advocacy of the system of monarchy or monarchical rule. A monarchist is an individual who supports this form of government independent of any specific monarch, whereas one who supports a particular monarch is a royalist. Conversely, the opposition to monarchical rule is referred to as republicanism.'),
(52, 'Lembaga yang menjalankan pemerintahan daerah dan melaksanakan tugas mengatur rumah tangga daerahnya saat Indonesia baru merdeka adalah ...', 'Komite Nasional Indonesia Daerah', 'Komite Nasional Indonesia Merdeka', 'Komite Nasional Perbantuan Daerah', 'Komite Daerah', 'Komite Daerah Perbantuan Nasional', 'twk-2', 'a', ''),
(53, 'Lembaga yang menjalankan pemerintahan daerah dan melaksanakan tugas mengatur rumah tangga daerahnya saat Indonesia baru merdeka adalah ...', 'Komite Nasional Indonesia Daerah', 'Komite Nasional Indonesia Merdeka', 'Komite Nasional Perbantuan Daerah', 'Komite Daerah', 'Komite Daerah Perbantuan Nasional', 'twk-2', 'a', ''),
(54, 'Lembaga yang menjalankan pemerintahan daerah dan melaksanakan tugas mengatur rumah tangga daerahnya saat Indonesia baru merdeka adalah ...', 'Komite Nasional Indonesia Daerah', 'Komite Nasional Indonesia Merdeka', 'Komite Nasional Perbantuan Daerah', 'Komite Daerah', 'Komite Daerah Perbantuan Nasional', 'twk-2', 'a', ''),
(55, 'Lembaga yang menjalankan pemerintahan daerah dan melaksanakan tugas mengatur rumah tangga daerahnya saat Indonesia baru merdeka adalah ...', 'Komite Nasional Indonesia Daerah', 'Komite Nasional Indonesia Merdeka', 'Komite Nasional Perbantuan Daerah', 'Komite Daerah', 'Komite Daerah Perbantuan Nasional', 'twk-2', 'a', ''),
(56, 'Lembaga yang menjalankan pemerintahan daerah dan melaksanakan tugas mengatur rumah tangga daerahnya saat Indonesia baru merdeka adalah ...', 'Komite Nasional Indonesia Daerah', 'Komite', 'Komite Nasional Perbantuan Daerah', 'Komite Daerah', 'Komite Daerah Perbantuan Nasional', 'twk-2', 'a', ''),
(57, 'Lembaga yang menjalankan pemerintahan daerah dan melaksanakan tugas mengatur rumah tangga daerahnya saat Indonesia baru merdeka adalah ...', 'Komite Nasional Indonesia Daerah', 'Komite Nasional Indonesia Merdeka', 'Komite Nasional Perbantuan Daerah', 'Komite Daerah', 'Komite Daerah Perbantuan Nasional', 'twk-2', 'a', ''),
(58, 'Lembaga yang menjalankan pemerintahan daerah dan melaksanakan tugas mengatur rumah tangga daerahnya saat Indonesia baru merdeka adalah ...', 'Komite Nasional Indonesia Daerah', 'Komite Nasional Indonesia Merdeka', 'Komite Nasional Perbantuan Daerah', 'Komite Daerah', 'Komite Daerah Perbantuan Nasional', 'twk-2', 'a', ''),
(59, 'Lembaga yang menjalankan pemerintahan daerah dan melaksanakan tugas mengatur rumah tangga daerahnya saat Indonesia baru merdeka adalah ...', 'Komite Nasional Indonesia Daerah', 'Komite Nasional Indonesia Merdeka', 'Komite Nasional Perbantuan Daerah', 'Komite Daerah', 'Komite Daerah Perbantuan Nasional', 'twk-2', 'a', ''),
(60, 'Lembaga yang menjalankan pemerintahan daerah dan melaksanakan tugas mengatur rumah tangga daerahnya saat Indonesia baru merdeka adalah ...', 'Komite Nasional Indonesia Daerah', 'Komite Nasional Indonesia Merdeka', 'Komite Nasional Perbantuan Daerah', 'Komite Daerah', 'Komite Daerah Perbantuan Nasional', 'twk-2', 'a', ''),
(62, 'Lembaga yang menjalankan pemerintahan daerah dan melaksanakan tugas mengatur rumah tangga daerahnya saat Indonesia baru merdeka adalah ...', 'Komite Nasional Indonesia Daerah', 'Komite Nasional Indonesia Merdeka', 'Komite Nasional Perbantuan Daerah', 'Komite Daerah', 'Komite Daerah Perbantuan Nasional', 'twk-2', 'a', ''),
(63, 'Lembaga yang menjalankan pemerintahan daerah dan melaksanakan tugas mengatur rumah tangga daerahnya saat Indonesia baru merdeka adalah ...', 'Komite Nasional Indonesia Daerah', 'Komite Nasional Indonesia Merdeka', 'Komite Nasional Perbantuan Daerah', 'Komite Daerah', 'Komite Daerah Perbantuan Nasional', 'twk-2', 'a', ''),
(64, 'Lembaga yang menjalankan pemerintahan daerah dan melaksanakan tugas mengatur rumah tangga daerahnya saat Indonesia baru merdeka adalah ...', 'Komite Nasional Indonesia Daerah', 'Komite Nasional Indonesia Merdeka', 'Komite Nasional Perbantuan Daerah', 'Komite Daerah', 'Komite Daerah Perbantuan Nasional', 'twk-2', 'a', ''),
(65, 'Lembaga yang menjalankan pemerintahan daerah dan melaksanakan tugas mengatur rumah tangga daerahnya saat Indonesia baru merdeka adalah ...', 'Komite Nasional Indonesia Daerah', 'Komite Nasional Indonesia Merdeka', 'Komite Nasional Perbantuan Daerah', 'Komite Daerah', 'Komite Daerah Perbantuan Nasional', 'twk-2', 'a', ''),
(66, 'Lembaga yang menjalankan pemerintahan daerah dan melaksanakan tugas mengatur rumah tangga daerahnya saat Indonesia baru merdeka adalah ...', 'Komite Nasional Indonesia Daerah', 'Komite Nasional Indonesia Merdeka', 'Komite Nasional Perbantuan Daerah', 'Komite Daerah', 'Komite Daerah Perbantuan Nasional', 'twk-2', 'a', ''),
(67, 'Lembaga yang menjalankan pemerintahan daerah dan melaksanakan tugas mengatur rumah tangga daerahnya saat Indonesia baru merdeka adalah ...', 'Komite Nasional Indonesia Daerah', 'Komite Nasional Indonesia Merdeka', 'Komite Nasional Perbantuan Daerah', 'Komite Daerah', 'Komite Daerah Perbantuan Nasional', 'twk-2', 'a', ''),
(96, 'asdsada', 's', 'ds', 'ds', 'ds', 'd', 'twk-3', 'sd', 'sd'),
(97, 'sd', 'sds', 'ds', 'd', 'sd', 'sd', 'twk-3', 'sd', 'sd'),
(98, 'HTML atau Hyper Text Markup Language merupakan', 'Bahasa Pemrograman', 'Bahasa Pascal', 'Bahasa Java', 'Bahasa C', 'Bahasa R', 'twk-1', 'Bahasa Python', 'HTML atau Hyper Text Markup Language merupakan sebuah bahasa pemrograman yang dirancang untuk membuat website dengan menggunakan akses internet.'),
(99, 'HTML atau Hyper Text Markup Language merupakan', 'Bahasa Pemrograman', 'Filipina', 'Brunei Darussalam', 'Rusia', 'Jerman', 'twk-1', 'c', 'HTML atau Hyper Text Markup Language merupakan'),
(100, 'fkfhjlfjhlf', 'jhfhjlfljhf', 'ljhf', 'lhjf', 'ljhf', 'ljf', 'twk-1', 'ljflhjf', 'lkfljhfljh'),
(101, 'asdsafasfasfl/jl;g\"Ghs;\'zobu zor;\'buo\'', 'Amerika Serikat', 'Filipina', 'Brunei Darussalam', 'Rusia', 'Jerman', 'twk-1', 'c', 'Monarchism is the advocacy of the system of monarchy or monarchical rule. A monarchist is an individual who supports this form of government independent of any specific monarch, whereas one who supports a particular monarch is a royalist. Conversely, the opposition to monarchical rule is referred to as republicanism.'),
(102, 'asdsafasfasfl/jl;g\"Ghs;\'zobu zor;\'buo\'', 'Amerika Serikat', 'Filipina', 'Brunei Darussalam', 'Rusia', 'Jerman', 'twk-1', 'c', 'Monarchism is the advocacy of the system of monarchy or monarchical rule. A monarchist is an individual who supports this form of government independent of any specific monarch, whereas one who supports a particular monarch is a royalist. Conversely, the opposition to monarchical rule is referred to as republicanism.'),
(103, 'asdsafasfasfl/jl;g\"Ghs;\'zobu zor;\'buo\'', 'Amerika Serikat', 'Filipina', 'Brunei Darussalam', 'Rusia', 'Jerman', 'twk-1', 'c', 'Monarchism is the advocacy of the system of monarchy or monarchical rule. A monarchist is an individual who supports this form of government independent of any specific monarch, whereas one who supports a particular monarch is a royalist. Conversely, the opposition to monarchical rule is referred to as republicanism.'),
(104, 'asdsafasfasfl/jl;g\"Ghs;\'zobu zor;\'buo\'', 'Amerika Serikat', 'Filipina', 'Brunei Darussalam', 'Rusia', 'Jerman', 'twk-1', 'c', 'Monarchism is the advocacy of the system of monarchy or monarchical rule. A monarchist is an individual who supports this form of government independent of any specific monarch, whereas one who supports a particular monarch is a royalist. Conversely, the opposition to monarchical rule is referred to as republicanism.'),
(105, 'asdsafasfasfl/jl;g\"Ghs;\'zobu zor;\'buo\'', 'Amerika Serikat', 'Filipina', 'Brunei Darussalam', 'Rusia', 'Jerman', 'twk-1', 'c', 'Monarchism is the advocacy of the system of monarchy or monarchical rule. A monarchist is an individual who supports this form of government independent of any specific monarch, whereas one who supports a particular monarch is a royalist. Conversely, the opposition to monarchical rule is referred to as republicanism.'),
(106, 'asdsafasfasfl/jl;g\"Ghs;\'zobu zor;\'buo\'', 'Amerika Serikat', 'Filipina', 'Brunei Darussalam', 'Rusia', 'Jerman', 'twk-1', 'c', 'Monarchism is the advocacy of the system of monarchy or monarchical rule. A monarchist is an individual who supports this form of government independent of any specific monarch, whereas one who supports a particular monarch is a royalist. Conversely, the opposition to monarchical rule is referred to as republicanism.'),
(107, 'asdsafasfasfl/jl;g\"Ghs;\'zobu zor;\'buo\'', 'Amerika Serikat', 'Filipina', 'Brunei Darussalam', 'Rusia', 'Jerman', 'twk-1', 'c', 'Monarchism is the advocacy of the system of monarchy or monarchical rule. A monarchist is an individual who supports this form of government independent of any specific monarch, whereas one who supports a particular monarch is a royalist. Conversely, the opposition to monarchical rule is referred to as republicanism.'),
(108, 'asdsafasfasfl/jl;g\"Ghs;\'zobu zor;\'buo\'', 'Amerika Serikat', 'Filipina', 'Brunei Darussalam', 'Rusia', 'Jerman', 'twk-1', 'c', 'Monarchism is the advocacy of the system of monarchy or monarchical rule. A monarchist is an individual who supports this form of government independent of any specific monarch, whereas one who supports a particular monarch is a royalist. Conversely, the opposition to monarchical rule is referred to as republicanism.'),
(109, 'asdsafasfasfl/jl;g\"Ghs;\'zobu zor;\'buo\'', 'Amerika Serikat', 'Filipina', 'Brunei Darussalam', 'Rusia', 'Jerman', 'twk-1', 'c', 'Monarchism is the advocacy of the system of monarchy or monarchical rule. A monarchist is an individual who supports this form of government independent of any specific monarch, whereas one who supports a particular monarch is a royalist. Conversely, the opposition to monarchical rule is referred to as republicanism.'),
(110, 'asdsafasfasfl/jl;g\"Ghs;\'zobu zor;\'buo\'', 'Amerika Serikat', 'Filipina', 'Brunei Darussalam', 'Rusia', 'Jerman', 'twk-1', 'c', 'Monarchism is the advocacy of the system of monarchy or monarchical rule. A monarchist is an individual who supports this form of government independent of any specific monarch, whereas one who supports a particular monarch is a royalist. Conversely, the opposition to monarchical rule is referred to as republicanism.'),
(111, 'asdsafasfasfl/jl;g\"Ghs;\'zobu zor;\'buo\'', 'Amerika Serikat', 'Filipina', 'Brunei Darussalam', 'Rusia', 'Jerman', 'twk-1', 'c', 'Monarchism is the advocacy of the system of monarchy or monarchical rule. A monarchist is an individual who supports this form of government independent of any specific monarch, whereas one who supports a particular monarch is a royalist. Conversely, the opposition to monarchical rule is referred to as republicanism.'),
(112, 'asdsafasfasfl/jl;g\"Ghs;\'zobu zor;\'buo\'', 'Amerika Serikat', 'Filipina', 'Brunei Darussalam', 'Rusia', 'Jerman', 'twk-1', 'c', 'Monarchism is the advocacy of the system of monarchy or monarchical rule. A monarchist is an individual who supports this form of government independent of any specific monarch, whereas one who supports a particular monarch is a royalist. Conversely, the opposition to monarchical rule is referred to as republicanism.'),
(113, 'HTML atau Hyper Text Markup Language merupakan', 'Bahasa Pemrograman', 'Bahasa Pascal', 'Bahasa Java', 'Bahasa C', 'Bahasa R', 'twk-1', 'Bahasa Python', 'HTML atau Hyper Text Markup Language merupakan sebuah bahasa pemrograman yang dirancang untuk membuat website dengan menggunakan akses internet.'),
(114, 'HTML atau Hyper Text Markup Language merupakan', 'Bahasa Pemrograman', 'Filipina', 'Brunei Darussalam', 'Rusia', 'Jerman', 'twk-1', 'c', 'HTML atau Hyper Text Markup Language merupakan'),
(115, 'fkfhjlfjhlf', 'jhfhjlfljhf', 'ljhf', 'lhjf', 'ljhf', 'ljf', 'twk-1', 'ljflhjf', 'lkfljhfljh'),
(116, 'asdsafasfasfl/jl;g\"Ghs;\'zobu zor;\'buo\'', 'Amerika Serikat', 'Filipina', 'Brunei Darussalam', 'Rusia', 'Jerman', 'twk-1', 'c', 'Monarchism is the advocacy of the system of monarchy or monarchical rule. A monarchist is an individual who supports this form of government independent of any specific monarch, whereas one who supports a particular monarch is a royalist. Conversely, the opposition to monarchical rule is referred to as republicanism.'),
(117, 'asdsafasfasfl/jl;g\"Ghs;\'zobu zor;\'buo\'', 'Amerika Serikat', 'Filipina', 'Brunei Darussalam', 'Rusia', 'Jerman', 'twk-1', 'c', 'Monarchism is the advocacy of the system of monarchy or monarchical rule. A monarchist is an individual who supports this form of government independent of any specific monarch, whereas one who supports a particular monarch is a royalist. Conversely, the opposition to monarchical rule is referred to as republicanism.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `status` varchar(5) NOT NULL,
  `aktivasi` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `password`, `no_telepon`, `provinsi`, `kota`, `tgl_lahir`, `pendidikan`, `jurusan`, `status`, `aktivasi`, `avatar`) VALUES
(24, 'hehe', 'hehe2@gmail.com', '2', '12312', NULL, NULL, NULL, '', '', '0', '8a5a40c1292720acb75a5b7750e6995da95e830e4b4aa0c45c867bb89ef82581f9bf730ed162db3c75905f22dea39ffc524cd03d70f709c74802e09455948289cADPLjXRxinGkv3PR7OoqRXdmgGs1QBo3i7iOhFGAnk=', 'https://ui-avatars.com/api/?name=hehe&background=00ADEF&color=fff'),
(25, 'hehe', 'hehe@gmail.com', '2', '213123', NULL, NULL, NULL, '', '', '1', '-', 'https://ui-avatars.com/api/?name=hehe&background=00ADEF&color=fff'),
(26, 'hehe', 'hehe3@gmail.com', '2', '12312312', NULL, NULL, NULL, '', '', '1', '-', 'https://ui-avatars.com/api/?name=hehe&background=00ADEF&color=fff'),
(41, 'hehe33', 'hehe4@gmail.com', '3', '213123', 'Jawa Timur', 'Malang', '2022-01-31', 'SMA', 'IPA', '1', '-', 'https://ui-avatars.com/api/?name=hehe33&background=00ADEF&color=fff'),
(43, 'heeh', 'sadas@gmail.com', '1', '123123', NULL, NULL, NULL, NULL, NULL, '0', 'b5ba6f7b998bbdf098babfe66b6c392f7eb874dd7ecc23121825d6e2fd5792bd46a2bb196d2175c4cd349554b9a29a26f99694039df745bd435ca88522056b98YEvgHWM9mdquMhPDiOu4ZLE7j0+DxdPwermdiH/LSts=', 'https://ui-avatars.com/api/?name=heeh&background=00ADEF&color=fff'),
(44, 'klqwlkqwh', 'asldksh@gmail.com', '1', '123123', NULL, NULL, NULL, NULL, NULL, '0', 'e662bea64e7eaebc8b2dbb3636fc4fc0140d96891a2d409c0b1189a098319b06079ab9bb7f068cb1f72dc97e2d6c05c3df28bd3daea58bacc2f331640789e68boHvLBG9Hcd4m6/Y+NKWwK+BF7vchoJ4I4ZGmzWVXiFQASd7dQq2/8lDBFW5vaN6+', 'https://ui-avatars.com/api/?name=klqwlkqwh&background=00ADEF&color=fff'),
(47, 'aku', 'aku@gmail.com', '1', '123456789', NULL, NULL, NULL, NULL, NULL, '1', '-', 'https://ui-avatars.com/api/?name=aku&background=00ADEF&color=fff'),
(51, 'dasdasd', 'daffarizkyaqilah@gmail.com', '1', '21312', NULL, NULL, NULL, NULL, NULL, '1', '-', 'https://ui-avatars.com/api/?name=dasdasd&background=00ADEF&color=fff');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `harga_paket_skd`
--
ALTER TABLE `harga_paket_skd`
  ADD PRIMARY KEY (`id_harga_paket_skd`);

--
-- Indeks untuk tabel `jawaban_user_TIU`
--
ALTER TABLE `jawaban_user_TIU`
  ADD PRIMARY KEY (`id_jawaban_TIU`);

--
-- Indeks untuk tabel `jawaban_user_TKP`
--
ALTER TABLE `jawaban_user_TKP`
  ADD PRIMARY KEY (`id_jawaban_TKP`);

--
-- Indeks untuk tabel `jawaban_user_TWK`
--
ALTER TABLE `jawaban_user_TWK`
  ADD PRIMARY KEY (`id_jawaban_TWK`);

--
-- Indeks untuk tabel `kategori_skd`
--
ALTER TABLE `kategori_skd`
  ADD PRIMARY KEY (`id_kategori_skd`);

--
-- Indeks untuk tabel `kategori_TIU`
--
ALTER TABLE `kategori_TIU`
  ADD PRIMARY KEY (`id_kategori_TIU`);

--
-- Indeks untuk tabel `kategori_TKP`
--
ALTER TABLE `kategori_TKP`
  ADD PRIMARY KEY (`id_kategori_TKP`);

--
-- Indeks untuk tabel `kategori_TWK`
--
ALTER TABLE `kategori_TWK`
  ADD PRIMARY KEY (`id_kategori_TWK`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indeks untuk tabel `paket_user`
--
ALTER TABLE `paket_user`
  ADD PRIMARY KEY (`id_paket_user`);

--
-- Indeks untuk tabel `TIU`
--
ALTER TABLE `TIU`
  ADD PRIMARY KEY (`id_soal_tiu`);

--
-- Indeks untuk tabel `TKP`
--
ALTER TABLE `TKP`
  ADD PRIMARY KEY (`id_soal_tkp`);

--
-- Indeks untuk tabel `TWK`
--
ALTER TABLE `TWK`
  ADD PRIMARY KEY (`id_soal_twk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `harga_paket_skd`
--
ALTER TABLE `harga_paket_skd`
  MODIFY `id_harga_paket_skd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jawaban_user_TIU`
--
ALTER TABLE `jawaban_user_TIU`
  MODIFY `id_jawaban_TIU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `jawaban_user_TKP`
--
ALTER TABLE `jawaban_user_TKP`
  MODIFY `id_jawaban_TKP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `jawaban_user_TWK`
--
ALTER TABLE `jawaban_user_TWK`
  MODIFY `id_jawaban_TWK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT untuk tabel `kategori_skd`
--
ALTER TABLE `kategori_skd`
  MODIFY `id_kategori_skd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori_TIU`
--
ALTER TABLE `kategori_TIU`
  MODIFY `id_kategori_TIU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kategori_TKP`
--
ALTER TABLE `kategori_TKP`
  MODIFY `id_kategori_TKP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kategori_TWK`
--
ALTER TABLE `kategori_TWK`
  MODIFY `id_kategori_TWK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `paket_user`
--
ALTER TABLE `paket_user`
  MODIFY `id_paket_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `TIU`
--
ALTER TABLE `TIU`
  MODIFY `id_soal_tiu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `TKP`
--
ALTER TABLE `TKP`
  MODIFY `id_soal_tkp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `TWK`
--
ALTER TABLE `TWK`
  MODIFY `id_soal_twk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
