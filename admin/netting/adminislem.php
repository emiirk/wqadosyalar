<?php 
ob_start();
session_start();

include 'baglan.php';
include '../production/fonksiyon.php';









if (isset($_POST['admingiris'])) {

	$kullanici_mail=$_POST['kullanici_mail'];
	$kullanici_password=md5($_POST['kullanici_password']);

	$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_password=:password and kullanici_yetki=:yetki");
	$kullanicisor->execute(array(
		'mail' => $kullanici_mail,
		'password' => $kullanici_password,
		'yetki' => 1
		));

	$say=$kullanicisor->rowCount();

	if ($say==1) {

		$_SESSION['kullanici_mail']=$kullanici_mail;
		header("Location:../production/index.php");
		exit;



	} else {

		header("Location:../production/login.php?durum=no");
		exit;
	}
	

}














if (isset($_POST['sliderkaydet'])) {


	$uploads_dir = '../../img/slider';
	@$tmp_name = $_FILES['slider_resimyol']["tmp_name"];
	@$name = $_FILES['slider_resimyol']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	


	$kaydet=$db->prepare("INSERT INTO slider SET
		slider_yazi1=:slider_yazi1,
		slider_yazi2=:slider_yazi2,
		slider_sira=:slider_sira,
		slider_durum=:slider_durum,
		slider_resimyol=:slider_resimyol
		");
	$insert=$kaydet->execute(array(
		'slider_yazi1' => $_POST['slider_yazi1'],
		'slider_yazi2' => $_POST['slider_yazi2'],
		'slider_sira' => $_POST['slider_sira'],
		'slider_durum' => $_POST['slider_durum'],
		'slider_resimyol' => $refimgyol
		));

	if ($insert) {

		Header("Location:../production/slider.php?durum=ok");

	} else {

		Header("Location:../production/slider.php?durum=no");
	}




}







// Slider Düzenleme Başla


if (isset($_POST['sliderduzenle'])) {


	if($_FILES['slider_resimyol']["size"] > 0)  { 


		$uploads_dir = '../../img/slider';
		@$tmp_name = $_FILES['slider_resimyol']["tmp_name"];
		@$name = $_FILES['slider_resimyol']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizsayi3=rand(20000,32000);
		$benzersizsayi4=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$duzenle=$db->prepare("UPDATE slider SET
			slider_yazi1=:yazi1,
			slider_yazi2=:yazi2,
			slider_sira=:sira,
			slider_durum=:durum,
			slider_resimyol=:resimyol	
			WHERE slider_id={$_POST['slider_id']}");
		$update=$duzenle->execute(array(
			'yazi1' => $_POST['slider_yazi1'],
			'yazi2' => $_POST['slider_yazi2'],
			'sira' => $_POST['slider_sira'],
			'durum' => $_POST['slider_durum'],
			'resimyol' => $refimgyol,
			));
		

		$slider_id=$_POST['slider_id'];

		if ($update) {

			$resimsilunlink=$_POST['slider_resimyol'];
			unlink("../../$resimsilunlink");

			Header("Location:../production/slider.php?slider_id=$slider_id&durum=ok");

		} else {

			Header("Location:../production/slider-duzenle.php?durum=no");
		}



	} else {

		$duzenle=$db->prepare("UPDATE slider SET
			slider_yazi1=:yazi1,
			slider_yazi2=:yazi2,
			slider_sira=:sira,
			slider_durum=:durum		
			WHERE slider_id={$_POST['slider_id']}");
		$update=$duzenle->execute(array(
			'yazi1' => $_POST['slider_yazi1'],
			'yazi2' => $_POST['slider_yazi2'],
			'sira' => $_POST['slider_sira'],
			'durum' => $_POST['slider_durum']
			));

		$slider_id=$_POST['slider_id'];

		if ($update) {

			Header("Location:../production/slider.php?slider_id=$slider_id&durum=ok");

		} else {

			Header("Location:../production/slider-duzenle.php?durum=no");
		}
	}

}


// Slider Düzenleme Bitiş

if (@$_GET['slidersil']=="ok") {

	//islemkontrol();
	
	$sil=$db->prepare("DELETE from slider where slider_id=:slider_id");
	$kontrol=$sil->execute(array(
		'slider_id' => $_GET['slider_id']
		));

	if ($kontrol) {

		$resimsilunlink=$_GET['slider_resimyol'];
		unlink("../../$resimsilunlink");

		Header("Location:../production/slider.php?durum=ok");

	} else {

		Header("Location:../production/slider.php?durum=no");
	}

}










if (isset($_POST['hakkimizdakaydet'])) {


	if($_FILES['hakkimizda_resimyol']["size"] > 0)  { 


		$uploads_dir = '../../img';
		@$tmp_name = $_FILES['hakkimizda_resimyol']["tmp_name"];
		@$name = $_FILES['hakkimizda_resimyol']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizsayi3=rand(20000,32000);
		$benzersizsayi4=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$duzenle=$db->prepare("UPDATE hakkimizda SET
			hakkimizda_baslik=:baslik,
			hakkimizda_icerik=:icerik,
			hakkimizda_resimyol=:resimyol	
			WHERE hakkimizda_id=1");
		$update=$duzenle->execute(array(
			'baslik' => $_POST['hakkimizda_baslik'],
			'icerik' => $_POST['hakkimizda_icerik'],
			'resimyol' => $refimgyol,
			));
		


		if ($update) {

			$resimsilunlink=$_POST['hakkimizda_resimyol'];
			unlink("../../$resimsilunlink");

			Header("Location:../production/hakkimizda.php?durum=ok");

		} else {

			Header("Location:../production/hakkimizda.php?durum=no");
		}



	} else {

		$duzenle=$db->prepare("UPDATE hakkimizda SET
			hakkimizda_baslik=:baslik,
			hakkimizda_icerik=:icerik
			WHERE hakkimizda_id=1");
		$update=$duzenle->execute(array(
			'baslik' => $_POST['hakkimizda_baslik'],
			'icerik' => $_POST['hakkimizda_icerik']
			));


		if ($update) {

			Header("Location:../production/hakkimizda.php?durum=ok");

		} else {

			Header("Location:../production/hakkimizda.php?durum=no");
		}
	}

}











if (isset($_POST['yetkikaydet'])) {


	if($_FILES['yetki_resimyol']["size"] > 0)  { 


		$uploads_dir = '../../img';
		@$tmp_name = $_FILES['yetki_resimyol']["tmp_name"];
		@$name = $_FILES['yetki_resimyol']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizsayi3=rand(20000,32000);
		$benzersizsayi4=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$duzenle=$db->prepare("UPDATE yetkilerimiz SET
			yetki_baslik=:baslik,
			yetki_icerik=:icerik,
			yetki_resimyol=:resimyol	
			WHERE yetki_id=1");
		$update=$duzenle->execute(array(
			'baslik' => $_POST['yetki_baslik'],
			'icerik' => $_POST['yetki_icerik'],
			'resimyol' => $refimgyol,
			));
		


		if ($update) {

			$resimsilunlink=$_POST['yetki_resimyol'];
			unlink("../../$resimsilunlink");

			Header("Location:../production/yetkilerimiz.php?durum=ok");

		} else {

			Header("Location:../production/yetkilerimiz.php?durum=no");
		}



	} else {

		$duzenle=$db->prepare("UPDATE yetkilerimiz SET
			yetki_baslik=:baslik,
			yetki_icerik=:icerik
			WHERE yetki_id=1");
		$update=$duzenle->execute(array(
			'baslik' => $_POST['yetki_baslik'],
			'icerik' => $_POST['yetki_icerik']
			));


		if ($update) {

			Header("Location:../production/yetkilerimiz.php?durum=ok");

		} else {

			Header("Location:../production/yetkilerimiz.php?durum=no");
		}
	}

}



























if (isset($_POST['organizasyonkaydet'])) {


	if($_FILES['organizasyon_resimyol']["size"] > 0)  { 


		$uploads_dir = '../../img';
		@$tmp_name = $_FILES['organizasyon_resimyol']["tmp_name"];
		@$name = $_FILES['organizasyon_resimyol']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizsayi3=rand(20000,32000);
		$benzersizsayi4=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$duzenle=$db->prepare("UPDATE organizasyon SET
			organizasyon_resimyol=:resimyol	
			WHERE organizasyon_id=1");
		$update=$duzenle->execute(array(
			'resimyol' => $refimgyol,
			));
		


		if ($update) {

			$resimsilunlink=$_POST['organizasyon_resimyol'];
			unlink("../../$resimsilunlink");

			Header("Location:../production/organizasyon-semasi.php?durum=ok");

		} else {

			Header("Location:../production/organizasyon-semasi.php?durum=no");
		}



	}

}















if (isset($_POST['kalitekaydet'])) {


	if($_FILES['kalite_resimyol']["size"] > 0)  { 


		$uploads_dir = '../../img';
		@$tmp_name = $_FILES['kalite_resimyol']["tmp_name"];
		@$name = $_FILES['kalite_resimyol']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizsayi3=rand(20000,32000);
		$benzersizsayi4=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$duzenle=$db->prepare("UPDATE kalite SET
			kalite_baslik=:baslik,
			kalite_icerik=:icerik,
			kalite_resimyol=:resimyol	
			WHERE kalite_id=1");
		$update=$duzenle->execute(array(
			'baslik' => $_POST['kalite_baslik'],
			'icerik' => $_POST['kalite_icerik'],
			'resimyol' => $refimgyol,
			));
		


		if ($update) {

			$resimsilunlink=$_POST['kalite_resimyol'];
			unlink("../../$resimsilunlink");

			Header("Location:../production/kalite-politikasi.php?durum=ok");

		} else {

			Header("Location:../production/kalite-politikasi.php?durum=no");
		}



	} else {

		$duzenle=$db->prepare("UPDATE kalite SET
			kalite_baslik=:baslik,
			kalite_icerik=:icerik
			WHERE kalite_id=1");
		$update=$duzenle->execute(array(
			'baslik' => $_POST['kalite_baslik'],
			'icerik' => $_POST['kalite_icerik']
			));


		if ($update) {

			Header("Location:../production/kalite-politikasi.php?durum=ok");

		} else {

			Header("Location:../production/kalite-politikasi.php?durum=no");
		}
	}

}

































if (isset($_POST['sistembelgeekle'])) {

	$uploads_dir = '../../img/sistemBelge';
	@$tmp_name = $_FILES['sistem_belge_resimyol']["tmp_name"];
	@$name = $_FILES['sistem_belge_resimyol']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");





	$sistem_belge_seourl=seo($_POST['sistem_belge_ad']);

	$kaydet=$db->prepare("INSERT INTO sistembelge SET
		sistem_belge_ad=:sistem_belge_ad,
		sistem_belge_durum=:sistem_belge_durum,	
		sistem_belge_seourl=:seourl,
		sistem_belge_resimyol=:resimyol,
		sistem_belge_sira=:sistem_belge_sira
		");
	$insert=$kaydet->execute(array(
		'sistem_belge_ad' => $_POST['sistem_belge_ad'],
		'sistem_belge_durum' => $_POST['sistem_belge_durum'],
		'seourl' => $sistem_belge_seourl,
		'resimyol' => $refimgyol,
		'sistem_belge_sira' => $_POST['sistem_belge_sira']		
		));

	if ($insert) {

		Header("Location:../production/sistem-belgelendirme.php?durum=ok");

	} else {

		Header("Location:../production/sistem-belgelendirme.php?durum=no");
	}

}

























// Sistem kategori düzenle Başla


if (isset($_POST['sistembelgeduzenle'])) {


	if($_FILES['sistem_belge_resimyol']["size"] > 0)  { 


		$uploads_dir = '../../img/sistemBelge';
		@$tmp_name = $_FILES['sistem_belge_resimyol']["tmp_name"];
		@$name = $_FILES['sistem_belge_resimyol']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizsayi3=rand(20000,32000);
		$benzersizsayi4=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


		$sistem_belge_id=$_POST['sistem_belge_id'];
		$sistem_belge_seourl=seo($_POST['sistem_belge_ad']);

		$duzenle=$db->prepare("UPDATE sistembelge SET
			sistem_belge_ad=:sistem_belge_ad,
			sistem_belge_sira=:sistem_belge_sira,
			sistem_belge_durum=:sistem_belge_durum,
			sistem_belge_seourl=:sistem_belge_seourl,
			sistem_belge_resimyol=:sistem_belge_resimyol	
			WHERE sistem_belge_id={$_POST['sistem_belge_id']}");
		$update=$duzenle->execute(array(
			'sistem_belge_ad' => $_POST['sistem_belge_ad'],
			'sistem_belge_sira' => $_POST['sistem_belge_sira'],
			'sistem_belge_durum' => $_POST['sistem_belge_durum'],
			'sistem_belge_seourl' => $sistem_belge_seourl,
			'sistem_belge_resimyol' => $refimgyol
			));
		

		

		if ($update) {

			$resimsilunlink=$_POST['sistem_belge_resimyol'];
			unlink("../../$resimsilunlink");

			Header("Location:../production/sistem-belgesi-duzenle.php?sistem_belge_id=$sistem_belge_id&durum=ok");

		} else {

			Header("Location:../production/sistem-belgesi-duzenle.php?sistem_belge_id=$sistem_belge_id&durum=no");
		}



	} else {

		$sistem_belge_seourl=seo($_POST['sistem_belge_ad']);
		$sistem_belge_id=$_POST['sistem_belge_id'];

		$duzenle=$db->prepare("UPDATE sistembelge SET
			sistem_belge_ad=:sistem_belge_ad,
			sistem_belge_sira=:sistem_belge_sira,
			sistem_belge_durum=:sistem_belge_durum,
			sistem_belge_seourl=:sistem_belge_seourl
			WHERE sistem_belge_id={$_POST['sistem_belge_id']}");
		$update=$duzenle->execute(array(
			'sistem_belge_ad' => $_POST['sistem_belge_ad'],
			'sistem_belge_sira' => $_POST['sistem_belge_sira'],
			'sistem_belge_durum' => $_POST['sistem_belge_durum'],
			'sistem_belge_seourl' => $sistem_belge_seourl
			));

		

		if ($update) {

			Header("Location:../production/sistem-belgesi-duzenle.php?sistem_belge_id=$sistem_belge_id&durum=ok");

		} else {

			Header("Location:../production/sistem-belgesi-duzenle.php?sistem_belge_id=$sistem_belge_id&durum=no");
		}
	}

}


// Sistem kategori düzenle Bitiş

















if (@$_GET['sistem_belge_sil']=="ok") {

	islemkontrol();
	
	$sil=$db->prepare("DELETE from sistembelge where sistem_belge_id=:sistem_belge_id");
	$kontrol=$sil->execute(array(
		'sistem_belge_id' => $_GET['sistem_belge_id']
		));

	if ($kontrol) {

		$resimsilunlink=$_GET['sistem_belge_resimyol'];
		unlink("../../$resimsilunlink");

		Header("Location:../production/sistem-belgelendirme.php?durum=ok");

	} else {

		Header("Location:../production/sistem-belgelendirme.php?durum=no");
	}

}


















if (isset($_POST['sistemicerikkaydet'])) {

	$uploads_dir = '../../img/icerik';
	@$tmp_name = $_FILES['sistem_icerik_resimyol']["tmp_name"];
	@$name = $_FILES['sistem_icerik_resimyol']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");





	$sistem_icerik_seourl=seo($_POST['sistem_icerik_baslik']);
	$sistem_belge_id=$_POST['sistem_belge_id'];

	$kaydet=$db->prepare("INSERT INTO sistemicerik SET
		sistem_icerik_baslik=:sistem_icerik_baslik,
		sistem_belge_id=:sistem_belge_id,
		sistem_icerik_icerik=:sistem_icerik_icerik,	
		sistem_icerik_seourl=:sistem_icerik_seourl,
		sistem_icerik_resimyol=:sistem_icerik_resimyol
		");
	$insert=$kaydet->execute(array(
		'sistem_icerik_baslik' => $_POST['sistem_icerik_baslik'],
		'sistem_belge_id' => $_POST['sistem_belge_id'],
		'sistem_icerik_icerik' => $_POST['sistem_icerik_icerik'],
		'sistem_icerik_seourl' => $sistem_icerik_seourl,
		'sistem_icerik_resimyol' => $refimgyol
		));

	if ($insert) {

		Header("Location:../production/sistem-belgesi-icerik.php?durum=ok");

	} else {

		Header("Location:../production/sistem-belgesi-icerik-ekle.php?durum=no");
	}

}


















if (isset($_POST['sistemicerikduzenle'])) {


	if($_FILES['sistem_icerik_resimyol']["size"] > 0)  { 


		$uploads_dir = '../../img/icerik';
		@$tmp_name = $_FILES['sistem_icerik_resimyol']["tmp_name"];
		@$name = $_FILES['sistem_icerik_resimyol']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizsayi3=rand(20000,32000);
		$benzersizsayi4=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


		$sistem_icerik_id=$_POST['sistem_icerik_id'];
		$sistem_icerik_seourl=seo($_POST['sistem_icerik_ad']);

		$duzenle=$db->prepare("UPDATE sistemicerik SET
			sistem_icerik_baslik=:sistem_icerik_baslik,
			sistem_belge_id=:sistem_belge_id,
			sistem_icerik_icerik=:sistem_icerik_icerik,
			sistem_icerik_seourl=:sistem_icerik_seourl,
			sistem_icerik_resimyol=:sistem_icerik_resimyol	
			WHERE sistem_icerik_id={$_POST['sistem_icerik_id']}");
		$update=$duzenle->execute(array(
			'sistem_icerik_baslik' => $_POST['sistem_icerik_baslik'],
			'sistem_belge_id' => $_POST['sistem_belge_id'],
			'sistem_icerik_icerik' => $_POST['sistem_icerik_icerik'],
			'sistem_icerik_seourl' => $sistem_icerik_seourl,
			'sistem_icerik_resimyol' => $refimgyol
			));
		

		

		if ($update) {

			$resimsilunlink=$_POST['sistem_icerik_resimyol'];
			unlink("../../$resimsilunlink");

			Header("Location:../production/sistem-belgesi-icerik-duzenle.php?sistem_belge_id=$sistem_belge_id&sistem_icerik_id=$sistem_icerik_id&durum=ok");

		} else {

			Header("Location:../production/sistem-belgesi-icerik-duzenle.php?sistem_belge_id=$sistem_belge_id&sistem_icerik_id=$sistem_icerik_id&durum=no");
		}



	} else {

		$sistem_icerik_seourl=seo($_POST['sistem_icerik_baslik']);
		$sistem_icerik_id=$_POST['sistem_icerik_id'];

		$duzenle=$db->prepare("UPDATE sistemicerik SET
			sistem_icerik_baslik=:sistem_icerik_baslik,
			sistem_belge_id=:sistem_belge_id,
			sistem_icerik_icerik=:sistem_icerik_icerik,
			sistem_icerik_seourl=:sistem_icerik_seourl
			WHERE sistem_icerik_id={$_POST['sistem_icerik_id']}");
		$update=$duzenle->execute(array(
			'sistem_icerik_baslik' => $_POST['sistem_icerik_baslik'],
			'sistem_belge_id' => $_POST['sistem_belge_id'],
			'sistem_icerik_icerik' => $_POST['sistem_icerik_icerik'],
			'sistem_icerik_seourl' => $sistem_icerik_seourl
			));

		

		if ($update) {

			Header("Location:../production/sistem-belgesi-icerik-duzenle.php?sistem_belge_id=$sistem_belge_id&sistem_icerik_id=$sistem_icerik_id&durum=ok");

		} else {

			Header("Location:../production/sistem-belgesi-icerik-duzenle.php?sistem_belge_id=$sistem_belge_id&sistem_icerik_id=$sistem_icerik_id&durum=no");
		}
	}

}










if (@$_GET['sistem_icerik_sil']=="ok") {

	islemkontrol();
	
	$sil=$db->prepare("DELETE from sistemicerik where sistem_icerik_id=:sistem_icerik_id");
	$kontrol=$sil->execute(array(
		'sistem_icerik_id' => @$_GET['sistem_icerik_id']
		));

	if ($kontrol) {

		$resimsilunlink=@$_GET['sistem_icerik_resimyol'];
		unlink("../../$resimsilunlink");

		Header("Location:../production/sistem-belgesi-icerik.php?durum=ok");

	} else {

		Header("Location:../production/sistem-belgesi-icerik.php?durum=no");
	}

}



































if (isset($_POST['urunbelgeekle'])) {

	$uploads_dir = '../../img/urunBelge';
	@$tmp_name = $_FILES['urun_belge_resimyol']["tmp_name"];
	@$name = $_FILES['urun_belge_resimyol']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");





	$urun_belge_seourl=seo($_POST['urun_belge_ad']);

	$kaydet=$db->prepare("INSERT INTO urunbelge SET
		urun_belge_ad=:urun_belge_ad,
		urun_belge_durum=:urun_belge_durum,	
		urun_belge_seourl=:seourl,
		urun_belge_resimyol=:resimyol,
		urun_belge_sira=:urun_belge_sira
		");
	$insert=$kaydet->execute(array(
		'urun_belge_ad' => $_POST['urun_belge_ad'],
		'urun_belge_durum' => $_POST['urun_belge_durum'],
		'seourl' => $urun_belge_seourl,
		'resimyol' => $refimgyol,
		'urun_belge_sira' => $_POST['urun_belge_sira']		
		));

	if ($insert) {

		Header("Location:../production/urun-belgelendirme.php?durum=ok");

	} else {

		Header("Location:../production/urun-belgelendirme.php?durum=no");
	}

}

















if (isset($_POST['urunbelgeduzenle'])) {


	if($_FILES['urun_belge_resimyol']["size"] > 0)  { 


		$uploads_dir = '../../img/urunBelge';
		@$tmp_name = $_FILES['urun_belge_resimyol']["tmp_name"];
		@$name = $_FILES['urun_belge_resimyol']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizsayi3=rand(20000,32000);
		$benzersizsayi4=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


		$urun_belge_id=$_POST['urun_belge_id'];
		$urun_belge_seourl=seo($_POST['urun_belge_ad']);

		$duzenle=$db->prepare("UPDATE urunbelge SET
			urun_belge_ad=:urun_belge_ad,
			urun_belge_sira=:urun_belge_sira,
			urun_belge_durum=:urun_belge_durum,
			urun_belge_seourl=:urun_belge_seourl,
			urun_belge_resimyol=:urun_belge_resimyol	
			WHERE urun_belge_id={$_POST['urun_belge_id']}");
		$update=$duzenle->execute(array(
			'urun_belge_ad' => $_POST['urun_belge_ad'],
			'urun_belge_sira' => $_POST['urun_belge_sira'],
			'urun_belge_durum' => $_POST['urun_belge_durum'],
			'urun_belge_seourl' => $urun_belge_seourl,
			'urun_belge_resimyol' => $refimgyol
			));
		

		

		if ($update) {

			$resimsilunlink=$_POST['urun_belge_resimyol'];
			unlink("../../$resimsilunlink");

			Header("Location:../production/urun-belgesi-duzenle.php?urun_belge_id=$urun_belge_id&durum=ok");

		} else {

			Header("Location:../production/urun-belgesi-duzenle.php?urun_belge_id=$urun_belge_id&durum=no");
		}



	} else {

		$urun_belge_seourl=seo($_POST['urun_belge_ad']);
		$urun_belge_id=$_POST['urun_belge_id'];

		$duzenle=$db->prepare("UPDATE urunbelge SET
			urun_belge_ad=:urun_belge_ad,
			urun_belge_sira=:urun_belge_sira,
			urun_belge_durum=:urun_belge_durum,
			urun_belge_seourl=:urun_belge_seourl
			WHERE urun_belge_id={$_POST['urun_belge_id']}");
		$update=$duzenle->execute(array(
			'urun_belge_ad' => $_POST['urun_belge_ad'],
			'urun_belge_sira' => $_POST['urun_belge_sira'],
			'urun_belge_durum' => $_POST['urun_belge_durum'],
			'urun_belge_seourl' => $urun_belge_seourl
			));

		

		if ($update) {

			Header("Location:../production/urun-belgesi-duzenle.php?urun_belge_id=$urun_belge_id&durum=ok");

		} else {

			Header("Location:../production/urun-belgesi-duzenle.php?urun_belge_id=$urun_belge_id&durum=no");
		}
	}

}


















if (isset($_POST['urunicerikkaydet'])) {

	$uploads_dir = '../../img/urunİcerik';
	@$tmp_name = $_FILES['urun_icerik_resimyol']["tmp_name"];
	@$name = $_FILES['urun_icerik_resimyol']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");





	$urun_icerik_seourl=seo($_POST['urun_icerik_baslik']);
	$urun_belge_id=$_POST['urun_belge_id'];

	$kaydet=$db->prepare("INSERT INTO urunicerik SET
		urun_icerik_baslik=:urun_icerik_baslik,
		urun_belge_id=:urun_belge_id,
		urun_icerik_icerik=:urun_icerik_icerik,	
		urun_icerik_seourl=:urun_icerik_seourl,
		urun_icerik_resimyol=:urun_icerik_resimyol
		");
	$insert=$kaydet->execute(array(
		'urun_icerik_baslik' => $_POST['urun_icerik_baslik'],
		'urun_belge_id' => $_POST['urun_belge_id'],
		'urun_icerik_icerik' => $_POST['urun_icerik_icerik'],
		'urun_icerik_seourl' => $urun_icerik_seourl,
		'urun_icerik_resimyol' => $refimgyol
		));

	if ($insert) {

		Header("Location:../production/urun-belgesi-icerik.php?durum=ok");

	} else {

		Header("Location:../production/urun-belgesi-icerik-ekle.php?durum=no");
	}

}























if (isset($_POST['urunicerikduzenle'])) {


	if($_FILES['urun_icerik_resimyol']["size"] > 0)  { 


		$uploads_dir = '../../img/icerik';
		@$tmp_name = $_FILES['urun_icerik_resimyol']["tmp_name"];
		@$name = $_FILES['urun_icerik_resimyol']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizsayi3=rand(20000,32000);
		$benzersizsayi4=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


		$urun_icerik_id=$_POST['urun_icerik_id'];
		$urun_icerik_seourl=seo($_POST['urun_icerik_ad']);

		$duzenle=$db->prepare("UPDATE urunicerik SET
			urun_icerik_baslik=:urun_icerik_baslik,
			urun_belge_id=:urun_belge_id,
			urun_icerik_icerik=:urun_icerik_icerik,
			urun_icerik_seourl=:urun_icerik_seourl,
			urun_icerik_resimyol=:urun_icerik_resimyol	
			WHERE urun_icerik_id={$_POST['urun_icerik_id']}");
		$update=$duzenle->execute(array(
			'urun_icerik_baslik' => $_POST['urun_icerik_baslik'],
			'urun_belge_id' => $_POST['urun_belge_id'],
			'urun_icerik_icerik' => $_POST['urun_icerik_icerik'],
			'urun_icerik_seourl' => $urun_icerik_seourl,
			'urun_icerik_resimyol' => $refimgyol
			));
		

		

		if ($update) {

			$resimsilunlink=$_POST['urun_icerik_resimyol'];
			unlink("../../$resimsilunlink");

			Header("Location:../production/urun-belgesi-icerik-duzenle.php?urun_belge_id=$urun_belge_id&urun_icerik_id=$urun_icerik_id&durum=ok");

		} else {

			Header("Location:../production/urun-belgesi-icerik-duzenle.php?urun_belge_id=$urun_belge_id&urun_icerik_id=$urun_icerik_id&durum=no");
		}



	} else {

		$urun_icerik_seourl=seo($_POST['urun_icerik_baslik']);
		$urun_icerik_id=$_POST['urun_icerik_id'];

		$duzenle=$db->prepare("UPDATE urunicerik SET
			urun_icerik_baslik=:urun_icerik_baslik,
			urun_belge_id=:urun_belge_id,
			urun_icerik_icerik=:urun_icerik_icerik,
			urun_icerik_seourl=:urun_icerik_seourl
			WHERE urun_icerik_id={$_POST['urun_icerik_id']}");
		$update=$duzenle->execute(array(
			'urun_icerik_baslik' => $_POST['urun_icerik_baslik'],
			'urun_belge_id' => $_POST['urun_belge_id'],
			'urun_icerik_icerik' => $_POST['urun_icerik_icerik'],
			'urun_icerik_seourl' => $urun_icerik_seourl
			));

		

		if ($update) {

			Header("Location:../production/urun-belgesi-icerik-duzenle.php?urun_belge_id=$urun_belge_id&urun_icerik_id=$urun_icerik_id&durum=ok");

		} else {

			Header("Location:../production/urun-belgesi-icerik-duzenle.php?urun_belge_id=$urun_belge_id&urun_icerik_id=$urun_icerik_id&durum=no");
		}
	}

}





























if (isset($_POST['egitimkategoriekle'])) {



	$kaydet=$db->prepare("INSERT INTO egitim SET
		egitim_ad=:egitim_ad,
		egitim_baslik=:egitim_baslik,
		egitim_icerik=:egitim_icerik,	
		egitim_durum=:egitim_durum
		");
	$insert=$kaydet->execute(array(
		'egitim_ad' => $_POST['egitim_ad'],
		'egitim_baslik' => $_POST['egitim_baslik'],
		'egitim_icerik' => $_POST['egitim_icerik'],
		'egitim_durum' => $_POST['egitim_durum']
		));

	if ($insert) {

		Header("Location:../production/egitim-kategorileri.php?durum=ok");

	} else {

		Header("Location:../production/egitim-kategorileri.php?durum=no");
	}

}
























if (isset($_POST['egitimkategoriduzenle'])) {


	$egitim_id=$_POST['egitim_id'];

	$duzenle=$db->prepare("UPDATE egitim SET
		egitim_ad=:egitim_ad,
		egitim_baslik=:egitim_baslik,
		egitim_icerik=:egitim_icerik,	
		egitim_durum=:egitim_durum
		WHERE egitim_id={$_POST['egitim_id']}");
	$update=$duzenle->execute(array(
		'egitim_ad' => $_POST['egitim_ad'],
		'egitim_baslik' => $_POST['egitim_baslik'],
		'egitim_icerik' => $_POST['egitim_icerik'],
		'egitim_durum' => $_POST['egitim_durum']
		));



	if ($update) {

		Header("Location:../production/egitim-kategorisi-duzenle.php?egitim_id=$egitim_id&durum=ok");

	} else {

		Header("Location:../production/egitim-kategorisi-duzenle.php?egitim_id=$egitim_id&durum=no");
	}
	

}




























if (isset($_POST['soruekle'])) {



	$kaydet=$db->prepare("INSERT INTO soru SET
		soru_soru=:soru_soru,
		soru_icerik=:soru_icerik,
		soru_durum=:soru_durum
		");
	$insert=$kaydet->execute(array(
		'soru_soru' => $_POST['soru_soru'],
		'soru_icerik' => $_POST['soru_icerik'],
		'soru_durum' => $_POST['soru_durum']
		));

	if ($insert) {

		Header("Location:../production/sss.php?durum=ok");

	} else {

		Header("Location:../production/sss.php?durum=no");
	}

}




















if (isset($_POST['soruduzenle'])) {


	$soru_id=$_POST['soru_id'];

	$duzenle=$db->prepare("UPDATE soru SET
		soru_soru=:soru_soru,
		soru_icerik=:soru_icerik,
		soru_durum=:soru_durum
		WHERE soru_id={$_POST['soru_id']}");
	$update=$duzenle->execute(array(
		'soru_soru' => $_POST['soru_soru'],
		'soru_icerik' => $_POST['soru_icerik'],
		'soru_durum' => $_POST['soru_durum']
		));



	if ($update) {

		Header("Location:../production/soru-duzenle.php?soru_id=$soru_id&durum=ok");

	} else {

		Header("Location:../production/soru-duzenle.php?soru_id=$soru_id&durum=no");
	}
	

}




























if (isset($_POST['mesajGonder'])) {



	$kaydet=$db->prepare("INSERT INTO mesaj SET
		mesaj_konu=:mesaj_konu,
		mesaj_isim=:mesaj_isim,
		mesaj_mail=:mesaj_mail,
		mesaj_icerik=:mesaj_icerik
		");
	$insert=$kaydet->execute(array(
		'mesaj_konu' => $_POST['mesaj_konu'],
		'mesaj_isim' => $_POST['mesaj_isim'],
		'mesaj_mail' => $_POST['mesaj_mail'],
		'mesaj_icerik' => $_POST['mesaj_icerik']
		));

	if ($insert) {

		Header("Location:../../iletisim.php?durum=ok");

	} else {

		Header("Location:../../iletisim.php?durum=no");
	}

}





















if (@$_GET['mesaj_sil']=="ok") {

	islemkontrol();
	
	$sil=$db->prepare("DELETE from mesaj where mesaj_id=:mesaj_id");
	$kontrol=$sil->execute(array(
		'mesaj_id' => @$_GET['mesaj_id']
		));

	if ($kontrol) {


		Header("Location:../production/mesajlar.php?durum=ok");

	} else {

		Header("Location:../production/mesajlar.php?durum=no");
	}

}





























































/*
if (isset($_POST['sistembelgeekle'])) {

	$uploads_dir = '../../img/sistemBelge';
	@$tmp_name = $_FILES['sistem_belge_resimyol']["tmp_name"];
	@$name = $_FILES['sistem_belge_resimyol']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");





	$sistem_belge_seourl=seo($_POST['sistem_belge_ad']);

	$kaydet=$db->prepare("INSERT INTO sistembelge SET
		sistem_belge_ad=:sistem_belge_ad,
		sistem_belge_durum=:sistem_belge_durum,	
		sistem_belge_seourl=:seourl,
		sistem_belge_resimyol=:resimyol,
		sistem_belge_sira=:sistem_belge_sira
		");
	$insert=$kaydet->execute(array(
		'sistem_belge_ad' => $_POST['sistem_belge_ad'],
		'sistem_belge_durum' => $_POST['sistem_belge_durum'],
		'seourl' => $sistem_belge_seourl,
		'resimyol' => $refimgyol,
		'sistem_belge_sira' => $_POST['sistem_belge_sira']		
	));

	if ($insert) {

		Header("Location:../production/sistem-belgelendirme.php?durum=ok");

	} else {

		Header("Location:../production/sistem-belgelendirme.php?durum=no");
	}

}



*/










?>