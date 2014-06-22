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
        include 'fonksiyonlar.php';
        
        $birimFiyat=40;
        $adet=13;

        
        echo 'Vergi dahil toplam borcunuz: ';
        echo tutarHesapla( $birimFiyat, $adet, 10 );
        ?>
    </body>
</html>
