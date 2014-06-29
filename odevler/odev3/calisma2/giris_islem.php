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
        if( isset($_POST['giris']) ){
            if( $_POST['kulad']=='admin' && $_POST['sifre']=='1234' ){
                setcookie('giris',1);
                
                if( isset($_POST['benihatirla']) && $_POST['benihatirla'] == '1' ){
                    setcookie('benihatirla', 1, time()+(30 * 24 * 60 * 60) );
                }
                
                header( 'Location: ozelsayfa.php' );
                exit;
                
                
            }else{
                echo 'Hatalı kullanıcı adı ya da şifre.';
            }
        }
        ?>
    </body>
</html>
