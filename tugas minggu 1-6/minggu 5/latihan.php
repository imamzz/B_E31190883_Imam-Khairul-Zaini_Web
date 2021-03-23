<?php 

interface hitungLuas {
	public function hitungLuasPersegi();
	public function hitungLuasSegitiga();
	public function hitungLuasLingkaran();
}

class luasPersegi implements hitungLuas {
	private $sisi;
	function __construct($sisi)
	{
		$this -> sisi = $sisi;
	}

	public function hitungLuasPersegi()
	{
		$hasil= $this -> sisi * $this -> sisi;
		return $hasil;
	}

	public function hitungLuasSegitiga(){

	}

	public function hitungLuasLingkaran(){
			
	}
}

class luasSegitiga implements hitungLuas {
	private $alas;
	private $tinggi;
	function __construct($alas,$tinggi)
	{
		$this -> alas = $alas;
		$this -> tinggi = $tinggi;
	}
	public function hitungLuasPersegi(){
		}
	public function hitungLuasSegitiga()
	{
		$hasil= $this -> alas * $this -> tinggi / 2;
		return $hasil;
	}
	public function hitungLuasLingkaran(){
		
	}
}

class luasLingkaran implements hitungLuas {
	private $radius;
	private $pi=3.14;
	function __construct($radius)
	{
		$this -> radius = $radius;
	}

	public function hitungLuasPersegi(){

	}

	public function hitungLuasSegitiga(){

	}
		
	public function hitungLuasLingkaran()
	{
		$hasil= $this -> radius * $this -> radius / $this -> pi;
		return $hasil;
	}
}

$persegi = new luasPersegi(20);
$segitiga = new luasSegitiga(14,7);
$lingkaran = new luasLingkaran(30);

$luasPersegi = $persegi -> hitungLuasPersegi();
$luasSegitiga = $segitiga -> hitungLuasSegitiga();
$luasLingkaran = $lingkaran -> hitungLuasLingkaran();

echo $luasPersegi;
echo "<br>";
echo $luasSegitiga;
echo "<br>";
echo $luasLingkaran;
echo "<br>";
?>