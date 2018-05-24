-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Bulan Mei 2018 pada 06.31
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puskesmassragi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailobat`
--

CREATE TABLE `detailobat` (
  `Kode_Obat` varchar(15) NOT NULL,
  `No_Periksa` varchar(10) NOT NULL,
  `Kode_Detailobat` varchar(10) NOT NULL,
  `Jumlah_Obat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailpenyakit`
--

CREATE TABLE `detailpenyakit` (
  `Kode_Penyakit` varchar(10) NOT NULL,
  `No_Periksa` varchar(10) NOT NULL,
  `Kode_Detailpenyakit` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `Id_Dokter` varchar(5) NOT NULL,
  `Nama_Dokter` varchar(25) NOT NULL,
  `Jenis_Kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Alamat` text NOT NULL,
  `Agama` varchar(8) NOT NULL,
  `No_Telpon` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`Id_Dokter`, `Nama_Dokter`, `Jenis_Kelamin`, `Tanggal_Lahir`, `Alamat`, `Agama`, `No_Telpon`) VALUES
('1', 'lg', 'Laki-laki', '0000-00-00', 'qwr', 'islam', '9898');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `Kode_Kamar` varchar(5) NOT NULL,
  `Nama_Kamar` varchar(15) NOT NULL,
  `Harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`Kode_Kamar`, `Nama_Kamar`, `Harga`) VALUES
('KM01', 'f', 0),
('KM02', 'fa', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `Kode_Obat` varchar(15) NOT NULL,
  `Nama_Obat` varchar(15) NOT NULL,
  `Dosis` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `No_RM` varchar(10) NOT NULL,
  `Jenis_Pasien` varchar(20) NOT NULL,
  `Nama_Pasien` varchar(25) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Jenis_Kelamin` enum('laki-laki','perempuan') NOT NULL,
  `Pekerjaan` varchar(10) NOT NULL,
  `Alamat` text NOT NULL,
  `Penanggung_Jawab` varchar(25) NOT NULL,
  `No_Telpon` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `Kode_Penyakit` varchar(10) NOT NULL,
  `Nama_Penyakit` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `periksa`
--

CREATE TABLE `periksa` (
  `No_Periksa` varchar(10) NOT NULL,
  `No_Daftar` varchar(10) NOT NULL,
  `Tanggal_Periksa` date NOT NULL,
  `Jam_Periksa` varchar(7) NOT NULL,
  `Keluhan` varchar(15) NOT NULL,
  `Terapi` varchar(15) NOT NULL,
  `Diagnosa` text NOT NULL,
  `Kesadaran` varchar(15) NOT NULL,
  `Tinggi_Badan` varchar(8) NOT NULL,
  `Berat_Badan` varchar(8) NOT NULL,
  `Tekanan_Darah` varchar(8) NOT NULL,
  `Tindakan` text NOT NULL,
  `Kode_Penyakit` varchar(10) NOT NULL,
  `Kode_Obat` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rawatinap`
--

CREATE TABLE `rawatinap` (
  `No_RM` varchar(10) NOT NULL,
  `No_Daftar` varchar(10) NOT NULL,
  `Tanggal_Daftar` date NOT NULL,
  `Tanggal_Keluar` date NOT NULL,
  `Kode_Kamar` varchar(5) NOT NULL,
  `Id_Dokter` varchar(5) NOT NULL,
  `Status_Pasien` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `Username` varchar(10) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`Username`, `Password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3'),
('eko', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detailobat`
--
ALTER TABLE `detailobat`
  ADD PRIMARY KEY (`Kode_Detailobat`),
  ADD KEY `Kode_Obat` (`Kode_Obat`);

--
-- Indeks untuk tabel `detailpenyakit`
--
ALTER TABLE `detailpenyakit`
  ADD PRIMARY KEY (`Kode_Detailpenyakit`),
  ADD KEY `Kode_Penyakit` (`Kode_Penyakit`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`Id_Dokter`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`Kode_Kamar`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`Kode_Obat`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`No_RM`);

--
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`Kode_Penyakit`);

--
-- Indeks untuk tabel `periksa`
--
ALTER TABLE `periksa`
  ADD PRIMARY KEY (`No_Periksa`),
  ADD KEY `No_Daftar` (`No_Daftar`),
  ADD KEY `Kode_Penyakit` (`Kode_Penyakit`),
  ADD KEY `Kode_Obat` (`Kode_Obat`);

--
-- Indeks untuk tabel `rawatinap`
--
ALTER TABLE `rawatinap`
  ADD PRIMARY KEY (`No_Daftar`),
  ADD KEY `Kode_Kamar` (`Kode_Kamar`),
  ADD KEY `Id_Dokter` (`Id_Dokter`),
  ADD KEY `No_RM` (`No_RM`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detailobat`
--
ALTER TABLE `detailobat`
  ADD CONSTRAINT `detailobat_ibfk_1` FOREIGN KEY (`Kode_Obat`) REFERENCES `obat` (`Kode_Obat`);

--
-- Ketidakleluasaan untuk tabel `detailpenyakit`
--
ALTER TABLE `detailpenyakit`
  ADD CONSTRAINT `detailpenyakit_ibfk_1` FOREIGN KEY (`Kode_Penyakit`) REFERENCES `penyakit` (`Kode_Penyakit`);

--
-- Ketidakleluasaan untuk tabel `periksa`
--
ALTER TABLE `periksa`
  ADD CONSTRAINT `periksa_ibfk_1` FOREIGN KEY (`No_Daftar`) REFERENCES `rawatinap` (`No_Daftar`),
  ADD CONSTRAINT `periksa_ibfk_2` FOREIGN KEY (`Kode_Penyakit`) REFERENCES `penyakit` (`Kode_Penyakit`),
  ADD CONSTRAINT `periksa_ibfk_3` FOREIGN KEY (`Kode_Obat`) REFERENCES `obat` (`Kode_Obat`);

--
-- Ketidakleluasaan untuk tabel `rawatinap`
--
ALTER TABLE `rawatinap`
  ADD CONSTRAINT `rawatinap_ibfk_1` FOREIGN KEY (`Kode_Kamar`) REFERENCES `kamar` (`Kode_Kamar`),
  ADD CONSTRAINT `rawatinap_ibfk_2` FOREIGN KEY (`Id_Dokter`) REFERENCES `dokter` (`Id_Dokter`),
  ADD CONSTRAINT `rawatinap_ibfk_3` FOREIGN KEY (`No_RM`) REFERENCES `pasien` (`No_RM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
