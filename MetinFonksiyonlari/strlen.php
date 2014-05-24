<?php
//strlen fonksiyonu kendisine verilen metin parametresinin uzunluğunu verir
//boşluklar dahil

$cumle='Zayıflamak için 11 yıl boyunca bitki çayları tüketti.';

//cümle uzunluğu
echo strlen($cumle);
echo '<br>';

if(strlen($cumle) > 40 ){
    echo 'Uyarı: Cümle 40 karakterden uzun.';
}