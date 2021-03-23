<?php
	session_start(); ob_start();
	require_once("settings/ayar.php");
	require_once("settings/fonksiyonlar.php");
	require_once("settings/sitesayfalari.php");

	if(isset($_REQUEST["SK"])){
		$SayfaKoduDegeri	=	SayiliIcerikleriFiltrele($_REQUEST["SK"]);
	}else{
		$SayfaKoduDegeri 	=	0;
	}

	if(isset($_REQUEST["SYF"])){
	$Sayfalama			=	SayiliIcerikleriFiltrele($_REQUEST["SYF"]);
	}else{
		$Sayfalama			=	1;
	}
?>
<!doctype html>
<html lang="tr-TR">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Language" content="tr">
	<meta charset="utf-8">
	<meta name="robots" content="index, follow">
	<meta name="googlebot" content="index, follow">
	<meta name="revisit-after" content="7 Days">
	<meta name="description" content="<?php echo DonusumleriGeriDondur($SiteDescription); ?>">
	<meta name="keywords" content="<?php echo DonusumleriGeriDondur($SiteKeywords) ?>">
	<title><?php echo DonusumleriGeriDondur($SiteTitle); ?></title>
	<link type="img/png" rel="icon" href="images/Favicon.png">
	<link type="text/css" rel="stylesheet" href="settings/stil.css">
	<script type="text/javascript" src="frameworks/JQuery/jquery-3.5.1.min.js" language="javascript"></script>
	<script type="text/javascript" src="settings/fonksiyonlar.js"></script>
</head>

