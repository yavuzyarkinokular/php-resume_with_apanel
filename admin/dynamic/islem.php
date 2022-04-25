<?php 

// * Session ve ob_start ile kullanıcının içeride tutulması sağlanır
ob_start();
session_start();

//************************************* Veritabanı bağlantısı 
include 'baglan.php';
//-------------------------------------- Veritabanı bağlantısı 

//************************************* Login Ayar
if (isset($_POST['admingiris'])) {
	$kullanici_mail=$_POST['kullanici_mail'];
	$kullanici_password= $_POST['kullanici_password'];
	$kullanicisor = $db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_password=:sifre and kullanici_yetki=:yetki ");
	$kullanicisor->execute(array(
		'mail' => $kullanici_mail,
		'sifre' => $kullanici_password,
		'yetki' => 5,

	));
	  $say=$kullanicisor -> rowcount();
	if ($say==1) {
		$_SESSION['kullanici_mail']=$kullanici_mail;
		header("Location:../production/index.php?durum=yes");

	}else{
		header("Location:../production/login.php?durum=no");
	}
	
}
        //--------------------------------------Login    Bitiş 
		
		//************************************* Kullanıcı Düzenle Ayar  

if (isset($_POST['kullaniciduzenle'])) {

	// Kullanıcı düzenle den gelen get methodunun yakalanması için
	$kullanici_id=$_POST['kullanici_id'];

	$ayarkaydet=$db->prepare("UPDATE kullanici SET
		kullanici_adsoyad=:kullanici_adsoyad,
		kullanici_nickname=:kullanici_nickname,
		kullanici_unvan=:kullanici_unvan,
		kullanici_okul=:kullanici_okul,
		kullanici_mail=:kullanici_mail, 
		kullanici_password=:kullanici_password, 
		kullanici_il=:kullanici_il,
		kullanici_ilce=:kullanici_ilce,
		kullanici_gsm=:kullanici_gsm,  
		kullanici_yetki=:kullanici_yetki
		WHERE kullanici_id={$_POST['kullanici_id']}");

	$update=$ayarkaydet->execute(array(
		'kullanici_adsoyad' => $_POST['kullanici_adsoyad'],
		'kullanici_nickname' => $_POST['kullanici_nickname'],
		'kullanici_unvan' => $_POST['kullanici_unvan'],
		'kullanici_okul' => $_POST['kullanici_okul'],
		'kullanici_mail' => $_POST['kullanici_mail'], 
		'kullanici_password' => $_POST['kullanici_password'], 
		'kullanici_il' => $_POST['kullanici_il'],
		'kullanici_ilce' => $_POST['kullanici_ilce'], 
		'kullanici_gsm' => $_POST['kullanici_gsm'],  
		'kullanici_yetki' => $_POST['kullanici_yetki']
		));


	if ($update) {

		Header("Location:../production/kullaniciayar_duzenle.php?kullanici_id=$kullanici_id&durum=ok");

	} else {

		Header("Location:../production/kullaniciayar_duzenle.php?kullanici_id=$kullanici_id&durum=no");
	}

}
        // -------------------------------------- Kullanıcı Düzenle  Bitiş
		// *********** Kullanıcı Ekle Ayar 


if (isset($_POST['kullaniciekle'])) {
 


    $ayarekle=$db->prepare("INSERT INTO kullanici SET
        kullanici_adsoyad=:kullanici_adsoyad,
        kullanici_nickname=:kullanici_nickname, 
        kullanici_mail=:kullanici_mail,
        kullanici_password=:kullanici_password, 
        kullanici_yetki=:kullanici_yetki 


        ");

    $insert=$ayarekle->execute(array(
        'kullanici_adsoyad' => $_POST['kullanici_adsoyad'], 
        'kullanici_nickname' => $_POST['kullanici_nickname'], 
        'kullanici_mail' => $_POST['kullanici_mail'], 
        'kullanici_password' => $_POST['kullanici_password'],  
        'kullanici_yetki' => $_POST['kullanici_yetki'], 
        

        ));


    if ($insert) {

        Header("Location:../production/kullanici_ekle.php?durum=ok");

    } else {

        Header("Location:../production/kullanici_ekle.php?durum=no");
    }

}
		// -------------------------------------- Kullanıcı Ekle  Bitiş
		// *********** Kullanıcı Sil Ayar 

if ($_GET['kullanicisil']=="ok") {

	$sil=$db->prepare("DELETE from kullanici where kullanici_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['kullanici_id']
		));


	if ($kontrol) {


		header("location:../production/kullanici_ayar.php?sil=ok");


	} else {

		header("location:../production/kullanici_ayar.php?sil=no");

	}


}
        // -------------------------------------- Kullanıcı Sil  Bitiş

		//************************************* Genel Ayar
if (isset($_POST['genelayarkaydet'])) {
	// Veri tabanındaki veriyi ayrıştırarak seçme
	$ayarkaydet = $db->prepare("UPDATE ayar SET 
	ayar_nsurname=:ayar_nsurname, 
	ayar_linkedin=:ayar_linkedin,
	ayar_github=:ayar_github,
	ayar_mail=:ayar_mail,
	ayar_tel=:ayar_tel,
	ayar_il=:ayar_il,
	ayar_ilce=:ayar_ilce,
	ayar_adres=:ayar_adres
	WHERE ayar_id=0");
	$update = $ayarkaydet->execute(
		array(
			'ayar_nsurname' => $_POST['ayar_nsurname'],
			'ayar_linkedin' => $_POST['ayar_linkedin'], 
			'ayar_github' => $_POST['ayar_github'], 
			'ayar_mail' => $_POST['ayar_mail'], 
			'ayar_tel' => $_POST['ayar_tel'], 
			'ayar_il' => $_POST['ayar_il'], 
			'ayar_ilce' => $_POST['ayar_ilce'], 
			'ayar_adres' => $_POST['ayar_adres'], 


		)
	);
	if ($update) {
		header("Location: ../production/genelayar.php?durum=ok");
	} else {
		header("Location: ../production/genelayar.php?durum=null");
	}
}
        // --------------------------------------Genel Ayar  Bitiş  
		//************************************* Hakkımızda Ayar 
if (isset($_POST['hakkimizdaayarkaydet'])) { 

	$ayarkaydet = $db->prepare("UPDATE hakkimizda SET 
	hakkimizda_mail=:hakkimizda_mail,
	hakkimizda_tel=:hakkimizda_tel,
	hakkimizda_adres=:hakkimizda_adres,
	hakkimizda_description1=:hakkimizda_description1,
	hakkimizda_description2=:hakkimizda_description2,
	hakkimizda_description3=:hakkimizda_description3,
	hakkimizda_description4=:hakkimizda_description4 



	

	WHERE hakkimizda_id=0");
	$update = $ayarkaydet->execute(
		array(
			'hakkimizda_mail' => $_POST['hakkimizda_mail'],
			'hakkimizda_tel' => $_POST['hakkimizda_tel'],
			'hakkimizda_adres' => $_POST['hakkimizda_adres'],
			'hakkimizda_description1' => $_POST['hakkimizda_description1'],  
			'hakkimizda_description2' => $_POST['hakkimizda_description2'],  
			'hakkimizda_description3' => $_POST['hakkimizda_description3'],    
			'hakkimizda_description4' => $_POST['hakkimizda_description4'],    





		)
	);
	if ($update) {
		header("Location: ../production/hakkimizda_ayar.php?durum=ok");
	} else {
		header("Location: ../production/hakkimizda_ayar.php?durum=null");
	}
}
        // -------------------------------------- Hakkımızda  Bitiş 
 

		// *********** Deneyim Düzenle Ayar 

if (isset($_POST['deneyimduzenle'])) {

	$deneyim_id=$_POST['deneyim_id'];

	$ayarkaydet=$db->prepare("UPDATE deneyim SET
		deneyim_firma=:deneyim_firma,
        deneyim_konum=:deneyim_konum,  
		deneyim_pozisyon=:deneyim_pozisyon,  
		deneyim_tarih=:deneyim_tarih,  
		deneyim_aciklama1=:deneyim_aciklama1,  
		deneyim_aciklama2=:deneyim_aciklama2,  
		deneyim_aciklama3=:deneyim_aciklama3,  
		deneyim_aciklama4=:deneyim_aciklama4   

		WHERE deneyim_id={$_POST['deneyim_id']}");

	$update=$ayarkaydet->execute(array(
		'deneyim_firma' => $_POST['deneyim_firma'],
		'deneyim_konum' => $_POST['deneyim_konum'],
		'deneyim_pozisyon' => $_POST['deneyim_pozisyon'], 
		'deneyim_tarih' => $_POST['deneyim_tarih'], 
		'deneyim_aciklama1' => $_POST['deneyim_aciklama1'], 
		'deneyim_aciklama2' => $_POST['deneyim_aciklama2'], 
		'deneyim_aciklama3' => $_POST['deneyim_aciklama3'], 
		'deneyim_aciklama4' => $_POST['deneyim_aciklama4'],  

		));


	if ($update) {

		Header("Location:../production/deneyimayar_duzenle.php?deneyim_id=$deneyim_id&durum=ok");

	} else {

		Header("Location:../production/deneyimayar_duzenle.php?deneyim_id=$deneyim_id&durum=no");
	}

}
        // ------------------- Deneyim Düzenle Bitiş
		// *********** Deneyim Ekle Ayar 

if (isset($_POST['deneyimekle'])) {



$ayarekle=$db->prepare("INSERT INTO deneyim SET
    deneyim_firma=:deneyim_firma,
    deneyim_konum=:deneyim_konum,  
    deneyim_pozisyon=:deneyim_pozisyon, 
    deneyim_tarih=:deneyim_tarih 


    ");

$insert=$ayarekle->execute(array(
    'deneyim_firma' => $_POST['deneyim_firma'], 
    'deneyim_konum' => $_POST['deneyim_konum'], 
    'deneyim_pozisyon' => $_POST['deneyim_pozisyon'], 
    'deneyim_tarih' => $_POST['deneyim_tarih'],  
    

    ));


if ($insert) {

    Header("Location:../production/deneyim_ekle.php?durum=ok");

} else {

    Header("Location:../production/deneyim_ekle.php?durum=no");
}

}
		// -------------------------------------- Deneyim Ekle  Bitiş
		// *********** Deneyim Sil Ayar 

if ($_GET['deneyimsil']=="ok") {

	$sil=$db->prepare("DELETE from deneyim where deneyim_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['deneyim_id']
		));


	if ($kontrol) {


		header("location:../production/deneyim_ayar.php?sil=ok");


	} else {

		header("location:../production/deneyim_ayar.php?sil=no");

	}


}
        // -------------------------------------- Deneyim Sil  Bitiş
		// *********** Okul Düzenle Ayar 

if (isset($_POST['okulduzenle'])) {

	$okul_id=$_POST['okul_id'];

	$ayarkaydet=$db->prepare("UPDATE okul SET
		okul_isim=:okul_isim,
        okul_bolum=:okul_bolum,  
        okul_tarih=:okul_tarih, 
        okul_aciklama=:okul_aciklama  

		WHERE okul_id={$_POST['okul_id']}");

	$update=$ayarkaydet->execute(array(
		'okul_isim' => $_POST['okul_isim'], 
        'okul_bolum' => $_POST['okul_bolum'], 
        'okul_tarih' => $_POST['okul_tarih'], 
        'okul_aciklama' => $_POST['okul_aciklama'],  

		));


	if ($update) {

		Header("Location:../production/okulayar_duzenle.php?okul_id=$okul_id&durum=ok");

	} else {

		Header("Location:../production/okulayar_duzenle.php?okul_id=$okul_id&durum=no");
	}

}
        // ------------------- Okul Düzenle Bitiş
		// *********** Okul Ekle Ayar 

if (isset($_POST['okulekle'])) {



    $ayarekle=$db->prepare("INSERT INTO okul SET
        okul_isim=:okul_isim,
        okul_bolum=:okul_bolum,  
        okul_tarih=:okul_tarih, 
        okul_aciklama=:okul_aciklama 
    
    
        ");
    
    $insert=$ayarekle->execute(array(
        'okul_isim' => $_POST['okul_isim'], 
        'okul_bolum' => $_POST['okul_bolum'], 
        'okul_tarih' => $_POST['okul_tarih'], 
        'okul_aciklama' => $_POST['okul_aciklama'],  
        
    
        ));
    
    
    if ($insert) {
    
        Header("Location:../production/okul_ekle.php?durum=ok");
    
    } else {
    
        Header("Location:../production/okul_ekle.php?durum=no");
    }
    
    }
    	// -------------------------------------- Okul Ekle  Bitiş

		// *********** Okul Sil Ayar 

if ($_GET['okulsil']=="ok") {

	$sil=$db->prepare("DELETE from okul where okul_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['okul_id']
		));


	if ($kontrol) {


		header("location:../production/okul_ayar.php?sil=ok");


	} else {

		header("location:../production/okul_ayar.php?sil=no");

	}


}
		// -------------------------------------- Okul Sil  Bitiş
		// *********** Portfolyo Düzenle Ayar 

if (isset($_POST['portfolyoduzenle'])) {

	$portfolyo_id=$_POST['portfolyo_id'];

	$ayarkaydet=$db->prepare("UPDATE portfolyo SET
		portfolyo_name=:portfolyo_name,
        portfolyo_title=:portfolyo_title,  
        portfolyo_description=:portfolyo_description  

		WHERE portfolyo_id={$_POST['portfolyo_id']}");

	$update=$ayarkaydet->execute(array(
		'portfolyo_name' => $_POST['portfolyo_name'], 
        'portfolyo_title' => $_POST['portfolyo_title'], 
        'portfolyo_description' => $_POST['portfolyo_description'],    

		));


	if ($update) {

		Header("Location:../production/portfolyoayar_duzenle.php?portfolyo_id=$portfolyo_id&durum=ok");

	} else {

		Header("Location:../production/portfolyoayar_duzenle.php?portfolyo_id=$portfolyo_id&durum=no");
	}

}
        // ------------------- Portfolyo Düzenle Bitiş
		// *********** Portfolyo Ekle Ayar 

if (isset($_POST['portfolyoekle'])) {



    $ayarekle=$db->prepare("INSERT INTO portfolyo SET
        portfolyo_name=:portfolyo_name,
        portfolyo_title=:portfolyo_title,  
        portfolyo_description=:portfolyo_description 
    
    
        ");
    
    $insert=$ayarekle->execute(array(
        'portfolyo_name' => $_POST['portfolyo_name'], 
        'portfolyo_title' => $_POST['portfolyo_title'], 
        'portfolyo_description' => $_POST['portfolyo_description'],  
        
    
        ));
    
    
    if ($insert) {
    
        Header("Location:../production/portfolyo_ayar.php?durum=ok");
    
    } else {
    
        Header("Location:../production/portfolyo_ayar.php?durum=no");
    }
    
    }
    	// -------------------------------------- Portfolyo Ekle  Bitiş

		// *********** Portfolyo Sil Ayar 

if ($_GET['portfolyosil']=="ok") {

	$sil=$db->prepare("DELETE from portfolyo where portfolyo_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['portfolyo_id']
		));


	if ($kontrol) {


		header("location:../production/portfolyo_ayar.php?sil=ok");


	} else {

		header("location:../production/portfolyo_ayar.php?sil=no");

	}


}
		// -------------------------------------- Portfolyo Sil  Bitiş




?>
