<?php
if( isset($_POST['gonder']) ){
    
    if( $_POST['sehir'] == 0 ){
        echo 'Bir şehir seçimi yapmadınız.';
    }else{
        switch ($_POST['sehir']) {
            case 1:
                echo 'Mamak, Çankaya, Etimesgut';
                break;
            case 2:
                echo 'Kadıköy, Beşiktaş, Ümraniye';
                break;      
            case 3:
                echo 'Bornova, Karşıyaka, Seferihisar';
                break;        
            default:
                echo 'Geçersiz seçim.';
                break;
        }
    }
    
}