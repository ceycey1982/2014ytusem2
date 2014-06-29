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
        if( isset($_POST['kaydet']) ){

            //dosya seçildi mi? kontrol ediyoruz
            if( isset( $_FILES['ek']['name'] ) ){

                //dosya boyutu kontrol ediliyor
                if( $_FILES['ek']['size'] < 10 * 1024 * 1024 ){
                
                    $gecici_dosya = $_FILES['ek']['tmp_name'];
                    $yeni_dosya_adi = 'upload/' . $_FILES['ek']['name'];

                    $yukleme_sonucu = move_uploaded_file( $gecici_dosya,  $yeni_dosya_adi );

                    if( $yukleme_sonucu == true ){
                        echo 'Duyuru kaydedildi..';
                        echo 'Yüklenen resim: <br>';
                        echo '<img style="width:200px;" src="' . $yeni_dosya_adi . '">';
                    }
                    else
                        echo 'Ek yüklemede hata oluştu';
                }else{
                    echo 'Dosya bloyutu 10MB tan büyük olamaz';
                }
            }
        }
        ?>
    </body>
</html>
