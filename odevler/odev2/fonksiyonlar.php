<?php
function emailKontrol( $email ){
    if(strpos($email, '.') === false ){
        return false;
    }
    
    if(strpos($email, '@') === false ){
        return false;
    }
    
    $metinUzunlugu = strlen($email);
    $sonKarakter=  substr($email, $metinUzunlugu-1, 1);
    
    if( $sonKarakter == '.' ){
        return false;
    }
    
    return true;
}

function tarihKontrol( $tarih ){

    if( strpos( $tarih, '.', 1 ) != 2 || strpos( $tarih, '.', 3 ) != 5 )
        return false;
    
    $tarihBolumler=  explode('.', $tarih);
    if( $tarihBolumler[0] > 31 || strlen($tarihBolumler[0]) != 2)
        return false;

    if( $tarihBolumler[1] > 12 || strlen($tarihBolumler[1]) != 2)
        return false;

    
    if( $tarihBolumler[2] > date('Y') || strlen($tarihBolumler[2]) != 4)
        return false;
    
    //var_dump($tarihBolumler);
    
    return true;
}

 function yasHesapla( $tarih ){
     $tarihBolumler=  explode('.', $tarih);
     
     //25.03.1990 1. ihtimal
     //25.08.1990 2. ihtimal
     //22.06.2014
     
     $fark = date('Y') - $tarihBolumler[2];// 24 - 24
     
     $suankiAy=date('n');
     
     if( $suankiAy > (int)$tarihBolumler[1] ){
         return $fark;
     }else{
         return $fark - 1;
     }     
 }