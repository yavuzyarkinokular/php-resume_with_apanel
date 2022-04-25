-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 25, 2022 at 03:28 PM
-- Server version: 10.5.15-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yavuzyar_ayar`
--

-- --------------------------------------------------------

--
-- Table structure for table `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_logo` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_yas` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_nsurname` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_tel` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_mail` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_il` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_ilce` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_adres` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_maps` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_zopim` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_linkedin` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_github` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_bakim` enum('0','1') COLLATE utf8mb4_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_yas`, `ayar_nsurname`, `ayar_tel`, `ayar_mail`, `ayar_il`, `ayar_ilce`, `ayar_adres`, `ayar_maps`, `ayar_zopim`, `ayar_linkedin`, `ayar_github`, `ayar_bakim`) VALUES
(0, '', 'Deneme yazısıdır', 'Yavuz  Yarkın Okular', '+90 (506) 823 7354', 'yarkinokular@gmail.com', 'İzmir', 'Balçova', 'teleferik mahallesi enverpaşa sokak no:22 daire:5', '', '', 'https://www.linkedin.com/in/yavuzyarkinokular/', 'https://github.com/yavuzyarkinokular', '1');

-- --------------------------------------------------------

--
-- Table structure for table `deneyim`
--

CREATE TABLE `deneyim` (
  `deneyim_id` int(11) NOT NULL,
  `deneyim_pozisyon` text COLLATE utf16_turkish_ci NOT NULL,
  `deneyim_firma` text COLLATE utf16_turkish_ci NOT NULL,
  `deneyim_konum` text COLLATE utf16_turkish_ci NOT NULL,
  `deneyim_tarih` text COLLATE utf16_turkish_ci NOT NULL,
  `deneyim_aciklama1` text COLLATE utf16_turkish_ci NOT NULL,
  `deneyim_aciklama2` text COLLATE utf16_turkish_ci NOT NULL,
  `deneyim_aciklama3` text COLLATE utf16_turkish_ci NOT NULL,
  `deneyim_aciklama4` text COLLATE utf16_turkish_ci NOT NULL,
  `deneyim_aciklama5` text COLLATE utf16_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Dumping data for table `deneyim`
--

INSERT INTO `deneyim` (`deneyim_id`, `deneyim_pozisyon`, `deneyim_firma`, `deneyim_konum`, `deneyim_tarih`, `deneyim_aciklama1`, `deneyim_aciklama2`, `deneyim_aciklama3`, `deneyim_aciklama4`, `deneyim_aciklama5`) VALUES
(1, 'Kalite Kontrol Mühendis Stajyer', 'Temel Conta', 'Bornova,İzmir', 'Eylül, 2021 - Aralık, 2021', 'Conta kalınlıklarının kumpas ile kontrolü yapılması', 'Numune contaların sıkışabilirlik test makinesinde testi yapılması', 'Motor üst kapak contalarının ateş çemberi kontrolü yapılması', 'Kauçuk contaların Shore-metre ile sertlik kontrolünün yapılması', ''),
(2, 'Hasar Stajyeri', 'E. Özgörkey Grup', 'Bornova,İzmir', 'Temmuz, 2021-Ağustos, 2021', 'Hasarlı araçların uygun açıdan fotoğraflanması,', 'Araç anahtar bilgilerinin çıktı alınması,', 'Bilgisayar programları kullanılarak cam hasarının girilmesi,', 'İşyeri takip formunun atölyeye teslimi', '');

-- --------------------------------------------------------

--
-- Table structure for table `genelayar`
--

CREATE TABLE `genelayar` (
  `genelayar_id` int(11) NOT NULL,
  `genelayar_hakkımda` varchar(250) COLLATE utf16_turkish_ci NOT NULL,
  `genelayar_iletisim` varchar(250) COLLATE utf16_turkish_ci NOT NULL,
  `genelayar_author` varchar(250) COLLATE utf16_turkish_ci NOT NULL,
  `genelayar_isim` varchar(250) COLLATE utf16_turkish_ci NOT NULL,
  `genelayar_meslek` varchar(250) COLLATE utf16_turkish_ci NOT NULL,
  `genelayar_maps` text COLLATE utf16_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Dumping data for table `genelayar`
--

INSERT INTO `genelayar` (`genelayar_id`, `genelayar_hakkımda`, `genelayar_iletisim`, `genelayar_author`, `genelayar_isim`, `genelayar_meslek`, `genelayar_maps`) VALUES
(0, 'Hakkımda', 'İletişim', 'Yavuz Yarkın OKULAR', 'Yavuz Yarkın OKULAR', 'Otomotiv Mühendisi', '<iframe\r\n                    src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25018.362005273637!2d27.03861537217099!3d38.38842183582353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbdc3f593e08ab%3A0xe0c497f92491cc5c!2zQmFsw6dvdmEvxLB6bWly!5e0!3m2!1str!2str!4v1646235662909!5m2!1str!2str\"\r\n                    width=\"100%\"\r\n                    height=\"100%\"\r\n                    style=\"border: 0\"\r\n                    allowfullscreen=\"\"\r\n                    loading=\"lazy\"\r\n                  ></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(11) NOT NULL,
  `hakkimizda_description1` text COLLATE utf16_turkish_ci NOT NULL,
  `hakkimizda_description2` text COLLATE utf16_turkish_ci NOT NULL,
  `hakkimizda_description3` text COLLATE utf16_turkish_ci NOT NULL,
  `hakkimizda_description4` text COLLATE utf16_turkish_ci NOT NULL,
  `hakkimizda_yas` varchar(3) COLLATE utf16_turkish_ci NOT NULL,
  `hakkimizda_tel` varchar(100) COLLATE utf16_turkish_ci NOT NULL,
  `hakkimizda_mail` varchar(150) COLLATE utf16_turkish_ci NOT NULL,
  `hakkimizda_adres` varchar(150) COLLATE utf16_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Dumping data for table `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_description1`, `hakkimizda_description2`, `hakkimizda_description3`, `hakkimizda_description4`, `hakkimizda_yas`, `hakkimizda_tel`, `hakkimizda_mail`, `hakkimizda_adres`) VALUES
(0, 'Merhaba, Yarkın ismini kullanıyorum.', ' Üniversite stajlarımı hasar danışmanı stajyeri ve kalite kontrol stajyeri olarak tamamladım. CAD-CAM becerimi <b>Siemens NX</b> üzerine şekillendirdim. Yapısal statik analiz ve sonlu elemanlar methoduna büyük ilgi duymakta ve tecrübe etmek istemekteyim. ', ' Yazılım yetkinliklerime pandemi dönemiyle beraber  <b>Python </b>ile başladım. OOP, Inheritance ve Polymorphism gibi kavramları python ile öğrendim. Daha sonrasında ML kavramıyla beraber Numpy ve Pandas gibi kütüphaneleri deneyimleme fırsatım oldu. Mobil uygulamalara olan merakımla beraber <b>React</b> ve <b>React Native</b> ile mobil uygulama programladım. Web tarafında özellikle dinamik işlemlerde olan noksanlığım sebebiyle <b>PHP</b>  ile veritabanı işlemleri öğrendim ve kendi websiteme bunu uyguladım.', '', '23', '+90 (506) 823 73 54 ', 'yarkinokular@gmail.com', 'Balçova,İzmir');

-- --------------------------------------------------------

--
-- Table structure for table `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_zaman` datetime NOT NULL DEFAULT current_timestamp(),
  `kullanici_resim` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_tc` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_nickname` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_soyad` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_mail` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_gsm` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_password` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_adsoyad` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_adres` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_il` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_ilce` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_unvan` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_okul` varchar(200) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_yetki` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_durum` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_zaman`, `kullanici_resim`, `kullanici_tc`, `kullanici_nickname`, `kullanici_soyad`, `kullanici_mail`, `kullanici_gsm`, `kullanici_password`, `kullanici_adsoyad`, `kullanici_adres`, `kullanici_il`, `kullanici_ilce`, `kullanici_unvan`, `kullanici_okul`, `kullanici_yetki`, `kullanici_durum`) VALUES
(1, '2022-04-07 09:04:59', '', '41836529716', 'yarkinokular', 'Okular', 'yarkinokular@gmail.com', '+90 (506) 823 7354', 'tffhgd42516', 'Yavuz Yarkın Okular', '', 'İzmir', 'Balçova', 'Otomotiv Mühendisi', 'Pamukkale Üniversitesi', '5', 1),
(9, '2022-04-12 00:48:46', '', '', 'washereknow', '', 'washereknow@gmail.com', '', 'tffhgd42516', '', '', '', '', '', '', '5', 0),
(10, '2022-04-12 00:55:41', '', '', 'bilgehansungur', '', 'bilgehansungur2635@gmail.com', '+90 505 874 08 38', '1234', 'Bilgehan Sungur', '', 'İzmir ', 'Buca', 'Bilgisayar Mühendisi', 'Dokuz Eylül Üniversitesi', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `okul`
--

CREATE TABLE `okul` (
  `okul_id` int(11) NOT NULL,
  `okul_isim` text COLLATE utf16_turkish_ci NOT NULL,
  `okul_bolum` text COLLATE utf16_turkish_ci NOT NULL,
  `okul_tarih` text COLLATE utf16_turkish_ci NOT NULL,
  `okul_aciklama` text COLLATE utf16_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Dumping data for table `okul`
--

INSERT INTO `okul` (`okul_id`, `okul_isim`, `okul_bolum`, `okul_tarih`, `okul_aciklama`) VALUES
(1, 'Pamukkale Üniversitesi', 'Otomotiv Mühendisliği', '2017 - 2022', 'Bölümümü 3.00/4.00 ortalama ile bitirdim. Okul hayatımda Catia V5R20, Hypermesh ve Matlab programlama gibi dersler aldım.'),
(2, 'Zafer Temel Lisesi', 'Sayısal- MF', '2013 - 2017', 'Lise hayatımı Zafer Temel Lisesinden 77.33/100.00 ortalamayla bitirdim.');

-- --------------------------------------------------------

--
-- Table structure for table `portfolyo`
--

CREATE TABLE `portfolyo` (
  `portfolyo_id` int(11) NOT NULL,
  `portfolyo_name` text COLLATE utf16_turkish_ci NOT NULL,
  `portfolyo_title` text COLLATE utf16_turkish_ci NOT NULL,
  `portfolyo_description` text COLLATE utf16_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Dumping data for table `portfolyo`
--

INSERT INTO `portfolyo` (`portfolyo_id`, `portfolyo_name`, `portfolyo_title`, `portfolyo_description`) VALUES
(1, 'Python / Random Fonksiyonu', 'Şifre Oluşturucu', 'Bu projede karakter oluşturabilmek için ilk önce şifrede bulunacak karakterleri boşluk bırakmadan bir değer ataması yapılıyor. Ardından kullanıcıdan kaç haneli olacağına dair bilgi alınıp bu bilgiyle random fonksiyonu kullanılarak kullanıcının belirttiği hane kadar for döngüsüyle program çalıştırılıyor. Döngünün sonlanmasından sonra ise print() fonksiyonu kullanılarak kullanıcıya oluşturulan şifre iletiliyor.'),
(2, 'Python / SQLite', 'Şifre Kaydedici', 'Temel python eğitimimi tamaladıktan sonra Şifre Kaydedici ihtiyacım sebebiyle bir program kodladım. Bu program dahilinde bir şifre oluşturabiliyor ya da daha önceden oluşturulmuş şifreleri listeleyebiliyorsunuz. Program 3 sütunda şifreyi kaydediyor. İlk sütunda şifrenin nerede kullanılacağını, ikinci kısmında kullanıcı adını, üçüncü adımda ise şifreyi girerek kaydetme işlemini onaylıyorsunuz. Ve şifre SQLite veritabanında depolanıyor.'),
(3, 'Simens NX / Part Design / Assembly Design', 'CAD Parçaları', 'Udemy online platformu üzerinden aldığım eğitimle Siemens NX öğrendim. Eğitimimi tamamladıktan sonra pratize etmek adına 6 silindirli bir motor bloğunu fotoğraftan bakarak 3 boyutlu halde çizip parçaları montajladım.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Indexes for table `deneyim`
--
ALTER TABLE `deneyim`
  ADD PRIMARY KEY (`deneyim_id`);

--
-- Indexes for table `genelayar`
--
ALTER TABLE `genelayar`
  ADD PRIMARY KEY (`genelayar_id`);

--
-- Indexes for table `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Indexes for table `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Indexes for table `okul`
--
ALTER TABLE `okul`
  ADD PRIMARY KEY (`okul_id`);

--
-- Indexes for table `portfolyo`
--
ALTER TABLE `portfolyo`
  ADD PRIMARY KEY (`portfolyo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deneyim`
--
ALTER TABLE `deneyim`
  MODIFY `deneyim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `okul`
--
ALTER TABLE `okul`
  MODIFY `okul_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `portfolyo`
--
ALTER TABLE `portfolyo`
  MODIFY `portfolyo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
