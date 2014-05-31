<?php
//shuufle bir dizi değerlerini rastgele karıştırır
$muzik_listesi = array( 'Çökertme', 'Ankaranın Bağları','İki Keklik','Islak Islak','Asi ve Mavi', 'Kış Güneşi' );

var_dump($muzik_listesi);

echo '<br>';

shuffle($muzik_listesi);
echo 'Müzikler karıştırıldıktan sonra: <br>';
var_dump($muzik_listesi);
