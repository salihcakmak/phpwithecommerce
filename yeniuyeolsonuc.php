<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Frameworks/PHPMailer/src/Exception.php';
require 'Frameworks/PHPMailer/src/PHPMailer.php';
require 'Frameworks/PHPMailer/src/SMTP.php';

if(isset($_POST["EmailAdresi"])){
	$GelenEmailAdresi		=	Guvenlik($_POST["EmailAdresi"]);
}else{
	$GelenEmailAdresi		=	"";
}
if(isset($_POST["Sifre"])){
	$GelenSifre				=	Guvenlik($_POST["Sifre"]);
}else{
	$GelenSifre				=	"";
}
if(isset($_POST["SifreTekrar"])){
	$GelenSifreTekrar		=	Guvenlik($_POST["SifreTekrar"]);
}else{
	$GelenSifreTekrar		=	"";
}
if(isset($_POST["IsimSoyisim"])){
	$GelenIsimSoyisim		=	Guvenlik($_POST["IsimSoyisim"]);
}else{
	$GelenIsimSoyisim		=	"";
}
if(isset($_POST["TelefonNumarasi"])){
	$GelenTelefonNumarasi	=	Guvenlik($_POST["TelefonNumarasi"]);
}else{
	$GelenTelefonNumarasi	=	"";
}
if(isset($_POST["Cinsiyet"])){
	$GelenCinsiyet			=	Guvenlik($_POST["Cinsiyet"]);
}else{
	$GelenCinsiyet			=	"";
}
if(isset($_POST["SozlesmeOnay"])){
	$GelenSozlesmeOnay		=	Guvenlik($_POST["SozlesmeOnay"]);
}else{
	$GelenSozlesmeOnay		=	"";
}

$AktivasyonKodu				=	AktivasyonKoduUret();
$MD5liSifre					=	md5($GelenSifre);

if(($GelenEmailAdresi!="") and ($GelenSifre!="") and ($GelenSifreTekrar!="") and ($GelenIsimSoyisim!="") and ($GelenTelefonNumarasi!="") and ($GelenCinsiyet!="")){
	if($GelenSozlesmeOnay==0){
		header("Location:index.php?SK=29");
		exit();
	}else{
		if($GelenSifre!=$GelenSifreTekrar){
			header("Location:index.php?SK=28");
			exit();
		}else{
			$KontrolSorgusu		=	$dbConnection->prepare("SELECT * FROM uyeler WHERE EmailAdresi = ?");
			$KontrolSorgusu->execute([$GelenEmailAdresi]);
			$KullaniciSayisi	=	$KontrolSorgusu->rowCount();
			
			if($KullaniciSayisi>0){
				header("Location:index.php?SK=27");
				exit();
			}else{
				$UyeEklemeSorgusu		=	$dbConnection->prepare("INSERT INTO uyeler (EmailAdresi, Sifre, IsimSoyisim, TelefonNumarasi, Cinsiyet, Durumu, KayitTarihi, KayitIpAdresi, AktivasyonKodu) values (?, ?, ?, ?, ?, ?, ?, ?, ?)");
				$UyeEklemeSorgusu->execute([$GelenEmailAdresi, $MD5liSifre, $GelenIsimSoyisim, $GelenTelefonNumarasi, $GelenCinsiyet, 0, $ZamanDamgasi, $IPAdresi, $AktivasyonKodu]);
				$KayitKontrol		=	$UyeEklemeSorgusu->rowCount();
				
				if($KayitKontrol>0){
					$MailIcerigiHazirla		=	"Merhaba Sayın " . $GelenIsimSoyisim . "<br /><br />Sitemize yapmış olduğunuz üyelik kaydını tamamlamak için lütfen <a href='" . $SiteLinki . "/aktivasyon.php?AktivasyonKodu=" . $AktivasyonKodu . "&Email=" . $GelenEmailAdresi . "'>BURAYA TIKLAYINIZ</a>.<br /><br />Saygılarımızla, iyi çalışmalar...<br />" . $SiteAdi;
					$mail = new PHPMailer(true);
					try{
						$mail->SMTPDebug    = 0; 	
						$mail->isSMTP(); 							
						$mail->Host			= DonusumleriGeriDondur($SiteEmailHostAdresi);	
						$mail->Port 		= 587;					
						$mail->SMTPSecure 	= PHPMailer::ENCRYPTION_STARTTLS;
						$mail->SMTPAuth		= true;				
						$mail->Username		= DonusumleriGeriDondur($SiteEmailAdresi);
						$mail->Password		= DonusumleriGeriDondur($SiteEmailSifresi);	
						$mail->setLanguage('tr'); 					
						$mail->CharSet = "UTF-8";

						$mail->setFrom(DonusumleriGeriDondur($SiteEmailAdresi), DonusumleriGeriDondur($SiteAdi));
						$mail->addAddress(DonusumleriGeriDondur($GelenEmailAdresi), DonusumleriGeriDondur($GelenIsimSoyisim)); 
						$mail->addReplyTo(DonusumleriGeriDondur($SiteEmailAdresi), DonusumleriGeriDondur($SiteAdi)); 	

						$mail->Subject 	   = $SiteAdi . ' Yeni Üyelik Aktivasyonu';
						$mail->isHTML(true);
						$mail->msgHTML($MailIcerigiHazirla);

						$mail->send();

						header("Location:index.php?SK=24");
						exit();
					}catch(Exception $e){
						header("Location:index.php?SK=25");
						exit();
					}
				}else{
					header("Location:index.php?SK=25");
					exit();
				}
			}
		}
	}
}else{
	header("Location:index.php?SK=26");
	exit();
}
?>