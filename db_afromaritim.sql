-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Feb 2023 pada 10.12
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_afromaritim`
--
CREATE DATABASE IF NOT EXISTS `db_afromaritim` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_afromaritim`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_jabatan`
--

DROP TABLE IF EXISTS `master_jabatan`;
CREATE TABLE `master_jabatan` (
  `id_jabatan` varchar(255) NOT NULL,
  `nama_jabatan` varchar(255) NOT NULL,
  `status_jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_tcabang`
--

DROP TABLE IF EXISTS `master_tcabang`;
CREATE TABLE `master_tcabang` (
  `id_cabang` varchar(255) NOT NULL,
  `nama_cabang` varchar(255) NOT NULL,
  `jum_cabang` varchar(255) NOT NULL,
  `alamat_cabang` varchar(255) NOT NULL,
  `provinsi_cabang` varchar(255) NOT NULL,
  `kota_cabang` varchar(255) NOT NULL,
  `kecamatan_cabang` varchar(255) NOT NULL,
  `kelurahan_cabang` varchar(255) NOT NULL,
  `kodepos_cabang` varchar(255) NOT NULL,
  `telpon_cabang` varchar(255) NOT NULL,
  `gmaps_cabang` varchar(255) NOT NULL,
  `email_cabang` varchar(255) NOT NULL,
  `status_cabang` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_tcabang`
--

