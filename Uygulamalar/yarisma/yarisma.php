<?php
session_start();

if( isset($_POST['gonder']) )
{
    $_SESSION['ad']=$_POST['ad'];
}

if( !isset( $_SESSION['sorular'] ) )
{
    $_SESSION['sorular']=array( 
            'Sefiller kitabının yazarı kimdir?',
            'İlk cumhurbaşkanımızın adı nedir?',
            'Penguenler hangi kutupta yaşar?',
            'Altının periyodik cetveldeki kısaltması nedir?',
            'Azerbaycanın başkenti nedir?'
        );
}
//sıradaki soruyu alıyoruz, sorular dizisindeki ilk eleman
$siradakiSoru=$_SESSION['sorular'][0];
//array_shift bir dizideki ilk elemanı siler. Biz de sorulan ilk sıradaki soruyu
//diziden siliyoruz
array_shift($_SESSION['sorular']);


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
        echo 'Sayın :' . $_SESSION['ad'] . '<br>';
        echo 'Toplam soru sayısı 5 <br>';
        echo 'Kalan soru sayısı: ' . ( count($_SESSION['sorular']) ) . '<br>';
        echo '<h1>' . $siradakiSoru . '</h1>';
        ?>
        
        <?php
        if( count($_SESSION['sorular']) != 0 )
        {
        ?>
            <a href="yarisma.php">Sonraki soru >></a>
        <?php 
        }
        else
        {            
        ?>
            <a href="yarisma_sonuc.php">Yarışmayı bitir</a>
        <?php
        }
        ?>
    </body>
</html>
