<?php


/*
 *
 * Public : Her yerden erişilebilir.
 * Private : Sadece tanımlandığı sınıf tarafından erişilebilir.
 * Protected : Tanımlandığı sınıf ve bu sınıfı kalıtım yoluyla erişebilen alt sınıflar tarafından erişilebilir.
 *
 */


class Kitap
{
    // Özellikler

    public $ad="BİR SERKERİN HAYATI";
    protected $yazar = "MAHMUT SAMİ";
    private $fiyat = "FOR FREE";



}

class listele extends Kitap{
    public function get()
    {
        echo "Kitap Adı : " . $this->ad . "<br>";
        echo "Kitabın Yazarı : " . $this->yazar . "<br>";
        echo "Kitabın Fiyatı : " . $this->fiyat . "<br>";
    }
}

$php = new listele();
$php->get();