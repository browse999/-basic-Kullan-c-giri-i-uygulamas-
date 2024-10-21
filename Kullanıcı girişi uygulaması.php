<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


<?php



// if uygulama örneği  kullanıcı giriş uygulaması


// koşullarda AND veya OR koşulları kullanılır


$kadi ="enes";
$pass = "123456";


  $kullanici_ad = $_POST['kullanici_ad'];
 $kullanici_password = $_POST['kullanici_password'];


// POST değişkene atanmak yerine $_POST['kullanici_ad']==$kadi   OR  $_POST['kullanici_password']==$pass şeklinde de kullanılabilir.

 
if($kullanici_ad==$kadi OR $kullanici_password==$pass) {

	echo "Giriş başarılı";
} else{

	echo "Başarısız giriş denemesi";
}

  ?>

<br>
<hr>



<h3> Kullanıcı girişi</h3>

<form action="" method="POST">
	
	Kullanıcı Adı<input type="text" name="kullanici_ad" placeholder="Kullanıcı adını giriniz">

	Şifre   <input type="password" name="kullanici_password" placeholder="Şifrenizi giriniz">

	<button type="submit"> Giriş yap</button>
</form>
  







</body>
</html>