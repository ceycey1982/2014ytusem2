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
        $dosya = fopen("sozluk.txt", "r") or die("Dosya açılamadı!");
        echo fread($dosya, filesize("sozluk.txt") );
        fclose($dosya);
        ?>
    </body>
</html>
