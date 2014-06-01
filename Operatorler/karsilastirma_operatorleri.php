<?php 
// karşılaştırma operatörleri, iki değeri karşılaştırmak amacıyla kullanılır
// karşılaştırma sonucunda true veya false veri tipinde değer elde edilir

// == iki ifade eşit mi?
$sonuc = ( 5 == 6 );

var_dump($sonuc);

echo '<br>';

$x = '2';
$y = 2;

// x y'ye denk mi ( hem değer açısından hem de veri tipi açısından )?
$sonuc = ( $x === $y );
var_dump($sonuc);

echo '<br>';
$x = 'Nusret';
$y = 'Feyza';
// x y'ye eşit değildir mi?
$sonuc = ( $x != $y );
var_dump($sonuc);

echo '<br>';

$x = rand(0, 100);
echo "x değeri: $x <br>";
//x 101'e eşit veya büyük mü?
$sonuc = ( $x >= 101 );
var_dump($sonuc);