<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'frameworks/PHPMailer/src/Exception.php';
require 'frameworks/PHPMailer/src/PHPMailer.php';
require 'frameworks/PHPMailer/src/SMTP.php';

if(isset($_POST["EmailAdresi"])){
	$GelenEmailAdresi		=	Guvenlik($_POST["EmailAdresi"]);
}else{
	$GelenEmailAdresi		=	"";
}
if(isset($_POST["TelefonNumarasi"])){
	$GelenTelefonNumarasi	=	Guvenlik($_POST["TelefonNumarasi"]);
}else{
	$GelenTelefonNumarasi	=	"";
}

if(($GelenEmailAdresi!="") or ($GelenTelefonNumarasi!="")){
	$KontrolSorgusu		=	$dbConnection->prepare("SELECT * FROM uyeler WHERE EmailAdresi = ? OR TelefonNumarasi = ? AND SilinmeDurumu = ?");
	$KontrolSorgusu->execute([$GelenEmailAdresi, $GelenTelefonNumarasi, 0]);
	$KullaniciSayisi	=	$KontrolSorgusu->rowCount();
	$KullaniciKaydi		=	$KontrolSorgusu->fetch(PDO::FETCH_ASSOC);

	if($KullaniciSayisi>0){
		$MailIcerigiHazirla		=	"Merhaba Sayın " . $KullaniciKaydi["IsimSoyisim"] . "<br /><br />Sitemiz üzerinde bulunan hesabınızın şifresini sıfırlamak için lütfen <a href='" . $SiteLinki . "/index.php?SK=43&AktivasyonKodu=" . $KullaniciKaydi["AktivasyonKodu"] . "&Email=" . $KullaniciKaydi["EmailAdresi"] . "'>BURAYA TIKLAYINIZ</a>.<br /><br />Saygılarımızla, iyi çalışmalar...<br />" . $SiteAdi;

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
			$mail->addAddress(DonusumleriGeriDondur($KullaniciKaydi["EmailAdresi"]), DonusumleriGeriDondur($KullaniciKaydi["IsimSoyisim"]));
			$mail->addReplyTo(DonusumleriGeriDondur($SiteEmailAdresi), DonusumleriGeriDondur($SiteAdi)); 	

			$mail->Subject 	   = $SiteAdi . ' Şifre Sıfırlama';
			$mail->isHTML(true);
			$mail->msgHTML($MailIcerigiHazirla);

			$mail->send();

			header("Location:index.php?SK=39");
			exit();
		}catch(Exception $e){
			header("Location:index.php?SK=40");
			exit();
		}			
	}else{
		header("Location:index.php?SK=41");
		exit();
	}
}else{
	header("Location:index.php?SK=42");
	exit();
}
?>