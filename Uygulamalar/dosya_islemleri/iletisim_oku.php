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
        $dosya = fopen('iletisim.txt', 'r');
        
        $sira = 1;
        while ( feof( $dosya ) == false ){
           
            $mesaj = fgets($dosya);
            
            if( !empty( $mesaj ) )
            {
                echo $sira . '. mesaj: <br> ';
                $mesajDizi = explode(',', $mesaj);
                echo 'Ad: ' . $mesajDizi[0] . '<br>';
                echo 'Soyad: ' . $mesajDizi[1] . '<br>';
                echo 'Tel: ' . $mesajDizi[2] . '<br>';
                echo 'Mesaj: ' . $mesajDizi[3] . '<br>';
                echo 'Tarih: ' . $mesajDizi[4] . '<br>';

                echo '------------------------<br>';
                $sira++;
            }
        }
        
        fclose($dosya);
        ?>
    </body>
</html>