<body>
	<table width="1065" height="100%" align="center" border="0" cellpadding="0" cellspacing="0">
		<!---------------------------- Header Mesaj Resmi ---------------------------->
		<tr height="40" bgcolor="#353745">
			<td><img src="images/HeaderMesajResmi.png" border="0"></td>
		</tr>
		<!---------------------------- Menü Çubuğu ---------------------------->
		<tr height="110">
			<td>
				<table width="1065" height="30" align="center" border="0" cellpadding="0" cellspacing="0">
					<tr bgcolor="#0088CC">
						<td>&nbsp;</td>
						<?php
						if(isset($_SESSION["Kullanici"])){
						?>
							<td width="20"><a href="index.php?SK=50"><img src="images/KullaniciBeyaz16x16.png" border="0" style="margin-top: 5px;"></a></td>
							<td width="70" class="MaviAlanMenusu"><a href="index.php?SK=50">Hesabım</a></td>
							<td width="20"><a href="index.php?SK=49"><img src="images/CikisBeyaz16x16.png" border="0" style="margin-top: 5px;"></a></td>
							<td width="85" class="MaviAlanMenusu"><a href="index.php?SK=49">Çıkış Yap</a></td>
						<?php
						}else{
						?>
							<td width="20"><a href="uye-giris"><img src="images/KullaniciBeyaz16x16.png" border="0" style="margin-top: 5px;"></a></td>
							<td width="70" class="MaviAlanMenusu"><a href="index.php?SK=31">Giriş Yap</a></td>
							<td width="20"><a href="yeni-uye-kayit"><img src="images/KullaniciEkleBeyaz16x16.png" border="0" style="margin-top: 5px;"></a></td>
							<td width="85" class="MaviAlanMenusu"><a href="index.php?SK=22">Yeni Üye Ol</a></td>
						<?php
						}
						?>
						<td width="20"><?php if(isset($_SESSION["Kullanici"])){ ?><a href="index.php?SK=94"><img src="images/SepetBeyaz16x16.png" border="0" style="margin-top: 5px;"></a><?php }else{ ?><img src="images/SepetBeyaz16x16.png" border="0" style="margin-top: 5px;"><?php } ?></td>
					<td width="103" class="MaviAlanMenusu"><?php if(isset($_SESSION["Kullanici"])){ ?><a href="index.php?SK=94">Alışveriş Sepeti</a><?php }else{ ?>Alışveriş Sepeti<?php } ?></td>
					</tr>
				</table>
				<table width="1065" height="80" align="center" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td width="192"><a href="index.php"><img class="trendyol-logo-c" src="images/<?php echo DonusumleriGeriDondur($SiteLogosu); ?>" border="0"><style> .trendyol-logo-c { width:192px; height:45px; }</style></a></td>
						<td>
							<table width="873" height="30" align="center" border="0" cellpadding="0" cellspacing="0">
								<tr>
									<td width="306" class="AnaMenu">&nbsp;</td>
									<td width="107" class="AnaMenu"><a href="index.php">Ana Sayfa</a></td>
									<td width="160" class="AnaMenu"><a href="index.php?SK=84">Erkek Ayakkabıları</a></td>
									<td width="160" class="AnaMenu"><a href="index.php?SK=85">Kadın Ayakkabıları</a></td>
									<td width="140" class="AnaMenu"><a href="index.php?SK=86">Çocuk Ayakkabıları</a></td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<!---------------------------- İçerik Başlangıç ---------------------------->
		<tr>
			<td valign="top">
				<table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td align="center">
							<?php
							if((!$SayfaKoduDegeri) or ($SayfaKoduDegeri=="") or ($SayfaKoduDegeri==0)){
								include($Sayfa[0]);
							}else{
								include($Sayfa[$SayfaKoduDegeri]);
							}
							?>
							<br />
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<!---------------------------- Footer ---------------------------->
		<tr height="210">
			<td>
				<table width="1065" align="center" border="0" cellpadding="0" cellspacing="0" bgcolor="#F9F9F9">
					<tr height="30">
						<td width="250" style="border-bottom: 1px solid #CCCCCC;">&nbsp;<b>Kurumsal</b></td>
						<td width="22">&nbsp;</td>
						<td width="250" style="border-bottom: 1px solid #CCCCCC;"><b>Üyelik & Hizmetler</b></td>
						<td width="22">&nbsp;</td>
						<td width="250" style="border-bottom: 1px solid #CCCCCC;"><b>Sözleşmeler</b></td>
						<td width="21">&nbsp;</td>
						<td width="250" style="border-bottom: 1px solid #CCCCCC;"><b>Bizi Takip Edin</b></td>
					</tr>
					<tr height="30">
						<td class="AltMenusu">&nbsp;<a href="hakkimizda">Hakkımızda</a></td>
						<td>&nbsp;</td>
						<?php
						if(isset($_SESSION["Kullanici"])){
						?>
							<td class="AltMenusu"><a href="index.php?SK=50">Hesabım</a></td>
						<?php
						}else{
						?>
							<td class="AltMenusu"><a href="index.php?SK=31">Giriş Yap</a></td>
						<?php
						}
						?>
						<td>&nbsp;</td>
						<td class="AltMenusu"><a href="index.php?SK=2">Üyelik Sözleşmesi</a></td>
						<td>&nbsp;</td>
						<td>
							<table width="250" align="center" border="0" cellpadding="0" cellspacing="0">
								<tr>
									<td width="20"><a href="xxxxx" target="_blank"><img src="images/Facebook16x16.png" border="0" style="margin-top: 5px;"></a></td>
									<td width="230" class="AltMenusu"><a href="<?php echo DonusumleriGeriDondur($SosyalLinkFacebook); ?>" target="_blank">Facebook</a></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr height="30">
						<td class="AltMenusu">&nbsp;<a href="index.php?SK=8">Banka Hesaplarımız</a></td>
						<td>&nbsp;</td>
						<?php
						if(isset($_SESSION["Kullanici"])){
						?>
							<td class="AltMenusu"><a href="index.php?SK=49">Çıkış Yap</a></td>
						<?php
						}else{
						?>
							<td class="AltMenusu"><a href="index.php?SK=22">Yeni Üye Ol</a></td>
						<?php
						}
						?>
						<td>&nbsp;</td>
						<td class="AltMenusu"><a href="index.php?SK=3">Kullanım Koşulları</a></td>
						<td>&nbsp;</td>
						<td>
							<table width="250" align="center" border="0" cellpadding="0" cellspacing="0">
								<tr>
									<td width="20"><a href="xxxxx"><img src="images/Twitter16x16.png" border="0" style="margin-top: 5px;"></a></td>
									<td width="230" class="AltMenusu"><a href="<?php echo DonusumleriGeriDondur($SosyalLinkTwitter); ?>" target="_blank">Twitter</a></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr height="30">
						<td class="AltMenusu">&nbsp;<a href="index.php?SK=9">Havale Bildirim Formu</a></td>
						<td>&nbsp;</td>
						<td class="AltMenusu"><a href="index.php?SK=21">Sık Sorulan Sorular</a></td>
						<td>&nbsp;</td>
						<td class="AltMenusu"><a href="index.php?SK=4">Gizlilik Sözleşmesi</a></td>
						<td>&nbsp;</td>
						<td>
							<table width="250" align="center" border="0" cellpadding="0" cellspacing="0">
								<tr>
									<td width="20"><a href="xxxxx"><img src="images/LinkedIn16x16.png" border="0" style="margin-top: 5px;"></a></td>
									<td width="230" class="AltMenusu"><a href="	<?php echo DonusumleriGeriDondur($SosyalLinkLinkedin); ?>" target="_blank">LinkedIn</a></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr height="30">
						<td class="AltMenusu">&nbsp;<a href="index.php?SK=14">Kargo Nerede?</a></td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td class="AltMenusu"><a href="index.php?SK=5">Mesafeli Satış Sözleşmesi</a></td>
						<td>&nbsp;</td>
						<td>
							<table width="250" align="center" border="0" cellpadding="0" cellspacing="0">
								<tr>
									<td width="20"><a href="xxxxx"><img src="images/Instagram16x16.png" border="0" style="margin-top: 5px;"></a></td>
									<td width="230" class="AltMenusu"><a href="<?php echo DonusumleriGeriDondur($SosyalLinkInstagram); ?>" target="_blank">Instagram</a></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr height="30">
						<td class="AltMenusu">&nbsp;<a href="index.php?SK=16">İletişim</a></td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td class="AltMenusu"><a href="index.php?SK=6">Teslimat</a></td>
						<td>&nbsp;</td>
						<td>
							<table width="250" align="center" border="0" cellpadding="0" cellspacing="0">
								<tr>
									<td width="20"><a href="xxxxx"><img src="images/Pinterest16x16.png" border="0" style="margin-top: 5px;"></a></td>
									<td width="230" class="AltMenusu"><a href="<?php echo DonusumleriGeriDondur($SosyalLinkPinterest); ?>" target="_blank">Pinterest</a></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr height="30">
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td class="AltMenusu"><a href="index.php?SK=7">İptal & İade & Değişim</a></td>
						<td>&nbsp;</td>
						<td>
							<table width="250" align="center" border="0" cellpadding="0" cellspacing="0">
								<tr>
									<td width="20"><a href="xxxxx"><img src="images/YouTube16x16.png" border="0" style="margin-top: 5px;"></a></td>
									<td width="230" class="AltMenusu"><a href="<?php echo DonusumleriGeriDondur($SosyalLinkYoutube); ?>" target="_blank">YouTube</a></td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<!---------------------------- Copyright ---------------------------->
		<tr height="30">
			<td>
				<table width="1065" height="30" align="center" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td align="center"><?php echo DonusumleriGeriDondur($SiteCopyrightMetni); ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<!---------------------------- Banks images ---------------------------->
		<tr height="30">
			<td>
				<table width="1065" height="30" align="center" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td align="center"><img src="images/RapidSSL32x12.png" border="0" style="margin-right: 5px;"><img src="images/InternetteGuvenliAlisveris28x12.png" border="0" style="margin-right: 5px;"><img src="images/3DSecure14x12.png" border="0" style="margin-right: 5px;"><img src="images/BonusCard41x12.png" border="0" style="margin-right: 5px;"><img src="images/MaximumCard46x12.png" border="0" style="margin-right: 5px;"><img src="images/WorldCard48x12.png" border="0" style="margin-right: 5px;"><img src="images/CardFinans78x12.png" border="0" style="margin-right: 5px;"><img src="images/AxessCard46x12.png" border="0" style="margin-right: 5px;"><img src="images/ParafCard19x12.png" border="0" style="margin-right: 5px;"><img src="images/VisaCard37x12.png" border="0" style="margin-right: 5px;"><img src="images/MasterCard21x12.png" border="0" style="margin-right: 5px;"><img src="images/AmericanExpiress20x12.png" border="0"></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>
<?php
	$dbConnection = null;
	ob_end_flush();
?>