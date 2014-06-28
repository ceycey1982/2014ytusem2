<?php
//php sayfalarında session/oturum işlemleri yapabilmek için srssion_start() 
//fonksiyonunu sayfanın en üstünde çalıştırmak gerekmektedir.
session_start();

//yeni bir sessin/oturum anahtarı oluşturuluyor ve değer atanıyor
if( isset( $_SESSION['sayfagoruntulemesayisi'] ) == true ){
    //sayfalara ilk kez girilmiyorsa, görüntüleme sayısını bir arttırıyoruz
    $_SESSION['sayfagoruntulemesayisi']++;    
}else{
    //ilk defa sayfaya giriliyorsa ilk değer olarak 1 değeri aktarılıyor
    $_SESSION['sayfagoruntulemesayisi']=1;
}
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
        <h1>Hakkımızda</h1>
        <?php
        include_once './inc/menu.php';
        
        echo 'Toplam sayfa görüntüleme sayısı: ' . $_SESSION['sayfagoruntulemesayisi'];        
        ?>
    </body>
</html>
