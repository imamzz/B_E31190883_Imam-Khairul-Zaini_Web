<?php 

class kalkulator{
    private $angka1 = '15';
    private $angka2 = '3';
    private $angka3 = '5';

    public function tambah()
    {
        $hasil = $this->angka1 + $this->angka2 + $this->angka3;
        return $hasil;
    }
    
    public function kurang()
    {
        $hasil = $this->angka1 - $this->angka2 - $this->angka3;
        return $hasil;
    }

    public function bagi()
    {
        $hasil = $this->angka1 / $this->angka2 / $this->angka3;
        return $hasil;
    }

    public function kali()
    {
        $hasil = $this->angka1 * $this->angka2 * $this->angka3;
        return $hasil;
    }
} 

$hasilKalkulator = new kalkulator();

echo "Hasil tambah kalkulator = " . $hasilKalkulator->tambah();
echo "<br>";
echo "Hasil kurang kalkulator = " . $hasilKalkulator->kurang();
echo "<br>";
echo "Hasil bagi kalkulator = " . $hasilKalkulator->bagi();
echo "<br>";
echo "Hasil kali kalkulator = " . $hasilKalkulator->kali();
echo "<br>";

?>