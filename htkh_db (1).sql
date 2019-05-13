-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2019 at 08:07 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `htkh_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bai_thuyet_trinhs`
--

CREATE TABLE `bai_thuyet_trinhs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tenBaiThuyetTrinh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idHoiNghi` bigint(20) NOT NULL,
  `idNguoiThuyetTrinh` bigint(20) NOT NULL,
  `moTa` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `noiDung` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `doDai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangThai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoiGianBatDau` datetime DEFAULT NULL,
  `thoiGianKetThuc` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bai_thuyet_trinhs`
--

INSERT INTO `bai_thuyet_trinhs` (`id`, `tenBaiThuyetTrinh`, `idHoiNghi`, `idNguoiThuyetTrinh`, `moTa`, `noiDung`, `doDai`, `trangThai`, `thoiGianBatDau`, `thoiGianKetThuc`, `created_at`, `updated_at`) VALUES
(2, 'Chiến lược dạy và học tích cực để tạo hứng thú, phát triển năng lực tự học và sáng tạo của sinh viên.', 3, 4, 'Mục tiêu nhằm nâng cao chất lượng dạy học', '<p>Tự học là quá trình mà trong đó chủ thể người học tự biến đổi mình, tự biến đổi các giá trị của mình, tự làm phong phú giá trị của mình bằng các thao tác tư duy và ý chí, nghị lực và sự say mê học tập của cá nhân.</p><p>Tự học trong nhà trường THPT trên thực tế vẫn còn là một vấn đề chưa được thực hiện một cách thường xuyên và phổ biến, mặc dù giáo dục hiện đại đã được đề cập đến từ lâu nay. Không thể phủ nhận trong trường THPT vẫn có những học sinh say mê học hỏi và luôn có ý thức tự học nhưng chưa nhiều. Trong xu thế xã hội ngày càng phát triển, vấn đề tự học trong nhà trường lại càng được quan tâm hơn bao giờ hết. Tự học cần phải trở thành một trong những kỹ năng quan trọng số một của giáo dục, năng lực trong mỗi cá nhân HS. Bản thân người học cần phải làm quen với vấn đề tự học, hình thành một năng lực tự học để sau này có điều kiện học tiếp nữa hay không vẫn có thể tự học hỏi để trau dồi tri thức và thích nghi với thời đại. Cho nên, vấn đề tự học của HS THPT là một vấn đề cần thiết mang tính chiến lược.</p>', '60', 'Chấp nhận', NULL, NULL, '2019-05-04 08:12:40', '2019-05-05 18:43:34'),
(3, 'Phương thức học mới trong giáo dục 4.0', 4, 5, 'Cùng với việc mở ra nhiều cơ hội tiếp cận tri thức, thời đại giáo dục 4.0 cũng thách thức tính chủ động, cạnh tranh của mỗi người.', '<p>Trong Hội thảo quốc tế với chủ đề \"Mô hình đại học 4.0 - Nền tảng giáo dục thế kỷ XXI\" diễn ra tại TP HCM diễn ra năm vừa qua, gần 150 nhà lãnh đạo, giáo sư đến từ các trường đại học danh tiếng đã chia sẻ kinh nghiệm xây dựng mô hình đào tạo đại học chuẩn 4.0 từ các nước tiên tiến trên thế giới.</p><p>Theo đó, giáo sư Gottfried Vossen đến từ Đại học Munster (Đức) đã chia sẻ mô hình đại học 4.0 với 3 vấn đề: Dạy học 4.0 - Nghiên cứu 4.0 - Quản lý 4.0 được áp dụng tại nhiều trường như: Đại học Coventry (Anh), Đại học Complutense de Madrid (Tây Ban Nha), Đại học Yeungnam (Hàn Quốc), Đại học Công nghệ Malaysia, Đại học Lorraine (Pháp)...</p>', '90', 'Chấp nhận', NULL, NULL, '2019-05-04 08:15:08', '2019-05-05 18:43:32'),
(4, 'NGHIÊN CỨU TƯƠNG TÁC GIỮA KHỐI NƯỚC TRONG MÁNG LÊN CẦU MÁNG DẪN NƯỚC BẰNG PHƯƠNG PHÁP FSI', 5, 5, 'oĐưa ra mô hình mô phỏng kết cấu cầu máng tương tác với phần tử nước bằng các phần mềm Sap, Adina.\r\noSo sánh kết quả và đánh giá mức độ chính xác của các phương pháp và đưa ra kiến nghị', '<p>-Với phương pháp sử dụng phần mềm Sap: Phần mềm này có khả năng mô hình được hệ kết cấu cầu máng, tuy nhiên thường chỉ sử dụng trong trạng thái tải trọng bất biến và không có sử thay đổi tải trọng theo thời gian.&nbsp;<br>-Với phương pháp FSI: Phương pháp này có khả năng mô phỏng được sự làm việc của kết cấu cầu máng tương tác với phần tử nước ở trạng thái động và thay đổi theo thời gian.</p><p>&nbsp;Áp dụng mô hình toán trên Flow 3D cho phép kiểm tra chế độ chảy qua tràn trước khi thí nghiệm mô hình vật lý, do đó có thể giảm chi phí nghiên cứu thực nghiệm hoặc đề xuất phương án hợp lý từ giai đoạn thiết kế kỹ thuật.</p>', '30', 'Chấp nhận', NULL, NULL, '2019-05-04 08:18:46', '2019-05-05 18:43:30'),
(5, '123', 3, 4, '123', '<p>123</p>', '12', 'Chấp nhận', NULL, NULL, '2019-05-07 00:52:38', '2019-05-12 21:34:18');

-- --------------------------------------------------------

--
-- Table structure for table `dang_ky_hoi_nghis`
--

CREATE TABLE `dang_ky_hoi_nghis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hoVaTen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soDienThoai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idHoiNghi` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dang_ky_hoi_nghis`
--

