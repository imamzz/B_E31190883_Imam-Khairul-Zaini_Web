<?php 
class laptop {
    public $pemilik;
    public $merk;

    public function hidupkan_laptop()
    {
        return "Hidupkan laptop " . $this -> merk .
			" punya " . $this -> pemilik;
    }

    public function matikan_laptop()
    {
        return "Matikan laptop " . $this -> merk .
			" punya " . $this -> pemilik;
    }

    public function restart_laptop()
    {
        return "Matikan laptop " . $this -> merk .
			" punya " . $this -> pemilik . " Hidupkan laptop " . $this -> merk . " punya " . $this -> pemilik;
    }
}

$ASUS = new laptop();
$Acer = new laptop();
$Lenovo = new laptop();

$ASUS -> merk = 'ASUS';
$Acer -> merk = "ACER";
$Lenovo -> merk = "Lenovo";

$ASUS -> pemilik = 'A.';
$Acer -> pemilik = "B.";
$Lenovo -> pemilik = "C.";

echo $ASUS -> hidupkan_laptop();
echo "<br>";
echo $Acer -> matikan_laptop();
echo "<br>";
echo $Lenovo -> restart_laptop();
?>