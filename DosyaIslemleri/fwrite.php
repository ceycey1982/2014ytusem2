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
        $dosya = fopen("yenidosya1.txt", "w") or die("Dosya açılamadı!");
        $txt = "Mahsuz Kırmızıgül\n";
        fwrite( $dosya, $txt);
        $txt = "Hakkı Bulut\n";
        fwrite( $dosya, $txt);
        fclose($dosya);
        ?>
    </body>
</html>
