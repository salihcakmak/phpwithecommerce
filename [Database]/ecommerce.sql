-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 01 Mar 2021, 12:14:00
-- Sunucu sürümü: 10.4.16-MariaDB
-- PHP Sürümü: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ecommerce`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adresler`
--

CREATE TABLE `adresler` (
  `id` int(10) UNSIGNED NOT NULL,
  `UyeId` int(10) UNSIGNED NOT NULL,
  `AdiSoyadi` varchar(100) NOT NULL,
  `Adres` varchar(255) NOT NULL,
  `Ilce` varchar(100) NOT NULL,
  `Sehir` varchar(100) NOT NULL,
  `TelefonNumarasi` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `adresler`
--

INSERT INTO `adresler` (`id`, `UyeId`, `AdiSoyadi`, `Adres`, `Ilce`, `Sehir`, `TelefonNumarasi`) VALUES
(1, 2, 'Salih Çakmak', 'Ocaklı mahallesi Necip Fazıl Sokak no 24', 'Dörtyol', 'Hatay', '05347442497'),
(3, 2, 'salih çakmak', 'Ocaklı mahallesi Necip Fazıl Sokak no 24', 'dörtyol', 'hatay', '05347442497'),
(4, 3, 'elifakgül', 'Ocaklı mahallesi Necip Fazıl Sokak no 24', 'dörtyl', 'hatay', '05347442497');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `id` tinyint(1) UNSIGNED NOT NULL,
  `SiteAdi` varchar(50) NOT NULL,
  `SiteTitle` varchar(60) NOT NULL,
  `SiteDescription` varchar(255) NOT NULL,
  `SiteKeywords` varchar(255) NOT NULL,
  `SiteCopyrightMetni` varchar(255) NOT NULL,
  `SiteLogosu` varchar(30) NOT NULL,
  `SiteLinki` varchar(255) NOT NULL,
  `SiteEmailAdresi` varchar(50) NOT NULL,
  `SiteEmailSifresi` varchar(50) NOT NULL,
  `SiteEmailHostAdresi` varchar(255) NOT NULL,
  `SosyalLinkFacebook` varchar(255) NOT NULL,
  `SosyalLinkTwitter` varchar(255) NOT NULL,
  `SosyalLinkLinkedin` varchar(255) NOT NULL,
  `SosyalLinkInstagram` varchar(255) NOT NULL,
  `SosyalLinkPinterest` varchar(255) NOT NULL,
  `SosyalLinkYoutube` varchar(255) NOT NULL,
  `DolarKuru` double UNSIGNED NOT NULL,
  `EuroKuru` double UNSIGNED NOT NULL,
  `UcretsizKargoBaraji` double UNSIGNED NOT NULL,
  `ClientID` varchar(100) NOT NULL,
  `StoreKey` varchar(100) NOT NULL,
  `ApiKullanicisi` varchar(100) NOT NULL,
  `ApiSifresi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `SiteAdi`, `SiteTitle`, `SiteDescription`, `SiteKeywords`, `SiteCopyrightMetni`, `SiteLogosu`, `SiteLinki`, `SiteEmailAdresi`, `SiteEmailSifresi`, `SiteEmailHostAdresi`, `SosyalLinkFacebook`, `SosyalLinkTwitter`, `SosyalLinkLinkedin`, `SosyalLinkInstagram`, `SosyalLinkPinterest`, `SosyalLinkYoutube`, `DolarKuru`, `EuroKuru`, `UcretsizKargoBaraji`, `ClientID`, `StoreKey`, `ApiKullanicisi`, `ApiSifresi`) VALUES
(1, 'Trendyol', 'Ayakkabı Mağazası', 'Sezonun en tarz en şık ayakkabıları, Dünya&#039;nın en moda, en tarz ayakkabıları. Ücretsiz Kargo, Kredi kartına taksit imkanı ile. Ayakkabı modelleri burada.', 'ayakkabı, kadın ayakkabısı, erkek ayakkabısı, çocuk ayakkabısı, giyim', 'Copyright 2021 - Trendyol - Tüm Hakları Saklıdır.', 'trendyol-stayhome.svg', 'http://localhost/ecommerce', 'salihcakmak050@gmail.com', 'Salih@55!', 'smtp.gmail.com', 'https://www.facebook.com/', 'https://www.twitter.com', 'https://www.twitter.com/', 'https://www.instagram.com', 'https://www.pinterest.com', 'https://www.youtube.com', 5.28, 6.12, 250000, '00000000', '11111111', '3DKullanicim', '3DSifrem');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bankahesaplarimiz`
--

CREATE TABLE `bankahesaplarimiz` (
  `id` int(10) UNSIGNED NOT NULL,
  `BankaLogosu` varchar(30) NOT NULL,
  `BankaAdi` varchar(100) NOT NULL,
  `KonumSehir` varchar(100) NOT NULL,
  `KonumUlke` varchar(100) NOT NULL,
  `SubeAdi` varchar(100) NOT NULL,
  `SubeKodu` varchar(100) NOT NULL,
  `ParaBirimi` varchar(100) NOT NULL,
  `HesapSahibi` varchar(255) NOT NULL,
  `HesapNumarasi` varchar(100) NOT NULL,
  `IbanNumarasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `bankahesaplarimiz`
--

INSERT INTO `bankahesaplarimiz` (`id`, `BankaLogosu`, `BankaAdi`, `KonumSehir`, `KonumUlke`, `SubeAdi`, `SubeKodu`, `ParaBirimi`, `HesapSahibi`, `HesapNumarasi`, `IbanNumarasi`) VALUES
(2, '5df69e3a5e598b7a00a99461c.jpg', 'Akbank1', 'Ankara', 'Türkiye', 'Mamak', '2341', 'Türk Lirası', 'Salih Çakmak', '1234567890', 'TR00000000000000000000'),
(3, 'garantibank.jpg', 'Garanti Bankası', 'İzmir', 'Türkiye', 'Bornova', '7484', 'Türk Lirası', 'Salih Çakmak', '1234567890', 'TR00000000000000000000'),
(4, 'turkiyeisbankasi.jpg', 'İş Bankası', 'Adana', 'Türkiye', 'Sarıçam', '8946', 'Türk Lirası', 'Salih Çakmak', '1234567890', 'TR00000000000000000000'),
(5, 'denizbank.jpg', 'Denizbank', 'Kocaeli', 'Türkiye', 'Merkez', '2536', 'Türk Lirası', 'Salih Çakmak', '1234567890', 'TR00000000000000000000'),
(6, 'qnbfinansbank.jpg', 'QNB Finansbank', 'Uşak', 'Türkiye', 'Etiler', '5326', 'Türk Lirası', 'Salih Çakmak', '1234567890', 'TR00000000000000000000');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bannerlar`
--

CREATE TABLE `bannerlar` (
  `id` int(10) UNSIGNED NOT NULL,
  `BannerAlani` varchar(100) NOT NULL,
  `BannerAdi` varchar(100) NOT NULL,
  `BannerResmi` varchar(30) NOT NULL,
  `GosterimSayisi` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `bannerlar`
--

INSERT INTO `bannerlar` (`id`, `BannerAlani`, `BannerAdi`, `BannerResmi`, `GosterimSayisi`) VALUES
(1, 'Menu Altı', 'Örnek Reklam 1', '250x500Reklam-1.jpg', 78),
(2, 'Menu Altı', 'Örnek Reklam 2', '250x500Reklam-2.jpg', 79),
(3, 'Menu Altı', 'Örnek Reklam 1', '250x500Reklam-3.jpg', 79),
(4, 'Ürün Detay', 'Örnek Reklam 4', '350x350Reklam-1.jpg', 50),
(5, 'Ürün Detay', 'Örnek Reklam 5', '350x350Reklam-2.jpg', 50),
(6, 'Ana Sayfa', 'Ana Sayfa 1. banner', '1.jpg', 24),
(7, 'Ana Sayfa', 'Ana Sayfa 2. banner', '2.jpg', 24);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `favoriler`
--

CREATE TABLE `favoriler` (
  `id` int(10) UNSIGNED NOT NULL,
  `UrunId` int(10) UNSIGNED NOT NULL,
  `UyeId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `havalebildirimleri`
--

CREATE TABLE `havalebildirimleri` (
  `id` int(10) UNSIGNED NOT NULL,
  `BankaId` int(10) UNSIGNED NOT NULL,
  `AdiSoyadi` varchar(100) NOT NULL,
  `EmailAdresi` varchar(255) NOT NULL,
  `TelefonNumarasi` varchar(11) NOT NULL,
  `Aciklama` text NOT NULL,
  `IslemTarihi` int(10) UNSIGNED NOT NULL,
  `Durum` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kargofirmalari`
--

CREATE TABLE `kargofirmalari` (
  `id` int(10) UNSIGNED NOT NULL,
  `KargoFirmasiLogosu` varchar(30) NOT NULL,
  `KargoFirmasiAdi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kargofirmalari`
--

INSERT INTO `kargofirmalari` (`id`, `KargoFirmasiLogosu`, `KargoFirmasiAdi`) VALUES
(1, 'Aras.png', 'Aras Kargo'),
(2, 'Yurtiçi.png', 'Yurtiçi Kargo'),
(3, 'MNGKargo156x30.png', 'MNG Kargo'),
(4, 'c3bb878661bab7c6b84d8c12f.png', 'Vutututu');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menuler`
--

CREATE TABLE `menuler` (
  `id` int(10) UNSIGNED NOT NULL,
  `UrunTuru` varchar(100) NOT NULL,
  `MenuAdi` varchar(50) NOT NULL,
  `UrunSayisi` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `menuler`
--

INSERT INTO `menuler` (`id`, `UrunTuru`, `MenuAdi`, `UrunSayisi`) VALUES
(1, 'Erkek Ayakkabısı', 'Günlük Ayakkabılar', 1),
(2, 'Erkek Ayakkabısı', 'Klasik Ayakkabı', 0),
(3, 'Erkek Ayakkabısı', 'Spor Ayakkabılar', 0),
(4, 'Erkek Ayakkabısı', 'Botlar', 0),
(5, 'Kadın Ayakkabısı', 'Günlük Ayakkabılar', 2),
(6, 'Kadın Ayakkabısı', 'Klasik Ayakkabı', 0),
(7, 'Kadın Ayakkabısı', 'Spor Ayakkabılar', 0),
(8, 'Kadın Ayakkabısı', 'Botlar', 0),
(9, 'Çocuk Ayakkabısı', 'Günlük Ayakkabılar', 0),
(10, 'Çocuk Ayakkabısı', 'Klasik Ayakkabı', 0),
(11, 'Çocuk Ayakkabısı', 'Spor Ayakkabılar', 0),
(12, 'Çocuk Ayakkabısı', 'Botlar', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

CREATE TABLE `sepet` (
  `id` int(10) UNSIGNED NOT NULL,
  `SepetNumarasi` int(10) UNSIGNED NOT NULL,
  `UyeId` int(10) UNSIGNED NOT NULL,
  `UrunId` int(10) UNSIGNED NOT NULL,
  `AdresId` int(10) UNSIGNED NOT NULL,
  `VaryantId` int(10) UNSIGNED NOT NULL,
  `KargoId` tinyint(2) NOT NULL,
  `UrunAdedi` tinyint(3) UNSIGNED NOT NULL,
  `OdemeSecimi` varchar(50) NOT NULL,
  `TaksitSecimi` tinyint(2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisler`
--

CREATE TABLE `siparisler` (
  `id` int(10) UNSIGNED NOT NULL,
  `UyeId` int(10) UNSIGNED NOT NULL,
  `SiparisNumarasi` int(10) UNSIGNED NOT NULL,
  `UrunId` int(10) UNSIGNED NOT NULL,
  `UrunTuru` varchar(50) NOT NULL,
  `UrunAdi` varchar(255) NOT NULL,
  `UrunFiyati` double UNSIGNED NOT NULL,
  `KdvOrani` int(2) UNSIGNED NOT NULL,
  `UrunAdedi` int(3) UNSIGNED NOT NULL,
  `ToplamUrunFiyati` double UNSIGNED NOT NULL,
  `KargoFirmasiSecimi` varchar(100) NOT NULL,
  `KargoUcreti` double UNSIGNED NOT NULL,
  `UrunResmiBir` varchar(30) NOT NULL,
  `VaryantBasligi` varchar(100) NOT NULL,
  `VaryantSecimi` varchar(100) NOT NULL,
  `AdresAdiSoyadi` varchar(100) NOT NULL,
  `AdresDetay` varchar(255) NOT NULL,
  `AdresTelefon` varchar(11) NOT NULL,
  `OdemeSecimi` varchar(25) NOT NULL,
  `TaksitSecimi` int(2) UNSIGNED NOT NULL,
  `SiparisTarihi` int(10) NOT NULL,
  `SiparisIpAdresi` varchar(20) NOT NULL,
  `OnayDurumu` tinyint(1) UNSIGNED NOT NULL,
  `KargoDurumu` tinyint(1) UNSIGNED NOT NULL,
  `KargoGonderiKodu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `siparisler`
--

INSERT INTO `siparisler` (`id`, `UyeId`, `SiparisNumarasi`, `UrunId`, `UrunTuru`, `UrunAdi`, `UrunFiyati`, `KdvOrani`, `UrunAdedi`, `ToplamUrunFiyati`, `KargoFirmasiSecimi`, `KargoUcreti`, `UrunResmiBir`, `VaryantBasligi`, `VaryantSecimi`, `AdresAdiSoyadi`, `AdresDetay`, `AdresTelefon`, `OdemeSecimi`, `TaksitSecimi`, `SiparisTarihi`, `SiparisIpAdresi`, `OnayDurumu`, `KargoDurumu`, `KargoGonderiKodu`) VALUES
(5, 2, 13, 3, 'Kadın Ayakkabısı', 'Kırmızı Topuklu Ayakkabı', 1285.2, 18, 1, 1285.2, 'Aras Kargo', 20, '2.jpg', 'Numara', '39', 'Salih Çakmak', 'Ocaklı mahallesi Necip Fazıl Sokak no 24 Dörtyol Hatay', '05347442497', 'Banka Havalesi', 0, 1614544457, '::1', 1, 1, '12312'),
(6, 2, 13, 2, 'Kadın Ayakkabısı', 'Mavi Topuklu Ayakkabı', 633.5472, 18, 1, 633.5472, 'Aras Kargo', 18, '1-1.jpg', 'Numara', '35', 'Salih Çakmak', 'Ocaklı mahallesi Necip Fazıl Sokak no 24 Dörtyol Hatay', '05347442497', 'Banka Havalesi', 0, 1614544457, '::1', 1, 1, '12312'),
(7, 2, 13, 1, 'Erkek Ayakkabısı', 'Siyah Kuşaklı Makosen Erkek Ayakkabısı', 299.99, 18, 1, 299.99, 'Aras Kargo', 25, '1-1.jpg', 'Numara', '35', 'Salih Çakmak', 'Ocaklı mahallesi Necip Fazıl Sokak no 24 Dörtyol Hatay', '05347442497', 'Banka Havalesi', 0, 1614544457, '::1', 1, 1, '12312');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sorular`
--

CREATE TABLE `sorular` (
  `id` int(10) UNSIGNED NOT NULL,
  `soru` varchar(255) NOT NULL,
  `cevap` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sorular`
--

INSERT INTO `sorular` (`id`, `soru`, `cevap`) VALUES
(1, 'Aldığım ürünleri nasıl iade edebilirim?', '• İade adımları:\r\n\r\n1. trendyol.com ve mobil uygulamalarda yer alan \"Hesabım\" bölümünden “Siparişlerim\'e“ gidin.\r\n\r\n2. “Detaylar” butonuna basın ve siparişinizin detaylarını görüntüleyin.\r\n\r\n3. \"Kolay İade Talebi Oluştur\" butonuna basın.\r\n\r\n4. İade edilecek ürün ve iade nedeni seçin. Aynı üründen birden fazla satın aldıysanız iade edilecek ürün adedini de seçmeniz gerekir.\r\n\r\n5. Kargo seçiminizi yapın.\r\n\r\n6. Ekranda çıkan iade kargo kodunu not alın. İade kargo kodunuza \"Siparişlerim\" sayfasından ve üyelik mail adresinize gönderilen bilgilendirme mesajından da ulaşabilirsiniz.\r\n\r\n7. İade edilecek ürünler ile birlikte faturayı tek bir pakete koyun. (Her bir teslimat için iade kodu ayrı ayrı alınmalı ve paketler ayrı ayrı hazırlanarak kargoya verilmelidir.)\r\n\r\n• Faturanız yoksa aşağıdaki bilgileri boş bir kağıda yazıp iade paketinin içine koyup iadenizi yapabilirsiniz.\r\n\r\no Ad Soyad:\r\n\r\no Sipariş No:\r\n\r\no İade Nedeni:\r\n\r\n8. Paketi iade kargo koduyla birlikte seçtiğiniz kargoya 7 gün içinde teslim edin. Kodu vermeniz yeterlidir, ayrıca bir İade adresi belirtmeniz gerekmez. 7 günü geçirdiğiniz durumda yeniden iade kargo kodu almalısınız.\r\n\r\n'),
(2, 'Hızlı Market nedir?', 'Market, fırın ve pastane siparişlerinizi verebileceğiniz ve 30 dk içinde adresinizde teslim alabileceğiniz hizmetimizdir.'),
(3, 'Hızlı Market hangi bölgelere hizmet veriyor?', 'Şu anda sadece İstanbul&#039;da belirli bölgelerde hizmet vermekteyiz. Bulunduğunuz bölgede hizmet verip vermediğimizi kontrol etmek için uygulamamızda yer alan Hızlı Market butonuna tıklayabilirsiniz..'),
(4, 'Nerelerden sipariş verebilirim?', 'Üçler Süpermarket, Happy Center, Beyaz Fırın, Gourmet Garage, Snowy, Teslimus, Kim Market, Özkuruşlar, Namlı Market, Ondan Market, Seyhanlar Market ve Algida satış noktalarından sipariş verebilirsiniz. Yakın zamanda diğer satış noktalarını da eklemeye devam edeceğiz.'),
(5, 'Kapıda ödeme yapabilir miyim?', 'Sadece kredi kartı ile online ödeme yapabilirsiniz.'),
(7, 'sad', 'asdasdasdasdas');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sozlesmelervemetinler`
--

CREATE TABLE `sozlesmelervemetinler` (
  `id` tinyint(1) UNSIGNED NOT NULL,
  `HakkimizdaMetni` text NOT NULL,
  `UyelikSozlesmesiMetni` text NOT NULL,
  `KullanimKosullariMetni` text NOT NULL,
  `GizlilikSozlesmesiMetni` text NOT NULL,
  `MesafeliSatisSozlesmesiMetni` text NOT NULL,
  `TeslimatMetni` text NOT NULL,
  `IptalIadeDegisimMetni` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sozlesmelervemetinler`
--

INSERT INTO `sozlesmelervemetinler` (`id`, `HakkimizdaMetni`, `UyelikSozlesmesiMetni`, `KullanimKosullariMetni`, `GizlilikSozlesmesiMetni`, `MesafeliSatisSozlesmesiMetni`, `TeslimatMetni`, `IptalIadeDegisimMetni`) VALUES
(1, 'Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.', 'Burası Üyelik Sözleşmesi Metnidir.', 'Burası Kullanım Koşulları Metnidir.', 'Burası Gizlilik Sözleşmesi Metnidir.', 'Burası Mesafeli Satış Sözleşmesi Metnidir', 'Burası Teslimat Metnidir.', 'Burası İptal İade Değişim Metnidir.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `id` int(10) UNSIGNED NOT NULL,
  `MenuId` int(10) UNSIGNED NOT NULL,
  `UrunTuru` varchar(100) NOT NULL,
  `UrunAdi` varchar(255) NOT NULL,
  `UrunFiyati` double UNSIGNED NOT NULL,
  `ParaBirimi` char(3) NOT NULL,
  `KdvOrani` int(2) UNSIGNED NOT NULL,
  `UrunAciklamasi` text NOT NULL,
  `UrunResmiBir` varchar(30) NOT NULL,
  `UrunResmiIki` varchar(30) NOT NULL,
  `UrunResmiUc` varchar(30) NOT NULL,
  `UrunResmiDort` varchar(30) NOT NULL,
  `VaryantBasligi` varchar(100) NOT NULL,
  `KargoUcreti` double UNSIGNED NOT NULL,
  `Durumu` tinyint(1) UNSIGNED NOT NULL,
  `ToplamSatisSayisi` int(10) UNSIGNED NOT NULL,
  `YorumSayisi` tinyint(1) UNSIGNED NOT NULL,
  `ToplamYorumPuani` int(10) UNSIGNED NOT NULL,
  `GoruntulenmeSayisi` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `MenuId`, `UrunTuru`, `UrunAdi`, `UrunFiyati`, `ParaBirimi`, `KdvOrani`, `UrunAciklamasi`, `UrunResmiBir`, `UrunResmiIki`, `UrunResmiUc`, `UrunResmiDort`, `VaryantBasligi`, `KargoUcreti`, `Durumu`, `ToplamSatisSayisi`, `YorumSayisi`, `ToplamYorumPuani`, `GoruntulenmeSayisi`) VALUES
(1, 1, 'Erkek Ayakkabısı', 'Siyah Kuşaklı Makosen Erkek Ayakkabısı', 299.99, 'TL', 18, 'Siyah Kuşaklı Makosen Erkek Ayakkabısı Açıklama', '1-1.jpg', '1-2.jpg', '1-3.jpg', '1-4.jpg', 'Numara', 25, 1, 4, 2, 9, 244),
(2, 1, 'Kadın Ayakkabısı', 'Mavi Topuklu Ayakkabı', 119.99, 'USD', 18, 'Mavi Topuklu Ayakkabı Açıklaması', '1-1.jpg', '1-2.jpg', '1-3.jpg', '1-4.jpg', 'Numara', 18, 1, 2, 1, 5, 149),
(3, 1, 'Kadın Ayakkabısı', 'Kırmızı Topuklu Ayakkabı', 210, 'EUR', 18, 'Kırmızı Topuklu Ayakkabı Açıklaması', '2.jpg', '', '', '', 'Numara', 20, 1, 2, 0, 0, 56),
(4, 12, 'Çocuk Ayakkabısı', 'Süper Çocuk Botu', 299, 'TRY', 18, 'Çocukklarınız için harika bir ayakkabıdır', 'a201a68c44ffe40cfb5d5f2d5.jpg', 'f690d5528add94dd39f3b98e6.jpg', 'a27cbf0c52ebd54f943e31693.jpg', '2219f504ae412763a1176c5be.jpg', 'Numara', 20, 1, 0, 0, 0, 25);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunvaryantlari`
--

CREATE TABLE `urunvaryantlari` (
  `id` int(10) UNSIGNED NOT NULL,
  `UrunId` int(10) UNSIGNED NOT NULL,
  `VaryantAdi` varchar(100) NOT NULL,
  `StokAdedi` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `urunvaryantlari`
--

INSERT INTO `urunvaryantlari` (`id`, `UrunId`, `VaryantAdi`, `StokAdedi`) VALUES
(1, 1, '35', 99),
(2, 1, '36', 100),
(3, 1, '37', 100),
(4, 1, '38', 0),
(5, 1, '39', 100),
(6, 2, '35', 99),
(7, 2, '36', 100),
(8, 2, '37', 100),
(9, 2, '38', 100),
(10, 2, '39', 100),
(11, 3, '39', 99),
(12, 3, '40', 100),
(13, 3, '41', 100),
(14, 3, '42', 100),
(15, 3, '43', 100),
(16, 3, '44', 100),
(17, 4, '36', 10),
(18, 4, '37', 20),
(19, 4, '38', 25),
(20, 4, '39', 30),
(21, 4, '40', 17),
(22, 4, '41', 11);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `id` int(10) UNSIGNED NOT NULL,
  `EmailAdresi` varchar(255) NOT NULL,
  `Sifre` varchar(100) NOT NULL,
  `IsimSoyisim` varchar(100) NOT NULL,
  `TelefonNumarasi` varchar(11) NOT NULL,
  `Cinsiyet` varchar(5) NOT NULL,
  `Durumu` tinyint(1) NOT NULL,
  `SilinmeDurumu` tinyint(1) UNSIGNED NOT NULL,
  `KayitTarihi` int(10) NOT NULL,
  `KayitIpAdresi` varchar(20) NOT NULL,
  `AktivasyonKodu` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `EmailAdresi`, `Sifre`, `IsimSoyisim`, `TelefonNumarasi`, `Cinsiyet`, `Durumu`, `SilinmeDurumu`, `KayitTarihi`, `KayitIpAdresi`, `AktivasyonKodu`) VALUES
(2, 'sacak97@hotmail.com', '202cb962ac59075b964b07152d234b70', 'salih çakmak', '05347442497', 'Erkek', 1, 0, 1614171596, '::1', '42677-44415-22217-94185'),
(3, 'testuser@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'elifakgül', '05347000000', 'Kadın', 1, 1, 1614324397, '::1', '25213-22984-29254-83585');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yoneticiler`
--

CREATE TABLE `yoneticiler` (
  `id` int(10) UNSIGNED NOT NULL,
  `KullaniciAdi` varchar(100) NOT NULL,
  `Sifre` varchar(100) NOT NULL,
  `IsimSoyisim` varchar(100) NOT NULL,
  `EmailAdresi` varchar(255) NOT NULL,
  `TelefonNumarasi` varchar(11) NOT NULL,
  `SilinemeyecekYoneticiDurumu` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yoneticiler`
--

INSERT INTO `yoneticiler` (`id`, `KullaniciAdi`, `Sifre`, `IsimSoyisim`, `EmailAdresi`, `TelefonNumarasi`, `SilinemeyecekYoneticiDurumu`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Salih Çakmak', 'salihcakmak050@gmail.com', '05347442497', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `id` int(10) UNSIGNED NOT NULL,
  `UrunId` int(10) UNSIGNED NOT NULL,
  `UyeId` int(10) UNSIGNED NOT NULL,
  `Puan` tinyint(1) UNSIGNED NOT NULL,
  `YorumMetni` text NOT NULL,
  `YorumTarihi` int(10) NOT NULL,
  `YorumIpAdresi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`id`, `UrunId`, `UyeId`, `Puan`, `YorumMetni`, `YorumTarihi`, `YorumIpAdresi`) VALUES
(10, 2, 2, 5, 'dfgdfsgsdfg', 1614544493, '::1'),
(11, 1, 2, 5, 'dfgdsgdfgfdsgsdfg', 1614544522, '::1'),
(12, 1, 2, 4, 'sfdgfsdgfdg', 1614544538, '::1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `adresler`
--
ALTER TABLE `adresler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `bankahesaplarimiz`
--
ALTER TABLE `bankahesaplarimiz`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `bannerlar`
--
ALTER TABLE `bannerlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `favoriler`
--
ALTER TABLE `favoriler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `havalebildirimleri`
--
ALTER TABLE `havalebildirimleri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kargofirmalari`
--
ALTER TABLE `kargofirmalari`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `menuler`
--
ALTER TABLE `menuler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sepet`
--
ALTER TABLE `sepet`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparisler`
--
ALTER TABLE `siparisler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sorular`
--
ALTER TABLE `sorular`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sozlesmelervemetinler`
--
ALTER TABLE `sozlesmelervemetinler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urunvaryantlari`
--
ALTER TABLE `urunvaryantlari`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `EmailAdresi` (`EmailAdresi`);

--
-- Tablo için indeksler `yoneticiler`
--
ALTER TABLE `yoneticiler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `adresler`
--
ALTER TABLE `adresler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `id` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `bankahesaplarimiz`
--
ALTER TABLE `bankahesaplarimiz`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `bannerlar`
--
ALTER TABLE `bannerlar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `favoriler`
--
ALTER TABLE `favoriler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `havalebildirimleri`
--
ALTER TABLE `havalebildirimleri`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `kargofirmalari`
--
ALTER TABLE `kargofirmalari`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `menuler`
--
ALTER TABLE `menuler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `sepet`
--
ALTER TABLE `sepet`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `siparisler`
--
ALTER TABLE `siparisler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `sorular`
--
ALTER TABLE `sorular`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `sozlesmelervemetinler`
--
ALTER TABLE `sozlesmelervemetinler`
  MODIFY `id` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `urunvaryantlari`
--
ALTER TABLE `urunvaryantlari`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `yoneticiler`
--
ALTER TABLE `yoneticiler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
