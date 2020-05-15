<?php
class pesawat
{
    var $nama_pesawat;
    var $jumlah_kursi;
    var $total_omset;

    function __construct($omset)
    {
        $this->total_omset = $omset;
    }

    function laporan_omset($tarif, $jumlah_kursi = 1)
    {
        $this->total_omset *= $tarif * $jumlah_kursi;
    }

    function __destruct()
    {
        echo "Total omset";
        echo $this->total_omset;
    }
}

$pesawat_garuda = new pesawat(500);

echo "tarif per kursi ";
echo $pesawat_garuda->total_omset;
echo "<br>";

$pesawat_garuda->laporan_omset(10);
