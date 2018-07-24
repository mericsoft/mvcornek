<!DOCTYPE HTML>
<html>
<head>
	<title>mvc örnek - mericsoft</title>
	<meta charset="utf-8">
	<meta name="description" content="">
	<link rel="stylesheet" href="">
	<link rel="icon" href="">
	<script src=""></script>
	
</head>
<body>
	<?php 
	include_once "controller/controller.php";
	/* burada controller katmanı ile haberleşiriz, yönetici o çünkü */
	$kitap=new Controller("Sis ve Gece,Kar,Huzur "); //ilk kitaplarımız oluştu,model katmanında virgülü şart koşmuştuk
	$kitap->kontrolEt(); //controller sınıfımızda kontrol eden fonksionu çağırdık
	?>
</body>
</html>