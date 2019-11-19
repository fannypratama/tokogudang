-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Nov 2019 pada 04.01
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
-- Database: `tokobarang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang_masuk`
--

CREATE TABLE `data_barang_masuk` (
  `id_barang_masuk` varchar(64) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `supplier` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_barang_masuk`
--

INSERT INTO `data_barang_masuk` (`id_barang_masuk`, `tanggal`, `supplier`, `lokasi`, `kode_barang`, `nama_barang`, `satuan`, `jumlah`) VALUES
('5da02dc680574', '2019-10-09', 'robi', 'jember', '22434', 'lele', 'ekor', 200),
('5da036fa8044d', '2019-10-15', 'dimas', 'papua', '21322312312', 'semen', 'sak', 500),
('5da03710aba04', '2019-10-15', 'sempu', 'lumajang', '2312312312', 'sabun', 'item', 123),
('5da03732e3c4c', '2019-09-26', 'kyosi', 'jatim', '23493024', 'meja', 'biji', 300),
('5da037531a9a8', '2019-09-10', 'jack', 'US', '234324', 'PC', 'pack', 20),
('5da037767c8f0', '2019-09-25', 'genji', 'japan', '24344234', 'lemper', 'item', 12),
('5da0379b8c5da', '2019-10-16', 'jack', 'denpasar', '12434234', 'mouse', 'item', 2000),
('5da037b0a1e6a', '2019-10-22', 'lord', 'afrika', '24324234', 'kabel', 'meter', 2000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbarang`
--

CREATE TABLE `dbarang` (
  `id_dbarang` int(11) NOT NULL,
  `kode_mbarang` varchar(10) NOT NULL,
  `kode_supplier` varchar(10) NOT NULL,
  `stok` int(11) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dbarang`
--

INSERT INTO `dbarang` (`id_dbarang`, `kode_mbarang`, `kode_supplier`, `stok`, `status`) VALUES
(1, '9U6U6M6a1N', '7E8u9M8L7b', 12, 'ADA'),
(2, '9U6U6M6a1N', '7E8u9M8L7b', 13, 'ADA'),
(3, '4i7z4O8F5o', '5g7V8x2t6a', 12, 'ADA'),
(4, '4v6Y3O6w1R', '5g7V8x2t6a', 12, 'ADA'),
(5, '4v6Y3O6w1R', '0l7a7U8n9r', 13, 'ADA'),
(6, '3x8B8F1F0m', '1l0l2L5A4W', 14, 'ADA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kode_kategori` varchar(10) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kode_kategori`, `nama_kategori`) VALUES
(3, '5da829ab98', 'Notebook01'),
(4, 'vxOrCiGg7w', 'MacBook'),
(5, '105da98030', 'Tablet'),
(6, '35da980c45', 'Mobil'),
(7, 'd3d9446802', 'Lampu'),
(8, '1s8J9r2u0E', 'Notepad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mbarang`
--

CREATE TABLE `mbarang` (
  `id_mbarang` int(11) NOT NULL,
  `kode_mbarang` varchar(10) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `satuan` varchar(128) NOT NULL,
  `uraian` text NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mbarang`
--

INSERT INTO `mbarang` (`id_mbarang`, `kode_mbarang`, `nama`, `satuan`, `uraian`, `nama_kategori`, `foto`) VALUES
(27, '4i7z4O8F5o', 'ASUS', 'PCS', 'Whether it’s for work or recreational use, the Asus F402WA-GA019T 14-inch Laptop’s high-performance features let you tackle your day-to-day tasks', 'vxOrCiGg7w', ''),
(28, '9U6U6M6a1N', '', 'dg', 'Whether it’s for work or recreational use, the Asus F402WA-GA019T 14-inch Laptop’s high-performance features let you tackle your day-to-day tasks', 'vxOrCiGg7w', 'ball_glass_macro_138060_1080x1920.jpg'),
(29, '2o5N3O8m2s', '', 'dsgfg', 'Whether it’s for work or recreational use, the Asus F402WA-GA019T 14-inch Laptop’s high-performance features let you tackle your day-to-day tasks', '5da829ab98', '1.jpg'),
(30, '8F4l5a1E9C', 'sdsa', 'asd', 'Whether it’s for work or recreational use, the Asus F402WA-GA019T 14-inch Laptop’s high-performance features let you tackle your day-to-day tasks', '5da829ab98', '1.png'),
(31, '4v6Y3O6w1R', 'sdsa', 'ds', 'Whether it’s for work or recreational use, the Asus F402WA-GA019T 14-inch Laptop’s high-performance features let you tackle your day-to-day tasks', 'vxOrCiGg7w', 'blackthorn_berries_branches_drops_106512_1080x1920.jpg'),
(32, '4Q0a4E8k0M', 'sdsa', 'asd', 'Whether it’s for work or recreational use, the Asus F402WA-GA019T 14-inch Laptop’s high-performance features let you tackle your day-to-day tasks', '5da829ab98', '13-01-2019.png'),
(33, '3x8B8F1F0m', 'ASUS MAD', 'PCS', 'THE BEST', '5da829ab98', 'snowflake_shape_snow_85201_1920x1080.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `product_id` varchar(64) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`product_id`, `name`, `price`, `image`, `description`) VALUES
('5d9ea8220dd45', 'Lordos', 3000, 'default.jpg', 'GGGG'),
('5d9ea867cebaf', 'Lord', 3000, 'default.jpg', 'GG'),
('5d9ea8afb8dbd', 'cangkimen', 234234, 'default.jpg', 'kacang'),
('5d9ead0fae925', 'solo', 32423, 'default.jpg', 'klo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `kode_supplier` varchar(10) NOT NULL,
  `nama_supplier` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `kota` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `kode_supplier`, `nama_supplier`, `alamat`, `kota`) VALUES
(2, '7E8u9M8L7b', 'DIMAS', 'jl kuteng', 'nihon'),
(3, '5g7V8x2t6a', 'joko', 'jl kuningan', 'jember'),
(4, '0l7a7U8n9r', 'Temon', 'Jl Bambu', 'Jakarta'),
(5, '8O3H0q7a9z', 'Raden', 'Jl Sawah', 'Timur Leste'),
(6, '7V8P0S5S1d', 'Jack', 'Jl ambulu', 'Papua'),
(7, '1l0l2L5A4W', 'Reyy', 'Jl Sudirman', 'Malang'),
(8, '5F6O4O3t0p', 'BEBE', 'jl Asep', 'Jakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `date_create` varchar(128) NOT NULL,
  `tanggal_transaksi` varchar(128) NOT NULL,
  `no_transaksi` varchar(128) NOT NULL,
  `qty` int(11) NOT NULL,
  `kode_mbarang` varchar(10) NOT NULL,
  `kode_supplier` varchar(10) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `date_create`, `tanggal_transaksi`, `no_transaksi`, `qty`, `kode_mbarang`, `kode_supplier`, `status`) VALUES
(1, '0000-00-00', '', '7G0y7O0l6T', 123, '9U6U6M6a1N', '7E8u9M8L7b', 'ada'),
(2, '11/13/2019', '', '4D9t9x1c8W', 12, '2o5N3O8m2s', '7E8u9M8L7b', 'ada'),
(3, '1574050079', '', '4O5j9W3Z4h', 123, '4i7z4O8F5o', '5g7V8x2t6a', 'ada'),
(4, '1574050299', '', '5T1X1D5J9a', 12321432, '2o5N3O8m2s', '5g7V8x2t6a', 'masuk'),
(6, '1574054278', '11/07/2019', '7N8m3M2R0S', 123, '9U6U6M6a1N', '0l7a7U8n9r', 'keluar'),
(7, '2019-11-18 10:09:46', '11/13/2019', '5r0f4X5K0h', 123123, '2o5N3O8m2s', '5g7V8x2t6a', 'keluar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'jack', 'jackkrouser2@gmal.com', 'default.jpg', '$2y$10$VUWbhM2rhyExAU6AtZJCtOTEPt6emRHQIEnmwsGDhZbPSPkez3bA.', 3, 1, 1571206301),
(2, 'rian', 'rians9067@gmail.com', 'default.jpg', '$2y$10$OVmhUFVhihEmnJtfdCRsiOICF88iM/m19QojO7MnVQ3SVtS1br1xO', 1, 1, 1571209324),
(3, 'inem', 'inem@gmail.com', 'default.jpg', '$2y$10$yVdcvOxbog1l9pteWS.5MOTAU6pu8KYFKVaU/fYYSySEc7adm4GIu', 3, 1, 1571218481);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 1, 3),
(4, 3, 3),
(6, 1, 2),
(7, 1, 4),
(8, 1, 5),
(9, 1, 6),
(10, 1, 7),
(11, 1, 8),
(12, 1, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL,
  `nomor` int(11) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `nomor`, `active`) VALUES
(1, 'Administrator', 1, 1),
(2, 'Mbarang', 8, 1),
(3, 'User', 4, 1),
(4, 'Menu', 5, 1),
(6, 'Kategori', 2, 1),
(7, 'Supplier', 3, 1),
(8, 'Dbarang', 6, 1),
(9, 'transaksi', 7, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Admin'),
(3, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'administrator', 'fa fa-tachometer fa-fw', 1),
(2, 3, 'My Profile', 'user', 'fa fa-user fa-fw', 1),
(3, 3, 'Edit Profile', 'user/edit', 'fa fa-pencil fa-fw', 1),
(4, 4, 'Menu Manajement', 'menu', 'fa fa-folder fa-fw', 1),
(5, 4, 'Sub Menu Manajement', 'menu/submenu', 'fa fa-folder-open fa-fw', 1),
(7, 6, 'Kategori', 'kategori', 'fa fa-list fa-fw', 1),
(8, 8, 'Master Barang', 'mbarang', 'fa fa-database fa-fw', 1),
(9, 7, 'Supplier', 'supplier', 'fa fa-truck fa-fw', 1),
(10, 8, 'Data Barang', 'dbarang', 'fa fa-file fa-fw', 1),
(11, 9, 'Transaksi', 'transaksi', 'fa fa-exchange fa-fw', 1),
(12, 1, 'test', 'administrator/test', 'fa fa-folder fa-fw', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_barang_masuk`
--
ALTER TABLE `data_barang_masuk`
  ADD PRIMARY KEY (`id_barang_masuk`);

--
-- Indeks untuk tabel `dbarang`
--
ALTER TABLE `dbarang`
  ADD PRIMARY KEY (`id_dbarang`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `mbarang`
--
ALTER TABLE `mbarang`
  ADD PRIMARY KEY (`id_mbarang`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dbarang`
--
ALTER TABLE `dbarang`
  MODIFY `id_dbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `mbarang`
--
ALTER TABLE `mbarang`
  MODIFY `id_mbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
