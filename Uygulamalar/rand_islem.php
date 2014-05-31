<?php
if( isset( $_POST['gonder'] ) ){
    echo 'Rastgele sayı: ' . rand($_POST['min'], $_POST['max']);
}