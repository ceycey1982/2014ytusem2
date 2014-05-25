<?php
//strlen fonksiyonu kendisine verilen metin parametresinin uzunluğunu verir
//boşluklar dahil
//ingiliz alfabesinde bulunmayan karakterleri içeren metinlerin
//uzunluğu bulnurken mb_strlen( $cumle, 'utf-8' ) biçiminde kullanılmaılıdı

$cumle='Zayıflamak için 11 yıl boyunca bitki çayları tüketti.';

//cümle uzunluğu
echo strlen($cumle);
echo '<br>';

if( strlen($cumle) > 40 ){
    echo 'Uyarı: Cümle 40 karakterden uzun.';
}