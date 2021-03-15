<?php

class Makanan {
	
	public $nama;
	public $jenis;
	public $jumlah;
	public $mengantri;
	public $status;
		
	public function getNama()
	{
		return "Nama Makanan  : " . $this -> nama;
	}
	
	public function getJenis()
	{
		return "Jenis  : ".$this -> jenis;
	}
	
	public function getJumlah()
	{
		return "Jumlah : ".$this -> jumlah;
	}
	
    public function getMengantri()
	{
		return "Jumlah Mengantri : ".$this -> mengantri;
	}

	public function getStatus()
	{
		if ($this -> jumlah >= 1 . $this -> status = 'tersedia')$stok = "Tersedia";
		else $stok = 'Habis';
		return "$stok";
	}
	
}

$chiki = new Makanan();
$pocky = new Makanan();
$komo = new Makanan();
$sate_lontong = new Makanan();
$pizza = new Makanan();

$chiki -> nama = 'Chiki';
$chiki -> jenis = 'Makanan Ringan';
$chiki -> jumlah = 50;
$chiki -> mengantri = 0;

$pocky -> nama = 'Pocky';
$pocky -> jenis = 'Makanan Ringan';
$pocky -> jumlah = 0;
$pocky -> mengantri = 20;

$komo -> nama = 'Komo';
$komo -> jenis = 'Makanan Ringan';
$komo -> jumlah = 0;
$komo -> mengantri = 57;

$sate_lontong -> nama = 'Sate Lontong';
$sate_lontong -> jenis = 'Makanan Berat';
$sate_lontong -> jumlah = 4;
$sate_lontong -> mengantri = 0;

$rendang -> nama = 'Rendang';
$rendang -> jenis = 'Makanan Berat';
$rendang -> jumlah = 4;
$rendang -> mengantri = 0;

echo $chiki -> getNama();
echo "<br/>";
echo $chiki -> getJenis();
echo "<br/>";
echo $chiki -> getJumlah();
echo "<br/>";
echo $chiki -> getMengantri();
echo "<br/>";
echo "Status : ".$chiki -> getStatus();
echo "<br/>";
echo "<br/>";

echo $pocky -> getNama();
echo "<br/>";
echo $pocky -> getJenis();
echo "<br/>";
echo $pocky -> getJumlah();
echo "<br/>";
echo $pocky -> getMengantri();
echo "<br/>";
echo "Status : ".$pocky -> getStatus();
echo "<br/>";
echo "<br/>";

echo $komo -> getNama();
echo "<br/>";
echo $komo -> getJenis();
echo "<br/>";
echo $komo -> getJumlah();
echo "<br/>";
echo $komo -> getMengantri();
echo "<br/>";
echo "Status : ".$komo -> getStatus();
echo "<br/>";
echo "<br/>";

echo $sate_lontong -> getNama();
echo "<br/>";
echo $sate_lontong -> getJenis();
echo "<br/>";
echo $sate_lontong -> getJumlah();
echo "<br/>";
echo $sate_lontong -> getMengantri();
echo "<br/>";
echo "Status : ".$sate_lontong -> getStatus();
echo "<br/>";
echo "<br/>";

echo $rendang -> getNama();
echo "<br/>";
echo $rendang -> getJenis();
echo "<br/>";
echo $rendang -> getJumlah();
echo "<br/>";
echo $rendang -> getMengantri();
echo "<br/>";
echo "Status : ".$rendang -> getStatus();

?>
