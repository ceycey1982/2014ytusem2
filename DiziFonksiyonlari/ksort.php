<?php
//ksort, bir diziyi anahtar değerlerine göre sıralar (A-Z)
$ogrenci = array( 'ad'=>'Kemal', 'soyad'=>'Can', 'yas'=>26, 'il'=>'Ankara' );

var_dump($ogrenci);

echo '<br> ksorttan sonra: <br>';

ksort($ogrenci);

var_dump($ogrenci);