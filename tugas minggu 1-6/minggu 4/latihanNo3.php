<?php

class Tablet {
	public $merk;
	private $camera;
	protected $memory='124GB';

	public function camera($kamera)
	{
		$camera=$this-> camera=$kamera;
		return "dan memiliki kualitas kamera ".$camera;
	}
}

class handphone extends Tablet
{
	private $handphone_baru;

	public function beli_handphone()
	{
		$merk=$this -> merk;
		$memory=$this -> memory;
		$handphone_baru=$this -> handphone_baru = "Beli handphone baru ".$merk." , dengan kapasitas memory ".$memory;
		return $handphone_baru;
	}
}

$beli=new handphone();
$beli-> merk='xaomi';
$camera=$beli-> camera('12 MP');
$pembelian=$beli-> beli_handphone();
echo $pembelian.' '.$camera;
?>