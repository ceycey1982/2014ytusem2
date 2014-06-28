<?php
session_start();

//girisBasarili session anahtarını sunucudan siliyoruz
unset( $_SESSION['girisBasarili'] );
header('Location: giris.php');
exit;