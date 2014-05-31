<?php
//rsort, bir dizi içindeki değerleri, alfabetik olarak tersten sıralar(Z-A)
$ogrenciler = array( 'Orhan', 'Zeki', 'Ömer', 'Ceylan', 'Gözde' );

rsort($ogrenciler);

var_dump($ogrenciler);