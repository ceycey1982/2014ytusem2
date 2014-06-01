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
        //form gönderildi mi? bunun için formda yer alan gönder butonu kontrol 
        //ediliyor
        if( isset( $_POST['gonder'] ) ){
            echo  'Sayın: ' . $_POST['ad'] . ' ' . $_POST['soyad'];
            echo '<br>';
            
            if( $_POST['yas'] > 30 ){
                echo 'Yaşınız 30dan büyük olduğu için iş başvurusu yapamazsınız';
            }elseif( in_array($_POST['il'], array('İstanbul','İSTANBUL','istanbul')) == false ){
                echo 'Sadece İstanbul ilinden başvuru kabul ediyoruz.';
            }else{
                echo 'İş başvurusu için uygunsunuz, tebrikler!';
            }
        }
        ?>
    </body>
</html>
