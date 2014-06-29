<?php
$beniHatirlaVarmi = isset($_COOKIE['benihatirla']) && $_COOKIE['benihatirla']==1 ? true : false ;
$girisCokkieVarmi = isset($_COOKIE['giris']) && $_COOKIE['giris'] == 1 ? true : false;

if( $beniHatirlaVarmi == false && $girisCokkieVarmi == false ){
    echo 'Yetkisiz giriş.';
    exit;
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
        <h1>Özel sayfaya hoşgeldiniz.</h1>
        <?php
        // put your code here
        ?>
    </body>
</html>
