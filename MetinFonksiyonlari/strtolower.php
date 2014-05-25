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
        //strtolower bir metnin karakterlerini küçük harflere çevirir
        $cumle='PHP İLE YAZILIM GELİŞTİRME';
        echo mb_strtolower($cumle, 'utf-8');
        ?>
    </body>
</html>
