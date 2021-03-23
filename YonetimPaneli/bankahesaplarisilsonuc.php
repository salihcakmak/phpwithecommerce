<?php
if(isset($_SESSION["Yonetici"])){
	if(isset($_GET["ID"])){
		$GelenID	=	Guvenlik($_GET["ID"]);
	}else{
		$GelenID	=	"";
	}

	if($GelenID!=""){
		$HavaleBildirimleriSorgusu	=	$dbConnection->prepare("SELECT * FROM havalebildirimleri WHERE BankaId = ?");
		$HavaleBildirimleriSorgusu->execute([$GelenID]);
		$BildirimSayisi				=	$HavaleBildirimleriSorgusu->rowCount();
		
		if($BildirimSayisi>0){
			header("Location:index.php?SKD=0&SKI=20");
			exit();
		}else{
			$HesapSorgusu	=	$dbConnection->prepare("SELECT * FROM bankahesaplarimiz WHERE id = ?");
			$HesapSorgusu->execute([$GelenID]);
			$HesapSayisi	=	$HesapSorgusu->rowCount();
			$HesapKaydi		=	$HesapSorgusu->fetch(PDO::FETCH_ASSOC);

			$SilinecekDosyaYolu		=	"../Resimler/".$HesapKaydi["BankaLogosu"];

			$HesapSilmeSorgusu	=	$dbConnection->prepare("DELETE FROM bankahesaplarimiz WHERE id = ? LIMIT 1");
			$HesapSilmeSorgusu->execute([$GelenID]);
			$HesapSilmeKontrol	=	$HesapSilmeSorgusu->rowCount();

			if($HesapSilmeKontrol>0){
				unlink($SilinecekDosyaYolu);

				header("Location:index.php?SKD=0&SKI=19");
				exit();
			}else{
				header("Location:index.php?SKD=0&SKI=20");
				exit();
			}
		}
	}else{
		header("Location:index.php?SKD=0&SKI=20");
		exit();
	}
}else{
	header("Location:index.php?SKD=1");
	exit();
}
?>