<?php
$meyveler = array( 
    array('ad'=>'elma','birimfiyat'=>200,'stokadedi'=>100000),
    array('ad'=>'armut','birimfiyat'=>220,'stokadedi'=>10000),
    array('ad'=>'muz','birimfiyat'=>180,'stokadedi'=>200000),
);

$ogrenci1 = array( 'ad'=>'Orhan', 'soyad'=>'Gencebay', 'yas'=>60, 'yil'=>2010 );

$ogrenci2 = array( 'ad'=>'Müslüm', 'soyad'=>'Gürses', 'yas'=>65, 'yil'=>2008 );

echo $ogrenci2['yil'];
echo $ogrenci1['soyad'];

echo '<br>';

echo $meyveler[1]['stokadedi'];