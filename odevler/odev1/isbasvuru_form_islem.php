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
        if( isset($_POST['gonder']) ){
            $hata=null;
            
            //kural 1
            if( $_POST['ad'] == '' || mb_strlen($_POST['ad']) > 20 ){
                $hata .= 'Ad boş bırakılamaz ve 20 karakterden uzun olamaz.<br>';
            }
            
             //kural 2
            if( $_POST['soyad'] == '' || mb_strlen($_POST['soyad']) > 20 ){
                $hata .= 'Soyad boş bırakılamaz ve 20 karakterden uzun olamaz.<br>';
            }           
            
            //kural 3
            if( $_POST['eposta'] == '' || mb_strlen($_POST['eposta']) > 30 || strpos($_POST['eposta'], '@') == false || strpos($_POST['eposta'], '.') == false){
                $hata .= 'Soyad boş bırakılamaz ve 30 karakterden uzun olamaz. Ayrıca @ işareti ve . işareti içermelidir.<br>';
            }              

            //kural4
            $tarihDizi=  explode('.', $_POST['dogumtarihi']);
            if( count($tarihDizi) != 3 ){
                $hata .= 'Tarih ifadesi iki adet nokta işareti içermelidir.';
            }else{
                if( $tarihDizi[0] > 31 || $tarihDizi[0] < 1 ){
                    $hata .= 'Tarihte gün hatalı.';
                }

                if( $tarihDizi[1] > 12 || $tarihDizi[1] < 1 ){
                    $hata .= 'Tarihte ay hatalı.';
                }  


                if( $tarihDizi[2] > 1994 || $tarihDizi[2] < 1900 ){
                    $hata .= 'Tarihte yıl hatalı. 1994 doğumlulardan yukarısı kabul edilmiyor.';
                }                  
            }
                        
             //kural 5
            if( $_POST['tel'] == '' || mb_strlen($_POST['tel']) > 20 ){
                $hata .= 'Tel boş bırakılamaz ve 15 karakterden uzun olamaz.<br>';
            }             
            
            //kural 6
            $pozisyonDizi=  explode(',', $_POST['pozisyonlar']);
            if( count($pozisyonDizi) < 2 ){
                $hata .= 'Pozisyon en az iki adet olmalıdır.<br>';
            }            
            
            //hata yoksa
            if( is_null($hata) ){
                echo 'Teşekkürler, başvurunuz alınmıştır.';
            }else{
                echo 'Aşağıdaki hatalar oluştu: <br>';
                echo $hata;
            }
        }
        ?>
    </body>
</html>
