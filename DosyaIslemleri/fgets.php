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
        //fgets fonksiyonu kendisine verilen açık dosyadan bir satır okur ve
        //imleci sonraki satırın başına götürür
        
        $dosya = fopen('sozluk.txt', 'r');
        
        $satir1 = fgets($dosya);
        
        echo $satir1 . '<br>';
        
        $satir2 = fgets($dosya);
        
        fgets($dosya);
        
        $satir4 = fgets($dosya);
        
        echo $satir4 . '<br>';
        
        fclose($dosya);
        ?>
    </body>
</html>
