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

echo $chiki -> getNama();
echo "<br/>";
echo $chiki -> getJenis();
echo "<br/>";
echo $chiki -> getJumlah();
echo "<br/>";
echo $chiki -> getMengantri();
echo "<br/>";
echo "Status : ".$chiki -> getStatus();

?>