<?php
function tutarHesapla($tutar){
    $tutarMetni = number_format($tutar,2,',','.');//1.265,00
    $tutarMetni .= ' TL';//1.265,00 TL
    
    return $tutarMetni;
}