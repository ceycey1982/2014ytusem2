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
        function sifreUret(){
            $karakterler=array(1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k');
            
            $sifre='';
            
            for( $i=0 ; $i<8 ; $i++ ){
                $rastgeleAnahtar = rand( 0, count( $karakterler )-1  );
                $rastgeleKarakter = $karakterler[ $rastgeleAnahtar ];
                
                $sifre .= $rastgeleKarakter;
            }
            
            return $sifre;
        }
        
        echo sifreUret();
        
        ?>
    </body>
</html>