INSERT INTO `dang_ky_hoi_nghis` (`id`, `hoVaTen`, `email`, `soDienThoai`, `idHoiNghi`, `created_at`, `updated_at`) VALUES
(1, 'Hà Kiệt Hùng', 'ntd_1@mailinator.com', '0931234567', 3, '2019-05-04 08:22:21', '2019-05-04 08:22:21');

-- --------------------------------------------------------

--
-- Table structure for table `hoi_nghis`
--

CREATE TABLE `hoi_nghis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tenHoiNghi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diaDiem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoiGianBatDau` datetime NOT NULL,
  `thoiGianKetThuc` datetime NOT NULL,
  `moTa` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `noiDung` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soLuongToiDa` int(11) NOT NULL,
  `trangThai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hoi_nghis`
--

INSERT INTO `hoi_nghis` (`id`, `tenHoiNghi`, `diaDiem`, `thoiGianBatDau`, `thoiGianKetThuc`, `moTa`, `noiDung`, `hinh`, `soLuongToiDa`, `trangThai`, `created_at`, `updated_at`) VALUES
(3, 'HỘI THẢO KHOA HỌC QUỐC TẾ \"CÁC PHƯƠNG PHÁP VÀ CHIẾN LƯỢC DẠY HỌC NHẰM CẢI TIẾN GIẢNG DẠY ĐẠI HỌC\"', 'Phòng D201 - D202, Trường Đại học Khoa học Xã hội & Nhân văn  Số 10-12 Đinh Tiên Hoàng, Phường Bến Nghé, Quận 1, Tp. Hồ Chí Minh', '2019-05-14 00:05:00', '2019-05-17 23:05:00', 'Trang bị kỹ năng mềm cho sinh viên trong quá trình giảng dạy các môn lý luận chính trị ở bậc đại học – sự cần thiết và những giải pháp chủ yếu trong giai đoạn hiện nay', '<p>Trang bị kỹ năng mềm cho sinh viên trong quá trình giảng dạy các môn lý luận chính trị ở bậc đại học – sự cần thiết và những giải pháp chủ yếu trong giai đoạn hiện nay.</p><p>hận diện mâu thuẫn giữa quá trình dạy và học với yêu cầu chuẩn đầu ra ở một số trường đại học trên địa bàn Thành phố Hồ Chí Minh hiện nay&nbsp;</p>', '1556981644backdrop_4x12m.jpg', 50, 'Đang mở', '2019-05-04 07:54:04', '2019-05-04 07:54:04'),
(4, 'HỘI NGHỊ KHOA HỌC VÀ CÔNG NGHỆ LẦN THỨ IV', 'Đại học Giao Thông Vận Tải TPHCM Số 2, đường D3, phường 25, quận Bình Thạnh, TPHCM', '2019-05-22 00:05:00', '2019-05-25 23:05:00', 'Hội nghị Khoa học và công nghệ lần thứ IV của Trường Đại học Giao thông vận tải Thành phố Hồ Chí Minh dự kiến tổ chức vào ngày 22/5/2019.', '<p>Hội nghị nhằm đánh giá, tổng kết và thúc đẩy công tác nghiên cứu khoa học – chuyển giao công nghệ trong Nhà trường, đáp ứng ngày càng tốt hơn các yêu cầu về hiện đại hóa, công nghiệp hóa đất nước, đặc biệt trong lĩnh vực giao thông vận tải, đồng thời tạo điều kiện giao lưu, trao đổi học thuật và công nghệ, kỹ thuật giữa Nhà trường cùng các cơ sở đào tạo, nghiên cứu, các doanh nghiệp trong và ngoài nước.</p>', '1556981913UT.jpg', 100, 'Đang mở', '2019-05-04 07:58:33', '2019-05-04 07:58:33'),
(5, 'HỘI NGHỊ KHOA HỌC THƯỜNG NIÊN ĐẠI HỌC THỦY LỢI 2019', 'Trường Đại học Thủy lợi - 175 Tây Sơn - Đống Đa - Hà Nội', '2019-06-15 00:06:00', '2019-06-16 23:06:00', 'Hội nghị Khoa học thường niên trường Đại học Thủy lợi - 2019 được tổ chức vào ngày 15 tháng 6 năm 2019 (dự kiến). Đây là dịp gặp gỡ, giao lưu giữa các nhà khoa học, các nhà quản lý từ các trường đại học, các viện nghiên cứu trong cả nước, đồng thời chia sẻ các kết quả nghiên cứu mới nhất trong lĩnh vực khoa học, công nghệ, kinh tế, xã hội.', '<p><i>Hội nghị thường niên trường Đại học Thủy lợi nhằm giới thiệu và trao đổi các kết quả nghiên cứu, các tiến bộ, các ý tưởng về khoa học công nghệ, ứng dụng và triển khai công nghệ, những yêu cầu cấp bách của thực tiễn thuộc nhiều lĩnh vực khác nhau bao gồm: Công trình; Kỹ thuật Tài nguyên nước; Thủy văn - Thủy lực;Năng lượng; Kinh tế và Quản lý; Cơ khí; Môi trường; Công nghệ thông tin và Tính toán khoa học; Khoa học xã hội; Ngôn ngữ Anh. Ngoài ra, Hội nghị có một tiểu ban Quốc tế dành cho các báo cáo bằng tiếng Anh. Công tác đăng ký, gửi bài, phản biện được tổ chức thực hiện online trên website của Hội nghị tạo điều kiện thuận lợi cho việc trao đổi, chia sẻ ý kiến giữa các tác giả và phản biện. &nbsp;</i></p>', '1556982115truong-dai-hoc-thuy-loi.jpg', 150, 'Đang mở', '2019-05-04 08:01:55', '2019-05-04 08:01:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_01_065418_create_roles_table', 1),
(4, '2019_04_16_020110_create_role_user_table', 1),
(5, '2019_04_18_075438_create_hoi_nghis_table', 1),
(6, '2019_04_18_075941_create_bai_thuyet_trinhs_table', 1),
(7, '2019_04_20_190117_create_dang_ky_hoi_nghis_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `created_at`, `updated_at`, `Name`, `Description`) VALUES
(1, '2019-04-21 03:06:54', '2019-04-21 03:06:54', 'admin', 'A Admin User'),
(2, '2019-04-21 03:06:54', '2019-04-21 03:06:54', 'nguoi_thuyet_trinh', 'Người thuyết trình'),
(3, '2019-04-21 03:06:54', '2019-04-21 03:06:54', 'nguoi_tham_du', 'Người tham dự');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 3, 3, NULL, NULL),
(4, 2, 4, NULL, NULL),
(5, 2, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$dvkNlaixklmNuoATb8zqIOzE0QQp87shy5WA0YODMgPR.Rf3GboqO', NULL, '2019-04-21 03:06:54', '2019-04-21 03:06:54'),
(2, 'Người thuyết trình', 'nguoithuyettrinh@mailinator.com', NULL, '$2y$10$ZjB/L30eJqwxz4gF0LZaVOXfo2emA09Lyanx0wS9ZE9D/9HpxNi32', NULL, '2019-04-21 03:06:54', '2019-04-21 03:06:54'),
(3, 'Người tham dự', 'nguoithamdu@mailinator.com', NULL, '$2y$10$0ORffe/mYaQp2VUppUExHevwJyKvbatM5/vc9M2OCIi6jzBnB1a5.', NULL, '2019-04-21 03:06:54', '2019-04-21 03:06:54'),
(4, 'PGS. TS. Bùi Xuân Lâm', 'ntt_1@mailinator.com', NULL, '$2y$10$Sw6pP7GrmJj25nyDV5Ax1e44/B4SDxCLcY/I9krUwco2A1o/LlGy.', NULL, '2019-05-04 08:10:22', '2019-05-04 08:10:22'),
(5, 'PGS. TS. Thái Văn Nam', 'ntt_2@mailinator.com', NULL, '$2y$10$Pf5G6JC7YiF10R20rpiYMebnjtHQPXlc5fsBNzDuXPEbkxqCExATe', NULL, '2019-05-04 08:13:42', '2019-05-04 08:13:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bai_thuyet_trinhs`
--
ALTER TABLE `bai_thuyet_trinhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dang_ky_hoi_nghis`
--
ALTER TABLE `dang_ky_hoi_nghis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoi_nghis`
--
ALTER TABLE `hoi_nghis`
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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
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
-- AUTO_INCREMENT for table `bai_thuyet_trinhs`
--
ALTER TABLE `bai_thuyet_trinhs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dang_ky_hoi_nghis`
--
ALTER TABLE `dang_ky_hoi_nghis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hoi_nghis`
--
ALTER TABLE `hoi_nghis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
