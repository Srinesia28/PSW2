-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2021 at 04:53 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msa_project_psw`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pengirim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `nama_pengirim`, `komentar`, `created_at`, `updated_at`) VALUES
(1, 'samuel', '123', '2021-05-15 07:42:40', '2021-05-15 07:42:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pemesan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_100000_create_password_resets_table', 1),
(20, '2019_08_19_000000_create_failed_jobs_table', 1),
(21, '2021_04_26_031847_create_products_table', 1),
(22, '2021_04_26_110815_mesages', 1),
(23, '2021_04_26_120804_pengguna', 1),
(24, '2021_05_08_152646_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nama_Produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Kondisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Stok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Harga_Produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Toko` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Spesifikasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `Nama_Produk`, `Kondisi`, `Stok`, `Harga_Produk`, `Toko`, `Alamat`, `Foto`, `Spesifikasi`, `created_at`, `updated_at`) VALUES
(1, 'ASUS E410MA BV456FHD', 'Baru', '10', '6.500.000', 'Asus Shop', 'Balige', '4.jpg', '- Layar:  14.0-inch, HD (1366 x 768) 16:9, Anti-glare display, LED Backlit, 200nits, NTSC: 45%, Screen-to-body ratio: 78%\r\n\r\n- Processor:Intel® Celeron® N4020 Processor 1.1 GHz (4M Cache, up to 2.8 GHz),\r\n\r\n- Intel® Pentium® Silver N5030 Processor 1.1 GHz (4M Cache, up to 3.1 GHz)\r\n\r\n- Graphic Card: Intel® UHD Graphics 600, Intel® UHD Graphics 605\r\n\r\n- RAM: 4GB DDR4 on board, Memory Max Up to:12GB, 8GB DDR4 on board, Memory Max Up to:12GB\r\n\r\n- Storage: 512GB M.2 NVMe™ PCIe® 3.0 SSD\r\n \r\n- Konektivitas: Wi-Fi 5(802.11ac), Bluetooth 4.1 (Dual band) 1*1\r\n\r\n- Port: 1 x COMBO audio jack1 x Type-A USB2.01 x Type-A USB 3.2 (Gen 1)1 x Type-C USB 3.2 (Gen 1)1 x HDMI1 x micro SD card\r\n\r\n- Baterai: 42WHrs, 3S1P, 3-cell Li-ion\"', NULL, NULL),
(2, 'ASUS ZenBook Flip S (UX371)', 'Baru', '100', '24.500.000', 'Asus Shop', 'Balige', '1.jpg', '. Layar: 13.3” OLED 4K (3840 x 2160) 16:9 slim-bezel NanoEdge touchscreen, 400Nits angles\r\n. Processor: Intel® Core™ i7-1165G7 1.2-2.8 GHz (12M Cache, up to 4.7 GHz)\r\n. Graphic Card: Intel® Iris® Xe Graphics\r\n.  RAM: 16 GB 4266 MHz LPDDR4x\r\n.  Storage:  1TB M.2 NVMe™ PCIe® 3.0 Performance SSD\r\n.  Konektivitas: WiFi 802.11ax, Bluetooth 5.0 (Dual band) 2x2\r\n.  Port: 2 x Thunderbolt™ 4 USB-C® (up to 40 Gbps), 1 x USB 3.2 Gen 1 Type-A (up to 5 Gbps), 1 x Standard HDMI\r\n. Baterai: 67WHrs, 4S1P, 4-cell Li-ion', NULL, NULL),
(4, 'ASUS VivoBook S S433', 'Baru', '10', '12.300.000', 'Asus Shop', 'Balige', '3.jpg', '.  Layar: 14” LED-backlit Full HD (1920 x 1080) 16:9\r\n.  Processor: Intel® Core™ i7-10510U processor 1.8GHz quad-core with Turbo Boost (up to 4.9GHz) and 8MB cache\r\n.  Graphic Card: NVIDIA® GeForce® MX250\r\n.  RAM: 8GB / 16GB 2666MHz DDR4\r\n.  Storage: 512GB Intel® Optane™ Memory H10 with Solid State Storage\r\n.  Konektivitas: Intel Wi-Fi 6 with Gig+ performance (802.11ax), Bluetooth 5.0 version\r\n.  Port: 1 x USB 3.2 Gen 1 Type-C™, 1 x USB 3.2 Gen 1 Type-A, 2 x USB 2.0, 1 x HDMI, 1 x Audio combo jack, 1 x MicroSD card reader, 1 x DC-i, n\r\n.  Baterai: 50Wh 3-cells li-po, 65W power adapter, pengisian cepat: 60% dalam 49 menit', NULL, NULL),
(5, 'ASUS ROG Strix G512LU Electro Punk', 'Baru', '10', '20.300.000', 'Asus Shop', 'Balige', '5.jpg', '\".  Layar: 15.6-inch FHD (1920 x 1080) 16:9 anti-glare display, sRGB 100%, 240Hz, IPS-level\r\n.  Processor: Intel® Core™ i7-10750H Processor 2.6 GHz (12M Cache, up to 5.0 GHz, 6 cores)\r\n.  Graphic Card: NVIDIA® GeForce® GTX 1660Ti 6GB GDDR6\r\n.  RAM: 16 GB DDR4 2933MHz\r\n.  Storage: 512GB + 512GB M.2 NVMe™ PCIe® 3.0 RAID0 SSD\r\n.  Konektivitas: Intel Wi-Fi 6(Gig+)(802.11ax)+Bluetooth 5.1 (Dual band) 2*2\r\n.  Port: 1x 3.5mm Combo Audio Jack, 1x HDMI 2.0b, 3x USB 3.2 Gen 1 Type-A, 1x USB 3.2 Gen 2 Type-C support displayport / G-SYNC\r\n.  Baterai: 66WHrs, 4S1P, 4-cell Li-ion\"', NULL, NULL),
(6, 'ASUS TUF Gaming F15 FX506', 'Baru', '10', '15.300.000', 'Asus Shop', 'Balige', '6.jpg', '\".  Layar: 15.6-inch FHD (1920 x 1080) 16:9, anti-glare display\r\n.  Processor: Intel® Core™ i5-10300H Processor 2.5 GHZ (8M Cache, up to 4.5 GHz)\r\n.  Graphic Card: NVIDIA® GeForce® GTX 1650 4GB GDDR6\r\n.  RAM: DDR4 2933MHz SDRAM, total up to 32 GB SDRAM*2, Dual-channel\r\n.  Storage: 512GB M.2 NVMe™ PCIe® 3.0 SSD\r\n.  Konektivitas: Intel Wi-Fi 6(Gig+)(802.11ax)+Bluetooth 5.1 (Dual band) 2*2\r\n.  Port: 1x 3.5mm Combo Audio Jack, 1x HDMI 2.0b, 2x USB 3.2 Gen 1 Type-A 1x USB 2.0 Type-A, 1x USB 3.2 Gen 2 Type-C support displayport / G-SYNC\r\n.  Baterai: 48WHrs, 3S1P, 3-cell Li-ion\"', NULL, NULL),
(7, 'Lenovo Legion Y740', 'Baru', '10', '26.600.000', 'Lenovo Shop', 'Balige', '7.jpg', 'Ukuran        Dimensions:(W x D x H) 412.6 mm x 304.9 mm x 23 mm Bobot: 2.8 kg Layar:17,3 inci FHD (1920 x 1080 piksel) OS:Windows 10 Home Prosesor:9th Generation Intel Core i7-9750H (2.6GHz, up to 4.5GHz) RAM:16GB RAM DDR4 Storage:256GB SSD + 1TB HDD VGA:NVIDIA GeForce RTX 2060 6GB', '2021-05-03 20:14:56', '2021-05-03 20:14:56'),
(8, 'Lenovo Ideapad S530', 'Baru', '10', '16.600.000', 'Lenovo Shop', 'Medan', '8.jpg', 'Ukuran:Dimensions (W x D x H) 308.4 mm x 211 mm x 14.8 mm Bobot: 1.25 kg Layar:13,3 inci FHD (1920 x 1080 piksel) OSWindows 10 Home Prosesor:8th Gen Intel Quad-Core i7-8565U (1.8GHz Up to 4.6GHz) RAM:16GB RAM DDR3 Storage:512GB SSD VGA:NVIDIA GeForce MX150 2GB DDR5', '2021-05-03 22:39:49', '2021-05-03 22:39:49'),
(9, 'Lenovo Ideapad L340', 'Baru', '10', '10.140.000', 'Lenovo Shop', 'Medan', '9.jpg', 'Ukuran        Dimensions (W x D x H) 363 mm x 254.6 mm x 23.9 mm Bobot: 2.2 kg Layar:15,6 inci FHD (1920 x 1080 piksel) OS:Windows 10 Home Prosesor:9th Gen Intel Quad-Core i5-9300H (2.4GHz Up to 4.1GHz) RAM:8GB RAM DDR4 Storage:512GB SSD VGA:NVIDIA GeForce GTX 1050 3GB DDR5', '2021-05-03 22:40:36', '2021-05-03 22:40:36'),
(10, 'Lenovo Ideapad C340', 'Baru', '10', '8.650.000', 'Lenovo Shop', 'Medan', '10.jpg', 'Ukuran        Dimensions (W x D x H) 328 mm x 229 mm x 17.9 mm Bobot: 1.65 kg Layar:14 inci HD Touchscreen (1366 x 768 piksel) OS:Windows 10 Home Prosesor:10th Gen Intel Core i3-10110U (2.4GHz Up to 4.1GHz) RAM:8GB RAM DDR4 Storage:512GB SSD VGA:NVIDIA GeForce MX230 2 GB GDDR5 DDR5', '2021-05-03 22:41:13', '2021-05-03 22:41:13'),
(11, 'Lenovo Yoga C940', 'Baru', '10', '24.750.000', 'Lenovo Shop', 'Medan', '11.jpg', 'Ukuran:Dimensions (W x D x H) 320.3 mm x 215.6 mm x 14.5-15.7 mm Bobot: 1.35 kg Layar:14 inci UHD (3840 x 2160 piksel) OS:Windows 10 Home Prosesor:10th Gen Intel Core i7-1065G7 (1.30GHz, up to 3.90GHz) RAM:16GB RAM LPDDR4X Storage:1TB SSD VGA:Intel Iris Plus Graphics', '2021-05-03 22:41:54', '2021-05-03 22:41:54'),
(12, 'Acer Spin 5 Lite SP513-55N', 'Baru', '10', '16.499.003', 'Acer Shop', 'Siantar', '12.jpg', 'Resolusi : 2K 2256 x 1504 pixels Ukuran Layar : 13.5 inches Bobot : 1,2 kg OS : Windows 10 OS Ver : Windows 10 Home CPU : Core i5 , Core i7 Model Prosesor : Intel Core i5-1135G7 Model GPU : Intel Iris Xe Graphics 96EU', '2021-05-03 22:42:41', '2021-05-03 22:42:41'),
(13, 'Acer ConceptD 7 Ezel Pro CC715-71P', 'Baru', '10', '49.999.000', 'Acer Shop', 'Siantar', '13.jpg', 'Resolusi :         4K UHD 3840 x 2160 pixels Ukuran Layar : 15.6 inches Bobot : 2.54 kg OS : Windows 10 OS Ver : Windows 10 Pro CPU : Core i7 Model Prosesor : Intel Core i7-10875H Model GPU : NVIDIA Quadro RTX 3000 (6GB GDDR6 VRAM)', '2021-05-03 22:43:33', '2021-05-03 22:43:33'),
(14, 'Acer Aspire 5 A514-52G', 'Baru', '10', '7.349.000', 'Acer Shop', 'Siantar', '14.jpg', 'Resolusi : HD 1366 x 768 pixels Ukuran Layar : 14 inches Bobot :         2.1 kg OS : Windows 10 OS Ver : Windows 10 Home CPU : Core i5 Model Prosesor : Intel Core i5-8265U (6MB Cache, 1.6 GHz up to 3.9 GHz) Model GPU :         NVIDIA GeForce MX250', '2021-05-03 22:44:13', '2021-05-03 22:44:13'),
(15, 'Acer Aspire 5 A514-53', 'Baru', '10', '6.466.500', 'Acer Shop', 'Siantar', '15.jpg', 'Resolusi : HD 1366 x 768 pixels Ukuran Layar : 14 inches Bobot :         1.7 kg OS : Windows 10 OS Ver : Windows 10 Home CPU : Core i3 Model Prosesor : Intel Core i3-1005G1 Model GPU : Intel UHD Graphics', '2021-05-03 22:44:51', '2021-05-03 22:44:51'),
(16, 'Dell Inspiron 14-N4050', 'Baru', '10', '7.349.000', 'Dell Shop', 'Jakarta', '17.jpg', 'Resolusi : 1366x768 Ukuran Layar :14,0 inches Bobot : 2.2 kg OS : Windows,linux,Dos OS Ver : Windows 7 Home Premium CPU : Core i3 Model Prosesor : Core i3, Core i5 i3-2350M,i5-2450M Model GPU : Intel HD Graphics 3000 AMD Radeon HD 7450M', '2021-05-03 23:44:36', '2021-05-03 23:44:36'),
(28, 'ASUS', 'axsxsax', 'xsxssx', 'xccc', 'cdcwc', 'cc', 'laptop.jpg', 'ccc', '2021-05-04 21:58:08', '2021-05-04 21:58:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`, `is_admin`, `created_at`, `updated_at`) VALUES
(2, 'admin@abrampane.com', 'samuel w.l simanjuntak', '$2y$10$3oaNq2rLtVKH4E1j5mjJ/eD/vllUHUSphsFkIL957v.pXXnOfYO/6', 1, '2021-05-15 06:24:27', '2021-05-15 06:24:27'),
(3, 'user@abrampane.com', 'samuel w.l simanjuntak', '$2y$10$ODGE57qYmEDs.8/Pi/ZmVudE5.Js7P4ca8kGMzr3pPsqvSR1.X4yK', 0, '2021-05-15 06:25:07', '2021-05-15 06:25:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
