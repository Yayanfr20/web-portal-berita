-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2022 at 08:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cihuy_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(3, 'admin123', '$2y$10$SbIXbz5kSVodO8x9YkfWHOxNFqz/f5I7qdPyS47GQBdZgpDP5WHJ2');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(14, 'olah raga'),
(15, 'islam'),
(16, 'bencana'),
(17, 'kesehatan'),
(18, 'game');

-- --------------------------------------------------------

--
-- Table structure for table `postingan`
--

CREATE TABLE `postingan` (
  `id` int(11) NOT NULL,
  `img` varchar(200) NOT NULL,
  `judul` varchar(2000) NOT NULL,
  `deskripsi` varchar(10000) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `tanggal_upload` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postingan`
--

INSERT INTO `postingan` (`id`, `img`, `judul`, `deskripsi`, `kategori`, `tanggal_upload`) VALUES
(4, '62e1f4d8b8174.jpeg', 'Beda Gejala Cacar, Cacar Air, dan Cacar Monyet', 'Perbedaan gejala cacar . cacar air, dan cacar moyet', 'kesehatan', 'July 28, 2022, 4:30 am'),
(5, '62e1f75bdc4e0.jpeg', 'Cristiano Ronaldo di Tengah Pemain MU: Potong Obrolan, Ajak Latihan  Baca Cristiano Ronaldo di Tengah Pemain MU: Potong Obrolan, Ajak Latihan', 'Jakarta - Cristiano Ronaldo sudah kembali latihan bersama rekan-rekan satu timnya di Manchester United. Ada kisah ia memotong obrolan karena sudah waktunya latihan.\r\n\r\nPekan ini, Selasa (26/7), Ronaldo datang ke pusat latihan Man United di Carrington, setelah absen dalam aktivitas pramusim sejauh ini. Itu menjadi momen pertama CR7 berlatih dengan Erik ten Hag sebagai manajer.\r\n\r\n\r\nDikabarkan media Spanyol AS, pada kesempatan tersebut Cristiano Ronaldo sekaligus membahas soal masa depannya di Manchester United seiring dengan santernya rumor ia ingin meninggalkan Old Trafford.\r\n\r\nRonaldo Disambut Hangat Rekan Setim\r\nTerlepas dari spekulasi yang terus bergulir dengan liar, Ronaldo disebut tetap mendapatkan sambutan hangat dari pemain Man United lain yang melihatnya tiba.\r\n\r\nDisebutkan pula bahwa Cristiano Ronaldo tampak bercengkerama dengan seluruh pemain Man United asal Portugal dan Brasil, juga dengan rekrutan-rekrutan baru.\r\n\r\nNamun, masih menurut AS, di tengah obrolan tersebut Cristiano Ronaldo tiba-tiba memotong. &quot;Oke, sudah cukup. Sudah waktunya berlatih. Yuk berdiri.&quot;\r\n\r\nSesi latihan Man United itu sendiri baru dimulai pada pukul 13.00, mundur satu jam dari sesi siang yang biasanya digelar pukul 12.00. Hal ini kabarnya dikarenakan staf pelatih lebih dulu berdiskusi dengan seluruh pemain.\r\n', 'olah raga', 'July 28, 2022, 4:38 am'),
(6, '62e1fb4ee0f0f.jpeg', 'Menjaga Pegunungan Tengah Papua ', 'Jakarta - Dewan Perwakilan Rakyat mengesahkan Rancangan Undang-Undang pembentukan 3 provinsi baru yaitu Papua Selatan, Papua Tengah, dan Papua Pegunungan. Hal ini menyebabkan jumlah provinsi di Pulau Papua bertambah menjadi 5 sedangkan di Indonesia menjadi 37. Provinsi Papua Selatan akan beribu kota di Merauke, Papua Tengah di Nabire, dan Papua Pegunungan di Jayawijaya.\r\n\r\nPemekaran bertujuan untuk mempercepat pembangunan di bagian pegunungan dan selatan Pulau Papua. Pembangunan di Papua relatif masih tertinggal dibandingkan provinsi lain di Indonesia. Bahkan, lebih dari separuh kabupatennya termasuk dalam kategori daerah tertinggal. Ketersediaan sarana prasarana dasar, kualitas sumberdaya manusia, dan aksesibilitas wilayah masih menjadi tantangan di Papua.\r\n\r\nKawasan yang berada di provinsi hasil pemekaran adalah Pegunungan Tengah Papua. Pegunungan tengah mempunyai peran vital bagi ekosistem, tetapi juga menyimpan potensi ekonomi bernilai tinggi. Orientasi pembangunan yang berkelanjutan harus melandasi pengembangan provinsi baru di Pulau Papua.\r\nDampak Pemekaran\r\n\r\nDaerah otonom baru (DOB) pasti membutuhkan pembangunan berbagai sarana prasarana, baik dalam jangka pendek maupun panjang. Fasilitas pemerintahan, pendidikan, kesehatan, perekonomian, dan jaringan transportasi perlu dibangun untuk mendukung kegiatan pemerintahan dan masyarakat. Pusat-pusat pertumbuhan baru akan muncul seiring dengan berjalannya proses pembangunan di DOB.\r\n\r\nPusat pertumbuhan menimbulkan perkembangan di wilayah sekitarnya seperti kawasan permukiman atau perekonomian sehingga memicu alih fungsi lahan. DOB juga harus mencari sumber pendapatan daerah untuk pembiayaan pembangunan. Pemanfaatan sumber daya alam menjadi alternatif paling cepat untuk mendapatkan pajak atau dana bagi hasil.\r\n\r\nPegunungan Tengah mempunyai potensi mineral dan bahan tambang berskala besar. Apalagi proses perijinan akan semakin ringkas dengan adanya sistem Online Single Submission (OSS) dan kewenangan berada di pemerintah pusat. Kondisi ini perlu diperhatikan, jangan sampai ekonomi daerah bergantung pada eksplorasi sumber daya alam.\r\n\r\nPeran Strategis\r\n\r\nPengembangan pasca pemekaran perlu memperhatikan aspek keberlanjutan. Hal ini karena Pegunungan Tengah mempunyai peran strategis bagi ekosistem di Pulau Papua. Pegunungan Tengah termasuk dalam Taman Nasional (TN) Lorentz yang melingkupi kabupaten dalam pemekaran provinsi baru yaitu Asmat, Yahukimo, Jayawijaya, dan Mimika.\r\n\r\nKawasan hutan di TN Lorentz dianggap memiliki salah satu yang masih alami selain hutan di Pulau Kalimantan. Selain itu, TN Lorentz merupakan taman nasional terluas dan terlengkap ekosistemnya di wilayah Asia Tenggara.\r\n\r\n&quot;Paru-paru dunia&quot; menjadi fungsi paling penting dari kawasan hutan di Pegunungan Tengah. Perubahan iklim akibat proses deforestasi dan industrialisasi membutuhkan oase untuk tetap menjaga suhu bumi. Manfaat lainnya sebagai wilayah resapan air dan pengurangan risiko bencana juga perlu dilestarikan.\r\n\r\nSelain itu, Pegunungan Tengah merupakan habitat flora fauna langka di Indonesia seperti Dingiso (Dendrolagus mbaiso). Terdapat 1.200 tumbuhan berbunga, 123 spesies mamalia, 411 spesies burung, dan 150 spesies reptil dan amfibi. Bahkan terdapat 5 spesies burung sebaran terbatas dan sembilan spesies burung endemik.\r\n\r\nBelajar dari Pengalaman\r\n\r\nBanyak bukti daerah hasil pemekaran masih tergantung pada dana bagi hasil sektor eksplorasi alam. Perizinan untuk kegiatan pertambangan, perkebunan, dan sektor lainnya meningkat drastis setelah menjadi DOB. Pembangunan yang berorientasi jangka pendek akan menyebabkan kerusakan lingkungan hidup.\r\n\r\nDeforestasi menimbulkan berkurangnya resapan air serta bencana seperti banjir dan tanah longsor. Fungsi sebagai paru-paru dunia akan menurun akibat hilangnya sebagian tutupan vegetasi hutan. Dampak yang dirasakan tidak hanya lingkup lokal bahkan regional pulau.\r\n\r\nOrientasi pembentukan provinsi baru diharapkan memang bertujuan ingin memajukan masyarakat Papua. Jangan sampai berubah demi kepentingan kelompok dan jangka pendek sehingga menggunakan cara yang eksploitatif. Masyarakat asli papua hanya akan menjadi korban dan tidak merasakan dampak positif dari pemekaran. Keindahan alam Papua yang terkenal harus dilestarikan demi kesejahteraan masyarakat asli Papua.\r\n', 'bencana', 'July 28, 2022, 4:55 am'),
(7, '62e1fe31303a0.jpeg', 'Kominfo Sambut Inisiatif BNI Kembangkan Industri Game', 'Jakarta - Kementerian Komunikasi dan Informatika mengapresiasi upaya PT Bank Negara Indonesia (Persero) Tbk atau BNI yang ikut proaktif mengembangkan pasar industri game dalam negeri. Langkah perbankan sebagai fungsi intermediator ini dipercaya dapat lebih kuat dalam merangsang pertumbuhan industri game nasional.\r\nAdapun sebagai pionir digital banking BNI telah menyelenggarakan kegiatan Esports Tournament For Stronger Indonesia. Kompetisi yang memperlombakan tiga games Free Fire, PUBG Mobile, dan Lokapala mampu menarik atlet Esport lokal hingga 9.113 orang, atau 2.207 group. Tiga time sport terbaik seperti Dewa United Esport, Cemas Ko Deck, dan Tentakel Modja berhasil unjuk gigi dan menang dalam kompetisi sengit Esport nasional ini.\r\n\r\nJuru Bicara Kementerian Komunikasi dan Informatika Dedy Permadi menyampaikan pihaknya menyambut baik inisiatif berbagai pihak khususnya BNI dalam mengembangkan industri game nasional, melalui penyelenggaraan eSports Tournament for Stronger Indonesia.\r\n\r\nDia berharap apa yang dilakukan BNI bisa diikuti semua pihak dan tidak terhenti sampai disini, demi mendukung penciptaan ekosistem industri game nasional yang sehat dan semakin inovatif.\r\n\r\n&quot;Kami harap seluruh pemangku kepentingan terkait, termasuk BNI, dapat terus mendukung penciptaan ekosistem industri gim nasional yang sehat dan semakin inovatif,&quot; ujarnya dalam keterangan tertulis, Rabu (27/7/2022).\r\n\r\nDia melanjutkan sejauh ini Kemenkominfo pun terus mendukung perkembangan industri game nasional di antaranya melalui program Indonesia Game Developer Exchange (IGDX).\r\n\r\n&quot;Melalui program ini kami menyediakan rangkaian program pelatihan sampai business matchmaking untuk memfasilitasi para game developer lokal mengembangkan game buatannya,&quot; katanya.\r\n\r\nDirektur Utama BNI Royke Tumilaar menyampaikan ajang kompetisi seperti kegiatan Esports Tournament For Stronger Indonesia ini akan membuat lebih banyak gamer lokal sekaligus game creator untuk lebih bersemangat menciptakan prestasi.\r\n\r\nMenurutnya, dunia game menjadi tempat bersosialisasi bagi generasi milenial masa kini. Bahkan, tak jarang pembicaraan serius antar generasi milenial terjadi sambil bermain game online bersama teman-teman.\r\n\r\nRoyke memastikan BNI adalah lifetime partner generasi milenial yang juga mampu memfasilitasi perubahan kebiasaan tersebut dengan memberikan berbagai solusi perbankan di setiap transaksi game online.\r\n\r\n&quot;Kami berharap, kompetisi ini dapat meningkatkan pasar sektor game di Indonesia sekaligus melahirkan lebih banyak game creator yang mampu menarik perhatian milenial global,&quot; katanya.\r\n\r\nAnggota Tim Dewa United eSports Denis Haris Prayogo mengapresiasi BNI sebagai penyelenggara eSport Tournament For Stronger Indonesia. Menurutnya, ini adalah bentuk kepedulian pemerintah bersama BUMN dalam memfasilitasi sekaligus mendukung bakat-bakat anak muda dalam memberi kontribusi positif pada negara.\r\n\r\n&quot;Kami tentu sangat mengapresiasi penyelenggaraan kompetisi ini. Terima kasih BNI. Semoga BNI makin sukses terus For Stronger Indonesia,&quot; pungkasnya.', 'game', 'July 28, 2022, 5:09 am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postingan`
--
ALTER TABLE `postingan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `postingan`
--
ALTER TABLE `postingan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
