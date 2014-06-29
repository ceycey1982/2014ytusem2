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
        // feof fonksion imlecin dosya sonunda olup olmadığını kontrol eder
        // eğer imlec dosya sonunda ise true değeri döner aksi halde false
        // değeri döner
        
        $dosya=  fopen('sozluk.txt', 'r') or die('Dosya açılamadı');
        //imleç dosya sonuna gelene kadar döngü içindeki işlem gerçekleşir
        while( feof( $dosya ) == false ){
            echo fgetc($dosya);
        }
        
        fclose($dosya);
        ?>
    </body>
</html>
