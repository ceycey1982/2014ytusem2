<?php
//array_merge bir veya birden fazla diziyi birleştirir
$meyve_kutusu1 = array('elma','armut');
$meyve_kutusu2 = array('portakal','mandalina','greyfurt');
$meyve_kutusu3 = array('muz','şeftali','çilek');

$meyveler = array_merge($meyve_kutusu1,$meyve_kutusu2,$meyve_kutusu3);

var_dump($meyve_kutusu1);
echo '<br>';
var_dump($meyveler);