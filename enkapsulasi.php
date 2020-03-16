<?php
class buah {
    private $nama_buah = "jeruk";
    private $harga_buah = "Dua Puluh Ribu";

    function tampilkan_buah(){
        return "Ini buah " .$this->nama_buah;
    }
    function tampilkan_harga(){
        return "Harganya " .$this->harga_buah;
    }
}

$buah = new buah();
echo $buah->tampilkan_buah();
echo $buah->tampilkan_harga();
?>