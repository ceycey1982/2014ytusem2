<?php
/**
 * Meyve adında bir sınıf oluşturuluyor.
 * 
 */
class Meyve{
    public $ad;
    public $adet;
    public $kgFiyat=2;
    
    public function fiyatHesapla($kg){
        return $this->kgFiyat * $kg;
    }
}

//elma nesnesi Meyve sınıfından oluşturuldu. 
$Elma = new Meyve();

echo $Elma->fiyatHesapla(39) . ' TL';