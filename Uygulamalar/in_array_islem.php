<?php
if( isset( $_POST['ara'] ) ){
    
    $urunler = array( 'Klavye', 'Fare', 'Monitör', 'Laptop', 'Yazıcı' );
    
    if( in_array( $_POST['arama'], $urunler) == true ){
        echo 'Ürün bulundu.';
    }else{
        echo 'Ürün mevcut değil.';
    }
}
