<?php  
//aşağıdaki satırda hangi hata çeşitlerini ekrana yazdırıp yazdırmayacağımızı belirtiyoruz
//error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

//E_ERROR tipinde hata oluşur ve çalışmayı durdurur
//echo tutarHesapla();

//E_WARNING tipinde hata verir ama çalışmayı durdurmaz
//echo 52/0;

//E_NOTICE tipinde hata oluşturur ve çalışmaya devam eder
//echo $alibaba;

//E_PARSE tipinde hata verir ve çalışmayı durdurur
//if( 4 > 7 ){ echo '4 7den büyüktür' }

echo 'Buraya geldi..';

var_dump($_POST['gonder']);

if(isset($_POST['gonder'])){ 
    //exit('buraya geldi mi?2');
    $ad= $_POST['ad'];
    $soyad= $_POST['soyad'];
    $sehir= $_POST['sehir'];
    
    echo 'mail gönderildi..';
}