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

    // constructor
    public function __construct(
        string $merk,
        string $warna,
        int $tahun,
        float $harga
    ) {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->tahun = $tahun;
        $this->harga = $harga;
        $this->mesinHidup = false;

        echo "Object mobil {$this->merk} berhasil dibuat.<br>";
    }

    // method
    public function nyalakanMesin(): void {
        $this->mesinHidup = true;
        echo "Mesin {$this->merk} dinyalakan.<br>";
    }

    public function tampilkanInfo(): void {
        echo "Merk        : {$this->merk}<br>";
        echo "Warna       : {$this->warna}<br>";
        echo "Tahun       : {$this->tahun}<br>";
        echo "Harga       : Rp " . number_format($this->harga, 0, ',', '.') . "<br>";
        echo "Mesin Hidup : " . ($this->mesinHidup ? "Ya" : "Tidak") . "<br>";
        echo "Jenis       : " . self::JENIS . "<br>";
    }

    // destructor
    public function __destruct() {
        echo "Object mobil {$this->merk} telah dihapus.<br>";
    }
}


// membuat object pertama
$mobil1 = new Mobil(
    "Toyota",
    "Hitam",
    2025,
    250000000
);


// membuat object kedua
$mobil2 = new Mobil(
    "Honda",
    "Putih",
    2024,
    220000000
);


// menampilkan informasi
echo "<h3>Mobil 1</h3>";
$mobil1->tampilkanInfo();
$mobil1->nyalakanMesin();

echo "<h3>Mobil 2</h3>";
$mobil2->tampilkanInfo();
$mobil2->nyalakanMesin();

?>