-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2021 at 07:49 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zeronine`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `link`, `banner`, `type`, `created_at`, `updated_at`) VALUES
(1, 'https://www.youtube.com/', 'image/iklan/614c614a61464.jpg', 2, NULL, NULL),
(2, 'https://www.udemy.com/', 'image/iklan/614c61938eea7.png', 2, NULL, NULL),
(4, 'https://localhost/', 'image/iklan/614c6244cee01.jpg', 1, NULL, NULL),
(5, 'https://uzone.id/', 'image/iklan/614c6279be2aa.PNG', 1, NULL, NULL),
(6, 'https://translate.google.com/', 'image/iklan/614c7a2f7c21a.jpeg', 2, NULL, NULL),
(7, 'https://github.com/', 'image/iklan/614c7a88c911d.PNG', 2, NULL, NULL),
(8, 'https://www.facebook.com/', 'image/iklan/614c7d872feb3.jpeg', 2, NULL, NULL),
(9, 'https://www.instagram.com/', 'image/iklan/614c82c430ba0.jpg', 1, NULL, NULL),
(10, 'https://www.google.com/', 'image/iklan/614c83d111529.jpg', 1, NULL, NULL),
(11, 'https://www.youtube.com/c/WebProgrammingUNPAS', 'image/iklan/614d43f14cd1f.JPG', 1, NULL, NULL),
(12, 'https://www.youtube.com/watch?v=TXnBPy1bm94&t=766s&ab_channel=ahmadrifai', 'image/iklan/614d4415b3d4e.jpg', 1, NULL, NULL),
(13, 'https://www.youtube.com/watch?v=jTtjZ9VmowI&t=454s', 'image/iklan/614d46ed929e6.jpg', 1, NULL, NULL),
(14, 'https://www.youtube.com/watch?v=UCjXdCbtcSk', 'image/iklan/614d47342ab3a.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_ind` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soft_delete` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_ind`, `category_en`, `soft_delete`, `created_at`, `updated_at`) VALUES
(1, 'UMUM', 'GENERAL', '0', NULL, NULL),
(2, 'HIBURAN', 'ENTERTAINMENT', '0', NULL, NULL),
(3, 'BISNIS', 'BUSINESS', '0', NULL, NULL),
(4, 'KESEHATAN', 'HEALTH', '0', NULL, NULL),
(5, 'SAINS', 'SCIENCE', '0', NULL, NULL),
(7, 'TEKNOLOGI', 'TECHNOLOGY', '0', NULL, NULL),
(8, 'AGAMA', 'RELIGION', '0', NULL, NULL),
(14, 'OLAHRAGA', 'SPORTS', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `citys`
--

CREATE TABLE `citys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `province_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_ind` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `citys`
--

INSERT INTO `citys` (`id`, `province_id`, `city_ind`, `city_en`, `created_at`, `updated_at`) VALUES
(1, '10', 'Morowali', 'Morowali', NULL, NULL),
(2, '7', 'Ciamis', 'Bau Amis', NULL, NULL),
(3, '7', 'Bekasi', 'Bhecashi', NULL, NULL),
(4, '10', 'Palu', 'Palukka', NULL, NULL),
(5, '11', 'Enrekang', 'Endekan', NULL, NULL),
(6, '7', 'Jakarta Selatan', 'Jaksel', NULL, NULL),
(7, '11', 'Makassar', 'Makassar', NULL, NULL),
(9, '13', 'Umum', 'General', NULL, NULL);

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
-- Table structure for table `lives`
--

CREATE TABLE `lives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `embed_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lives`
--

INSERT INTO `lives` (`id`, `embed_code`, `status`, `created_at`, `updated_at`) VALUES
(1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/8o49U8xAfZ4\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_09_10_125632_create_sessions_table', 1),
(7, '2021_09_10_164337_create_categories_table', 2),
(8, '2021_09_10_164531_create_subcategories_table', 2),
(9, '2021_09_12_140008_create_provinces_table', 3),
(10, '2021_09_12_140305_create_citys_table', 3),
(11, '2021_09_13_090416_create_posts_table', 4),
(12, '2021_09_15_065621_create_socials_table', 5),
(13, '2021_09_15_085554_create_seos_table', 6),
(14, '2021_09_15_115758_create_prayers_table', 7),
(15, '2021_09_15_130910_create_lives_table', 8),
(16, '2021_09_15_145020_create_notices_table', 9),
(17, '2021_09_15_221530_create_websites_table', 10),
(18, '2021_09_16_032227_create_photos_table', 11),
(19, '2021_09_16_065805_create_videos_table', 12),
(20, '2021_09_19_170458_create_ads_table', 13),
(21, '2021_09_22_020045_create_websettings_table', 14),
(22, '2021_09_23_093638_create_advertisements_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notice` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `notice`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Aplikasi yang dibuat sebagai projek akhir skripsi', 0, NULL, NULL);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `photo`, `title`, `type`, `created_at`, `updated_at`) VALUES
(1, 'image/photogallery/6142d6fbc3505.jpg', 'Enviroment 3D', '1', NULL, NULL),
(2, 'image/photogallery/6142d7445e460.jpg', 'Accabong', '0', NULL, NULL),
(4, 'image/photogallery/6142e6021da74.jpg', 'Tampan', '0', NULL, NULL),
(6, 'image/photogallery/614309441de11.jpg', 'Ngaji', '0', NULL, NULL),
(7, 'image/photogallery/61453e0c5f328.jpg', 'PHO bahasa pemprograman', '0', NULL, NULL),
(8, 'image/photogallery/61453e3c2d328.jpeg', 'Sublime Text Editor', '0', NULL, NULL),
(9, 'image/photogallery/614ac36ac4f2b.jpg', 'Database MySQL', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `province_id` int(11) NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `title_ind` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_ind` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags_ind` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headline` int(11) DEFAULT NULL,
  `first_section` int(11) DEFAULT NULL,
  `first_section_thumbnail` int(11) DEFAULT NULL,
  `big_thumbnail` int(11) DEFAULT NULL,
  `post_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `subcategory_id`, `province_id`, `city_id`, `user_id`, `title_ind`, `title_en`, `image`, `details_ind`, `details_en`, `tags_ind`, `tags_en`, `headline`, `first_section`, `first_section_thumbnail`, `big_thumbnail`, `post_date`, `post_month`, `created_at`, `updated_at`) VALUES
(7, 14, 10, 10, 1, 3, 'Hasil Liga Champions: Bukti Barcelona Kehilangan Messi, MU Dipermalukan di Menit Akhir, Juventus?', 'Champions League Results: Proof Barcelona Losing Messi, MU Humiliated at the Last Minute, Juventus?', 'image/postimg/61418693448b3.jpg', '<p style=\"text-align: justify;\">TRIBUN-TIMUR.COM - Gelontoran tiga gol Bayern Munich dari Thomas Mueller (34), Robert Lewandowski (56 dan 85), Rabu (15/9/2021) dini hari tadi mengirim sinyal tak terbantahkan kepada Barcelona bahwa mereka butuh figur kreatif dan pengangkat moril tim seperti sosok Lionel Messi.</p><p style=\"text-align: justify;\">Catalan tidak memiliki figur seperti itu saat ini. Dan mereka benar-benar dipermalukan.</p><p style=\"text-align: justify;\">Padahal Barcelona bermain di hadapan pendukugnya di Camp Nou.</p><p style=\"text-align: justify;\">Wasit asal Inggris Michael Oliver menjadi saksi betapa Barca tidak lagi punya ruh permainan.</p><p style=\"text-align: justify;\">Dan benar saja, Robert Lewandowski dkk leluasa mengubrakabrik pertahanan Tim Catalan tersebut.</p><p style=\"text-align: justify;\">Untungnya, hasil memalukan kalah 0-3 di hadapan pendukung sendiri diiringi hasil seri laga lainnya di Grup E di mana Dynao Kyiv 0 vs 0 Benfica.</p><p style=\"text-align: justify;\">Di laga lainnya Grup F, Young Boys merusak pesta Manchester United bersama Cristiano Ronaldo dengan skor 2-1.</p><p style=\"text-align: justify;\">Ronaldo sempat mencetak gol pembuka menit 13 asis dari Bruno Fernandes.</p><p style=\"text-align: justify;\">Namiun kartu merah yang diterima Aaron Wan-Bissaka menit 35 merusak pesta kedua Setan Merah bersama Ronaldo.</p><p style=\"text-align: justify;\">Bahkan Setan Merah pulang dengan hasil menyesakkan dipermalukan lewat gol injury time, menit akhir</p><div style=\"text-align: justify;\"><br></div>', '<p>TRIBUN-TIMUR.COM - Bayern Munich\'s three goals from Thomas Mueller (34), Robert Lewandowski (56 and 85), Wednesday (15/9/2021) this morning sent an undeniable signal to Barcelona that they needed a creative and uplifting figure. team morale like the figure of Lionel Messi.</p><p><br></p><p>Catalans do not have such a figure at this time. And they were completely humiliated.</p><p><br></p><p>Even though Barcelona played in front of their supporters at the Camp Nou.</p><p><br></p><p>British referee Michael Oliver witnessed how Barca no longer had the spirit of the game.</p><p><br></p><p>And sure enough, Robert Lewandowski et al were free to break down the Catalan team\'s defense.</p><p><br></p><p>Fortunately, the humiliating result of losing 0-3 in front of their own supporters was accompanied by another draw in Group E where Dynao Kyiv 0 vs 0 Benfica.</p><p><br></p><p>In the other match in Group F, Young Boys spoiled the Manchester United party with Cristiano Ronaldo with a score of 2-1.</p><p><br></p><p>Ronaldo had scored the opening goal in the 13th minute with an assist from Bruno Fernandes.</p><p><br></p><p>However, the red card received by Aaron Wan-Bissaka in the 35th minute ruined the Red Devils\' second party with Ronaldo.</p><p><br></p><p>Even the Red Devils came home with a stifling result humiliated by an injury time goal, last minute</p>', 'Messi PSG', 'Messi', 1, 1, 1, NULL, '15-09-2021', 'September', NULL, NULL),
(10, 2, 15, 7, 3, 1, 'Tes Lab Burung Pipit Mati Massal di Bali Keluar, Ini Hasilnya! - detikNews', 'Lab Test of Massive Dead Sparrows in Bali is Out, Here are the Results! - Detik news', 'image/postimg/61445e32ef7a9.png', '<p>Denpasar - Hasil uji laboratorium kematian massal burung pipit di area pekuburan di Kabupaten Gianyar, Bali, telah keluar. Uji laboratorium menunjukkan bahwa burung-burung tersebut tidak terkena penyakit infeksius.</p><p>\"Kematian burung-burung tersebut tidak mengarah pada penyakit infeksius. Itu saja hasilnya,\" kata Kepala Bidang Kesehatan Hewan Dinas Pertanian dan Peternakan Kabupaten Gianyar Made Santiarka, Jumat (17/9/2021).</p><p><br></p><p>Dia mengaku mendapatkan hasil uji lab dari Balai Besar Veteriner (BBVet) Denpasar pada Kamis (16/9).</p><p><br></p><p>Santiarka menjelaskan penyakit infeksius bisa disebabkan oleh serangan mikroorganisme berupa bakteri, virus, jamur, dan parasit. Kematian burung-burung itu tidak disebabkan mikroorganisme tersebut.</p>', '<p>Denpasar - The results of the laboratory test for the mass death of sparrows in the cemetery area in Gianyar Regency, Bali, have been released. Laboratory tests showed that the birds were not exposed to infectious diseases.</p><p>\"The death of the birds did not lead to infectious diseases. That\'s the result,\" said Head of the Animal Health Division of the Gianyar Regency Agriculture and Livestock Service, Made Santiarka, Friday (17/9/2021).</p><p><br></p><p>He admitted that he got the results of a lab test from the Denpasar Veterinary Center (BBVet) on Thursday (16/9).</p><p><br></p><p>Santiarka explained that infectious diseases can be caused by the attack of microorganisms in the form of bacteria, viruses, fungi, and parasites. The death of the birds was not caused by these microorganisms.</p>', 'Burung', 'Bird', NULL, 1, 1, NULL, '17-09-2021', 'September', NULL, NULL),
(11, 1, 13, 7, 3, 1, 'Congrats, Rupiah! Juara Asia di Spot, Jaya di Kurs Tengah BI', 'Congrats, Rupiah! Asian Champion in Spot, Jaya in BI Middle Exchange', 'image/postimg/614454b1f1888.jpg', '<p>Jakarta, CNBC Indonesia - Nilai tukar rupiah terhadap dolar Amerika Serikat (AS) menguat di kurs tengah Bank Indonesia (BI). Di pasar spot, rupiah juga perkasa.</p><p>Pada Jumat (17/9/2021), kurs tengah BI atau kurs acuan Jakarta Interbank Spot Dollar Rate/Jisdor berada di Rp 14.233. Rupiah menguat tipis 0,03% dibandingkan posisi hari sebelumnya.</p><p><br></p><p>Sedangkan di pasar spot, US$ 1 dibanderol Rp 14.225 kala penutupan perdagangan. Rupiah terapresiasi 0,18%.</p><p><br></p><p><br></p><p>Sementara mata uang utama Asia lainnya bergerak variatif di hadapan dolar AS. Namun penguatan 0,18% sudah cukup untuk membawa rupiah jadi yang terbaik.</p><p><br></p><p>Berikut perkembangan kurs dolar AS terhadap mata uang utama Benua Kuning di perdagangan pasar spot pada pukul 15:00 WIB:</p>', '<p>Jakarta, CNBC Indonesia - The rupiah exchange rate against the United States (US) dollar strengthened at the Bank Indonesia (BI) middle rate. In the spot market, the rupiah is also powerful.</p><p>On Friday (17/9/2021), the BI middle rate or the Jakarta Interbank Spot Dollar Rate/Jisdor reference rate was at Rp 14,233. Rupiah strengthened slightly by 0.03% compared to the previous day\'s position.</p><p><br></p><p>Meanwhile, in the spot market, US$1 is priced at Rp. 14,225 at the close of trading. Rupiah appreciated 0.18%.</p><p><br></p><p><br></p><p>Meanwhile, other major Asian currencies were mixed against the US dollar. However, 0.18% strengthening is enough to bring the rupiah to be the best.</p><p><br></p><p>The following is the development of the US dollar exchange rate against the main currencies of the Yellow Continent in the spot market trading at 15:00 WIB:</p>', 'yooo', 'yaaa', 1, 1, NULL, 1, '17-09-2021', 'September', NULL, NULL),
(12, 1, 13, 11, 7, 1, 'Petugas yang KO karena Ronaldo: Saya Dulu Benci Dia - CNN Indonesia', 'Officer who KOs because of Ronaldo: I Used to Hate Him - CNN Indonesia', 'image/postimg/61445934823f4.jpeg', '<p>Jakarta, CNN Indonesia -- Petugas wanita di Stadion Wankdorf, Bern, yang sempat KO karena terkena bola tendangan Cristiano Ronaldo pada laga Young Boys vs Manchester United mengaku sempat benci dengan CR7. Petugas bernama Marisa Nobile itu pernah cekcok dengan Ronaldo.</p><p>Nobile terkapar di belakang gawang Stadion Wankdorf sebelum laga Young Boys vs Manchester United di Liga Champions, Rabu (15/9) dini hari WIB. Sebuah bola liar hasil tendangan Ronaldo saat pemanasan sebelum laga mengenai kepala Nobile.</p><p><br></p><p>Wanita asal Swiss itu kemudian terkapar dan harus mendapat perawatan medis. Ronaldo sempat melihat kondisi Nobile sebelum laga. Usai pertandingan pemain asal Portugal itu memberi jersey yang dikenakan saat laga kepada Nobile</p>', '<p>Jakarta, CNN Indonesia -- The female officer at Wankdorf Stadium, Bern, who was knocked out by a Cristiano Ronaldo kick during the Young Boys vs Manchester United match admitted that she hated CR7. The officer named Marisa Nobile had an argument with Ronaldo.</p><p>Nobile was lying behind the Wankdorf Stadium goal before the Young Boys vs Manchester United match in the Champions League, Wednesday (15/9) early morning WIB. A wild ball from Ronaldo\'s kick during the warm-up before the game hits Nobile\'s head.</p><p><br></p><p>The Swiss woman then collapsed and had to receive medical treatment. Ronaldo had seen Nobile\'s condition before the match. After the match, the Portuguese player gave Nobile the jersey he wore during the match</p>', 'Ronaldo', 'Ronaldo', NULL, 1, 1, NULL, '17-09-2021', 'September', NULL, NULL),
(13, 2, 15, 7, 2, 1, 'Ilmuwan Israel: Dosis Ketiga Vaksin COVID-19 Tingkatkan Perlindungan 10 Kali Lipat - Liputan6.com', 'Israeli Scientists: Third Dose of COVID-19 Vaccine Increases Protection 10-fold - Liputan6.com', 'image/postimg/614459c3ae0ce.jpg', '<p>Liputan6.com, Tel Aviv - Dosis vaksin ketiga terhadap COVID-19 meningkatkan perlindungan kekebalan dari infeksi sepuluh kali lipat, demikian disampaikan oleh Kementerian Kesehatan Israel mengatakan pada Kamis (16/9).</p><p><br></p><p>Kementerian itu mengatakan bahwa sebuah studi baru Israel, yang diterbitkan dalam New England Journal of Medicine, meneliti efektivitas dosis ketiga di antara mereka yang berusia di atas 60 tahun, yang menerima suntikan booster pada bulan Agustus.</p><p><br></p><p>Perlindungan sepuluh kali lipat dibandingkan dengan mereka yang hanya menerima dua dosis setidaknya lima bulan lalu, demikian dikutip dari laman Xinhua, Jumat (17/9/2021).</p><p><br></p><p>Studi ini dilakukan oleh tim peneliti multidisiplin dari kementerian kesehatan, Institut Sains Weizmann, Universitas Ibrani Yerusalem, Technion, Pusat Medis Sheba dan Institut Penelitian KI.</p><p><br></p><p>\"Data dari Israel menunjukkan kemanjuran tinggi dosis booster ketiga Pfizer dalam mencegah infeksi COVID-19 dan penyakit serius,\" kata kementerian itu.</p>', '<p>Liputan6.com, Tel Aviv - The third dose of vaccine against COVID-19 increases immune protection from infection tenfold, the Israeli Ministry of Health said on Thursday (16/9).</p><p><br></p><p>The ministry said that a new Israeli study, published in the New England Journal of Medicine, examined the effectiveness of a third dose among those over 60 who received a booster shot in August.</p><p><br></p><p>Ten times protection compared to those who received only two doses at least five months ago.</p><p><br></p><p>The study was carried out by a multidisciplinary research team from the ministry of health, Weizmann Institute of Science, Hebrew University of Jerusalem, Technion, Sheba Medical Center and KI Research Institute.</p><p><br></p><p>\"Data from Israel demonstrates the high efficacy of Pfizer\'s third booster dose in preventing COVID-19 infection and serious illness,\" the ministry said.</p>', 'Vaksin', 'Vacine', NULL, 1, NULL, NULL, '17-09-2021', 'September', NULL, NULL),
(14, 1, 13, 10, 1, 1, 'iPhone 13 Pro secara signifikan mengungguli', 'iPhone 13 Pro significantly outperforms i', 'image/postimg/61445afd17c0d.jpg', '<p>IPhone 13 Pro dengan skor keseluruhan mendekati 8.40.000 dengan mudah mengalahkan iPhone 12 Pro di papan peringkat benchmark AnTuTu. Antutu telah melihat uji coba baru “iPhone 14.2” Apple (serta Geekbench), yang dikatakan sebagai iPhone 13 Pro baru yang dilengkapi dengan RAM 6GB dan penyimpanan 1TB. Skor AnTuTu iPhone 13 Pro memberi kita wawasan tentang kinerja CPU, GPU, dan memorinya terhadap iPhone 12 Pro. Seperti semua ponsel lain dalam seri iPhone 13, iPhone 13 Pro baru memiliki chip A15 Bionic, yang menurut Apple menawarkan “kinerja grafis tercepat dari semua smartphone.”</p><p><br></p><p>Sebuah apel Memperkenalkan GPU quad-core pada chip A15 Bionic untuk iPhone 13 dan iPhone 13 mini. yang baru iPhone 13 Pro, NS iPhone 13 Pro Maxdan baru iPad miniDi sisi lain, ia ditenagai oleh chip A15 Bionic dengan GPU lima inti.</p>', '<p>The iPhone 13 Pro with an overall score of close to 8,40,000 easily beats the iPhone 12 Pro on the AnTuTu benchmark leaderboard. Antutu has already seen a trial of Apple\'s new “iPhone 14.2” (as well as Geekbench), which is said to be the new iPhone 13 Pro that comes with 6GB of RAM and 1TB of storage. The AnTuTu iPhone 13 Pro score gives us an insight into its CPU, GPU and memory performance against the iPhone 12 Pro. Like all other phones in the iPhone 13 series, the new iPhone 13 Pro has the A15 Bionic chip, which Apple says offers “the fastest graphics performance of any smartphone.”</p><p><br></p><p>Apple Introducing the quad-core GPU on the A15 Bionic chip for the iPhone 13 and iPhone 13 mini. the new iPhone 13 Pro, NS iPhone 13 Pro Maxand new iPad miniOn the other hand, it is powered by the A15 Bionic chip with a five-core GPU.</p>', 'iphone', 'iphone', NULL, 1, NULL, NULL, '17-09-2021', 'September', NULL, NULL),
(15, 2, 15, 7, 2, 1, '23 Makanan Penyebab Penyakit Asam Urat, Mulai Waspadai dan Hindari', '23 Foods That Cause Gout, Start Beware and Avoid', 'image/postimg/61445ba662ac6.jpg', '<p style=\"text-size-adjust: 100%; background-image: none; background-position: 0px 0px; background-size: initial; background-repeat: repeat; background-attachment: scroll; background-origin: initial; background-clip: initial; border: 0px none; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; outline: none 0px; padding: 0px; line-height: 1.8em;\">Merdeka.com - Siapa sangka, berbagai jenis makanan lezat yang kita konsumsi beberapa mengandung purin tinggi. Purin dan alkohol menjadi penyebab penyakit asam urat yang harus diwaspadai. Khususnya purin yang terkandung dalam berbagai jenis makanan yang biasa dikonsumsi. Mulai dari daging, buah-buahan, sayuran, minuman, hingga kacang-kacangan.</p><p style=\"text-size-adjust: 100%; background-image: none; background-position: 0px 0px; background-size: initial; background-repeat: repeat; background-attachment: scroll; background-origin: initial; background-clip: initial; border: 0px none; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; outline: none 0px; padding: 0px; line-height: 1.8em;\"><br></p><p style=\"text-size-adjust: 100%; background-image: none; background-position: 0px 0px; background-size: initial; background-repeat: repeat; background-attachment: scroll; background-origin: initial; background-clip: initial; border: 0px none; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; outline: none 0px; padding: 0px; line-height: 1.8em;\">Asam urat atau gout merupakan kondisi gangguan metabolisme asam urat di dalam tubuh. Kadar asam urat dalam tubuh yang tinggi menjadi pemicu utama masalah ini. Peningkatan kadar asam urat akan membuat kristalnya menumpuk dan menyebabkan peradangan pada sendi. Parahnya, asam urat bisa menurunkan fungsi ginjal dan membentuk batu ginjal.</p>', '<p>Merdeka.com - Who would have thought, that some of the delicious foods we eat contain high purines. Purines and alcohol are the causes of gout that must be watched out for. Especially purines contained in various types of foods that are commonly consumed. Starting from meat, fruits, vegetables, drinks, to nuts.</p><p><br></p><p>Gout or gout is a condition of impaired metabolism of uric acid in the body. High uric acid levels in the body are the main trigger for this problem. Increased levels of uric acid will make the crystals accumulate and cause inflammation in the joints. Worse, uric acid can reduce kidney function and form kidney stones.</p>', 'Asam urat', 'Haedache', NULL, 1, NULL, NULL, '17-09-2021', 'September', NULL, NULL),
(16, 1, 13, 10, 1, 1, 'Cerita Keji Teroris KKB Pegunungan Bintang Aniaya-Tendang Nakes ke Jurang', 'The Violent Story of KKB Terrorists in the Star Mountains Persecution-Kick Nakes into the Abyss', 'image/postimg/61445cadea6f1.jpeg', '<p>Jayapura - Aksi keji dilakukan teroris kelompok kriminal bersenjata (KKB) saat menyerang tenaga kesehatan (Nakes) di Distrik Kiwirok, Kabupaten Pegunungan Bintang, Papua. Para nakes yang melarikan diri usai puskesmas tempat mereka bekerja dibakar dikejar oleh teroris KKB, dianiaya, hingga ditendang ke jurang.</p><p>Sembilan orang nakes selamat telah dievakuasi dari Kiwirok menggunakan helikopter TNI dan tiba di Lapangan Makodam XVII Cenderawasih, Jayapura, pada Jumat (17/9/2021) pagi tadi.</p><p><a href=\"https://www.udemy.com/course/laravel-beginner-to-advance-with-complete-news-portal/learn/lecture/23353566#overview\" target=\"_blank\">LINK</a><br></p><p>Marselinus Ola Attanila, salah satu nakes yang selamat dari peristiwa kelam itu, lalu menceritakan aksi keji yang dilakukan anggota teroris KKB.</p><p><br></p><p>Awalnya, pada Senin (13/9) sekitar pukul 07.00 WIT, para nakes yang tengah bertugas di Puskesmas Kiwirok diberi tahu bahwa akan ada penyerangan teroris KKB kepada aparat TNI-Polri. Anggota teroris KKB lalu mengirim pesan kepada nakes, yang isinya meminta nakes tetap tenang dan bersiaga untuk mengobati anggota teroris KKB yang terluka akibat penyerangan ke TNI-Polri.</p>', '<p>Jayapura - A heinous act was carried out by armed criminal group terrorists (KKB) when they attacked health workers (Nakes) in Kiwirok District, Bintang Mountains Regency, Papua. The health workers who fled after the health center where they worked were burned, chased by KKB terrorists, mistreated, and kicked into a ravine.</p><p>Nine health workers were safely evacuated from Kiwirok using a TNI helicopter and arrived at Makodam XVII Cenderawasih Field, Jayapura, on Friday (17/9/2021) this morning.</p><p><br></p><p>Marselinus Ola Attanila, one of the health workers who survived the dark incident, then told of the heinous acts carried out by members of the KKB terrorists.</p><p><br></p><p>Initially, on Monday (13/9) at around 07.00 WIT, the health workers who were on duty at the Kiwirok Health Center were notified that there would be a KKB terrorist attack on the TNI-Polri apparatus. The KKB terrorist members then sent a message to the health workers, which asked the health workers to remain calm and be on standby to treat KKB terrorist members who were injured as a result of the attack on the TNI-Polri.</p>', 'Nakes', 'Medical', 1, 1, 1, NULL, '17-09-2021', 'September', NULL, NULL),
(18, 2, 15, 10, 1, 1, 'dsda', 'dasdas', 'image/postimg/614498483d194.jpg', '<p>mungkin</p>', '<p>maybe</p>', 'sains', 'science', NULL, NULL, NULL, 1, '17-09-2021', 'September', NULL, NULL),
(19, 3, 16, 7, 2, 1, '6 Obligor BLBI Temui Satgas, Ada Perwakilan Keluarga Bakrie', '6 BLBI obligors meet the task force, there are representatives of the Bakrie Family', 'image/postimg/61449f278cb72.jpg', '<p>JAKARTA, KOMPAS.com - Satgas Bantuan Likuiditas Bank Indonesia (BLBI) menerima kedatangan 6 obligor atau debitur penerima dana BLBI. Sebagian obligor atau debitur tersebut diwakili oleh kuasanya, termasuk perwakilan keluarga Bakrie. Direktur Hukum dan Hubungan Masyarakat, Direktorat Jenderal Kekayaan Negara (DJKN) Kemenkeu, Tri Wahyuningsih Retno Mulyani mengatakan, pihak-pihak yang dijadwalkan menemui satgas hari ini mewakili perusahaan. Hingga sore ini, pihaknya masih menunggu debitur yang belum hadir di Gedung Syafrudin Prawiranegara II, Kementerian Keuangan.</p><div><br></div>', '<p>JAKARTA, KOMPAS.com - The Bank Indonesia Liquidity Assistance Task Force (BLBI) received the arrival of 6 obligors or debtors receiving BLBI funds. Some of the obligors or debtors are represented by their proxies, including representatives of the Bakrie family. Director of Law and Public Relations, Directorate General of State Assets (DJKN) of the Ministry of Finance, Tri Wahyuningsih Retno Mulyani said the parties scheduled to meet the task force today represented the company. As of this afternoon, his party is still waiting for debtors who have not been present at the Syafrudin Prawiranegara II Building, Ministry of Finance.<br></p>', 'Satgas', 'Officer', NULL, NULL, NULL, 1, '17-09-2021', 'September', NULL, NULL),
(20, 3, 16, 7, 2, 1, '6 Obligor BLBI Temui Satgas, Ada Perwakilan Keluarga Bakrie', '6 BLBI obligors meet the task force, there are representatives of the Bakrie Family', 'image/postimg/6144a5d183a2e.jpg', '<p>JAKARTA, KOMPAS.com - Satgas Bantuan Likuiditas Bank Indonesia (BLBI) menerima kedatangan 6 obligor atau debitur penerima dana BLBI. Sebagian obligor atau debitur tersebut diwakili oleh kuasanya, termasuk perwakilan keluarga Bakrie. Direktur Hukum dan Hubungan Masyarakat, Direktorat Jenderal Kekayaan Negara (DJKN) Kemenkeu, Tri Wahyuningsih Retno Mulyani mengatakan, pihak-pihak yang dijadwalkan menemui satgas hari ini mewakili perusahaan. Hingga sore ini, pihaknya masih menunggu debitur yang belum hadir di Gedung Syafrudin Prawiranegara II, Kementerian Keuangan.</p><div><br></div>', '<p>JAKARTA, KOMPAS.com - The Bank Indonesia Liquidity Assistance Task Force (BLBI) received the arrival of 6 obligors or debtors receiving BLBI funds. Some of the obligors or debtors are represented by their proxies, including representatives of the Bakrie family. Director of Law and Public Relations, Directorate General of State Assets (DJKN) of the Ministry of Finance, Tri Wahyuningsih Retno Mulyani said the parties scheduled to meet the task force today represented the company. As of this afternoon, his party is still waiting for debtors who have not been present at the Syafrudin Prawiranegara II Building, Ministry of Finance.<br></p>', 'Satgas', 'Officer', NULL, NULL, NULL, NULL, '17-09-2021', 'September', NULL, NULL),
(21, 3, 16, 7, 3, 1, 'Untung-Rugi Merger Indosat-Tri bagi Pelanggan', 'Indosat-Tri Merger Profits and Loss for Customers', 'image/postimg/6144a1061028c.jpg', '<p>KOMPAS.com - Dua operator seluler di Tanah Air, Indosat Ooredoo (PT Indosat Tbk) dan Tri (PT Hutchison 3 Indonesia/H3I), resmi melakukan penggabungan usaha alias merger. Aksi korporasi ini tentu membawa sejumlah perubahan bagi bisnis keduanya. Mulai dari pimpinan baru, besaran kepemilikan saham baru, hingga perusahaan gabungan baru bernama \"Indosat Ooredoo Hutchison\" (PT Indosat Ooredoo Hutchison Tbk). Di samping soal bisnis, pelanggan dari Indosat dan Tri juga akan terdampak langsung oleh merger yang dilakukan dua operator seluler ini. Lantas, apa untung dan rugi yang didapatkan oleh pelanggan dua operator seluler ini?<br></p>', '<p>KOMPAS.com - Two cellular operators in the country, Indosat Ooredoo (PT Indosat Tbk) and Tri (PT Hutchison 3 Indonesia/H3I), officially merged. This corporate action certainly brought a number of changes to both businesses. Starting from the new leadership, the amount of new share ownership, to a new joint company called \"Indosat Ooredoo Hutchison\" (PT Indosat Ooredoo Hutchison Tbk). In addition to business matters, customers from Indosat and Tri will also be directly affected by the merger between the two cellular operators. So, what are the advantages and disadvantages for the customers of these two cellular operators?<br></p>', 'Indosat', 'Network', 1, NULL, NULL, NULL, '17-09-2021', 'September', NULL, NULL),
(22, 3, 16, 11, 5, 1, 'Studi: Orang Usia 50-59 Tahun Berisiko Tinggi Alami Long Covid-19 - Suara.com', 'Study: People aged 50-59 years are at high risk of experiencing long Covid-19 - Suara.com', 'image/postimg/6144a5f116ae8.jpg', '<p>Suara.com - Sebuah studi observasional dari Inggris menunjukkan bahwa orang dewasa usia 50-69 tahun mengalami Long Covid-19. Long Covid-19 adalah gejala virus corona Covid-19 berkepanjangan setelah pulih.</p><p><br></p><p>Studi tersebut menemukan bahwa hampir semua pasien virus corona Covid-19 berisiko mengalami Long Covid-19. Tapi, orang dewasa usia 50-69 tahun berada pada risiko tertinggi mengalami Long Covid-19.</p><p><br></p><p>Temuan ini dirilis dari Kantor Statistik Nasional yang diambil dari Survei Infeksi Coronavirus, yang dikatakan sebagai survei reguler terbesar pada infeksi dan antibodi virus corona Covid-19 di Inggris.</p><p><br></p><p>Analisis ini berasal dari 26 ribu peserta yang positif virus corona Covid-19. Mereka mengalami salah satu dari 12 gejala virus corona yang ditentukan pada interval mingguan, bulananhingga satu tahun.</p>', '<p>Suara.com - An observational study from the UK shows that adults aged 50-69 years experience Long Covid-19. Long Covid-19 is a symptom of the Covid-19 corona virus prolonged after recovering.</p><p><br></p><p>The study found that almost all Covid-19 coronavirus patients are at risk of experiencing Long Covid-19. However, adults aged 50-69 years are at the highest risk of experiencing Long Covid-19.</p><p><br></p><p>The findings, released by the Office for National Statistics, are drawn from the Coronavirus Infection Survey, which is said to be the largest regular survey on COVID-19 infection and antibodies in the UK.</p><p><br></p><p>This analysis came from 26,000 participants who were positive for the Covid-19 corona virus. They experience one of 12 prescribed coronavirus symptoms at weekly, monthly to one year intervals.</p>', 'Covid', 'Covid', NULL, NULL, NULL, NULL, '17-09-2021', 'September', NULL, NULL),
(23, 4, 17, 11, 5, 1, 'Kenali Tanda-tanda Kamu Kekurangan Vitamin D', 'Recognize the Signs of Your Vitamin D Deficiency', 'image/postimg/6144b2f18136e.jpg', '<p>Bisnis.com, JAKARTA – Vitamin D adalah salah satu dari banyak vitamin yang dibutuhkan oleh anak-anak hingga orang dewasa. Meski umum disebut sebagai vitamin, Vitamin D dianggap sebagai pro-hormon. Hal ini karena vitamin D mampu diproduksi oleh tubuh manusia dari sinar UV yang dihasilkan matahari yang diserap kulit. Sementara vitamin lainnya tidak dapat dibuat sendiri oleh tubuh, sehingga harus diperoleh melalui makanan atau suplemen.&nbsp; &nbsp;Tidak hanya menjaga kesehatan tulang, vitamin D juga diketahui dapat mencegah sejumlah penyakit serius seperti kanker, diabetes, dan multiple sclerosis.&nbsp; &nbsp;Karena memainkan begitu banyak peran dalam tubuh termasuk mendukung kekebalan, kesehatan usus, kesehatan tiroid, dan banyak lagi, Anda dapat bertaruh bahwa tubuh Anda akan memberi tahu Anda ketika Anda tidak mendapatkan cukup vitamin D.</p><div><br></div>', '<p>Bisnis.com, JAKARTA – Vitamin D is one of the many vitamins needed by children and adults. Although commonly referred to as a vitamin, Vitamin D is considered a pro-hormone. This is because vitamin D is able to be produced by the human body from UV rays produced by the sun that are absorbed by the skin. While other vitamins can not be made by the body, so it must be obtained through food or supplements. Not only maintaining bone health, vitamin D is also known to prevent a number of serious diseases such as cancer, diabetes, and multiple sclerosis. Because it plays so many roles in the body including supporting immunity, gut health, thyroid health, and more, you can bet that your body will tell you when you\'re not getting enough vitamin D.<br></p>', 'Vitamin', 'Vitamin', NULL, NULL, NULL, 1, '17-09-2021', 'September', NULL, NULL),
(24, 4, 17, 11, 7, 1, 'Dapatkah Manusia Hidup dengan Satu Ginjal?', 'Can Humans Live with One Kidney?', 'image/postimg/6144b4b0e776a.jpg', '<p>TEMPO.CO, Jakarta - Pada umumnya, manusia memiliki dua ginjal yang berfungsi. Meskipun demikian, tidak menutup kemungkinan untuk seseorang hidup dengan hanya satu ginjal. Ginjal tersebut penting untuk dijaga karena tidak ada ginjal cadangan yang dapat menggantikannya.</p><p><br></p><p>Ada berbagai alasan mengapa orang-orang hidup dengan satu ginjal. Menurut laman Kidney.org, ada tiga alasan utama yang menyebabkan kondisi ini:</p><p><br></p><p>Seseorang bisa saja lahir hanya dengan satu ginjal (renal agenesis) atau dua ginjal tetapi salah satunya tidak berfungsi (kidney dysplasia). Kebanyakan orang yang lahir dengan kondisi tersebut dapat menjalani hidup normal dan sehat.</p><p>Seseorang yang diangkat salah satu ginjalnya saat operasi demi menangani penyakit ginjal atau penyakit lain seperti kanker.</p><p>Seseorang mendonorkan salah satu ginjalnya.</p>', '<p>TEMPO.CO, Jakarta - In general, humans have two functioning kidneys. However, it is possible for a person to live with only one kidney. This kidney is important to maintain because there is no spare kidney that can replace it.</p><p><br></p><p>There are various reasons why people live with one kidney. According to the Kidney.org page, there are three main reasons that cause this condition:</p><p><br></p><p>A person may be born with only one kidney (renal agenesis) or two kidneys but one of them does not function (kidney dysplasia). Most people born with the condition can lead normal, healthy lives.</p><p>A person who has one kidney removed during surgery to treat kidney disease or other diseases such as cancer.</p><p>Someone donated one of his kidneys.</p>', 'Ginjal', 'Kidney', NULL, NULL, NULL, NULL, '17-09-2021', 'September', NULL, NULL),
(25, 4, 17, 10, 1, 1, 'Plus Minus Hand Sanitizer Bentuk Gel dan Cair, Pilih Mana?', 'Plus Minus Hand Sanitizer in Gel and Liquid form, which one to choose?', 'image/postimg/6144b6cad062f.jpg', '<p>TEMPO.CO, Jakarta - Ketika pandemi Covid-19, penjualan hand sanitizer meningkat drastis dan membuat produk tersebut laku di pasaran—terutama di awal pandemi. Benda ini digunakan apabila sedang bersentuhan dengan orang lain atau memegang benda yang diragukan kesterilannya.</p><p><br></p><p>Untuk hand sanitizer memiliki 2 jenis yang sering dijumpai di pasaran. Pertama, hand sanitaizer spray atau liquid. Seperti namanya, hand sanitizer jenis ini berbentuk cair dan cenderung seperti air. Jenis ini mampu membersihkan kuman lebih cepat dibandingkan dengan jenis gel. Selain itu, Disinfektan jenis ini diketahui mampu bekerja dalam waktu kurang dari 15 detik. Keunggulan lainnya dari jenis hand sanitizer ini mudah kering ketika disemprotkan ke tangan atau permukaan benda lainnya.</p><p><br></p><p>Selanjutnya, hand sanitizer yang juga banyak digunakan yaitu yang memiliki tekstur seperti gel. Jika hand sanitizer lebih mudah kering, jenis ini memiliki waktu lebih lama untuk kering di kulit dibandingkan jenis cair. Namun hand sanitizer yang berbentuk gel ini sangat baik untuk menjaga kebersihkan tangan. Hal tersebut dikarenakan kemampuannya yang menyerap lama, membuat tangan lebih lama terlindungi.</p>', '<p>TEMPO.CO, Jakarta - During the Covid-19 pandemic, sales of hand sanitizers increased dramatically and made these products sell well in the market—especially at the beginning of the pandemic. This object is used when in contact with other people or holding objects of questionable sterility.</p><p><br></p><p>For hand sanitizers, there are 2 types that are often found on the market. First, hand sanitizer spray or liquid. As the name suggests, this type of hand sanitizer is in liquid form and tends to be like water. This type is able to clean germs faster than the gel type. In addition, this type of disinfectant is known to work in less than 15 seconds. Another advantage of this type of hand sanitizer is that it dries easily when sprayed onto hands or other surface objects.</p><p><br></p><p>Furthermore, hand sanitizers that are also widely used are those that have a gel-like texture. If the hand sanitizer dries more easily, it will take longer to dry on the skin than the liquid type. However, this gel-shaped hand sanitizer is very good for keeping hands clean. This is because of its ability to absorb for a long time, making hands protected longer.</p>', 'COvid', 'Covid', NULL, NULL, NULL, NULL, '17-09-2021', 'September', NULL, NULL),
(26, 4, 17, 7, 2, 1, 'Update Covid-19 di Papua dan Papua Barat, Kamis 16 September: Total Kasus 56.063', 'Update on Covid-19 in Papua and West Papua, Thursday 16 September: Total Cases 56,063', 'image/postimg/6144b740149ee.jpg', '<p>TRIBUN-PAPUA.COM - Berdasarkan data dalam 24 jam terakhir hingga Jumat (17/9/2021), jumlah kasus secara nasional masih bertambah sejak kasus pasien pertama terinfeksi virus corona diumumkan pada 2 Maret 2020.</p><p><br></p><p>Jumlah kasus positif dikonfirmasi berdasarkan pemeriksaan dengan metode polymerase chain reaction (PCR).</p><div><br></div>', '<p>TRIBUN-PAPUA.COM - Based on data in the last 24 hours until Friday (17/9/2021), the number of cases nationally is still increasing since the first patient case infected with the corona virus was announced on March 2, 2020.</p><p><br></p><p>The number of positive cases was confirmed based on examination by the polymerase chain reaction (PCR) method.</p>', 'Covid', 'Covid', NULL, NULL, NULL, NULL, '17-09-2021', 'September', NULL, NULL),
(27, 5, 14, 10, 1, 1, 'Astronot Prancis Melihat Cahaya Terang yang Melebihi Bulan Purnama', 'French Astronauts See Bright Lights Beyond the Full Moon', 'image/postimg/6144b879bf561.png', '<p>PARIS - Seorang&nbsp;</p><p>astronot</p><p>&nbsp;dari Prancis, Thomas Pesquet berhasil merekam gambar jalur cahaya selatan saat bulan purnama dari Stasiun Luar Angkasa Internasional (ISS).</p><p><br></p><p>Seperti dilansir dari Unilad, cahaya yang dinamai Aurora Australis berasal dari bahasa Latin yang berarti selatan berwarna hijau bercampur biru dan merah. Dalam video tersebut terlihat cahaya itu lebih terang dari cahaya bulan purnama.</p><p><br></p><p>Pesquet, yang merupakan astronot Badan Antariksa Eropa (ESA) menjelaskan di halaman Facebook-nya bahwa ketika rekaman video dibuat, cahaya bulan sangat terang.</p><p><br></p><p>Insinyur luar angkasa itu mengaku telah beberapa kali menyaksikan cahaya aurora selama misinya di ISS tahun ini.</p>', '<p>PARIS - A</p><p>astronaut</p><p>&nbsp; from France, Thomas Pesquet managed to record images of the southern light trails during a full moon from the International Space Station (ISS).</p><p><br></p><p>As reported by Unilad, the light named Aurora Australis comes from Latin which means south is green mixed with blue and red. In the video, the light looks brighter than the light of a full moon.</p><p><br></p><p>Pesquet, who is an astronaut with the European Space Agency (ESA) explained on his Facebook page that when the video footage was made, the moonlight was very bright.</p><p><br></p><p>The space engineer claimed to have witnessed several aurora lights during his mission to the ISS this year.</p>', 'Bulan', 'Moon', NULL, NULL, NULL, 1, '17-09-2021', 'September', NULL, NULL),
(28, 5, 14, 11, 5, 1, 'Ketahuilah bahwa inilah proses terjadinya hujan, lengkap dengan penjelasannya', 'Know that this is the process of rain, complete with explanations', 'image/postimg/6144b965d130e.jpg', '<p>Hitekno.com – Bagaimana Proses hujan Dan apa langkah-langkahnya? Seperti diketahui, awal September 2021 banyak wilayah Indonesia yang memasuki musim hujan.</p><p><br></p><p>Menurut laporan resmi Pusat Perubahan Iklim, Badan Meteorologi, Iklim, dan Geofisika (BMKG) menyebutkan bahwa musim muson di Indonesia akan dimulai pada awal September 2021 namun tidak bersamaan.</p><p><br></p><p>Lalu bagaimana prosesnya? Hujan Dan apa levelnya? Ikuti uraian di bawah ini.</p><p><br></p><p>Tentunya untuk memprediksi datangnya hujan, terlebih dahulu harus dilakukan pengamatan, salah satunya dengan memahami proses terjadinya hujan. Berikut ulasan yang membahas tentang proses terjadinya hujan beserta penjelasannya.</p>', '<p>Hitekno.com – How does it rain and what are the steps? As is known, in early September 2021 many parts of Indonesia will enter the rainy season.</p><p><br></p><p>According to an official report from the Center for Climate Change, the Meteorology, Climate and Geophysics Agency (BMKG) stated that the monsoon season in Indonesia will start in early September 2021 but not at the same time.</p><p><br></p><p>Then what is the process? Rain And what level? Follow the description below.</p><p><br></p><p>Of course, to predict the arrival of rain, observations must first be made, one of which is by understanding the process of rain. The following is a review that discusses the process of rain and its explanation.</p>', 'Hujan', 'Rain', NULL, NULL, NULL, NULL, '17-09-2021', 'September', NULL, NULL),
(29, 5, 14, 10, 1, 1, 'September 2021 Akan Terjadi Fenomena Equinox, Cek Fakta', 'September 2021 Equinox Phenomenon Will Happen, Fact Check', 'image/postimg/6144bb0b05225.jpg', '<p>Bisnis.com, JAKARTA – Ekuinoks adalah peristiwa astronomi ketika kemiringan sumbu bumi dan orbit bumi mengelilingi matahari menyatu sedemikian rupa sehingga sumbunya tidak cenderung menjauhi atau mendekati matahari. Kami memiliki ekuinoks dua kali setahun, musim semi dan musim gugur. Kedua belahan menerima sinar matahari secara merata sekitar waktu ekuinoks.</p><p><br></p><p>Orang-orang awal telah membangun observatorium pertama untuk melacak kemajuan matahari. Mereka menggunakan langit sebagai jam dan kalender. Salah satu contohnya adalah di Machu Picchu di Peru, di mana batu Intihuatana, yang ditunjukkan di bawah, telah terbukti menjadi indikator yang tepat dari tanggal dua ekuinoks dan periode langit penting lainnya. Kata Intihuatana, secara harfiah berarti mengikat matahari.</p><p><br></p><p>Secara umum, ya, matahari terbit ke timur dan terbenam ke barat pada ekuinoks. Kecuali di Kutub Utara dan Selatan, Anda memiliki titik timur dan barat yang tepat di langit Anda. Titik itu menandai perpotongan langit Anda dengan ekuator langit, sebuah garis imajiner di atas ekuator Bumi yang sebenarnya.</p>', '<p>Bisnis.com, JAKARTA - An equinox is an astronomical event when the tilt of the earth\'s axis and the earth\'s orbit around the sun converge in such a way that its axis does not tend to move away from or approach the sun. We have the equinox twice a year, spring and fall. Both hemispheres receive sunlight evenly around the time of the equinox.</p><p><br></p><p>The early people had built the first observatories to track the progress of the sun. They used the sky as a clock and calendar. One example is at Machu Picchu in Peru, where the Intihuatana rock, shown below, has proven to be an accurate indicator of the dates of the two equinoxes and other important celestial periods. The word Intihuatana, literally means to bind the sun.</p><p><br></p><p>In general, yes, the sun rises east and sets west at the equinox. Except at the North and South Poles, you have the exact east and west points in your sky. That point marks the intersection of your sky with the celestial equator, an imaginary line above Earth\'s actual equator.</p>', 'Equinox', 'Equinox', NULL, NULL, NULL, NULL, '17-09-2021', 'September', NULL, NULL),
(30, 5, 14, 10, 1, 1, 'SpaceX Luncurkan Misi Pertama Luar Angkasa Astronot Amatir', 'SpaceX Launches First Amateur Astronaut Space Mission', 'image/postimg/6144bb9c37195.jpg', '<p>JawaPos.com – Tak perlu jadi astronot terlatih untuk bisa menjelajah luar angkasa. SpaceX bisa memberikan kesempatan tersebut. Yaitu, mengitari orbit bumi. Bukan hanya beberapa menit, melainkan selama beberapa hari. Misi pertama ’’wisata” luar angkasa oleh awak yang semua warga sipil itu digelar Rabu (15/9).</p><p><br></p><p>Pesawat luar angkasa SpaceX Falcon 9 meluncur dari Kennedy Space Center, Florida, pukul 20.02 waktu setempat. Sekitar 12 menit kemudian, kapsul Dragon yang membawa empat astronot amatir itu terpisah dari roket dan memasuki orbit. Mereka akan mengelilingi bumi selama tiga hari. Mereka terbang di lintasan dengan ketinggian 575 kilometer.</p><p><br></p><p>Empat orang beruntung di dalam kapsul tersebut adalah Jared Isaacman, Hayley Arceneaux, Chris Sembroski, dan Sian Proctor. Misi penerbangan itu dinamai Inspiration4. Mereka berempat menjalani pelatihan intensif di SpaceX selama enam bulan sebelum akhirnya terbang ke luar angkasa. Nanti mereka mendarat di perairan Florida. SpaceX sudah beberapa kali melakukan pendaratan di lautan.</p>', '<p>JawaPos.com – You don\'t need to be a trained astronaut to be able to explore outer space. SpaceX can provide that opportunity. That is, around the earth\'s orbit. Not just a few minutes, but for several days. The first mission \"tourism\" in space by a crew of all civilians was held on Wednesday (15/9).</p><p><br></p><p>The SpaceX Falcon 9 spacecraft blasted off from the Kennedy Space Center, Florida, at 8:02 p.m. local time. About 12 minutes later, the Dragon capsule carrying four amateur astronauts separated from the rocket and entered orbit. They will circle the earth for three days. They fly on a track with an altitude of 575 kilometers.</p><p><br></p><p>The four lucky people in the capsule are Jared Isaacman, Hayley Arceneaux, Chris Sembroski, and Sian Proctor. The flight mission was named Inspiration4. The four of them underwent intensive training on SpaceX for six months before finally flying into space. Later they landed in Florida waters. SpaceX has made several sea landings.</p>', 'Astronot', 'Astronot', NULL, NULL, NULL, NULL, '17-09-2021', 'September', NULL, NULL),
(31, 7, 4, 11, 5, 1, 'Spesifikasi dan Harga Samsung A52s 5G | Smartphone Cocok untuk Para Gamer', 'Samsung A52s 5G Specifications and Prices | Smartphone Suitable for Gamers', 'image/postimg/6144be5fd09d9.jpg', '<p>Samsung merilis Galaxy A series terbarunya, yakni Samsung Galaxy A52s 5G. Smartphone ini dilengkapi dengan chipset Snapdragon 778G yang sudah mendukung jaringan 5G dan didukung dengan memori 8/256GB.</p><p><br></p><p>\"Samsung terus berupaya dan berinovasi dalam menghadirkan produk yang dapat menjadi pilihan terbaik untuk para pengguna, khususnya para generasi muda yang membutuhkan performa tinggi dan teknologi terdepan,\" tutur Irfan Rinaldo, Product Marketing Manager Samsung Mobile, Selasa (14/09/21).</p>', '<p>Samsung has released its newest Galaxy A series, the Samsung Galaxy A52s 5G. This smartphone is equipped with a Snapdragon 778G chipset that supports 5G networks and is supported by 8/256GB of memory.</p><p><br></p><p>\"Samsung continues to strive and innovate in presenting products that can be the best choice for users, especially the younger generation who need high performance and leading-edge technology,\" said Irfan Rinaldo, Product Marketing Manager of Samsung Mobile, Tuesday (14/09/21).</p>', 'Samsung', 'Samsung', NULL, NULL, NULL, 1, '17-09-2021', 'September', NULL, NULL),
(32, 7, 4, 11, 5, 1, 'Tablet Anak Dilengkapi Fitur Parental Control Hingga Keamanan Mata si Kecil', 'Children\'s Tablets Equipped with Parental Control Features for the Safety of the Little One\'s Eyes', 'image/postimg/6144bf2a07f95.jpg', '<p>Fimela.com, Jakarta Tak bisa dipungkiri kecanggihan gadget menjadi “senjata” untuk membuat anak tenang apalagi ketuka rewel. Meski banyak berfikir memiliki efek negatif, namun pakar kesehatan mengungkapkan jika banyak bermanfaat menggunakan gadget seperti tablet anak.</p><p><br></p><p>American Academy of Pediatric (AAP) mengungkapkan bahwa kehadiran gadget ternyata juga bisa mendukung tumbuh kembang anak seperti mampu merangsang keterampilan motorik. Apalagi di masa pandemi ini gadget&nbsp; dibutuhkan untuk sekolah online maka intensitas penggunaan teknologi semakin tinggi, dan ini menjadi tantangan tersendiri bagi orangtua modern, di mana memiliki kecemasan akan hubungan emosional yang sehat antara Si Kecil dan gawai ataupun waktu yang dibutuhkan untuk memastikan kualitas dari konten yang dikonsumsi oleh anak.</p>', '<p>Fimela.com, Jakarta It is undeniable that the sophistication of gadgets is a \"weapon\" to make children calm, especially when they are fussy. Although many think it has a negative effect, health experts reveal that it is very useful to use gadgets such as children\'s tablets.</p><p><br></p><p>The American Academy of Pediatrics (AAP) revealed that the presence of gadgets can also support children\'s growth and development such as being able to stimulate motor skills. Especially in this pandemic period when gadgets are needed for online schools, the intensity of the use of technology is getting higher, and this is a challenge for modern parents, who have anxiety about a healthy emotional relationship between their little one and the device or the time needed to ensure the quality of the content provided. consumed by children.</p>', 'Anak', 'Kids', NULL, NULL, NULL, NULL, '17-09-2021', 'September', NULL, NULL),
(33, 7, 4, 10, 1, 1, 'Saingi iPad Mini, Xiaomi Luncurkan Xiaomi Pad 5 di RI', 'Compete with iPad Mini, Xiaomi Launches Xiaomi Pad 5 in RI', 'image/postimg/6144bf71b4b08.jpg', '<p>Setelah tiga tahun tidak menjual tablet, Xiaomi akan meluncurkan tablet baru di Indonesia yakni Xiaomi Pad 5. Tablet tersebut muncul hampir bersamaan dengan waktu peluncuran iPad Mini 6 dari Apple. Director Xiaomi Indonesia Alvin Tse mengatakan, Xiaomi akan meluncurkan tablet barunya itu di Indonesia berbarengan dengan peluncuran ponsel pintar atau smartphone baru Redmi 10, malam ini (17/9). Secara global Xiaomi telah meluncurkan Xiaomi Pad 5 pada Agustus lalu. Xiaomi telah tiga tahun tidak menjual tablet di Indonesia. Xiaomi terakhir kali meluncurkan tablet di Indonesia pada 2018 yakni, tablet Mi Pad 4 dan Mi Pad 4 Plus.&nbsp;</p><div><br></div>', '<p>After three years of not selling tablets, Xiaomi will launch a new tablet in Indonesia, the Xiaomi Pad 5. The tablet appears almost at the same time as the launch of the iPad Mini 6 from Apple. Director of Xiaomi Indonesia Alvin Tse said, Xiaomi will launch its new tablet in Indonesia at the same time as the launch of the new smartphone or smartphone Redmi 10, tonight (17/9). Globally Xiaomi has launched the Xiaomi Pad 5 last August. Xiaomi has not sold tablets in Indonesia for three years. Xiaomi last launched a tablet in Indonesia in 2018, namely, the Mi Pad 4 and Mi Pad 4 Plus tablets.<br></p>', 'Ipad', 'Ipad', NULL, NULL, NULL, NULL, '17-09-2021', 'September', NULL, NULL),
(34, 7, 4, 7, 6, 1, 'Telegram Sindir WhatsApp Soal Fitur Migrasi Chat iOS ke Android', 'Telegram Insinuates WhatsApp About the iOS to Android Chat Migration Feature', 'image/postimg/6144bfd888de7.jpg', '<p>TRIBUNNEWS.COM, JAKARTA - Telegram yang menjadi pesaing aplikasi pesan instan WhatsApp, baru-baru ini menyinggung fitur transfer chat dari iPhone ke Android yang diluncurkan WhatsApp.</p><p><br></p><p>Telegram menyindir fitur tersebut, melalui sebuah GIF Jumanji di akun media sosial mereka.</p><p><br></p><p>Mengutip dari laman situs Gizchina pada Jumat (17/9/2021), Telegram mengunggah sebuah cuitan di Twitter \" What years is it ?\" dengan GIF Jumanji.</p>', '<p>TRIBUNNEWS.COM, JAKARTA - Telegram, which is a competitor to the instant messaging application WhatsApp, recently mentioned the chat transfer feature from iPhone to Android launched by WhatsApp.</p><p><br></p><p>Telegram satirized the feature, via a Jumanji GIF on their social media account.</p><p><br></p><p>Quoting from the Gizchina website on Friday (17/9/2021), Telegram uploaded a tweet on Twitter \"What years is it ?\" with Jumanji GIFs.</p>', 'Android', 'Android', NULL, NULL, NULL, NULL, '17-09-2021', 'September', NULL, NULL),
(36, 14, 11, 7, 6, 3, 'Insiden Kevin Sanjaya di Bandara Helsinki Jelang Sudirman Cup', 'Kevin Sanjaya Incident at Helsinki Airport Ahead of Sudirman Cup', 'image/postimg/614c9aba05aa3.jpeg', '<p>Jakarta, CNN Indonesia -- Atlet ganda putra badminton Indonesia, Kevin Sanjaya Sukamuljo, sempat tertahan sendirian ketika tiba di Bandara Internasional Helsinki, Finlandia, Rabu (22/9) sore.</p><p>Hal tersebut diketahui dari video unggahan yang dibagikan akun instagram resmi Kedutaan Besar Republik Indonesia untuk Finlandia @indonesiinhelsinki pada Rabu.</p><p><br></p><p>Video berdurasi 9 menit 12 detik itu menayangkan kedatangan Tim Indonesia untuk Piala Sudirman 2021 di Bandara Internasional Helsinki di Vantaa, Finlandia</p><p><br></p>', '<p>Jakarta, CNN Indonesia -- Indonesian badminton men\'s doubles athlete, Kevin Sanjaya Sukamuljo, was detained alone when he arrived at Helsinki International Airport, Finland, Wednesday (22/9) afternoon.</p><p>This is known from the uploaded video shared by the official Instagram account of the Indonesian Embassy to Finland @indonesiinhelsinki on Wednesday.</p><p><br></p><p>The 9 minute 12 second video shows the arrival of the Indonesian Team for the 2021 Sudirman Cup at Helsinki International Airport in Vantaa, Finland.</p>', 'Juara', 'Champion', NULL, NULL, NULL, 1, '23-09-2021 15:18:18', 'September', NULL, NULL);
INSERT INTO `posts` (`id`, `category_id`, `subcategory_id`, `province_id`, `city_id`, `user_id`, `title_ind`, `title_en`, `image`, `details_ind`, `details_en`, `tags_ind`, `tags_en`, `headline`, `first_section`, `first_section_thumbnail`, `big_thumbnail`, `post_date`, `post_month`, `created_at`, `updated_at`) VALUES
(37, 14, 10, 10, 1, 3, 'LINK LIVE STREAMING INDOSIAR Persib vs Borneo FC, Keterlaluan jika Pangeran Biru Kalah', 'INDOSIAR LIVE STREAMING LINK Persib vs Borneo FC, it would be outrageous if Prince Biru loses', 'image/postimg/614c9c90b44cd.jpg', '<h4>PIKIRAN RAKYAT - Link live streaming Indosiar untuk menyaksikan pertandingan antara Persib Bandung vs Borneo FC dalam lanjutan Liga 1 2021-2022 bisa diperoleh di artikel ini.<br>Laga Persib vs Borneo FC akan dilangsungkan di Stadion Indomilk Arena, Tangerang, pada Kamis, 23 September 2021 pukul 19.00 WIB.<br>Persib punya catatan bagus setiap menghadapi Borneo FC. Selama ditangani Robert Alberts, Persib belum pernah menderita kekalahan dari Borneo FC.<br>Persib semakin di atas angin lantaran Borneo FC kondisi timnya kurang kondusif karena baru ditinggal pelatihnya, Mario Gomez.<br>Meski begitu, Robert Alberts tidak ingin timnya terlena dan tetap mewaspadai Borneo FC.<br>Persib Bandung dipastikan tidak akan tampil dengan diperkuat oleh Ezra Walian dan Geoffrey Castillion.<br>Ezra Walian masih harus menjalani pemulihan cedera yang dideritanya. Geoffrey Castillion, sementara itu, kesehatannya terganggu jelang pertandingan.<br>Baca Juga: Kena Insiden Sebelum Sudirman Cup 2021, Kevin Sanjaya Diduga \'Sisipkan\' Sesuatu di Koper<br>Laga antara Persib vs Borneo FC disiarkan langsung Indosiar dengan akses streaming bisa diperoleh di sini.</h4>', '<h4>PIKIRAN PEOPLE - Indosiar\'s live streaming link to watch the match between Persib Bandung vs Borneo FC in Liga 1 2021-2022 can be found in this article.<br>The Persib vs Borneo FC match will be held at the Indomilk Arena Stadium, Tangerang, on Thursday, September 23, 2021 at 19.00 WIB.<br>Persib has a good record every time they face Borneo FC. While being handled by Robert Alberts, Persib has never suffered a defeat to Borneo FC.<br>Persib is getting the upper hand because Borneo FC\'s team condition is not conducive because it just left its coach, Mario Gomez.<br>Even so, Robert Alberts did not want his team to be complacent and remained wary of Borneo FC.<br>It is certain that Persib Bandung will not appear, reinforced by Ezra Walian and Geoffrey Castillion.<br>Ezra Walian still has to recover from the injury he suffered. Geoffrey Castillion, meanwhile, has been in poor health ahead of the match.<br>Also Read: Incident Before Sudirman Cup 2021, Kevin Sanjaya Allegedly \'Insert\' Something In The Suitcase<br>The match between Persib vs Borneo FC was broadcast live by Indosiar with streaming access available here.</h4>', 'Persib', 'Persib', NULL, NULL, NULL, NULL, '23-09-2021 15:26:08', 'September', NULL, NULL),
(38, 14, 10, 11, 5, 3, 'Werner Ungkap Alasan Tak Jadi Eksekutor Penalti saat Lawan Villa', 'Werner Reveals Reasons For Not Being Penalty Executor Against Villa', 'image/postimg/614c9d257bcee.jpeg', '<p>London - Timo Werner memilih tak menjadi eksekutor saat adu penalti kala Chelsea melawan Aston Villa. Ia membeberkan alasan mengapa tak berani mengeksekusi titik putih.</p><p>Chelsea berhasil melaju ke babak keempat Piala Liga Inggris. Hal tersebut dipastikan usai The Blues menumbangkan Aston Villa 4-3 melalui lewat adu penalti di Stamford Bridge pada babak ketiga, Kamis (23/9/2021) dini hari WIB.</p><p><br></p><p>Laga harus dituntaskan ke babak tos-tosan setelah kedua tim bermain imbang 1-1 selama 90 menit. Tuan rumah unggul lebih dulu melalui Timo Werner pada menit ke-54. Villa hanya butuh waktu 10 menit untuk membalas dari Cameron Archer pada menit ke-64.</p><p><br></p><p>Pada babak adu penalti, Werner yang mencetak gol memilih untuk tidak menjadi penendang. Padahal, pemain asal Jerman ini sudah terbiasa menjadi eksekutor titik 12 pas sejak masih berseragam RB Leipzig. Ia juga tercatat telah mencetak tiga gol dari empat kesempatan mengambil penalti di Chelsea.</p><div><br></div>', '<p>London - Timo Werner chose not to be the executor during the penalty shootout when Chelsea against Aston Villa. He explained the reason why he did not dare to execute the white dot.</p><p>Chelsea managed to advance to the fourth round of the English League Cup. This was confirmed after the Blues overthrew Aston Villa 4-3 through a penalty shootout at Stamford Bridge in the third round, Thursday (23/9/2021) early morning hrs.</p><p><br></p><p>The match had to be resolved to high-five after the two teams drew 1-1 for 90 minutes. The hosts took the lead through Timo Werner in the 54th minute. Villa only took 10 minutes to reply from Cameron Archer in the 64th minute.</p><p><br></p><p>In the penalty shootout, Werner who scored the goal chose not to take the kick. In fact, this German player has been used to being a 12 point executor since he was in RB Leipzig uniform. He is also recorded as having scored three goals in four penalty-taking occasions at Chelsea.</p>', 'Villa', 'Villa', NULL, NULL, NULL, NULL, '23-09-2021 15:28:37', 'September', NULL, NULL),
(39, 14, 21, 13, 9, 3, 'Valentino Rossi Pensiun dari MotoGP, sang Ayah Akhirnya Mengerti', 'Valentino Rossi retires from MotoGP, his father finally understands', 'image/postimg/614c9e220e637.jpg', '<p>MISANO – Valentino Rossi telah menyatakan pensiun sebagai pembalap MotoGP. Dia mengungkapkan bahwa ayahnya, Graziano Rossi akhirnya telah mengerti dengan keputusannya berhenti di lintasan balapan motor.</p><p><br></p><p>Pada sesi tes resmi, sang ayah hadir di Sirkuit Misano. Dia menyaksikan Rossi pada sesi uji coba terakhir sebelum pensiun</p><p><br></p><p>Tentu saja ini momen menyedihkan bagi sang ayah karena harus rela melihat Rossi berhenti menjadi pembalap motor MotoGP pada musim depan. Namun bagaimanapun, kali ini ia legawa untuk melihat pembalap berusia 42 tahun itu melepas titelnya sebagai pembalap motor grand prix yang sudah digeluti sejak 1996.</p><p><br></p><p>Baca juga: Valentino Rossi Lebih Suka Balapan ketimbang Tes Resmi MotoGP, Apa Alasannya?</p><p><br></p><p>\"Dia mengerti (saya pensiun) sekarang. Dia yang terakhir menyerah, karena dia ingin saya melanjutkan,\" ucap Rossi, dilansir dari Crash, Kamis (23/9/2021).</p><p><br></p><p>Baca juga: Ini Jawaban Valentino Rossi soal Peluangnya Jadi Test Rider Usai Pensiun dari MotoGP</p><p><br></p><p>\"Tapi sekarang dia baik-baik saja dan dia datang kemarin dan hari ini untuk melihat beberapa lap,\" imbuhnya.</p><p><br></p><p>Seperti diketahui, bahwa The Doctor –julukan Valentino Rossi sudah mengumumkan pensiun pada akhir musim ini. Selama melakoni MotoGP musim ini, bisa dibilang Rossi tampil kurang maksimal.</p>', '<p>MISANO – Valentino Rossi has announced his retirement as a MotoGP racer. He revealed that his father, Graziano Rossi has finally understood his decision to stop at the motor racing track.</p><p><br></p><p>At the official test session, the father was present at the Misano Circuit. He watched Rossi in the last test session before retiring</p><p><br></p><p>Of course, this is a sad moment for his father because he has to be willing to see Rossi stop being a MotoGP motorcycle racer next season. However, this time he was relieved to see the 42-year-old racer relinquish his title as a grand prix motorcycle racer who has been in the business since 1996.</p><p><br></p><p>Also read: Valentino Rossi Prefers Racing to MotoGP Official Tests, What\'s the Reason?</p><p><br></p><p>\"He understands (I retired) now. He was the last one to give up, because he wanted me to continue,\" said Rossi, quoted from Crash, Thursday (23/9/2021).</p><p><br></p><p>Also read: This is Valentino Rossi\'s answer about his chances of becoming a test rider after retiring from MotoGP</p><p><br></p><p>\"But now he is fine and he came yesterday and today to see a few laps.\"</p><p><br></p><p>As is known, that The Doctor -Valentino Rossi\'s nickname has announced his retirement at the end of this season. During this MotoGP season, you could say Rossi appeared less than optimal.</p>', 'Rossi', 'Rossi', NULL, NULL, NULL, NULL, '23-09-2021 15:32:50', 'September', NULL, NULL),
(40, 14, 10, 11, 7, 3, 'Link Live Streaming Persik Kediri vs PSM Makassar di Liga 1 2021', 'Persik Kediri vs PSM Makassar Live Streaming Link in Liga 1 2021', 'image/postimg/614c9fe5d4775.jpg', '<p>Suara.com - Link live streaming Persik Kediri vs PSM Makassar pada pertandingan pekan keempat Liga 1 2021/2022. Duel menarik ini bakal berlangsung di Stadion Wibawa Mukti, Cikarang, Kamis (23/9/2021).</p><p><br></p><p>Pertandingan ini akan menjadi kesempatan bagi Persik Kediri dan PSM Makassar untuk mengantrol posisi ke papan atas klasemen Liga 1 2021/2022.</p><p><br></p><p>Saat ini Persik berada pada peringkat sembilan dengan raihan empat poin, selisih tiga angka dari PSIS Semarang yang ada di puncak klasemen.</p><p><br></p><p>Adapun Juku Eja --julukan PSM Makassar-- ada di posisi keenam dengan perolehan enam poin. Oleh sebab itu, kedua tim bakal menampilkan permainan terbaik demi dapatkan tiga poin.</p>', '<p style=\"overflow-wrap: break-word; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px 0px 10px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 24px; vertical-align: baseline;\">Suara.com - Persik Kediri vs PSM Makassar live streaming link in the fourth week of Liga 1 2021/2022 match. This exciting duel will take place at the Wibawa Mukti Stadium, Cikarang, Thursday (23/9/2021).</p><p style=\"overflow-wrap: break-word; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px 0px 10px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 24px; vertical-align: baseline;\"><br></p><p style=\"overflow-wrap: break-word; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px 0px 10px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 24px; vertical-align: baseline;\">This match will be an opportunity for Persik Kediri and PSM Makassar to control their position at the top of the 2021/2022 Liga 1 standings.</p><p style=\"overflow-wrap: break-word; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px 0px 10px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 24px; vertical-align: baseline;\"><br></p><p style=\"overflow-wrap: break-word; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px 0px 10px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 24px; vertical-align: baseline;\">Currently Persik is ranked ninth with four points, a difference of three points from PSIS Semarang at the top of the standings.</p><p style=\"overflow-wrap: break-word; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px 0px 10px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 24px; vertical-align: baseline;\"><br></p><p style=\"overflow-wrap: break-word; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px 0px 10px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 24px; vertical-align: baseline;\">Meanwhile, Juku Spell - the nickname of PSM Makassar - is in sixth position with six points. Therefore, both teams will show their best game to get three points.</p>', 'PSM', 'PSM', NULL, NULL, NULL, NULL, '23-09-2021 15:40:21', 'September', NULL, NULL),
(41, 14, 10, 13, 9, 3, 'Adu Celetukan Gibran Rakabuming Vs Atta Halilintar Jadi Bumbu Partai Pembuka Liga 2 2021', 'Gibran Rakabuming Vs Atta Halilintar Cheat Fights Become Seasonings for the 2021 League 2 Opening Party', 'image/postimg/614ca0b333e7c.jpeg', '<p>BOLASPORT.COM - Partai pembuka Liga 2 2021 yang mempertemukan Persis Solo Vs AHHA PS Pati FC diwarnai adu celetukan antara Gibran Rakabuming Raka dan Atta Halilintar.</p><p><br></p><p>Liga 2 2021 semakin dekat bergulir, laga antara Persis Solo Vs AHHA PS Pati FC akan jadi partai pembuka.</p><p><br></p><p>Tergabung di grup C, laga tersebut dijadwalkan akan dilaksanakan di Stadion Manahan, Solo, pada Minggu (26/9/2021).</p><p><br></p><p>Jelang laga tersebut, adu celetukan terjadi antara Gibran Rakabuming Raka dengan Atta Halilintar.</p><p><br></p><p>Gibran Rakabuming Raka yang merupakan walikota Solo, berkomentar soal siapa lawan yang mesti diwaspadai oleh Persis Solo.</p>', '<p>BOLASPORT.COM - The 2021 Liga 2 opening match which brought together Persis Solo Vs AHHA PS Pati FC was colored by a chirping match between Gibran Rakabuming Raka and Atta Halilintar.</p><p><br></p><p>Liga 2 2021 is getting closer, the match between Persis Solo Vs AHHA PS Pati FC will be the opening match.</p><p><br></p><p>Joined in group C, the match is scheduled to be held at the Manahan Stadium, Solo, on Sunday (26/9/2021).</p><p><br></p><p>Ahead of the match, a quibble took place between Gibran Rakabuming Raka and Atta Halilintar.</p><p><br></p><p>Gibran Rakabuming Raka, who is the mayor of Solo, commented on who Persis Solo should be wary of.</p>', 'Liga 2', 'Liga 2', NULL, NULL, NULL, NULL, '23-09-2021 15:43:47', 'September', NULL, NULL),
(42, 8, 22, 13, 9, 2, 'Mengkhususkan Berpuasa di Bulan Rajab', 'Specializing in Fasting in the Month of Rajab', 'image/postimg/614ca35964423.png', '<p>Syaikhul Islam Ibnu Taimiyah mengatakan, “Adapun mengkhususkan bulan Rajab dan Sya’ban untuk berpuasa pada seluruh harinya atau beri’tikaf pada waktu tersebut, maka tidak ada tuntunannya dari Nabi shallallahu ‘alaihi wa sallam dan para sahabat mengenai hal ini. Juga hal ini tidaklah dianjurkan oleh para ulama kaum muslimin. Bahkan yang terdapat dalam hadits yang shahih (riwayat Bukhari dan Muslim) dijelaskan bahwa Nabi shallallahu ‘alaihi wa sallam biasa banyak berpuasa di bulan Sya’ban. Dan beliau dalam setahun tidaklah pernah banyak berpuasa dalam satu bulan yang lebih banyak dari bulan Sya’ban, jika hal ini dibandingkan dengan bulan Ramadhan.</p><p><br></p><p>Adapun melakukan puasa khusus di bulan Rajab, maka sebenarnya itu semua adalah berdasarkan hadits yang seluruhnya lemah (dho’if) bahkan maudhu’ (palsu). Para ulama tidaklah pernah menjadikan hadits-hadits ini sebagai sandaran. Bahkan hadits-hadits yang menjelaskan keutamaannya adalah hadits yang maudhu’ (palsu) dan dusta.”(Majmu’ Al Fatawa, 25/290-291)</p><p><br></p><p>Bahkan telah dicontohkan oleh para sahabat bahwa mereka melarang berpuasa pada seluruh hari bulan Rajab karena ditakutkan akan sama dengan puasa di bulan Ramadhan, sebagaimana hal ini pernah dicontohkan oleh ‘Umar bin Khottob. Ketika bulan Rajab, ‘Umar pernah memaksa seseorang untuk makan (tidak berpuasa), lalu beliau katakan,</p><p><br></p><p>لَا تُشَبِّهُوهُ بِرَمَضَانَ</p><p><br></p><p>“Janganlah engkau menyamakan puasa di bulan ini (bulan Rajab) dengan bulan Ramadhan.” (Riwayat ini dibawakan oleh Syaikhul Islam Ibnu Taimiyah dalam Majmu’ Al Fatawa, 25/290 dan beliau mengatakannya shahih. Begitu pula riwayat ini dikatakan bahwa sanadnya shahih oleh Syaikh Al Albani dalam Irwa’ul Gholil)</p>', '<p>Shaykhul Islam Ibn Taymiyya said, \"As for specifying the months of Rajab and Sha\'ban for fasting the whole day or I\'tikaf at that time, then there is no guidance from the Prophet sallallaahu \'alaihi wa sallam and his companions regarding this. Also this is not recommended by the Muslim scholars. Even in the authentic hadith (narrated by Bukhari and Muslim) it is explained that the Prophet sallallaahu \'alaihi wa sallam used to fast a lot in the month of Sha\'ban. And in a year he never fasted a lot in a month more than the month of Sha\'ban, if this is compared to the month of Ramadan.</p><p><br></p><p>As for doing special fasting in the month of Rajab, then in fact it is all based on hadiths that are entirely weak (dho\'if) and even maudhu \'(false). The scholars have never used these hadiths as a backup. Even the hadiths that explain its virtues are those that are maudhu \'(false) and lie.\" (Majmu\' Al Fatawa, 25/290-291)</p><p><br></p><p>Even the Companions have exemplified that they forbade fasting on all days of the month of Rajab for fear that it would be the same as fasting in the month of Ramadan, as this was exemplified by \'Umar bin Khottab. When the month of Rajab, \'Umar once forced someone to eat (not fast), then he said,</p><p><br></p><p>لَا انَ</p><p><br></p><p>\"Do not equate fasting in this month (the month of Rajab) with the month of Ramadan.\" (This narration was brought by Shaykhul Islam Ibn Taimiyah in Majmu\' Al Fatawa, 25/290 and he said it was authentic. Likewise, this narration is said to be authentic by Shaykh Al Albani in Irwa\'ul Gholil)</p>', 'Khusus', 'Special', NULL, NULL, NULL, NULL, '23-09-2021 15:55:05', 'September', NULL, NULL),
(43, 8, 22, 13, 9, 3, 'KADRUN = KADAL GURUN', 'KADRUN = desert lizard', 'image/postimg/614ca669c235d.jpg', '<p>Allah Ta’ala berfirman,</p><p>“Dan janganlah kamu saling memanggil dengan gelar (yang buruk)” (QS. Al-Hujuraat [49]: 11).</p><p><br></p><p>Saudaraku, ketahuilah bahwa menghina orang lain dengan menyebutkan nama binatang itu dosanya lebih parah.&nbsp;</p><p><br></p><p>An-Nawawi Asy-Syafi’i&nbsp; rahimahullah berkata,</p><p>“Termasuk di antara kalimat yang tercela yang umum dipergunakan dalam perkataan seseorang kepada lawannya (adalah ucapan), “Wahai keledai!”; “Wahai kambing hutan!”; “Hai anjing!”; dan ucapan semacam itu. Ucapan semacam ini sangat jelek ditinjau dari dua sisi. Pertama, karena itu ucapan dusta. Ke dua, karena ucapan itu akan menyakiti saudaranya.</p><p><br></p><p>Memanggil orang lain dengan nama-nama binatang itu disebut ucapan dusta karena orang lain yang dia panggil itu adalah manusia, bukan binatang. Inilah sisi kedustaannya.</p><p><br></p><p>Orang yang melakukannya pun berhak untuk mendapatkan hukuman dari penguasa kaum muslimin. Diriwayatkan dari sahabat ‘Ali bin Abi Thalib radhiyallahu ‘anhu, beliau berkata,</p><p><br></p><p>“Sesungguhnya kalian bertanya kepadaku tentang seseorang yang mengatakan kepada orang lain, “Wahai orang kafir!”, “Wahai orang fasiq!”, atau “Wahai keledai!” Tidak ada hukuman hadd dari syari’at (untuk perbuatan itu). Yang ada hanyalah hukuman ta’zir dari penguasa. Maka janganlah diulangi mengucapkannya lagi!”</p>', '<p>Allah Ta\'ala says,</p><p>\"And do not call each other by (bad) titles\" (Surah Al-Hujuraat [49]: 11).</p><p><br></p><p>Brother, know that insulting another person by mentioning the name of an animal is a worse sin.</p><p><br></p><p>An-Nawawi Ash-Shafi\'i rahimahullah said,</p><p>\"Included among the despicable sentences that are commonly used in the words of a person to his opponent (is the speech), \"O donkey!\"; \"O wild goat!\"; “Hey dog!”; and such speech. This kind of speech is very bad in terms of two sides. First, because it\'s a lie. Second, because those words will hurt his brother.</p><p><br></p><p>Calling other people by the names of animals is called lying because the other people he calls are humans, not animals. This is the side of the lie.</p><p><br></p><p>People who do it also have the right to get punishment from the rulers of the Muslims. It was narrated from the companion of \'Ali bin Abi Talib radhiyallahu \'anhu, he said,</p><p><br></p><p>\"Indeed you ask me about someone who says to others, \"O disbeliever!\", \"O fasiq!\", or \"O donkey!\" There is no hadd punishment from the shari\'ah (for that act). There is only ta\'zir punishment from the authorities. So don\'t say it again!\"</p>', 'Kadal', 'Lizarrd', NULL, NULL, NULL, NULL, '23-09-2021 16:08:09', 'September', NULL, NULL),
(44, 8, 22, 13, 9, 2, 'Lebih baik musibah daripada nikmat! Loh kok bisa ?', 'Better calamity than pleasure! How come?', 'image/postimg/614d2e91a0d3a.jpg', '<p>| Nikmat Musibah...</p><p><br></p><p>Lebih baik musibah daripada nikmat❗</p><p>Loh kok bisa ❓</p><p><br></p><p>🍂 Bisa, karena musibah bisa jadi nikmat manakala ia bersabar dan semakin dekat kepada Allah...</p><p><br></p><p>🥀 Nikmat bisa jadi fitnah dan ujian bahkan mencelakakan manakala ia lalai mensyukurinya, namun malah kufur...</p><p><br></p><p>🌾 Karena itu alangkah benarnya perkataan Syaikhul Islam Ibnu Taimiyah rahimahullâhu,&nbsp;</p><p><br></p><p>«مُصِيْبَةٌ تُقْبِلُ بِهَا عَلىَ اللّٰهِ خَيْرٌ لَكَ مِنْ نِعْمَةٍ تُنْسِيْكَ مِنَ اللّٰهِ»</p><p><br></p><p>❝ Musibah yang mendekatkanmu kepada Allah adalah lebih baik daripada kenikmatan yang malah melupakanmu dari mengingat Allah ❞&nbsp;</p><p><br></p><p>📒 (al-Wâbilus Shayyib hal. 110)</p><p><br></p><p>💭 Ingatlah sahabat,</p><p><br></p><p>🏷️ Hidupmu di dunia ini tidaklah selalu penuh dengan musibah, dan tidak pula selalu berada dalam kenikmatan...</p><p><br></p><p>🏷️ Allah itu Maha Adil dan Maha Rahmah, Dia paling mengetahui kondisi hamba²-Nya...</p><p><br></p><p>🏷️ Hanya saja sering kali hamba²-Nya inilah yang lupa diri...</p><p><br></p><p>🍁 Ketika seorang hamba mendapat musibah, lalu ia sabar maka ini baik baginya. Ia akan mendapatkan pengguguran (kaffarah) dosa, pahala dan semakin dekat dengan Rabb-Nya.</p><p><br></p><p>🌻 Ketika ia mendapat nikmat, maka ia bersyukur kepada Allâh dan meyakini bahwa semua nikmat itu hanyalah milik Allâh dan dari Allâh. Lalu ia pun semakin cinta dengan Allâh dan Allâh membalasnya dengan pahala berlimpah...</p><p><br></p><p>☘️ Ya Allah, jadikanlah kami hamba²-Mu yang senantiasa mengingat-Mu di segala kondisi. Bersyukur kepada-Mu dikala mendapat nikmat dan bersabar di kala mendapat musibah.</p><p><br></p><p>🍃 Sehingga kami bisa menjadi SHABIRIN SYAKIRIN DZAKIRIN.. Allahumma Amin</p>', '<p>| Enjoy Calamity...</p><p><br></p><p>Better calamity than pleasure</p><p>How come</p><p><br></p><p>Yes, because calamity can be a blessing when he is patient and gets closer to Allah...</p><p><br></p><p>Pleasure can be slander and a test and even harm when he neglects to be grateful for it, but instead kufr...</p><p><br></p><p>Therefore how true the words of Shaykhul Islam Ibn Taymiyyah rahimahullâhu,</p><p><br></p><p>«مُصِيْبَةٌ لُ ا لىَ اللّٰهِ لَكَ اللّٰهِ»</p><p><br></p><p>Disasters that bring you closer to Allah are better than pleasures that forget you instead of remembering Allah</p><p><br></p><p>(al-Wâbilus Shayyib p. 110)</p><p><br></p><p>Remember friends,</p><p><br></p><p>️ Your life in this world is not always full of misfortune, nor is it always full of pleasure...</p><p><br></p><p>️ Allah is Most Just and Most Merciful, He knows best the condition of His servants...</p><p><br></p><p>️ It\'s just that it\'s often His servants who forget themselves...</p><p><br></p><p>When a servant gets a calamity, then he is patient then this is good for him. He will get an expiation (kaffarah) of sin, reward and getting closer to His Lord.</p><p><br></p><p>When he gets a favor, he is grateful to Allah and believes that all the blessings belong to Allah and from Allah. Then he became more in love with Allah and Allah rewarded him with abundant rewards...</p><p><br></p><p>️ O Allah, make us Your servants who always remember You in all conditions. Thank You in times of favor and be patient in times of calamity.</p><p><br></p><p>So that we can become SHABIRIN SHAKIRIN DZAKIRIN.. Allahumma Amin</p>', 'Musibah', 'Calamity', NULL, NULL, NULL, NULL, '24-09-2021 01:49:05', 'September', NULL, NULL),
(46, 8, 3, 13, 9, 2, 'Ada yang suka, ada yang benci...', 'Some like it, some hate it...', 'image/postimg/614d30af0bedd.jpg', '<p>Ada yang suka, ada yang benci...</p><p><br></p><p>🍂 Imam Asy-Syafi\'i mengatakan :</p><p><br></p><p>لَيْسَ أَحَدٌ إِلاَّ لَهُ مُحِبٌّ وَمُبْغِضٌ فَإِذْ لاَ بُدَّ مِنْ ذَلِكَ فَلْيَكُنِ الْمَرْجِعُ أَهْلَ طَاعَةِ اللَّهِ عَزَّ وَجَلَّ&nbsp;</p><p><br></p><p>\"Setiap manusia itu pasti disukai oleh sebagian orang sekaligus dibenci oleh sebagian yang lain. Itu adalah sebuah keniscayaan. Oleh karenanya hendaknya yang menjadi tolak ukur adalah dibenci atau disukai oleh orang-orang yang taat kepada Allah ﷻ.\"</p><p><br></p><p>📚 (Bustanul Arifin karya Imam an-Nawawi hlm. 137)</p><p>__________________</p><p><br></p><p>☘️ Adalah sebuah keniscayaan dalam hidup di dunia ini adanya orang yang pro dengan kita dan ada yang kontra.</p><p><br></p><p>🥀Hal ini karena kita mustahil bisa memuaskan semua orang di lingkungan kita.</p><p><br></p><p>🍁 Ini dilatarbelakangi perbedaan karakter, hobi, cara berpikir, kebiasaan, budaya, kualitas intelektual dll.</p><p><br></p><p>🌾 Sikap yang tepat dalam hidup bukan dalam bentuk memaksakan diri agar diterima oleh semua kalangan, baik penggemar ibadah ataupun penggemar maksiat.</p><p><br></p><p>🌻 Akan tetapi jadikanlah amal shalih dan amal ibadah sebagai orientasi hidup kita dan lakukan kerja sama dengan orang yang punya orientasi yang sama.</p><p><br></p><p>🍃 Seiring kesadaran penuh bahwa di dunia ini tidak ada orang yang tidak pernah membuat kita kecewa.</p><p><br></p><p>🌿 Semoga Allah ﷻ senantiasa memberikan kepada semua pembaca tulisan ini kemudahan untuk mencintai dan dicintai oleh orang-orang yang taat kepada-Nya.</p>', '<p>Some like it, some hate it...</p><p><br></p><p>Imam Ash-Shafi\'i said:</p><p><br></p><p>لَيْسَ لاَّ لَهُ لاَ لِكَ لْيَكُنِ الْمَرْجِعُ لَ اعَةِ اللَّهِ لَّ</p><p><br></p><p>\"Every human being must be liked by some people as well as hated by others. That is a necessity. Therefore, the benchmark should be being hated or liked by people who obey Allah .\"</p><p><br></p><p>(Bustanul Arifin by Imam an-Nawawi p. 137)</p><p>__________________</p><p><br></p><p>️ It is a necessity in life in this world there are people who are pro with us and some are against.</p><p><br></p><p>This is because it is impossible for us to satisfy everyone in our environment.</p><p><br></p><p>This is based on differences in character, hobbies, ways of thinking, habits, culture, intellectual qualities etc.</p><p><br></p><p>The right attitude in life is not in the form of forcing yourself to be accepted by all people, both worship fans and immoral fans.</p><p><br></p><p>However, make good deeds and acts of worship the orientation of our lives and cooperate with people who have the same orientation.</p><p><br></p><p>Along with full awareness that in this world there is no person who never disappoints us.</p><p><br></p><p>May Allah always give all readers of this article the convenience of loving and being loved by those who obey Him.</p>', NULL, NULL, NULL, NULL, NULL, NULL, '24-09-2021 01:58:07', 'September', NULL, NULL),
(47, 8, 22, 13, 9, 2, 'Syarat Manusia Bertakwa...', '1253 / 5000 Translation results Requirements for Godly Man...', 'image/postimg/614d32b8e241c.jpg', '<p><br></p><p>🍁 Takwa adalah menjalankan semua perintah Allah dan menjauhi semua larangan Allah.</p><p>&nbsp;</p><p>🍂 Seorang itu tidak mungkin bertakwa jika dia tidak mengetahui apa saja yang Allah perintahkan dan apa saja yang Allah larang.</p><p>&nbsp;</p><p>🌿 Oleh karena itu, syarat untuk menjadi insan yang bertakwa adalah mengetahui apa saja perintah Allah dan apa saja larangan Allah.</p><p>&nbsp;</p><p>☘️ Jadi semangat yang besar untuk belajar agama sehingga kita mengetahui apa saja perintah dan larangan Allah merupakan syarat mutlak untuk menjadi insan yang bertakwa.</p><p>&nbsp;</p><p>🌻 Tidak ada jalan menuju takwa tanpa semangat belajar agama.</p><p>&nbsp;</p><p>🥀 Orang yang ingin menjadi insan yang bertakwa namun malas belajar agama adalah orang yang hanya \'bermimpi\' untuk menjadi orang yang bertakwa.</p><p><br></p><p>🌾 Meski orang yang memiliki ilmu agama itu tidak mesti otomatis yang menjadi orang yang bertakwa.</p><p>&nbsp;</p><p>🍃 Untuk menjadi orang yang bertakwa, ilmu tersebut harus diamalkan dalam kehidupan nyata.</p><p>&nbsp;</p><p>🌴 Orang yang bertakwa pasti orang yang semangat belajar agama. Namun orang yang semangat belajar agama belum tentu pasti bertakwa.</p><p>&nbsp;</p><p>🌵 Semoga Allah memberi kemudahan bagi penulis dan semua pembaca tulisan ini untuk menjadi insan yang bertakwa, semangat belajar agama dan mengamalkannya. Aamiin.&nbsp;</p>', '<p>Requirements for Godly Man...</p><p><br></p><p>Taqwa is to carry out all the commands of Allah and stay away from all the prohibitions of Allah.</p><p>&nbsp;</p><p>It is impossible for a person to be pious if he does not know what Allah commands and what Allah forbids.</p><p>&nbsp;</p><p>Therefore, the requirement to become a pious person is to know what Allah\'s commands are and what Allah\'s prohibitions are.</p><p>&nbsp;</p><p>️ So a great passion for learning religion so that we know what God\'s commands and prohibitions are is an absolute requirement to become pious people.</p><p>&nbsp;</p><p>There is no path to piety without the spirit of learning religion.</p><p>&nbsp;</p><p>People who want to be pious but lazy to study religion are people who only \'dream\' to become pious.</p><p><br></p><p>Although people who have religious knowledge do not have to automatically become pious people.</p><p>&nbsp;</p><p>To become a pious person, this knowledge must be practiced in real life.</p><p>&nbsp;</p><p>People who are pious must be people who are passionate about learning religion. But people who are passionate about studying religion are not necessarily pious.</p><p>&nbsp;</p><p>May Allah make it easy for the author and all readers of this paper to become pious, passionate about learning religion and practicing it. Amen.</p>', NULL, NULL, NULL, NULL, NULL, NULL, '24-09-2021 02:06:48', 'September', NULL, NULL),
(48, 8, 5, 13, 9, 2, 'SEBAB MUNCUL SIHIR & KHUROFAT', 'WHY MAGIC & KHUROPHATE APPEAR', 'image/postimg/614d35f627c62.jpg', '<p>SEBAB MUNCUL SIHIR &amp; KHUROFAT</p><p><br></p><p>\"Tidaklah khurofat masuk kecuali disebabkan oleh sikap meremehkan dalam mempelajari tauhid, berlebihan dalam memuliakan orang-orang shalih, dan menganggap cukup dengan mengaku sebagai seorang muslim, maka dengan sebab itu semua terjadilah kesyirikan.\"</p><p><br></p><p>📚 Fatwa Asy-Syaikh Muhammad bin Ibrahim, jilid 1 hlm. 84</p>', '<p>WHY MAGIC &amp; KHUROPHATE APPEAR</p><p><br></p><p>\"Kurofat does not enter unless it is caused by an attitude of disdain in learning monotheism, exaggeration in glorifying pious people, and considering that it is enough to claim to be a Muslim, then because of that all shirk occurs.\"</p><p><br></p><p>Fatwa of Ash-Shaykh Muhammad bin Ibrahim, volume 1 page. 84</p>', NULL, NULL, NULL, NULL, NULL, 1, '24-09-2021 02:20:38', 'September', NULL, NULL),
(49, 8, 22, 13, 9, 2, 'Doa Berlindung Dari Rasa Malas', 'Prayer for protection from laziness', 'image/postimg/614d38ca16a47.jpg', '<p>KUMPULAN DOA</p><p><br></p><p>🔹 _Doa Berlindung Dari Rasa Malas_</p><p><br></p><p>اللَّهُمَّ إِنِّى أَعُوذُ بِكَ مِنَ الْعَجْزِ وَالْكَسَلِ وَالْجُبْنِ وَالْهَرَمِ وَالْبُخْلِ وَأَعُوذُ بِكَ مِنْ عَذَابِ الْقَبْرِ وَمِنْ فِتْنَةِ الْمَحْيَا وَالْمَمَاتِ</p><p><br></p><p>\"Ya Allah, aku berlindung kepada-Mu dari kelemahan, rasa malas, rasa takut, kejelekan di waktu tua, dan sifat kikir. Dan aku juga berlindung kepada-Mu dari siksa kubur serta bencana kehidupan dan kematian.”</p><p><br></p><p>📚 HR. Bukhari no. 6367 dan Muslim no. 2706</p>', '<p>PRAYER COLLECTION</p><p><br></p><p>_Prayer for protection from laziness_</p><p><br></p><p>اللَّهُمَّ الْعَجْزِ الْكَسَلِ الْجُبْنِ الْهَرَمِ الْبُخْلِ ابِ الْقَبْرِ الْمَحْيَا الْمَمَاتِ</p><p><br></p><p>\"O Allah, I seek refuge in You from weakness, laziness, fear, ugliness in old age, and miserliness. And I also seek refuge in You from the torment of the grave and the calamities of life and death.\"</p><p><br></p><p>HR. Bukhari no. 6367 and Muslim no. 2706</p>', 'Doa', 'Prayer', NULL, 1, NULL, NULL, '24-09-2021 02:32:42', 'September', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prayers`
--

CREATE TABLE `prayers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subuh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dhuhur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ashar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maghrib` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isya` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prayers`
--

INSERT INTO `prayers` (`id`, `subuh`, `dhuhur`, `ashar`, `maghrib`, `isya`, `jumat`, `created_at`, `updated_at`) VALUES
(1, '05:30 WITA', '12:30 WITA', '15:20 WITA', '18:10 WITA', '17:10 WITA', '12:00 WITA', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `province_ind` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `province_ind`, `province_en`, `created_at`, `updated_at`) VALUES
(7, 'DKI Jakarta', 'DKI Jakarta', NULL, NULL),
(9, 'Papua Barat', 'West Papuaku', NULL, NULL),
(10, 'Sulawesi Tengah', 'Central Sulawesi', NULL, NULL),
(11, 'Sulawesi Selatan', 'South Sulawesi', NULL, NULL),
(12, 'Gorontalo', 'Gorontalo', NULL, NULL),
(13, 'Umum', 'General', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_verification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alexa_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `meta_author`, `meta_title`, `meta_keyword`, `meta_description`, `google_analytics`, `google_verification`, `alexa_analytics`, `created_at`, `updated_at`) VALUES
(1, 'Hadid Fajar', 'ZNNews', 'ZeroNine,hadidfajar,fajarnet', 'Mochammad Hadiid Fajar', 'Google Halo', '09090909', 'Alexa Halo cok', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('GeUg18AUiXiOMk54GaH7KCW5UtSKD3nZ7A3MC3go', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTo4OntzOjM6InVybCI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NjoiX3Rva2VuIjtzOjQwOiJTWkF3TTduMk9xa2x2b2tpVFRSQ1VXZGNxbTBCek5UdkMxUkdCM3lWIjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJHRtLzNqOXgvZFhxVWNEY2JabGJDSi5ab084T0JLSHJrQy9naEcwZHlzcXBWaWhGZXZOTnAuIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCR0bS8zajl4L2RYcVVjRGNiWmxiQ0ouWm9POE9CS0hya0MvZ2hHMGR5c3FwVmloRmV2Tk5wLiI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjQ6ImxhbmciO3M6MzoiaW5kIjt9', 1632582100),
('wjCpHpOi30Zebh83UI4TkUYuNyGZoFD0vpiWTClW', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicXNaeGJ5TUU1ZXgxanRPMk4zaVlvQUxRVGozM2owSm1BUDBrYzlpQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC92aWV3L3Bvc3QvMTYiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjQ6ImxhbmciO3M6MzoiaW5kIjt9', 1632634255);

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `facebook`, `twitter`, `youtube`, `whatsapp`, `instagram`, `github`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com/mochammad.hadid.fajar/', 'https://twitter.com/HadidFajar09', 'https://www.youtube.com/channel/UCGqUociA6nipY-4N9D5nHOw', 'http://wa.me/6285757493227', 'https://www.instagram.com/nancyfajar_09/', 'https://github.com/hadidfajar09', 'https://www.linkedin.com/in/hadid-fajar-74b85b18a/', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subCategory_ind` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subCategory_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subCategory_ind`, `subCategory_en`, `created_at`, `updated_at`) VALUES
(3, '8', 'Bahasa Arab', 'Arabic Language', NULL, NULL),
(4, '7', 'Komputer', 'Computer', NULL, NULL),
(5, '8', 'Akidah', 'Aqidah', NULL, NULL),
(10, '14', 'Sepak Bola', 'Football', NULL, NULL),
(11, '14', 'Bulutangkis', 'Badminton', NULL, NULL),
(12, '12', 'Makanan Instan', 'Fast Food', NULL, NULL),
(13, '1', 'Wirausaha', 'Businessman', NULL, NULL),
(14, '5', 'Hewan', 'Animal', NULL, NULL),
(15, '2', 'Anime', 'Anime', NULL, NULL),
(16, '3', 'Pendidikan', 'Education', NULL, NULL),
(17, '4', 'Covid 19', 'Covid 19', NULL, NULL),
(20, '14', 'Voli', 'Volly', NULL, NULL),
(21, '14', 'Motor', 'Bike', NULL, NULL),
(22, '8', 'Faedah', 'Fawaid', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `district` int(11) DEFAULT NULL,
  `post` int(11) DEFAULT NULL,
  `setting` int(11) DEFAULT NULL,
  `website` int(11) DEFAULT NULL,
  `gallery` int(11) DEFAULT NULL,
  `ads` int(11) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `mobile`, `address`, `image`, `gender`, `position`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `type`, `category`, `district`, `post`, `setting`, `website`, `gallery`, `ads`, `role`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'zeronine09', 'zeronine09@gmail.com', NULL, '$2y$10$tm/3j9x/dXqUcDcbZlbCJ.ZoO8OBKHrkC/ghG0dysqpVihFevNNp.', '085555545', 'Tabaria', '202109230642logo1.jpeg', 'Male', 'Super Admin', NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, '2021-09-10 20:20:39', '2021-09-22 22:42:52'),
(2, 'Hadid Fajar', 'fajarnet1999@gmail.com', NULL, '$2y$10$AatcAAJqdOs1FK6RvCZfCeG/z8VF0jKUNg8Bi.qxBQNuGcmX38zB6', '8765556782', 'Dg tata', '202109230117controller.PNG', 'Male', 'Kolumnis', NULL, NULL, NULL, 0, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-22 17:17:07'),
(3, 'Fajar', 'fajarnet09@gmail.com', NULL, '$2y$10$0X8zX0MuaV6wL5IGwa7j6OlCxJ60/lqv7Rl1HoV.Dpq0CRkXyP6eC', '04118212988', 'Mannuruki', '202109230107berita utama.png', 'Male', 'Kolumnis', NULL, NULL, NULL, 0, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-23 00:27:41');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `embed_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `embed_code`, `type`, `created_at`, `updated_at`) VALUES
(1, 'OREK TEMPE TERBANYAK DIDUNIA! MASAK 10 JAM BAGIIN SEKOTA!', 'lMJiN4ag3l4', 0, NULL, NULL),
(2, 'Profil Desa Gentungang, Gowa Sulawesi Selatan', 'Zue0z7G9Y7k', 1, NULL, NULL),
(3, 'Coconut Tree Miniature dari Botol Bekas', 'AdtrtKT7zGg', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `websettings`
--

CREATE TABLE `websettings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_ind` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `websettings`
--

INSERT INTO `websettings` (`id`, `logo`, `address_ind`, `address_en`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'image/logo/614c7fa49199f.png', '<div>ZeroNineNews Group&nbsp;<br></div><div>Jalan BTN Tabaria Baru Blok E8/7</div><div>Makassar</div><div>Sulawesi Selatan</div><div>Universitas Fajar Makassar</div>', '<div>ZeroNineNews Group&nbsp;</div><div>Jalan BTN Tabaria Baru Blok E8/7</div><div>Makassar</div><div>Sulawesi Selatan</div><div>Universitas Fajar Makassar</div>', '(+62)85796124090', 'hadidfajar@rocketmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE `websites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `website_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `website_name`, `website_link`, `created_at`, `updated_at`) VALUES
(1, 'Detik.com', 'https://www.detik.com/', NULL, NULL),
(2, 'Tribun Timur Makassar', 'https://makassar.tribunnews.com/', NULL, NULL),
(3, 'CNN Indonesia', 'https://www.cnnindonesia.com/', NULL, NULL),
(5, 'merdeka.com', 'https://www.merdeka.com/', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `citys`
--
ALTER TABLE `citys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `lives`
--
ALTER TABLE `lives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prayers`
--
ALTER TABLE `prayers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websettings`
--
ALTER TABLE `websettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `citys`
--
ALTER TABLE `citys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lives`
--
ALTER TABLE `lives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `prayers`
--
ALTER TABLE `prayers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `websettings`
--
ALTER TABLE `websettings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `websites`
--
ALTER TABLE `websites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
