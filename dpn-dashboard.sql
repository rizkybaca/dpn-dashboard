-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table dpn-dashboard.articles
CREATE TABLE IF NOT EXISTS `articles` (
  `id_article` int NOT NULL AUTO_INCREMENT,
  `image` text,
  `post_date` datetime DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `article_content` text,
  `created_by` varchar(100) DEFAULT NULL,
  `created_at` int DEFAULT NULL,
  `updated_at` int DEFAULT NULL,
  PRIMARY KEY (`id_article`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Dumping data for table dpn-dashboard.articles: ~4 rows (approximately)
INSERT INTO `articles` (`id_article`, `image`, `post_date`, `title`, `slug`, `article_content`, `created_by`, `created_at`, `updated_at`) VALUES
	(15, 'f16baeca26e44ffd63a135bc7f0431aa.jpg', '2022-11-11 00:00:00', 'Menjadi Volunteer, Seru Gak Sih? Berikut Ini 7 Manfaat Kenapa Kamu Harus Ikut Jadi Volunteer', 'menjadi-volunteer-seru-gak-sih-berikut-ini-7-manfaat-kenapa-kamu-harus-ikut-jadi-volunteer', 'Jika kamu merupakan orang yang memiliki semangat untuk membantu orang lain dan merasa bahagia melihat orang lain bahagia, tampaknya menjadi relawan merupakan pilihan yang tepat buatmu. Saat ini menjadi relawan sudah bukan hal yang asing lagi dikalangan anak muda utamanya mahasiswa. Kegiatan kerelawanan atau volunteering sendiri merupakan kegiatan sosial yang didasari oleh jiwa sukarela. Kegiatan ini dilakukan oleh sekumpulan orang untuk membantu sesama dan berkontribusi aktif terhadap segala isu-isu yang sedang digaungkan.\r\n\r\nAda beberapa jenis kegiatan kerelawanan atau volunteering yang bisa menjadi pilihan kamu diantaranya, bidang pendidikan, kesehatan, ekonomi dan pariwisata, lingkungan dan pengembangan sumber daya manusia.  Setiap jenis kegiatan kerelawanan memiliki ciri khas dan keseruannya masing-masing dan pastinya mengandung banyak manfaat bagi sesama maupun bagi diri sendiri.\r\n\r\nBerikut ini merupakan manfaat yang bisa kamu dapatkan jika menjadi relawan:\r\n\r\n1. Meningkatkan jiwa kepemimpinan\r\n\r\nKetika menjadi relawan, kamu akan dihadapkan dengan berbagai hal yang belum pernah kamu temui di kehidupan sehari-hari hingga membutuhkan pola pikir dan cara memproses keputusan dengan tepat. Saat menjadi relawan, kamu juga akan diberikan tugas dan tanggung jawab yang akan meningkatkan jiwa kepemimpinan karena harus mampu memimpin diri sendiri maupun orang lain.\r\n\r\n2. Merasakan perasaan senang karena dapat membantu orang lain\r\n\r\nDalam salah satu ayat dalam kitab suci (QS. Al-Isra:7) disebutkan, “Jika kamu berbuat baik maka kamu berbuat baik pada dirimu sendiri, dan jika kamu berbuat jahat, maka kejahatan itu untuk dirimu sendiri.” Berdasarkan ayat tersebut, kita mengetahui bahwa segala perbuatan baik sesungguhnya adalah tabungan kita untuk diri sendiri. Ketika berbuat baik dengan membantu sesama, kita akan merasakan perasaan senang. Perasaan ini sesungguhnya salah satu hasil baik dari langkah baik kita ketika menebar kebaikan.\r\n\r\n3. Menjalin relasi dengan orang baru\r\n\r\nManfaat lain yang bisa kamu dapatkan ketika membantu sesama adalah, mendapatkan relasi baru. Menjadi seorang relawan mengharuskan kita untuk turun langsung kelapangan dan bertemu orang-orang baru dari berbagai kalangan dan daerah. Dengan pertemuan itu, kamu dapat menjalin jaringan baru yang lebih luas.\r\n\r\n4. Mendapatkan pelajaran dan pengalaman baru\r\n\r\nKetika turun langsung ke lapangan dan berinteraksi langsung dengan orang-orang yang kamu temui, kamu akan mendapatkan banyak pelajaran. Setiap langkah yang kamu jalani akan menjadi pengalaman berharga yang tidak akan kamu dapatkan jika hanya duduk menjadi penonton.\r\n\r\n5.  Menambahkan Keahlian dan Keterampilan\r\n\r\nKetika menjadi relawan, kamu akan diberikan tugas khusus baik dari tim maupun masyarakat tempatmu melakukan kegiatan kerelawanan. Tugas-tugas ini mampu menambah keahlian dan keterampilan yang kamu miliki.\r\n\r\n6. Melatih kemampuan kerjasama tim\r\n\r\nKetika lulus kuliah, kamu akan menghadapi dunia kerja yang menuntut setiap orang untuk mampu bekerja sama dengan tim. Ketika kamu pernah menjadi volunteer, kamu akan dilatih untuk mampu bekerjasama dengan tim untuk memenuhi tujuan bersama. Proses kerjasama tim ini akan melatih teknik komunikasi dan caramu mengungkapkan pendapat kepada orang lain.\r\n\r\n7. Meningkatkan <em>Personal Branding</em>\r\n\r\nKegiatan volunteer akan menjadi poin branding yang baik untuk diri kamu. Poin branding disini bukan dilakukan untuk mendapatkan pujian dari orang lain, melainkan untuk menggambarkan bahwa kamu merupakan orang yang memiliki tanggung jawab, mampu merealisasikan konsep atau wacana, dan memiliki peran dalam masyarakat.', 'Fadillahnanda', 1672758351, 1672848233),
	(16, 'c29dc1334582d1e9f8fe202843446066.jpg', '2022-11-18 00:00:00', 'Bergerak Dan Berkontribusi Ke Daerah 3T', 'bergerak-dan-berkontribusi-ke-daerah-3t', 'Sudah 77 tahun semenjak Indonesia memproklamasikan kemerdekaanya, namun masih banyak permasalahan di Indonesia yang ternyata belum merdeka. Terdapat beberapa permasalahan yang sampai saat ini belum memiliki titik pencerahan diantaranya adalah masalah pemerataan di daerah 3T. Daerah 3T merupakan daerah yang masuk dalam golongan daerah tertinggal, terdepan, dan terluar. Daerah ini merupakan daerah yang jauh dari sentuhan perkembangan dan pembangunan berkelanjutan seperti yang terjadi dikota-kota besar. Kemudian daerah 3T memiliki lokasi geografis yang berada di daerah terluar wilayah Indonesia sehingga menjadikan daerah tersebut perlu mendapatkan perhatian lebih.\r\n\r\nDaerah 3T terdapat 62 kabupaten berdasarkan Perpres No.62 Tahun 2020. Daerah ini diantaranya adalah Nias, Musi Rawas Utara, Mentawai, Lombok utara, Donggala, Sumba Tengah dan Alor, Pulau Taliabu, Nabire dan Asmat, Teluk Wondama dan Pegunungan Artefak. Daerah-daerah ini merupakan daerah yang membutuhkan banyak perhatian untuk mendapatkan pemerataan utamanya dalam hal pendidikan.\r\n\r\nPendidikan menjadi salah satu permasalahan krusial di daerah 3T yang harus segera ditangani karena merupakan tolak ukur baik tidaknya taraf kehidupan dalam bermasyarakat karena pendidikan merupakan gambaran kualitas generasi bangsa dimasa mendatang. Menurut Usman 2014, terdapat dua faktor kenapa upaya pemerataan dan perbaikan mutu pendidikan kurang atau tidak berhasil diantaranya adalah karena strategi pembangunan pendidikan selama ini bersifat input oriented. Selanjutnya adalah terkait pengelolaan pendidikan yang hanya berfokus di pusat atau makro oriented dimana seluruh kebijakan dan lainnya diatur oleh jajaran tingkat pusat. Hal ini mengakibatkan banyak hal yang diproyeksikan tidak dapat diimplementasikan pada tinggat mikro atau sekolah, utamanya di daerah 3T.\r\n\r\nMeskipun pemerintah sudah mulai bergerak untuk mengatasi masalah tersebut dengan berbagai rancangan yang salurkkan melalui kebijakan yang dibuat oleh Kementerian Pendidikan dan Kebudayaan, banyak masyarakat utamanya anak-anak muda juga mulai melek dan siap angkat badan untuk turut andil dalam mengatasi masalah ini. Dedikasi Pemuda Negeri atau biasa disingkat DPN misalnya. Dedikasi Pemuda Negeri merupakan Youth Development Fasilitator Service Organization yang memiliki tujuan menjadi wadah bagi para pemuda-pemudi dari berbagai wilayah di Indonesia untuk mengembangkan diri, mendedikasikan diri melalui ide atau hasil pemikiran juga semangat perubahan untuk Indonesia yang lebih makmur, sejahtera, mampu dan bisa bersaing di kancah internasional. Salah satu misi dari DPN adalah untuk mengembangan bidang pendidikan yang tertuang dalam program pengabdian masyarakat. Program ini merupakan gambaran nyata semangat perubahan demi pemerataan yang nyata dari pemuda bangsa yang siap untuk bergerak dan berkontribusi untuk negeri utamanya untuk daerah-daerah yang termasuk dalam kategori 3T (Tertinggal, terdepan dan terluar).', 'Fadillahnanda', 1672758633, 1672848240),
	(17, '8b53ceae56a25152a157a15a019c002f.jpg', '2022-12-16 00:00:00', '#1 : Serbu Kebaikan : Bergerak Menuju Pandeglang, Banten', '1-serbu-kebaikan-bergerak-menuju-pandeglang-banten', 'Pandeglang merupakan salah satu Kabupaten yang terletak di paling ujung sebelah barat dari pulau Jawa dan berbatasan langsung dengan Kabupaten Serang (utara), Kabupaten Lebak (timur), serta Samudera Indonesia (Barat dan selatan). Pandeglang ialah salah satu bagian dari provinsi Banten dengan luas wilayah sekitar 2.746,89 km.\r\n\r\nPandeglang adalah daerah dengan suhu rata-rata berkisar antara 20-31°C serta mempunyai bentuk topografi berupa tanah yang datar atau landai dan beberapa gunung memiliki ketinggian berbedabeda. Dengan kondisi suhu dan topografi seperti itu, Pandeglang menjelma menjadi destinasi wisata yang tak kalah unik dibanding dengan daerah lain di Indonesia. Karena berada di paling ujung sebelah barat pulau Jawa, Pandeglang memiliki destinasi pantai yang menawan. Wisatawan dapat menikmati pasir putih, sunset serta sunrise di beberapa pantai di Kabupaten Pandeglang.\r\n\r\nDaerah lain yang tak kalah indah dengan potensi wisata di Kabupaten Pandeglang adalah Kecamatan Sumur. Objek wisata yang terdapat di kecamatan ini diantaranya adalah Taman Nasional Ujung Kulon, Pulau Umang, Pulau Oar, Pulau Mangir, Desa wisata Paniis, wisata Cihangasa, wisata Cinibung dan lain sebagainya. Namun, dibalik indahnya wisata di kecamatan ini, wilayah Sumur ternyata merupakan kawasan rawan bencana. Tercatat tahun ini, telah terjadi beberapa bencana diantaranya adalah gempa bumi dan banjir telah menyapa wilayah ini. Akibatnya banyak bangunan, fasilitas yang rusak serta banyak muncul permasalahan-permasalahan baru yang pastinya membutuhkan bantuan sehingga bisa pulih lebih cepat. \r\n\r\nCakrawala mengabdi menjadi salah satu jawaban dari permasalahan ini. Cakrawala mengabdi yaitu kegiatan sosial yang berfokus pada pemberdayaan masyarakat di daerah 3T (Terdepan, Terpencil, dan Tertinggal). Kegiatan ini akan mulai bergerak bulan Januari 2023 untuk membantu daerah pandeglang bangkit kembali menjadi lebih kuat. Cakrawala mengabdi sendiri adalah salah satu program pengabdian masyarakat dari Dedikasi Pemuda Negeri atau yang biasa disingkat DPN. DPN memiliki tujuan menjadi wadah bagi para pemuda-pemudi dari berbagai wilayah di Indonesia untuk mengembangkan diri, mendedikasikan diri melalui ide atau hasil pemikiran juga semangat perubahan untuk Indonesia yang lebih makmur, sejahtera, mampu dan bisa bersaing di kancah internasional. Salah satu misi dari DPN yakni untuk menjaga lingkungan yang dituangkan dalam program pengabdian masyarakat. Kegiatan ini menunjukkan semangat perubahan demi proses yang nyata dari pemuda/i yang siap ikut serta dalam mengambil peran peduli lingkungan, bergerak serbu kebaikan menuju Pandeglang, Banten.', 'Naadiyah Suharto Putri', 1672758710, 1672847568),
	(18, '7dee753b98297c7499fdd84d651d8207.jpg', '2023-01-21 00:00:00', '#2 : Keindahan Kec. Sumur, Kab. Pandeglang, Banten', '2-keindahan-kec-sumur-kab-pandeglang-banten', 'Kec. Sumur, Kab. Pandeglang, Banten menjadi salah satu provinsi yang terkenal dengan keindahan pantainya. Menjadi tujuan utama destinasi untuk menikmati keindahan alam. Kecamatan Sumur, Pandeglang Banten memiliki potensi alam yang sangat besar, dan dapat dicoba untuk di nikmati dan berkunjung. Ada beberapa keindahannya yang wajib di kunjungi ketika menginjakkan kaki di Kecamatan Sumur, Pandeglang Banten.\r\n\r\n1. Pantai Karangranjang\r\n\r\nWisata Pantai Karangranjang di Sumur Pandeglang Banten adalah salah satu tempat wisata yang berada di Desa Ujungjaya, Kecamatan Sumur, Kabupaten Pandeglang, Banten, Indonesia. Tempat ini sangat indah dan bisa memberikan sensasi yang berbeda dengan aktivitas kita sehari hari.\r\n\r\nWisata Pantai Karangranjang di Sumur Pandeglang Banten memiliki pesona keindahan yang sangat menarik untuk dikunjungi. Sangat di sayangkan jika  berada di kota Pandeglang tidak mengunjungi Wisata Pantai Karangranjang di Sumur Pandeglang Banten yang mempunyai keindahan yang tiada duanya tersebut.\r\n\r\nWisata Pantai Karangranjang di Sumur Pandeglang Banten sangat cocok untuk mengisi kegiatan liburan , apalagi saat liburan panjang seperti libur nasional, ataupun hari libur lainnya. Wisata Pantai Karangranjang memiliki daya tarik yang luar biasa. Penduduk lokal daerah Pandeglang juga sangat ramah tamah terhadap wisatawan lokal maupun wisatawan asing.\r\n\r\nWisata Pantai Karangranjang di Sumur Pandeglang Banten yaitu sebuah pantai putih bersih yang tersembunyi di Ujung Kulon. Di sana ada debur ombak, hembusan angin dan rerumputan hijau. Hanya kedamaian dan ketenangan sebagai penghuninya. Sambil menikmati segarnya udara laut dan pemandangan selama perjalanan.\r\n\r\nTerdengar suara gesekan daun yang tertiup angin. yang sangat alami membuat pengunjung betah berlama-lama. Wisata Pantai Karangranjang di Sumur Pandeglang Banten ini surga dunia yaitu hamparan laut luas dengan pantai pasir putih yang bersih tanpa noda atau kotoran sedikit pun. Tampak jelas deburan ombak tinggi yang menghuni pantai ini. Angin kencang menerbangkan sebagian pasir putihnya yang halus dan lembut.\r\n\r\nTak ada kebisingan di pantai ini, hanya terdengar deburan ombak dan hembusan angin kencang. Ombak di pantai ini sangat tinggi karena berasal dari Samudera Hindia. Berada di Pantai Karang Ranjang, bagaikan menemukan surga kecil di ujung Pulau Jawa. Pantai Karangranjang bisa dibilang spesial karena belum dijamah banyak wisatawan. Tidak ada jejak kaki yang menghiasi bibir Pantai Karangranjang.\r\n\r\n2. Pulau Umang\r\n\r\nPulau yang tidak terlalu besar namun menyimpan keindahan laut yang sangat mempesona. Pulau Umang memiliki keindahan alam bawah lautnya yang masih alami, sehingga pengunjung pun dapat melihat secara langsung biota laut. Pulau Umang menjadi andalan wisata Kabupaten Pandeglang di Ujung Kulon yang mempesona.\r\n\r\nPulau Umang memiliki luas sekitar 9600 km persegi. Dengan panorama alam yang sangat indah. Bahkan tahun 2019 pulau Umang masuk deretan wisata terbaik di Banten. Banyaknya wisatawan yang berkunjung ke pulau ini sehingga saat ini lebih mudah untuk menuju ke lokasi, jika dari Jakarta berjarak sekitar 192 km,dengan perjalanan darat sekitar 5-6 jam.\r\n\r\nRute yang dapat ditempuh dari Jakarta, yaitu dari tol Jakarta Merak-keluar di pintu tol Cilegon Barat, kemudian menuju Anyer dan lanjut ke arah labuan. Setelah sampai di wilayah Kecamatan Sumur, dapat melanjutkan perjalanan dengan menggunakan Speedboat selama 8 menit waktu penyebrangan ke pulau Umang.\r\n\r\nBagi yang ingin mencoba dengan kendaraan umum, sangat mudah untuk menuju lokasi. Naik bis dari terminal kali deres naik bus jurusan labuan, minta turun di Tarogong labuan.kemudian dilanjutkan dengan angkot menuju Kecamatan Sumur.\r\n\r\nSelain menikmati keindahan alam bahari di pulau Umang, pengunjung dapat menikmati berbagai fasilitas yang ada. Seperti permainan wahana air, Jetski atau banana boat. Dapat juga menikmati keindahan bawah laut seperti Snorkling atau menyelam untuk dapat menikmati keindahan bawah laut dengan aneka biotanya. Bagi wisatawan yang ingin lebih lama menikmati keindahan pulau Umang, dilokasi juga tersedia berbagai jenis penginapan, terdiri dari resort dan rumah panggung.\r\n\r\nPulau Umang juga menyediakan berbagai jenis kuliner yang dapat menjadi pilihan dengan berbagai jenis, serta hidangan khas pulau yaitu aneka jenis masakan dari ikan dan hewan laut lainnya.\r\n\r\nSampai saat ini Pulau Umang selalu menjadi tempat wisata yang ramai dikunjungi, karena Pulau Umang bukan hanya menyajikan kecantikan dan keindahannya saja, tetapi fasilitas serta kenyamanan yang disajikan hingga membuat wisatawan betah berlama-lama dan berulang kali dating kembali ke Pulau Umang.', 'Nanda Tiara Putri', 1672758786, 1672848192);

-- Dumping structure for table dpn-dashboard.article_categories
CREATE TABLE IF NOT EXISTS `article_categories` (
  `id_article_category` int NOT NULL AUTO_INCREMENT,
  `article_id` int DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  PRIMARY KEY (`id_article_category`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table dpn-dashboard.article_categories: ~4 rows (approximately)
INSERT INTO `article_categories` (`id_article_category`, `article_id`, `category_id`) VALUES
	(38, 17, 6),
	(40, 18, 6),
	(41, 18, 8),
	(42, 15, 6),
	(43, 16, 6);

-- Dumping structure for table dpn-dashboard.benefits
CREATE TABLE IF NOT EXISTS `benefits` (
  `id_benefit` int NOT NULL AUTO_INCREMENT,
  `program_type_id` int DEFAULT NULL,
  `benefit_name` varchar(255) DEFAULT NULL,
  `benefit_description` text,
  `benefit_icon` text,
  PRIMARY KEY (`id_benefit`),
  KEY `program_type_id` (`program_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table dpn-dashboard.benefits: ~4 rows (approximately)
INSERT INTO `benefits` (`id_benefit`, `program_type_id`, `benefit_name`, `benefit_description`, `benefit_icon`) VALUES
	(9, 2, 'Upgrade Skill', 'Meningkatkan skill kamu baik softskill maupun hardskill', '<i class="fa-solid fa-rocket-launch"></i>'),
	(10, 2, 'Berkesempatan Menjadi Tim Internal', 'Dapatkan kesempatan untuk menjadi tim internal DPN', '<i class="fas fa-lightbulb-on"></i>'),
	(11, 2, 'Relasi', 'Bangun relasi dengan pemuda dari seluruh Indonesia', '<i class="fa-solid fa-rocket-launch"></i>'),
	(12, 2, 'Give Away', 'Dapatkan hadiah menarik dari program yang diikuti', '<i class="fa-solid fa-rocket-launch"></i>');

-- Dumping structure for table dpn-dashboard.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id_category` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) DEFAULT NULL,
  `category_icon` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table dpn-dashboard.categories: ~2 rows (approximately)
INSERT INTO `categories` (`id_category`, `category_name`, `category_icon`) VALUES
	(6, 'Program', '<i class="fa-solid fa-rocket-launch"></i>'),
	(7, 'Tips & Trick', '<i class="fa-solid fa-rocket-launch"></i>'),
	(8, 'Pendidikan', '<i class="fa-solid fa-rocket-launch"></i>');

-- Dumping structure for table dpn-dashboard.paths
CREATE TABLE IF NOT EXISTS `paths` (
  `id_path` int NOT NULL AUTO_INCREMENT,
  `program_type_id` int DEFAULT NULL,
  `path_name` varchar(255) DEFAULT NULL,
  `path_description` text,
  `path_icon` text,
  PRIMARY KEY (`id_path`),
  KEY `program_type_id` (`program_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table dpn-dashboard.paths: ~2 rows (approximately)
INSERT INTO `paths` (`id_path`, `program_type_id`, `path_name`, `path_description`, `path_icon`) VALUES
	(6, 2, 'Fully Funded', '<p>Seluruh biaya selama program ini berlangsung akan ditanggung oleh DPN</p>', '281c691c0be101d2b684916f403832a8.png'),
	(9, 2, 'Partially Funded', '<p>Sebagian biaya selama program ini berlangsung akan ditanggung oleh DPN</p>', '83411ef37878f7de4d104497a503dbf2.png'),
	(10, 2, 'Self Funded', '<p>Seluruh biaya selama program ini berlangsung akan ditanggung oleh Volunteer</p>', 'e1a43d824585a4cd5c8a976d099dc210.png');

-- Dumping structure for table dpn-dashboard.programs
CREATE TABLE IF NOT EXISTS `programs` (
  `id_program` int NOT NULL AUTO_INCREMENT,
  `program_type_id` int DEFAULT NULL,
  `guide_book_link` text,
  `image` text,
  `banner` text,
  `logo` text,
  `video` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `location` text,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `deadline` datetime DEFAULT NULL,
  `work_method` enum('offline','online','hybrid') DEFAULT NULL,
  `program_description` text,
  `delegation_requirement` text,
  `program_activity` text,
  `created_at` int DEFAULT NULL,
  `updated_at` int DEFAULT NULL,
  `is_active` enum('y','n') DEFAULT NULL,
  PRIMARY KEY (`id_program`) USING BTREE,
  UNIQUE KEY `slug` (`slug`),
  KEY `program_type_id` (`program_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- Dumping data for table dpn-dashboard.programs: ~1 rows (approximately)
INSERT INTO `programs` (`id_program`, `program_type_id`, `guide_book_link`, `image`, `banner`, `logo`, `video`, `title`, `slug`, `location`, `start`, `end`, `deadline`, `work_method`, `program_description`, `delegation_requirement`, `program_activity`, `created_at`, `updated_at`, `is_active`) VALUES
	(20, 2, 'https://drive.google.com/drive/folders/1fg-iLUDTxaN9nPTvUGN6SDnLpp6mTeXY', 'cc63435f4114a69cbcb6117d8ecad7ca.jpg', 'f93dd08adaa514322b5a2e48cee15cd5.png', '15e8a3e98d4911038bc14d97dbaf16e4.png', '', 'Cakrawala Mengabdi #1', 'cakrawala-mengabdi-1', 'Pandeglang, Provinsi Banten, Indonesia', '2023-01-05 06:00:00', '2023-01-15 22:00:00', '2022-12-10 23:59:00', 'offline', 'Cakrawala Mengabdi merupakan kegiatan pemberdayaan masyarakat yang berfokus pada daerah 3T (Terdepan, Terpencil, dan Tertinggal) maupun daerah dengan ekonomi yang cukup maju yang ditunjang dengan pariwisatanya di wilayah pulau Jawa dan Sulawesi. Kegiatan Cakrawala Mengabdi akan didampingi oleh fasilitator berpengalaman mengenai pemberdayaan masyarakat dan juga dokter/tenaga medis.\r\n\r\nCakrawala Mengabdi #1 akan dilaksanakan di Sumur. Sumur adalah salah satu kecamatan di kabupaten Pandeglang provinsi Banten yang memiliki luas wilayah 12.904 km2 dengan jumlah penduduk mencapai 12.598 jiwa. Kecamatan Sumur termasuk salah satu kecamatan dengan jumlah paling sedikit di Kabupaten Pandeglang dengan 98,64 jiwa per- km2.\r\n\r\nDi balik keindahan Kecamatan Sumur yang berbatasan langsung dengan kawasan Taman Nasional, kawasan ini rawan terkena bencana alam seperti gempa bumi yang menyebabkan bangunan-bangunan dan fasilitas rusak serta menelan korban jiwa. Selain itu, banyak juga tantangan dan kepelikan lain yang perlu menjadi perhatian, seperti permasalahan sampah yang tidak memiliki tempat pembuangan akhir (TPA) dan produk khas yang belum dikenal oleh masyarakat luas. Dibalik keindahan Sumur yang berbatasan langsung dengan Taman Nasional Ujung Kulon, faktanya masih butuh langkah penataan dan pengelolaan di berbagai bidang:\r\n\r\n1. Pendidikan\r\n2. Kesehatan\r\n3. Ekonomi dan Pariwisata\r\n4. Lingkungan\r\n5. Pengembangan Sumber Daya Manusia', 'Berumur 17 – 35 tahun, baik pelajar, mahasiswa ataupun umum</li>Berkomitmen mengikuti kegiatan dari awal sampai akhir kegiatan, yakni 05 – 15 Januari 2023</li>Memiliki minat dalam pengabdian masyarakat dan bersungguh-sungguh dalam menjalankan kegiatan</li>Mampu bekerja dalam tim</li>Mengikuti seluruh tata cara pendaftaran</li>Mematuhi seluruh aturan selama pengabdian</li>Dapat beradaptasi pada perubahan dan tantangan yang terjadi selama pengabdian', 'Inspiration Class</li>Medical Check-Up</li>Waste Management & Coral Reef Transplant</li>Micro, Small and Medium Enterprise (MSME) Development</li>Bidang Pengembangan Sumber Daya Manusia (PSDM)', 1672776998, 1672889750, 'y');

-- Dumping structure for table dpn-dashboard.program_benefits
CREATE TABLE IF NOT EXISTS `program_benefits` (
  `id_program_benefit` int NOT NULL AUTO_INCREMENT,
  `benefit_id` int DEFAULT NULL,
  `program_id` int DEFAULT NULL,
  PRIMARY KEY (`id_program_benefit`),
  KEY `benefit_id` (`benefit_id`),
  KEY `program_id` (`program_id`)
) ENGINE=InnoDB AUTO_INCREMENT=169 DEFAULT CHARSET=latin1;

-- Dumping data for table dpn-dashboard.program_benefits: ~4 rows (approximately)
INSERT INTO `program_benefits` (`id_program_benefit`, `benefit_id`, `program_id`) VALUES
	(165, 9, 20),
	(166, 10, 20),
	(167, 11, 20),
	(168, 12, 20);

-- Dumping structure for table dpn-dashboard.program_paths
CREATE TABLE IF NOT EXISTS `program_paths` (
  `id_program_path` int NOT NULL AUTO_INCREMENT,
  `path_id` int DEFAULT NULL,
  `program_id` int DEFAULT NULL,
  `cta_link` text,
  PRIMARY KEY (`id_program_path`),
  KEY `path_id` (`path_id`),
  KEY `program_id` (`program_id`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;

-- Dumping data for table dpn-dashboard.program_paths: ~2 rows (approximately)
INSERT INTO `program_paths` (`id_program_path`, `path_id`, `program_id`, `cta_link`) VALUES
	(98, 6, 20, 'http://bit.ly/PendaftaranVO-CM1-Fully'),
	(99, 10, 20, 'http://bit.ly/PendaftaranVO-CM1-Selfund');

-- Dumping structure for table dpn-dashboard.program_types
CREATE TABLE IF NOT EXISTS `program_types` (
  `id_program_type` int NOT NULL AUTO_INCREMENT,
  `program_type_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_program_type`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table dpn-dashboard.program_types: ~2 rows (approximately)
INSERT INTO `program_types` (`id_program_type`, `program_type_name`) VALUES
	(2, 'Pengabdian'),
	(3, 'CSR');

-- Dumping structure for table dpn-dashboard.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `image` varchar(128) NOT NULL,
  `role_id` int NOT NULL,
  `is_active` int NOT NULL,
  `date_created` int NOT NULL,
  `organization` varchar(128) DEFAULT NULL,
  `about` varchar(128) DEFAULT NULL,
  `job` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table dpn-dashboard.user: ~4 rows (approximately)
INSERT INTO `user` (`id`, `name`, `email`, `password`, `image`, `role_id`, `is_active`, `date_created`, `organization`, `about`, `job`) VALUES
	(1, 'Rizky Nur', 'rizky.nur@gmail.com', '$2y$10$dZcNJUNwvrtW97FJ2/sf7ebPpvUKnxzgZ2aYB3.gcUMBCMSSMNoga', '183200.jpg', 1, 1, 1624792594, NULL, NULL, NULL),
	(2, 'Raadiputra', 'ra.adiputra@gmail.com', '$2y$10$NM5F4HLEiTNOO2VJ3bKE/ONkIYN8hs9LO6XV5ggJ7z.AraIDp1Eea', 'default.jpg', 2, 1, 1624793155, NULL, NULL, NULL),
	(3, 'Ana', 'a.na@gmail.com', '$2y$10$oAVOG9R1mH1Q8ES8sSefc.3bcx.UV6xgryij9N0QaGJuiFnX8RBzS', 'default.jpg', 2, 0, 1624923747, NULL, NULL, NULL),
	(4, 'Bacaanmu', 'bacaan.rizky@gmail.com', '$2y$10$QVXkgSPNtF28giMQ32XzvOA/XUAteosFNC66a58KPTcjenQ8RkakS', 'default.jpg', 1, 1, 1624926303, 'DPN', 'Saya Satpol', 'Developing and Engineering Manager');

-- Dumping structure for table dpn-dashboard.user_role
CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int NOT NULL AUTO_INCREMENT,
  `role` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table dpn-dashboard.user_role: ~2 rows (approximately)
INSERT INTO `user_role` (`id`, `role`) VALUES
	(1, 'admin'),
	(2, 'copywriter');

-- Dumping structure for table dpn-dashboard.user_token
CREATE TABLE IF NOT EXISTS `user_token` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table dpn-dashboard.user_token: ~4 rows (approximately)
INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
	(2, 'bacaan.rizky@gmail.com', '90tY8zRaYauMY+wPrCWVmY321eGZM29znWPOPFbFag8=', 1624928843),
	(3, 'bacaan.rizky@gmail.com', 'D2BBe9/KoJ1CkWamQtAvjs7Cd9hJL2BHR0rou6/ov2A=', 1624930305),
	(4, 'bacaan.rizky@gmail.com', 'SNMYIhg5QdaOPdBc6P42N182RyiOr706M40QcoAv8To=', 1671735344),
	(5, 'bacaan.rizky@gmail.com', 'HHaU1jCB/Qy6ZfrMRS7CMFQ7GD+k3DmDH/f7I6zYBaI=', 1671735676);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
