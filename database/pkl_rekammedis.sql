-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2020 at 09:57 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkl_rekammedis`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_imunisasi`
--

CREATE TABLE `data_imunisasi` (
  `id` int(11) NOT NULL,
  `namakk` varchar(30) NOT NULL,
  `nokartu` varchar(25) NOT NULL,
  `namaP` varchar(30) NOT NULL,
  `jeniskel` varchar(25) NOT NULL,
  `umurP` varchar(25) NOT NULL,
  `alamatP` varchar(30) NOT NULL,
  `jenisk` text NOT NULL,
  `tggl` date NOT NULL,
  `jam` time(4) NOT NULL,
  `nama` text NOT NULL,
  `tggalhr` date NOT NULL,
  `umur` varchar(25) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `pekerjn` text NOT NULL,
  `keluhan` varchar(128) NOT NULL,
  `tnggi` int(25) NOT NULL,
  `berat` decimal(10,2) NOT NULL,
  `lper` decimal(10,2) NOT NULL,
  `imt` decimal(10,2) NOT NULL,
  `suhu` decimal(10,2) NOT NULL,
  `sistole` decimal(10,2) NOT NULL,
  `distole` decimal(10,2) NOT NULL,
  `rrt` decimal(10,2) NOT NULL,
  `hrt` decimal(10,2) NOT NULL,
  `hb` decimal(10,2) NOT NULL,
  `gdarah` decimal(10,2) NOT NULL,
  `pdarah` decimal(10,2) NOT NULL,
  `diagnosa` text NOT NULL,
  `pengo` varchar(128) NOT NULL,
  `konsl` varchar(128) NOT NULL,
  `rujuk` text NOT NULL,
  `tenagam` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_imunisasi`
--

INSERT INTO `data_imunisasi` (`id`, `namakk`, `nokartu`, `namaP`, `jeniskel`, `umurP`, `alamatP`, `jenisk`, `tggl`, `jam`, `nama`, `tggalhr`, `umur`, `alamat`, `pekerjn`, `keluhan`, `tnggi`, `berat`, `lper`, `imt`, `suhu`, `sistole`, `distole`, `rrt`, `hrt`, `hb`, `gdarah`, `pdarah`, `diagnosa`, `pengo`, `konsl`, `rujuk`, `tenagam`) VALUES
(2, 'Test', '976', 'bassi', 'perempuan', '32', '---', 'Baru', '2020-09-06', '12:30:00.0000', '', '0000-00-00', '', '', '', 'Kosong', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Diagnosa tidak di pilih', 'Kosong', 'Kosong', 'Tidak', 'Tenaga medis tidak di pilih');

-- --------------------------------------------------------

--
-- Table structure for table `data_kabe`
--

CREATE TABLE `data_kabe` (
  `id` int(255) NOT NULL,
  `namakk` varchar(30) NOT NULL,
  `nokartu` varchar(25) NOT NULL,
  `namaP` varchar(30) NOT NULL,
  `jeniskel` varchar(25) NOT NULL,
  `umurP` varchar(25) NOT NULL,
  `alamatP` varchar(30) NOT NULL,
  `jenisk` text NOT NULL,
  `tggl` date NOT NULL,
  `jam` int(4) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tggalhr` date NOT NULL,
  `umur` int(25) NOT NULL,
  `pendidikan` text NOT NULL,
  `pekerjn` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `nmsuami` text NOT NULL,
  `umsuami` varchar(25) NOT NULL,
  `pensuami` varchar(128) NOT NULL,
  `peksuami` int(128) NOT NULL,
  `jmlhank` int(25) NOT NULL,
  `haidt` date NOT NULL,
  `rwkb` text NOT NULL,
  `rwkb2` date NOT NULL,
  `keluhan` varchar(128) NOT NULL,
  `tnggi` int(12) NOT NULL,
  `berat` decimal(10,2) NOT NULL,
  `lper` decimal(10,2) NOT NULL,
  `imt` decimal(10,2) NOT NULL,
  `suhu` decimal(10,2) NOT NULL,
  `sistole` decimal(10,2) NOT NULL,
  `distole` decimal(10,2) NOT NULL,
  `rrt` decimal(10,2) NOT NULL,
  `hrt` decimal(10,2) NOT NULL,
  `hb` decimal(10,2) NOT NULL,
  `uralbu` decimal(10,2) NOT NULL,
  `urredu` decimal(10,2) NOT NULL,
  `diagnosa` text NOT NULL,
  `pengo` varchar(128) NOT NULL,
  `konsl` varchar(128) NOT NULL,
  `rujuk` text NOT NULL,
  `tenagam` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kabe`
--

INSERT INTO `data_kabe` (`id`, `namakk`, `nokartu`, `namaP`, `jeniskel`, `umurP`, `alamatP`, `jenisk`, `tggl`, `jam`, `nama`, `tggalhr`, `umur`, `pendidikan`, `pekerjn`, `alamat`, `nmsuami`, `umsuami`, `pensuami`, `peksuami`, `jmlhank`, `haidt`, `rwkb`, `rwkb2`, `keluhan`, `tnggi`, `berat`, `lper`, `imt`, `suhu`, `sistole`, `distole`, `rrt`, `hrt`, `hb`, `uralbu`, `urredu`, `diagnosa`, `pengo`, `konsl`, `rujuk`, `tenagam`) VALUES
(2, 'Test', '643', 'andi', 'laki_laki', '13', '---', 'Baru', '2020-09-06', 12, '', '0000-00-00', 0, '', '', '', '', '', '', 0, 0, '0000-00-00', 'Tidak', '0000-00-00', '', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Diagnosa tidak di pilih', '', '', 'Tidak', 'Tenaga medis tidak di pilih');

-- --------------------------------------------------------

--
-- Table structure for table `data_poli_anak`
--

CREATE TABLE `data_poli_anak` (
  `id` int(255) NOT NULL,
  `namakk` varchar(30) NOT NULL,
  `nokartu` varchar(25) NOT NULL,
  `namaP` varchar(30) NOT NULL,
  `jeniskel` varchar(25) NOT NULL,
  `umurP` varchar(25) NOT NULL,
  `alamatP` varchar(30) NOT NULL,
  `jenisk` text NOT NULL,
  `tggl` date NOT NULL,
  `jam` time(4) NOT NULL,
  `nama` text NOT NULL,
  `jenkel` text NOT NULL,
  `tggalhr` date NOT NULL,
  `umur` varchar(25) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `nmayh` text NOT NULL,
  `umayh` varchar(25) NOT NULL,
  `penayh` text NOT NULL,
  `pkayh` text NOT NULL,
  `nmibu` text NOT NULL,
  `umibu` varchar(25) NOT NULL,
  `penibu` text NOT NULL,
  `pkibu` text NOT NULL,
  `bbdn_a` int(8) NOT NULL,
  `prol` text NOT NULL,
  `letjan` text NOT NULL,
  `klahir` text NOT NULL,
  `konbay` text NOT NULL,
  `kesimpulanby` text NOT NULL,
  `bbdn_b` decimal(10,2) NOT NULL,
  `penap` decimal(10,2) NOT NULL,
  `konasi` text NOT NULL,
  `gejala` text NOT NULL,
  `kesimpulan` text NOT NULL,
  `bbdn_c` decimal(10,2) NOT NULL,
  `ketbb` text NOT NULL,
  `dimun` text NOT NULL,
  `pernap` decimal(10,2) NOT NULL,
  `gejalan` text NOT NULL,
  `makanbayi` text NOT NULL,
  `kesimpulanneo` text NOT NULL,
  `keluhan` varchar(128) NOT NULL,
  `berat` decimal(10,2) NOT NULL,
  `suhu` decimal(10,2) NOT NULL,
  `rrt` decimal(10,2) NOT NULL,
  `hrt` decimal(10,2) NOT NULL,
  `diagnosa` text NOT NULL,
  `pengo` varchar(256) NOT NULL,
  `konsl` varchar(256) NOT NULL,
  `rujuk` text NOT NULL,
  `tenagam` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_poli_anak`
--

INSERT INTO `data_poli_anak` (`id`, `namakk`, `nokartu`, `namaP`, `jeniskel`, `umurP`, `alamatP`, `jenisk`, `tggl`, `jam`, `nama`, `jenkel`, `tggalhr`, `umur`, `alamat`, `nmayh`, `umayh`, `penayh`, `pkayh`, `nmibu`, `umibu`, `penibu`, `pkibu`, `bbdn_a`, `prol`, `letjan`, `klahir`, `konbay`, `kesimpulanby`, `bbdn_b`, `penap`, `konasi`, `gejala`, `kesimpulan`, `bbdn_c`, `ketbb`, `dimun`, `pernap`, `gejalan`, `makanbayi`, `kesimpulanneo`, `keluhan`, `berat`, `suhu`, `rrt`, `hrt`, `diagnosa`, `pengo`, `konsl`, `rujuk`, `tenagam`) VALUES
(5, 'Jhon Doe', '000011', 'Dibala', 'Laki-Laki', '7', 'Padang Lua', 'Baru', '2020-09-06', '07:56:42.8970', '', '', '2000-09-10', '22', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '0.00', '0.00', '', '', '', '0.00', '', '', '0.00', '', '', '', 'kosong', '0.00', '0.00', '0.00', '0.00', 'Sehat', 'Kosong', 'Kosong', 'Tidak', 'Dokter'),
(7, 'Andri', '0100100', 'Billiy', 'perempuan', '', '', 'Baru', '2021-01-13', '01:57:00.0000', '', '--', '0000-00-00', '20', 'Padang Luar', '', '', '', '', '', '', '', '', 0, '--', '--', '--', '--', '--', '0.00', '0.00', '--', '--', '--', '0.00', '--', '--', '0.00', '--', '--', '--', '', '0.00', '0.00', '0.00', '0.00', 'Diagnosa tidak di pilih', '', '', 'Tidak', 'Tenaga Medis Tidak Dipilih '),
(8, 'Andri', '0100100', 'Billiy', 'perempuan', '', '', 'Baru', '2020-11-14', '11:15:00.0000', '', '--', '0000-00-00', '20', 'Padang Luar', '', '', '', '', '', '', '', '', 0, '--', '--', '--', '--', '--', '0.00', '0.00', '--', '--', '--', '0.00', '--', '--', '0.00', '--', '--', '--', '', '0.00', '0.00', '0.00', '0.00', 'Diagnosa tidak di pilih', '', '', 'Tidak', 'Tenaga Medis Tidak Dipilih ');

-- --------------------------------------------------------

--
-- Table structure for table `data_poli_gigi`
--

CREATE TABLE `data_poli_gigi` (
  `id` int(255) NOT NULL,
  `namakk` varchar(30) NOT NULL,
  `nokartu` varchar(25) NOT NULL,
  `namaP` varchar(30) NOT NULL,
  `jeniskel` varchar(25) NOT NULL,
  `umur` varchar(25) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `jenisk` text NOT NULL,
  `tggl` date NOT NULL,
  `jam` time(4) NOT NULL,
  `keluhan` text NOT NULL,
  `tnggi` int(25) NOT NULL,
  `berat` decimal(10,2) NOT NULL,
  `lper` decimal(25,0) NOT NULL,
  `imt` decimal(10,2) NOT NULL,
  `suhu` decimal(10,2) NOT NULL,
  `sistole` decimal(10,2) NOT NULL,
  `distole` decimal(10,2) NOT NULL,
  `rrt` decimal(10,2) NOT NULL,
  `hrt` decimal(10,2) NOT NULL,
  `hb` decimal(10,2) NOT NULL,
  `gdarah` decimal(10,2) NOT NULL,
  `pdarah` decimal(10,2) NOT NULL,
  `diagnosa` text NOT NULL,
  `pengo` varchar(128) NOT NULL,
  `konsl` varchar(128) NOT NULL,
  `rujuk` text NOT NULL,
  `tenagam` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_poli_gigi`
--

INSERT INTO `data_poli_gigi` (`id`, `namakk`, `nokartu`, `namaP`, `jeniskel`, `umur`, `alamat`, `jenisk`, `tggl`, `jam`, `keluhan`, `tnggi`, `berat`, `lper`, `imt`, `suhu`, `sistole`, `distole`, `rrt`, `hrt`, `hb`, `gdarah`, `pdarah`, `diagnosa`, `pengo`, `konsl`, `rujuk`, `tenagam`) VALUES
(3, 'Test', '9754454', 'weri', 'Laki-Laki', '12', '---', 'Baru', '2020-09-12', '12:39:00.0000', 'Coba', 170, '90.00', '99', '26.47', '75.00', '120.00', '70.00', '180.00', '123.00', '12.00', '12.00', '12.00', 'Sehat', 'Kosong', 'Kosong', 'Tidak', 'Yulia Safitri Amd.Keb S.Ter Keb');

-- --------------------------------------------------------

--
-- Table structure for table `data_poli_ibu`
--

CREATE TABLE `data_poli_ibu` (
  `id` int(255) NOT NULL,
  `namakk` varchar(30) NOT NULL,
  `nokartu` varchar(25) NOT NULL,
  `namaP` varchar(30) NOT NULL,
  `jeniskel` varchar(25) NOT NULL,
  `umur` varchar(25) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `jenisk` text NOT NULL,
  `tggl` date NOT NULL,
  `jam` time(6) NOT NULL,
  `namaib` text NOT NULL,
  `umurib` varchar(10) NOT NULL,
  `alamatib` text NOT NULL,
  `kerjib` text NOT NULL,
  `namas` text NOT NULL,
  `umurs` varchar(10) NOT NULL,
  `kerjs` text NOT NULL,
  `g` int(2) NOT NULL,
  `p` int(2) NOT NULL,
  `a` int(2) NOT NULL,
  `haid` date NOT NULL,
  `partus` date NOT NULL,
  `keluhan` varchar(128) NOT NULL,
  `tinggi` int(3) NOT NULL,
  `berat` int(3) NOT NULL,
  `lper` int(3) NOT NULL,
  `imt` decimal(10,2) NOT NULL,
  `suhu` decimal(10,2) NOT NULL,
  `sistole` int(4) NOT NULL,
  `distole` int(4) NOT NULL,
  `rrt` decimal(10,2) NOT NULL,
  `hrt` decimal(10,2) NOT NULL,
  `tdf` text NOT NULL,
  `butrs` text NOT NULL,
  `djk` decimal(10,2) NOT NULL,
  `letakj` text NOT NULL,
  `pdai` text NOT NULL,
  `gerj` text NOT NULL,
  `insp` text NOT NULL,
  `hb` decimal(10,2) NOT NULL,
  `uralbu` decimal(10,2) NOT NULL,
  `urredu` decimal(10,2) NOT NULL,
  `diagnosa` text NOT NULL,
  `pengo` varchar(256) NOT NULL,
  `kosnl` text NOT NULL,
  `rujuk` text NOT NULL,
  `tenagam` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_poli_ibu`
--

INSERT INTO `data_poli_ibu` (`id`, `namakk`, `nokartu`, `namaP`, `jeniskel`, `umur`, `alamat`, `jenisk`, `tggl`, `jam`, `namaib`, `umurib`, `alamatib`, `kerjib`, `namas`, `umurs`, `kerjs`, `g`, `p`, `a`, `haid`, `partus`, `keluhan`, `tinggi`, `berat`, `lper`, `imt`, `suhu`, `sistole`, `distole`, `rrt`, `hrt`, `tdf`, `butrs`, `djk`, `letakj`, `pdai`, `gerj`, `insp`, `hb`, `uralbu`, `urredu`, `diagnosa`, `pengo`, `kosnl`, `rujuk`, `tenagam`) VALUES
(7, 'selamat', '0985', 'andi', 'laki_laki', '13', 'Padang lua', 'Baru', '2020-11-16', '02:34:00.000000', 'andi', '13', 'Padang lua', 'qwqw', 'qwqw', '23', 'wewe', 0, 0, 0, '0000-00-00', '0000-00-00', '', 0, 0, 0, '0.00', '0.00', 0, 0, '0.00', '0.00', '--', '--', '0.00', '--', '--', '--', '--', '0.00', '0.00', '0.00', 'Diagnosa tidak di pilih', '', '', 'Tidak', 'Tenaga medis tidak di pilih');

-- --------------------------------------------------------

--
-- Table structure for table `data_poli_umum`
--

CREATE TABLE `data_poli_umum` (
  `id_pu` int(255) NOT NULL,
  `namakk` varchar(25) NOT NULL,
  `nokartu` varchar(25) NOT NULL,
  `namaP` varchar(50) NOT NULL,
  `jeniskel` varchar(25) NOT NULL,
  `umur` varchar(25) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `jenis_kunjungan` text NOT NULL,
  `tanggal_pu` date NOT NULL,
  `jam_pu` time(4) NOT NULL,
  `keluhan_pu` varchar(256) NOT NULL,
  `tinggi_pu` int(3) NOT NULL,
  `berat_pu` int(3) NOT NULL,
  `lebar_pu` int(3) NOT NULL,
  `imt_pu` decimal(10,2) NOT NULL,
  `suhu_pu` decimal(10,2) NOT NULL,
  `sistole_pu` int(4) NOT NULL,
  `distole_pu` int(4) NOT NULL,
  `rrt_pu` decimal(10,2) NOT NULL,
  `hrt_pu` decimal(10,2) NOT NULL,
  `hb_pu` decimal(10,2) NOT NULL,
  `gdarah_pu` decimal(10,2) NOT NULL,
  `pdarah_pu` decimal(10,2) NOT NULL,
  `diagnosa_pu` text NOT NULL,
  `pengobatan_pu` varchar(256) NOT NULL,
  `konsl_pu` varchar(256) NOT NULL,
  `rujuk_pu` text NOT NULL,
  `petugas_pu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_poli_umum`
--

INSERT INTO `data_poli_umum` (`id_pu`, `namakk`, `nokartu`, `namaP`, `jeniskel`, `umur`, `alamat`, `jenis_kunjungan`, `tanggal_pu`, `jam_pu`, `keluhan_pu`, `tinggi_pu`, `berat_pu`, `lebar_pu`, `imt_pu`, `suhu_pu`, `sistole_pu`, `distole_pu`, `rrt_pu`, `hrt_pu`, `hb_pu`, `gdarah_pu`, `pdarah_pu`, `diagnosa_pu`, `pengobatan_pu`, `konsl_pu`, `rujuk_pu`, `petugas_pu`) VALUES
(23, 'Adil Brian', '000012', 'Viona', 'Perempuan', '22', 'Padang Lua', 'Lama', '2020-09-09', '09:24:04.0000', 'Sesak Napas , Tenggorokan Berdahak', 180, 71, 40, '28.00', '39.00', 180, 70, '12.10', '20.10', '15.60', '12.10', '12.20', 'Diare', 'Pemberian Antibiotik', 'Tidak Ada', 'Tidak', 'Dokter'),
(24, 'Ghoni Abas', '000021', 'Rianty', 'Perempuan', '27', 'Padang Lua', 'Baru', '2020-09-09', '09:24:04.0000', 'Sesak Napas , Tenggorokan Berdahak', 180, 71, 40, '28.00', '39.00', 180, 70, '12.10', '20.10', '15.60', '12.10', '12.20', 'Batuk', 'Pemberian Paracetamol', 'Tidak Ada', 'Tidak', 'Dokter');

-- --------------------------------------------------------

--
-- Table structure for table `tb_diagnosa`
--

CREATE TABLE `tb_diagnosa` (
  `id` int(12) NOT NULL,
  `kode` varchar(8) NOT NULL,
  `jenis_penyakit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_diagnosa`
--

INSERT INTO `tb_diagnosa` (`id`, `kode`, `jenis_penyakit`) VALUES
(1, 'A00-A09', 'Penyakit Infeksi Usus\r\n'),
(2, 'A00-A09', ' Kholera\r\n'),
(3, 'A01.0', 'Demam Tifoid'),
(6, 'A33', 'Tetanus');

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id` int(5) NOT NULL,
  `nik` int(20) NOT NULL,
  `nama_petugas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`id`, `nik`, `nama_petugas`) VALUES
(4, 1234, 'Dr.Cahyono'),
(5, 9876, 'Dr.Susanti');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Admin Developer', 'admin@dev.com', 'default.jpg', '$2y$10$pZMdAjhlyrfU/rsdOV.YZ.bFHvYsOjOESRiwTKTqCrq1eckt3wYzG', 1, 1, 0),
(2, 'Chairul Hamid', 'chairulhamid01@gmail.com', 'IMG_20200517_115541_338.jpg', '$2y$10$gVHoCp6ENH.SQa9Mldcru.2m6MKNb2IajqC0JYTwK26UZuHfRBvPG', 1, 1, 1595482971),
(5, 'Admin Puskesmas', 'admin@puskesmas.com', 'default.jpg', '$2y$10$q/76RdY2pkY5vHVyhsFzEOSx.NmYH0KVwJa.ELUrj/VoTfKoUDjqC', 2, 1, 1600092475),
(6, 'Petugas Puskesmas', 'petugas@puskesmas.com', 'default.jpg', '$2y$10$jp1Tz159Sfe7XRqUbczewuCvsl642axL/nluhFM9LYReXHtAAdC.e', 3, 1, 1600092740),
(7, 'Petugas 2 Puskesmas', 'petugas2@puskesmas.com', 'default.jpg', '$2y$10$NidmhiDm1m7nJqpt6yJvUe3T1PNZx3tMdiJMjAQhJ4CnC78rKJg2a', 3, 1, 1600092938),
(8, 'Syauqi', 'mhfdsyauqi@gmail.com', 'default.jpg', '$2y$10$RTm67tePSCprwziucrAI9eqmAk1UbwrOVicfOQFHS47aOtiX6vsCe', 1, 1, 1600094586);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 4),
(3, 2, 4),
(4, 2, 7),
(5, 1, 2),
(6, 2, 3),
(7, 1, 7),
(9, 1, 10),
(10, 2, 10),
(11, 3, 3),
(12, 3, 4),
(13, 3, 7),
(14, 3, 10),
(15, 1, 3),
(16, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Menu'),
(3, 'Welcome'),
(4, 'User'),
(7, 'Entry'),
(10, 'RekamMedis');

-- --------------------------------------------------------

--
-- Table structure for table `user_pasien`
--

CREATE TABLE `user_pasien` (
  `id` int(11) NOT NULL,
  `no_kartu` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `umur` varchar(128) NOT NULL,
  `j_kelamin` varchar(128) NOT NULL,
  `nama_kk` varchar(128) NOT NULL,
  `no_hp` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_pasien`
--

INSERT INTO `user_pasien` (`id`, `no_kartu`, `status`, `nama`, `tgl_lahir`, `umur`, `j_kelamin`, `nama_kk`, `no_hp`, `alamat`) VALUES
(1, '0100100', 'Umum', 'Billiy', '2020-09-10', '20', 'perempuan', 'Andri', '086235456863', 'Padang Luar'),
(2, '0985', 'Umum', 'andi', '2007-02-05', '13', 'laki_laki', 'selamat', '0852437647800', 'Padang lua'),
(3, '333', 'BPJS', 'bubu', '2020-11-17', '20', 'laki_laki', 'wed', '0852437647800', 'Padang lua');

-- --------------------------------------------------------

--
-- Table structure for table `user_pendaftaran`
--

CREATE TABLE `user_pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_kk` varchar(128) NOT NULL,
  `no_kartu` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL,
  `tgl_lahir` varchar(128) NOT NULL,
  `umur` varchar(128) NOT NULL,
  `j_kelamin` varchar(128) NOT NULL,
  `keluhan` varchar(200) NOT NULL,
  `tindakan` varchar(128) NOT NULL,
  `poli_tj` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_pendaftaran`
--

INSERT INTO `user_pendaftaran` (`id_pendaftaran`, `tanggal`, `nama_kk`, `no_kartu`, `nama`, `alamat`, `status`, `tgl_lahir`, `umur`, `j_kelamin`, `keluhan`, `tindakan`, `poli_tj`) VALUES
(25, '2020-11-16', 'Andri', '0100100', 'Billiy', 'Padang Luar', 'Umum', '2020-09-10', '20', 'perempuan', 'Demam', 'Selesai', 'Poli Umum'),
(26, '2020-11-16', 'selamat', '0985', 'andi', 'Padang lua', 'Umum', '2007-02-05', '13', 'laki_laki', 'sakit gigi', 'Mengantri', 'Poli Gigi'),
(27, '2020-11-16', 'selamat', '0985', 'andi', 'Padang lua', 'Umum', '2007-02-05', '13', 'laki_laki', 'u', 'Selesai', 'Poli Ibu'),
(28, '2020-11-16', 'wed', '333', 'bubu', 'Padang lua', 'BPJS', '2020-11-17', '20', 'laki_laki', 'qwe', 'Mengantri', 'Poli Umum');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Admin Puskesmas'),
(3, 'Petugas Puskesmas');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(2, 4, 'My Profile', 'User', 'fa fa-fw fa-users', 1),
(3, 4, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 2, 'Menu Manajemen', 'menu', 'fas fa-fw fa-folder', 1),
(5, 2, 'Submenu Manajemen', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(10, 1, 'Hak Akses & Akun', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(12, 4, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(14, 7, 'Pemeriksaan Poli Umum', 'Entry', 'fas fa-pencil-alt', 1),
(15, 7, 'Pemeriksaan Poli Ibu', 'entry/vpoliibu', 'fas fa-pencil-alt', 1),
(16, 7, 'Pemeriksaan Poli Anak', 'entry/vpolianak', 'fas fa-pencil-alt', 1),
(17, 7, 'Pemeriksaan Poli Gigi', 'entry/vpoligigi', 'fas fa-pencil-alt', 1),
(18, 7, 'Imunisasi', 'entry/vimunisasi', 'fas fa-pencil-alt', 1),
(19, 7, 'Pelayanan KB', 'entry/vkabe', 'fas fa-pencil-alt', 1),
(20, 3, 'Beranda', 'Welcome', 'fas fa-fw fa-home', 1),
(22, 10, 'Pendaftaran Baru', 'Rekammedis', 'fas fa-fw fa-user', 1),
(23, 10, 'Kunjungan Ulang', 'rekammedis/datapendaftaran', 'fas fa-fw fa-user', 1),
(24, 1, 'Data Petugas Puskesmas', 'admin/data-petugas', 'fas fa-fw fa-user-tie', 1),
(25, 1, 'Data Diagnosa', 'admin/data-diagnosa', 'fas fa-fw fa-user-tie', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_imunisasi`
--
ALTER TABLE `data_imunisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kabe`
--
ALTER TABLE `data_kabe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_poli_anak`
--
ALTER TABLE `data_poli_anak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_poli_gigi`
--
ALTER TABLE `data_poli_gigi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_poli_ibu`
--
ALTER TABLE `data_poli_ibu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_poli_umum`
--
ALTER TABLE `data_poli_umum`
  ADD PRIMARY KEY (`id_pu`);

--
-- Indexes for table `tb_diagnosa`
--
ALTER TABLE `tb_diagnosa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_pasien`
--
ALTER TABLE `user_pasien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_kartu` (`no_kartu`);

--
-- Indexes for table `user_pendaftaran`
--
ALTER TABLE `user_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_imunisasi`
--
ALTER TABLE `data_imunisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_kabe`
--
ALTER TABLE `data_kabe`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_poli_anak`
--
ALTER TABLE `data_poli_anak`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data_poli_gigi`
--
ALTER TABLE `data_poli_gigi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_poli_ibu`
--
ALTER TABLE `data_poli_ibu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `data_poli_umum`
--
ALTER TABLE `data_poli_umum`
  MODIFY `id_pu` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tb_diagnosa`
--
ALTER TABLE `tb_diagnosa`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_pasien`
--
ALTER TABLE `user_pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_pendaftaran`
--
ALTER TABLE `user_pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
