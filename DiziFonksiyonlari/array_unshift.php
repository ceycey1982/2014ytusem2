<?php
//array_unshift bir dizinin başına yeni bir elaman ekler
$sepet = array( 'Süt', 'Browni', 'Parfüm', 'A4' );

var_dump($sepet);

echo '<br>';

array_unshift($sepet,'Farketmez');

var_dump($sepet);