<?php

class Mobil {

    // property public
    public string $merk;

    // property protected
    protected string $warna;

    // property private
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

    // method public
    public function nyalakanMesin(): void {
        echo "Mesin mobil {$this->merk} dinyalakan.<br>";
    }

    // method protected
    protected function tampilkanWarna(): void {
        echo "Warna mobil : {$this->warna}<br>";
    }

    // method public
    public function tampilkanInfo(): void {
        echo "Merk  : {$this->merk}<br>";
        $this->tampilkanWarna();
        echo "Harga : Rp " . number_format($this->harga, 0, ',', '.') . "<br>";
    }
}


class MobilSport extends Mobil {

    // property tambahan khusus child class
    public int $kecepatanMaksimal;

    // constructor child
    public function __construct(
        string $merk,
        string $warna,
        float $harga,
        int $kecepatanMaksimal
    ) {
        parent::__construct($merk, $warna, $harga);

        $this->kecepatanMaksimal = $kecepatanMaksimal;
    }

    // method tambahan khusus child class
    public function modeSport(): void {
        echo "Mode Sport diaktifkan.<br>";
        echo "Kecepatan maksimal : {$this->kecepatanMaksimal} km/jam<br>";
    }

    // overriding method parent
    public function nyalakanMesin(): void {
        echo "Mesin mobil sport {$this->merk} dinyalakan dengan performa tinggi.<br>";
    }
}



$mobilSport1 = new MobilSport(
    "Ferrari",
    "Merah",
    5000000000,
    340
);



echo "<h3>Informasi Mobil Sport</h3>";

echo "Merk : {$mobilSport1->merk}<br>";

$mobilSport1->tampilkanInfo();


// method hasil overriding
$mobilSport1->nyalakanMesin();


// method khusus child class
$mobilSport1->modeSport();

?>