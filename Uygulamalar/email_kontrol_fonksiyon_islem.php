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
        function emailKontrol( $email ){
            $noktaSirasi=strpos($email, '.');
            
            if($noktaSirasi!=false){
                $noktadanSonraKarakterVarMi=  substr($email, $noktaSirasi+1);
            }
            
            if( strpos($email, '@')!=false && $noktaSirasi!=false && $noktadanSonraKarakterVarMi!=false){
                return true;
            }else{
                return false;
            }
        }
        
        if( isset($_POST['gonder']) ){
            
            if( emailKontrol( $_POST['email'] ) == false ){
                echo 'Girdiğiniz email geçeresiz. : ' . $_POST['email'];
            }else{
                echo 'Girdiğiniz email geçerli. : ' . $_POST['email'];
            }
            
        }
        ?>
    </body>
</html>
