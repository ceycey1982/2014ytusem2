<?php
include './fonksiyonlar.php';
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
        if( isset( $_POST['gonder'] ) ){
            $emailDogrumu=  emailKontrol($_POST['email']);
            
            if( $emailDogrumu ==true ){
                echo 'Email geçerli';
            }else{
                echo 'Email geçersiz';
            }
        }
        ?>
    </body>
</html>
