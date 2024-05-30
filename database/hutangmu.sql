-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 26 Des 2023 pada 23.00
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hutangmu`
--

DELIMITER $$
--
-- Fungsi
--
CREATE DEFINER=`root`@`localhost` FUNCTION `kode_automatis` (`kode` INT) RETURNS CHAR(7) CHARSET latin1  BEGIN
DECLARE kodebaru CHAR(7);
DECLARE urut INT;
 
SET urut = IF(kode IS NULL, 1, kode + 1);
SET kodebaru = CONCAT("TRX", LPAD(urut, 4, 0));
 
RETURN kodebaru;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `kode_automatis2` (`kode` INT) RETURNS CHAR(7) CHARSET latin1  BEGIN
DECLARE kodebaru CHAR(7);
DECLARE urut INT;
 
SET urut = IF(kode IS NULL, 1, kode + 1);
SET kodebaru = CONCAT("TRF", LPAD(urut, 4, 0));
 
RETURN kodebaru;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasukkan`
--

CREATE TABLE `pemasukkan` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `pelanggan` varchar(50) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `sumber` varchar(30) NOT NULL,
  `jumlah` varchar(250) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemasukkan`
--

INSERT INTO `pemasukkan` (`id`, `tanggal`, `pelanggan`, `hp`, `keterangan`, `sumber`, `jumlah`, `username`) VALUES
(57, '2023-12-16', 'Sukidi', '088215178312', 'Bantuan Pemerintah', 'Makanan', '20.000', 'Sarmi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `pelanggan` varchar(50) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `keperluan` varchar(30) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`id`, `tanggal`, `pelanggan`, `hp`, `keterangan`, `keperluan`, `jumlah`, `username`) VALUES
(23, '2023-12-16', 'parjo', '08821226272', 'minjem kulkas', 'Jaket', '2.000.000', 'Sarmi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekening_keluar`
--

CREATE TABLE `rekening_keluar` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `aksi` varchar(10) NOT NULL DEFAULT 'keluar',
  `tanggal` date NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Trigger `rekening_keluar`
--
DELIMITER $$
CREATE TRIGGER `tg_kodekeluar` BEFORE INSERT ON `rekening_keluar` FOR EACH ROW BEGIN
DECLARE s VARCHAR(8);
DECLARE i INTEGER;
 
SET i = (SELECT SUBSTRING(kode,4,4) AS Nomer
FROM rekening_keluar ORDER BY Nomer DESC LIMIT 1);
 
SET s = (SELECT kode_automatis2(i));
 
IF(NEW.kode IS NULL OR NEW.kode = '')
 THEN SET NEW.kode =s;
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekening_masuk`
--

CREATE TABLE `rekening_masuk` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `aksi` varchar(20) NOT NULL DEFAULT 'masuk',
  `tanggal` date NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Trigger `rekening_masuk`
--
DELIMITER $$
CREATE TRIGGER `tg_kodemasuk` BEFORE INSERT ON `rekening_masuk` FOR EACH ROW BEGIN
DECLARE s VARCHAR(8);
DECLARE i INTEGER;
 
SET i = (SELECT SUBSTRING(kode,4,4) AS Nomer
FROM rekening_masuk ORDER BY Nomer DESC LIMIT 1);
 
SET s = (SELECT kode_automatis(i));
 
IF(NEW.kode IS NULL OR NEW.kode = '')
 THEN SET NEW.kode =s;
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'aktif',
  `level` varchar(10) NOT NULL DEFAULT 'user',
  `no_rek` char(12) NOT NULL,
  `nama_usaha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `email`, `username`, `password`, `status`, `level`, `no_rek`, `nama_usaha`) VALUES
(2, 'admin@gmail.com', 'admin', '$2y$10$JyNJABETyzlZl.l0mGs1BuXFJE7RXCa/x/9p/HWIr/whXkFyJ.5F2', 'aktif', 'admin', '', ''),
(3, 'sarmi@gmail.com', 'Sarmi', '$2y$10$VKuJ3bd0Ub5TUxWK4MXrFe3I5DmF8wr/XEQ.SmM86oaH3LDCzWRSK', 'aktif', 'user', 'VjKzQu8Z3wuN', 'Mie Ayam Ibu Sarmi'),
(57, 'butonx@gmail.com', 'butonx', '$2y$10$PZJWhxvaHn6XbFtuodB2QeeeCdhhUVCEWrmqpg3I/d7WBqqaspaEO', 'aktif', 'user', '7WuGDQ7HnOOy', 'ToidiHolic');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pemasukkan`
--
ALTER TABLE `pemasukkan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_username_masuk` (`username`);

--
-- Indeks untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_username_keluar` (`username`);

--
-- Indeks untuk tabel `rekening_keluar`
--
ALTER TABLE `rekening_keluar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_username_rekening_keluar` (`username`);

--
-- Indeks untuk tabel `rekening_masuk`
--
ALTER TABLE `rekening_masuk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_username_rekening_masuk` (`username`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `username` (`username`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pemasukkan`
--
ALTER TABLE `pemasukkan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `rekening_keluar`
--
ALTER TABLE `rekening_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `rekening_masuk`
--
ALTER TABLE `rekening_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pemasukkan`
--
ALTER TABLE `pemasukkan`
  ADD CONSTRAINT `fk_username_masuk` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD CONSTRAINT `fk_username_keluar` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rekening_keluar`
--
ALTER TABLE `rekening_keluar`
  ADD CONSTRAINT `fk_username_rekening_keluar` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rekening_masuk`
--
ALTER TABLE `rekening_masuk`
  ADD CONSTRAINT `fk_username_rekening_masuk` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
