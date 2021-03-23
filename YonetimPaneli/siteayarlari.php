<?php
if(isset($_SESSION["Yonetici"])){
?>
<form action="index.php?SKD=0&SKI=2" method="post" enctype="multipart/form-data">
	<table width="760" align="center" border="0" cellpadding="0" cellspacing="0">
		<tr height="70">
			<td bgcolor="#FF9900" style="color: #FFFFFF;"><h3>&nbsp;SİTE AYARLARI</h3></td>
		</tr>
		<tr height="10">
			<td style="font-size: 10px;">&nbsp;</td>
		</tr>
		<tr>
			<td><table width="750" align="right" border="0" cellpadding="0" cellspacing="0">
				<tr height="40">
					<td width="230"><b>Site Adı</b></td>
					<td width="20">:</td>
					<td width="500"><input type="text" name="SiteAdi" value="<?php echo DonusumleriGeriDondur($SiteAdi); ?>" class="InputAlanlari"></td>
				</tr>
				<tr height="40">
					<td><b>Site Title</b></td>
					<td>:</td>
					<td><input type="text" name="SiteTitle" value="<?php echo DonusumleriGeriDondur($SiteTitle); ?>" class="InputAlanlari"></td>
				</tr>
				<tr height="40">
					<td><b>Site Description</b></td>
					<td>:</td>
					<td><input type="text" name="SiteDescription" value="<?php echo DonusumleriGeriDondur($SiteDescription); ?>" class="InputAlanlari"></td>
				</tr>
				<tr height="40">
					<td><b>Site Keywords</b></td>
					<td>:</td>
					<td><input type="text" name="SiteKeywords" value="<?php echo DonusumleriGeriDondur($SiteKeywords); ?>" class="InputAlanlari"></td>
				</tr>
				<tr height="40">
					<td><b>Site Copyright Metni</b></td>
					<td>:</td>
					<td><input type="text" name="SiteCopyrightMetni" value="<?php echo DonusumleriGeriDondur($SiteCopyrightMetni); ?>" class="InputAlanlari"></td>
				</tr>
				<tr height="40">
					<td><b>Site Logosu</b></td>
					<td>:</td>
					<td><input type="file" name="SiteLogosu"></td>
				</tr>
				<tr height="40">
					<td><b>Site Linki</b></td>
					<td>:</td>
					<td><input type="text" name="SiteLinki" value="<?php echo DonusumleriGeriDondur($SiteLinki); ?>" class="InputAlanlari"></td>
				</tr>
				<tr height="40">
					<td><b>Site Email Adresi</b></td>
					<td>:</td>
					<td><input type="text" name="SiteEmailAdresi" value="<?php echo DonusumleriGeriDondur($SiteEmailAdresi); ?>" class="InputAlanlari"></td>
				</tr>
				<tr height="40">
					<td><b>Site Email Şifresi</b></td>
					<td>:</td>
					<td><input type="text" name="SiteEmailSifresi" value="<?php echo DonusumleriGeriDondur($SiteEmailSifresi); ?>" class="InputAlanlari"></td>
				</tr>
				<tr height="40">
					<td><b>Site Email Host Adresi</b></td>
					<td>:</td>
					<td><input type="text" name="SiteEmailHostAdresi" value="<?php echo DonusumleriGeriDondur($SiteEmailHostAdresi); ?>" class="InputAlanlari"></td>
				</tr>
				<tr height="40">
					<td><b>Facebook Linki</b></td>
					<td>:</td>
					<td><input type="text" name="SosyalLinkFacebook" value="<?php echo DonusumleriGeriDondur($SosyalLinkFacebook); ?>" class="InputAlanlari"></td>
				</tr>
				<tr height="40">
					<td><b>Twitter Linki</b></td>
					<td>:</td>
					<td><input type="text" name="SosyalLinkTwitter" value="<?php echo DonusumleriGeriDondur($SosyalLinkTwitter); ?>" class="InputAlanlari"></td>
				</tr>
				<tr height="40">
					<td><b>LinkedIn Linki</b></td>
					<td>:</td>
					<td><input type="text" name="SosyalLinkLinkedin" value="<?php echo DonusumleriGeriDondur($SosyalLinkLinkedin); ?>" class="InputAlanlari"></td>
				</tr>
				<tr height="40">
					<td><b>Instagram Linki</b></td>
					<td>:</td>
					<td><input type="text" name="SosyalLinkInstagram" value="<?php echo DonusumleriGeriDondur($SosyalLinkInstagram); ?>" class="InputAlanlari"></td>
				</tr>
				<tr height="40">
					<td><b>Pinterest Linki</b></td>
					<td>:</td>
					<td><input type="text" name="SosyalLinkPinterest" value="<?php echo DonusumleriGeriDondur($SosyalLinkPinterest); ?>" class="InputAlanlari"></td>
				</tr>
				<tr height="40">
					<td><b>Youtube Linki</b></td>
					<td>:</td>
					<td><input type="text" name="SosyalLinkYouTube" value="<?php echo DonusumleriGeriDondur($SosyalLinkYoutube); ?>" class="InputAlanlari"></td>
				</tr>
				<tr height="40">
					<td><b>Dolar Kuru</b></td>
					<td>:</td>
					<td><input type="text" name="DolarKuru" value="<?php echo DonusumleriGeriDondur($DolarKuru); ?>" class="InputAlanlari"></td>
				</tr>
				<tr height="40">
					<td><b>Euro Kuru</b></td>
					<td>:</td>
					<td><input type="text" name="EuroKuru" value="<?php echo DonusumleriGeriDondur($EuroKuru); ?>" class="InputAlanlari"></td>
				</tr>
				<tr height="40">
					<td><b>Ücretsiz Kargo Barajı</b></td>
					<td>:</td>
					<td><input type="text" name="UcretsizKargoBaraji" value="<?php echo DonusumleriGeriDondur($UcretsizKargoBaraji); ?>" class="InputAlanlari"></td>
				</tr>
				<tr height="40">
					<td><b>Sanal Pos ClientID</b></td>
					<td>:</td>
					<td><input type="text" name="ClientID" value="<?php echo DonusumleriGeriDondur($ClientID); ?>" class="InputAlanlari"></td>
				</tr>
				<tr height="40">
					<td><b>Sanal Pos StoreKey</b></td>
					<td>:</td>
					<td><input type="text" name="StoreKey" value="<?php echo DonusumleriGeriDondur($StoreKey); ?>" class="InputAlanlari"></td>
				</tr>
				<tr height="40">
					<td><b>Sanal Pos API Adı</b></td>
					<td>:</td>
					<td><input type="text" name="ApiKullanicisi" value="<?php echo DonusumleriGeriDondur($ApiKullanicisi); ?>" class="InputAlanlari"></td>
				</tr>
				<tr height="40">
					<td><b>Sanal Pos API Şifresi</b></td>
					<td>:</td>
					<td><input type="text" name="ApiSifresi" value="<?php echo DonusumleriGeriDondur($ApiSifresi); ?>" class="InputAlanlari"></td>
				</tr>
				<tr height="40">
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td><input type="submit" value="Ayarları Kaydet" class="YesilButon"></td>
				</tr>
			</table></td>
		</tr>
	</table>
</form>
<?php
}else{
	header("Location:index.php?SKD=1");
	exit();
}
?>