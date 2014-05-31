<?php
header('Content-Type: text/html; charset=utf-8');
//array_push ile bir dizi değişkenin sonuna yeni bir eleman ekleyebilirsiniz.

$hirdavat_listesi = array('kontrplak','testere','çekiç');

var_dump($hirdavat_listesi);

array_push($hirdavat_listesi, 'zımpara');

echo '<br>';

var_dump($hirdavat_listesi);