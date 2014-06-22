<?php
include_once 'fonksiyonlar.php';
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
        <?php
        if(isset( $_POST['gonder'] ) ){
            $sonuc = tarihKontrol($_POST['tarih']);
            
            if( $sonuc===false ){
                echo 'Doğum tarihi hatalı..';
            }else{
                echo 'Yaşınız: ' . yasHesapla($_POST['tarih']);
            }
        }
        ?>
    </body>
</html>
