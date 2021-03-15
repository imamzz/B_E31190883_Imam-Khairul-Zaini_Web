<?php

class Item{
	private $item;

	public function Ukuran($item)
	{
		$ukuran = $this -> item = $item;
		return "Ukuran : ".$ukuran."<br>";
	}

	public function Warna($item)
	{
		$warna = $this -> item = $item;
		return "Warna : ".$warna."<br>";
	}

	public function Jenis($item)
	{
		$Jenis = $this -> item = $item;
		return "Jenis : ".$Jenis."<br>";
	}
}

class Topi extends item	{
	private $model='Songkok';
	public function modelTopi()
	{
		$model= $this -> model;
		return "Model : ".$model."<br>";
	}
}

class Celana extends item{
	private $tipe='Pendek';
	private $model='Chino';
		public function tipeCelana()
	{
		$tipe= $this -> tipe;
		return "Model : ".$tipe."<br>";
	}
	public function modelCelana()
	{
		$model= $this -> model;
		return "Model : ".$model."<br>";
	}
}

class Baju extends item{
	private $tipe="Baju";
	public function Tipebaju()
	{
		$tipe= $this -> tipe;
		return "Model : ".$tipe."<br>";
	}
}

$Topi = new Topi();
$Celana = new Topi();
$Baju = new Baju();

$baju = $Baju-> Tipebaju();
$jenis = $Baju-> Jenis('Parka');
$warna = $Baju-> Warna('Hijau');
$ukuran = $Baju-> Ukuran('L');

echo "<h3>Baju </h3>";
echo $baju;
echo $jenis;
echo $warna;
echo $ukuran;
?>
