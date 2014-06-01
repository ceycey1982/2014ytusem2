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
        $not = rand(0, 100);
        
        //0 - 45 arası kalır
        //45 - 55 geçer
        //55 - 70 arası orta
        //70 - 85 arası iyi
        //85 - 100 arası pekiyi
        
        //1 adet if, 3 adet elseif, 1 adet else kullanılacak
        echo 'Not: ' . $not;
        echo '<br>';
        
        if( $not > 0 && $not < 45 ){
            echo 'Kalır';
        }
        
        if( $not > 44 && $not < 55 ){
            echo 'Geçer';
        }
        
        if( $not > 54 && $not < 70 ){
            echo 'Orta';
        }
        
        if( $not > 69 && $not < 85 ){
            echo 'İyi';
        }        
        
        if( $not > 84 && $not < 101 ){
            echo 'Pekiyi';
        }
        ?>
    </body>
</html>
