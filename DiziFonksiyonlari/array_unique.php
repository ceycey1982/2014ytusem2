<?php
//array_unique, bir dizi içindeki aynı olan değerleri siler

$isimler = array('Orhan','Mehmet','Kemal','Zeki','Mehmet');
var_dump($isimler);

$filtrelenmis_isimler = array_unique($isimler);

echo '<br>';

var_dump($filtrelenmis_isimler);