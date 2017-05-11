SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `cat_ids` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `intro` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `hits` int(11) NOT NULL,
  `last_hits` datetime NOT NULL,
  `rating` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `publish` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `content` (`id`, `cat_ids`, `title`, `description`, `keyword`, `intro`, `content`, `image`, `author`, `hits`, `last_hits`, `rating`, `created`, `updated`, `publish`) VALUES
(1, '1', 'judul', '', '', 'sdlfjalkfjdslka', '<p>lfjaldsfjlj kljdflksdajfsdalkf jsdkfljsdklfjds</p>\r\n\r\n<blockquote>\r\n<p>lfjlfjslkfjlskajfkldajkl</p>\r\n</blockquote>\r\n', 'judul_1.jpg', 'admin', 0, '0000-00-00 00:00:00', '', '2017-05-05 08:41:38', '2017-05-06 16:52:08', 1),
(2, '1,2,5', 'judul', '', '', 'sdlfjalkfjdslka', '<p>lfjaldsfjlj kljdflksdajfsdalkf jsdkfljsdklfjds</p>\r\n\r\n<blockquote>\r\n<p>lfjlfjslkfjlskajfkldajkl</p>\r\n</blockquote>\r\n', '', '', 0, '0000-00-00 00:00:00', '', '2017-05-05 08:45:20', '2017-05-05 08:45:20', 0),
(3, '1,2,5', 'fdfasdfsa', 'sdfasdsf', 'sdfa', '<p>dsfafj foidfusd fsdfjsdkfjsdkfjsdfjsdfjsd jflkj ldkfjdaslfjsldkfjsdklj</p>\r\n\r\n<blockquote>\r\n<p>sdlkfjaslfjsafjslfjskj</p>\r\n</blockquote>\r\n', '<p>dsfafj foidfusd fsdfjsdkfjsdkfjsdfjsdfjsd jflkj ldkfjdaslfjsldkfjsdklj</p>\r\n\r\n<blockquote>\r\n<p>sdlkfjaslfjsafjslfjskj</p>\r\n</blockquote>\r\n', '', '', 0, '0000-00-00 00:00:00', '', '2017-05-05 08:46:37', '2017-05-05 08:46:37', 0),
(4, '1', 'iwan', '', '', '<p>fjafjalfjdslkafjs</p>\r\n', '<p>fjafjalfjdslkafjs</p>\r\n', 'iwan_4jpg', 'admin', 0, '0000-00-00 00:00:00', '', '2017-05-05 10:40:20', '2017-05-06 16:50:10', 1),
(5, '1,2,5', 'coba dg gambar', '', '', '<p>hahaha</p>\r\n', '<p>hahaha</p>\r\n', 'coba dg gambar_5.jpg', '', 0, '0000-00-00 00:00:00', '', '2017-05-05 10:44:07', '2017-05-05 10:44:07', 0),
(6, '1,2,5', 'coba dg gambar', '', '', '<p>hahaha</p>\r\n', '<p>hahaha</p>\r\n', 'coba dg gambar_6.jpg', '', 0, '0000-00-00 00:00:00', '', '2017-05-05 10:45:11', '2017-05-05 10:45:11', 0),
(7, '1,2,5', 'coba dg gambar', '', '', '<p>hahaha</p>\r\n', '<p>hahaha</p>\r\n', 'coba dg gambar_7.jpg', '', 0, '0000-00-00 00:00:00', '', '2017-05-05 10:47:34', '2017-05-05 10:47:34', 0),
(8, '1,2,5', 'coba dg gambar', '', '', '<p>hahaha</p>\r\n', '<p>hahaha</p>\r\n', 'coba dg gambar_8.jpg', '', 0, '0000-00-00 00:00:00', '', '2017-05-05 10:49:22', '2017-05-05 10:49:22', 0),
(9, '1,2,5', 'coba dg gambar', '', '', '<p>hahaha</p>\r\n', '<p>hahaha</p>\r\n', 'coba dg gambar_9.jpg', '', 0, '0000-00-00 00:00:00', '', '2017-05-05 10:49:59', '2017-05-05 10:49:59', 0),
(10, '1,2,5', 'coba dg gambar', '', '', '<p>hahaha</p>\r\n', '<p>hahaha</p>\r\n', 'coba dg gambar_10.jpg', '', 0, '0000-00-00 00:00:00', '', '2017-05-05 10:51:13', '2017-05-05 10:51:13', 0),
(11, '1,2,5', 'coba dg gambar', '', '', '<p>hahaha</p>\r\n', '<p>hahaha</p>\r\n', 'coba dg gambar_11.jpg', '', 0, '0000-00-00 00:00:00', '', '2017-05-05 10:51:38', '2017-05-05 10:51:38', 1),
(12, '', 'coba', '', '', '<p>test</p>\r\n', '<p>test</p>\r\n', 'coba_12.jpg', 'admin', 0, '0000-00-00 00:00:00', '', '2017-05-05 10:55:57', '2017-05-05 10:55:57', 1),
(13, '2,3,4,5', 'iwan adalah', '', '', '<p>kfjdalfjdlfj jfj adfjl</p>\r\n', '<p>kfjdalfjdlfj jfj adfjl</p>\r\n', '', 'admin', 0, '0000-00-00 00:00:00', '', '2017-05-10 07:52:10', '2017-05-10 07:53:53', 1);

