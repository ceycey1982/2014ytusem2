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
        //form bu sayfaya göndeirldi mi?
        if(isset($_POST['gonder'])){
            //formdan en az bir tatlı seçildi mi?
            $tatlilar = isset( $_POST['tatlilar'] ) ? $_POST['tatlilar'] : array();
            
            echo '<h1>Sevdiğiniz tatlılar: </h1>';
            
            //örneğin $tatlilar = array( 'Kazandibi', 'Baklava' ) olabilir
            foreach ( $tatlilar as $tatliAdi ){
                echo '-' . $tatliAdi . '<br>';
            }

            if(count($tatlilar) == 0 ){
                echo '<p>O kadar kod yazdık bir tatlı seçmediniz, tatlı sevilmez mi yaa..</p>';
            }
        }
        ?>
    </body>
</html>
