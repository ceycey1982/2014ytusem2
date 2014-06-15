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
        function alanHesapla( $genislik, $yukseklik ){
            return $genislik * $yukseklik . ' metre';
        }
        
        echo '100 metre eninde, 125 metre boyunda bir tarlanın alanı:<br>';
        echo alanHesapla(100, 125);
        ?>
    </body>
</html>
