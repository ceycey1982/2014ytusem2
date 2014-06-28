<?php
function girisKontrol(){
    session_start();

    //eğer girisBasarili session anahtarı tanımlı dğeilse veya tanımlı ama değeri 1
    //değilse ziyaretçi sayfayı görememeli
    if( !isset($_SESSION['girisBasarili']) || $_SESSION['girisBasarili']!=1 ){
        header( 'Location: giris.php' );
        exit;
    }
}