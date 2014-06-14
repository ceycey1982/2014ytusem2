<?php
if( isset($_POST['gonder']) ){
    
    if( $_POST['meyve'] == 0 ){
        echo 'Bir meyve seçimi yapmadınız.';
    }else{
        switch ($_POST['meyve']) {
            case 1:
                echo 'Elma seçtiniz.';
                break;
            case 2:
                echo 'Armut seçtiniz.';
                break;      
            case 3:
                echo 'Muz seçtiniz.';
                break;        
            default:
                echo 'Geçersiz seçim.';
                break;
        }
    }
    
}