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
        function selamVer( $isim ){
            echo 'Merhaba ' . $isim . '<br>';
        }
        
        selamVer('Bahadır');
        
        selamVer('Semih');
        
        selamVer('Dünya');
        
        //hata verir, çünkü selamVer fonksiyonu en az bir paramtere istiyor
        selamVer();
        ?>
    </body>
</html>
