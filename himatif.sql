-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2021 at 05:22 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `himatif`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `nim` varchar(250) DEFAULT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `username` char(50) CHARACTER SET latin1 DEFAULT NULL,
  `sebagai` varchar(50) DEFAULT NULL,
  `password` char(50) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `nim`, `nama`, `username`, `sebagai`, `password`, `email`) VALUES
(1, '1', 'admin', 'admin', '1', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com'),
(12, '', '', 'user', '2', 'user', NULL),
(13, '', '', 'afandi', '2', '38b7905ac6984bd42123b063d9ac95e0', NULL),
(15, '', '', 'user', '2', 'ee11cbb19052e40b07aac0ca060c23ee', NULL),
(16, '', 'f', '', '2', 'fg', ''),
(17, '', 'f', '', '2', 'fg', ''),
(18, '3434', '3434', '343', '2', '3434', '3434'),
(19, '3434', '3434', '343', '2', '3434', '3434'),
(20, 'sa', 'sa', 'dqw', '2', 'asas', 'sadas'),
(21, 'sa', 'sa', 'dqw', '2', 'asas', 'sadas'),
(22, 'sa', 'sa', 'dqw', '2', 'asas', 'sadas'),
(23, '1903020', 'M.agus afandi', 'afandi', '2', '797701d20f53a3e656902ddb9d93b777', 'agus_afandi44@yahoo.com'),
(24, '1903020', 'M.agus afandi', 'afandi', '2', '797701d20f53a3e656902ddb9d93b777', 'agus_afandi44@yahoo.com'),
(25, '1903020', 'mahsaaj', 'afandi', '2', 'dsadsa', 'aas@asdasd.com'),
(26, '1903020', 'M.agus afandi', 'afandi', '2', 'a8f5f167f44f4964e6c998dee827110c', 'agusafandi44@yahoo.com'),
(27, '190321asdad', 'asdsadsad', 'dsadoi', '2', '833344d5e1432da82ef02e1301477ce8', 'isadodaoisd'),
(28, '1', '1', '1', '2', 'c4ca4238a0b923820dcc509a6f75849b', 'sa@gmail.com'),
(29, '1', '3434', 'admin', '2', '0cc175b9c0f1b6a831c399e269772661', 'dad@gmail.com'),
(30, '1', '1903020', 'admin', '2', 'aced3598a34a561715dacfe32a328c1c', 's@gmail.com'),
(31, '1', '1903020', 'admin', '2', 'aced3598a34a561715dacfe32a328c1c', 's@gmail.com'),
(32, '1', '1903020', 'admin', '2', 'aced3598a34a561715dacfe32a328c1c', 's@gmail.com'),
(33, '1', '1903020', 'admin', '2', 'aced3598a34a561715dacfe32a328c1c', 's@gmail.com'),
(34, '1', '12321321', 'admin', '2', '797701d20f53a3e656902ddb9d93b777', 'agus_afandi44@yahoo.com'),
(35, '1903001', 'Adhitya Dwi Utowo', 'adhit', '2', '27ab207e408e3551c0f1783b9a611bf8', 'adhitutami@utami.com'),
(36, '1903002', 'Afiffififi', 'afif', '2', 'b56776aa98086825550ff0c3fe260907', 'afifffiif@fif.com'),
(37, '13243241', 'SADSZF', 'AE', '2', 'dce18885278143ff65066c60fd58cdb2', '2DA@AWE.C'),
(38, '1903028', 'Sakti Pangestu', 'sakti', '2', 'd77575cc735cf44edc38086c8df4e033', 'sakti@sakti.com'),
(39, '111', 'M.agus afandi', '9', '2', '698d51a19d8a121ce581499d7b701668', 'adhitutami@utami.com'),
(40, '19030', 'wkopkjldaknasd', 'a', '2', '0cc175b9c0f1b6a831c399e269772661', 'admin@admin.ssa'),
(41, 'sdeswf', 'wsfdfdsdsfsfdfds', 'wdefsohfoies-0`dsvds', '2', 'ee2bf7b4047cf13dfa19269ecf978dec', 'asadsad@sjdao.casaa'),
(42, '1903021', 'Adhitya Ilham Utoyo', 'adhityaiu', '2', '202cb962ac59075b964b07152d234b70', 'adhityailhamutoyo@gmail.com'),
(43, '1903013', 'Idang Hospita Anugerah', 'idang', '2', 'cb77a2496ae4218ce5aa27c3b3867ea4', 'idang@gmail.com'),
(44, '1903022', 'syaifudin', 'syai', '2', '202cb962ac59075b964b07152d234b70', 'syai@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(10) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username_admin`, `password`, `gambar`) VALUES
(1, 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin.jpg'),
(2, 'admin2', 'admin2', '315f166c5aca63a157f7d41007675cb44a948b33', 'admin2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_aspirasi`
--

CREATE TABLE `tb_aspirasi` (
  `id` int(10) NOT NULL,
  `Nama` varchar(40) DEFAULT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Subjek` varchar(40) DEFAULT NULL,
  `Isi` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_aspirasi`
--

INSERT INTO `tb_aspirasi` (`id`, `Nama`, `Email`, `Subjek`, `Isi`) VALUES
(4, 'Adhitya IU', 'adhityailhamutoyo@gmail.com', 'tes', 'Bismillah bisa'),
(7, 'Afandi', 'nganjukagus@gmail.com', 'Aspirasii saya', 'ini aspirasi, saran, dan kritik saya'),
(9, 'adhitya', 'adhityailhamu@gmail.com', 'aspirasi', 'saran dan kritik saya adalah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id` int(10) NOT NULL,
  `namabarang` varchar(50) DEFAULT NULL,
  `jumlah` int(10) DEFAULT NULL,
  `kondisi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id`, `namabarang`, `jumlah`, `kondisi`) VALUES
(18, 'pulpen', 21, 'Aman'),
(20, 'spidol', 6, 'Aman'),
(21, 'Kertas HVS', 2000, 'Aman'),
(23, 'meja', 1, 'Bersih');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengurus`
--

CREATE TABLE `tb_pengurus` (
  `id_pengurus` int(11) NOT NULL,
  `nim` char(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengurus`
--

INSERT INTO `tb_pengurus` (`id_pengurus`, `nim`, `nama`, `jabatan`, `status`, `kelas`) VALUES
(0, '1903001', 'Adhitya Ilham Utoyo', 'Ketua Himpunan', 'Pengurus', 'D3TI2A'),
(27, '1903020', 'M. Agus Afandi', 'SubDivisi Kompetisi', 'Pengurus', 'D3TI2A'),
(28, '1903013', 'Idang Hospita Anugerah', 'SubDivisi Kaderisasi', 'Pengurus', 'D3TI2A'),
(29, '1903017', 'Liana Rachmawati', 'Anggota', 'Anggota Aktif', 'D3TI2A');

-- --------------------------------------------------------

--
-- Table structure for table `tb_upload`
--

CREATE TABLE `tb_upload` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `Tanggal` date NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `gambar` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_upload`
--

INSERT INTO `tb_upload` (`id`, `judul`, `Tanggal`, `keterangan`, `gambar`) VALUES
(1, 'WEBINAR TEKNOLOGI', '2020-11-14', 'Mari Menambah Wawasan diri di Era Teknologi dan dimasa Pandemi ini, dengan mengikuti acara Webinar Teknologi yang mengusung tema <b>\"IT Business Idea During Pandemic era\"</b>', 'webinar.jpg'),
(2, 'WISUDA', '2020-10-31', 'Selamat dan sukses untuk Wisudawan/Wisudawati X              D3 Teknik Informatika Politeknik Negeri Indramayu ✨    ', 'syukuran.jpg'),
(3, 'LKMM PD 2020', '2020-10-24', 'Latihan Keterampilan Manajemen Mahasiswa - Pra Dasar // ONLINE || Tema : \"Membangun Karakter Mahasiswa Aktif, Percaya Diri dan Bertanggung Jawab\"', 'lkmmpd.jpg'),
(4, 'PENGGALANGAN DANA', '2020-09-28', 'Penggalangan Dana ini bertujuan untuk membantu masyarakat Cicurug Sukabumi yang mengalami bencana Banjir Bandang', 'GD1.jpg'),
(5, 'PKJTI', '2020-08-22', 'Pengenalan Kehidupan Jurusan Teknik Informatika', 'PKJTI.jpg'),
(6, 'SERTIJAB', '2020-08-24', 'Serah Terima Kepengurusan HIMATIF periode 2020/2021', 'SERTIJAB.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username_admin` (`username_admin`);

--
-- Indexes for table `tb_aspirasi`
--
ALTER TABLE `tb_aspirasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengurus`
--
ALTER TABLE `tb_pengurus`
  ADD PRIMARY KEY (`id_pengurus`);

--
-- Indexes for table `tb_upload`
--
ALTER TABLE `tb_upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_aspirasi`
--
ALTER TABLE `tb_aspirasi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_pengurus`
--
ALTER TABLE `tb_pengurus`
  MODIFY `id_pengurus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tb_upload`
--
ALTER TABLE `tb_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
