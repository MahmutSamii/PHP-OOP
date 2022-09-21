<?php


class Ekmek{
    protected $kdv;

    public function Kdv($fiyat){
        $this->kdv =0.08;
        return $this->kdv*$fiyat;
    }
}

class Mazot extends Ekmek{
    public $kdv;

    public function Kdv($fiyat){
        $this->kdv =0.18;
        return $this->kdv*$fiyat;
    }
}


$ekmek = new Ekmek();
echo "Ekmek Kdv Oranı : ".$ekmek->Kdv(10)."<br>";

$mazot = new Mazot();
echo "Mazot Kdv Oranı : ".$mazot->Kdv(10);