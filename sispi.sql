-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 23 Jul 2022 pada 06.53
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sispi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin__dokumen`
--

CREATE TABLE `admin__dokumen` (
  `id` char(36) NOT NULL,
  `nomor_spm` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `besaran_spm` varchar(50) NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `id_jenisdokumen` char(36) NOT NULL,
  `id_kelengkapan` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin__dokumen`
--

INSERT INTO `admin__dokumen` (`id`, `nomor_spm`, `tanggal`, `besaran_spm`, `uraian`, `id_jenisdokumen`, `id_kelengkapan`, `file`, `created_at`, `updated_at`) VALUES
('96d0b066-9ef0-4610-9254-df4615367833', '001', '2022-07-19', '1', 'dokumen Pertama', '96b02781-8a66-4b43-babc-77181e76168d', 'SPM,Penilaian SKP dari Kepegawaian', 'app/dokumenfile/1658230568-file-01zZv.pdf', '2022-07-19 04:36:08', '2022-07-19 04:36:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin__jenisdokumen`
--

CREATE TABLE `admin__jenisdokumen` (
  `id` char(36) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin__jenisdokumen`
--

INSERT INTO `admin__jenisdokumen` (`id`, `nama`, `created_at`, `updated_at`) VALUES
('96b02758-39af-47f0-b7a7-499804b44282', 'SPM GAJI PNS DAN NON PNS', '2022-07-03 00:26:25', '2022-07-03 00:26:25'),
('96b02781-8a66-4b43-babc-77181e76168d', 'TUNJANGAN DAN HONOR RUTIN', '2022-07-03 00:26:52', '2022-07-03 00:26:52'),
('96b02794-6079-4ffe-bd2a-fbdf2a032886', 'UANG MAKAN', '2022-07-03 00:27:04', '2022-07-03 00:27:04'),
('96b027e8-c342-4c17-a541-cf39e21d38cc', 'TUNJANGAN KINERJA', '2022-07-03 00:27:59', '2022-07-03 00:27:59'),
('96b02a1d-7d35-4814-8665-17779e0b9b63', 'BELANJA KEPERLUAN SEHARI-HARI PERKANTORAN DAN ATK UMUM (GUP)', '2022-07-03 00:34:09', '2022-07-03 00:34:09'),
('96b02acf-b992-4710-8afa-fecdf9a1638a', 'LEMBUR SATPAM', '2022-07-03 00:36:06', '2022-07-03 00:36:06'),
('96b02af8-897a-41d1-9a20-59ca6fa37681', 'JASA PENYEDIA TENAGA KERJA', '2022-07-03 00:36:33', '2022-07-03 00:36:33'),
('96b02bf8-819b-4598-adbd-da6126f0bbd9', 'KEGIATAN JURUSAN DAN UNIT KERJA BAHAN PRAKTIKUM, PKL, KUNJUNGAN INDUSTRI, ATK, KONSUMSI, DOSEN PART TIME, KEG TUGAS AKHIR, BANTUAN TUGAS AKHIR, BANTUAN UJI KOMPETENSI, WARKSHOP, WEBINAR', '2022-07-03 00:39:21', '2022-07-03 00:39:21'),
('96b02c55-dfa2-4357-983f-f3f695c91474', 'BANTUAN STUDI LANJUTAN DOSEN DAN TENAGA KEPENDIDIKAN', '2022-07-03 00:40:22', '2022-07-03 00:40:22'),
('96b02cb1-e639-4328-87d6-edcf30be4a05', 'BELANJA PEMELIHARAAN GEDUNG DAN HALAMAN PENGADAAN BARANG DAN JASA DIBAWAH 50 JUTA', '2022-07-03 00:41:22', '2022-07-03 00:41:22'),
('96b02cf1-113d-4ff3-91f8-4334dd22e259', 'LANGGANAN INTERNET, SIAKAD, LISTRIK, AIR, SURAT KABAR', '2022-07-03 00:42:04', '2022-07-03 00:42:04'),
('96b02d02-b7c8-40a6-b790-775c932d66e6', 'BANTUAN PELATIHAN', '2022-07-03 00:42:15', '2022-07-03 00:42:15'),
('96b02d32-7fdf-4b88-95e2-9eb70419ea23', 'KEGIANTAN KEMAHASISWAAN', '2022-07-03 00:42:46', '2022-07-03 00:42:46'),
('96b02dc6-10c0-4fba-adaa-6b233bf4d345', 'PEMELIHARAAN PERALATAN DAN MESIN (INVENTARIS, AC, PC, KENDARAAN, PERINTER, DLL) TERMASUK PEMELIHARAAN LAB DAN BENGKEL PEMELIHARAAN JARINGAN', '2022-07-03 00:44:23', '2022-07-03 00:44:23'),
('96b02de7-020f-4940-af65-18bc9d96ede3', 'HONORARIUM KEGIATAN', '2022-07-03 00:44:45', '2022-07-03 00:44:45'),
('96b03289-a2b7-457b-ae10-04f6d2bc7dd2', 'BANTUAN PENELITIAN DAN PKM', '2022-07-03 00:57:42', '2022-07-03 00:57:42'),
('96b0329c-1094-44db-8069-2076e15bd2c1', 'KONSUMSI RAPAT', '2022-07-03 00:57:54', '2022-07-03 00:57:54'),
('96b032b5-6fde-4559-9720-79d1ba78d710', 'PENYUSUNAN DOKUMEN', '2022-07-03 00:58:11', '2022-07-03 00:58:11'),
('96b032f6-9da8-4ebb-ac14-fc1167eec449', 'BELANJA MODAL/PEMELIHARAAN YANG DIKONTRAKKAN', '2022-07-03 00:58:54', '2022-07-03 00:58:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin__jenissurat`
--

CREATE TABLE `admin__jenissurat` (
  `id` char(36) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin__jenissurat`
--

INSERT INTO `admin__jenissurat` (`id`, `nama`, `created_at`, `updated_at`) VALUES
('96b0c24d-532e-441c-aa93-4e1aeace1e00', 'Peraturan', '2022-07-03 07:39:42', '2022-07-03 07:39:42'),
('96b0c265-25a2-4c3b-b8ef-8eeb71179b87', 'Keputusan', '2022-07-03 07:39:58', '2022-07-03 07:39:58'),
('96b0c274-d742-4f78-bfca-291e66d52a24', 'Surat edaran', '2022-07-03 07:40:08', '2022-07-03 07:40:08'),
('96b0c283-6fa5-496e-9913-b0babee8b20a', 'Surat tugas', '2022-07-03 07:40:18', '2022-07-03 07:40:18'),
('96b0c2bf-a21b-40fb-8b74-665ec5b30488', 'Memo/disposisi', '2022-07-03 07:40:57', '2022-07-03 14:45:23'),
('96b0c496-63ba-409c-8f43-6202cdc65c5b', 'Nota kesepahaman', '2022-07-03 07:46:06', '2022-07-03 07:46:06'),
('96b0c4af-82d2-4e79-a7a6-9b888cde5372', 'Surat perjanjian', '2022-07-03 07:46:22', '2022-07-03 07:46:22'),
('96b0c4c2-7b8d-435f-83db-b1b1fdbd5342', 'Surat kuasa', '2022-07-03 07:46:34', '2022-07-03 07:46:34'),
('96b0c4d7-6f46-4f84-a516-b1386f519271', 'Surat pernyataan', '2022-07-03 07:46:48', '2022-07-03 07:46:48'),
('96b0c4ed-0f1e-4259-9810-e7c3060ac909', 'Berita acara', '2022-07-03 07:47:02', '2022-07-03 07:47:02'),
('96b0c4fe-70e5-43ec-b355-a4c7b44e6caf', 'Pengumuman', '2022-07-03 07:47:14', '2022-07-03 07:47:14'),
('96b0c515-251a-41dd-a892-3693ad565d37', 'Laporan Perjalanan dinas', '2022-07-03 07:47:29', '2022-07-03 07:47:29'),
('96b0c52a-0bbf-4140-ac06-975d97a66da7', 'Notula rapat', '2022-07-03 07:47:42', '2022-07-03 07:47:42'),
('96b0c53f-851c-498e-b210-a57b58354a9f', 'Siaran pers (Press release)', '2022-07-03 07:47:56', '2022-07-03 07:47:56'),
('96b0c55a-75ab-4692-b527-c4a1f1270dc3', 'Piagam penghargaan dan sertifikat', '2022-07-03 07:48:14', '2022-07-03 07:48:14'),
('96b0c571-7fbd-4fb5-89c4-c51ed22d099d', 'Naskah dinas lainnya', '2022-07-03 07:48:29', '2022-07-03 07:48:29'),
('96b0c58a-a5bd-4c37-8e5b-cef90d60c14b', 'Akreditasi', '2022-07-03 07:48:46', '2022-07-03 07:48:46'),
('96b0c5a2-96e3-4294-b5db-33c163d0c51f', 'Bantuan Pendidikan (BP)', '2022-07-03 07:49:01', '2022-07-03 07:49:01'),
('96b0c5c6-e854-4738-b0db-f1ea16546f71', 'Hubungan Masyarakat (HM)', '2022-07-03 07:49:25', '2022-07-03 07:49:25'),
('96b0c5d9-4eb2-4f01-b174-590cac168d33', 'Hukum (HK)', '2022-07-03 07:49:37', '2022-07-03 07:49:37'),
('96b0c5ec-c544-43b4-bece-719cfd0ebb37', 'Kemahasiswaan (KM)', '2022-07-03 07:49:50', '2022-07-03 07:49:50'),
('96b0c5fd-6a87-4d7d-b0b8-4868eb1980ae', 'Kepegawaian (KP)', '2022-07-03 07:50:01', '2022-07-03 07:50:01'),
('96b0c60e-2da6-44c5-bc4f-e9e9079810ae', 'Kerja Sama (KS)', '2022-07-03 07:50:12', '2022-07-03 07:50:12'),
('96b0c61d-dbb5-4ba9-b884-7d598222fb41', 'Kerumahtanggaan (RT)', '2022-07-03 07:50:22', '2022-07-03 07:50:22'),
('96b0c630-06a3-46fa-9882-8d9a625958c1', 'Ketatausahaan (TU)', '2022-07-03 07:50:34', '2022-07-03 07:50:34'),
('96b0c643-7f6a-4e0a-9aaa-8060cc3d231a', 'Keuangan (KU)', '2022-07-03 07:50:47', '2022-07-03 07:50:47'),
('96b0c654-7d09-418a-82af-6bda0af62388', 'Kurikulum (KR)', '2022-07-03 07:50:58', '2022-07-03 07:50:58'),
('96b0c666-00cc-42ea-adb3-110bd0c17302', 'Organisasi dan Tata Laksana (OT)', '2022-07-03 07:51:09', '2022-07-03 07:51:09'),
('96b0c6b2-1389-4f38-b49a-06b3125c9339', 'Pendidikan dan Pelatihan (PP)', '2022-07-03 07:51:59', '2022-07-03 07:51:59'),
('96b0c6c4-759c-4c1f-b428-496ba3cef1bc', 'Pendidik dan Tenaga Kependidikan (PT)', '2022-07-03 07:52:11', '2022-07-03 07:52:11'),
('96b0c6d6-e01e-47c2-9837-94adf9cd0891', 'Penelitian dan Pengembangan (PG)', '2022-07-03 07:52:23', '2022-07-03 07:52:23'),
('96b0c6eb-52f9-415c-80d5-131083134f2c', 'Pengabdian kepada Masyarakat (AM)', '2022-07-03 07:52:37', '2022-07-03 07:52:37'),
('96b0c6fd-f4b6-4d44-af77-08c741aa97a5', 'Pengawasan (WS)', '2022-07-03 07:52:49', '2022-07-03 07:52:49'),
('96b0c70e-6a5f-4e7c-bbd9-fe7599fac2f5', 'Penjaminan Mutu (PJ)', '2022-07-03 07:53:00', '2022-07-03 07:53:00'),
('96b0c71e-d6de-4b85-b6e2-ade0d5448242', 'Perbukuan (PB)', '2022-07-03 07:53:10', '2022-07-03 07:53:10'),
('96b0c738-e3f0-4376-b89b-1238d3803716', 'Perencanaan dan Penganggaran (PR)', '2022-07-03 07:53:28', '2022-07-03 07:53:28'),
('96b0c749-687c-40d4-9ef7-50cc286702e1', 'Perlengkapan (LK)', '2022-07-03 07:53:38', '2022-07-03 07:53:38'),
('96b0c761-3548-4945-b58d-0d8a6813508c', 'Publikasi Ilmiah (PI)', '2022-07-03 07:53:54', '2022-07-03 07:53:54'),
('96b0c773-761f-4d68-a5b1-4546e5395b33', 'Sarana dan Prasarana Pendidikan (SP)', '2022-07-03 07:54:06', '2022-07-03 07:54:06'),
('96b0c785-f9d2-46c1-999a-a5b7f59404ec', 'Teknologi Informasi dan Komunikasi (TI)', '2022-07-03 07:54:18', '2022-07-03 07:54:18'),
('96b0c7ee-6ee0-4fc7-a0d1-133ded1b1058', 'Keputusan (KP)', '2022-07-03 07:55:27', '2022-07-03 07:55:27'),
('96b0c7fd-88fa-4bb1-9b7a-d0a7a3f4286f', 'Surat Tugas (ST)', '2022-07-03 07:55:36', '2022-07-03 07:55:36'),
('96b0c885-02dc-4f16-9a56-073682d32352', 'Surat Dinas (SK)', '2022-07-03 07:57:05', '2022-07-03 07:57:05'),
('96b0c895-fa89-454c-bb90-f0063c6e5f7e', 'Surat Kuasa (SU)', '2022-07-03 07:57:16', '2022-07-03 07:57:16'),
('96b0c8a6-ec55-4d44-a320-599cfaef0eb3', 'Surat Pernyataan (SP)', '2022-07-03 07:57:27', '2022-07-03 07:57:27'),
('96b0c8b6-1484-4593-a290-5514f0c67a9d', 'Berita Acara (BA)', '2022-07-03 07:57:37', '2022-07-03 07:57:37'),
('96b0c8c9-cca1-4531-9299-506e22d78cf4', 'Pengumuman (PE)', '2022-07-03 07:57:50', '2022-07-03 07:57:50'),
('96b0c8dc-71cf-46d5-b6c7-4223aa36eee0', 'Notula rapat (NR)', '2022-07-03 07:58:03', '2022-07-03 07:58:03'),
('96b0c8fd-1d0e-4513-aa7e-810c5b599173', 'Siaran Pers (PR)', '2022-07-03 07:58:24', '2022-07-03 07:58:24'),
('96b0c912-2b2d-4eff-9590-f58970318e4d', 'Piagam penghargaan/sertifikat (PS)', '2022-07-03 07:58:38', '2022-07-03 07:58:38'),
('96b0c95b-39f5-47dc-935d-1603ede1ec81', 'Naskah dinas lainnya', '2022-07-03 07:59:26', '2022-07-03 07:59:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin__kelengkapan`
--

CREATE TABLE `admin__kelengkapan` (
  `id` char(36) NOT NULL,
  `id_jenissurat` varchar(255) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin__kelengkapan`
--

INSERT INTO `admin__kelengkapan` (`id`, `id_jenissurat`, `nama`, `created_at`, `updated_at`) VALUES
('96b0cb03-3041-41d9-aeec-3a6ebb426258', NULL, 'SPM', '2022-07-03 08:04:03', '2022-07-03 08:04:03'),
('96b0cb15-4d79-4377-8f63-221bdb56257a', NULL, 'SPP', '2022-07-03 08:04:15', '2022-07-03 08:04:15'),
('96b0cb34-b96a-4158-a1a6-c9ad9cb1136c', NULL, 'Daftar Lowongan  SPM', '2022-07-03 08:04:36', '2022-07-03 08:04:36'),
('96b0cb56-b5a3-49c9-933f-1e885f1b8acf', NULL, 'Daftar Gaji (Dari Aplikasi)', '2022-07-03 08:04:58', '2022-07-03 08:04:58'),
('96b0cc3f-0ff8-4556-a40d-26135c1f6d51', NULL, 'Daftar Gaji (Excel)', '2022-07-03 08:07:30', '2022-07-03 08:07:30'),
('96b0cdcf-2f77-4238-ad74-3d429116dbd0', NULL, 'SK Direktur (awal tahun) dan SK PPK Gaji Non PNS', '2022-07-03 08:11:53', '2022-07-03 08:11:53'),
('96b0ce43-1311-4230-827f-622ee9cb5289', NULL, 'SSP (Jika Ada Pajak)', '2022-07-03 08:13:09', '2022-07-04 02:08:52'),
('96b0cea2-c5a0-4f4a-80c9-9584482f22c6', NULL, 'Daftar Lampiran (Jika LS Penerima)', '2022-07-03 08:14:11', '2022-07-03 08:14:11'),
('96b0cedb-02f4-412f-aeb8-125c66d420bb', NULL, 'Daftar Tunjangan dan Non Honor (Excel)', '2022-07-03 08:14:48', '2022-07-03 08:14:48'),
('96b0d1af-ddf9-4407-9436-014f945d0288', NULL, 'SK Direktur (awal tahun) dan SK PPK Tunjangan dan Honor', '2022-07-03 08:22:43', '2022-07-03 08:22:43'),
('96b0d2b2-98c0-40a6-9e10-bbb76eeb8a7c', NULL, 'Daftar Lmapiran SPM', '2022-07-03 08:25:33', '2022-07-03 08:25:33'),
('96b0d365-f000-4987-a3e5-554384fb0e7e', NULL, 'Daftar Uang Makan (Dari Excel untuk uang makan PNS dipekerjakan, dari Aplikasi untuk PNS Politap)', '2022-07-03 08:27:30', '2022-07-03 08:27:30'),
('96b0d3fe-6af8-41ca-b839-df050a60baf3', NULL, 'Rekap Absensi (Keuangan)', '2022-07-03 08:29:10', '2022-07-03 08:29:10'),
('96b0d74c-254a-459b-b1ef-c12ef2ceffcc', NULL, 'Daftar Absensi (Dari Kepegawaian)', '2022-07-03 08:38:25', '2022-07-03 08:38:25'),
('96b0d773-4146-4a9c-b912-04283eed27cc', NULL, 'SK PPK', '2022-07-03 08:38:50', '2022-07-03 08:38:50'),
('96b0d7b1-d132-499c-ba65-60a3211357c3', NULL, 'SSP (Pajak)', '2022-07-03 08:39:31', '2022-07-04 02:08:43'),
('96b0d857-3e24-4dff-8c7b-c360c4e88ab1', NULL, 'Penilaian SKP dari Kepegawaian', '2022-07-03 08:41:20', '2022-07-03 08:41:20'),
('96b0d9c0-2d97-4d74-9610-03ab2d8011e5', NULL, 'Surat Ajuan, RAB dan Disposisi', '2022-07-03 08:45:16', '2022-07-03 08:45:16'),
('96b0d9ee-b0a0-4e6d-a7c1-e7462414d246', NULL, 'Nota/Kwitansi', '2022-07-03 08:45:47', '2022-07-03 08:45:47'),
('96b0da2e-5646-4341-a870-6016c01ce2b6', NULL, 'SPBy', '2022-07-03 08:46:28', '2022-07-03 08:46:28'),
('96b0da83-7d4a-41de-8ce9-fa6c6f6e4dd8', NULL, 'Bukti Pembayaran Pajak (jika ada)', '2022-07-03 08:47:24', '2022-07-03 08:47:24'),
('96b0dc12-1e3e-4ff1-9947-686f9667a01b', NULL, 'Surat Pesanan (untuk belanja diatas 5 Juta dalam 1 toko)', '2022-07-03 08:51:45', '2022-07-03 08:51:45'),
('96b0dc42-0e14-476e-adfc-097c48d4f609', NULL, 'Dokumentasi', '2022-07-03 08:52:17', '2022-07-03 08:52:17'),
('96b0dcb3-28ae-4255-acb9-578223e3288b', NULL, 'Surat ajuan dan Disposisi', '2022-07-03 08:53:31', '2022-07-03 08:53:31'),
('96b0dcdc-fd7b-4b5e-8241-7d341d24c8ce', NULL, 'Daftar Lembur Satpan', '2022-07-03 08:53:58', '2022-07-03 08:53:58'),
('96b0dd19-43e3-431e-96f1-1f675092080f', NULL, 'SK Direktur', '2022-07-03 08:54:38', '2022-07-03 08:54:38'),
('96b0e074-5ddd-4e2a-b511-1dcc5ee48c74', NULL, 'Laporan Penyedia Tenaga Kerja', '2022-07-03 09:04:01', '2022-07-03 09:04:01'),
('96b0e0a0-9386-4006-9d69-dba87887c0c0', NULL, 'Surat Pengajuan dan Disposisi', '2022-07-03 09:04:30', '2022-07-03 09:04:30'),
('96b0e0ca-2dc9-4465-83bc-378309967d84', NULL, 'TOR DAN RAB', '2022-07-03 09:04:57', '2022-07-03 09:04:57'),
('96b0e11e-a3e7-45c6-9563-8797a064dd51', NULL, 'LAPORAN KEGIATAN TERMASUK SPTJMM', '2022-07-03 09:05:52', '2022-07-03 09:05:52'),
('96b0e51d-ae9e-4b9b-bf8e-27a434b94b31', NULL, 'DAFTAR HONOR, SK DIREKTUR DAN SK PPK (UNTUK HONOR)', '2022-07-03 09:17:03', '2022-07-03 09:17:03'),
('96b0e52f-d91e-48c9-91ae-3c1422606397', NULL, 'PAJAK', '2022-07-03 09:17:15', '2022-07-03 09:17:15'),
('96b1b49a-f0ad-4fee-8e27-12ec49b746b6', NULL, 'SURAT PENGAJUAN PRIBADI/JURUSAN DAN DISPOSISI', '2022-07-03 18:57:14', '2022-07-03 18:57:14'),
('96b1b4dd-57b4-4cd8-b558-4c2da325c37d', NULL, 'NILAI TRANSKRIP TERAKHIR', '2022-07-03 18:57:57', '2022-07-03 18:57:57'),
('96b1b4fd-1ae2-4459-8eca-b35fabb98b4d', NULL, 'BUKTI PEMBAYARAN SPP', '2022-07-03 18:58:18', '2022-07-03 18:58:18'),
('96b1b587-37e2-40e2-adfa-827ddbc6969b', NULL, 'BAP, BAST, BAPP', '2022-07-03 18:59:49', '2022-07-03 18:59:49'),
('96b1b5ac-251d-4561-b1f7-5f132a0bee5a', NULL, 'KWITANSI, PENAWARAN DAN RAB', '2022-07-03 19:00:13', '2022-07-03 19:00:13'),
('96b1b5cf-94ef-40e5-86a8-8bad7f6ed2fe', NULL, 'SURAT PENUNJUKAN DARI PPK', '2022-07-03 19:00:36', '2022-07-03 19:00:36'),
('96b1b5fe-6fdb-4728-b17b-78268d965a8e', NULL, 'IJIN USAHA, DLL KELENGKAPAN PERUSAHAAN', '2022-07-03 19:01:07', '2022-07-03 19:01:07'),
('96b1b624-7b3f-46ab-bc28-19279b5e1e36', NULL, 'SURAT TAGIHAN DAN DISPOSISI DIREKTUR', '2022-07-03 19:01:32', '2022-07-03 19:01:32'),
('96b1b6b0-96b0-4ec4-8333-5312b763f00c', NULL, 'PENAWARAN DARI PELAKSANAN KEGIATAN (EKSTERNAL)', '2022-07-03 19:03:04', '2022-07-03 19:03:04'),
('96b1b6dc-b55e-44bc-96d4-1887c81f560b', NULL, 'KEITANSI DARI PELAKSANA KEGIATAN', '2022-07-03 19:03:32', '2022-07-03 19:03:32'),
('96b1b70c-180d-4c4b-9c69-d36233d3285c', NULL, 'LAPORAN KEGIATAN DAN DOKUMENTASI', '2022-07-03 19:04:04', '2022-07-03 19:04:04'),
('96b1b773-9c06-492c-a58d-0dc8789f2bba', NULL, 'SURAT PENGAJUAN DAN PERSONAL/TOR DILENGKAPI DISPOSISI', '2022-07-03 19:05:11', '2022-07-03 19:05:11'),
('96b1b798-788b-46f5-9cc5-30108c8e4e4e', NULL, 'LAMPIRAN SPM', '2022-07-03 19:05:36', '2022-07-03 19:05:36'),
('96b1b7be-afaa-47f2-ac19-f877e808fcdf', NULL, 'SPP DAN SPBy', '2022-07-03 19:06:01', '2022-07-03 19:06:01'),
('96b1b80d-0ce8-4593-a12a-8c5b09d2317d', NULL, 'SURAT PESANAN/ LAPORAN (UNTUK BELANJA DI ATAS 5 JUTA)', '2022-07-03 19:06:52', '2022-07-03 19:06:52'),
('96b1b830-1983-4c94-968d-0513c0e43f6a', NULL, 'BERITA ACARA PEMERIKSAAN DAN SERAH TERIMA', '2022-07-03 19:07:15', '2022-07-03 19:07:15'),
('96b1b951-907e-458f-be80-020095f4cee1', NULL, 'DAFTAR HONORARIUM', '2022-07-03 19:10:25', '2022-07-03 19:10:25'),
('96b1ba67-7bb3-4479-871a-659a65a9e881', NULL, 'DAFTAR PENERIMA BANTUAN (BERTANDA TANGAN)', '2022-07-03 19:13:27', '2022-07-03 19:13:27'),
('96b1bab5-3d5f-4563-9580-08601b69b221', NULL, 'LAPORAN KEGIATAN PENELITIAN DAN PKM (SPTJM DAN DOKUMENTASI)', '2022-07-03 19:14:18', '2022-07-03 19:14:18'),
('96b1baf5-05cd-42f8-9275-2d66fb72a738', NULL, 'UNDANGAN DAN DAFTAR UNDANGAN', '2022-07-03 19:14:59', '2022-07-03 19:14:59'),
('96b1bb0b-d142-4e92-88ad-5bdc6426ee7d', NULL, 'ABSENSI', '2022-07-03 19:15:14', '2022-07-03 19:15:14'),
('96b1bb8a-c341-401f-bb87-b69a1b38f7c6', NULL, 'NOTULEN', '2022-07-03 19:16:38', '2022-07-03 19:16:38'),
('96b1bc4d-3d61-47b9-83e7-b149abc1b822', NULL, 'BIODATA PENYUSUN DOKUMEN (JIKA DI SARANKAN PADA PERORANGAN)', '2022-07-03 19:18:45', '2022-07-03 19:18:45'),
('96b1bdca-240e-4c7a-bb9e-7fd4c6c006e2', NULL, 'DAFTAR TANDA TERIMA DANA/KWITANSI', '2022-07-03 19:22:55', '2022-07-03 19:22:55'),
('96b1be1b-9f29-468f-a7e4-e5edf190ecdd', NULL, 'DOKUMEN YANG DIBUAT', '2022-07-03 19:23:48', '2022-07-03 19:23:48'),
('96b1be5c-d713-4749-8a98-05550b481aeb', NULL, 'KONTRAK/SPK/SP', '2022-07-03 19:24:31', '2022-07-03 19:24:31'),
('96b1beb2-29fc-4b88-a3c1-56664df59832', NULL, 'SURAT PERMOHONAN PEMBAYARAN DR SUPPLIER', '2022-07-03 19:25:27', '2022-07-03 19:25:27'),
('96b1bfac-3ca9-421b-a418-cfd6461f7dc1', NULL, 'KWITANSI', '2022-07-03 19:28:11', '2022-07-03 19:28:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin__suratkeluar`
--

CREATE TABLE `admin__suratkeluar` (
  `id` char(36) NOT NULL,
  `nomorsurat` varchar(50) DEFAULT NULL,
  `perihal` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `id_jenissurat` char(36) DEFAULT NULL,
  `id_kelengkapan` varchar(50) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `keterangan` text,
  `tujuan` varchar(50) DEFAULT NULL,
  `status` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin__suratkeluar`
--

INSERT INTO `admin__suratkeluar` (`id`, `nomorsurat`, `perihal`, `tanggal`, `id_jenissurat`, `id_kelengkapan`, `file`, `keterangan`, `tujuan`, `status`, `created_at`, `updated_at`) VALUES
('96d0af89-68fd-4172-b806-80cf6b1e8cef', '1/PL39.18/../../2022', 'Surat Pertama', '2022-07-19', '96b0c24d-532e-441c-aa93-4e1aeace1e00', NULL, 'app/suratkeluarfile/1658230423-file-65WSP.docx', NULL, 'fathur Rahman', 3, '2022-07-19 04:33:43', '2022-07-19 04:34:26'),
('96d0afbc-2990-4132-8eac-15b0abcd4ba4', '2/PL39.18/../../2022', 'Surat Kedua', '2022-07-19', '96b0c265-25a2-4c3b-b8ef-8eeb71179b87', NULL, 'app/suratkeluarfile/1658230457-file-fLaQI.docx', NULL, 'Fathur Rahman', 1, '2022-07-19 04:34:17', '2022-07-19 04:34:17'),
('96d247a5-11d6-4d61-8b11-956af9c1755f', '3/PL39.18/../../2022', 'keterangan', '2022-07-20', '96b0c283-6fa5-496e-9913-b0babee8b20a', NULL, 'app/suratkeluarfile/1658298945-file-JbgpW.pdf', 'selesai', 'Baak', 2, '2022-07-19 23:34:52', '2022-07-19 23:35:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin__suratmasuk`
--

CREATE TABLE `admin__suratmasuk` (
  `id` char(36) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nomor_surat` varchar(50) DEFAULT NULL,
  `perihal` varchar(50) DEFAULT NULL,
  `asal_surat` varchar(50) DEFAULT NULL,
  `id_jenissurat` char(36) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin__suratmasuk`
--

INSERT INTO `admin__suratmasuk` (`id`, `tanggal`, `nomor_surat`, `perihal`, `asal_surat`, `id_jenissurat`, `file`, `created_at`, `updated_at`) VALUES
('96d0af24-2053-44a7-9ccc-e92276a8bd8d', '2022-07-19', '1.010/DP-KM/IX/2022', 'Surat Pertama', 'Fathur Rahaman', '96b0c24d-532e-441c-aa93-4e1aeace1e00', 'app/surat-masukfile/1658230356-file-zU6Jv.pdf', '2022-07-19 04:32:37', '2022-07-19 04:32:37'),
('96d0af5a-dc84-43dc-8d6a-cc6e39e0171d', '2022-07-19', '2.010/DP-KM/IX/2022', 'Surat Kedua', 'Fathur Rahman', '96b0c265-25a2-4c3b-b8ef-8eeb71179b87', 'app/surat-masukfile/1658230393-file-iERoZ.pdf', '2022-07-19 04:33:13', '2022-07-19 04:33:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin__template_surat`
--

CREATE TABLE `admin__template_surat` (
  `id` char(36) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `file_template_surat` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin__template_surat`
--

INSERT INTO `admin__template_surat` (`id`, `nama`, `file_template_surat`, `created_at`, `updated_at`) VALUES
('96b70526-6c42-4ab8-970b-09c6beb8b5ca', 'Berita Acara', 'app/template-suratfile_template_surat/1657128094-file_template_surat-de6go.docx', '2022-07-06 10:21:36', '2022-07-06 10:21:36'),
('96b70545-ad16-416f-93a8-07ed8c6a5eac', 'Keputusan', 'app/template-suratfile_template_surat/1657128116-file_template_surat-33cVb.docx', '2022-07-06 10:21:56', '2022-07-06 10:21:56'),
('96b70561-4f85-4f79-8df9-74cc4161759c', 'Memo Disposisi', 'app/template-suratfile_template_surat/1657128134-file_template_surat-JTXiM.docx', '2022-07-06 10:22:14', '2022-07-20 06:34:11'),
('96b7058f-5f67-4e05-9939-858aabb0a855', 'Nota Kesekatan Bersama', 'app/template-suratfile_template_surat/1657128164-file_template_surat-uoCgI.docx', '2022-07-06 10:22:44', '2022-07-06 10:22:44'),
('96b705ad-9e79-4f88-9fe8-f062360f788f', 'Notula Rapat', 'app/template-suratfile_template_surat/1657128184-file_template_surat-NaiDo.docx', '2022-07-06 10:23:04', '2022-07-06 10:23:04'),
('96b705c4-5b75-4a13-8e7a-93cca10d82a5', 'Pengumuman', 'app/template-suratfile_template_surat/1657128199-file_template_surat-h4Hvv.docx', '2022-07-06 10:23:19', '2022-07-06 10:23:19'),
('96b705d8-7d48-4ff9-a611-b7fcccd812a0', 'Peraturan', 'app/template-suratfile_template_surat/1657128212-file_template_surat-teUD1.docx', '2022-07-06 10:23:32', '2022-07-06 10:23:32'),
('96b70603-0672-4626-b709-a1fbb7eefebd', 'Piagam Penghargaan atau Sertifikat', 'app/template-suratfile_template_surat/1657128240-file_template_surat-MZjNP.docx', '2022-07-06 10:24:00', '2022-07-06 10:24:00'),
('96b7061d-fb0f-4995-8e9a-5a841d244551', 'Siaran pers (Press release)', 'app/template-suratfile_template_surat/1657128258-file_template_surat-FHau4.docx', '2022-07-06 10:24:18', '2022-07-06 10:24:18'),
('96b706ab-b2eb-486b-80a6-63e08d6a4b1e', 'Surat dinas (antara lain undangan, permohonan, pengantar, keterangan)', 'app/template-suratfile_template_surat/1657128350-file_template_surat-TyKgv.docx', '2022-07-06 10:25:50', '2022-07-06 10:25:50'),
('96b706cb-073d-40da-9a4d-caf67da5b627', 'Surat Dinas', 'app/template-suratfile_template_surat/1657128371-file_template_surat-S6oqe.docx', '2022-07-06 10:26:11', '2022-07-06 10:26:11'),
('96b706e0-d1bb-49eb-b5fb-d41b3e35b9a0', 'Surat Edaran', 'app/template-suratfile_template_surat/1657128385-file_template_surat-y8YE5.docx', '2022-07-06 10:26:25', '2022-07-06 10:26:25'),
('96b706f4-ddd6-4f3e-9b82-d8164ea31076', 'Surat Kuasa', 'app/template-suratfile_template_surat/1657128398-file_template_surat-Adk66.docx', '2022-07-06 10:26:38', '2022-07-06 10:26:38'),
('96b70715-d3b2-40f5-a391-412897b85e62', 'Surat Perjanjian', 'app/template-suratfile_template_surat/1657128420-file_template_surat-HaGWk.docx', '2022-07-06 10:27:00', '2022-07-06 10:27:00'),
('96b7072a-1024-4ba7-b742-d8c4f5ecebb9', 'Surat Pernyataan', 'app/template-suratfile_template_surat/1657128433-file_template_surat-qGE3y.docx', '2022-07-06 10:27:13', '2022-07-06 10:27:13'),
('96b7073e-86c8-4636-98e1-a0574cc2b092', 'Surat Tugas', 'app/template-suratfile_template_surat/1657128447-file_template_surat-vzdqf.docx', '2022-07-06 10:27:27', '2022-07-06 10:27:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluhan__managment_data__jenislaporan`
--

CREATE TABLE `keluhan__managment_data__jenislaporan` (
  `id` char(36) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keluhan__managment_data__jenislaporan`
--

INSERT INTO `keluhan__managment_data__jenislaporan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
('96a9e6c4-13f2-4272-aac8-0067d3958f9d', 'Gaji pegawai', '2022-06-29 21:50:52', '2022-06-29 21:50:52'),
('96a9e6d5-399f-49f3-bd92-041967592e48', 'Disiplin pegawai', '2022-06-29 21:51:03', '2022-06-29 21:51:03'),
('96a9e6e1-6f0f-4919-98a3-6635c05353f5', 'Absensi pegawai', '2022-06-29 21:51:11', '2022-06-29 21:51:11'),
('96a9e6f0-8e43-41a1-bebf-fdb0f10abdd5', 'Uang makan pegawai', '2022-06-29 21:51:21', '2022-06-29 21:51:21'),
('96a9e6fc-ec1c-4090-b11f-ea84e17d4cd3', 'Tunjangan pegawai', '2022-06-29 21:51:29', '2022-06-29 21:51:29'),
('96a9e70a-187c-4d49-9c22-3dcbf839bde1', 'Barang Milik Negara ', '2022-06-29 21:51:38', '2022-06-29 21:51:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluhan__public`
--

CREATE TABLE `keluhan__public` (
  `id` char(36) NOT NULL,
  `id_jenislaporan` char(36) DEFAULT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `id_kategorilaporan` char(36) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keluhan__public`
--

INSERT INTO `keluhan__public` (`id`, `id_jenislaporan`, `judul`, `isi`, `tanggal`, `lokasi`, `id_kategorilaporan`, `file`, `email`, `status`, `nama`, `keterangan`, `created_at`, `updated_at`) VALUES
('96d0b1a8-1f1f-4185-bb1c-386ec1e702d1', '96a9e6c4-13f2-4272-aac8-0067d3958f9d', 'laporan Pertama', 'Laporan', '2022-07-19', 'Ketapang', NULL, 'app/keluhanfile/1658230779-file-cQZ40.pdf', 'fathur12fr34@gmail.com', 1, 'Fathur Rahman', NULL, '2022-07-19 04:39:39', '2022-07-19 04:39:39'),
('96d24628-a368-49b8-b16f-f64e381ed7f6', '96a9e6c4-13f2-4272-aac8-0067d3958f9d', 'Surat Kedua', 'Isian', '2022-07-20', 'BAAK', NULL, 'app/keluhanfile/1658298643-file-sReXk.pdf', 'fathur12fr34@gmail.com', 2, 'Fathur Rahman', 'Setuju', '2022-07-19 23:30:43', '2022-07-19 23:31:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `simadu__pegawai`
--

CREATE TABLE `simadu__pegawai` (
  `id` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik_ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gelar_depan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gelar_belakang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `simadu__pegawai`
--

INSERT INTO `simadu__pegawai` (`id`, `nip`, `nup`, `nik_ktp`, `email`, `nama`, `gelar_depan`, `gelar_belakang`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `password`, `foto`, `username`, `remember_token`, `created_at`, `updated_at`) VALUES
('02b2a632-7432-4eaa-9898-b2ea879ff373', NULL, '19780803 201509 168', NULL, NULL, 'Heri Darmawan', NULL, 'S.T', 'Ketapang', '1978-08-03', 'Laki-laki', '', '$2y$10$kOdndFxu1yyRqmz.4OWdCuzx9yi39DmWPzU1QWKINfv1MkHyH4MYu', '', '', '', '2022-07-04 04:55:58', '2022-07-04 04:55:58'),
('02fb52d1-876d-4dca-83d5-a8d769842eb5', NULL, '19890614 201302 129', NULL, NULL, 'M. Riduan', NULL, 'A.Md', 'Ketapang', '1989-06-14', 'Laki-laki', 'Islam', '$2y$10$.4ZP0lz7VOtXmj0ZuqBx8ufjBcsiIapj7s91CWkssYEvtwNFqv08m', '', '', '', '2022-07-04 04:55:58', '2022-07-04 04:55:58'),
('03968e4c-1c63-4e6e-8d6a-4c31651cb5ac', '19850516 202121 2 004', NULL, NULL, NULL, 'Eva Susana', NULL, 'A.Md', 'Ketapang', '1985-05-16', 'Perempuan', '', '$2y$10$sz8QiV9FOB391f/ixvN6x.akNuEFqIDKMDZ4ejiqpFUWWYtxV97MG', '', '', '', '2022-07-04 04:55:58', '2022-07-04 04:55:58'),
('03c8bbe4-15b5-4fa5-8024-dcc8abd2f9ac', NULL, NULL, NULL, NULL, 'Vensya Aswal Anugerah Panca Poetri', NULL, 'A.Md', 'Pontianak', '1993-03-31', 'Perempuan', 'Islam', '$2y$10$YRhJ1zkzE6QoEuHxcTIds.AbLDNg4Xem.ouFeGVAa0qJaxs8dPVFu', '', '', '', '2022-07-04 04:55:58', '2022-07-04 04:55:58'),
('045cfd08-9a76-4c18-a1eb-b43a99f48c57', NULL, '19920717 201512 174', NULL, NULL, 'Devi Elvira', NULL, 'S.Pd', 'Ketapang', '1992-07-17', 'Perempuan', '', '$2y$10$.kJ8tR1eOnQckmbZ2y2gDeVuKj.3aKz6YqO/ybSAb4G4TrjUqIC9G', '', '', '', '2022-07-04 04:55:58', '2022-07-04 04:55:58'),
('0854e795-2c48-484e-b919-675b7be7dc7c', '19830917 202121 1 001', NULL, NULL, NULL, 'Adha Panca Wardanu', NULL, 'S.TP.,M.P', 'Pontianak', '1983-09-17', 'Laki-laki', 'Islam', '$2y$10$YDjrHk54U6.Da4s3wYi.6upZEW7.n3KIXtt5fBlSpAq0Wn75/uKEm', '', '', '', '2022-07-04 04:55:58', '2022-07-04 04:55:58'),
('093cca9b-a773-4867-a5f6-a665467f791b', NULL, '19890622 201601 95', NULL, NULL, 'Juniarti', NULL, 'A.Md', 'Ketapang', '1989-06-22', 'Perempuan', '', '$2y$10$kLM1j8yc6xyHeJM2EIjqne75AuBlcIjxCeaKsyqcS2rpDpWgfN4dO', '', '', '', '2022-07-04 04:55:58', '2022-07-04 04:55:58'),
('0a89879b-7875-4420-ab42-4ec9cb00e86e', '19910217 202121 1 002', NULL, NULL, NULL, 'Fajar Pebriyono', NULL, 'A. Md', 'Ketapang', '1991-02-17', 'Laki-laki', '', '$2y$10$WyCQmpKxfhCB6L7UCq.N6uFmkyg/EDLHP1H3U77Qr3E.ykXIgBm6O', '', '', '', '2022-07-04 04:55:58', '2022-07-04 04:55:58'),
('0d8bcf7b-fb92-11ec-a972-088fc330ed2d', '123456789123456789', '12345678901234567', NULL, NULL, 'fathur', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$LdgKwxXRtGi7ETgyKqjihuVHZmr4MBNpo/BctqZpO9yuzQob0.BW6', 'app/fotofoto/1657266515-foto-O73Ou.jpg', '', 'iXz3joPjwzLgBEpnb7tFYbt6PISNoRVZGRaGmdeNYz0AyospQSJQTztp47x1', NULL, '2022-07-08 00:49:38'),
('0ed02966-83fd-4b68-b3e6-077f75582dd2', NULL, '19961119 202107 260', '6171035911960020', NULL, 'Dyah Novia Nugraheni', NULL, 'S.Tr.Ak.,M.Ak.', 'pontianak', '1996-11-19', 'Perempuan', 'Islam', '$2y$10$HGz7K2R0yzXL4dOP7yxwmet.ANWeCd4f9cE42XOg7VckMXtfAWGI6', '', '', '', '2022-07-04 04:55:58', '2022-07-04 04:55:58'),
('13c7279b-9d2e-4afa-a641-ca2ebc14f151', NULL, NULL, NULL, NULL, 'Moh Rokim', NULL, '', 'Purworejo', '1970-01-01', 'Laki-laki', '', '$2y$10$e4R2Al8BX4cOeThtqNb.Tu/4/d7sKj6/eMXlbC93hnXyofaKiv51m', '', '', '', '2022-07-04 04:55:58', '2022-07-04 04:55:58'),
('13dd745d-221f-421f-b78b-138131893d28', NULL, NULL, NULL, NULL, 'Dedi Kurniadi', NULL, '', 'Ketapang', '1970-01-01', 'Laki-laki', '', '$2y$10$OLfkg6z/KvT1X5QLSuBvUuvFojKXW5Ap1pZk/bXKJmZjvd4T6/xgu', '', '', '', '2022-07-04 04:55:58', '2022-07-04 04:55:58'),
('143f2dec-fc53-45e6-a700-989bdf50c019', '19851008 202121 1 005', NULL, NULL, NULL, 'Erick Radwitya', NULL, 'S.ST., MT', 'Ketapang', '1985-10-08', 'Laki-laki', 'Islam', '$2y$10$Yofa0q299j49phSMnsiAHeibFRiJXCQZRJ/8tMRE9vvHuki.RsIIi', '', '', '', '2022-07-04 04:55:58', '2022-07-04 04:55:58'),
('14e636c6-3ca1-4e24-9072-3b0b707abc99', NULL, NULL, NULL, NULL, 'M. Randi Hardiyanto', NULL, '', 'Ketapang', '1993-05-25', 'Laki-laki', '', '$2y$10$eSLH2X7OdIuIcTkLaUHsmOCYw0TIHIV11kauv/5CEuZIruKz5MLDi', '', '', '', '2022-07-04 04:55:58', '2022-07-04 04:55:58'),
('15417e2f-797e-43fe-ac3f-54b550f683ad', '19710324 202121 1 001', NULL, NULL, NULL, 'Molyadi', NULL, 'A.Md', 'Ketapang', '1971-03-24', 'Laki-laki', 'Islam', '$2y$10$Is4Oz.JZIwXcPrge.Fl1D.cytwTrCotF/gB0Ul5EF.VbECIDoPPFO', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('159c1ff3-499e-4acc-84c2-bc844f8da135', '19820310 202121 1 003', NULL, NULL, NULL, 'Trian Adimarta', NULL, 'S.TP., M.Sc', 'Surabaya', '1982-03-10', 'Laki-laki', 'Islam', '$2y$10$ivky/vh0mz10jCZ5PjuxAO/S39R84E39WtMKm5zQgpHxson18R.jq', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('16cb2f5a-392a-48bf-b846-bcf548ded51f', NULL, '19920521 201512 175', NULL, NULL, 'Muhamad Reza Lukmana', NULL, 'A.Md', 'Ketapang', '1992-05-21', 'Laki-laki', 'Islam', '$2y$10$Z3X3Tt.t5nDOYwBStR.UreEV.mE4ar5lA0wjXBGvSQNp1SkLtGaNm', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('18413e6f-09d1-4ae5-b32e-cb0d2c2f4427', NULL, NULL, NULL, NULL, 'Supiandi', NULL, '', 'Ketapang', '1980-06-09', 'Laki-laki', '', '$2y$10$rEpz20Ku5ujehaQ.3yryROgyVXQkrP3Fq0zJ.2UjFza2annIyQfsC', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('18514bb6-0287-4061-b323-05247b4132c4', '19720918 202121 2 002', NULL, NULL, NULL, 'Heni Haryani', NULL, NULL, 'Ketapang', '1972-09-18', 'Perempuan', '', '$2y$10$cyZneKdW5rPt3eqA9fBu6e3DYulwt5vnIsg70pw5VZhjLea.JvsCm', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('189bd94f-5fd1-451a-8a00-031840e9a07a', NULL, NULL, NULL, NULL, 'Khairil', NULL, 'S.P.,M.P', 'Samili', '1981-09-17', 'Laki-laki', 'Islam', '$2y$10$ZlDZQHxiafsTs.8tViKSKu/y.p4cVmz0h0yfVAUnWEAIjNpaKmbdC', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('18eebaa7-84fd-48ac-9c61-81dfe56e8074', '19770221 200803 1 001', NULL, NULL, NULL, 'Uti Rustam Efendi', NULL, 'S.T., M.T', NULL, '1977-02-21', 'Laki-laki', 'Islam', '$2y$10$Wz2EnQSPVPJk6y7tK5Ayt.svlH7gAKH/VGAarvGpYbDxLBpZnOa1m', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('193ca687-65a0-4711-b0c0-1927043c277d', NULL, '19930528 201603 202', NULL, NULL, 'Fachrul Rozie', NULL, 'S.T, M.Tr.T', 'Ketapang', '1993-05-28', 'Laki-laki', 'Islam', '$2y$10$eMC7NnfkDruaGMroXhJzveHPSdMvutXReY4ZpDBARBVz3YC0iAsHK', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('1a3344f4-7b24-487e-a9fb-5ad326c13fff', '19900802 201903 1 003', NULL, NULL, NULL, 'Kondhang Dhika Kusuma', NULL, 'A.Md', 'Surakarta', '1990-08-02', 'Laki-laki', 'Islam', '$2y$10$GQ1CssTjIV8Tip9tlBzJb.UVCq27m6Ry8Lixf/VbWiZCpSugv8Vya', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('1a9c1f07-2017-4492-a4f6-0dc243e7d999', '19911112 201903 1 014', NULL, NULL, NULL, 'Kasrianto Wijaya', NULL, 'A.Md', 'Palopo', '1991-11-12', 'Laki-laki', 'Islam', '$2y$10$88Dj2ALMFaMFSYhdFA0Hf.dUKYtfstdhJgrzv3AVYdkGRbHFZZK8u', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('1b0267f4-d517-4512-a4c3-301a96372d12', '19890623 201903 2 015', NULL, NULL, NULL, 'Syarifah Aqla', NULL, 'S.Pd.,M.T', 'Pontianak', '1989-06-23', 'Perempuan', 'Islam', '$2y$10$rXweNbPNP7/HbBcqzu1jeOXXgZ86bSBSsPgQug4EYkEy.2KP2jXJq', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('1b0267f4-d517-4512-a4c3-301a96372d13', '111111111111111111', '11111111111111111', NULL, NULL, 'User', NULL, NULL, 'Ketapang', '1989-06-23', 'Laki-Laki', 'Islam', '$2y$10$UFTJkBWTxW7BudTlrdIvVuk9d10BHlRLOgG8.T.FmkugCXj0MdL5e', 'app/fotofoto/1658420107-foto-eR8w9.png', 'User', '', '2022-07-04 04:55:59', '2022-07-21 09:15:07'),
('1b483074-16f8-4c4a-908a-ba3e3ee8e7e1', '19780511 202121 1 003', NULL, NULL, NULL, 'Helanianto', NULL, 'S.T.,M.T', 'Randau', '1978-05-11', 'Laki-laki', 'Katholik', '$2y$10$ghU0LJhQp2neACGmDEL5UOA7Q3I5zU50HTQ50NhKOLk32uXsv7efS', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('1ba7321f-8186-4fbb-8cff-ff1d597d4336', '19760921 202121 1 002', NULL, NULL, NULL, 'Normansyah', NULL, 'S.T.,M.T', 'Ketapang', '1976-09-21', 'Laki-laki', 'Islam', '$2y$10$yU1nnS8xq//9uG63eHw0DuLNYJhocnuE.TxL9C592jor5YPR1C6wG', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('1d5b7688-73c1-4142-99f3-94bbae58ed79', '19880501 201903 1 007', NULL, NULL, NULL, 'Budi Pratomo Sibuea', NULL, 'S.ST.,M.ST', 'Tebing Karimun', '1988-05-01', 'Laki-laki', 'Kristen', '$2y$10$wx3dAoJxaVFLbv.7mE1.ROEoIhIZaHfdLk./mUOOM7UqIh7MoD54e', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('1e0985f8-2c11-4f3f-845b-6bf9a09c3b2d', NULL, '19930128 201609 210', NULL, NULL, 'Ar-Razy Muhammad', NULL, 'S.T', 'Pontianak', '1993-01-28', 'Laki-laki', 'Islam', '$2y$10$vggAfTl61r0stc3eFW0izOMdB14G6.ZHSSI4ZJt74CNseRl354zy2', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('1e9dc080-4487-494e-9225-72b737e726c3', NULL, '19880328 201802 230', NULL, NULL, 'Muhammad Fadli', NULL, 'A.Md', 'Semarang', '1988-03-28', 'Laki-laki', 'Islam', '$2y$10$c88e5Cd4z6h1hwGf3cFusedy./nsqRKRAfuSDhl5TfBNLnnRJVYG.', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('1f160b23-2073-4ad4-9ffc-1e417dc85cc9', NULL, '19900109 201512 171', NULL, NULL, 'Sarwendah Ratnawati Hermanto', NULL, 'S.Pd., M.Sc', 'Surakarta', '1990-01-09', 'Perempuan', 'Islam', '$2y$10$nTsZsLS64jcLMaCPCSLuxO7JKUb/N/260Q/maeBQixsIhUDclE45O', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('20ab0593-f9f5-405f-86ff-a3f3c50d804b', NULL, '19910413 201509 161', NULL, NULL, 'Rika Fitry Ramanda', NULL, 'M.P', 'Ketapang', '1991-04-13', 'Perempuan', 'Islam', '$2y$10$rRykhevWNcwchhRJ8SVniumqFxwDJb3lhzLuvrHWPvKcVcPV3f.f6', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('20c6f98d-f528-4fc2-9016-ef526e32b7ba', NULL, '19830327 201701 215', NULL, NULL, 'Uray Sriyani', NULL, '', 'Balai Karangan', '1983-03-27', 'Perempuan', '', '$2y$10$3Hvc/HGrGPSEimyWLPjX0u8iICQJoCvKZpE2Z/C9tcQekH9KJL7oi', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('2189d7cd-773e-4845-84a5-fffaa1ea901f', '19880315 201903 2 011', NULL, NULL, NULL, 'Maya Santi', NULL, 'S.Pd.,M.T', 'Ketapang', '1988-03-15', 'Perempuan', 'Islam', '$2y$10$PtFRc8L0LJCZhXfSeTzu2.Qb8vAr/Nq7wrKHT8nbHiLQ9dfqldy2S', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('22bf31f9-6306-425e-9d54-89ace70ccda4', '19880424 201903 2 012', NULL, NULL, NULL, 'Hurul\'ain', 'Ir.', 'S.T.,M.T', 'Pemangkat', '1988-04-24', 'Perempuan', 'Islam', '$2y$10$u6WEB4SCEJSWbBXM0TSQoO7uL40f8HjctfsLxOEICjKiW0UZkbt1S', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('22e45ac1-e10f-4134-8739-23fd2faa507c', '19840605 202121 1 005', NULL, NULL, NULL, 'Effendi', NULL, ' A.Md', 'Ketapang', '1984-06-05', 'Laki-laki', '', '$2y$10$PYeHwwfFBkb3HPO6/cB3p.ShgT.C3axXE4mYusGKxh5Wrd.QYBSaC', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('252e762f-e81d-4c33-8aae-11b68c651c17', NULL, NULL, NULL, NULL, 'Ibnu Hajar', NULL, '', 'Ketapang', '1969-01-29', 'Laki-laki', '', '$2y$10$mSAbBUnPDmYmTeMhqu0PkenM.AjDQNhtS5TBR./Eum/3r5pxQIJKC', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('26f5893c-c355-4040-9ae4-6e53187c725f', '19740722 202121 1 005', NULL, NULL, NULL, 'Muh Anhar', NULL, 'S.T.,M.T', 'Boyolali', '1974-07-22', 'Laki-laki', 'Islam', '$2y$10$uPhNTJ/lyChRQZZn.plpaes5/nDn.h/yAG30NS9w5xtHL.Zdi3Hrm', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('28e2a56e-3c76-4d19-844f-a3092954f0b7', '19850217 201504 2 002', NULL, NULL, NULL, 'Encik Eko Rifkowaty', NULL, 'S.TP.,M.P', 'Pontianak', '1985-02-17', 'Perempuan', 'Islam', '$2y$10$RJ62m9hiZ2DTHtATP4HgT.6.li6y8MWSUk7khu9.VY0xxHdcSrurS', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('29157361-a115-43a4-86ed-fbe66964c0d7', '19810521 202121 1 006', NULL, NULL, NULL, 'Dedi Sartono', NULL, 'A.Md', 'Ketapang', '1981-05-21', 'Laki-laki', '', '$2y$10$s7LEo1MvE.1cGs9ZAmVfyOsWJTVh62nx5o8/M85yYK5aTwlD8pwDG', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('295e592a-3426-40a6-899c-8860e5929164', NULL, '19911010 201507 155', NULL, NULL, 'Lita Nurpuspita Sari', NULL, 'S.Sos.', 'Singkawang', '1991-10-10', 'Perempuan', 'Islam', '$2y$10$YTqhrr2j0LSy6seXd3yu4ezrKx/1YDPxXDfo6Eh1XBlxgJdrL0xqK', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('29cb26c6-4361-4341-971d-07be567f2a6f', NULL, '19820601 201602 198', NULL, NULL, 'Lusia Romana', NULL, 'S.IP', 'Pantan', '1982-06-01', 'Perempuan', '', '$2y$10$CXHLY.u4R.L7WdYXCx5svOWgV/n68CGGWsPpIAtbeu8nQABYsocwy', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('30ccea2e-48be-4213-ae9a-379abd41a42c', NULL, '19821217 201509 164', NULL, NULL, 'Beny Setiawan', NULL, 'S.TP.,M.P', 'Pontianak', '1982-12-17', 'Laki-laki', 'Islam', '$2y$10$3V4l8.cPPgUdasBjM6fyleMS3gvSdp.kNS6B2kLNCpLEgiFC4LDTW', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('30f2648e-3a3a-45a0-bdc2-e984af4abb7f', '19890705 202121 1 002', NULL, NULL, NULL, 'M. Iwan Toro', NULL, 'A.Md.', 'Pebihingan', '1989-07-05', 'Laki-laki', 'Islam', '$2y$10$z/df0KTe5QNsYLE6fdvYvO9VxGU0AL3UBtG.d2Ud4HX18D9xglsYm', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('31236e8b-5191-4433-95a9-0390e1e13ac1', NULL, '19931213 201601 183', NULL, NULL, 'Yunita', NULL, 'A.Md', 'Ketapang', '1993-12-13', 'Perempuan', 'Islam', '$2y$10$rQxzUlgU06/7cfWtNfUgj.km/Uz2L4RznjZ4AsGU9XZSwv44camLa', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('321326cb-17cd-4634-bdc8-619c26d4aea3', NULL, '19911112 201411 146', NULL, NULL, 'Winda Arlianty', NULL, 'S.Kom.', 'Ketapang', '1991-11-12', 'Perempuan', 'Islam', '$2y$10$9HAeB64hJN0rFT.HTtfazuCy8p0Zl86DxzSsCrUac9ve89z2OmJIm', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('32d16bd7-58b5-487a-aab3-66cbb4801605', '19761218 202121 1 004', NULL, NULL, NULL, 'Abang Suryadi', NULL, 'A.Md', 'Putussibau', '1976-12-18', 'Laki-laki', 'Islam', '$2y$10$oLUmUILbcKkJjrsEt9H08OdpMS/3d/EZLZ3uU3hBM9Fekxa7r4DMq', '', '', '', '2022-07-04 04:56:01', '2022-07-04 04:56:01'),
('35a66251-da37-4d69-b652-7eee40512ca2', '19820521 202121 1 003', NULL, NULL, NULL, 'Refid Ruhibnur', NULL, 'S.ST., M.M.', 'Pontianak', '1982-05-21', 'Laki-laki', 'Islam', '$2y$10$tSsYVTvkwtYwRQoyl2pF2e1yQXmI.GIzwlxYmG45ypa2JaGMaCApy', '', '', '', '2022-07-04 04:56:01', '2022-07-04 04:56:01'),
('384a1c52-c826-4a58-9dac-effcab2e701a', NULL, '19901117 201604 205', NULL, NULL, 'Uci Novianti', NULL, 'S.Pd', 'Ketapang', '1990-11-17', 'Perempuan', '', '$2y$10$ReWJLIORRFOaJ41rKRlUF.Pcpq/WrS9QR/tccRHfOC5DYFbFCizn.', '', '', '', '2022-07-04 04:56:01', '2022-07-04 04:56:01'),
('38e42c98-b490-4f03-a289-35939e035cfa', NULL, '19900123 201601 178', NULL, NULL, 'Irfan Cholid', NULL, 'S.P.,M.MA', 'Ketapang', '1990-01-23', 'Laki-laki', 'Islam', '$2y$10$/NPgjX6/4FFyhGCjlQTrye7DBJSAPcmvQAZe.6W9EcfoauPE/n8n6', '', '', '', '2022-07-04 04:56:01', '2022-07-04 04:56:01'),
('3a1f1872-c67a-4bc7-9f92-0c852f44e1ec', NULL, NULL, NULL, NULL, 'Agus Sudrajat', NULL, '', 'Banyumas', '1979-06-08', 'Laki-laki', '', '$2y$10$ebmRtOVs8GEIe8xJkVt2DemjAyem6hzyRdSCiD1kGdVRBcf/KYEjO', '', '', '', '2022-07-04 04:56:01', '2022-07-04 04:56:01'),
('3ae1bb68-15ef-4eaa-a153-0d7dd87c6654', NULL, NULL, NULL, NULL, 'Rosnila', NULL, '', 'Sembelangaan', '1967-01-05', 'Perempuan', '', '$2y$10$mgC8pRBeK9n5QCoIKJpi9ePIOZthIgsaUb3bdVXFnqavst3IHKL1G', '', '', '', '2022-07-04 04:56:01', '2022-07-04 04:56:01'),
('3bb510ed-d9cc-4ae5-bf83-ecb726cbc832', '19640914 198601 1 003', NULL, NULL, NULL, 'Temy Akhyar', NULL, NULL, NULL, NULL, 'Laki-laki', 'Islam', '$2y$10$qENtXj82sPWdUbQvACt65eM9hPwyqtzztqpDNeS52To.g4xdL4/7i', '', '', '', '2022-07-04 04:56:01', '2022-07-04 04:56:01'),
('3c7a9d69-339d-4ee3-9943-b9acec923fc5', NULL, '19871107 201507 156', NULL, NULL, 'Lukman Faisal', NULL, 'S.H.', 'Singkawang', '1987-11-07', 'Laki-laki', 'Islam', '$2y$10$9xwsHPWClEuqjYJFQOmdeu8yYS7idpBSVF4dS7nZQfP7M1O2JxMDW', '', '', '', '2022-07-04 04:56:01', '2022-07-04 04:56:01'),
('3eeb6e49-8f87-483b-b811-e7b91dc94a8d', NULL, '19911121 201701 214', NULL, NULL, 'Anugrah Bayu Saputra', NULL, 'A.Md', 'Pontianak', '1991-11-21', 'Laki-laki', 'Islam', '$2y$10$gnUR5x5bonRFabw25udEDeD8IPFUkhWpUZZ8Cnd227jx4xmHimdKO', '', '', '', '2022-07-04 04:56:01', '2022-07-04 04:56:01'),
('3f60bbb2-e5e2-4297-b003-62fe2ffebf43', NULL, '19980609 202104 252', '6104120906980003', 'junaidiju4109@gmail.com', 'Junaidi', NULL, 'A.Md.Kom', 'Ketapang', '1998-06-09', 'Laki-laki', 'Islam', '$2y$10$JTLOyXc6RD8ugx1ox83U/.f9g.z1.erJamuEjbibJRFa1GYDbZgtC', '', '', '', '2022-07-04 04:56:01', '2022-07-04 04:56:01'),
('42e5ae5d-611b-4c00-833e-ea735145b325', NULL, '19930216 201809 240', NULL, NULL, 'Ira Arianti', NULL, 'S.P.,M.P', 'Ketapang', '1993-02-16', 'Perempuan', '', '$2y$10$PKez2u5j7yXKxJEw/q4oXu1W5j3AyYno6RxOA3xCvP81e8Hj4vFjq', '', '', '', '2022-07-04 04:56:01', '2022-07-04 04:56:01'),
('436521dd-c443-4db6-89ae-9e237e349402', '19791002 202121 2 008', NULL, NULL, NULL, 'Erma Novita', NULL, 'A.Md', 'Ketapang', '1979-10-02', 'Perempuan', 'Islam', '$2y$10$j3dz9C3mwEJQiaazcEQNlewcoZHCEXAk/DQ44Uq//iC6pJ6XJbzb2', '', '', '', '2022-07-04 04:56:01', '2022-07-04 04:56:01'),
('43a2c3e2-6794-4fe3-a410-260d71bec47d', NULL, '19840207 201001 092', NULL, NULL, 'M. Hanif Faisal', NULL, 'M.T.', 'Pontianak', '1984-02-07', 'Laki-laki', '', '$2y$10$LaEOuEk3ZBaj75R2sMjAS.qPwOFjcyJFdoQaR.5DhkNaaAGp9Xgz.', '', '', '', '2022-07-04 04:56:01', '2022-07-04 04:56:01'),
('4408ed64-f04d-48df-ba7f-9b082c9438fc', NULL, NULL, NULL, NULL, 'Ary Rubiyanto', NULL, '', 'Ketapang', '1989-02-18', 'Laki-laki', '', '$2y$10$Ymz9./z5AC8kD4sX3E0OfuuhsnjaPCvhA675ncJLwaQTUtQPRU8Nm', '', '', '', '2022-07-04 04:56:01', '2022-07-04 04:56:01'),
('44c7b811-eae2-42cb-b1d6-243f09822b99', '19890816 201903 1 002', NULL, NULL, NULL, 'Ahmad Ravi', NULL, 'S.Pd.,M.Pd', 'Masamba', '1989-08-16', 'Laki-laki', 'Islam', '$2y$10$QAsPq/0ZlP.y.lTOyOolbexflGH6xz7NMemwi3QdToatYuXIU7QgK', '', '', '', '2022-07-04 04:56:01', '2022-07-04 04:56:01'),
('458c592c-348c-46d1-b344-b792fb64d42c', NULL, '19980908 202008 241', '6104174809980004', NULL, 'Shela Krisdayanti', NULL, 'A.Md.P', NULL, '1998-09-08', 'Perempuan', 'Islam', '$2y$10$Rddj1eUCsRXG8yfNfVRqBuVMDzS2BtbZE7tYcrCbS9.Nyig9K44.u', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('47ceee1a-b33b-4239-9a46-1e58b5a672ad', NULL, '19830627 201512 176', NULL, NULL, 'Wienda Soesanti Putri', NULL, 'SE', 'Surabaya', '1983-06-27', 'Perempuan', 'Islam', '$2y$10$7/I8AfhRl35mQ04llnJXy.12oNyUXN/IpKS2cgTN6q2fmrluNwxeu', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('4839ee6d-2c3e-426a-9354-7db9e48ae439', '19880808 202121 1 001', NULL, NULL, NULL, 'Erwin', NULL, 'A.Md', 'Ketapang', '1988-08-08', 'Laki-laki', 'Islam', '$2y$10$d1lu.yDFf0.W1Ls8aLvkLeuyllYIA6KgMoQQeK5eXdxgX6Ry2J4K2', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('488fb59f-f26b-48f9-96a9-fad9e800e4d1', '19891023 202121 1 001', NULL, NULL, NULL, 'A.Yani', NULL, 'SP', 'Ketapang', '1989-10-23', 'Laki-laki', 'Islam', '$2y$10$21.FFelL9HvCtHAl2kxap.U8ArCXMQrynlpk25SfDrEjYurRSqBZq', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('49ce6c30-837f-45c3-8e2c-6f9870ebc2e9', '19750116 202121 1 003', NULL, NULL, NULL, 'Tardi Kurniawan', NULL, 'S.Sos,.M.Si', 'Pontianak', '1975-01-16', 'Laki-laki', 'Islam', '$2y$10$Die/8szVsL2lHa0FX/u4hu911r3oluXK1nk7pOIHm2HJwi0fXLlgW', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('4c3d0071-440e-4e4a-837f-59eea1cc348e', NULL, NULL, NULL, NULL, 'Sy. Adly', NULL, '', 'Ketapang', '1980-09-04', 'Laki-laki', '', '$2y$10$BZjOKpvwGF5mdrAwM1lf8uNVvSNcJWJDKO/nhsczp.TARpr6UnDhi', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('4d744851-78a2-40b9-ada0-0a17f50d990e', '19790626 202121 1 006', NULL, NULL, NULL, 'Sy. Ishak Alkadri', NULL, 'S.ST., M.T', 'Pontianak', '1979-06-26', 'Laki-laki', 'Islam', '$2y$10$LiHyzCPvwj6W6DHboPRWv..ByHxArYWjs2s4bwLy1srNYNSGecQv.', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('4e441045-7e87-46c6-8f0c-68298b2934ae', NULL, '19770627 201601 187', NULL, NULL, 'Masyhudi', NULL, 'SE', 'Jakarta', '1977-06-27', 'Laki-laki', 'Islam', '$2y$10$lUQcNrmDgLNIk.VMPyzga.tyT2DGEJBukhGjg4c3B6.IOBywudb1C', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('4eae5a1d-bc44-4301-afd8-833a1bd0f6cf', '19880919 201903 1 014', NULL, NULL, NULL, 'Herman', NULL, 'S.Si.,M.T', 'Singkawang', '1988-09-19', 'Laki-laki', 'Budha', '$2y$10$ntg9L0EOc4RcZde.d56e.e00IWcHuhPPcpnbEZaQ9JZ9AvNpmf7pK', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('50660972-640c-49bd-b4f3-b988cfa241ec', '19910414 201903 1 008', NULL, NULL, NULL, 'Sy. Muhammad Zaki', NULL, 'SST', 'Ketapang', '1991-04-14', 'Laki-laki', 'Islam', '$2y$10$hnjauDojbxKC6BpwF9jXOOKtWvjLGVmCAJIwwmYdsFs28cuf.uT1a', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('509fcb0e-fb92-11ec-a972-088fc330ed2d', '12345678912345678', NULL, NULL, NULL, 'fathur rahman', NULL, NULL, NULL, NULL, NULL, NULL, '1234', '', '', '', NULL, NULL),
('509fd729-fb92-11ec-a972-088fc330ed2d', '12345678901234567', NULL, NULL, NULL, 'rahman', NULL, NULL, NULL, NULL, NULL, NULL, '1234', '', '', '', NULL, NULL),
('5123ac8d-c8fb-436a-b417-28a153cf6c16', '19921021 201903 2 017', NULL, NULL, NULL, 'Diani Dwi Oktavianti', NULL, 'S.ST', 'Putussibau', '1992-10-21', 'Perempuan', 'Islam', '$2y$10$Ka1q/MDZpu0ZZIpB0UBZaO4E7qlKB8fftq1oBou6TS/QKs7ieNFvq', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('51a80ae5-f512-4310-8243-2a4abe75a345', NULL, NULL, NULL, NULL, 'Sy. Abdurrahman', NULL, '', 'Pontianak', '1980-05-09', 'Laki-laki', '', '$2y$10$HG7EWyXfbJDDcRe.8KfpbezaZ/k99PgGU49SWI/tWHmU5GLMGWWiS', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('53765b6c-4322-4c67-956a-12f6b811fdbc', NULL, '19910102 201406 134', NULL, NULL, 'Januarso', NULL, 'S.P.', 'Ketapang', '1991-01-02', 'Laki-laki', 'Islam', '$2y$10$PgvI.PzbjQv4hwvy.24zZ.1QvENMi4dqCCXOsTNWzxyB/cBqq1pqy', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('54981c04-da78-4aa6-93db-6b30fb625794', NULL, NULL, NULL, NULL, 'Uti Nailul Auhar', NULL, '', 'Ketapang', '1983-06-16', 'Laki-laki', '', '$2y$10$xd9.rYjhNL01LAEi3i4PQ.hqc8v9D/KpMNioKir4F9JLG6DZgJYJ.', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('56391bb3-7220-4c57-97d8-c5e72987d775', NULL, NULL, NULL, NULL, 'Zulinda', NULL, '', 'Ketapang', '1979-09-28', 'Laki-laki', '', '$2y$10$7swREM/KBsShV.gJ1QvWYetDcm1VLs0wU8hgfihADn4bRDHEBod2a', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('56d27921-8de3-4a64-8db0-fa30ec6d9a85', '19820701 202121 2 009', NULL, NULL, NULL, 'Novia Dhian Yulita', NULL, 'A.Md', 'Ketapang', '1982-07-01', 'Perempuan', 'Islam', '$2y$10$KpNwuuklcL5QLUWU4Np5w.zLKverAd2j.c8HmEv/.kVeRBgbohBzS', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('57e7dded-12ef-41c3-a728-71bee06f9526', NULL, '19941011 201803 239', NULL, NULL, 'Alan Purtanto', 'Ir.', 'M.T', 'Sintang', '1994-10-11', 'Laki-laki', 'Katholik', '$2y$10$4ueaJ/1Z1W/RBFkUMYJLEe9TV.fMeGhB0pigixJLHpGN0bkikuqxu', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('58563118-abc4-4d1b-93a4-58e327972409', NULL, NULL, NULL, NULL, 'Desy Putri Syafrianti', NULL, 'S.Kom', 'Sekadau', '1991-12-02', 'Perempuan', 'Islam', '$2y$10$bXX37s7B39F54ME/TJ0y6.TvZXx2axw5gLlJrmqAekK1B15cbH5py', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('589661c7-7bc4-4517-aeda-812297d91c0c', '19940812 201903 2 019', NULL, NULL, NULL, 'Fionna Araminta Fabiola', NULL, 'S.E', 'Ketapang', '1994-08-12', 'Perempuan', 'Islam', '$2y$10$ayZPVC/6deVPwkupETWYj.3ktZMAF76gBmLWHbUVXA3sUUtmd6BXi', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('5997603c-54d6-4b59-bb77-0fda630ee588', NULL, '19910127 201509 166', NULL, NULL, 'Pusparini Akhmad', NULL, 'S.Si', 'Palembang', '1987-01-27', 'Perempuan', 'Islam', '$2y$10$VeyW6s7l01NtZKWAZcIKF.3K7KkrGFGxgNNUVyYzF8q1In5.nkEUC', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('5cde66a2-643d-46ea-83b0-7b1de9399637', NULL, '19890404 201512 117', NULL, NULL, 'Irfan', NULL, 'A.Md', 'Teluk Melano', '1989-04-04', 'Laki-laki', '', '$2y$10$DRSWs020W4QMVMKA6wnF6OG1YBXYZwlz8tXPmvImDcL2LPO4KyOIO', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('5e418a66-3916-43d2-aabb-6ff1908d25f4', '19741026 202121 2 003', NULL, NULL, NULL, 'Utin Ida Fitriana', NULL, 'SE', 'Ketapang', '1974-10-26', 'Perempuan', 'Islam', '$2y$10$CEMupoXhhzk6Wdwh3Cll3uY6UkB1G4hPjXlTwaLYr1Sf.X/8lyrY6', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('5e636dc2-6006-420e-88ac-18b7521e50bb', NULL, '19961218 202008 250', '6104175812960003', NULL, 'AMANDA TIARA REZKI', NULL, 'SM', NULL, '1996-12-18', 'Perempuan', 'Islam', '$2y$10$GS4npQMH77TYuRHVv79greL6NO7k2URbnogDVu3Hmn3ueEP7g6Cvu', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('5eb61db0-c4dc-4013-b48d-7aaafd73b9b6', NULL, NULL, NULL, NULL, 'Suherman', NULL, '', 'Ketapang', '1988-10-12', 'Laki-laki', '', '$2y$10$tz55RyF0qQq5azD0RlpS0uiPRy3QllazUBXDTNm2AmlPw.C0fDwi6', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('5fb62dca-5b17-44ef-8849-257eaf4c8cc2', '19840105 202121 1 003', NULL, NULL, NULL, 'Epriyandi', NULL, 'S.T.,M.T', 'Ketapang', '1984-01-05', 'Laki-laki', 'Islam', '$2y$10$8o1hIqy7y.YQ012GrOHS5.k1EgwzYODbsO0n6uxY1.q814Hl1Oo0e', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('5ffd6435-601b-4276-8c73-53c7cecdd701', '19801126 202121 2 005', NULL, NULL, NULL, 'Novitawati', NULL, 'A.Md', 'Ketapang', '1980-11-26', 'Perempuan', 'Islam', '$2y$10$gyVb6H94zuZHhwRY8ti1b.OB3BC0.iNcToOV/cuWFvB6F0DAie72y', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('6351842b-6db4-4549-94c6-587f7e8d3883', '19840425 202121 1 001', NULL, NULL, NULL, 'Khairul Muttaqin', NULL, 'S.Pd.I.,M.Ag.', 'Singkawang', '1984-04-25', 'Laki-laki', 'Islam', '$2y$10$dKCAm.UwYGA2orYGeuUjju0Xf9Xzvc/7mwibhCwucgAeLX7oqHrmu', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('643a252e-3129-4f67-aba4-8ad6cbaca0c8', '19930818 201903 2 026', NULL, NULL, NULL, 'Firmanilah Kamil', NULL, ' S.Pd.,M.Pd', 'Malang', '1993-08-18', 'Perempuan', '', '$2y$10$zdqKbB7RrdVtXdaVZFfJE.9CwpUKYuOz0FNCOrkwOu2qqjpcKdX9O', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('652d3790-71e1-449e-88fb-a380428c0135', '19900619 202121 1 001', NULL, NULL, NULL, 'Zulpandi', NULL, 'A.Md', 'Ketapang', '1990-06-19', 'Laki-laki', 'Islam', '$2y$10$/lLXorT3xvWxw.WsJG.yZ.7Np9xjo5ZP5zT4JgL454/DJJyvL1pMy', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('68117ca1-bd03-47f2-849f-08f9d7c0d593', NULL, '19870311 201601 179', NULL, NULL, 'Sopiana', NULL, 'S.P.,M.Si', 'Mentibar', '1987-03-11', 'Perempuan', 'Islam', '$2y$10$nmArG0UYoiCy2DFhCItf4.bpdg9rdcCO9SxtpEM7kNX1BohgE0cam', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('6885f19d-bc29-4b2b-9062-c2fedf8efc79', NULL, '19820623 201509 169', NULL, NULL, 'Saifudin Usman', NULL, 'S.T., M.Tr.Kom', 'Pontianak', '1982-06-23', 'Laki-laki', 'Islam', '$2y$10$E8kY82p7jFGPbbsCiOsvHu0fySoiw6hr.oKwsaLLRhmy2ox0R4drW', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('6c395ad5-e91f-47f3-aa21-bc294c185ada', '19880830 201803 2 001', NULL, NULL, NULL, 'Venti Jatsiyah', NULL, 'S.P.,M.Si', 'Sambas', '1988-08-30', 'Perempuan', '', '$2y$10$SwAMt/X2GDqG48aPWgt.y.zVy4rI0cdoV2OOgDzlmpBmv5ZKvP6LS', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('6d42c4a4-f4de-4a38-9b96-bc7f1ee1bea4', NULL, '19790731 201211 123', NULL, NULL, 'Henny Yulianti', NULL, 'A.Md.', 'Ketapang', '1979-07-31', 'Perempuan', 'Islam', '$2y$10$UAyc6OvMI3KNuT8Q/mMexemT8HRaFPhFrRLZjxKkqbE0ygMnkLdq.', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('6da9d71f-9c64-40cf-b6b7-2d0657767ca4', '19771006 199703 1 003', NULL, NULL, NULL, 'Untoro Budi Harjanto', NULL, NULL, 'Yogyakarta', '1977-10-06', 'Laki-laki', 'Islam', '$2y$10$oxcryA1QT5X8LZo7oP9DqOjqJw2WJOnXyrMgzMhyHzbG9813W1SIm', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('6ed6b0f9-dc4b-4b84-90b6-099cfdd2e1c2', '19721212 202121 2 006', NULL, NULL, NULL, 'Utin Aimanul Habasiah', NULL, 'S.Sos', 'Ketapang', '1972-12-12', 'Perempuan', 'Islam', '$2y$10$8aOluQYShax2in23i8KMHe.4A.F/BhfhVKaTNqdfyMXYePNzFUN06', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('6f6de946-5158-424c-8bfe-aa4b8a9c4df6', '19811225 201503 1 001', NULL, NULL, NULL, 'M. Rangga CH', NULL, 'S.Kom', 'Ketapang', '1981-12-25', 'Laki-laki', 'Islam', '$2y$10$eL.Xa4AfouAspQEPKD2Z4OEPFYX2Ap0UUecb7hYjNBdk1f.8r4DkS', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('709b3b4e-969a-4c04-9e92-5e5654ea1172', '19861031 202121 1 001', NULL, NULL, NULL, 'M. Jimi Rizaldi', NULL, 'S.ST.,M.T', 'Ketapang', '1986-10-31', 'Laki-laki', 'Islam', '$2y$10$G9B/Pp1ixaw20SRp9UpE0.yeSAqqQPE9yczxALGdEwcDSzymoljXu', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('71b2657e-188b-4504-b605-6a488d35875a', NULL, '19871218 201512 173', NULL, NULL, 'Assrorudin', NULL, 'S.Pd.,M.Pd', 'Sidoarejo', '1987-12-18', 'Laki-laki', 'Islam', '$2y$10$6LVCBu99TyI89m3GmiKG4u721adFvZP.xChYO7HaqKE5BrYcnEoei', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('73d67075-744c-43c1-b3db-90e635121b08', NULL, NULL, NULL, NULL, 'Almiana', NULL, '', 'Ketapang', '1974-05-07', 'Perempuan', '', '$2y$10$J8Fa6XqAhcXPR4PZBYGS8OjUSfgRExi7W1YPg9v6UhcCQmQCP7CfK', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('769cc3ea-a955-4af8-9d8b-1509351aded3', '19910704 201903 1 015', NULL, NULL, NULL, 'Darmanto', NULL, 'M.Kom', 'Ngawi', '1991-07-04', 'Laki-laki', 'Islam', '$2y$10$fvTTMDTxd9HExzgg7DE5o.9.wqEGs9Pdm2/vf.VAyniI2LdHkYfja', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('78b3c200-ec4f-427c-be1e-eb899e259673', '19810822 202121 1 002', NULL, NULL, NULL, 'Awang Roy Lesmana', NULL, 'A.Md', 'Pontianak', '1981-08-22', 'Laki-laki', '', '$2y$10$vt71cNlIuyJ8pwEjwnTPHuLZLprxYlNBc3XyqIYkapH1CvhPtm6SO', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('792d0bfd-2dc1-4f35-8a26-83a306dacfdc', '19900921 202203 1 005', '19900920 201603 201', NULL, NULL, 'Ivan Suwanda', NULL, 'M.T', 'Pontianak', '1990-09-20', 'Laki-laki', 'Islam', '$2y$10$JJyUlCG0IVJ6fOLPm862tuN7XWP0ZlnF4Ty2OBgqGKJ.znuMV7SEO', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('799b456b-0e87-49de-8367-d2e78e9e74ae', NULL, '19841114 200801 047', NULL, NULL, 'Ningrum Dwi Hastuti', NULL, 'S.TP.,M.P', 'Klaten', '1984-11-14', 'Perempuan', '', '$2y$10$7rJNgP.uPRt41NNh8Hk./OaFI8WFcWc3nspaEIJKlhXj.GBAORuIS', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('79ae72a0-23be-4b20-ba79-703fb35a5eca', '19840504 201903 1 007', NULL, NULL, NULL, 'AKHDIYATUL', NULL, 'S.ST.,M.T', 'Ketapang', '1984-05-04', 'Laki-laki', 'Islam', '$2y$10$Zjo9b9jEE12MxxvPMXrJC.uFsHTDZdg9.DHpd6MwXCKlbUM5y6AM.', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('7a8c08a9-467b-4afe-8abf-07f6c2431afb', NULL, '19860615 200810 025', NULL, NULL, 'Endi', NULL, 'SE', 'Mambuk', '1986-07-15', 'Laki-laki', 'Islam', '$2y$10$lZCQEsKk3FRtWdSC79oLgeg/pPA2nIrx1/S1Xh3hEduvrKaO7xnUu', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('7acb40e6-5725-40ae-a4ec-02f6ed63bd94', '19830526 201504 1 001', NULL, NULL, NULL, 'Anto Susanto', NULL, 'SST, M.P', 'Bandung', '1983-05-26', 'Laki-laki', 'Islam', '$2y$10$JeMtITaQsmKkDt.PKuVLWepxnnJ0iAL4BFoBjha0fhP5h6zOcKp7a', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('7bd1033c-7dfe-4f83-9aad-e11c292b1d84', NULL, NULL, NULL, NULL, 'Satira', NULL, '', 'Ketapang', '1974-09-06', 'Perempuan', '', '$2y$10$Fvska0.vFynj9aqyt6IjEOVdB3z2LSbbEuTZtIEnIiJIG2RbBcJJO', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('7bea437a-8777-4c94-bf63-8e0ca9651691', '19640610 202121 1 004', NULL, NULL, NULL, 'Uti Sahibul Hekmi', NULL, 'A.Md', 'Ketapang', '1964-06-10', 'Laki-laki', 'Islam', '$2y$10$vaBMffqMixIDCXy3HWdSrO1DeWMGpgnbjikve/DsCbyRbQAX4NDs.', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('7c7c26c8-47b9-48b3-8499-7ef04f7564ec', '19831001 202121 2 004', NULL, NULL, NULL, 'Nely Kurnila', NULL, 'S.Pd., M.Pd', 'Ketapang', '1983-10-01', 'Perempuan', 'Katholik', '$2y$10$lb9kh3PwlDhdm03rMFpQO.uKYQ/UsSxVYeABHrPD7ybGnQCvuekMW', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('7e03dfc9-498e-4b16-8bce-d4823ce87ba8', NULL, '19860710 201204 118', NULL, NULL, 'Mustapa', NULL, ' A. Md', 'Ketapang', '1986-07-10', 'Laki-laki', '', '$2y$10$beCVWCtXpaSvjv6QNhvgRueOcUts.bA5i3ZLwtaTWppt50ZjPERlS', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('8084ae53-5ac6-40a7-9f5f-dea40fa2aab5', '19870114 201903 1 007', NULL, NULL, NULL, 'Eka Wahyudi', NULL, 'S.Pd., M.Cs', 'Mekar Asri', '1987-01-14', 'Laki-laki', 'Islam', '$2y$10$1HnsdveCEJPnntEfm5Pl3.coo7tTKoohSLfngPA4xaH1OxNPxogAy', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('86f15cfc-fcb7-47a6-ae81-5129f6ef4ddc', '19910310 202121 1 001', NULL, NULL, NULL, 'Sarijanto', NULL, 'A.Md', 'Ketapang', '1991-03-10', 'Laki-laki', '', '$2y$10$OQD.mTRUqdHyhfaiSB1CvuN0yQ9ciZqeLFQhHQ2nORjQHJfUGI3V.', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('87284e92-8239-44a0-86cd-2040f3406f47', '19870716 202121 1 001', NULL, NULL, NULL, 'Deden Nugraha', NULL, 'S.P', 'Sukaresmi', '1987-07-16', 'Laki-laki', 'Islam', '$2y$10$96kp7gIoGdKn2FhrCDQ7jOIRPoFVkjURjNCY9B.pSevsIpyHs2OpW', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('8784ed8e-9d88-44a6-bb02-3f085de35b8c', NULL, '19890124 201512 172', NULL, NULL, 'Firman', NULL, 'S.Pd., M.P.Fis', 'Ketapang', '1989-01-24', 'Laki-laki', 'Islam', '$2y$10$hXhU369LYKFhT0d/P1Owju.nzjYkj3Cn8vTyqhdICQysyossQ/E4i', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('891f6a6b-8bd9-4ad4-bdd6-13c7b2d46782', NULL, '19950704 201708 222', NULL, NULL, 'Utin Kurnia Putri', NULL, 'A.Md', 'Semarang', '1995-07-04', 'Perempuan', 'Islam', '$2y$10$R6/Ri/tyF1enO7/ztHfvmOS6Q081UVdMsYkWtJPcGezJmE3fv0qNS', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('89286b3a-69ef-47dc-8038-34175938abbc', NULL, '19880611 201601 196', NULL, NULL, 'Maya Andriana', NULL, 'SE', 'Teluk Melano', '1988-06-11', 'Perempuan', '', '$2y$10$4ccRDCOTWgeqeO3nqs4B1Ojf94JiAZ4eziUiqjx/xPxhj1a1Ww5ca', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('8961f1e3-2848-4d15-b6b9-d79fdaa8a107', NULL, NULL, NULL, NULL, 'Karmila', NULL, '', 'Ketapang', '1970-01-01', 'Perempuan', '', '$2y$10$C0u3UkoSMqi4W/4APMEAYO8i1LnwuCSwPqyzBl/cBZuRkaZY7h7Ua', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('8a2a0fc9-7adb-47bc-978f-a12b9db859aa', '19860414 201903 2 011', NULL, NULL, NULL, 'Rosmalinda', NULL, 'S.ST.,M.P', 'Karang Baru', '1986-04-14', 'Perempuan', 'Islam', '$2y$10$mfa5jOImLIJuXUgc.sVIBOVv3s94nlZU9wlVIXlkEbsi0G/d3GqBO', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('8a593376-eea9-4931-b0d7-86b72fd79b74', NULL, NULL, NULL, NULL, 'Henni', NULL, '', 'Ketapang', '1985-07-05', 'Perempuan', '', '$2y$10$UQ3f.E5B6pSOVSWRidvUCeIRZKtHYExZ2tqjS2OhEXlmlWPKGo6z6', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('8a75b21c-c073-4a58-8bf6-de1a0f9b5438', '19860125 201803 1 001', NULL, NULL, NULL, 'Yusuf', NULL, 'S.ST., M.T', 'Ketapang', '1986-01-25', 'Laki-laki', 'Islam', '$2y$10$p44Pfp0Y4EM3s4An7hxsRO2MQQyr5K6H7s/DExL.tJM8JqOChjvAO', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('8c2e117d-01ad-4da2-a049-5490e078db83', '19770906 202121 1 003', NULL, NULL, NULL, 'Edi Rahmanto', NULL, ' SE', 'Kelampai', '1977-09-06', 'Laki-laki', '', '$2y$10$HoTLLlH6DRrtBMCIabJdNuYMvzrZghFY4JlxuJi6l5nWOuByN/s8e', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('8c6fdd85-dccf-4df8-888d-61910ca28761', '19891028 201903 2 011', NULL, NULL, NULL, 'Roida Oktovia Sihombing', NULL, 'SE', 'Pontianak', '1989-10-28', 'Perempuan', 'Kristen', '$2y$10$Ebk9C4D/B6J.072CJb7ii.50xi74UaEMfr6z4KaZ9SZfhjZ8JKfOu', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('8d1a9392-ee5b-4086-a103-c86dbf04d2c6', NULL, NULL, NULL, NULL, 'ADMIN EVENT', NULL, NULL, 'BUMI', '2021-01-01', 'Laki-laki', 'Islam', '$2y$10$s1.xv0UNIThA7RIut04H1.Sp6KJkVCn1/CbxDJLXOEycmaBZoUUFm', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('8da944a0-f7df-43a4-8bda-cc6c2b01cb5f', '19841207 201903 1 005', NULL, NULL, NULL, 'Munawar Kholil', NULL, 'S.Si.,M.Pd', 'Pamekasan', '1984-12-07', 'Laki-laki', 'Islam', '$2y$10$4sbrP.XzccHDTcjca.0c6OtGMpDSW7mruw/KxP0OA17HJcKOAkFLC', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('8dbaf7b4-fdc6-4664-ad8f-28925262baaf', NULL, '19900126 201409 141', NULL, NULL, 'Syarifah Mastura', NULL, 'S.Pd.', 'Ketapang', '1990-01-26', 'Perempuan', 'Islam', '$2y$10$tOZRZ6tIqDoSRe8ujsc.gOQJ/xfTeu.fWiBj.TRt8g8wsQt/DM4GO', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('8e33ce55-5330-4cb2-836e-a22a0800b01c', '19890424 202121 1 002', NULL, NULL, NULL, 'Halimansyah', NULL, 'A.Md.', 'Kendawangan', '1989-04-24', 'Laki-laki', '', '$2y$10$jrclM24tOrIFIxIxRKD8P.pjEDfo7rkKghU3XYbf5FaFXS7xf1E.W', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('8eea1d3b-f883-435d-a8a9-453e46053607', '19831217 201903 2 008', NULL, NULL, NULL, 'Alfath Desita Jumiar', NULL, 'S.P.,M.Si', 'Pontianak', '1983-12-17', 'Perempuan', 'Islam', '$2y$10$1wJ0zr4vf8DYAqeWyj7A2uZDpXr.h07hfle2q1KfrEpgbfjFM.sHK', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('8fdecaee-a3ef-4096-9165-26476c4e4753', '19710814 200604 1 005', NULL, NULL, NULL, 'Hidayat', NULL, NULL, 'Ketapang', '1971-08-14', 'Laki-laki', 'Islam', '$2y$10$glHKfa9Am48TUz4mZC19AevF4uIvpF1ovJiC1NvL3JSNpGtan63FO', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('8ffd423c-6a57-454d-b643-d1f134117073', NULL, '19780510 200801 055', NULL, NULL, 'Asep Ruchiyat', NULL, 'S.T.,M.T', 'Bengkayang', '1978-05-10', 'Laki-laki', 'Islam', '$2y$10$6KKD.Cfjs3uBbrbgeYVFP.9GfIDmgfvkq2GjMq1OevGMlji8hP54S', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('908b7dcc-8b5f-4d2a-b745-3caacb11c1c9', '19900614 202121 2 001', NULL, NULL, NULL, 'Kurnia Dewi Permata Sari', NULL, ' A.Md', 'Ketapang', '1990-06-14', 'Perempuan', '', '$2y$10$5jom6HH1QFQnwq0YWr5uLO006KDA3pyMgBgokBASGDbTkfVAbofCW', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('92408291-4e21-41bc-ba91-b632dbc03201', '19630804 198601 1 005', NULL, NULL, NULL, 'Safi\'ie', NULL, 'SE', NULL, '1963-08-04', 'Laki-laki', 'Islam', '$2y$10$mS2Gf3qukTq4vKqffUFxfOxYk0E5uAxM9yCLqnapYzFwG2oGDdgHS', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('966bb315-7f59-470d-aaae-c9a60336c823', NULL, NULL, '3318091606890003', NULL, 'Rois Indriawan', NULL, NULL, 'Pati', '1989-06-16', 'Laki-laki', 'Islam', '$2y$10$Eh4nyHnU8cQ3WkblbwPCiOCUy.lZkPreCmORnUtInW5bMJSsU61cW', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('966bb413-e9b5-46d7-9d60-6361134df0ea', NULL, NULL, '6172016207870003', NULL, 'Dewi Nurmayasari', NULL, NULL, NULL, NULL, 'Perempuan', '', '$2y$10$pzmdPyZ8CqzqP2oCLrw9vud3BHtFHSjAPkWNikktZAH3Z1AEzoxlW', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('968a0145-7799-46f2-b501-e4a26899ac9a', NULL, '19881026 201707 221', NULL, NULL, 'Redika Maulidya', NULL, 'ST', 'Ketapang', '1988-10-26', 'Perempuan', '', '$2y$10$jO87mktry9jB.c6AL2YnX.qNvHwA3M4dwfsArUDH1EiB1oKbXG6xq', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('97693558-91bc-4335-b3cb-0311f337a795', '19631008 199603 1 003', NULL, NULL, NULL, 'Suratmin', 'Ir.', 'M.T', 'Ketapang', '1963-10-08', 'Laki-laki', 'Islam', '$2y$10$kcpA430EPX3y3ZjSHnK4pO9dcKnyipI9oKueN3675VEEJNiUHz.8W', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('98ae6c59-c188-498e-83e4-e511251529b7', NULL, '19840310 200801 017', NULL, NULL, 'Rustiarni', NULL, 'M.H', 'Ketapang', '1984-03-10', 'Perempuan', 'Islam', '$2y$10$CReCHTwUEidgBl9lit4xN.CLsnb05xxZBgVgoHzeJWy4WTHep2Mmi', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('98baf7ed-28bf-4a5d-8f4b-c0e789081d91', NULL, NULL, NULL, NULL, 'Muhammad Sa\'ari', NULL, '', 'Ketapang', '1963-06-23', 'Laki-laki', '', '$2y$10$fwxPnWRvimUMjf7bu8CXLORLAVwPeDpXTXbS6iGgBmVDJ7io1roJO', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('98db1f9b-7be6-446f-a5ab-46208a47867b', '19861109 201903 1 005', NULL, NULL, NULL, 'Rosi Arrasyid', NULL, 'A.Md', 'Sentebang', '1986-11-09', 'Laki-laki', 'Islam', '$2y$10$4pLeJ/3F6VvSRF57UTMQ4uWAed2E5mScYdtgf8BvMN94Ffu6mr0gO', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('99bba172-f59c-4bf4-a7df-31b6d3b00050', '19860923 201903 1 005', NULL, NULL, NULL, 'Yudi Chandra', NULL, 'S.ST., M.T', 'Ketapang', '1986-09-23', 'Laki-laki', 'Islam', '$2y$10$MpLZfX.dw.eFurTcttg.keIehh0efoAJCFVv87SkPWHxL5Hp2Rafu', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('9a8e0752-f115-4c47-a7bc-49f8c1a862b4', '19880901 201903 1 010', NULL, NULL, NULL, 'Sy. Indra Septiansyah', NULL, 'S.Si.,M.T', 'Pontianak', '1988-09-01', 'Laki-laki', 'Islam', '$2y$10$suykkLO3JZdyc/pqgiS35.mTrEs6YKH6.tbhC.XYhfSXilZfwO3BO', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('9b26a021-e661-4f49-ab22-6f49afe9cd9b', NULL, '19790910 200801 058', NULL, NULL, 'Hairian Rahmadi', NULL, 'S.T.,M.T', 'Sungai Jaga B', '1979-09-10', 'Laki-laki', 'Islam', '$2y$10$EXxBk5DP/1CyaHaDPBGQhOGXBSE9mnKlf1sXWoDOWhxIG8YCDFtCy', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('9b7afb74-0772-48e9-acee-2720557d1384', NULL, NULL, NULL, NULL, 'Ahmad Riduan', NULL, '', 'Ketapang', '1996-02-24', 'Laki-laki', '', '$2y$10$saUWHhZNTO9o42VMkz5d3unGuVAvg8GcNfmivAD3y574zkFNZOKPC', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('9cc7f277-d556-4fae-8d75-68e64bcfcad4', NULL, '19820404 201611 213', NULL, NULL, 'Nurhayati', NULL, 'S.P.,M.Si', 'Pedada', '1982-04-04', 'Perempuan', 'Islam', '$2y$10$iptTBtFzzbiL/CPqd9Mfnem7LPVYO3ou4P//Xte8ck3xJiW0XM1YS', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('9ebea3d2-60b0-4817-9e36-661f71d69e73', NULL, '19950203 202107 259', '6104174302950003', NULL, 'Heni Rahmadianingsih', NULL, 'M.Pd', NULL, NULL, 'Perempuan', '', '$2y$10$aP3f2aR4QYPzjBQNpVD0v.2qoGLd8oNk11ZVL/8uXu5DXPRKhuGV6', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('9faa86a0-147d-4657-9592-160f9bb9d06f', '19850805 202121 2 009', NULL, NULL, NULL, 'Nur Aida', NULL, 'S.Pd.,M. Pd', 'Ketapang', '1985-08-05', 'Perempuan', 'Islam', '$2y$10$rE/8XSxE/6yaJIW9C7KGIeevJi59rX/iz3tbl2Czp2.fG2pzPosCm', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('a12f6e04-c76b-44d0-ad59-7427ac275be8', '19931228 201903 1 012', NULL, NULL, NULL, 'Rahmat Aryanto', NULL, 'A.Md', 'Ketapang', '1993-12-28', 'Laki-laki', 'Islam', '$2y$10$nXCs0WUwh88lj8DR.MLXVuxCV1gS4VodlggPtROKFjl.30xjHJOzq', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('a15ebfc3-4700-4231-b982-f6fd6f150f1f', NULL, NULL, NULL, NULL, 'Evi Mellianti', NULL, 'SST', 'Ketapang', '1993-06-02', 'Perempuan', 'Islam', '$2y$10$wwp98n3ZsjVu.az.QBUYRugY5fqseehiFgvxrC1LGKUzCs8QNsELK', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('a1c5ae62-36d7-4d2e-b207-999afa6a6103', NULL, '19740401 201311 132', NULL, NULL, 'Ahmadin', NULL, 'S.Sos.', 'Pontianak', '1974-04-01', 'Laki-laki', '', '$2y$10$GWtiFDMHZkfNeXP1Qn1v2ucXdNF/VwYiAbtWGilcTfMfAJ1kjVgym', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('a1f6271f-46a8-4f4d-ad97-b11ed9ecca1b', NULL, '19860505 201602 203', NULL, NULL, 'Ade Herlinda', NULL, 'S.Pd', 'Ketapang', '1986-05-05', 'Perempuan', 'Islam', '$2y$10$8EeenN9wa/QMhb/QtYIpLOxz1X9pCKGuzKVvM3DygB1VsnREZzZRK', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('a3cf6b37-c6e0-411e-ab87-9333e5f9e84a', '19800518 202121 1 007', NULL, NULL, NULL, 'Fathurrahmi', NULL, 'SE.,MM.', 'Ketapang', '1980-05-18', 'Laki-laki', 'Islam', '$2y$10$rKphwirVUAFj3v2uQhSQKO3UhkCgM2cqlPwUW8BIMSb7BgpAs6zcm', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('a64ec6c9-f25d-40c9-acf2-f8054184f6c5', '19820520 202121 1 005', NULL, NULL, NULL, 'Ardiansyah Putra', NULL, 'A.Md.', 'Pontianak', '1982-05-20', 'Laki-laki', 'Islam', '$2y$10$3dFBke816KvwHt.SusK4SePj3foB6MU2hm0JJBWmueDllzSFOnqn2', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('a7ab3156-4a6a-4d34-b4fd-ecdee3e951de', '19840926 201903 1 008', NULL, NULL, NULL, 'Irianto SP', NULL, 'S.ST.,M.MA', 'Pontianak', '1984-09-26', 'Laki-laki', 'Islam', '$2y$10$wfuFJBeEeG9GcdgW4Z0ux.KqBasuhwf7NzCsQ8SYgps3srUF.lyli', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('a8025fce-d1b8-4acf-80c2-ace804464787', NULL, NULL, NULL, NULL, 'Andri Gunawan', NULL, '', 'Ketapang', '1988-01-01', 'Laki-laki', '', '$2y$10$hIpzdbwtdgOMU1sXT/usW.U6Ki0DLerrE/12wM4DMYmsi7Kqm28tK', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('ac0df63f-204d-400a-83bd-66b7fc7d1d8d', '19770503 202121 1 004', NULL, NULL, NULL, 'Yudi Adlia', NULL, 'SE', 'Ketapang', '1977-05-03', 'Laki-laki', 'Islam', '$2y$10$/YKCIpDKT32b.DN3wojxFOjbvpEIXWNk.64dCwXVmm4ncwdYbKHe6', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('aeb5d395-09f4-42b1-8680-75663045684e', NULL, NULL, NULL, NULL, 'Supardi', NULL, '', 'Ketapang', '1979-01-17', 'Laki-laki', '', '$2y$10$9zZikzLoA7A92STXA5S/gekMhDp.WZOfrt4YFzC0IvTHIjlZNigkC', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('af76d150-7435-4f3a-bf5f-3fb3d991c626', '19920106 201903 2 015', NULL, NULL, NULL, 'Betti Ses Eka Polonia', NULL, 'S.Pd.,M.Pd', 'Lamongan', '1992-01-06', 'Perempuan', 'Islam', '$2y$10$NU0CHoOgakHT266gfKi.1OVXsbt1wVhMruUQRyDmcOQA9UKpcakLq', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('b14b7e81-2fc3-45e5-adc1-750cc73f0fb2', NULL, '19740510 200801 041', NULL, NULL, 'Isye Selvianti', NULL, 'SH.,M.AP', 'Solo', '1974-05-10', 'Perempuan', 'Islam', '$2y$10$H7B/279MV5pkwNifml.shuyxZtR6Nw9JJyhcgPmlDnp4KA90Kf186', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('b2035d20-b83c-479d-a032-ecdef5bf9eb0', '19780324 202121 1 005', NULL, NULL, NULL, 'Rodiansyah', NULL, 'A.Md', 'Ketapang', '1978-03-24', 'Laki-laki', 'Islam', '$2y$10$0bwsAEUfTzvqUhtCO/jzmORiFNMTokpnKb6djwUjMemMr2W1fAArW', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('b2c740a8-348b-4e2e-9713-38c9712fe1d8', '19910617 201903 2 022', NULL, NULL, NULL, 'Saima Putrini R Harahap', NULL, 'S.Pd.,M.Pd', 'Padang Sidimpuan', '1991-06-17', 'Perempuan', 'Islam', '$2y$10$85fD0RahsPx5OzwbW16kFOjI9n0chevhpiyLM2LQXrwBX6hB5FGXa', '', '', '', '2022-07-04 04:56:08', '2022-07-04 04:56:08'),
('b2f3b1cc-0b55-4c9d-9e5b-0e6c7fac9c8b', '19750619 202121 2 006', NULL, NULL, NULL, 'Rohyati', NULL, 'A.Md', 'Trenggalek', '1975-06-19', 'Perempuan', '', '$2y$10$PLA9sSGZ4vJsFqp5sMrOheawHQeH3H.JRAz1D8lTvRVuTyTS9tX7a', '', '', '', '2022-07-04 04:56:08', '2022-07-04 04:56:08'),
('b3b814f5-e354-47b3-a000-156679809080', '19901105 201903 1 007', NULL, NULL, NULL, 'A. Nova Zulfahmi', NULL, 'S.Pi.,M.Sc', 'Kediri', '1990-11-05', 'Laki-laki', 'Islam', '$2y$10$qv.pmLBRghYr3CHVkA6yfuP4NxzS2Otqdo6h3KuRDTZj5ATNaeUlS', '', '', '', '2022-07-04 04:56:08', '2022-07-04 04:56:08'),
('b5f4d025-952e-4260-a45b-ab50e561a491', NULL, '19890730 201601 189', NULL, NULL, 'Nurhanudin', NULL, 'A.Md', 'Ketapang', '1989-07-30', 'Laki-laki', 'Islam', '$2y$10$OmCpQR35EY4dPaW0Bz/cVOjin8ktX46hmeIupnKKvsds2nJcvT4Y6', '', '', '', '2022-07-04 04:56:08', '2022-07-04 04:56:08'),
('b6308b4f-7569-47c1-980f-f266d255b293', '19780926 202121 1 003', NULL, NULL, NULL, 'Martanto', NULL, 'ST., MT', 'Sleman', '1978-09-26', 'Laki-laki', 'Islam', '$2y$10$Oqmi49dxJEQzaZj8sYjwQuiM5wd5UWkXH9oLIas704bWQyzvWU/e2', '', '', '', '2022-07-04 04:56:08', '2022-07-04 04:56:08'),
('b674c34c-18d8-4f2e-b78d-ba263ecb6f03', NULL, '19890711 201601 188', NULL, NULL, 'Nanang Hartoni', NULL, 'A.Md', 'Ketapang', '1989-07-11', 'Laki-laki', 'Islam', '$2y$10$AeHOef.bKB1R0upiD8RHU..7ceclqUlzg414T7DtSbHJX0FAPyQAu', '', '', '', '2022-07-04 04:56:08', '2022-07-04 04:56:08'),
('b67e1667-7681-4ba7-8eb7-49df4cae2eed', '19890316 202121 1 001', NULL, NULL, NULL, 'Faisal', NULL, 'A.Md.', 'Ketapang', '1989-03-16', 'Laki-laki', 'Islam', '$2y$10$1cz/jqWGpJPozuRTnZ/ou.J2u6WYRSCYBhkZIMKfsd5NQ4f8oJwk6', '', '', '', '2022-07-04 04:56:08', '2022-07-04 04:56:08'),
('b7369622-3dd7-487f-8add-b67d8512a6c3', NULL, '19911112 201601 184', NULL, NULL, 'Eva Prawinda', NULL, 'S.Pd', 'Ketapang', '1991-11-12', 'Perempuan', 'Islam', '$2y$10$yYZYq3EhbiqOskTVnLhjienjosO7A/H5YzrZpJI7ArzM3J0iPRzrW', '', '', '', '2022-07-04 04:56:08', '2022-07-04 04:56:08'),
('b77f8f84-beb9-4d27-8a5f-475ac4fd520b', '19900228 202121 2 001', NULL, NULL, NULL, 'Nisa Zahara', NULL, 'A.Md', 'Ketapang', '1990-02-28', 'Perempuan', 'Islam', '$2y$10$v4UwbwCjJeoXZOZMlWg0jOlcMjhDO6flv5ZNtNGU65uYkOvf/Faw6', '', '', '', '2022-07-04 04:56:08', '2022-07-04 04:56:08'),
('b83e233a-d9b4-459d-93de-d33523c566b0', NULL, '19890424 201509 165', NULL, NULL, 'Indra Pratiwi', NULL, 'M.Pd', 'Ketapang', '1989-04-24', 'Perempuan', 'Islam', '$2y$10$ikFNIHFhnqiMT4IdjME2ouDYuJz/HB5/PS2XgUUH.lnSnoKuGmdTe', '', '', '', '2022-07-04 04:56:08', '2022-07-04 04:56:08'),
('b95679cb-9866-4c31-8c5b-960b8ecec93c', NULL, NULL, NULL, NULL, 'Reino Muhammad', NULL, 'ST., M.Cs', 'Indonesia', '1945-08-18', 'Perempuan', '', '$2y$10$fBltcVQWibHBa5KfJYfogedfKoxOS8.cSZgebkAOqfOjbLj1/WI9m', '', '', '', '2022-07-04 04:56:08', '2022-07-04 04:56:08'),
('bc1f265d-00ef-485c-867a-a32b2899a4e8', NULL, '19951222 202104 253', '6104182212950004', NULL, 'Teguh Eko Saputra', NULL, 'A.Md.Kom', 'Mayak', '1995-12-22', 'Laki-laki', 'Islam', '$2y$10$8x9zQnenBZsBL2lDPIZOceND8JafoERDaW3mk/EwH.i4gavAgrv9m', '', '', '', '2022-07-04 04:56:08', '2022-07-04 04:56:08'),
('c0a53e24-a714-47cc-8651-1f413b8b72fe', NULL, '19881113 201601 182', NULL, NULL, 'Noprizan Azmi', NULL, 'ST', 'Simpang Empat', '1988-11-13', 'Laki-laki', 'Islam', '$2y$10$fkvqq0bKj3F6v/buVDjmFemC.cyiveU05c6dcrKiiEGMX/9X6ah5K', '', '', '', '2022-07-04 04:56:08', '2022-07-04 04:56:08'),
('c37724c8-36bf-4bbf-82ad-bac50ce9078a', NULL, '19940929 201601 193', NULL, NULL, 'Lia Kurnia', NULL, 'SP', 'Ketapang', '1994-09-29', 'Perempuan', 'Islam', '$2y$10$QN6t2M9ZUXL1TlvSyoViiOdD6LJx6Gb6yCe/LC7VlDtJenTbKMG6O', '', '', '', '2022-07-04 04:56:08', '2022-07-04 04:56:08'),
('c5bc3f89-addd-4737-bd78-ac8b414679da', '19750808 202121 1 005', NULL, NULL, NULL, 'Sahardi', NULL, 'SE', 'Ketapang', '1975-08-08', 'Laki-laki', '', '$2y$10$HDMkjeRxKuFU4P506QZRDOQWA0upH2Ja29tAnx58KpEx4TyWfFClu', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09');
INSERT INTO `simadu__pegawai` (`id`, `nip`, `nup`, `nik_ktp`, `email`, `nama`, `gelar_depan`, `gelar_belakang`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `password`, `foto`, `username`, `remember_token`, `created_at`, `updated_at`) VALUES
('cc37bab9-4d25-4dff-9ac9-3552e5921705', NULL, '19890424 201507 158', NULL, NULL, 'Aprianda Ibrahim', NULL, 'S.Kom', NULL, '1989-04-24', 'Laki-laki', 'Islam', '$2y$10$534rqKdqAH3ixl8Z6MLvSe1KHDIguPBVnaxqZvEEfWmsiLCHB/y8O', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('cda69cea-4502-4db3-9954-70f92c28f2f1', NULL, '19860410 201502 153', NULL, NULL, 'Arman', NULL, 'A.Md.', 'Ketapang', '1986-04-10', 'Laki-laki', 'Islam', '$2y$10$9kiqJygcmNEqYaAg7t3zrOiXxpSV9m/AzfN0FguwE.nUM47uI9nCO', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('cda9609b-0bed-49c5-96cc-e46831985dc7', NULL, '19950219 201708 220', NULL, NULL, 'Rahmadi', NULL, 'A.Md', 'Ketapang', '1995-02-19', 'Laki-laki', 'Islam', '$2y$10$2lP0u1CjKPpkTuUwlrIRme.4gls3lcCBa/1rz7MBkRcPM2Qup68kS', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('cdb42c37-d361-44aa-9d90-85dc5c02cc4c', NULL, '19891220 201404 133', NULL, NULL, 'Emy Arahman', NULL, 'S.Pd., M.Pd', 'Pontianak', '1989-12-20', 'Perempuan', 'Islam', '$2y$10$977347z4BkY1LoHRaKOtH.bljQyKmSTpmL08JHsuKR8swldoXRDYi', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('d039bc2d-7c92-4349-ae77-e67fd4dcea7f', '19830501 202121 1 002', NULL, NULL, NULL, 'Muhammad Rizal', NULL, 'A.Md', 'Ketapang', '1983-05-01', 'Laki-laki', 'Islam', '$2y$10$uJ5DU4NgR4h70lX4u2Q.s.quy0Lnxpml6KVqMa/D64Zuq8ezpuWaS', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('d04a0a35-e772-4766-abc3-d90346ecc0a9', NULL, NULL, NULL, NULL, 'Zulkarnaen', NULL, '', 'Ketapang', '1988-09-24', 'Laki-laki', '', '$2y$10$u9dxIvRpSX9D1qGYxmjWAu40PMbHf1jgod8z7a0g24Hr4Hda93C.S', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('d2bc54ef-e3ec-46ae-adcf-8f856bbd35fc', '19901230 202121 1 001', NULL, NULL, NULL, 'Nasriadi', NULL, 'A.Md.', 'Watampone', '1990-12-30', 'Laki-laki', 'Islam', '$2y$10$PXIiMOBy65n7L3PcTz1XNe2ERmr6boIj1hTuGl0VKkcAg/mhsh6JC', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('d307a54a-f25e-4a3b-95e5-75c0a78fe2e2', NULL, '19890807 201302 128', NULL, NULL, 'Diah Chairunisa', NULL, 'SE.', 'Ketapang', '1989-08-07', 'Perempuan', 'Islam', '$2y$10$GbqCoB31nQZ2o6jrClW2/.rQfNFoe9wAvM.XnUeLwR1XP6MlPJChy', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('d399b985-7411-4a15-8eed-fbdb43b44dbc', '19891109 201803 2 001', NULL, NULL, NULL, 'Rizqia Lestika Atimi', NULL, 'S.T., M.T', 'Pontianak', '1989-11-09', 'Perempuan', 'Islam', '$2y$10$VcXhEDlAsCBPKQ7K5BsUbOejiPdF9Zau7XNf/xF/6N4HyARkWGKrK', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('d4845c8d-dcda-421c-99ec-545bf9527ca1', NULL, '19940130 201601 185', NULL, NULL, 'Utin Asiyatin Nur', NULL, 'SE', 'Ketapang', '1994-01-30', 'Perempuan', 'Islam', '$2y$10$yyFxeruNS0ELvhVmJ.blHelH18h.1mcxKUAHkjsr2.x6yc3Dy.m1C', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('d5090102-10f3-42ae-903d-0e583097ed02', NULL, '19911222 201409 144', NULL, NULL, 'Ningli Diniyati', NULL, 'S, ST', 'Teluk Melano', '1991-12-22', 'Perempuan', 'Islam', '$2y$10$uiHh8jCPo2JdKoO4lCWhROn2dGMCXedGpCE9xnJ72/y/P0CSNAp4O', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('d8987bf5-6238-4cc0-9be7-305f922cc657', NULL, NULL, NULL, NULL, 'Ernawati', NULL, '', 'Ketapang', '1970-01-01', 'Perempuan', '', '$2y$10$9VBXEFwQGQjPyyyH2U4Jf.6kJbgID1dMhULajMpymayIR/YyPjjYC', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('da2352ee-66c7-41f4-b95a-ebfbc4f231ad', '19821107 202121 2 007', NULL, NULL, NULL, 'Dian Fitriarni', NULL, 'S.ST.,M.Sc', 'Ketapang', '1982-11-07', 'Perempuan', 'Islam', '$2y$10$uxXoTFkeSzRT.OzfbaAJvetOOCqBdaYwxWVMS72CU1Jei7SeWMOru', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('da94c955-4436-4ea5-bb45-b8fce9a4b154', NULL, '19910219 201507 154', NULL, NULL, 'Kharisma', NULL, 'S.Kom. M.Kom', 'Ketapang', '1991-02-19', 'Laki-laki', '', '$2y$10$8pgzqWqapBhiImQXZ3uiHu8zBbVAloX2qXOYgyHNDJJdAYK.zL8Iy', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('dac66e3b-fb91-11ec-a972-088fc330ed2d', '12345678912345678', NULL, NULL, NULL, 'fathur', NULL, NULL, 'ketapang', '2002-10-13', 'laki-laki', 'islam', '1234', '', '', '', NULL, NULL),
('db6d49db-22b0-409f-8450-1beb34250905', '19901111 201903 2 018', NULL, NULL, NULL, 'Novi Indah Pradasari', NULL, 'S.Kom., M.Kom', 'Ketapang', '1990-11-11', 'Perempuan', 'Islam', '$2y$10$z9zOTh8u/PoTXTEEnjKZfeQP4aGGTamP/aYs33ZRcwAZEV8VOUKV6', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('dc497585-9080-4954-8417-89be283b4665', '19881104 201903 1 004', NULL, NULL, NULL, 'Idris Herkan Afandi', NULL, 'S.Pd.,M.T', 'Ketapang', '1988-11-04', 'Laki-laki', 'Islam', '$2y$10$YIMOj4yLpUsolWp.O9j2GObMUVc4UqBMUPRbEMPr99PxNgc.HeEYS', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('de4b9779-eb40-42bf-8bfd-6bb1125c1703', NULL, '19840327 201110 103', NULL, NULL, 'Muhammad Taufik', NULL, ' S.T', 'Mempawah', '1984-03-27', 'Laki-laki', '', '$2y$10$UzBLFShSQ4N/IRk.qF75keDELw4kCOleQnBMzjUzU68t92OUdllee', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('de9a5fdb-117c-45fe-8b46-ae4ce536270f', NULL, 'NIP.1985 070720 080', NULL, NULL, 'Julyan Purnomo', NULL, 'S.ST., M.T.', 'Ketapang', '1985-07-07', 'Laki-laki', '', '$2y$10$F7Qdq.Rh4tblX6.6nPsj6.47WEO.x7siyYBxSrNl/4p7llzxGaruu', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('dee9fbb6-7eda-4464-8d26-1a41838a13d5', NULL, '19940702 201709 223', NULL, NULL, 'Agung Iswandi', NULL, 'ST', 'Ketapang', '1994-07-02', 'Laki-laki', 'Islam', '$2y$10$h8pxsoDiIp9CriEqxm8huOCJax6jJaYaZc.mIY3ZEByMNS8ZC047e', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('e22b1a40-7094-48a7-8a1b-a7407d679e4c', '19771010 200811 1 024', NULL, NULL, NULL, 'Harsusani', NULL, 'S.T., M.T', NULL, '1970-01-01', 'Perempuan', '', '$2y$10$2XKWDZEKgKM2/TunDZE5xeuZNs4b3ufM1grzuXq2O.ykndvR.B69W', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('e32d5a13-49c3-481a-9485-2ad0789512cc', '19880513 202121 1 001', NULL, NULL, NULL, 'Citro Handoyo', NULL, 'S.T', 'Pontianak', '1988-05-13', 'Laki-laki', 'Islam', '$2y$10$xXnXU3aePBUX71uHVnRK.uY.H242Mgh17kansgyF1e.tplKvCItSu', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('e3825cea-49cf-4e22-8b9e-6927099e859f', NULL, NULL, NULL, NULL, 'Syarif Niswah', NULL, '', 'Ketapang', '1975-05-05', 'Laki-laki', '', '$2y$10$FLrUbtnFnSK85n0qrvmMs.4zKiihwfOBUoCBUg1IxqHEQvV8TG0ym', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('e6ba9e74-e855-4438-b2de-32099b533aa2', NULL, '19880402 201601 191', NULL, NULL, 'Mulyo Hadi Santoso', NULL, ' A.Md', 'Jelai Hulu', '1988-04-02', 'Laki-laki', '', '$2y$10$7LJk7E.qLDg6FRUlSij1We0Jb7C4ZTSfSOfWlIxHHhgD1kkpvzGtO', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('e70044c4-9afe-4ba9-88dc-67ece46c36f8', NULL, NULL, NULL, NULL, 'Nurmalawati', NULL, '', 'Ketapang', '1973-04-13', 'Perempuan', '', '$2y$10$7HI.8Ui9fWCQxSQIcfzPwOl05IjdMj2BNvexsuhy0LFM1hfC6BXVe', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('e8e2dbb1-c651-4a0a-8dea-0926135e428b', '19900121 201803 2 001', NULL, NULL, NULL, 'Sartika', NULL, 'S.Si.,M.T', 'Pontianak', '1990-01-21', 'Perempuan', 'Islam', '$2y$10$GWhNQjiKjKSVp.xaXzyL1uhiwk3DjnOM6CsNcR.2y4fn4bJ3jQqvC', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('e8fd3915-260d-4079-8962-6608c6550e77', '19901203 202121 1 001', NULL, NULL, NULL, 'Wahyu Iswanto', NULL, 'A.Md', 'Ketapang', '1990-12-03', 'Laki-laki', 'Islam', '$2y$10$feSHIszVOQug2LPZP95vs.cJ65Zt.GSg42If74bWtEGjbtPQ7VCOy', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('e9b3eaac-e378-4e61-a660-c06a4f47490a', '19820310 202121 2 011', NULL, NULL, NULL, 'Nenengsih Verawati', NULL, 'S.TP.,M.P', 'Bima', '1982-03-10', 'Perempuan', 'Islam', '$2y$10$LsrJpaUM2Tb1DKmUYUHc9uPzZ311T2TZA.uMzDlMr257MwhZ56n2W', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('eb09439a-7370-4b1e-b765-252298ab31a8', NULL, NULL, NULL, NULL, 'M. Hidayat', NULL, '', 'Ketapang', '1978-10-26', 'Laki-laki', '', '$2y$10$Ug/23dpGOmmmoQ/LkY1OiuiHEazD8wygzdjb1MOUpfue4JWvF60Fm', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('ed7828d3-b34d-4d25-8378-7e3b75a08f66', NULL, '19850220 201601 192', NULL, NULL, 'Abdul Hafid', NULL, 'S.T', 'Nanga Tayap', '1985-02-20', 'Laki-laki', 'Islam', '$2y$10$y2Pnsf8FpLb97/9AJQJQFek44S8rVahpkNhYs002b11k/fhqkJsVK', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('ef103381-4e22-4d34-a141-83dfeb98340f', '19741101 202121 2 005', NULL, NULL, NULL, 'Sri Handayani', NULL, 'A.Md', 'Ketapang', '1974-11-01', 'Perempuan', 'Islam', '$2y$10$aGyC/0bFAyFSUH9/b3F.mOoqmJ.Ok6fYvPR2zDiJxZF6/rWTzB7s.', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('f34be033-0f08-4655-b2ba-b68f4139017f', '19770505 202121 1 007', NULL, NULL, NULL, 'Ismael Marjuki', NULL, 'S.T.,M.T', 'Ampalu Tinggi', '1977-05-05', 'Laki-laki', 'Islam', '$2y$10$c8PO61SwOhmGxSvhHTxAvOFXIcgClEfYVaheNdREo0uSeY9rmgs2u', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('f585f46a-98ed-4663-9f26-28891e3127cc', NULL, '19900611 201604 204', NULL, NULL, 'Ari Budiansyah', NULL, 'SE', 'Ketapang', '1990-06-11', 'Laki-laki', 'Islam', '$2y$10$RGBqeAeXRlrxTLgvRPnni.58dV3/yInvp3Uv9mC6ggLXk99xSJ/G6', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('f59fa54b-a4e7-4bc2-90c3-6ec9f03a928b', '19681030 200112 1 002', NULL, NULL, NULL, 'Endang Kusmana', NULL, 'S.E.,M.M.,Ak,CA', 'Ciamis', '1968-10-30', 'Laki-laki', 'Islam', '$2y$10$bhAgG4ur/Dm3.9yHqxuQ6OA3DJFpFZlClaf98PMTLYLSHeHIvCaRC', '', '', '', '2022-07-04 04:56:11', '2022-07-04 04:56:11'),
('f7c75340-cf0b-4402-963f-e8aca8e5936b', NULL, '19920917 202104 251', '6104171709920003', NULL, 'M. Alpiani', NULL, 'S.T', NULL, NULL, 'Laki-laki', '', '$2y$10$5SlsDcMIQsyQHuepxBHCau5wBTBGklFvD4Vm/OKIz3PGOr8KBz02y', '', '', '', '2022-07-04 04:56:11', '2022-07-04 04:56:11'),
('f851e7bd-cc56-49dc-ab9b-97944d6041cd', NULL, '19810817 200801 042', NULL, NULL, 'Syf. Umi Kalsum', NULL, 'S.Sos.,M.AP', 'Ketapang', '1981-08-17', 'Perempuan', 'Islam', '$2y$10$3vNIaQ54Oh/ehxIyKQZbROykj90PfStAMK4aSiR1F5x1CLr5BhkzW', '', '', '', '2022-07-04 04:56:11', '2022-07-04 04:56:11'),
('f97a9a05-82df-4dea-af31-c8014d4ca784', NULL, NULL, NULL, NULL, 'Rico Anugrah', NULL, '', 'Ketapang', '1994-09-01', 'Laki-laki', '', '$2y$10$1xqXIRRBCMu1V./cAuzSq.d.AagPSIzpDWejjm5/AxpB5APnTS3Fq', '', '', '', '2022-07-04 04:56:11', '2022-07-04 04:56:11'),
('fcf015d0-91e5-4808-8aa3-a8cf44bd547b', '19891017 202121 2 001', NULL, NULL, NULL, 'Tri Kumala', NULL, 'SP', 'Ketapang', '1989-10-17', 'Perempuan', 'Islam', '$2y$10$Qrxt6dH6lcAl5ZFXN.ELgeFmlNb0Fm9XZtw0COK1foBWMu6OOnVS2', '', '', '', '2022-07-04 04:56:11', '2022-07-04 04:56:11'),
('fd63b679-ae5a-46da-9ac2-3759ece0eac6', '19920414 201903 2 025', NULL, NULL, NULL, 'Mia Anggreini', NULL, 'A.Md', 'Nanga Keduai', '1992-04-14', 'Perempuan', 'Islam', '$2y$10$cNx5jHEurFhYJLvU/OO4ke.6sV1ZWzqcJcHEQva5G3iyMAElw7yuS', '', '', '', '2022-07-04 04:56:11', '2022-07-04 04:56:11'),
('fea080ab-8d56-4ba0-99f2-5ed8f0d4e1d5', NULL, '19811111 200801 012', NULL, NULL, 'Marisa Nopriyanti', NULL, 'STP., M.P.', 'Ketapang', '1981-11-11', 'Perempuan', 'Islam', '$2y$10$L0xik93JLrlfBghRmTkrb..AXJLlgROQlfTt83woRLFXhFBHkoZZq', '', '', '', '2022-07-04 04:56:11', '2022-07-04 04:56:11'),
('fed5ef8b-675f-46be-9dc4-947c09e14dac', NULL, '19911104 201601 190', NULL, NULL, 'Nurimansyah', NULL, ' SP', 'Ketapang', '1991-11-04', 'Laki-laki', '', '$2y$10$/87I51EPlHi6eenceY2pqeX2OR6CDXLlGn6LDZKQPPeHN0Y1PCL.O', '', '', '', '2022-07-04 04:56:11', '2022-07-04 04:56:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `super_admin__module`
--

CREATE TABLE `super_admin__module` (
  `id` char(36) NOT NULL,
  `app` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `super_admin__module`
--

INSERT INTO `super_admin__module` (`id`, `app`, `tag`, `name`, `title`, `subtitle`, `color`, `menu`, `created_at`, `updated_at`, `url`) VALUES
('9657a205-33c0-40b0-bbbf-2aabb1f32753', 'Admin', 'sspi-admin', 'Admin', 'Admin', 'Teknisi', '#800000', 'admin', '2022-06-27 13:39:18', '2022-06-27 06:39:18', 'admin'),
('96702d9f-ce29-450e-8995-20d58c797d38', 'Sispi Koordinator', 'sispi-koordinator', 'Sispi', 'Sispi', 'Koordinator', '#085f63', 'sispi.koordinator', '2022-06-01 05:10:59', '2022-06-01 05:10:59', 'sispi/koordinator'),
('96708ce0-e544-4344-8537-da7cadf1eec0', 'Sispi', 'sispi-admin', 'Sispi Admin', 'Sispi', 'Admin', '#085f63', 'sispi.admin', '2022-06-01 09:37:20', '2022-06-01 09:37:20', 'sispi/admin'),
('967d9d05-a4d7-4709-9f7e-163a1673483a', 'Sispi', 'sispi-keluhan', 'Sispi Keluhan', 'Sispi', 'Keluhan', '#5f6308', 'sispi.keluhan', '2022-06-07 21:28:14', '2022-06-07 21:28:14', 'sispi/keluhan'),
('967db231-5b27-47d3-80cd-74f1d62d16c7', 'Sispi', 'sispi-keluhan-koordinator', 'Keluhan Koordinator', 'Sispi', 'Keluhan Koor', '#5f6308', 'sispi.keluhan-koordinator', '2022-06-07 22:27:26', '2022-06-07 22:27:26', 'sispi/keluhan-koordinator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `super_admin__role`
--

CREATE TABLE `super_admin__role` (
  `id` char(36) NOT NULL,
  `id_pegawai` char(36) NOT NULL,
  `id_module` char(36) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `super_admin__role`
--

INSERT INTO `super_admin__role` (`id`, `id_pegawai`, `id_module`, `created_at`, `updated_at`) VALUES
('966160e9-0038-42e2-9761-d52f25fa5f67', '0d8bcf7b-fb92-11ec-a972-088fc330ed2d', '9657a205-33c0-40b0-bbbf-2aabb1f32753', '2022-05-24 20:36:58', '2022-05-24 20:36:58'),
('96b294a1-3c7a-40af-9641-1c70683596b7', '0d8bcf7b-fb92-11ec-a972-088fc330ed2d', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-04 05:23:39', '2022-07-04 05:23:39'),
('96b294af-327c-4e26-8c40-50118f00e453', '0d8bcf7b-fb92-11ec-a972-088fc330ed2d', '96708ce0-e544-4344-8537-da7cadf1eec0', '2022-07-04 05:23:48', '2022-07-04 05:23:48'),
('96b294bf-65c6-4650-a045-88affbfd2c9f', '0d8bcf7b-fb92-11ec-a972-088fc330ed2d', '967d9d05-a4d7-4709-9f7e-163a1673483a', '2022-07-04 05:23:59', '2022-07-04 05:23:59'),
('96b294d0-f587-4020-b770-43d636921e72', '0d8bcf7b-fb92-11ec-a972-088fc330ed2d', '967db231-5b27-47d3-80cd-74f1d62d16c7', '2022-07-04 05:24:10', '2022-07-04 05:24:10'),
('96be96fb-4bb6-407f-b3e9-3ff675b9d0ff', '02b2a632-7432-4eaa-9898-b2ea879ff373', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:40:10', '2022-07-10 04:40:10'),
('96be9705-58b8-46e6-9151-e92de74016ed', '02fb52d1-876d-4dca-83d5-a8d769842eb5', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:40:16', '2022-07-10 04:40:16'),
('96be970e-d9a3-4f9e-8e86-b6b42050d3df', '03968e4c-1c63-4e6e-8d6a-4c31651cb5ac', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:40:22', '2022-07-10 04:40:22'),
('96be9718-d51d-412a-8ff9-616f7f14ff3d', '03c8bbe4-15b5-4fa5-8024-dcc8abd2f9ac', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:40:29', '2022-07-10 04:40:29'),
('96be9720-d0a0-4fba-83b3-491d61052183', '045cfd08-9a76-4c18-a1eb-b43a99f48c57', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:40:34', '2022-07-10 04:40:34'),
('96be9728-4f60-4d51-8a87-de74b7555c93', '0854e795-2c48-484e-b919-675b7be7dc7c', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:40:39', '2022-07-10 04:40:39'),
('96be9730-6cfe-4b8f-b514-33a3ebfebf0c', '093cca9b-a773-4867-a5f6-a665467f791b', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:40:44', '2022-07-10 04:40:44'),
('96be9741-a60b-4947-85e5-22a63a786be3', '0a89879b-7875-4420-ab42-4ec9cb00e86e', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:40:56', '2022-07-10 04:40:56'),
('96be974a-1708-49f7-8659-0b481ea304a3', '0ed02966-83fd-4b68-b3e6-077f75582dd2', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:41:01', '2022-07-10 04:41:01'),
('96be9751-86c3-4c27-885b-001584e3236c', '13c7279b-9d2e-4afa-a641-ca2ebc14f151', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:41:06', '2022-07-10 04:41:06'),
('96be9759-3682-45a4-9b03-31259c111902', '13dd745d-221f-421f-b78b-138131893d28', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:41:11', '2022-07-10 04:41:11'),
('96be9762-8a30-40b8-8fa3-bafc46415c3c', '143f2dec-fc53-45e6-a700-989bdf50c019', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:41:17', '2022-07-10 04:41:17'),
('96be976a-2423-4242-be6b-0e6b09a71708', '14e636c6-3ca1-4e24-9072-3b0b707abc99', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:41:22', '2022-07-10 04:41:22'),
('96be977e-f469-4b03-89f5-11b5f0717709', '15417e2f-797e-43fe-ac3f-54b550f683ad', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:41:36', '2022-07-10 04:41:36'),
('96be9786-d6d1-4fbd-8649-a71b3164bbd2', '159c1ff3-499e-4acc-84c2-bc844f8da135', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:41:41', '2022-07-10 04:41:41'),
('96be978d-bf64-4ef5-a2cd-3c2e8792c9b7', '16cb2f5a-392a-48bf-b846-bcf548ded51f', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:41:46', '2022-07-10 04:41:46'),
('96be9795-8190-49f3-bbe8-713fe5b81274', '18413e6f-09d1-4ae5-b32e-cb0d2c2f4427', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:41:51', '2022-07-10 04:41:51'),
('96be979c-3ae8-4f98-a013-68f20aff3de3', '18514bb6-0287-4061-b323-05247b4132c4', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:41:55', '2022-07-10 04:41:55'),
('96be97a2-1b58-41d7-a92d-7e887c5f404c', '189bd94f-5fd1-451a-8a00-031840e9a07a', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:41:59', '2022-07-10 04:41:59'),
('96be97db-ab3c-444b-9fa1-e672222d499d', '02b2a632-7432-4eaa-9898-b2ea879ff373', '96708ce0-e544-4344-8537-da7cadf1eec0', '2022-07-10 04:42:37', '2022-07-10 04:42:37'),
('96be97e2-f8bf-41c5-973f-a26db97e63c9', '02fb52d1-876d-4dca-83d5-a8d769842eb5', '96708ce0-e544-4344-8537-da7cadf1eec0', '2022-07-10 04:42:41', '2022-07-10 04:42:41'),
('96be97ea-eb46-4f52-9252-bc53206f1120', '03968e4c-1c63-4e6e-8d6a-4c31651cb5ac', '96708ce0-e544-4344-8537-da7cadf1eec0', '2022-07-10 04:42:47', '2022-07-10 04:42:47'),
('96be97f6-8038-467d-9b60-6de44a831a72', '03c8bbe4-15b5-4fa5-8024-dcc8abd2f9ac', '96708ce0-e544-4344-8537-da7cadf1eec0', '2022-07-10 04:42:54', '2022-07-10 04:42:54'),
('96be97fd-18b7-4943-92b2-7f7c264f8954', '045cfd08-9a76-4c18-a1eb-b43a99f48c57', '96708ce0-e544-4344-8537-da7cadf1eec0', '2022-07-10 04:42:58', '2022-07-10 04:42:58'),
('96be9805-c0e2-4333-a0c9-bbb1c0ea54e9', '0854e795-2c48-484e-b919-675b7be7dc7c', '96708ce0-e544-4344-8537-da7cadf1eec0', '2022-07-10 04:43:04', '2022-07-10 04:43:04'),
('96be980d-05de-42c3-a032-b8302e0d5a11', '093cca9b-a773-4867-a5f6-a665467f791b', '96708ce0-e544-4344-8537-da7cadf1eec0', '2022-07-10 04:43:09', '2022-07-10 04:43:09'),
('96be9814-f3e4-4cf8-af7d-76a4ae060b8c', '0a89879b-7875-4420-ab42-4ec9cb00e86e', '96708ce0-e544-4344-8537-da7cadf1eec0', '2022-07-10 04:43:14', '2022-07-10 04:43:14'),
('96be981b-834c-4c84-bfc4-8d41e45b41a7', '0ed02966-83fd-4b68-b3e6-077f75582dd2', '96708ce0-e544-4344-8537-da7cadf1eec0', '2022-07-10 04:43:18', '2022-07-10 04:43:18'),
('96be9822-97ac-4d81-bc48-a116b0a59c4a', '13c7279b-9d2e-4afa-a641-ca2ebc14f151', '96708ce0-e544-4344-8537-da7cadf1eec0', '2022-07-10 04:43:23', '2022-07-10 04:43:23'),
('96be9828-ffe4-4e96-8b8a-1f8a82fac446', '13dd745d-221f-421f-b78b-138131893d28', '96708ce0-e544-4344-8537-da7cadf1eec0', '2022-07-10 04:43:27', '2022-07-10 04:43:27'),
('96be9830-9b0e-4447-900e-4833cdae5a8f', '143f2dec-fc53-45e6-a700-989bdf50c019', '96708ce0-e544-4344-8537-da7cadf1eec0', '2022-07-10 04:43:32', '2022-07-10 04:43:32'),
('96be9837-1092-4d6f-9b35-0ef03b3dc9e6', '14e636c6-3ca1-4e24-9072-3b0b707abc99', '96708ce0-e544-4344-8537-da7cadf1eec0', '2022-07-10 04:43:36', '2022-07-10 04:43:36'),
('96be983e-ed76-4186-b7b9-c4882c8e9e0a', '15417e2f-797e-43fe-ac3f-54b550f683ad', '96708ce0-e544-4344-8537-da7cadf1eec0', '2022-07-10 04:43:42', '2022-07-10 04:43:42'),
('96be9844-ed7a-4355-bf5c-e61b0c17fb31', '159c1ff3-499e-4acc-84c2-bc844f8da135', '96708ce0-e544-4344-8537-da7cadf1eec0', '2022-07-10 04:43:46', '2022-07-10 04:43:46'),
('96be984c-3f43-4137-8360-ade86e4dd216', '16cb2f5a-392a-48bf-b846-bcf548ded51f', '96708ce0-e544-4344-8537-da7cadf1eec0', '2022-07-10 04:43:50', '2022-07-10 04:43:50'),
('96be9853-1f42-4773-a5c1-f72908ed38f0', '18413e6f-09d1-4ae5-b32e-cb0d2c2f4427', '96708ce0-e544-4344-8537-da7cadf1eec0', '2022-07-10 04:43:55', '2022-07-10 04:43:55'),
('96be9859-6e4a-483f-ae31-a77304f89cac', '18514bb6-0287-4061-b323-05247b4132c4', '96708ce0-e544-4344-8537-da7cadf1eec0', '2022-07-10 04:43:59', '2022-07-10 04:43:59'),
('96be9860-229c-4153-acc4-c7c20865a65b', '189bd94f-5fd1-451a-8a00-031840e9a07a', '96708ce0-e544-4344-8537-da7cadf1eec0', '2022-07-10 04:44:03', '2022-07-10 04:44:03'),
('96be9956-03cf-4800-8a7b-5b4eb0fecc88', '02b2a632-7432-4eaa-9898-b2ea879ff373', '967db231-5b27-47d3-80cd-74f1d62d16c7', '2022-07-10 04:46:45', '2022-07-10 04:46:45'),
('96be995c-9584-4b1d-8867-b36a49c15be1', '02fb52d1-876d-4dca-83d5-a8d769842eb5', '967db231-5b27-47d3-80cd-74f1d62d16c7', '2022-07-10 04:46:49', '2022-07-10 04:46:49'),
('96be9962-f07a-45ec-8fbc-75e1ba3274ec', '03968e4c-1c63-4e6e-8d6a-4c31651cb5ac', '967db231-5b27-47d3-80cd-74f1d62d16c7', '2022-07-10 04:46:53', '2022-07-10 04:46:53'),
('96be9969-45e6-4004-88cc-1917e14e8044', '03c8bbe4-15b5-4fa5-8024-dcc8abd2f9ac', '967db231-5b27-47d3-80cd-74f1d62d16c7', '2022-07-10 04:46:57', '2022-07-10 04:46:57'),
('96be996e-9f6c-47f2-8805-8619b8d6ae64', '045cfd08-9a76-4c18-a1eb-b43a99f48c57', '967db231-5b27-47d3-80cd-74f1d62d16c7', '2022-07-10 04:47:01', '2022-07-10 04:47:01'),
('96be997e-be60-4b9f-9dd0-6436ec2e3e63', '0854e795-2c48-484e-b919-675b7be7dc7c', '967db231-5b27-47d3-80cd-74f1d62d16c7', '2022-07-10 04:47:11', '2022-07-10 04:47:11'),
('96be9985-8077-4eb4-8807-ceef15b537ca', '093cca9b-a773-4867-a5f6-a665467f791b', '967db231-5b27-47d3-80cd-74f1d62d16c7', '2022-07-10 04:47:16', '2022-07-10 04:47:16'),
('96be998b-4a41-4833-9d17-6718adb99f55', '0a89879b-7875-4420-ab42-4ec9cb00e86e', '967db231-5b27-47d3-80cd-74f1d62d16c7', '2022-07-10 04:47:19', '2022-07-10 04:47:19'),
('96be9993-3500-4702-b934-0b98335df662', '0ed02966-83fd-4b68-b3e6-077f75582dd2', '967db231-5b27-47d3-80cd-74f1d62d16c7', '2022-07-10 04:47:25', '2022-07-10 04:47:25'),
('96be9999-e9a6-407d-9e19-28559cc128e1', '13c7279b-9d2e-4afa-a641-ca2ebc14f151', '967db231-5b27-47d3-80cd-74f1d62d16c7', '2022-07-10 04:47:29', '2022-07-10 04:47:29'),
('96be99af-eef2-4762-995c-9dc957df23d1', '13dd745d-221f-421f-b78b-138131893d28', '967db231-5b27-47d3-80cd-74f1d62d16c7', '2022-07-10 04:47:43', '2022-07-10 04:47:43'),
('96be99b7-3339-40f0-8519-27854c04b26d', '143f2dec-fc53-45e6-a700-989bdf50c019', '967db231-5b27-47d3-80cd-74f1d62d16c7', '2022-07-10 04:47:48', '2022-07-10 04:47:48'),
('96be99bd-8a77-4233-bccb-0c8a78ebb7fe', '14e636c6-3ca1-4e24-9072-3b0b707abc99', '967db231-5b27-47d3-80cd-74f1d62d16c7', '2022-07-10 04:47:52', '2022-07-10 04:47:52'),
('96be99c3-4d0a-4be5-bfff-130e5fd93745', '15417e2f-797e-43fe-ac3f-54b550f683ad', '967db231-5b27-47d3-80cd-74f1d62d16c7', '2022-07-10 04:47:56', '2022-07-10 04:47:56'),
('96be99cb-280f-4a37-b3a3-fff99bee946b', '159c1ff3-499e-4acc-84c2-bc844f8da135', '967db231-5b27-47d3-80cd-74f1d62d16c7', '2022-07-10 04:48:01', '2022-07-10 04:48:01'),
('96be99d2-84e4-4e7b-9c0d-25000f5b0640', '16cb2f5a-392a-48bf-b846-bcf548ded51f', '967db231-5b27-47d3-80cd-74f1d62d16c7', '2022-07-10 04:48:06', '2022-07-10 04:48:06'),
('96be99d8-156d-4ad8-81f5-8359106aae9e', '18413e6f-09d1-4ae5-b32e-cb0d2c2f4427', '967db231-5b27-47d3-80cd-74f1d62d16c7', '2022-07-10 04:48:10', '2022-07-10 04:48:10'),
('96be99df-20a0-46ed-8ace-899590ba5700', '18514bb6-0287-4061-b323-05247b4132c4', '967db231-5b27-47d3-80cd-74f1d62d16c7', '2022-07-10 04:48:14', '2022-07-10 04:48:14'),
('96be99e4-6dcd-42ab-bf77-4587525e2fef', '18514bb6-0287-4061-b323-05247b4132c4', '967db231-5b27-47d3-80cd-74f1d62d16c7', '2022-07-10 04:48:18', '2022-07-10 04:48:18'),
('96be9ba7-cbe9-4fe1-81e6-2927cb48cb3c', '18eebaa7-84fd-48ac-9c61-81dfe56e8074', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:53:14', '2022-07-10 04:53:14'),
('96be9bb9-0143-447d-8290-e5e31b63f3a5', '193ca687-65a0-4711-b0c0-1927043c277d', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:53:25', '2022-07-10 04:53:25'),
('96be9bc4-7ed5-456c-942c-480dcb733241', '1a3344f4-7b24-487e-a9fb-5ad326c13fff', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:53:32', '2022-07-10 04:53:32'),
('96be9bd6-277f-41c7-b6fe-40bda61346c0', '1a9c1f07-2017-4492-a4f6-0dc243e7d999', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:53:44', '2022-07-10 04:53:44'),
('96be9be3-2946-4ca6-b263-167732d053b6', '1b0267f4-d517-4512-a4c3-301a96372d12', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:53:53', '2022-07-10 04:53:53'),
('96be9bf5-3825-4836-8df9-f965e3e2b442', '1b483074-16f8-4c4a-908a-ba3e3ee8e7e1', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:54:04', '2022-07-10 04:54:04'),
('96be9c01-9077-49b9-a092-971f08f4b633', '1ba7321f-8186-4fbb-8cff-ff1d597d4336', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:54:13', '2022-07-10 04:54:13'),
('96be9c0b-c3bb-41bd-9428-0fc30a775edb', '1d5b7688-73c1-4142-99f3-94bbae58ed79', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:54:19', '2022-07-10 04:54:19'),
('96be9c18-eed7-454f-98c5-cf9a4f8e2a27', '1e0985f8-2c11-4f3f-845b-6bf9a09c3b2d', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:54:28', '2022-07-10 04:54:28'),
('96be9c21-b458-4ab5-bb4a-b76df52f571b', '1e9dc080-4487-494e-9225-72b737e726c3', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:54:34', '2022-07-10 04:54:34'),
('96be9c33-271a-4617-9736-5bdee29a746e', '1f160b23-2073-4ad4-9ffc-1e417dc85cc9', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:54:45', '2022-07-10 04:54:45'),
('96be9c3c-1db6-4a74-b53e-a84f37687639', '20ab0593-f9f5-405f-86ff-a3f3c50d804b', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:54:51', '2022-07-10 04:54:51'),
('96be9c4b-20c6-41cf-ad28-01fb9f288ae8', '20c6f98d-f528-4fc2-9016-ef526e32b7ba', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:55:01', '2022-07-10 04:55:01'),
('96be9c56-7129-493d-9270-f80fbdfe69de', '2189d7cd-773e-4845-84a5-fffaa1ea901f', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:55:08', '2022-07-10 04:55:08'),
('96be9c69-9193-4dbc-b949-db15650c663e', '22bf31f9-6306-425e-9d54-89ace70ccda4', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:55:21', '2022-07-10 04:55:21'),
('96be9c74-46b7-4aa4-9752-b415fdd3e857', '22e45ac1-e10f-4134-8739-23fd2faa507c', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:55:28', '2022-07-10 04:55:28'),
('96be9c86-2c96-415f-8830-5166864909ac', '252e762f-e81d-4c33-8aae-11b68c651c17', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:55:39', '2022-07-10 04:55:39'),
('96be9c98-faf8-49c9-a958-adc51091fb1c', '26f5893c-c355-4040-9ae4-6e53187c725f', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:55:52', '2022-07-10 04:55:52'),
('96be9ccd-86a8-4981-bb48-98dfcb93e904', '28e2a56e-3c76-4d19-844f-a3092954f0b7', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:56:26', '2022-07-10 04:56:26'),
('96be9ce2-e5c9-409c-b84f-ec2b6dd266e8', '29157361-a115-43a4-86ed-fbe66964c0d7', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:56:40', '2022-07-10 04:56:40'),
('96be9cec-f594-46bf-90f1-8635b350e812', '295e592a-3426-40a6-899c-8860e5929164', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:56:47', '2022-07-10 04:56:47'),
('96be9cfe-ee0c-477c-b277-92d6c2a3940b', '29cb26c6-4361-4341-971d-07be567f2a6f', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:56:59', '2022-07-10 04:56:59'),
('96be9d1d-a235-4e32-80ed-7f21b70cf2eb', '30ccea2e-48be-4213-ae9a-379abd41a42c', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:57:19', '2022-07-10 04:57:19'),
('96be9d29-fe21-4250-95d1-b2c7bd792036', '30f2648e-3a3a-45a0-bdc2-e984af4abb7f', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:57:27', '2022-07-10 04:57:27'),
('96be9d35-0350-4eae-b34e-de7a6fa5749e', '31236e8b-5191-4433-95a9-0390e1e13ac1', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:57:34', '2022-07-10 04:57:34'),
('96be9d42-aea6-4311-93a8-54e8537ab475', '321326cb-17cd-4634-bdc8-619c26d4aea3', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:57:43', '2022-07-10 04:57:43'),
('96be9d67-d341-4b5a-8b4e-df6a6052b449', '32d16bd7-58b5-487a-aab3-66cbb4801605', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:58:07', '2022-07-10 04:58:07'),
('96be9d8c-d324-4973-8028-2aed300ce3f4', '35a66251-da37-4d69-b652-7eee40512ca2', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:58:32', '2022-07-10 04:58:32'),
('96be9e09-e092-4400-95aa-aa62b3855af3', '384a1c52-c826-4a58-9dac-effcab2e701a', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 04:59:54', '2022-07-10 04:59:54'),
('96be9e32-65d4-49d4-83e2-c48ae3c67fea', '38e42c98-b490-4f03-a289-35939e035cfa', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:00:20', '2022-07-10 05:00:20'),
('96be9e4b-f522-472a-bac4-93ed34a8faa3', '3a1f1872-c67a-4bc7-9f92-0c852f44e1ec', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:00:37', '2022-07-10 05:00:37'),
('96be9e61-5f7b-4726-b3ce-6c5171a36e93', '3ae1bb68-15ef-4eaa-a153-0d7dd87c6654', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:00:51', '2022-07-10 05:00:51'),
('96be9e6b-ef41-4f41-a3d5-55aae0e92db8', '3bb510ed-d9cc-4ae5-bf83-ecb726cbc832', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:00:58', '2022-07-10 05:00:58'),
('96be9e7e-8a73-4f4b-b0f4-26b32330cc68', '3c7a9d69-339d-4ee3-9943-b9acec923fc5', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:01:10', '2022-07-10 05:01:10'),
('96be9e90-e0fc-4a21-9e44-4da372c0e71a', '3eeb6e49-8f87-483b-b811-e7b91dc94a8d', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:01:22', '2022-07-10 05:01:22'),
('96be9ea1-80fe-430e-9ffa-6e5324f46135', '3f60bbb2-e5e2-4297-b003-62fe2ffebf43', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:01:33', '2022-07-10 05:01:33'),
('96be9eb8-c05c-4e5c-a706-36d34425f301', '42e5ae5d-611b-4c00-833e-ea735145b325', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:01:48', '2022-07-10 05:01:48'),
('96be9ef3-cf2e-451f-af94-b27740b3ceb7', '436521dd-c443-4db6-89ae-9e237e349402', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:02:27', '2022-07-10 05:02:27'),
('96be9f34-0d86-49a0-b06b-13028d8b12fa', '43a2c3e2-6794-4fe3-a410-260d71bec47d', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:03:09', '2022-07-10 05:03:09'),
('96be9f64-c631-4e3c-994b-8df90c8ba567', '4408ed64-f04d-48df-ba7f-9b082c9438fc', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:03:41', '2022-07-10 05:03:41'),
('96be9f75-8437-487b-9fd6-3fdbbed7189e', '44c7b811-eae2-42cb-b1d6-243f09822b99', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:03:52', '2022-07-10 05:03:52'),
('96be9f8e-7982-4b1b-9f4e-6dbed879a1aa', '458c592c-348c-46d1-b344-b792fb64d42c', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:04:08', '2022-07-10 05:04:08'),
('96be9fe8-8315-4bf1-9f0d-600a76643f83', '47ceee1a-b33b-4239-9a46-1e58b5a672ad', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:05:07', '2022-07-10 05:05:07'),
('96bea0b8-8cd1-42e7-a952-193d878c41a1', '4839ee6d-2c3e-426a-9354-7db9e48ae439', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:07:24', '2022-07-10 05:07:24'),
('96bea0c7-2530-469b-bc7e-859d72f9d34d', '488fb59f-f26b-48f9-96a9-fad9e800e4d1', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:07:33', '2022-07-10 05:07:33'),
('96bea104-55a7-4ce1-abfa-b26cc882db9c', '49ce6c30-837f-45c3-8e2c-6f9870ebc2e9', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:08:13', '2022-07-10 05:08:13'),
('96bea11c-4b47-4361-904b-9679d6ce3ea4', '4c3d0071-440e-4e4a-837f-59eea1cc348e', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:08:29', '2022-07-10 05:08:29'),
('96bea128-53f3-4169-9889-abaabb1f0ba1', '4d744851-78a2-40b9-ada0-0a17f50d990e', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:08:37', '2022-07-10 05:08:37'),
('96bea14d-0a21-468a-aa73-1716537b7236', '4e441045-7e87-46c6-8f0c-68298b2934ae', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:09:01', '2022-07-10 05:09:01'),
('96bea165-fe2a-4732-8bcb-2cb2ebdbbc28', '4eae5a1d-bc44-4301-afd8-833a1bd0f6cf', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:09:17', '2022-07-10 05:09:17'),
('96bea175-cb62-4847-baaa-960d72d7ae37', '50660972-640c-49bd-b4f3-b988cfa241ec', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:09:28', '2022-07-10 05:09:28'),
('96bea1a9-11fd-4be0-8c00-d33ec92ed4e8', '5123ac8d-c8fb-436a-b417-28a153cf6c16', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:10:01', '2022-07-10 05:10:01'),
('96bea1c1-9bb8-44e0-8ad0-727134aad5db', '51a80ae5-f512-4310-8243-2a4abe75a345', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:10:17', '2022-07-10 05:10:17'),
('96bea1d2-0a48-483f-8b3c-b96690cef8bc', '53765b6c-4322-4c67-956a-12f6b811fdbc', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:10:28', '2022-07-10 05:10:28'),
('96bea1ec-3e7c-4d85-8324-f807320a1eca', '54981c04-da78-4aa6-93db-6b30fb625794', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:10:45', '2022-07-10 05:10:45'),
('96bea204-69ff-4c22-a608-f6528ac35544', '56391bb3-7220-4c57-97d8-c5e72987d775', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:11:01', '2022-07-10 05:11:01'),
('96bea212-e04a-444d-aae3-732593e205f4', '56d27921-8de3-4a64-8db0-fa30ec6d9a85', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:11:10', '2022-07-10 05:11:10'),
('96bea220-3ecc-44af-91cf-6c902301a4e6', '57e7dded-12ef-41c3-a728-71bee06f9526', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:11:19', '2022-07-10 05:11:19'),
('96bea234-925e-4357-a206-0e0551115aa7', '58563118-abc4-4d1b-93a4-58e327972409', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:11:33', '2022-07-10 05:11:33'),
('96bea24b-638f-4813-b4c5-fc023d04ce61', '589661c7-7bc4-4517-aeda-812297d91c0c', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:11:48', '2022-07-10 05:11:48'),
('96bea258-7a36-4ad4-aec0-a58159d4219c', '5997603c-54d6-4b59-bb77-0fda630ee588', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:11:56', '2022-07-10 05:11:56'),
('96bea261-5a1b-4138-95b2-5f0c363c083f', '5cde66a2-643d-46ea-83b0-7b1de9399637', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:12:02', '2022-07-10 05:12:02'),
('96bea26f-5718-40ef-a9b0-22f3d720d9ee', '5e418a66-3916-43d2-aabb-6ff1908d25f4', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:12:11', '2022-07-10 05:12:11'),
('96bea282-2b4c-4514-b51a-7626b6890286', '5e636dc2-6006-420e-88ac-18b7521e50bb', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:12:23', '2022-07-10 05:12:23'),
('96bea299-337a-46e8-bcb1-a39255181ff8', '5eb61db0-c4dc-4013-b48d-7aaafd73b9b6', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:12:39', '2022-07-10 05:12:39'),
('96bea2b1-1686-45f9-be59-461ce074d28f', '5fb62dca-5b17-44ef-8849-257eaf4c8cc2', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:12:54', '2022-07-10 05:12:54'),
('96bea2bf-0c46-410c-8b61-8420cd9a44f4', '5ffd6435-601b-4276-8c73-53c7cecdd701', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:13:03', '2022-07-10 05:13:03'),
('96bea2ca-7bb2-45cd-9a8b-3616be77e10a', '6351842b-6db4-4549-94c6-587f7e8d3883', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:13:11', '2022-07-10 05:13:11'),
('96bea2e0-0578-4953-9e6f-b24263530a29', '643a252e-3129-4f67-aba4-8ad6cbaca0c8', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:13:25', '2022-07-10 05:13:25'),
('96bea2f0-d22b-4aff-afa4-5b5e74fdf5bd', '652d3790-71e1-449e-88fb-a380428c0135', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:13:36', '2022-07-10 05:13:36'),
('96bea2fb-2d0f-4ea2-99ef-984c9f93e21e', '68117ca1-bd03-47f2-849f-08f9d7c0d593', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:13:43', '2022-07-10 05:13:43'),
('96bea31f-89bc-4f6f-9c06-f4e4d19f5068', '6885f19d-bc29-4b2b-9062-c2fedf8efc79', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:14:07', '2022-07-10 05:14:07'),
('96bea335-a868-4979-8da5-f9e27794b3b6', '6c395ad5-e91f-47f3-aa21-bc294c185ada', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:14:21', '2022-07-10 05:14:21'),
('96bea343-6259-4e00-aeaa-14e440c42c36', '6d42c4a4-f4de-4a38-9b96-bc7f1ee1bea4', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:14:30', '2022-07-10 05:14:30'),
('96bea350-908d-479f-abe7-e7fa4bada2e3', '6da9d71f-9c64-40cf-b6b7-2d0657767ca4', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:14:39', '2022-07-10 05:14:39'),
('96bea35d-4871-4753-ac34-f1697b87722d', '6ed6b0f9-dc4b-4b84-90b6-099cfdd2e1c2', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:14:47', '2022-07-10 05:14:47'),
('96bea36f-b5b3-4b8c-b506-4b3af22f0a6b', '6f6de946-5158-424c-8bfe-aa4b8a9c4df6', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:14:59', '2022-07-10 05:14:59'),
('96bea382-5280-4529-ab9e-2cba94be2b2d', '709b3b4e-969a-4c04-9e92-5e5654ea1172', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:15:11', '2022-07-10 05:15:11'),
('96bea38f-17d6-49f8-8032-b732bcc66c34', '709b3b4e-969a-4c04-9e92-5e5654ea1172', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:15:20', '2022-07-10 05:15:20'),
('96bea39d-488c-417a-b74e-04bb241b0fa7', '71b2657e-188b-4504-b605-6a488d35875a', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:15:29', '2022-07-10 05:15:29'),
('96bea39e-1a34-4d1d-8781-f66678f3aab0', '71b2657e-188b-4504-b605-6a488d35875a', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:15:30', '2022-07-10 05:15:30'),
('96bea3ab-f2fe-49d8-871c-8a5a6e1c77b9', '73d67075-744c-43c1-b3db-90e635121b08', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:15:39', '2022-07-10 05:15:39'),
('96bea3b9-60a0-4ef6-8083-71b9bf7466e3', '769cc3ea-a955-4af8-9d8b-1509351aded3', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:15:47', '2022-07-10 05:15:47'),
('96bea3da-0c6b-4a63-bd64-f269a9968e19', '792d0bfd-2dc1-4f35-8a26-83a306dacfdc', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:16:09', '2022-07-10 05:16:09'),
('96bea3ed-7f87-4965-b797-7285ae95c028', '799b456b-0e87-49de-8367-d2e78e9e74ae', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:16:22', '2022-07-10 05:16:22'),
('96bea402-83cd-4840-adb0-0b2e3e9c8a32', '79ae72a0-23be-4b20-ba79-703fb35a5eca', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:16:35', '2022-07-10 05:16:35'),
('96bea733-7bc8-45ba-9da2-57c25d2bdc8f', '1b0267f4-d517-4512-a4c3-301a96372d13', '96702d9f-ce29-450e-8995-20d58c797d38', '2022-07-10 05:25:31', '2022-07-10 05:25:31'),
('96bea742-739c-4480-8275-ef0ec5e3a796', '1b0267f4-d517-4512-a4c3-301a96372d13', '96708ce0-e544-4344-8537-da7cadf1eec0', '2022-07-10 05:25:41', '2022-07-10 05:25:41'),
('96bea755-1b37-467c-a412-81f79ecfd5fc', '1b0267f4-d517-4512-a4c3-301a96372d13', '967db231-5b27-47d3-80cd-74f1d62d16c7', '2022-07-10 05:25:53', '2022-07-10 05:25:53');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin__dokumen`
--
ALTER TABLE `admin__dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin__jenisdokumen`
--
ALTER TABLE `admin__jenisdokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin__jenissurat`
--
ALTER TABLE `admin__jenissurat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin__kelengkapan`
--
ALTER TABLE `admin__kelengkapan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin__suratkeluar`
--
ALTER TABLE `admin__suratkeluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin__suratmasuk`
--
ALTER TABLE `admin__suratmasuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin__template_surat`
--
ALTER TABLE `admin__template_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keluhan__managment_data__jenislaporan`
--
ALTER TABLE `keluhan__managment_data__jenislaporan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keluhan__public`
--
ALTER TABLE `keluhan__public`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `simadu__pegawai`
--
ALTER TABLE `simadu__pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `super_admin__role`
--
ALTER TABLE `super_admin__role`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