INSERT INTO `master_tcabang` (`id_cabang`, `nama_cabang`, `jum_cabang`, `alamat_cabang`, `provinsi_cabang`, `kota_cabang`, `kecamatan_cabang`, `kelurahan_cabang`, `kodepos_cabang`, `telpon_cabang`, `gmaps_cabang`, `email_cabang`, `status_cabang`) VALUES
('C001', 'CabangSby', '4', 'Ngagel Jaya no 3', 'Jawa Timur', 'Surabaya', 'Sidoarjo', 'Kediri', '34234', '34534534534', 'https://afrotransmaritim.co.id/', 'admi5n@gmail.com', '1'),
('C002', 'CabangSda', '2', 'Lontar Raya 2', 'Jawa Barat', 'Surabaya', 'Sidoarjo', 'Batu', '34234', '43534534534', 'https://afrotransmaritim.co.id/', 'admi5n@gmail.com', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_tcustomer`
--

DROP TABLE IF EXISTS `master_tcustomer`;
CREATE TABLE `master_tcustomer` (
  `id_customer` varchar(255) NOT NULL,
  `id_cabang` varchar(255) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `npwp` varchar(255) NOT NULL,
  `jalan` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `kode_pos` varchar(255) NOT NULL,
  `telpon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status_hutang` varchar(255) DEFAULT NULL,
  `total_hutang` varchar(255) DEFAULT NULL,
  `batas_pembayaran` varchar(255) DEFAULT NULL,
  `no_rekening` varchar(255) DEFAULT NULL,
  `metode_pembayaran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_tcustomer`
--

INSERT INTO `master_tcustomer` (`id_customer`, `id_cabang`, `nama_customer`, `npwp`, `jalan`, `provinsi`, `kota`, `kecamatan`, `kelurahan`, `kode_pos`, `telpon`, `email`, `status_hutang`, `total_hutang`, `batas_pembayaran`, `no_rekening`, `metode_pembayaran`) VALUES
('CU004', 'C001', 'Gradi', '1234', 'Ngagel Jaya TImur', 'Jawa Timur', 'Bandung', 'Sidoarjo', 'Batu', '601', '08951111', 'teje@gmail.com', NULL, NULL, NULL, NULL, NULL),
('CU005', 'C001', 'Godamte', '1111', 'Ngagel Jaya TImur', 'Jawa Timur', 'Surabaya', 'Sidoarjo', 'Blitar', '602', '08951112', 'godamte1@gmail.com', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_tkompetitor`
--

DROP TABLE IF EXISTS `master_tkompetitor`;
CREATE TABLE `master_tkompetitor` (
  `id_kompetitor` varchar(255) NOT NULL,
  `nama_kompetitor` varchar(255) NOT NULL,
  `npwp_kompetitor` varchar(255) NOT NULL,
  `alamat_kompetitor` varchar(255) NOT NULL,
  `provinsi_kompetitor` varchar(255) NOT NULL,
  `kota_kompetitor` varchar(255) NOT NULL,
  `kecamatan_kompetitor` varchar(255) NOT NULL,
  `kelurahan_kompetitor` varchar(255) NOT NULL,
  `kodepos_kompetitor` varchar(255) NOT NULL,
  `nohp_kompetitor` varchar(255) NOT NULL,
  `telp_kompetitor` varchar(255) NOT NULL,
  `email_kompetitor` varchar(255) NOT NULL,
  `rute_kompetitor` varchar(255) NOT NULL,
  `namabank_kompetitor` varchar(255) NOT NULL,
  `norek_kompetitor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_tkompetitor`
--

INSERT INTO `master_tkompetitor` (`id_kompetitor`, `nama_kompetitor`, `npwp_kompetitor`, `alamat_kompetitor`, `provinsi_kompetitor`, `kota_kompetitor`, `kecamatan_kompetitor`, `kelurahan_kompetitor`, `kodepos_kompetitor`, `nohp_kompetitor`, `telp_kompetitor`, `email_kompetitor`, `rute_kompetitor`, `namabank_kompetitor`, `norek_kompetitor`) VALUES
('K001', 'Dono', '12312312', 'Candi tempel no 5', 'Jawa Timur', 'Bandung', 'Sidoarjo', 'Blitar', '3334534', '234234', '3434545', 'admi5n@gmail.com', 'Jalan Tengah', 'BCA', '2234234234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_tpegawai`
--

DROP TABLE IF EXISTS `master_tpegawai`;
CREATE TABLE `master_tpegawai` (
  `id_pegawai` varchar(255) NOT NULL,
  `id_cabang` varchar(255) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `npwp_pegawai` varchar(255) NOT NULL,
  `alamat_pegawai` varchar(255) NOT NULL,
  `provinsi_pegawai` varchar(255) NOT NULL,
  `kota_pegawai` varchar(255) NOT NULL,
  `kecamatan_pegawai` varchar(255) NOT NULL,
  `kelurahan_pegawai` varchar(255) NOT NULL,
  `kodepos_pegawai` varchar(255) NOT NULL,
  `nohp_pegawai` varchar(255) NOT NULL,
  `telp_pegawai` varchar(255) NOT NULL,
  `email_pegawai` varchar(255) NOT NULL,
  `role_pegawai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_tpegawai`
--

INSERT INTO `master_tpegawai` (`id_pegawai`, `id_cabang`, `nama_pegawai`, `npwp_pegawai`, `alamat_pegawai`, `provinsi_pegawai`, `kota_pegawai`, `kecamatan_pegawai`, `kelurahan_pegawai`, `kodepos_pegawai`, `nohp_pegawai`, `telp_pegawai`, `email_pegawai`, `role_pegawai`) VALUES
('P001', 'C001', 'Jojo', '23423', 'sad', 'Jawa Timur', 'Surabaya', 'Sidoarjo', 'Blitar', '3423423', '324234', '3434545', 'admi5n@gmail.com', 'Super Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `nomor_transaksi` varchar(255) NOT NULL,
  `id_customer` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `id_admin` varchar(255) NOT NULL,
  `volume` varchar(255) DEFAULT NULL,
  `berat` varchar(255) DEFAULT NULL,
  `rute` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `jenis_harga` varchar(255) NOT NULL,
  `tonase` varchar(255) NOT NULL,
  `harga_tambahan` varchar(255) NOT NULL,
  `persentase` varchar(255) NOT NULL,
  `total_harga` varchar(255) NOT NULL,
  `nama_kapal` varchar(255) NOT NULL,
  `nomor_container` varchar(255) NOT NULL,
  `tanggal_berangkat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`nomor_transaksi`, `id_customer`, `nama_barang`, `id_admin`, `volume`, `berat`, `rute`, `harga`, `jenis_harga`, `tonase`, `harga_tambahan`, `persentase`, `total_harga`, `nama_kapal`, `nomor_container`, `tanggal_berangkat`) VALUES
('TC002', 'CU004', 'Ayam', 'admin', '10', '1', 'Surabaya-Malang', '20000', '2', '1', '10000', '10', '20000', 'Hwe Ship', '4', '2023-02-03');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `master_jabatan`
--
ALTER TABLE `master_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `master_tcabang`
--
ALTER TABLE `master_tcabang`
  ADD PRIMARY KEY (`id_cabang`);

--
-- Indeks untuk tabel `master_tcustomer`
--
ALTER TABLE `master_tcustomer`
  ADD PRIMARY KEY (`id_customer`),
  ADD KEY `fk_customer` (`id_cabang`);

--
-- Indeks untuk tabel `master_tkompetitor`
--
ALTER TABLE `master_tkompetitor`
  ADD PRIMARY KEY (`id_kompetitor`);

--
-- Indeks untuk tabel `master_tpegawai`
--
ALTER TABLE `master_tpegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `fk_pegawai` (`id_cabang`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`nomor_transaksi`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `master_tcustomer`
--
ALTER TABLE `master_tcustomer`
  ADD CONSTRAINT `fk_customer` FOREIGN KEY (`id_cabang`) REFERENCES `master_tcabang` (`id_cabang`);

--
-- Ketidakleluasaan untuk tabel `master_tpegawai`
--
ALTER TABLE `master_tpegawai`
  ADD CONSTRAINT `fk_pegawai` FOREIGN KEY (`id_cabang`) REFERENCES `master_tcabang` (`id_cabang`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `master_tcustomer` (`id_customer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
