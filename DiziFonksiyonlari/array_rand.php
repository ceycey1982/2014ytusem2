<?php
//array_rand, bir dizi içinden geriye rastgele eleman döndürür
//aşağıda bir çekiliş uygulaması örneği verilmiştir

$isimler = array('Ceyda Ural','Ferdi Tayfur','Dost Kökten','Semih Saygıner','Bahadır Öztürk');


$cekilis_sonucu = array_rand($isimler);

echo $isimler[$cekilis_sonucu];