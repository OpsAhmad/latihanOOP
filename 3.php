<?php

class pesawat
{
    var $nama_pesawat;
    var $jumlah_kursi;

    function __construct($kursi)
    {
        $this->jumlah_kursi = $kursi;
    }

    function pesan_kursi($tarif, $jumlah_penumpang = 1)
    {
        $this->jumlah_kursi -= $tarif * $jumlah_penumpang;
    }

    function __destruct()
    {
        echo "jumlah kursi sekarang ";
        echo $this->jumlah_kursi;
    }
}

$pesawat_garuda = new pesawat(100);

echo "jumlah kursi ";
echo $pesawat_garuda->jumlah_kursi;
echo "<br>";

$pesawat_garuda->pesan_kursi(9);
