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
        if( isset( $_POST['gonder'] ) ){
            
            $ad = $_POST['ad'];
            $soyad = $_POST['soyad'];
            //!!!! dosyalara ulaşırken $_POST değil $_FILES kullanıyoruz
            $foto = $_FILES['foto'];
            
            
            
            echo 'Adınız: ' . $ad . '<br>';
            echo 'Soyadınız: ' . $soyad . '<br>';
            echo 'Fotoğraf dosyanızın adı: ' . $foto['name'] . '<br>';
            echo 'Fotoğraf dosyanızın tipi: ' . $foto['type'] . '<br>';  
            echo 'Fotoğraf dosyanızın boyutu: ' . $foto['size']/1024 . 'KB' .  '<br>';
            
            
            print_r( $foto ); exit;
        }
        ?>
    </body>
</html>
