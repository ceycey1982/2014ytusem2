<?php
//date fonksiyonu tarih bilgisini yazdırmak için kullanılır
//detaylı fonksiyon kullanım bilgisi için @link http://www.php.net/manual/tr/function.date.php

echo 'Tarih: ' . date('d.m.Y');

echo '<br>';

echo 'Saat: ' . date('H:i:s');

echo '<br>';

echo 'Tarih Saat: ' . date('d.m.Y H:i:s');

echo '<br>';

echo 'Haftanın günü: ' . date('l');