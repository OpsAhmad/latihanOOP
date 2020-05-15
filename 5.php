<?php
//encapsulation

class pesawat
{
    public $nama_pesawat;
    public $model;
    protected $mesin;
    private $tahun_pembuatan;

    public function terbangkan()
    {
        return "Menerbangkan Pesawat $this->nama_pesawat";
    }
}

class cargo extends pesawat
{
    public function info_pesawat()
    {
        $this->mesin = "X3 Turbo";
        return "Nama pesawat : $this->nama_pesawat, Model : $this->model, Mesin : $this->mesin";
    }

    public function tahun_pembuatan()
    {
        return "Tahun_pembuatan : $this->tahun_pembuatan";
    }
}

$pesawat_garuda = new cargo();
$pesawat_garuda->nama_pesawat = "Garuda Indonesia";
$pesawat_garuda->model = "Airbus H-7";

echo $pesawat_garuda->terbangkan();
echo "<br>";
echo $pesawat_garuda->info_pesawat();
echo "<br>";
echo $pesawat_garuda->tahun_pembuatan();
