<?php
//in_array, bir dizi değişken içinde verilen bir değeri arar
//eğer değer mevcutsa true, mevcut değilse false değeri döndürür

$urunler = array( 'pekmez','tahin','elma','karpuz' );

$arama = 'pekmez';

if(in_array($arama, $urunler) == true ){
    echo 'Ne mutlu ki bu ürün bizde var: ' . $arama;
}else{
    echo 'Çok üzgünüz bu ürün malesef yok.' . $arama;
}

echo '<br>';

$arama = 'armut';

if(in_array($arama, $urunler) == true ){
    echo 'Ne mutlu ki bu ürün bizde var: ' . $arama;
}else{
    echo 'Çok üzgünüz bu ürün malesef yok:' . $arama;
}