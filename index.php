<?php

class Kitap
{
    // Özellikler

    public $ad, $yazar, $fiyat;

    public function insert($ad, $yazar, $fiyat)
    {
        $this->ad = $ad;
        $this->yazar = $yazar;
        $this->fiyat = $fiyat;
    }

    public function get(){
        echo "Kitap Adı : ".$this->ad."<br>";
        echo "Kitabın Yazarı : ".$this->yazar."<br>";
        echo "Kitabın Fiyatı : ".$this->fiyat."<br>";
    }
}

$php = new Kitap();
$php->insert("Beyaz Diş","Jack London","85 TL");
$php->get();