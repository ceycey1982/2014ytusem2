<?php
session_start();

//giriş formundan veriler geldi mi?
if( isset( $_POST['gonder'] ) ){
    //Kullanıcı adı ve şifre geçerliyse
    if( $_POST['kullanici_adi'] == 'ayakkabi' && $_POST['sifre']=='123456' )
    {
        $_SESSION['girisBasarili']=1;
        header( 'Location: index.php' );
        exit;
    }
    else
    {
        echo 'Kullanıcı adı veya şifreniz yanlış';
    }
}