<?php

class Mobil {

    // public property
    public string $merk;

    // protected property
    protected string $warna;

    // private property
    private float $harga;

    // constructor
    public function __construct(
        string $merk,
        string $warna,
        float $harga
    ) {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->harga = $harga;
    }

    // public method
    public function tampilkanInfo(): void {
        echo "Merk  : {$this->merk}<br>";
        echo "Warna : {$this->warna}<br>";
        echo "Harga : Rp " . number_format($this->harga, 0, ',', '.') . "<br>";
    }

    // public method untuk mengakses protected property
    public function getWarna(): string {
        return $this->warna;
    }

    // public method untuk mengakses private propertys
    public function getHarga(): float {
        return $this->harga;
    }
}


// membuat object
$mobil1 = new Mobil(
    "Toyota",
    "Hitam",
    250000000
);


// mengakses public property
echo "Merk : " . $mobil1->merk . "<br>";

// mengakses protected property melalui method
echo "Warna : " . $mobil1->getWarna() . "<br>";

// mengakses private property melalui method
echo "Harga : Rp " . number_format($mobil1->getHarga(), 0, ',', '.') . "<br>";

echo "<br>";

// menjalankan method
$mobil1->tampilkanInfo();

?>