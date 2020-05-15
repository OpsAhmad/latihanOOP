<?php
//inheritance (pewarisan/penurunan)
class pesawat
{
    public $nama_pesawat;
    public $model;
    public $mesin;

    public function terbangkan()
    {
        return "Menerbangkan Pesawat $this->nama_pesawat";
    }
}

class cargo extends pesawat
{
    public function info_pesawat()
    {
        return "Nama pesawat : $this->nama_pesawat, Model: $this->model, Mesin : $this->mesin";
    }
}

$pesawat_garuda = new cargo();
$pesawat_garuda->nama_pesawat = "cargo Indonesia AirBus";
$pesawat_garuda->model = "HC-117";
$pesawat_garuda->mesin = "X3 Turbo";

echo $pesawat_garuda->terbangkan();
echo "<br>";
echo $pesawat_garuda->info_pesawat();
