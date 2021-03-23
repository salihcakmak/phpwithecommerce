<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'frameworks/PHPMailer/src/Exception.php';
require 'frameworks/PHPMailer/src/PHPMailer.php';
require 'frameworks/PHPMailer/src/SMTP.php';

if(isset($_POST["IsimSoyisim"])){
	$GelenIsimSoyisim		=	Guvenlik($_POST["IsimSoyisim"]);
}else{
	$GelenIsimSoyisim		=	"";
}

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

if(isset($_POST["Mesaj"])){
	$GelenMesaj				=	Guvenlik($_POST["Mesaj"]);
}else{
	$GelenMesaj				=	"";
}

if(($GelenIsimSoyisim!="") and ($GelenEmailAdresi!="") and ($GelenTelefonNumarasi!="") and ($GelenMesaj!="")){
	$MailIcerigiHazirla		=	"İsim Soyisim : " . $GelenIsimSoyisim . "<br />E-Mail Adresi : " . $GelenEmailAdresi . "<br />Telefon Numarası : " . $GelenTelefonNumarasi . "<br />Mesaj : " . $GelenMesaj;
	
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
		$mail->addAddress(DonusumleriGeriDondur($SiteEmailAdresi), DonusumleriGeriDondur($SiteAdi)); 
		$mail->addReplyTo($GelenEmailAdresi, $GelenIsimSoyisim); 	
		
		$mail->Subject 	   = DonusumleriGeriDondur($SiteAdi) . ' İletişim Formu Mesajı';
		$mail->isHTML(true);
		$mail->msgHTML($MailIcerigiHazirla);
	
		$mail->send();

		header("Location:index.php?SK=18");
		exit();
	}catch(Exception $e){
		header("Location:index.php?SK=19");
		exit();
	}
}else{
	header("Location:index.php?SK=20");
	exit();
}
?>