DROP TABLE IF EXISTS `content_cat`;
CREATE TABLE `content_cat` (
  `id` int(11) NOT NULL,
  `par_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `content_cat` (`id`, `par_id`, `title`, `description`, `publish`, `created`, `updated`) VALUES
(1, 0, 'Uncategorized', 'this is uncategorized', 1, '2017-05-01 07:33:31', '2017-05-01 07:33:31'),
(2, 0, 'kategori a', 'test', 1, '2017-05-02 06:46:43', '2017-05-02 06:47:42'),
(3, 0, 'kategori b', 'test', 1, '2017-05-02 06:48:14', '2017-05-02 06:48:14'),
(4, 0, 'kategori c', 'test', 1, '2017-05-02 06:49:32', '2017-05-02 06:49:32'),
(5, 0, 'kategori d', '', 1, '2017-05-02 06:52:06', '2017-05-02 06:52:06'),
(6, 1, 'kategori a', 's', 0, '2017-05-02 06:52:23', '2017-05-10 07:04:57'),
(7, 1, 'unkategori bc', 'aha', 0, '2017-05-02 06:55:46', '2017-05-10 07:04:57'),
(8, 2, 'kategori a', '', 0, '2017-05-02 07:02:35', '2017-05-10 07:04:57'),
(9, 0, 'testing unpublish', '', 0, '2017-05-03 07:02:08', '2017-05-10 07:04:57'),
(13, 0, 'coba lagi', '', 0, '2017-05-10 06:34:14', '2017-05-10 07:04:57');

DROP TABLE IF EXISTS `novel`;
CREATE TABLE `novel` (
  `id` int(11) NOT NULL,
  `cat_ids` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `hits` int(11) NOT NULL,
  `last_hits` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `publish` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `novel` (`id`, `cat_ids`, `image`, `title`, `description`, `author`, `country`, `hits`, `last_hits`, `status`, `publish`, `created`, `updated`) VALUES
(13, '18,19,20,21,22,23,24', ' Novel Beast Piercing The Heavens Bahasa Indonesia_13.jpg', ' Novel Beast Piercing The Heavens Bahasa Indonesia', 'Ye Qinghan, tuan muda dari kamu Keluarga kuat, akan dikucilkan ketika ayah taranya nya memenuhi berakhir malang. Kurang kekuatan dan dalam upaya untuk hidup damai, ia menderita melalui ejekan tanpa akhir, intimidasi dan penyiksaan ditangani kepadanya di setiap giliran. Namun nasib adalah nyonya kejam dan hanya menawarkan rasa sakit dan penderitaan tanpa akhir yang terlihat. Rusak, lemah dan bingung, Ye Qinghan embarks perjalanan untuk merebut tangan nasib dan mencapai kekuatan untuk melindungi sendiri. \r\n\r\nIkuti Ye Qinghan perjalanannya penuh dengan pertemuan berbahaya, pengkhianatan dan keberuntungan saat ia berusaha untuk membatalkan langit, menantang nasib dan menangkap nasibnya dalam pelukannya.', 'Yao ye', 'China', 0, '2017-05-11 05:33:54', 1, 1, '2017-05-11 05:33:54', '2017-05-11 05:33:54'),
(14, '18,19,20,21,22,23,24', 'Novel Heavenly Jewel Change Bahasa Indonesia_14.jpg', 'Novel Heavenly Jewel Change Bahasa Indonesia', 'Dalam dunia di mana kekuatan berarti segalanya, dan menginjak-injak kuat yang lemah; ada seorang anak yang lahir dari Surgawi Jewel Guru. Lahir di sebuah negara kecil yang harus berjuang untuk bertahan hidup, anak itu diharapkan untuk melakukan hal-hal besar. Alas ia ternyata memiliki meridian diblokir dan tidak mampu untuk mengolah, berakhir sampah masyarakat. kebanggaan ternoda ayahnya ... tunangan nya penghinaan ultimate ...\r\n\r\nYang hampir tidak sengaja terbunuh dan meninggalkan untuk mati, surga akhirnya tersenyum kepadanya sebagai keajaiban turun, membangkitkan potensi sebagai Surgawi Jewel Guru. Atau ... apakah itu benar-benar hadiah?\r\n\r\nBergabung terhina sayang kami dan tak tahu malu MC Zhou Weiqing di eksploitasi untuk mencapai puncak dunia budidaya, membentuk pasukan, melindungi orang-orang yang dicintainya, dan meningkatkan negaranya!', 'Tang Jia', 'china', 0, '2017-05-11 05:35:13', 1, 1, '2017-05-11 05:34:57', '2017-05-11 05:35:13'),
(15, '18,19,20,21,22,23,24', ' Novel Devouring The Heavens Bahasa Indonesia_15.jpg', ' Novel Devouring The Heavens Bahasa Indonesia', 'Xuanyuan terlahir ke dunia baru yang aneh di mana pelatihan untuk menjadi Xian adalah landasan a. Namun ada sesuatu hunian kuno di dalam tubuhnya. Dia sekarang bisa melahap semua ciptaan ... \r\n\r\nIni adalah perjalanan seorang anak biasa dan transformasi ke dalam makhluk tertinggi yang bertahta di atas semua eksistensi! Di mana-mana ia pergi, ia tidak bisa membantu tetapi mengikat nasibnya dengan sejumlah perempuan. Tidak peduli apakah mereka adalah dewi atau setan ...', 'Xiami XL', 'China', 23, '2017-05-11 06:10:51', 0, 1, '2017-05-11 05:36:26', '2017-05-11 06:10:51');

DROP TABLE IF EXISTS `novel_cat`;
CREATE TABLE `novel_cat` (
  `id` int(11) NOT NULL,
  `par_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `novel_cat` (`id`, `par_id`, `title`, `description`, `publish`, `created`, `updated`) VALUES
(18, 0, 'action', '', 1, '2017-05-11 05:32:17', '2017-05-11 05:32:17'),
(19, 0, 'advanture', '', 1, '2017-05-11 05:32:22', '2017-05-11 05:32:22'),
(20, 0, 'comedy', '', 1, '2017-05-11 05:32:25', '2017-05-11 05:32:25'),
(21, 0, 'harem', '', 1, '2017-05-11 05:32:29', '2017-05-11 05:32:29'),
(22, 0, 'martial arts', '', 1, '2017-05-11 05:32:35', '2017-05-11 05:32:35'),
(23, 0, 'romance', '', 1, '2017-05-11 05:32:39', '2017-05-11 05:32:39'),
(24, 0, 'xuanhuan', '', 1, '2017-05-11 05:32:50', '2017-05-11 05:32:50');

DROP TABLE IF EXISTS `novel_chapter`;
CREATE TABLE `novel_chapter` (
  `id` int(11) NOT NULL,
  `novel_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `publish` tinyint(1) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `novel_chapter` (`id`, `novel_id`, `title`, `content`, `publish`, `created`, `updated`) VALUES
(1, 13, 'What is Lorem Ipsum?', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 1, '2017-05-11 05:39:34', '2017-05-11 05:39:34'),
(2, 13, 'What is Lorem Ipsum?', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 1, '2017-05-11 05:39:34', '2017-05-11 05:39:34'),
(3, 13, 'What is Lorem Ipsum?', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 1, '2017-05-11 05:39:34', '2017-05-11 05:39:34'),
(4, 13, 'What is Lorem Ipsum?', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 1, '2017-05-11 05:39:34', '2017-05-11 05:39:34'),
(5, 14, 'What is Lorem Ipsum?', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 1, '2017-05-11 05:39:34', '2017-05-11 05:39:34'),
(6, 14, 'What is Lorem Ipsum?', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 1, '2017-05-11 05:39:34', '2017-05-11 05:39:34'),
(7, 14, 'What is Lorem Ipsum?', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 1, '2017-05-11 05:39:34', '2017-05-11 05:39:34'),
(8, 14, 'What is Lorem Ipsum?', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 1, '2017-05-11 05:39:34', '2017-05-11 05:39:34'),
(9, 15, 'What is Lorem Ipsum?', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 1, '2017-05-11 05:39:34', '2017-05-11 05:39:34'),
(10, 15, 'What is Lorem Ipsum?', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 1, '2017-05-11 05:39:34', '2017-05-11 05:39:34'),
(11, 15, 'What is Lorem Ipsum?', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 1, '2017-05-11 05:39:34', '2017-05-11 05:39:34'),
(12, 15, 'What is Lorem Ipsum?', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 1, '2017-05-11 05:39:34', '2017-05-11 05:39:34');

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '5' COMMENT '1=admin, 2=editor, 3=author, 4=contributor, 5=subscriber',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user` (`id`, `username`, `password`, `email`, `role`, `created`, `updated`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'iwan@fisip.net', 1, '2017-04-04 09:55:29', '2017-05-01 06:42:58'),
(2, 'iwan', 'md5(123456)', '', 5, '2017-04-05 08:45:41', '2017-04-05 08:45:41'),
(3, 'fredi', 'md5(123456)', '', 5, '2017-04-05 08:46:49', '2017-04-05 08:46:49'),
(4, 'lina', 'md5(123456)', '', 5, '2017-04-05 08:46:55', '2017-04-05 08:46:55'),
(5, 'pae', 'md5(123456)', '', 5, '2017-04-05 08:47:02', '2017-04-05 08:47:02'),
(6, 'mae', 'md5(123456)', '', 5, '2017-04-05 08:47:07', '2017-04-05 08:47:07'),
(7, 'bue', 'md5(123456)', '', 5, '2017-04-05 08:47:13', '2017-04-05 08:47:13'),
(8, 'bapak', 'md5(123456)', '', 5, '2017-04-05 08:47:19', '2017-04-05 08:47:19'),
(9, 'ulfa', 'md5(123456)', '', 5, '2017-04-05 08:47:25', '2017-04-05 08:47:25'),
(10, 'coba_password', 'e10adc3949ba59abbe56e057f20f883e', '', 5, '2017-04-06 10:18:06', '2017-04-06 10:18:06'),
(11, 'coba', '0cc175b9c0f1b6a831c399e269772661', '', 5, '2017-04-07 08:00:09', '2017-04-07 08:00:09'),
(12, 'iwan', 'e10adc3949ba59abbe56e057f20f883e', '', 5, '2017-04-11 07:30:12', '2017-04-11 07:30:12'),
(13, 'iwan', '13bbf54a6850c393fb8d1b2b3bba997b', '', 5, '2017-04-11 07:31:05', '2017-04-11 07:31:05'),
(14, 'iwan', '13bbf54a6850c393fb8d1b2b3bba997b', '', 5, '2017-04-11 07:31:16', '2017-04-11 07:31:16'),
(15, 'iwan', 'e10adc3949ba59abbe56e057f20f883e', '', 5, '2017-04-11 07:34:24', '2017-04-11 07:34:24'),
(16, 'frediansah', 'e10adc3949ba59abbe56e057f20f883e', '', 5, '2017-05-01 05:53:56', '2017-05-01 05:53:56');


ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `content_cat`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `novel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

ALTER TABLE `novel_cat`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `novel_chapter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `novel_id` (`novel_id`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
ALTER TABLE `content_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
ALTER TABLE `novel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
ALTER TABLE `novel_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
ALTER TABLE `novel_chapter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

ALTER TABLE `novel_chapter`
  ADD CONSTRAINT `novel_chapter_ibfk_1` FOREIGN KEY (`novel_id`) REFERENCES `novel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
