<?php
//ziyaretçinin bilgisayarına ziyaret adında bir çerez oluşturuldu
//süresi 3 dk olarak ayarlandı

//daha önce ziyaretçinin bilgisayarında ziyaret cookiesi oluşmuş mu? veya oluşmuşsa zamanı geçmiş mi?
if( isset($_COOKIE['ziyaret']) ){
    //ziyaretçinin bilgisayarındaki ziyaret sayısını bir arttırıyoruz ve ziyaretçiye
    //tekrar aynı adda fakat yeni değerde cookşe oluşturmasını sağlıyoruz
    $mevcutZiyaretSayisi=$_COOKIE['ziyaret'];
    $yeniZiyaretSayisi=$mevcutZiyaretSayisi + 1;
    setcookie( 'ziyaret', $yeniZiyaretSayisi, time()+180 );
}else{ //
    setcookie( 'ziyaret', 1, time()+180 );
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
        <?php
        echo 'Merhaba son 3 dakika içindeki ziyaret sayınız : ' . $_COOKIE['ziyaret'];
        ?>
    </body>
</html>
