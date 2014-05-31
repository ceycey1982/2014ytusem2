<?php
//rand fonksiyonu iki değer aralığında rastgele 
//sayı üretir

$rastgele_sayi = rand(10, 100);

echo 'Rastgele sayı: ' . $rastgele_sayi;

echo '<br>';

echo rand();

echo '<br>';

//maksimum rastgele sayıyı döndürür
echo getrandmax();