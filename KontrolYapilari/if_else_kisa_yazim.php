<?php
// if else kısa yazımında koşul önce yazılır ardından ? ifadesi yazılır.
// ? ifadesinden hemen sonra koşulun gerçekleşmesi durumunda uygulanacak kod yazılır
// aksi durumda : işaretinden sonraki işlem gerçekleştirilir.

$not = rand(0,100);

echo 'Notunuz: ' . $not . '<br>';

if( $not > 60 ){
    echo 'Sertifika alabilirsiniz.';
}else{
    echo 'Üzgünüz, sertifika alamayacaksınız.';
}

//bir fonksiyona göndeirlebilir
echo $not > 60 ? 'Sertifika alabilirsiniz.' : 'Üzgünüz, sertifika alamayacaksınız.';

//atama işlemi yapılabilir
$sonuc = $not > 60 ? 'Geçti' : 'Kaldı';