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
        function selamVer( $isim='İsimsiz' ){
            echo 'Merhaba ' . $isim . '<br>';
        }
        
        selamVer('Bahadır');
        
        selamVer('Semih');
        
        selamVer('Dünya');
        
        //Hata vermez, çünkü selamVer fonksiyonu en az bir paramtere istiyor fakat
        //vasayılan değer atanmış.
        selamVer();
        ?>
    </body>
</html>
