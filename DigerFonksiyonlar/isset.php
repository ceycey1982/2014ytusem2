<?php
//isset fonksiyonu, bir değişkene değer atanıp atanmadığını
// ve null olmadığını kontrol eder
//yani bir değişken, içinde bir değer saklıyorsa ve null değilse bu fonksiyondan
//geriye true değeri döner


$olmayan_sayi = null;

//$olmayan_sayi adında bir değişkene değer atanmış mı ve null değil mi?
if( isset( $olmayan_sayi ) )
    echo '$olmayan_sayi adında bir değişken var';

