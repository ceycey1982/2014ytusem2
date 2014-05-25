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
        //strtoupper bir metnin karakterlerini büyük harflere çevirir
        //not: küçük i harfi, büyük İ harfine dönüştürelemediğinden
        //önce küçük i harfleri ile büyük İ harfini değiştiririz
        //daha sonra strtoupper fonksiyonu çalıştırılır
        $cumle='php ile yazılım geliştirme';
        
        $yenicumle= str_replace('i', 'İ', $cumle);

        echo mb_strtoupper($yenicumle, 'utf-8');
        ?>
    </body>
</html>
