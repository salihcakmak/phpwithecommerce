<?php
try{
	$dbConnection = new PDO("mysql:host=localhost;dbname=ozkardes_ecommerce;charset=utf8", "ozkardes_test","bX0K?j6u5V_!");
}catch(PDOException $e){
	//echo "Bağlantı Hatası <br /> " . $e->getMessage(); Bu alanı kapatıyoruz çünkü hata durumunda kullanıcılar hata çıktısını görmesin
	die();
}

$AyarSorgusu 	= $dbConnection->prepare("SELECT * FROM ayarlar LIMIT 1");
$AyarSorgusu->execute();
$AyarSayisi 	= $AyarSorgusu->rowCount();
$Ayar 			= $AyarSorgusu->fetch(PDO::FETCH_ASSOC);

if($AyarSayisi>0){
	$SiteAdi				= $Ayar["SiteAdi"];
	$SiteTitle				= $Ayar["SiteTitle"];
	$SiteDescription		= $Ayar["SiteDescription"];
	$SiteKeywords			= $Ayar["SiteKeywords"];
	$SiteCopyrightMetni		= $Ayar["SiteCopyrightMetni"];
	$SiteLogosu				= $Ayar["SiteLogosu"];
	$SiteLinki				= $Ayar["SiteLinki"];
	$SiteEmailAdresi		= $Ayar["SiteEmailAdresi"];
	$SiteEmailSifresi		= $Ayar["SiteEmailSifresi"];
	$SiteEmailHostAdresi	= $Ayar["SiteEmailHostAdresi"];
	$SosyalLinkFacebook		= $Ayar["SosyalLinkFacebook"];
	$SosyalLinkTwitter		= $Ayar["SosyalLinkTwitter"];
	$SosyalLinkLinkedin		= $Ayar["SosyalLinkLinkedin"];
	$SosyalLinkInstagram	= $Ayar["SosyalLinkInstagram"];
	$SosyalLinkPinterest	= $Ayar["SosyalLinkPinterest"];
	$SosyalLinkYoutube		= $Ayar["SosyalLinkYoutube"];
	$DolarKuru				= $Ayar["DolarKuru"];
	$EuroKuru				= $Ayar["EuroKuru"];
	$UcretsizKargoBaraji	= $Ayar["UcretsizKargoBaraji"];
	$ClientID				= $Ayar["ClientID"];	
	$StoreKey				= $Ayar["StoreKey"];	
	$ApiKullanicisi			= $Ayar["ApiKullanicisi"];	
	$ApiSifresi				= $Ayar["ApiSifresi"];	

}else{
	//echo "Site Ayar Sorgusu Hatalı"; Bu alanı kapatıyoruz çünkü hata durumunda kullanıcılar hata çıktısını görmesin
	die();
}

$MetinlerSorgusu		=	$dbConnection->prepare("SELECT * FROM sozlesmelervemetinler LIMIT 1");
$MetinlerSorgusu->execute();
$MetinlerSayisi			=	$MetinlerSorgusu->rowCount();
$Metinler				=	$MetinlerSorgusu->fetch(PDO::FETCH_ASSOC);

if($MetinlerSayisi>0){
	$HakkimizdaMetni				=	$Metinler["HakkimizdaMetni"];
	$UyelikSozlesmesiMetni			=	$Metinler["UyelikSozlesmesiMetni"];
	$KullanimKosullariMetni			=	$Metinler["KullanimKosullariMetni"];
	$GizlilikSozlesmesiMetni		=	$Metinler["GizlilikSozlesmesiMetni"];
	$MesafeliSatisSozlesmesiMetni	=	$Metinler["MesafeliSatisSozlesmesiMetni"];
	$TeslimatMetni					=	$Metinler["TeslimatMetni"];
	$IptalIadeDegisimMetni			=	$Metinler["IptalIadeDegisimMetni"];
}else{
	//echo "Metinler Sorgusu Hatalı"; // Bu alanı kapatın çünkü site hata yaparsa kullanıcılar hata değerini görmesin.
	die();
}

if(isset($_SESSION["Kullanici"])){
	$KullaniciSorgusu		=	$dbConnection->prepare("SELECT * FROM uyeler WHERE EmailAdresi = ? LIMIT 1");
	$KullaniciSorgusu->execute([$_SESSION["Kullanici"]]);
	$KullaniciSayisi		=	$KullaniciSorgusu->rowCount();
	$Kullanici				=	$KullaniciSorgusu->fetch(PDO::FETCH_ASSOC);

	if($KullaniciSayisi>0){
		$KullaniciID		=	$Kullanici["id"];
		$EmailAdresi		=	$Kullanici["EmailAdresi"];
		$Sifre				=	$Kullanici["Sifre"];
		$IsimSoyisim		=	$Kullanici["IsimSoyisim"];
		$TelefonNumarasi	=	$Kullanici["TelefonNumarasi"];
		$Cinsiyet			=	$Kullanici["Cinsiyet"];
		$Durumu				=	$Kullanici["Durumu"];
		$KayitTarihi		=	$Kullanici["KayitTarihi"];
		$KayitIpAdresi		=	$Kullanici["KayitIpAdresi"];
		$AktivasyonKodu		=	$Kullanici["AktivasyonKodu"];
	}else{
		//echo "Kullanıcı Sorgusu Hatalı"; // Bu alanı kapatın çünkü site hata yaparsa kullanıcılar hata değerini görmesin.
		die();
	}
}

if(isset($_SESSION["Yonetici"])){
	$YoneticiSorgusu		=	$dbConnection->prepare("SELECT * FROM yoneticiler WHERE KullaniciAdi = ? LIMIT 1");
	$YoneticiSorgusu->execute([$_SESSION["Yonetici"]]);
	$YoneticiSayisi			=	$YoneticiSorgusu->rowCount();
	$Yonetici				=	$YoneticiSorgusu->fetch(PDO::FETCH_ASSOC);

	if($YoneticiSayisi>0){
		$YoneticiID					=	$Yonetici["id"];
		$YoneticiKullaniciAdi		=	$Yonetici["KullaniciAdi"];
		$YoneticiSifre				=	$Yonetici["Sifre"];
		$YoneticiIsimSoyisim		=	$Yonetici["IsimSoyisim"];
		$YoneticiEmailAdresi		=	$Yonetici["EmailAdresi"];
		$YoneticiTelefonNumarasi	=	$Yonetici["TelefonNumarasi"];
	}else{
		//echo "Yönetici Sorgusu Hatalı"; // Bu alanı kapatın çünkü site hata yaparsa kullanıcılar hata değerini görmesin.
		die();
	}
}


























?>