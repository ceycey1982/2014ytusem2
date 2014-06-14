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
        
        for ($sayac=1, $fontBuyuklugu=10; $sayac <= 10; $sayac++, $fontBuyuklugu += 5 ){
            echo "<p style='font-size:{$fontBuyuklugu}px'>{$sayac}. yazı.</p>\n";
        }
        
        ?>
    </body>
</html>
