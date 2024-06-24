-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2024 at 01:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
--

-- --------------------------------------------------------

--
-- Table structure for table `karya`
--

CREATE TABLE `karya` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `tipe` set('Novel','Ensiklopedia','Dongeng','Biografi','Catatan','Panduan','Cerpen','Pantun','Puisi') DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `sinopsis` longtext DEFAULT NULL,
  `konten` longtext DEFAULT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karya`
--

INSERT INTO `karya` (`id`, `judul`, `tipe`, `author`, `status`, `sinopsis`, `konten`, `gambar`) VALUES
(16, 'Malin Kundang', 'Dongeng', 'Julian galang Saputra 3', 'siswa', 'Anak yang durhaka, dan dikutuk menjadi batu', '<h2><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Alkisah, di pesisir pantai daerah Sumatera Barat, hiduplah seorang ibu bersama anak kesayangannya yang bernama Malin. Sejak suaminya meninggal, Ibu Malin harus berjuang mati-matian untuk menghidupi Malin. Meskipun begitu, ia tetap merasa bahagia karena Malin merupakan anak yang penyayang. Dia juga sangat manja. Malin akan selalu menemani ibunya bekerja menjual ikan.</span></h2><h2><br></h2><h2><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Semakin hari, Malin semakin beranjak dewasa. Ia merasa sudah saatnya untuk menggantikan ibunya bekerja. Namun, Malin memiliki keinginan lain ketika melihat banyak teman sebayanya bisa kaya raya dalam waktu cepat setelah berjualan di kota.</span></h2><h2><br></h2><h2><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">“Mak, Malin ingin merantau ke kota seberang. Malin akan menghasilkan banyak uang untuk Emak dari sana.” Ibu Malin sangat terkejut mendengar keinginan putra kesayangannya itu.</span></h2><h2><br></h2><h2><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">“Jangan, Malin. Tetaplah di sini bersama Emak. Emak tidak ingin ada hal buruk yang menimpamu jika merantau ke kota.”</span></h2><h2><br></h2><h2><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Malin berupaya meyakinkan ibunya bahwa ia akan baik-baik saja di kota. Dengan hati yang gelisah, Ibu Malin melepaskan putranya yang hendak merantau.</span></h2><h2><br></h2><h2><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">“Hati-hati di sana ya, Nak. Jangan lupa untuk cepat pulang.” Ibu Malin memeluk Malin dengan sangat erat. Dia melambaikan tangan di tepi Pantai Air Manis untuk mengantarkan kepergian Malin.</span></h2><h2><br></h2><h2><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Beberapa lama kemudian, Malin tidak kunjung pulang ke rumah. Bertahun-tahun, ibunya hanya hidup sendirian. Hingga pada suatu hari, Ibu Malin mendapatkan kabar dari salah satu anak temannya yang juga merantau di kota seberang.</span></h2><h2><br></h2><h2><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">“Malin sudah menikah dengan putri seorang bangsawan, Bu. Dia tidak mungkin akan kembali ke sini,” jelas anak teman Ibu Malin yang baru saja kembali dari kota seberang.</span></h2><h2><br></h2><h2><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">“Tidak, Malin pasti akan kembali.”</span></h2><h2><br></h2><h2><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Dua bulan kemudian, Istri Malin yang sedang hamil mengidamkan berlibur ke Pantai Air Manis. Karena sangat menyayangi istrinya, Malin mengabulkan permintaan istrinya itu. Di dalam perjalanan, Malin teringat dengan ibunya. Malin merasa malu jika ia harus mengenalkan ibunya kepada istrinya.</span></h2><h2><br></h2><h2><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Saat kapal mereka sudah menepi di pinggir pantai, Ibu Malin yang sedang berjualan ikan melihat anaknya dari kejauhan. Ia sangat yakin itu adalah Malin. Sang ibu bergegas berlari dan memeluk tubuh Malin.</span></h2><h2><br></h2><h2><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">“Lepaskan! Siapa kau?” Ibu Malin terkejut ketika tubuhnya didorong oleh Malin.</span></h2><h2><br></h2><h2><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">“Malin, ini aku, ibumu.”</span></h2><h2><br></h2><h2><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">“Ibu? Apa perempuan lusuh ini ibumu? Kenapa kau berbohong, Malin? Kau bilang kau anak bangsawan sepertiku!” Istri Malin sangat marah menemukan kebohongan Malin yang terungkap.</span></h2><h2><br></h2><h2><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">“Tidak, dia bukan ibuku!”</span></h2><h2><br></h2><h2><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Malin bersikeras tidak mengakui ibunya. Ia bahkan menarik tubuh istrinya untuk meninggalkan pantai.</span></h2><h2><br></h2><h2><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Ibu Malin merasa sangat sedih sekaligus marah. Iapun berdoa kepada Tuhan dan menyumpahi Malin agar dikutuk menjadi batu.</span></h2><h2><br></h2><h2><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Langit bergemuruh setelah doa itu terdengar. </span></h2><h2><br></h2><h2><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Malin menyesali perbuatan yang ia lakukan kepada ibunya.</span></h2><h2><br></h2><h2><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">“Ibu maafkan anakmu yang durhaka ini!”</span></h2><h2><br></h2><h2><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Teriakan Malin sia-sia karena tidak lama setelahnya, kapal Malin terombang-ambing oleh ombak hingga karam dan terpecah.</span></h2><h2><br></h2><h2><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Keesokan paginya, semua orang di Pantai Air Manis terkejut menemukan banyak kepingan kapal yang berserakan. Namun, mereka lebih terkejut saat menemukan batu berbentuk manusia tengah bersujud.</span></h2><h2><br></h2><h2><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Kutukan Ibu Malin menjadi nyata. Ia menemukan anaknya yang ia kutuk menjadi batu. Ibu Malin menangis dan menyesali ucapannya.</span></h2><p><br></p>', 'WhatsApp_Image_2024-05-12_at_09.31.57_35f82e50-removebg-preview (1).png'),
(17, 'Hutan Merah', 'Cerpen', 'Julian galang Saputra 3', 'siswa', 'Matahari bersinar terik di Lampung. Sinarnya terhalang rimbunnya pepohonan, sehingga hanya menyisakan berkas tipis. Burung-burung berkicau seolah sedang menyanyikan lagu untuk alam. Bunyi riak jernih sungai beradu dengan batu kali berpadu dengan sahutan dari beberapa penghuni hutan yang lainnya. Ya, inilah tempat tinggal Bora, si anak gajah Lampung yang sekarang tengah asyik bermain bersama teman-temannya di sebuah sungai.\r\n\r\n       Ketika Bora menyemprotkan air ke arah Dodo—anak gajah lainnya—dengan belalainya, ia pun memekik nyaring. Sampai akhirnya, kegembiraan mereka terpecah oleh bunyi bising dari sebelah utara hutan. Bunyi bising itu bercampur dengan deru sesuatu yang sama sekali tidak Bora kenal.', '<h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">&nbsp;Matahari bersinar terik di Lampung. Sinarnya terhalang rimbunnya pepohonan, sehingga hanya menyisakan berkas tipis. Burung-burung berkicau seolah sedang menyanyikan lagu untuk alam. Bunyi riak jernih sungai beradu dengan batu kali berpadu dengan sahutan dari beberapa penghuni hutan yang lainnya. Ya, inilah tempat tinggal Bora, si anak gajah Lampung yang sekarang tengah asyik bermain bersama teman-temannya di sebuah sungai.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ketika Bora menyemprotkan air ke arah Dodo—anak gajah lainnya—dengan belalainya, ia pun memekik nyaring. Sampai akhirnya, kegembiraan mereka terpecah oleh bunyi bising dari sebelah utara hutan. Bunyi bising itu bercampur dengan deru sesuatu yang sama sekali tidak Bora kenal.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;“Hei, lihat itu!”</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Semua serentak menghentikan kegiatan mereka dan menengok ke langit yang ditunjuk Dodo. Asap hitam tebal yang membumbung tinggi dari sana. Asap itu semakin tebal dan terus menebal. Itu merupakan fenomena aneh yang baru pertama kali mereka saksikan. Selama ini yang mereka tahu, langit selalu berwarna biru cerah dengan awan putih berarakan.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">Keheningan hutan itu kemudian pecah saat Teo tiba-tiba saja datang sambil memekik nyaring, “Hutan terbakar! Hutan terbakar!”</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Semua ikut memekik ketakutan. Hutan terbakar! Tempat tinggal mereka terbakar!</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;“Bora! Apa yang kau lakukan!? Cepat pergi!” Pipin berteriak sambil menarik belalai Bora dengan belalainya..</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Suasana hutan yang tadinya damai tenteram, seketika menjadi neraka bagi semua hewan. Asap hitam pekat yang mulai menyelimuti seluruh hutan ini. Suhu udara mulai panas, membuat para hewan makin berteriak nyaring.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bora panik bukan main. Sambil mengikuti langkah Pipin, matanya bergerak ke sana-ke mari, mencari sosok ibunya.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;“Pipin! Di mana ibuku?” tanya Bora.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;“I-ibu … ibumu ….” Pipin tidak bisa menjawab karena sama-sama tidak tahu di mana ibu Bora berada.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;“Aku harus kembali ke sarang!” Bora melepaskan belalainya dari belalai Pipin, lalu berbalik untuk kembali ke sarangnya.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Namun, sebelum Bora melancarkan niatnya itu, Pipin sudah menarik kembali belalainya. “Ibumu pasti sudah berada di depan. Bersama gajah dewasa lainnya.”</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bora menghiraukan ucapan Pipin, lalu kembali meloloskan belalainya dan berlari sekuat mungkin menuju sarangnya.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;“Bora!” Pipin berteriak di belakangnya.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bora sampai di dekat sarangnya berada dengan napas terengah. Ia langsung membelalakkan mata begitu melihat sosok ibunya sedang bersusah payah keluar dari sarang. Api sudah menjalar di setiap pohon di dekat sarangnya itu.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;“Ibu!” teriak Bora sekuat tenaga.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;“Sedang apa kamu?! Cepat pergi dari sini!” teriak ibu Bora sambil menggerakkan belalainya, menyuruh Bora menjauh dari tempat ini.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;“Tidak! Aku tidak mau!” balas Bora keras kepala. Kenapa ibunya masih bisa berkata seperti itu? Padahal jelas-jelas ia dalam keadaan terjebak api?</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;“Cepat pergi, Bora!”</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;“Bora! Ayo pergi!” Tiba-tiba saja Pipin datang ke tempatnya dan langsung menarik belalai Bora.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;“Tidak mau!” Bora menyentak belalai Pipin keras. “Ibu! Aku akan menyelamatkanmu!”</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;“Jangan, Bora!” bentak Pipin</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><em style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">Kraaak! Braaak!</em></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;“IBU!! IBU!!” Bora terus meraung memanggil ibunya. Pohon yang sedang terbakar itu jatuh dan kemudian menimpa tubuh payah ibu Bora.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;“Ayo, Bora, kita harus pergi,” lirih Pipin sambil menarik Bora.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sekali lagi Bora menoleh ke belakang saat dirinya sudah cukup jauh dari sarangnya. Tidak ada lagi hutan hijau dengan tumbuhan rindang di sekitarnya. Hutan hijau yang selalu ia kagumi sudah berubah menjadi hutan merah yang sangat panas.</span></h2><h2><br></h2>', 'WhatsApp_Image_2024-05-12_at_09.31.57_35f82e50-removebg-preview (1).png'),
(18, 'Dilema Nara', 'Cerpen', 'Julian galang Saputra 3', 'siswa', 'Nara  terbangun karena sinar matahari menembus jendela kamarnya yang entah sejak kapan terbuka. Sejenak, ia hanya menatap langit-langit kamar. Matanya masih terasa sembab, sisa tangisan tadi malam.\r\n\r\nKemudian, Nara bangun dan duduk di sisi ranjang kecilnya. Gadis itu memandang sekeliling kamar, dan tiba-tiba, suara pecahan kaca terdengar dari luar.\r\n\r\nNara menutup kedua telinganya kuat-kuat, enggan mendengar apa pun. Setetes bening air matanya bergulir di pipi. Wajahnya dibenamkan dalam kedua telapak tangan yang lemah. Rasanya ia sudah tak sanggup lagi hidup dalam situasi seperti ini. Ia tak kuat hidup dalam lingkaran kesedihan yang menggiringnya menuju kegilaan.', '<h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">Nara&nbsp;terbangun karena sinar matahari menembus jendela kamarnya yang entah sejak kapan terbuka. Sejenak, ia hanya menatap langit-langit kamar. Matanya masih terasa sembab, sisa tangisan tadi malam.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">Kemudian, Nara bangun dan duduk di sisi ranjang kecilnya. Gadis itu memandang sekeliling kamar, dan tiba-tiba, suara pecahan kaca terdengar dari luar.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">Nara menutup kedua telinganya kuat-kuat, enggan mendengar apa pun. Setetes bening air matanya bergulir di pipi. Wajahnya dibenamkan dalam kedua telapak tangan yang lemah. Rasanya ia sudah tak sanggup lagi hidup dalam situasi seperti ini. Ia tak kuat hidup dalam lingkaran kesedihan yang menggiringnya menuju kegilaan.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">Nara berjalan perlahan ke luar rumah, di antara jalanan sepi sambil menundukkan kepala seolah malu dunia melihatnya. Ia menatap siluet hitamnya di antara bayang-bayang pepohonan dan rumah. Nara berhenti melangkah saat seseorang menghalangi bayangannya.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">“Ada yang ingin kukatakan padamu.” Orang itu mulai berbicara kepadanya.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">Nara mendongak. Wajahnya terasa familiar.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">“Kenapa?” Gadis itu bertanya dengan wajah datar, tapi Nara&nbsp;hanya diam. “KENAPA KAMU HARUS LAHIR DI DUNIA INI?!” Ia mulai membentak.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">Gadis itu melayangkan telapak tangannya ke pipi Nara. “PERGI!”</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">&nbsp;Nara&nbsp;tak sanggup menatap lawan bicaranya. Ia hanya memegang pipinya yang terasa nyeri karena tamparan barusan.&nbsp;</span><em style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">Hilanglah dari dunia ini, dasar penghancur keluarga orang!</em><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">&nbsp;hardik gadis itu. Nara terisak diiringi suara teriakan gadis itu di telinganya. Tetesan bening meleleh, merayapi sudut wajahnya.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">Nara adalah anak perempuan biasa yang hidup dengan kasih sayang utuh dari orang tua. Ia hidup berkecukupan, bahkan lebih. Semula, ia mengira hidup dalam zona kesempurnaan. Tetapi ternyata, semua itu hanya bualan. Ayahnya, ternyata, seorang pria yang telah berkeluarga. Saat itulah ia menyadari, ibunya adalah istri kedua ayahnya.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">Keluarganya tidak diinginkan oleh semua orang. Ibunya dianggap wanita yang tak punya harga diri. Tidak ada yang sudi berbagi nafas dan tempat dengan keluarga Nara. Mereka tidak pernah mau tahu separah apakah kerusakan jiwa yang mendera orang yang mereka cemooh.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">Istri pertama ayah Nara adalah sahabat dekat ibu Nara. Sahabat dekat yang saling mengaitkan janji satu sama lain sejak duduk di bangku sekolah untuk tidak mengkhianati. Begitu istri pertama ayahnya mengetahui apa yang telah terjadi, ia tentu syok berat. Suami yang ia cintai, berpaling darinya. Sahabat yang paling ia percaya, mengkhianatinya dalam waktu yang sama.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">Nina, anak istri pertama ayahnya, pun tak percaya. Ia nyaris pingsan saat ayahnya mengungkapkan hal itu sendiri. Selanjutnya, teror mulai berdatangan sebagai tanda balas dendam. Mulai dari pecahnya kaca jendela di rumah, hingga lemparan api untuk rumahnya.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">“Na?” Lamunan Nara terhenti. Gadis itu tetap diam, memandang kosong.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">“Nara? Sayang, kamu ada di dalam, kan?” Panggilan itu tak membuat Nara beranjak dari posisi yang nyaman bagi dirinya. Kemudian ketukan demi ketukan tak bernada mulai terdengar dari balik pintu.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">“Nara, buka pintunya, Sayang. Ibu mau bicara mengenai kepindahan kita,”</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">Memang, keluarganya berencana untuk pindah. Pindah ke wilayah yang cukup jauh untuk mengubur kelamnya masa lalu dan melanjutkan hidup. Tapi baginya, pindah rumah hanyalah bentuk pelarian diri. Raganya takkan teraniaya lagi. Namun, jiwa dan pikirannya telah menyatu dengan frustasi berkepanjangan yang diderita Nara selama ini. Ia tetap tidak akan hidup dalam damai seperti sebelumnya.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">Nara bergeming. Dalam pikirannya yang kalut, ia mengingat Nina. Gadis itu ingi ia lenyap dari dunia ini. Ia ingin Nara musnah. Nara tahu apa artinya itu.</span></h2><h2 class=\"ql-align-center\"><strong style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">*</strong></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">Nara memandangi tubuh kakunya yang ditumpahi tangisan dan penyesalan yang terlontar dari ayah dan ibunya. Ia tertegun dan mengingat kejadian yang terasa begitu cepat.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">Awalnya, ia berniat memutuskan urat nadi tangan kirinya dengan gunting hijau kesukaannya. Awalnya, ia tidak mau melihat orangtuanya menangis hebat sambil memeluknya. Awalnya, ia ingin merasakan rasa sakit yang mendera jiwanya lebih lama lagi. Namun, saat ia menutup mata dan menguatkan diri atas segala risiko perbuatannya nanti, seberkas cahaya putih menyinari dirinya. Sesaat, ia pikir cahaya itu hanya datang dari luapan fantasinya ketika ia sudah berhasil mati. Kemudian Nara tahu, kematiannya akan membawa segala keadaan berubah menjadi baik. Inilah yang diinginkan semua orang.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">Nara tersenyum. Sedikit pun, ia tak merasakan kesedihan. Ia hanya merasakan gema bebas dan damai berdengung dalam pikirannya. Sekarang, ia tak perlu lagi menerima berbagai bentuk kekerasan mental dari orang-orang di sekitarnya. Ia sudah bebas dan hidup dalam kedamaian yang dirindukan.</span></h2><h2 class=\"ql-align-justify\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(44, 49, 58);\">Nara menutup matanya, merasakan seluruh sensasi dan kenikmatan damai yang mengalir di sekujur tubuhnya. Berkas-berkas cahaya itu kembali datang dan menyinari tubuhnya, menuntun gadis kecil itu menuju dimensi lain. Dimensi yang akan membawanya menuju keabadian.</span></h2><h2><br></h2>', 'WhatsApp_Image_2024-05-12_at_09.31.57_35f82e50-removebg-preview (1).png');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `idbuku` int(11) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `komentar` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `idbuku`, `username`, `komentar`) VALUES
(1, 16, 'palalo', 'mantap mas'),
(2, 16, 'palalo', ''),
(3, 16, 'palalo', 'Mantap MaSSSSSS LANJUTKAN'),
(4, 17, 'palalo', 'AJE GILEEEEE'),
(5, 16, 'admin', 'BUSETTT'),
(6, 17, 'panjul', 'ASikkk');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `nuptk` varchar(50) DEFAULT NULL,
  `nisn` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` set('admin','guru','siswa','guest') NOT NULL,
  `verifikasi` enum('D','P') DEFAULT 'P',
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `telepon`, `nuptk`, `nisn`, `username`, `password`, `role`, `verifikasi`, `gambar`) VALUES
(1, 'admin', 'admin', NULL, NULL, 'admin', 'admin', 'admin', 'D', NULL),
(4, 'Galang Saputra', '212141412412312', '21.51512', '12321321', 'kuliat', 'julian', 'guest', 'D', 'WhatsApp Image 2024-05-15 at 20.18.17_88fbcef0.jpg'),
(5, 'Panjull', '523154', '5623', '121512.151521.', 'julian', 'galang', 'guest', 'D', ''),
(6, 'Julian Galang Saputra', '4515451245', NULL, NULL, 'lolo', 'kaka', 'guest', 'D', NULL),
(7, 'Julian galang Saputra 3', '12031232131', NULL, '12.12.3.', 'palalo', 'galang', 'siswa', 'D', 'IMG-20240524-WA0027-removebg-removebg-preview.png'),
(8, 'Julian Galang Caribean', '0210202002', NULL, NULL, 'panjul', 'panjul', 'guest', 'D', '441328654_394384026922702_7058429215006878003_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karya`
--
ALTER TABLE `karya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karya`
--
ALTER TABLE `karya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
