<?php

class Mobil {

    // property class mobil
    public string $merk;
    public string $warna;
    public int $tahun;
    public float $harga;
    public bool $mesinHidup;

    // constant class mobil
    public const JENIS = 'Kendaraan';

    // method class mobil
    public function nyalakanMesin(): void {
        $this->mesinHidup = true;
        echo "Mesin mobil {$this->merk} dinyalakan.<br>";
    }

    public function matikanMesin(): void {
        $this->mesinHidup = false;
        echo "Mesin mobil {$this->merk} dimatikan.<br>";
    }

    public function tampilkanInfo(): void {
        echo "Merk        : {$this->merk}<br>";
        echo "Warna       : {$this->warna}<br>";
        echo "Tahun       : {$this->tahun}<br>";
        echo "Harga       : Rp " . number_format($this->harga, 0, ',', '.') . "<br>";
        echo "Mesin Hidup : " . ($this->mesinHidup ? "Ya" : "Tidak") . "<br>";
        echo "Jenis       : " . self::JENIS . "<br>";
    }
}


// object pertama
$mobil1 = new Mobil();

$mobil1->merk = "Toyota";
$mobil1->warna = "Hitam";
$mobil1->tahun = 2025;
$mobil1->harga = 250000000;
$mobil1->mesinHidup = false;


// object kedua
$mobil2 = new Mobil();

$mobil2->merk = "Honda";
$mobil2->warna = "Putih";
$mobil2->tahun = 2024;
$mobil2->harga = 220000000;
$mobil2->mesinHidup = false;


// menjalankan method object pertama
echo "<h3>Mobil 1</h3>";
$mobil1->tampilkanInfo();

$mobil1->nyalakanMesin();


// menjalankan method object kedua
echo "<h3>Mobil 2</h3>";
$mobil2->tampilkanInfo();

$mobil2->nyalakanMesin();

?>
