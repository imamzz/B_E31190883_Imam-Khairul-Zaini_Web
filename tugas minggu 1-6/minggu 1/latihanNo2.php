<?php 
// Declare class
class kendaraan {
	// prropreties
	public $jenis_kendaraan;
    public $jumlah_roda;
	public $merk;
    public $bahan_bakar;
    public $harga;
    public $tahun_pembuatan;

    public function subsidi()
    {
        if ($this->bahan_bakar=="Premium" && $this->tahun_pembuatan<2005 ){
            return  "Ya";
        }else{
            return "Tidak";
        }
    }

}
    $kendaraan1 = new kendaraan();
        
    $kendaraan1 -> jenis_kendaraan = 'Mobil';
    $kendaraan1 -> jumlah_roda = '4';
	$kendaraan1 -> merk = 'Honda';
    $kendaraan1 -> bahan_bakar = 'Premium';
    $kendaraan1 -> harga = '50000000';
    $kendaraan1 -> tahun_pembuatan = '2004';

    echo "Kendaraan 1";
    echo "<br />";
    echo $kendaraan1->subsidi();

 ?>