<?php
//explode fonksiyonu kendisine verilen metin ifadesini, belirtilen
//işaret ile ayırarak, geriye bir dizi değişken gönderir

$araclar='opel,renault,ford,seat,audi,toyota';
$dizi= explode(',', $araclar);

echo $dizi[2];