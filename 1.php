<?php

class pesawat
{
    var $nama_pesawat;
    var $jumlah_kursi;

    function pesan_kursi($tarif, $jumlah_penumpang = 1)
    {
        $this->jumlah_kursi -= $tarif * $jumlah_penumpang;
    }
}

$pesawat_garuda = new pesawat();
$pesawat_garuda->jumlah_kursi = 100;

$pesawat_lion = new pesawat();
$pesawat_lion->jumlah_kursi = 110;

echo "jumlah kursi pesawat garuda ";
echo $pesawat_garuda->jumlah_kursi;
echo "<br>";

$pesawat_garuda->pesan_kursi(10);

echo "jumlah kursi pesawat garuda sekarang ";
echo $pesawat_garuda->jumlah_kursi;
echo "<br>";

$pesawat_garuda->pesan_kursi(4, 2);


echo "jumlah kursi pesawat garuda sekarang ";
echo $pesawat_garuda->jumlah_kursi;
