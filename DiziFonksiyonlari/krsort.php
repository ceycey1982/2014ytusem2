<?php
//krsort, bir diziyi anahtar değerlerine göre azalan biçimde sıralar (Z-A)
$ogrenci = array( 'ad'=>'Kemal', 'soyad'=>'Can', 'yas'=>26, 'il'=>'Ankara' );

var_dump($ogrenci);

echo '<br> krsorttan sonra: <br>';

krsort($ogrenci);

var_dump($ogrenci);