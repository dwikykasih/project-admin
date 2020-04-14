-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Feb 2020 pada 07.57
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `angsur`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `angsuran`
--

CREATE TABLE `angsuran` (
  `id_angsuran` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `status` enum('0','1','2') CHARACTER SET latin1 NOT NULL DEFAULT '0' COMMENT '0=hutang, 1=lunas, 2= komfirmasi',
  `angsuran_ke` int(11) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `file_bukti` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `nominal` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `angsuran`
--

INSERT INTO `angsuran` (`id_angsuran`, `id_pelanggan`, `status`, `angsuran_ke`, `tgl_pembayaran`, `file_bukti`, `keterangan`, `nominal`) VALUES
(1, 3, '2', 0, '0000-00-00', '3_1.jpg', '0', 500000),
(2, 21, '2', 0, '0000-00-00', '21_0.jpg', '0', 300000),
(12, 3, '2', 1, '2020-02-09', '3_2.jpg', '', 600000),
(13, 3, '2', 2, '0000-00-00', '3_3.jpg', '', 600000),
(14, 3, '2', 3, '0000-00-00', '3_4.jpg', '', 600000),
(15, 3, '2', 4, '0000-00-00', '3_5.jpg', '', 600000),
(16, 3, '2', 5, '0000-00-00', '3_6.jpg', '', 600000),
(17, 3, '2', 6, '0000-00-00', '3_7.jpg', '', 600000),
(18, 3, '2', 7, '0000-00-00', '3_8.jpg', '', 600000),
(19, 3, '2', 8, '0000-00-00', '3_9.jpg', '', 600000),
(20, 3, '2', 9, '0000-00-00', '', '', 600000),
(21, 3, '2', 10, '0000-00-00', '', '', 600000),
(22, 3, '2', 11, '0000-00-00', '', '', 600000),
(23, 3, '2', 12, '0000-00-00', '', '', 600000),
(24, 21, '2', 1, '2020-02-09', '21_1.jpg', '', 300000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`) VALUES
(2, 'Handphone'),
(1, 'Laptop');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_pelanggan`
--

CREATE TABLE `daftar_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hp` bigint(20) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `jenis_kelamin` varchar(122) NOT NULL,
  `whatsapp` bigint(20) NOT NULL,
  `skype` varchar(122) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `universitas` varchar(122) NOT NULL,
  `tahun_masuk` int(122) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `ktp` varchar(255) NOT NULL,
  `ktm` varchar(255) NOT NULL,
  `transkrip_nilai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_pelanggan`
--

INSERT INTO `daftar_pelanggan` (`id_pelanggan`, `nama`, `email`, `hp`, `tgl_daftar`, `jenis_kelamin`, `whatsapp`, `skype`, `alamat`, `universitas`, `tahun_masuk`, `prodi`, `ktp`, `ktm`, `transkrip_nilai`) VALUES
(1, 'Dwiky', 'kasihdwiky@gmail.com', 62895, '0000-00-00', '1', 0, '', '', '', 0, '', '', '', ''),
(2, 'Kapi', 'kapi@yahoo.com', 899, '0000-00-00', '1', 0, '', '', '', 0, '', '', '', ''),
(3, 'Kasih', 'kasih@gmail.com', 62895, '2020-02-10', 'lelaki', 62895, '', '', '', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logtrx`
--

CREATE TABLE `logtrx` (
  `id_log` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `id_asp` int(11) NOT NULL,
  `bukti_trf` varchar(255) NOT NULL,
  `catatan` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `logtrx`
--

INSERT INTO `logtrx` (`id_log`, `id_order`, `status`, `id_asp`, `bukti_trf`, `catatan`, `tanggal`) VALUES
(1, 2, 'Pembayaran Uang Muka', 1, 'default.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2020-01-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_order` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_asp` int(11) NOT NULL,
  `status_dok` varchar(128) NOT NULL,
  `status_trx` varchar(128) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `asp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_order`, `id_pelanggan`, `id_asp`, `status_dok`, `status_trx`, `nama_barang`, `nama`, `asp`) VALUES
(2, 1, 2, 'Disetujui', 'Sukses', 'Laptop', 'Dwiky', 'Mizaldi Fathoni');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pelanggan` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `nama` varchar(128) NOT NULL,
  `barang` varchar(150) NOT NULL,
  `tgl_persetujuan` date NOT NULL,
  `hp` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `whatsapp` int(20) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `jumlah_barang` int(100) NOT NULL,
  `dp` bigint(20) NOT NULL,
  `angsuran` bigint(20) NOT NULL,
  `margin` bigint(20) NOT NULL,
  `jangka_waktu` int(11) NOT NULL,
  `catatan_penjual` text NOT NULL,
  `kode_voucher` varchar(100) NOT NULL,
  `nilai_voucher` varchar(100) NOT NULL,
  `catatan_admin` text NOT NULL,
  `asp` varchar(255) NOT NULL DEFAULT '0',
  `status_trx` tinyint(4) NOT NULL,
  `akad` varchar(255) NOT NULL DEFAULT '0',
  `tgl_sekarang` date NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `catatan_akad` text NOT NULL,
  `tgl_akad` date NOT NULL,
  `file_akad` varchar(255) NOT NULL DEFAULT '0',
  `alamat` varchar(255) NOT NULL,
  `universitas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengajuan`
--

INSERT INTO `pengajuan` (`id_pelanggan`, `status`, `nama`, `barang`, `tgl_persetujuan`, `hp`, `email`, `tgl_lahir`, `whatsapp`, `harga`, `deskripsi`, `link`, `jumlah_barang`, `dp`, `angsuran`, `margin`, `jangka_waktu`, `catatan_penjual`, `kode_voucher`, `nilai_voucher`, `catatan_admin`, `asp`, `status_trx`, `akad`, `tgl_sekarang`, `tgl_awal`, `tgl_akhir`, `catatan_akad`, `tgl_akad`, `file_akad`, `alamat`, `universitas`) VALUES
(3, 1, 'Dwiky', 'Laptop', '2020-02-10', 895, 'kasihdwiky@gmail.com', '2018-07-16', 895, 5000000, 'Laptop Asus dengan spesifikasi bla bla bla', 'www.tokopedia.com', 1, 1500000, 0, 50000, 12, 'Laptop bergaransi selama 4 tahun', '', '', 'Selamat mengangsur! hahah', 'Moch Dwiky Fajar', 2, '0', '2020-02-01', '2020-02-01', '2020-02-29', 'Sebaiknya cepat mengangsur :)', '2020-02-10', 'Dwiky_akad.pdf', 'jl. dr. sutomo', 'itera'),
(21, 1, 'Kapi', 'Handphone', '2020-02-10', 999, 'dwikykasih@gmail.com', '2020-01-05', 0, 3000000, 'Handphone vivo', 'bukalapak.com', 1, 1000000, 0, 2000000, 6, 'Handphone merk vivo', '', '', 'Selamat! mengangsur', 'Moch Dwiky Fajar', 2, '0', '2020-02-07', '2020-02-01', '2020-02-29', '', '2020-02-10', 'Kapi_akad.pdf', 'Jalan onta', 'unila');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_asp`
--

CREATE TABLE `pengajuan_asp` (
  `id_asp` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `universitas` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `hp` bigint(255) NOT NULL,
  `email` varchar(122) NOT NULL,
  `whatsapp` bigint(20) NOT NULL,
  `skype` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `semester` int(25) NOT NULL,
  `prodi` varchar(122) NOT NULL,
  `ktp` varchar(122) NOT NULL,
  `ktm` varchar(122) NOT NULL,
  `cv` varchar(122) NOT NULL,
  `transkrip_nilai` varchar(122) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `catatan_admin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengajuan_asp`
--

INSERT INTO `pengajuan_asp` (`id_asp`, `nama`, `universitas`, `status`, `jenis_kelamin`, `hp`, `email`, `whatsapp`, `skype`, `alamat`, `semester`, `prodi`, `ktp`, `ktm`, `cv`, `transkrip_nilai`, `tgl_daftar`, `catatan_admin`) VALUES
(1, 'Moch Dwiky Fajar', 'Institut Teknologi Sumatera', 1, '', 62895344880443, 'kasihdwiky@gmail.com', 0, '', '', 0, '', '', '', '', '', '0000-00-00', 'Selamat bergabung di Angsur :)'),
(2, 'Mizaldi Fathoni', 'Institut Teknologi Sumatera', 1, '', 0, '', 0, '', '', 0, '', '', '', '', '', '0000-00-00', 'Selamat :)'),
(3, 'Yoga Pratama', 'ITERA', 1, '', 0, '', 0, '', '', 0, '', '', '', '', '', '0000-00-00', 'Selamat bergabung :)'),
(4, 'Kasih', 'UBL', 1, '', 0, '', 0, '', '', 0, '', '', '', '', '', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `angsuran`
--
ALTER TABLE `angsuran`
  ADD PRIMARY KEY (`id_angsuran`),
  ADD KEY `id-pelanggan` (`id_pelanggan`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD UNIQUE KEY `nama_barang` (`nama_barang`);

--
-- Indeks untuk tabel `daftar_pelanggan`
--
ALTER TABLE `daftar_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD UNIQUE KEY `nama` (`nama`,`email`);

--
-- Indeks untuk tabel `logtrx`
--
ALTER TABLE `logtrx`
  ADD PRIMARY KEY (`id_log`),
  ADD UNIQUE KEY `id_order` (`id_order`),
  ADD UNIQUE KEY `id_asp` (`id_asp`),
  ADD KEY `id_order_2` (`id_order`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_order`),
  ADD UNIQUE KEY `status_dok` (`status_dok`),
  ADD UNIQUE KEY `status_trx` (`status_trx`),
  ADD KEY `pelanggan` (`id_pelanggan`),
  ADD KEY `asp` (`id_asp`);

--
-- Indeks untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD KEY `nama` (`nama`);

--
-- Indeks untuk tabel `pengajuan_asp`
--
ALTER TABLE `pengajuan_asp`
  ADD PRIMARY KEY (`id_asp`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `angsuran`
--
ALTER TABLE `angsuran`
  MODIFY `id_angsuran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `daftar_pelanggan`
--
ALTER TABLE `daftar_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `logtrx`
--
ALTER TABLE `logtrx`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `pengajuan_asp`
--
ALTER TABLE `pengajuan_asp`
  MODIFY `id_asp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `angsuran`
--
ALTER TABLE `angsuran`
  ADD CONSTRAINT `id-pelanggan` FOREIGN KEY (`id_pelanggan`) REFERENCES `pengajuan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `logtrx`
--
ALTER TABLE `logtrx`
  ADD CONSTRAINT `id_asp` FOREIGN KEY (`id_asp`) REFERENCES `pengajuan_asp` (`id_asp`);

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `asp` FOREIGN KEY (`id_asp`) REFERENCES `pengajuan_asp` (`id_asp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pelanggan` FOREIGN KEY (`id_pelanggan`) REFERENCES `daftar_pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD CONSTRAINT `nama` FOREIGN KEY (`nama`) REFERENCES `daftar_pelanggan` (`nama`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
