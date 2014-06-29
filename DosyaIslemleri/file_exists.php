<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // file_exists fonksiyonu kendisine verilen dosya yolunda bir dosya olup olmadığını
        // kontrol eder, geriye true ya da false döndürür
        
        if(file_exists( 'sozluk.txt' ) == true ){
            echo 'sozluk.txt dosyası bulundu.<br>';
        }else{
            echo 'sozluk.txt dosyası bulunamadı.<br>';
        }
        
        
        if(file_exists( 'iletisim.txt' ) == true ){
            echo 'iletisim.txt dosyası bulundu.<br>';
        }else{
            echo 'iletisim.txt dosyası bulunamadı.<br>';
        }
        
                
        ?>
    </body>
</html>
