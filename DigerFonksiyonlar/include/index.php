<?php
include 'inc/fonksiyonlar.php';//include ile bir dosyayı tekrar tekrar çağırabilirsiniz
//include_once 'inc/fonksiyonlar.php';//include_once ile bir dosyayo bir kez eklemiş olursunuz
?>
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
        <h1>Anasayfa</h1>
        <?php
        
        $tutar = 1265;
        
        echo tutarHesapla($tutar);
        ?>
        
        <?php
        include 'inc/menu.php';
        ?>
    </body>
</html>
