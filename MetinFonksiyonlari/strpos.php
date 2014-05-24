<?php
//bir metin içinde başka bir metnin bulunduğu pozisyonu verir
//0 indisinden başlar

$cumle='Merhaba sevgili dünya.';

$konum=strpos($cumle,'sevgilix');

var_dump($konum);

echo '<br><br>';

$email='fake@test.com';

//eğer email değeri içinde @ işareti yoksa
if( strpos($email, '@') == true ){
    echo 'Girdiğiniz email adresi geçerli değil.';
}

