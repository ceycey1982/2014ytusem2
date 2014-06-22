<?php
/**
 * 
 * @param integer $a Birim fiyat
 * @param integer $b Adet
 */
function tutarHesapla( $a, $b, $c=18 ){
        
    $tutar = $a * $b ;
    
    $tutar = $tutar + ( $tutar * $c / 100 ); //18% kdv ekledik
    
    $tutar = number_format($tutar, 2, ',', '.');
    $tutar = $tutar . ' TL';
    return $tutar;
}