<?php
$x = 5;
$y = 3;
$z = 6;

// && operatoru sağındaki ve solundaki karşılaştırmaların her ikisi de
// true olursa true döndürür
// herhangi birisi false olduğunda geriye false döndürür
$sonuc = ( $x == $y && $z == 6 );
var_dump($sonuc); //false
echo '<br>';

$sonuc = ( $x != $y && $z < 6 );
var_dump($sonuc); //false
echo '<br>';

$sonuc = ( $x != $y && $z > $x );
var_dump($sonuc);//true
echo '<br>';

// || operatoru sağındaki ve solundaki karşılaştırmaların herhangbirisi
// true olursa true döndürür
// iki taraf da false olduğunda geriye false döndürür
$sonuc = ( $x == $y || $z == 7 );
var_dump($sonuc); //false
echo '<br>';

$sonuc = ( $x != $y || $z < 6 );
var_dump($sonuc); //true
echo '<br>';

$sonuc = ( $x < $y || $z > $x );
var_dump($sonuc);//true
echo '<br>';