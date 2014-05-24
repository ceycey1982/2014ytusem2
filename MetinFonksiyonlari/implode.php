<?php
//implode, bir dizi değişkenin elemanlarını
//istenilen bir karakter ayracı ile birleştirir ve bir metin geriye döndürür

$araclar=array('Opel','Renault','Ford','Mercedes');

echo 'Elimizdeki araçlar: ';
echo implode(', ', $araclar);