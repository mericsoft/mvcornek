<?php 
/**
*  kullancıdan  gelen istekleri kontrol edeceğiz
	modelde işleyip view ile bastıracağız

*/
include_once "model/model.php"; //modeli çektik
include_once "view/view.php"; //görüntü katmanını çektik sonuçları yazdıracağız

class Controller
{
	
	private $modelYarat; //yeni bir model yaratacağız
	public function __construct ($modelden)
	{
		$this->modelYarat=new Model($modelden); //modelimiz oluştu modelden değişkeni kullanıcıdan geelecek
	}

	public function kontrolEt(){
		if(isset($_REQUEST["kitapekle"])){ //eğer gelen istek (post/get) kitapekleise
			$this->modelYarat->kitapEkle($_REQUEST["kitapekle"]); //var olan kitaba ekletiyoruz
			mesaj($_REQUEST["kitapekle"]." isimli kitap eklendi "); //bu fonksiyon view katmanında olacak

		}else if(isset($_REQUEST["kitapsil"])){ //listeden bir adet kitap siliyoruz bu da keyfi bir fonksiyon
			$this->modelYarat->kitapSil();
			mesaj("1 adet kitap silindi ");
		}
		kitapListe($this->modelYarat->kitap); // bir request olsun veya olmasın her kitaplar basılacak bu da view katmanında var
	}

}