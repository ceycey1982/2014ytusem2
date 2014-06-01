<?php
// .= bir metne daha önce sakladığı metin ve yeni metni birleştirerek atama
// yapar

$ad_soyad = 'Remzi';

$ad_soyad .= ' Yıldız';

echo $ad_soyad;


echo '<br>';

// . operatorü bir veya daha fazla metin, sayı ve diğer değerleri birleştirir

$ad = 'Erhan';
$soyad = 'Kara';
$not = rand(0, 100);

echo $ad . ' ' . $soyad . ', notunuz: ' . $not;