<?php

class KurucuYikici{
    public function __construct(){
        echo "Başladı..";
    }

    public function __destruct(){
        echo "Bitti..";
    }
}

$yikici = new KurucuYikici();

