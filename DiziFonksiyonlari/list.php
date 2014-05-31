<?php
//list fonksiyonu bir dizideki değerleri, değişkenlere aktarır
$kisi_bilgileri = array('Barack', 'Obama', 54, 'ABD');
list( $ad, $soyad, $yas, $ulke ) = $kisi_bilgileri;

echo  $ad . ' ' . $soyad;