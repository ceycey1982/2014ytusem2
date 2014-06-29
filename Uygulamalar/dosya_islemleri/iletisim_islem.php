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
        //form geldi mi?
        if( isset( $_POST['gonder'] ) ){
            $iletisim_formu = $_POST['ad'] . ',' . $_POST['soyad'] . ',' . $_POST['tel'] . ',' . $_POST['mesaj'] . ',' . date('d.m.Y H:i:s');
            
            $dosya = fopen('iletisim.txt', 'a');
            
            fwrite( $dosya, $iletisim_formu . "\n");
            
            fclose($dosya);
            
            echo 'Mesajınız iletilmiştir, teşekkür ederiz.';
        }
        
        ?>
    </body>
</html>
