<?php 
class Model
{
	public $kitap; //kitap veritabanımız bu , boş yaratacağız, $listeyi explode ile bu katara(array) çevireceğiz
	public $liste; //bu listede virgüllü ifadeler olacak $kitap'a döndüreceğiz
	
	public function __construct($liste)
	{
		$this->liste=$liste;
		$this->kitap=explode(",",$liste); //böylece kitap katarımız oluştu

	}

	public function kitapEkle($ekle){
		array_push($this->kitap, $ekle); // bu keyfi bir fonksiyon, kitaplarımıza ekle yapacağız
	}

	public function kitapSil(){
		array_pop($this->kitap); //katarımızdan bir adet kitap silecek
	}

}
