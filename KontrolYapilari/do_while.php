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
        $sayac=1;
        $fontBuyuklugu=10;
        $rastgeleCevrim=  rand(0, 10);
        
        do{
            echo "<p style='font-size:{$fontBuyuklugu}px'>{$sayac}. yazı.</p>\n";
            
            $sayac++;
            $fontBuyuklugu = $fontBuyuklugu + 5;
        } while ( $sayac <= $rastgeleCevrim )
        ?>
    </body>
</html>
