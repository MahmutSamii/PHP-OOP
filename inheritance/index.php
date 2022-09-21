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

class Yazilim extends Kitap{
    public function __construct(){
        echo "<br><br><br><u>Yazılım Kitapları</u><br><br>";
    }
}

class Ask extends Kitap{
    public function __construct(){
        echo "<br><br><br><u>Romantik Kitaplar</u><br><br>";
    }
}


$php = new Kitap();
$php->insert("Beyaz Diş","Jack London","85 TL");
$php->get();

$php = new Yazilim();
$php->insert("PHP","EMRAH YÜKSEL","185 TL");
$php->get();

$php = new Ask();
$php->insert("AFTER","anonim","185 TL");
$php->get();